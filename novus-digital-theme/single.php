<?php
/**
 * The template for displaying all single posts
 *
 * @package Novus_Digital
 */

get_header();
?>

  <section class="page-hero">
    <div class="container">
      <div class="section-badge"><?php the_category(', '); ?></div>
      <h1 class="page-hero-title"><?php the_title(); ?></h1>
      <p class="page-hero-subtitle"><?php echo get_the_date(); ?> &bull; By <?php the_author(); ?></p>
    </div>
  </section>

  <section class="section" style="padding-top: 3rem;">
    <div class="container">
      <div style="background: var(--gradient-card); border: 1px solid var(--border-light); border-radius: var(--border-radius-xl); padding: 3rem; max-width: 860px; margin: 0 auto;">
        <?php
        while (have_posts()) :
            the_post();
            if (has_post_thumbnail()) :
        ?>
          <div style="margin-bottom: 2rem; border-radius: var(--border-radius-md); overflow: hidden;">
            <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: auto; display: block;')); ?>
          </div>
        <?php
            endif;
            the_content();
        endwhile;
        ?>
        
        <div style="margin-top: 3rem; padding-top: 2rem; border-top: 1px solid rgba(255, 255, 255, 0.08); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-secondary btn-sm">&larr; Back to Home</a>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary btn-sm">Start a Project With Us</a>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
