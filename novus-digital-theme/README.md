# Novus Digital — Modern & Affordable Website & App Development Theme

**Version:** 1.0.0  
**Author:** Novus Digital Team  
**Requires WordPress:** 5.8+  
**Tested up to:** 6.7  
**PHP Version:** 7.4+  

---

## 🚀 Theme Overview

**Novus Digital** is a high-performance, conversion-engineered WordPress theme built specifically for website and mobile application development agencies, software companies, and digital studios delivering modern services at accessible prices.

The theme communicates three core pillars:
1. **Modern and attractive digital experiences.**
2. **Affordable solutions for businesses of all sizes.**
3. **Reliable development, professional quality, and friendly customer support.**

---

## 📦 What's Included

- **`style.css`**: Standard WordPress theme header with responsive utilities and WP core layout classes.
- **`functions.php`**: Enqueues modern Google Fonts (Inter, Plus Jakarta Sans), core styles, and vanilla JS; registers navigation menus, custom logo, theme supports, and localized AJAX handlers.
- **`front-page.php`**: Complete high-converting homepage featuring:
  - Hero with strong headline and layered interactive visual mockups.
  - Trust & Value section highlighting flat-rate pricing, custom designs, and speed.
  - Services Preview cards for Website Development, Web/App Dev, UI/UX, and Maintenance.
  - Products Preview showcasing in-house tools and boilerplates.
  - Portfolio Showcase with category filters.
  - 4-Step Process timeline (Discover, Plan & Design, Build & Test, Launch & Support).
  - Why Choose Us comparison table.
  - FAQ interactive accordion covering all 8 client questions.
  - Final Call-to-Action banner.
- **`page-services.php`**: Comprehensive breakdown of all 8 core services with deliverables, audience, key benefits, and project inquiry links.
- **`page-products.php`**: Filterable product catalog for proprietary software, SaaS starter kits, and business tools.
- **`page-portfolio.php`**: Multi-category portfolio showcase with interactive tabs and demonstration concept notices.
- **`page-about.php`**: Company introduction, mission, vision, values, and approach to affordability & quality.
- **`page-contact.php`**: Interactive quote request form with field validation, budget range selector, preferred contact method, spam honeypot, and secure AJAX submission.
- **`page-privacy-policy.php`**: Complete, transparent privacy policy covering data protection and GDPR/cookie guidelines.
- **`404.php`**: Clean, helpful error page.
- **`inc/customizer.php`**: Live WordPress Customizer controls for phone number, email address, operating hours, Facebook/Instagram links, and hero headlines.
- **`inc/cpt.php`**: Custom Post Types for `portfolio` (Portfolio Projects) and `product` (Digital Products) with taxonomies.
- **`inc/ajax-contact.php`**: Handles AJAX quote submissions, verifies security nonces, checks honeypots, dispatches email via `wp_mail()`, and saves leads to WordPress Admin under **Quote Requests** so no inquiries are lost.

---

## 🛠️ Installation Instructions

### Method 1: Uploading the ZIP via WordPress Admin (Recommended)
1. In your WordPress Admin dashboard, navigate to **Appearance > Themes**.
2. Click the **Add New** button at the top, then click **Upload Theme**.
3. Choose the `novus-digital-theme.zip` file and click **Install Now**.
4. Once uploaded, click **Activate**.

### Method 2: Manual FTP / File Manager Upload
1. Extract `novus-digital-theme.zip` on your computer.
2. Upload the `novus-digital-theme` folder to your WordPress installation's `wp-content/themes/` directory.
3. In WP Admin, navigate to **Appearance > Themes** and click **Activate** under **Novus Digital**.

---

## ⚙️ Initial Configuration & Setup

### 1. Setting Up the Homepage and Pages
1. Go to **Pages > Add New** and create the following pages:
   - **Home**: Assign the default or Front Page template.
   - **Our Services**: In Page Attributes, select template **Services Page**.
   - **Our Products**: In Page Attributes, select template **Products Page**.
   - **Our Portfolio**: In Page Attributes, select template **Portfolio Page**.
   - **About Us**: In Page Attributes, select template **About Us Page**.
   - **Contact Us**: In Page Attributes, select template **Contact Page**.
   - **Privacy Policy**: In Page Attributes, select template **Privacy Policy**.
2. Go to **Settings > Reading**.
3. Under **Your homepage displays**, select **A static page**.
4. Set **Homepage** to your **Home** page.
5. Click **Save Changes**.

### 2. Configuring Navigation Menus
1. Go to **Appearance > Menus**.
2. Create a new menu named `Primary Menu`.
3. Add Home, Our Services, Our Products, Our Portfolio, About Us, and Contact Us.
4. Under **Menu Settings > Display location**, check **Primary Navigation Menu**.
5. Save the menu.

### 3. Customizing Company Information & Socials
1. Go to **Appearance > Customize**.
2. Click on **Company Information & Socials**:
   - Update your **Company Email Address** (this is where quote submissions are delivered).
   - Update your **Company Phone Number**.
   - Update your **Business Operating Hours**.
   - Enter your **Instagram Profile URL** and **Facebook Page URL**.
3. Click on **Homepage Hero Settings** to customize headlines or CTA button text if desired.
4. Click **Publish**.

---

## 📬 Quote Form & Lead Management

The quote and inquiry form on the Contact page is fully operational:
- **Instant Client Feedback**: Visitors receive immediate confirmation upon submitting their request without a full page reload.
- **WP Admin Lead Storage**: Every submission is securely saved in WP Admin under the **Quote Requests** menu item, ensuring you never miss a lead even if host SMTP is offline.
- **Email Notifications**: An automated notification is simultaneously dispatched to your configured company email via `wp_mail()`. To ensure optimal email deliverability on shared hosting, we recommend installing a free SMTP plugin such as **WP Mail SMTP** or **FluentSMTP**.

---

## 🛒 WooCommerce Integration
If you intend to sell digital software products or physical items directly on the site:
1. Install and activate the official **WooCommerce** plugin from **Plugins > Add New**.
2. The theme automatically detects WooCommerce and declares theme support without conflicts.
3. Configure your Stripe or PayPal credentials in **WooCommerce > Settings > Payments**.

---

## 🔒 Security Best Practices Implemented
- Strict sanitization on all user inputs via `sanitize_text_field`, `sanitize_email`, and `sanitize_textarea_field`.
- Nonce protection on form submissions to prevent Cross-Site Request Forgery (CSRF).
- Honeypot anti-spam trap rejecting automated bot requests.
- Standard WordPress escaping with `esc_html`, `esc_url`, `esc_attr`, and `wp_kses_post`.
