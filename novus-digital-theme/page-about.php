<?php
/**
 * Template Name: About Us Page
 *
 * @package Novus_Digital
 */

get_header();
?>

  <!-- Page Hero -->
  <section class="page-hero">
    <div class="container">
      <div class="section-badge"><?php esc_html_e('Who We Are', 'novus-digital'); ?></div>
      <h1 class="page-hero-title">Empowering Businesses Through <span class="gradient-text">Accessible Technology</span></h1>
      <p class="page-hero-subtitle"><?php esc_html_e('We build premium, modern digital solutions without the traditional agency inflation.', 'novus-digital'); ?></p>
    </div>
  </section>

  <!-- About Content -->
  <section class="section" style="padding-top: 3rem;">
    <div class="container">

      <!-- Core Narrative Card -->
      <div class="about-narrative-card">
        <div style="max-width: 820px; margin: 0 auto;">
          <h2 style="font-size: 2rem; margin-bottom: 1.5rem;">Company Introduction</h2>
          <p style="font-size: 1.05rem; line-height: 1.75; margin-bottom: 1.5rem;">
            <?php bloginfo('name'); ?> is a dedicated web and software development company founded on a straightforward principle: quality digital products should not be reserved only for enterprises with five-figure agency retainers. We partner with individual entrepreneurs, ambitious startups, local businesses, and growing organizations to design and develop custom websites and application software that convert.
          </p>

          <!-- Core Message Highlight -->
          <div class="core-message-box">
            <p class="core-message-text">
              &ldquo;We believe every business deserves a strong digital presence. Our goal is to make modern website and application development more accessible by combining thoughtful design, reliable technology, and affordable solutions.&rdquo;
            </p>
          </div>

          <p style="font-size: 1.05rem; line-height: 1.75;">
            By utilizing modern development workflows, clean code frameworks, and efficient project staging, we eliminate the unnecessary bureaucracy common in conventional creative agencies. This agility allows us to deliver high-performance, polished digital products at prices small businesses can genuinely afford.
          </p>
        </div>
      </div>

      <!-- Mission & Vision Grid -->
      <div class="grid-2" style="margin-bottom: 4rem;">
        <div style="background: var(--gradient-card); border: 1px solid var(--border-light); border-radius: var(--border-radius-xl); padding: 2.75rem;">
          <div style="width: 48px; height: 48px; border-radius: var(--border-radius-sm); background: rgba(37,99,235,0.15); border: 1px solid rgba(56,189,248,0.25); display: flex; align-items: center; justify-content: center; color: var(--color-primary-light); margin-bottom: 1.25rem;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polygon points="12 6 12 12 16 14"></polygon></svg>
          </div>
          <h3 style="font-size: 1.45rem; margin-bottom: 1rem;"><?php esc_html_e('Our Mission', 'novus-digital'); ?></h3>
          <p style="line-height: 1.7; font-size: 0.95rem;">
            To democratize access to world-class web and app development by providing transparent pricing, personalized service, and reliable engineering. We aim to equip every client with a digital platform that fosters credibility, accelerates sales, and scales sustainably.
          </p>
        </div>

        <div style="background: var(--gradient-card); border: 1px solid var(--border-light); border-radius: var(--border-radius-xl); padding: 2.75rem;">
          <div style="width: 48px; height: 48px; border-radius: var(--border-radius-sm); background: rgba(99,102,241,0.15); border: 1px solid rgba(165,180,252,0.25); display: flex; align-items: center; justify-content: center; color: var(--color-accent-purple); margin-bottom: 1.25rem;">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
          </div>
          <h3 style="font-size: 1.45rem; margin-bottom: 1rem;"><?php esc_html_e('Our Vision', 'novus-digital'); ?></h3>
          <p style="line-height: 1.7; font-size: 0.95rem;">
            To be recognized as the most dependable, honest, and high-value digital partner for growing businesses worldwide, proven by the tangible commercial success of the websites, tools, and digital products we build.
          </p>
        </div>
      </div>

      <!-- Core Values -->
      <div style="margin-bottom: 4rem;">
        <div class="section-header">
          <div class="section-badge"><?php esc_html_e('Principles That Guide Us', 'novus-digital'); ?></div>
          <h2 class="section-title">Our Core <span class="gradient-text">Values</span></h2>
          <p class="section-subtitle"><?php esc_html_e('How we work with each other and how we treat every single client engagement.', 'novus-digital'); ?></p>
        </div>

        <div class="values-grid">
          <div class="value-card">
            <div style="font-size: 1.75rem; margin-bottom: 0.75rem; color: var(--color-primary-light);">&#9881;</div>
            <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem;"><?php esc_html_e('Authentic Craftsmanship', 'novus-digital'); ?></h3>
            <p style="font-size: 0.925rem; color: var(--text-secondary);"><?php esc_html_e('We write clean, efficient, maintainable code and build accessible, aesthetically pleasing user interfaces that stand the test of time.', 'novus-digital'); ?></p>
          </div>

          <div class="value-card">
            <div style="font-size: 1.75rem; margin-bottom: 0.75rem; color: var(--color-accent-emerald);">&#10003;</div>
            <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem;"><?php esc_html_e('Radical Transparency', 'novus-digital'); ?></h3>
            <p style="font-size: 0.925rem; color: var(--text-secondary);"><?php esc_html_e('No hidden fees, no opaque jargon, and no false promises. We deliver clear timelines, honest estimates, and constant communication.', 'novus-digital'); ?></p>
          </div>

          <div class="value-card">
            <div style="font-size: 1.75rem; margin-bottom: 0.75rem; color: var(--color-accent-purple);">&#9733;</div>
            <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem;"><?php esc_html_e('Client-First Dedication', 'novus-digital'); ?></h3>
            <p style="font-size: 0.925rem; color: var(--text-secondary);"><?php esc_html_e('Your business objectives dictate our technical decisions. We are invested in your success well beyond the project launch date.', 'novus-digital'); ?></p>
          </div>
        </div>
      </div>

      <!-- Approach to Affordability & Quality -->
      <div style="background: var(--color-bg-secondary); border: 1px solid var(--border-light); border-radius: var(--border-radius-xl); padding: 3.5rem 3rem;">
        <div style="max-width: 820px; margin: 0 auto;">
          <div class="section-badge" style="margin-bottom: 1rem;"><?php esc_html_e('Our Methodology', 'novus-digital'); ?></div>
          <h2 style="font-size: 2rem; margin-bottom: 1.25rem;"><?php esc_html_e('Our Approach to Affordability and Quality', 'novus-digital'); ?></h2>
          <p style="color: var(--text-secondary); line-height: 1.7; margin-bottom: 1.25rem;">
            Many people wonder how we offer agency-grade designs and custom engineering at affordable prices. The secret lies in our lean, focused operational model:
          </p>
          <ul style="display: flex; flex-direction: column; gap: 1rem; color: var(--text-primary); font-size: 0.95rem; margin-bottom: 2rem;">
            <li style="display: flex; gap: 0.75rem;">
              <span style="color: var(--color-accent-emerald); font-weight: bold;">&#10003;</span>
              <span><strong>Zero Bureaucratic Bloat:</strong> You communicate directly with the developers and designers executing your vision, eliminating layers of costly non-technical middlemen.</span>
            </li>
            <li style="display: flex; gap: 0.75rem;">
              <span style="color: var(--color-accent-emerald); font-weight: bold;">&#10003;</span>
              <span><strong>Modern Tooling &amp; Modular Foundations:</strong> By leveraging modern component architectures and our proprietary starter boilerplates, we complete foundation work in hours rather than weeks.</span>
            </li>
            <li style="display: flex; gap: 0.75rem;">
              <span style="color: var(--color-accent-emerald); font-weight: bold;">&#10003;</span>
              <span><strong>Predictable Fixed-Price Contracts:</strong> We define the scope rigorously upfront so you know exactly what you are paying before a single line of code is produced.</span>
            </li>
          </ul>

          <div style="text-align: center; padding-top: 1.5rem; border-top: 1px solid rgba(255, 255, 255, 0.08);">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary btn-lg"><?php esc_html_e('Work With Us On Your Next Project', 'novus-digital'); ?> &rarr;</a>
          </div>
        </div>
      </div>

    </div>
  </section>

<?php
get_footer();
