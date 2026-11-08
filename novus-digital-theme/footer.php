<?php
/**
 * The template for displaying the footer
 *
 * @package Novus_Digital
 */

$company_email = get_theme_mod('novus_company_email', 'audhesh123@gmail.com');
$company_phone = get_theme_mod('novus_company_phone', '+1 (343) 987-1244');
$company_hours = get_theme_mod('novus_company_hours', 'Mon – Fri: 9:00 AM – 6:00 PM');
$instagram_url = get_theme_mod('novus_instagram_url', 'https://instagram.com');
$facebook_url  = get_theme_mod('novus_facebook_url', 'https://facebook.com');
?>
  <!-- Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <!-- Col 1: Brand Info -->
        <div>
          <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-logo">
            <div class="brand-icon-wrapper">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                <polyline points="2 17 12 22 22 17"></polyline>
                <polyline points="2 12 12 17 22 12"></polyline>
              </svg>
            </div>
            <div class="brand-text">
              <span class="brand-title"><?php bloginfo('name'); ?></span>
            </div>
          </a>
          <p class="footer-col-desc">
            <?php esc_html_e('Helping startups, entrepreneurs, and growing businesses build attractive, modern digital products at accessible, affordable prices.', 'novus-digital'); ?>
          </p>
          <div class="header-socials">
            <?php if (!empty($instagram_url)) : ?>
              <a href="<?php echo esc_url($instagram_url); ?>" target="_blank" rel="noopener noreferrer" class="social-icon-btn" aria-label="Instagram">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16">
                  <rect x="2" y="2" width="20" height="20" rx="5"></rect>
                  <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                  <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                </svg>
              </a>
            <?php endif; ?>
            <?php if (!empty($facebook_url)) : ?>
              <a href="<?php echo esc_url($facebook_url); ?>" target="_blank" rel="noopener noreferrer" class="social-icon-btn" aria-label="Facebook">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16">
                  <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                </svg>
              </a>
            <?php endif; ?>
          </div>
        </div>

        <!-- Col 2: Quick Links -->
        <div>
          <h4 class="footer-heading"><?php esc_html_e('Quick Navigation', 'novus-digital'); ?></h4>
          <div class="footer-links-list">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="footer-link"><?php esc_html_e('Home', 'novus-digital'); ?></a>
            <a href="<?php echo esc_url(home_url('/services/')); ?>" class="footer-link"><?php esc_html_e('Our Services', 'novus-digital'); ?></a>
            <a href="<?php echo esc_url(home_url('/products/')); ?>" class="footer-link"><?php esc_html_e('Our Products', 'novus-digital'); ?></a>
            <a href="<?php echo esc_url(home_url('/portfolio/')); ?>" class="footer-link"><?php esc_html_e('Our Portfolio', 'novus-digital'); ?></a>
            <a href="<?php echo esc_url(home_url('/about/')); ?>" class="footer-link"><?php esc_html_e('About Us', 'novus-digital'); ?></a>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="footer-link"><?php esc_html_e('Contact Us', 'novus-digital'); ?></a>
          </div>
        </div>

        <!-- Col 3: Services Links -->
        <div>
          <h4 class="footer-heading"><?php esc_html_e('Services', 'novus-digital'); ?></h4>
          <div class="footer-links-list">
            <a href="<?php echo esc_url(home_url('/services/#website-development')); ?>" class="footer-link"><?php esc_html_e('Website Development', 'novus-digital'); ?></a>
            <a href="<?php echo esc_url(home_url('/services/#wordpress-development')); ?>" class="footer-link"><?php esc_html_e('WordPress Development', 'novus-digital'); ?></a>
            <a href="<?php echo esc_url(home_url('/services/#ecommerce-development')); ?>" class="footer-link"><?php esc_html_e('E-commerce Solutions', 'novus-digital'); ?></a>
            <a href="<?php echo esc_url(home_url('/services/#app-development')); ?>" class="footer-link"><?php esc_html_e('Web & Mobile Apps', 'novus-digital'); ?></a>
            <a href="<?php echo esc_url(home_url('/services/#ui-ux-design')); ?>" class="footer-link"><?php esc_html_e('UI/UX Interface Design', 'novus-digital'); ?></a>
            <a href="<?php echo esc_url(home_url('/services/#maintenance-support')); ?>" class="footer-link"><?php esc_html_e('Maintenance & Support', 'novus-digital'); ?></a>
          </div>
        </div>

        <!-- Col 4: Contact & Inquiries -->
        <div>
          <h4 class="footer-heading"><?php esc_html_e('Get in Touch', 'novus-digital'); ?></h4>
          <div class="footer-links-list">
            <?php if (!empty($company_email)) : ?>
              <div class="footer-link" style="cursor: default;">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                <span><?php echo esc_html($company_email); ?></span>
              </div>
            <?php endif; ?>

            <?php if (!empty($company_phone)) : ?>
              <div class="footer-link" style="cursor: default;">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                <span><?php echo esc_html($company_phone); ?></span>
              </div>
            <?php endif; ?>

            <?php if (!empty($company_hours)) : ?>
              <div class="footer-link" style="cursor: default;">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                <span><?php echo esc_html($company_hours); ?></span>
              </div>
            <?php endif; ?>
          </div>
          <div style="margin-top: 1.5rem;">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-outline btn-sm" style="width: 100%;">
              <?php esc_html_e('Request Free Consultation', 'novus-digital'); ?>
            </a>
          </div>
        </div>
      </div>

      <!-- Footer Bottom -->
      <div class="footer-bottom">
        <div>
          &copy; <?php echo esc_html(date_i18n('Y')); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('All rights reserved.', 'novus-digital'); ?>
        </div>
        <div class="footer-bottom-links">
          <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>"><?php esc_html_e('Privacy Policy', 'novus-digital'); ?></a>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>"><?php esc_html_e('Terms & Support', 'novus-digital'); ?></a>
        </div>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
