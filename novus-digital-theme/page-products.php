<?php
/**
 * Template Name: Products Page
 *
 * @package Novus_Digital
 */

get_header();
$theme_uri = get_template_directory_uri();
?>

  <section class="page-hero">
    <div class="container">
      <div class="section-badge"><?php esc_html_e('Proprietary Software & Assets', 'novus-digital'); ?></div>
      <h1 class="page-hero-title">Our Digital <span class="gradient-text">Products</span></h1>
      <p class="page-hero-subtitle"><?php esc_html_e('Production-tested boilerplates, booking engines, and productivity tools crafted in-house to give your business an unfair head start.', 'novus-digital'); ?></p>
    </div>
  </section>

  <section class="section" style="padding-top: 2rem;">
    <div class="container">
      <div class="filter-tabs">
        <button class="filter-tab active" data-filter="all"><?php esc_html_e('All Products', 'novus-digital'); ?></button>
        <button class="filter-tab" data-filter="saas"><?php esc_html_e('SaaS Boilerplates', 'novus-digital'); ?></button>
        <button class="filter-tab" data-filter="tools"><?php esc_html_e('Business Tools', 'novus-digital'); ?></button>
        <button class="filter-tab" data-filter="templates"><?php esc_html_e('Web Templates', 'novus-digital'); ?></button>
      </div>

      <div class="products-grid">
        <!-- Product 1 -->
        <div class="product-card" data-category="saas" id="saasify">
          <div class="product-image-wrap">
            <span class="product-badge-overlay badge-pill badge-concept"><?php esc_html_e('Sample Product Concept', 'novus-digital'); ?></span>
            <img src="<?php echo esc_url($theme_uri . '/assets/images/product-saas.svg'); ?>" alt="SaaSify Starter Kit Mockup" class="product-mockup-svg" width="400" height="240">
          </div>
          <div class="product-body">
            <span class="product-category"><?php esc_html_e('SaaS Boilerplate', 'novus-digital'); ?></span>
            <h3 class="product-title">SaaSify Starter Kit</h3>
            <p class="product-desc"><?php esc_html_e('The modern stack boilerplate for building and launching profitable micro-SaaS web apps in days instead of months. Full auth, billing, and team tiers included.', 'novus-digital'); ?></p>
            
            <div class="product-features-list">
              <div class="product-feature-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Full TypeScript &amp; Next.js 14 App Router</span></div>
              <div class="product-feature-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Stripe Customer Portal &amp; Webhooks</span></div>
              <div class="product-feature-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Prisma ORM &amp; PostgreSQL Ready</span></div>
              <div class="product-feature-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Clean Dark/Light Admin Dashboard UI</span></div>
            </div>

            <div class="product-actions">
              <a href="<?php echo esc_url(home_url('/contact/?product=saasify&demo=true')); ?>" class="btn btn-outline btn-sm"><?php esc_html_e('Request Live Demo', 'novus-digital'); ?></a>
              <a href="<?php echo esc_url(home_url('/contact/?product=saasify&inquiry=true')); ?>" class="btn btn-primary btn-sm"><?php esc_html_e('Inquire / License', 'novus-digital'); ?></a>
            </div>
          </div>
        </div>

        <!-- Product 2 -->
        <div class="product-card" data-category="tools" id="omnibook">
          <div class="product-image-wrap">
            <span class="product-badge-overlay badge-pill badge-concept"><?php esc_html_e('Sample Product Concept', 'novus-digital'); ?></span>
            <img src="<?php echo esc_url($theme_uri . '/assets/images/product-booking.svg'); ?>" alt="OmniBook Pro Booking Suite Mockup" class="product-mockup-svg" width="400" height="240">
          </div>
          <div class="product-body">
            <span class="product-category"><?php esc_html_e('Business Application', 'novus-digital'); ?></span>
            <h3 class="product-title">OmniBook Pro</h3>
            <p class="product-desc"><?php esc_html_e('All-in-one booking, reservation, and client schedule system. Integrates seamlessly into WordPress or runs as an independent web application.', 'novus-digital'); ?></p>

            <div class="product-features-list">
              <div class="product-feature-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Google &amp; Outlook 2-Way Calendar Sync</span></div>
              <div class="product-feature-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Automated SMS &amp; Email Reminders</span></div>
              <div class="product-feature-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Partial Deposit &amp; Full Upfront Payments</span></div>
              <div class="product-feature-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Staff Availability &amp; Location Control</span></div>
            </div>

            <div class="product-actions">
              <a href="<?php echo esc_url(home_url('/contact/?product=omnibook&demo=true')); ?>" class="btn btn-outline btn-sm"><?php esc_html_e('Request Live Demo', 'novus-digital'); ?></a>
              <a href="<?php echo esc_url(home_url('/contact/?product=omnibook&inquiry=true')); ?>" class="btn btn-primary btn-sm"><?php esc_html_e('Inquire / License', 'novus-digital'); ?></a>
            </div>
          </div>
        </div>

        <!-- Product 3 -->
        <div class="product-card" data-category="tools" id="agencypulse">
          <div class="product-image-wrap">
            <span class="product-badge-overlay badge-pill badge-concept"><?php esc_html_e('Sample Product Concept', 'novus-digital'); ?></span>
            <img src="<?php echo esc_url($theme_uri . '/assets/images/product-portal.svg'); ?>" alt="AgencyPulse Client Portal Mockup" class="product-mockup-svg" width="400" height="240">
          </div>
          <div class="product-body">
            <span class="product-category"><?php esc_html_e('Business Application', 'novus-digital'); ?></span>
            <h3 class="product-title">AgencyPulse Portal</h3>
            <p class="product-desc"><?php esc_html_e('A white-labeled client project hub that lets service agencies give clients a central dashboard for file sharing, milestone approvals, and feedback.', 'novus-digital'); ?></p>

            <div class="product-features-list">
              <div class="product-feature-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>White-Label Custom Domains &amp; Logo</span></div>
              <div class="product-feature-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Interactive Milestone &amp; Kanban Tracker</span></div>
              <div class="product-feature-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Encrypted Asset &amp; Document Vault</span></div>
              <div class="product-feature-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>One-Click Sign-off and Feedback Loops</span></div>
            </div>

            <div class="product-actions">
              <a href="<?php echo esc_url(home_url('/contact/?product=agencypulse&demo=true')); ?>" class="btn btn-outline btn-sm"><?php esc_html_e('Request Live Demo', 'novus-digital'); ?></a>
              <a href="<?php echo esc_url(home_url('/contact/?product=agencypulse&inquiry=true')); ?>" class="btn btn-primary btn-sm"><?php esc_html_e('Inquire / License', 'novus-digital'); ?></a>
            </div>
          </div>
        </div>

        <!-- Product 4 -->
        <div class="product-card" data-category="templates" id="flowsync-template">
          <div class="product-image-wrap">
            <span class="product-badge-overlay badge-pill badge-concept"><?php esc_html_e('Sample Product Concept', 'novus-digital'); ?></span>
            <img src="<?php echo esc_url($theme_uri . '/assets/images/portfolio-landing.svg'); ?>" alt="FlowSync Landing Template" class="product-mockup-svg" width="400" height="240">
          </div>
          <div class="product-body">
            <span class="product-category"><?php esc_html_e('Web Template', 'novus-digital'); ?></span>
            <h3 class="product-title">FlowSync Tech Landing Kit</h3>
            <p class="product-desc"><?php esc_html_e('Ultra-fast, conversion-engineered landing page template optimized for B2B tech products, software agencies, and mobile app launches.', 'novus-digital'); ?></p>

            <div class="product-features-list">
              <div class="product-feature-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Pure HTML/CSS &amp; WordPress Theme Version</span></div>
              <div class="product-feature-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Google Lighthouse 99+ Performance Score</span></div>
              <div class="product-feature-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Pre-built Waitlist &amp; Contact Lead Capture</span></div>
              <div class="product-feature-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>A/B Test Ready Section Architecture</span></div>
            </div>

            <div class="product-actions">
              <a href="<?php echo esc_url(home_url('/contact/?product=flowsync&demo=true')); ?>" class="btn btn-outline btn-sm"><?php esc_html_e('Request Live Demo', 'novus-digital'); ?></a>
              <a href="<?php echo esc_url(home_url('/contact/?product=flowsync&inquiry=true')); ?>" class="btn btn-primary btn-sm"><?php esc_html_e('Inquire / License', 'novus-digital'); ?></a>
            </div>
          </div>
        </div>
      </div>

      <div style="background: rgba(30, 41, 59, 0.5); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: var(--border-radius-lg); padding: 1.75rem; margin-top: 3.5rem; text-align: center;">
        <p style="font-size: 0.925rem; color: var(--text-secondary); margin: 0;">
          <strong style="color: #ffffff;">Note:</strong> Products displayed above represent our active software boilerplates and internal solutions. These are fully customizable and can be licensed, customized, or deployed for your organization via WordPress or dedicated cloud hosting. Contact us to schedule an interactive walkthrough.
        </p>
      </div>
    </div>
  </section>

<?php
get_footer();
