#!/usr/bin/env python3
"""
Novus Digital - Local Server with Interactive Email & Quote API Endpoint
Serves static website files and handles /api/send-quote submissions.
Supports direct Gmail SMTP delivery when GMAIL_APP_PASSWORD is set in .env.
"""

import http.server
import socketserver
import json
import urllib.parse
import os
import sys
import datetime
import smtplib
from email.mime.text import MIMEText
from email.mime.multipart import MIMEMultipart

PORT = 8080
DIRECTORY = os.path.dirname(os.path.abspath(__file__))
LEADS_FILE = os.path.join(DIRECTORY, "leads.json")
OUTBOX_LOG = os.path.join(DIRECTORY, "leads_outbox.log")
ENV_FILE = os.path.join(DIRECTORY, ".env")

# Helper to load .env without external dependencies
def load_env():
    env = {}
    if os.path.exists(ENV_FILE):
        try:
            with open(ENV_FILE, "r", encoding="utf-8") as f:
                for line in f:
                    line = line.strip()
                    if line and not line.startswith("#") and "=" in line:
                        k, v = line.split("=", 1)
                        env[k.strip()] = v.strip().strip('"').strip("'")
        except Exception as e:
            print(f"Warning reading .env: {e}")
    return env

env_config = load_env()
RECIPIENT_EMAIL = env_config.get("RECIPIENT_EMAIL") or os.environ.get("RECIPIENT_EMAIL", "audhesh123@gmail.com")
SMTP_HOST = env_config.get("SMTP_HOST") or os.environ.get("SMTP_HOST", "smtp.gmail.com")
SMTP_PORT = int(env_config.get("SMTP_PORT") or os.environ.get("SMTP_PORT", 587))
GMAIL_USER = env_config.get("GMAIL_USER") or env_config.get("SMTP_USER") or os.environ.get("GMAIL_USER", "")
GMAIL_APP_PASSWORD = env_config.get("GMAIL_APP_PASSWORD") or env_config.get("SMTP_PASS") or os.environ.get("GMAIL_APP_PASSWORD", "")

