<?php
/**
 * The header template for Novus Digital theme
 *
 * @package Novus_Digital
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- Background Ambient Glow -->
  <div class="bg-glow-sphere bg-glow-sphere-primary" style="top: -100px; left: -100px;"></div>
  <div class="bg-glow-sphere bg-glow-sphere-secondary" style="top: 400px; right: -100px;"></div>

  <!-- Header / Navigation -->
  <header class="site-header" id="siteHeader">
    <div class="container header-container">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-logo" rel="home">
        <?php if (has_custom_logo()) : ?>
          <?php the_custom_logo(); ?>
        <?php else : ?>
          <div class="brand-icon-wrapper">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
              <polyline points="2 17 12 22 22 17"></polyline>
              <polyline points="2 12 12 17 22 12"></polyline>
            </svg>
          </div>
          <div class="brand-text">
            <span class="brand-title"><?php bloginfo('name'); ?></span>
            <span class="brand-tagline"><?php bloginfo('description'); ?></span>
          </div>
        <?php endif; ?>
      </a>

      <!-- Desktop Navigation Menu -->
      <nav class="nav-menu-desktop" aria-label="<?php esc_attr_e('Primary Navigation', 'novus-digital'); ?>">
        <?php
        if (has_nav_menu('primary-menu')) {
            wp_nav_menu(array(
                'theme_location' => 'primary-menu',
                'container'      => false,
                'items_wrap'     => '%3$s',
                'fallback_cb'    => 'novus_default_menu_fallback',
            ));
        } else {
            novus_default_menu_fallback();
        }
        ?>
      </nav>

      <!-- Header Actions: Socials & Primary CTA -->
      <div class="header-actions">
        <div class="header-socials" aria-label="<?php esc_attr_e('Social Media Links', 'novus-digital'); ?>">
          <?php
          $instagram = get_theme_mod('novus_instagram_url', 'https://instagram.com');
          $facebook  = get_theme_mod('novus_facebook_url', 'https://facebook.com');
          if (!empty($instagram)) :
          ?>
            <a href="<?php echo esc_url($instagram); ?>" target="_blank" rel="noopener noreferrer" class="social-icon-btn" aria-label="Instagram">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16">
                <rect x="2" y="2" width="20" height="20" rx="5"></rect>
                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
              </svg>
            </a>
          <?php endif; ?>

          <?php if (!empty($facebook)) : ?>
            <a href="<?php echo esc_url($facebook); ?>" target="_blank" rel="noopener noreferrer" class="social-icon-btn" aria-label="Facebook">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16">
                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
              </svg>
            </a>
          <?php endif; ?>
        </div>

        <?php
        $cta_text = get_theme_mod('novus_cta_btn_text', __('Get a Free Quote', 'novus-digital'));
        $contact_url = home_url('/contact/');
        ?>
        <a href="<?php echo esc_url($contact_url); ?>" class="btn btn-primary btn-sm"><?php echo esc_html($cta_text); ?></a>
      </div>

      <!-- Mobile Hamburger Button -->
      <button class="mobile-nav-toggle" id="mobileNavToggle" aria-label="<?php esc_attr_e('Toggle navigation menu', 'novus-digital'); ?>" aria-expanded="false">
        <span class="hamburger-line"></span>
      </button>
    </div>
  </header>

  <!-- Mobile Drawer Backdrop & Menu -->
  <div class="drawer-backdrop" id="drawerBackdrop"></div>
  <aside class="mobile-drawer" id="mobileDrawer" aria-label="<?php esc_attr_e('Mobile Navigation', 'novus-digital'); ?>">
    <div class="mobile-nav-list">
      <?php
      if (has_nav_menu('primary-menu')) {
          wp_nav_menu(array(
              'theme_location' => 'primary-menu',
              'container'      => false,
              'items_wrap'     => '%3$s',
              'fallback_cb'    => 'novus_mobile_default_menu_fallback',
          ));
      } else {
          novus_mobile_default_menu_fallback();
      }
      ?>
    </div>
    <div class="mobile-drawer-footer">
      <a href="<?php echo esc_url($contact_url); ?>" class="btn btn-primary" style="width: 100%;"><?php echo esc_html($cta_text); ?></a>
    </div>
  </aside>
