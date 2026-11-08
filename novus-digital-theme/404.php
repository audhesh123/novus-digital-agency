<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Novus_Digital
 */

get_header();
?>

  <section class="section" style="padding-top: calc(var(--header-height) + 5rem); padding-bottom: 6rem;">
    <div class="container">
      <div class="error-page-wrap">
        <div class="error-code">404</div>
        <h1 style="font-size: 2.25rem; margin-bottom: 1rem;"><?php esc_html_e('Page Not Found', 'novus-digital'); ?></h1>
        <p style="font-size: 1.15rem; color: var(--text-secondary); max-width: 540px; margin: 0 auto 2.5rem auto;">
          <?php esc_html_e('The page you are looking for may have been moved, renamed, or is temporarily unavailable. Let\'s get you back on track.', 'novus-digital'); ?>
        </p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary btn-lg">&larr; <?php esc_html_e('Return to Homepage', 'novus-digital'); ?></a>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-secondary btn-lg"><?php esc_html_e('Request a Free Quote', 'novus-digital'); ?></a>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
