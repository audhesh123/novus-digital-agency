<?php
/**
 * The template for displaying all single pages
 *
 * @package Novus_Digital
 */

get_header();
?>

  <section class="page-hero">
    <div class="container">
      <h1 class="page-hero-title"><?php the_title(); ?></h1>
    </div>
  </section>

  <section class="section" style="padding-top: 3rem;">
    <div class="container">
      <div style="background: var(--gradient-card); border: 1px solid var(--border-light); border-radius: var(--border-radius-xl); padding: 3rem; max-width: 900px; margin: 0 auto;">
        <?php
        while (have_posts()) :
            the_post();
            the_content();
        endwhile;
        ?>
      </div>
    </div>
  </section>

<?php
get_footer();
