<?php
/**
 * The main template file
 *
 * @package Novus_Digital
 */

get_header();
?>

  <section class="page-hero">
    <div class="container">
      <h1 class="page-hero-title"><?php single_post_title(); ?></h1>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <?php if (have_posts()) : ?>
        <div style="display: flex; flex-direction: column; gap: 2.5rem; max-width: 860px; margin: 0 auto;">
          <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('trust-card'); ?>>
              <h2 style="font-size: 1.6rem; margin-bottom: 0.5rem;">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>
              <div style="font-size: 0.85rem; color: var(--color-primary-light); margin-bottom: 1rem;">
                <?php echo get_the_date(); ?>
              </div>
              <div style="color: var(--text-secondary); line-height: 1.65; margin-bottom: 1.25rem;">
                <?php the_excerpt(); ?>
              </div>
              <a href="<?php the_permalink(); ?>" class="service-learn-more"><?php esc_html_e('Read Full Article', 'novus-digital'); ?> &rarr;</a>
            </article>
          <?php endwhile; ?>

          <div style="display: flex; justify-content: space-between; margin-top: 2rem;">
            <?php
            the_posts_navigation(array(
                'prev_text' => '&larr; Older Posts',
                'next_text' => 'Newer Posts &rarr;',
            ));
            ?>
          </div>
        </div>
      <?php else : ?>
        <div style="text-align: center; padding: 4rem 1rem;">
          <p><?php esc_html_e('No posts found.', 'novus-digital'); ?></p>
        </div>
      <?php endif; ?>
    </div>
  </section>

<?php
get_footer();