class NovusRequestHandler(http.server.SimpleHTTPRequestHandler):
    def __init__(self, *args, **kwargs):
        super().__init__(*args, directory=DIRECTORY, **kwargs)

    def do_GET(self):
        # Automatically redirect any contact request missing v=fresh
        parsed_url = urllib.parse.urlparse(self.path)
        if parsed_url.path in ["/contact.html", "/contact", "/contact/"]:
            query_params = urllib.parse.parse_qs(parsed_url.query)
            if "v" not in query_params or query_params["v"][0] != "fresh":
                query_params["v"] = ["fresh"]
                new_query = urllib.parse.urlencode(query_params, doseq=True)
                new_path = f"/contact.html?{new_query}"
                self.send_response(302)
                self.send_header("Location", new_path)
                self.send_header("Cache-Control", "no-cache, no-store, must-revalidate")
                self.send_header("Clear-Site-Data", '"cache"')
                self.end_headers()
                return
        return super().do_GET()

    def end_headers(self):
        self.send_header("Cache-Control", "no-cache, no-store, must-revalidate")
        self.send_header("Pragma", "no-cache")
        self.send_header("Expires", "0")
        super().end_headers()

    def do_OPTIONS(self):
        # Enable CORS for local testing
        self.send_response(200)
        self.send_header("Access-Control-Allow-Origin", "*")
        self.send_header("Access-Control-Allow-Methods", "GET, POST, OPTIONS")
        self.send_header("Access-Control-Allow-Headers", "Content-Type, X-Requested-With")
        self.end_headers()

    def do_POST(self):
        if self.path in ["/api/send-quote", "/api/quote", "/send-email"]:
            self.handle_quote_submission()
        else:
            self.send_error(404, "Endpoint Not Found")

    def handle_quote_submission(self):
        # Refresh env in case .env was added/updated while running
        current_env = load_env()
        recipient = current_env.get("RECIPIENT_EMAIL", RECIPIENT_EMAIL)
        smtp_user = current_env.get("GMAIL_USER") or current_env.get("SMTP_USER", GMAIL_USER)
        smtp_pass = current_env.get("GMAIL_APP_PASSWORD") or current_env.get("SMTP_PASS", GMAIL_APP_PASSWORD)
        smtp_host = current_env.get("SMTP_HOST", SMTP_HOST)
        smtp_port = int(current_env.get("SMTP_PORT", SMTP_PORT))

        content_length = int(self.headers.get("Content-Length", 0))
        body = self.rfile.read(content_length)

        # Parse data (JSON or Form URL-encoded)
        data = {}
        content_type = self.headers.get("Content-Type", "")
        if "application/json" in content_type:
            try:
                data = json.loads(body.decode("utf-8"))
            except Exception:
                self.send_json_response(False, "Invalid JSON data received", 400)
                return
        else:
            parsed = urllib.parse.parse_qs(body.decode("utf-8", errors="replace"))
            for key, val in parsed.items():
                data[key] = val[0] if len(val) == 1 else val

        # Extract Fields
        full_name = data.get("full_name") or data.get("fullName") or "Anonymous"
        email_address = data.get("email_address") or data.get("emailAddress") or data.get("email") or ""
        company = data.get("company_name") or data.get("companyName") or "N/A"
        phone = data.get("phone_number") or data.get("phoneNumber") or "N/A"
        service = data.get("service_type") or data.get("serviceType") or "General Inquiry"
        budget = data.get("budget_range") or data.get("budgetRange") or "Flexible"
        contact_method = data.get("contact_method") or data.get("contactMethod") or "Email"
        project_desc = data.get("project_description") or data.get("projectDesc") or data.get("message") or ""

        # Validation
        if not full_name or not email_address or "@" not in email_address:
            self.send_json_response(False, "Please provide a valid name and email address.", 400)
            return

        timestamp = datetime.datetime.now().strftime("%Y-%m-%d %H:%M:%S")

        lead_record = {
            "timestamp": timestamp,
            "full_name": full_name,
            "email_address": email_address,
            "company_name": company,
            "phone_number": phone,
            "service_type": service,
            "budget_range": budget,
            "contact_method": contact_method,
            "project_description": project_desc,
            "recipient": recipient,
            "status": "SENT"
        }

        # 1. Save to leads.json
        leads_list = []
        if os.path.exists(LEADS_FILE):
            try:
                with open(LEADS_FILE, "r", encoding="utf-8") as f:
                    leads_list = json.load(f)
            except Exception:
                leads_list = []
        leads_list.append(lead_record)
        with open(LEADS_FILE, "w", encoding="utf-8") as f:
            json.dump(leads_list, f, indent=2)

        # 2. Append formatted email to outbox log
        email_log_entry = f"""
================================================================================
TIME: {timestamp}
TO: {recipient}
REPLY-TO: {email_address} ({full_name})
SUBJECT: [Free Quote Request] {full_name} - {service}
--------------------------------------------------------------------------------
Client Name:        {full_name}
Client Email:       {email_address}
Company Name:       {company}
Phone Number:       {phone}
Service Requested:  {service}
Estimated Budget:   {budget}
Contact Method:     {contact_method}

Project Goals & Description:
{project_desc}
================================================================================
"""
        with open(OUTBOX_LOG, "a", encoding="utf-8") as f:
            f.write(email_log_entry)

        print(f"\n[NEW QUOTE SUBMISSION] From: {full_name} <{email_address}> | Service: '{service}'")
        print(f"[STORED LOCALLY] Saved to {LEADS_FILE} and {OUTBOX_LOG}")

        # 3. Real Internet SMTP Email Delivery (Gmail / Custom SMTP)
        smtp_sent = False
        smtp_message = ""
        if smtp_user and smtp_pass:
            try:
                print(f"[SMTP DISPATCH] Connecting to {smtp_host}:{smtp_port} as {smtp_user}...")
                msg = MIMEMultipart("alternative")
                msg["Subject"] = f"[Free Quote Request] {full_name} - {service}"
                msg["From"] = f"Novus Digital Quotes <{smtp_user}>"
                msg["To"] = recipient
                msg["Reply-To"] = f"{full_name} <{email_address}>"

                # Text fallback
                text_part = MIMEText(email_log_entry, "plain", "utf-8")
                msg.attach(text_part)

                # HTML Email with modern styling
                html_body = f"""
                <!DOCTYPE html>
                <html>
                <head><meta charset="utf-8"></head>
                <body style="margin: 0; padding: 25px; background-color: #0b1120; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif; color: #f8fafc;">
                  <div style="max-width: 600px; margin: 0 auto; background: #131d33; border: 1px solid #1e293b; border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.6);">
                    <div style="background: linear-gradient(135deg, #2563eb, #38bdf8); padding: 20px 25px;">
                      <h2 style="margin: 0; color: #ffffff; font-size: 20px;">⚡ New Free Quote Request</h2>
                      <p style="margin: 5px 0 0 0; color: rgba(255,255,255,0.85); font-size: 13px;">Received on {timestamp}</p>
                    </div>
                    
                    <div style="padding: 25px;">
                      <table style="width: 100%; border-collapse: collapse; font-size: 14px; margin-bottom: 20px;">
                        <tr style="border-bottom: 1px solid #1e293b;">
                          <td style="padding: 10px 0; color: #94a3b8; width: 140px;">Client Name:</td>
                          <td style="padding: 10px 0; color: #ffffff; font-weight: 600;">{full_name}</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #1e293b;">
                          <td style="padding: 10px 0; color: #94a3b8;">Client Email:</td>
                          <td style="padding: 10px 0;"><a href="mailto:{email_address}" style="color: #38bdf8; text-decoration: none; font-weight: 600;">{email_address}</a></td>
                        </tr>
                        <tr style="border-bottom: 1px solid #1e293b;">
                          <td style="padding: 10px 0; color: #94a3b8;">Company:</td>
                          <td style="padding: 10px 0; color: #ffffff;">{company}</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #1e293b;">
                          <td style="padding: 10px 0; color: #94a3b8;">Phone / WhatsApp:</td>
                          <td style="padding: 10px 0; color: #ffffff;">{phone}</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #1e293b;">
                          <td style="padding: 10px 0; color: #94a3b8;">Service Requested:</td>
                          <td style="padding: 10px 0; color: #34d399; font-weight: 600;">{service}</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #1e293b;">
                          <td style="padding: 10px 0; color: #94a3b8;">Estimated Budget:</td>
                          <td style="padding: 10px 0; color: #ffffff;">{budget}</td>
                        </tr>
                        <tr>
                          <td style="padding: 10px 0; color: #94a3b8;">Preferred Contact:</td>
                          <td style="padding: 10px 0; color: #ffffff;">{contact_method}</td>
                        </tr>
                      </table>

                      <div style="background: #0a0f1d; border-radius: 8px; border-left: 4px solid #2563eb; padding: 15px; margin-bottom: 25px;">
                        <h4 style="margin: 0 0 8px 0; color: #38bdf8; font-size: 14px;">Project Description &amp; Requirements:</h4>
                        <p style="margin: 0; color: #cbd5e1; font-size: 14px; line-height: 1.6; white-space: pre-wrap;">{project_desc}</p>
                      </div>

                      <div style="text-align: center;">
                        <a href="mailto:{email_address}?subject=Re:%20Your%20Novus%20Digital%20Quote%20Request%20-%20{urllib.parse.quote(service)}" style="display: inline-block; padding: 12px 24px; background: #2563eb; color: #ffffff; text-decoration: none; border-radius: 6px; font-weight: 600; font-size: 14px;">
                          ✉️ Click Here to Reply to {full_name}
                        </a>
                      </div>
                    </div>
                  </div>
                </body>
                </html>
                """
                msg.attach(MIMEText(html_body, "html", "utf-8"))

                with smtplib.SMTP(smtp_host, smtp_port, timeout=15) as server:
                    server.starttls()
                    server.login(smtp_user, smtp_pass)
                    server.send_message(msg)
                
                smtp_sent = True
                smtp_message = f"Delivered live to {recipient}"
                print(f"✅ [EMAIL DELIVERED] Real email successfully sent to {recipient} via {smtp_host}!")
            except Exception as e:
                smtp_message = f"SMTP error: {str(e)}"
                print(f"❌ [SMTP ERROR] Could not deliver email via {smtp_host}: {e}")
        else:
            print(f"ℹ️ [SMTP NOTICE] Real internet delivery to {recipient} is waiting for GMAIL_APP_PASSWORD in .env.")
            print(f"   (See .env.example for 3-step setup)")

        # Return success response
        self.send_json_response(
            True,
            f"Quote request logged for {recipient}! We will get back to you within 24 hours.",
            200,
            extra={
                "recipient": recipient,
                "client_name": full_name,
                "service": service,
                "timestamp": timestamp,
                "smtp_dispatched": smtp_sent,
                "smtp_note": smtp_message or "Saved locally; configure .env for live Gmail delivery",
                "outbox_log": "leads_outbox.log"
            }
        )

    def send_json_response(self, success, message, status_code=200, extra=None):
        response_data = {
            "success": success,
            "message": message
        }
        if extra:
            response_data.update(extra)

        encoded = json.dumps(response_data).encode("utf-8")
        self.send_response(status_code)
        self.send_header("Content-Type", "application/json")
        self.send_header("Access-Control-Allow-Origin", "*")
        self.send_header("Content-Length", str(len(encoded)))
        self.end_headers()
        self.wfile.write(encoded)

def run():
    socketserver.TCPServer.allow_reuse_address = True
    with http.server.ThreadingHTTPServer(("", PORT), NovusRequestHandler) as httpd:
        print(f"============================================================")
        print(f"🚀 Novus Digital Server with Live Email API running at:")
        print(f"   Website:    http://localhost:{PORT}")
        print(f"   Quote API:  http://localhost:{PORT}/api/send-quote")
        print(f"   Recipient:  {RECIPIENT_EMAIL}")
        print(f"   Outbox Log: {OUTBOX_LOG}")
        if GMAIL_APP_PASSWORD:
            print(f"   SMTP Status: ✅ Live Gmail Delivery Active ({GMAIL_USER})")
        else:
            print(f"   SMTP Status: ℹ️ Ready (Set GMAIL_APP_PASSWORD in .env to send real emails)")
        print(f"============================================================")
        try:
            httpd.serve_forever()
        except KeyboardInterrupt:
            print("\nShutting down server...")

if __name__ == "__main__":
    run()
