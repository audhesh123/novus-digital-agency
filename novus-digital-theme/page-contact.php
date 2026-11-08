<?php
/**
 * Template Name: Contact Page
 *
 * @package Novus_Digital
 */

get_header();

$company_email = get_theme_mod('novus_company_email', 'audhesh123@gmail.com');
$company_phone = get_theme_mod('novus_company_phone', '+1 (343) 987-1244');
$company_hours = get_theme_mod('novus_company_hours', 'Mon – Fri: 9:00 AM – 6:00 PM');
$instagram_url = get_theme_mod('novus_instagram_url', 'https://instagram.com');
$facebook_url  = get_theme_mod('novus_facebook_url', 'https://facebook.com');
?>

  <!-- Page Hero -->
  <section class="page-hero">
    <div class="container">
      <div class="section-badge"><?php esc_html_e('Get in Touch', 'novus-digital'); ?></div>
      <h1 class="page-hero-title">Start Your Project With a <span class="gradient-text">Free Quote</span></h1>
      <p class="page-hero-subtitle"><?php esc_html_e('Tell us about your idea or requirements. We will prepare an honest, itemized proposal and timeline within 24 hours.', 'novus-digital'); ?></p>
    </div>
  </section>

  <!-- Contact Form & Info Grid -->
  <section class="section" style="padding-top: 3rem;">
    <div class="container">
      <div class="contact-grid">

        <!-- Form Card -->
        <div class="contact-form-card">
          <h2 style="font-size: 1.75rem; margin-bottom: 0.5rem;"><?php esc_html_e('Request a Project Proposal', 'novus-digital'); ?></h2>
          <p style="margin-bottom: 2rem; font-size: 0.95rem;"><?php esc_html_e('Fill out the form below. Zero obligations, zero spam.', 'novus-digital'); ?></p>

          <form id="novusQuoteForm" action="https://formspree.io/f/xzeeqanb" method="POST" novalidate>
            <!-- Spam Honeypot Field -->
            <div style="display: none;" aria-hidden="true">
              <label for="honeypotWebsite">Do not fill this field</label>
              <input type="text" id="honeypotWebsite" name="website_url_trap" tabindex="-1" autocomplete="off">
            </div>

            <!-- Row 1: Name and Email -->
            <div class="form-row-2">
              <div class="form-group">
                <label for="fullName" class="form-label">
                  <?php esc_html_e('Full Name', 'novus-digital'); ?> <span class="required">*</span>
                </label>
                <input type="text" id="fullName" name="full_name" class="form-control" placeholder="Jane Doe" required>
              </div>

              <div class="form-group">
                <label for="emailAddress" class="form-label">
                  <?php esc_html_e('Email Address', 'novus-digital'); ?> <span class="required">*</span>
                </label>
                <input type="email" id="emailAddress" name="email_address" class="form-control" placeholder="jane@example.com" required>
              </div>
            </div>

            <!-- Row 2: Company and Phone -->
            <div class="form-row-2">
              <div class="form-group">
                <label for="companyName" class="form-label">
                  <?php esc_html_e('Company Name', 'novus-digital'); ?> <span class="optional">(optional)</span>
                </label>
                <input type="text" id="companyName" name="company_name" class="form-control" placeholder="Acme Studio">
              </div>

              <div class="form-group">
                <label for="phoneNumber" class="form-label">
                  <?php esc_html_e('Phone Number', 'novus-digital'); ?> <span class="optional">(optional)</span>
                </label>
                <input type="tel" id="phoneNumber" name="phone_number" class="form-control" placeholder="+1 (555) 000-0000">
              </div>
            </div>

            <!-- Row 3: Service Selection & Preferred Contact Method -->
            <div class="form-row-2">
              <div class="form-group">
                <label for="serviceType" class="form-label">
                  <?php esc_html_e('Service Required', 'novus-digital'); ?> <span class="required">*</span>
                </label>
                <select id="serviceType" name="service_type" class="form-control" required>
                  <option value="website-development">Website Development</option>
                  <option value="wordpress-development">WordPress Development</option>
                  <option value="ecommerce-development">E-commerce Website</option>
                  <option value="web-app-development">Web Application Development</option>
                  <option value="mobile-app-development">Mobile Application Development</option>
                  <option value="ui-ux-design">UI/UX Interface Design</option>
                  <option value="website-redesign">Website Redesign</option>
                  <option value="maintenance-support">Maintenance &amp; Support</option>
                  <option value="product-inquiry">Digital Product Inquiry / Licensing</option>
                  <option value="other-consultation">Other / General Consultation</option>
                </select>
              </div>

              <div class="form-group">
                <label for="contactMethod" class="form-label">
                  <?php esc_html_e('Preferred Contact Method', 'novus-digital'); ?> <span class="optional">(optional)</span>
                </label>
                <select id="contactMethod" name="contact_method" class="form-control">
                  <option value="email">Email</option>
                  <option value="phone">Phone Call</option>
                  <option value="whatsapp">WhatsApp</option>
                </select>
              </div>
            </div>

            <!-- Budget Range Pill Selector -->
            <div class="form-group">
              <label class="form-label">
                <?php esc_html_e('Estimated Budget Range', 'novus-digital'); ?> <span class="optional">(helps us tailor the solution)</span>
              </label>
              <div class="budget-options">
                <label class="budget-option-label">
                  <input type="radio" name="budget_range" value="under-1k" class="budget-option-input">
                  <span class="budget-option-pill">&lt; $1,000</span>
                </label>
                <label class="budget-option-label">
                  <input type="radio" name="budget_range" value="1k-2.5k" class="budget-option-input" checked>
                  <span class="budget-option-pill">$1,000 – $2,500</span>
                </label>
                <label class="budget-option-label">
                  <input type="radio" name="budget_range" value="2.5k-5k" class="budget-option-input">
                  <span class="budget-option-pill">$2,500 – $5,000</span>
                </label>
                <label class="budget-option-label">
                  <input type="radio" name="budget_range" value="5k-plus" class="budget-option-input">
                  <span class="budget-option-pill">$5,000+</span>
                </label>
              </div>
            </div>

            <!-- Project Description -->
            <div class="form-group">
              <label for="projectDesc" class="form-label">
                <?php esc_html_e('Project Description & Goals', 'novus-digital'); ?> <span class="required">*</span>
              </label>
              <textarea id="projectDesc" name="project_description" class="form-control" placeholder="Tell us about what you want to build, any specific features you need, or reference websites you like..." required></textarea>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">
              <?php esc_html_e('Request a Free Quote', 'novus-digital'); ?> &rarr;
            </button>

            <!-- Feedback Message Container -->
            <div id="formFeedback" class="form-feedback" role="alert" aria-live="polite"></div>
          </form>
        </div>

        <!-- Sidebar Info -->
        <div class="contact-info-cards">
          
          <div class="contact-info-card">
            <div class="contact-info-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
            </div>
            <div class="contact-info-content">
              <h4><?php esc_html_e('Email Us Directly', 'novus-digital'); ?></h4>
              <p><?php esc_html_e('For inquiries, RFP documents, or direct proposals:', 'novus-digital'); ?></p>
              <p><a href="mailto:<?php echo esc_attr($company_email); ?>"><?php echo esc_html($company_email); ?></a></p>
            </div>
          </div>

          <div class="contact-info-card">
            <div class="contact-info-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
            </div>
            <div class="contact-info-content">
              <h4><?php esc_html_e('Call or WhatsApp', 'novus-digital'); ?></h4>
              <p><?php esc_html_e('Available during standard business hours:', 'novus-digital'); ?></p>
              <p><a href="tel:<?php echo esc_attr($company_phone); ?>"><?php echo esc_html($company_phone); ?></a></p>
            </div>
          </div>

          <div class="contact-info-card">
            <div class="contact-info-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
            </div>
            <div class="contact-info-content">
              <h4><?php esc_html_e('Business Operating Hours', 'novus-digital'); ?></h4>
              <p><?php echo esc_html($company_hours); ?></p>
              <p style="font-size: 0.8rem; color: var(--color-accent-emerald);">&#10003; <?php esc_html_e('24-hour response on all quote inquiries', 'novus-digital'); ?></p>
            </div>
          </div>

          <div class="contact-info-card">
            <div class="contact-info-icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
            </div>
            <div class="contact-info-content">
              <h4><?php esc_html_e('Follow Our Social Channels', 'novus-digital'); ?></h4>
              <p><?php esc_html_e('Stay up to date with new product releases & insights:', 'novus-digital'); ?></p>
              <div style="display: flex; gap: 0.75rem; margin-top: 0.75rem;">
                <?php if (!empty($instagram_url)) : ?>
                  <a href="<?php echo esc_url($instagram_url); ?>" target="_blank" rel="noopener noreferrer" class="social-icon-btn" aria-label="Instagram">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><rect x="2" y="2" width="20" height="20" rx="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                  </a>
                <?php endif; ?>
                <?php if (!empty($facebook_url)) : ?>
                  <a href="<?php echo esc_url($facebook_url); ?>" target="_blank" rel="noopener noreferrer" class="social-icon-btn" aria-label="Facebook">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                  </a>
                <?php endif; ?>
              </div>
            </div>
          </div>

          <div style="background: rgba(16, 185, 129, 0.08); border: 1px solid rgba(52, 211, 153, 0.25); border-radius: var(--border-radius-md); padding: 1.25rem;">
            <p style="font-size: 0.85rem; color: #34d399; margin: 0; display: flex; align-items: center; gap: 0.5rem;">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <strong><?php esc_html_e('100% Privacy Guarantee:', 'novus-digital'); ?></strong> <?php esc_html_e('Your information is never sold or shared.', 'novus-digital'); ?>
            </p>
          </div>

        </div>

      </div>
    </div>
  </section>

<?php
get_footer();
