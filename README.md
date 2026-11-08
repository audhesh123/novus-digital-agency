# Novus Digital Agency 🚀

[![Status](https://img.shields.io/badge/Status-Production%20Ready-emerald?style=for-the-badge)](https://github.com/audhesh123/novus-digital-agency)
[![WordPress](https://img.shields.io/badge/WordPress-5.8%20--%206.7+-21759b?style=for-the-badge&logo=wordpress&logoColor=white)](https://wordpress.org)
[![PHP](https://img.shields.io/badge/PHP-7.4%2B-777bb4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![Python](https://img.shields.io/badge/Python-3.8%2B-3776ab?style=for-the-badge&logo=python&logoColor=white)](https://python.org)
[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg?style=for-the-badge)](LICENSE)

> **Modern, affordable website and app development platform.** Designed for startups, entrepreneurs, and growing businesses seeking state-of-the-art digital experiences at accessible, flat-rate pricing.

---

## 🌟 Overview

**Novus Digital** is a complete, dual-architecture digital agency web platform engineered for high conversion rates, modern aesthetics, and seamless lead generation. It includes:

1. **Standalone Production Web Application**: Lightweight, dependency-free static site powered by semantic HTML5, pure CSS3 design tokens, and modular vanilla JavaScript.
2. **Interactive Lead & Quote Engine**: Real-time project cost calculator and interactive quotation form with automatic JSON storage and live Gmail SMTP email dispatch.
3. **Turnkey WordPress Theme (`novus-digital-theme`)**: A standalone, uploadable custom WordPress theme (`.zip`) with Custom Post Types (CPT), Customizer controls, and AJAX lead processing.
4. **Local Development Server**: Zero-dependency Python server with built-in API routing and email delivery testing.

---

## ✨ Key Features

- 🎨 **Futuristic Design System**: Deep slate dark mode, glowing accents, glassmorphic cards, and smooth micro-animations.
- 📱 **100% Responsive & Accessible**: Fluid typography, mobile navigation drawer, and WCAG AA contrast compliance.
- 💡 **Interactive Quote Calculator**: Dynamic price estimation for websites, web/mobile apps, UI/UX, and maintenance plans.
- 📧 **Direct SMTP / Gmail Email Dispatch**: Instant lead routing to client inbox with structured HTML email templates.
- 📂 **Multi-Filter Portfolio & Products**: Dynamic filtering across SaaS, E-commerce, Healthcare, Corporate, and Mobile App showcases.
- ⚡ **Zero Framework Overhead**: Ultra-fast loading speeds without bulky CSS/JS frameworks.
- 🔌 **WordPress Ready**: Includes Custom Post Types for `portfolio` and `product`, admin lead inbox, and WordPress Customizer integration.

---

## 📁 Repository Structure

```text
├── index.html                   # High-converting homepage
├── services.html                # Detailed services catalog (8 core disciplines)
├── products.html                # Digital tools & SaaS products catalog
├── portfolio.html               # Filterable client work & case studies
├── about.html                   # Mission, team, values, and company vision
├── contact.html                 # Quote calculator and project inquiry form
├── privacy-policy.html          # GDPR & transparent privacy documentation
├── 404.html                     # Custom 404 error page
├── server.py                    # Local Python server with /api/send-quote endpoint
├── leads.json                   # Structured persistent lead database
├── .env.example                 # Environment configuration template
│
├── assets/
│   ├── css/
│   │   └── main.css             # Unified modern CSS design system & tokens
│   ├── js/
│   │   └── main.js              # Navigation, calculators, filters & AJAX forms
│   └── images/                  # High-resolution vector mockups & SVG assets
│
├── novus-digital-theme/         # Complete WordPress custom theme
│   ├── style.css                # Theme headers & responsive WP classes
│   ├── functions.php            # Asset enqueuing, menus, and AJAX hooks
│   ├── front-page.php           # Front page template
│   ├── page-*.php               # Dedicated page templates
│   ├── inc/                     # Customizer, CPT, and AJAX contact modules
│   └── screenshot.png           # WordPress theme browser preview
├── novus-digital-theme.zip       # Ready-to-upload WordPress theme archive
│
└── docs/
    └── TECHNICAL_AND_FUNCTIONAL_DOCUMENT.md  # Comprehensive 500+ line architecture spec
```

---

## 🚀 Quick Start (Run Locally)

You can run the full website and quotation API locally with **Python 3** (no external package dependencies required):

```bash
# 1. Clone the repository
git clone https://github.com/audhesh123/novus-digital-agency.git
cd novus-digital-agency

# 2. Start the local server
python3 server.py
```

Open your browser to:
- 🌐 **Website**: [http://localhost:8080](http://localhost:8080)
- 📬 **Interactive Quote API**: `http://localhost:8080/api/send-quote`

---

## ⚙️ Email & SMTP Setup (Optional)

By default, quote requests and contact form submissions are automatically saved locally to `leads.json` and logged to `leads_outbox.log`.

To enable **live Gmail delivery**:

1. Copy `.env.example` to `.env`:
   ```bash
   cp .env.example .env
   ```
2. Open `.env` and configure your credentials:
   ```ini
   RECIPIENT_EMAIL=audhesh123@gmail.com
   GMAIL_USER=your-email@gmail.com
   GMAIL_APP_PASSWORD=your-16-character-google-app-password
   ```
3. Restart `server.py` — lead submissions will immediately trigger real-time HTML notifications to your inbox.

---

## 📦 WordPress Theme Deployment

To deploy the **Novus Digital WordPress Theme**:

### Option 1: WordPress Admin Upload (Recommended)
1. Go to your WordPress Dashboard &rarr; **Appearance** &rarr; **Themes**.
2. Click **Add New** &rarr; **Upload Theme**.
3. Select `novus-digital-theme.zip` and click **Install Now**.
4. Click **Activate**.

### Option 2: Direct Directory Upload
Copy the `novus-digital-theme/` folder into your server's `wp-content/themes/` directory, then activate it from the WordPress dashboard.

---

## 🛠️ Technology Stack

| Layer | Technologies |
| :--- | :--- |
| **Front-End** | Semantic HTML5, Vanilla CSS3 (Design Tokens & Grid/Flexbox), ES6+ JavaScript |
| **Icons & Media** | Handcrafted SVG Vectors & Lucide Icons |
| **Typography** | [Plus Jakarta Sans](https://fonts.google.com/specimen/Plus+Jakarta+Sans) & [Inter](https://fonts.google.com/specimen/Inter) |
| **Backend & API** | Python 3 (`http.server`, `socketserver`, `smtplib`) |
| **CMS** | WordPress 5.8 – 6.7+ (Custom Post Types, Theme Customizer API, AJAX Hooks) |

---

## 📄 Documentation

For deep technical insights, database schemas, component architecture, and conversion optimization strategies, refer to the [Technical and Functional Specification Document](docs/TECHNICAL_AND_FUNCTIONAL_DOCUMENT.md).

---

## 👤 Author & Support

- **Author**: Vicky Dubey / Novus Digital Team
- **GitHub**: [@audhesh123](https://github.com/audhesh123)
- **Email**: [audhesh123@gmail.com](mailto:audhesh123@gmail.com)

---

## 📜 License

This project is licensed under the [MIT License](LICENSE) — feel free to customize and deploy for your own business or client projects.
