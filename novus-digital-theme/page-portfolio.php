<?php
/**
 * Template Name: Portfolio Page
 *
 * @package Novus_Digital
 */

get_header();
$theme_uri = get_template_directory_uri();
?>

  <!-- Page Hero -->
  <section class="page-hero">
    <div class="container">
      <div class="section-badge"><?php esc_html_e('Case Studies & Showcases', 'novus-digital'); ?></div>
      <h1 class="page-hero-title">Our Featured <span class="gradient-text">Work</span></h1>
      <p class="page-hero-subtitle"><?php esc_html_e('Explore real project demonstrations across corporate websites, custom web applications, e-commerce stores, and mobile apps.', 'novus-digital'); ?></p>
    </div>
  </section>

  <!-- Portfolio Gallery Section -->
  <section class="section" style="padding-top: 2rem;">
    <div class="container">

      <!-- Category Filter Tabs -->
      <div class="filter-tabs">
        <button class="filter-tab active" data-filter="all"><?php esc_html_e('All Projects', 'novus-digital'); ?></button>
        <button class="filter-tab" data-filter="business"><?php esc_html_e('Business Websites', 'novus-digital'); ?></button>
        <button class="filter-tab" data-filter="ecommerce"><?php esc_html_e('E-Commerce', 'novus-digital'); ?></button>
        <button class="filter-tab" data-filter="webapp"><?php esc_html_e('Web Applications', 'novus-digital'); ?></button>
        <button class="filter-tab" data-filter="mobile"><?php esc_html_e('Mobile Applications', 'novus-digital'); ?></button>
        <button class="filter-tab" data-filter="landing"><?php esc_html_e('Landing Pages', 'novus-digital'); ?></button>
      </div>

      <!-- Portfolio Grid -->
      <div class="portfolio-grid">

        <!-- 1. Vertex Consulting -->
        <div class="portfolio-card" data-category="business" id="vertex">
          <div class="portfolio-thumb-wrap">
            <span class="portfolio-badge badge-pill badge-concept"><?php esc_html_e('Concept Demonstration', 'novus-digital'); ?></span>
            <img src="<?php echo esc_url($theme_uri . '/assets/images/portfolio-corp.svg'); ?>" alt="Vertex Strategic Consulting Platform" class="portfolio-svg-mockup" width="500" height="300">
          </div>
          <div class="portfolio-info">
            <span class="portfolio-category">Business Website</span>
            <h3 class="portfolio-title">Vertex Strategic Consulting</h3>
            <p class="portfolio-desc"><?php esc_html_e('High-authority corporate advisory web platform with interactive financial audit calculators and client appointment booking.', 'novus-digital'); ?></p>
            <div class="portfolio-tech-tags">
              <span class="tech-tag">WordPress Custom Theme</span>
              <span class="tech-tag">Tailwind CSS</span>
              <span class="tech-tag">PHP</span>
            </div>
            <div class="portfolio-footer">
              <a href="<?php echo esc_url(home_url('/contact/?project_inquiry=vertex')); ?>" class="service-learn-more"><?php esc_html_e('Request Similar Project', 'novus-digital'); ?> &rarr;</a>
              <span class="badge-pill badge-blue">Corporate</span>
            </div>
          </div>
        </div>

        <!-- 2. Aura Lifestyle Store -->
        <div class="portfolio-card" data-category="ecommerce" id="aura">
          <div class="portfolio-thumb-wrap">
            <span class="portfolio-badge badge-pill badge-concept"><?php esc_html_e('Concept Demonstration', 'novus-digital'); ?></span>
            <img src="<?php echo esc_url($theme_uri . '/assets/images/portfolio-ecom.svg'); ?>" alt="Aura Lifestyle & Home E-Commerce" class="portfolio-svg-mockup" width="500" height="300">
          </div>
          <div class="portfolio-info">
            <span class="portfolio-category">E-Commerce</span>
            <h3 class="portfolio-title">Aura Lifestyle &amp; Home</h3>
            <p class="portfolio-desc"><?php esc_html_e('Minimalist, luxury e-commerce storefront featuring instant AJAX cart filtering, Stripe checkout, and automated shipping calculators.', 'novus-digital'); ?></p>
            <div class="portfolio-tech-tags">
              <span class="tech-tag">WooCommerce</span>
              <span class="tech-tag">JavaScript</span>
              <span class="tech-tag">Stripe Payments</span>
            </div>
            <div class="portfolio-footer">
              <a href="<?php echo esc_url(home_url('/contact/?project_inquiry=aura')); ?>" class="service-learn-more"><?php esc_html_e('Request Similar Project', 'novus-digital'); ?> &rarr;</a>
              <span class="badge-pill badge-emerald">E-Commerce</span>
            </div>
          </div>
        </div>

        <!-- 3. CloudMetric Operations App -->
        <div class="portfolio-card" data-category="webapp" id="cloudmetric">
          <div class="portfolio-thumb-wrap">
            <span class="portfolio-badge badge-pill badge-concept"><?php esc_html_e('Concept Demonstration', 'novus-digital'); ?></span>
            <img src="<?php echo esc_url($theme_uri . '/assets/images/portfolio-app.svg'); ?>" alt="CloudMetric Operations App" class="portfolio-svg-mockup" width="500" height="300">
          </div>
          <div class="portfolio-info">
            <span class="portfolio-category">Web Application</span>
            <h3 class="portfolio-title">CloudMetric Operations App</h3>
            <p class="portfolio-desc"><?php esc_html_e('Real-time infrastructure monitoring dashboard with WebSocket data streaming, cluster alerts, and role-based access control.', 'novus-digital'); ?></p>
            <div class="portfolio-tech-tags">
              <span class="tech-tag">React</span>
              <span class="tech-tag">Node.js</span>
              <span class="tech-tag">REST API</span>
              <span class="tech-tag">WebSockets</span>
            </div>
            <div class="portfolio-footer">
              <a href="<?php echo esc_url(home_url('/contact/?project_inquiry=cloudmetric')); ?>" class="service-learn-more"><?php esc_html_e('Request Similar Project', 'novus-digital'); ?> &rarr;</a>
              <span class="badge-pill badge-purple">Web App</span>
            </div>
          </div>
        </div>

        <!-- 4. NovuPay Mobile FinTech -->
        <div class="portfolio-card" data-category="mobile" id="novupay">
          <div class="portfolio-thumb-wrap">
            <span class="portfolio-badge badge-pill badge-concept"><?php esc_html_e('Concept Demonstration', 'novus-digital'); ?></span>
            <img src="<?php echo esc_url($theme_uri . '/assets/images/portfolio-mobile.svg'); ?>" alt="NovuPay Mobile FinTech Interface" class="portfolio-svg-mockup" width="500" height="300">
          </div>
          <div class="portfolio-info">
            <span class="portfolio-category">Mobile Application</span>
            <h3 class="portfolio-title">NovuPay Digital Wallet</h3>
            <p class="portfolio-desc"><?php esc_html_e('Modern iOS & Android financial mobile app featuring instant peer-to-peer transfers, biometric login, and real-time transaction ledger.', 'novus-digital'); ?></p>
            <div class="portfolio-tech-tags">
              <span class="tech-tag">React Native</span>
              <span class="tech-tag">TypeScript</span>
              <span class="tech-tag">Express API</span>
            </div>
            <div class="portfolio-footer">
              <a href="<?php echo esc_url(home_url('/contact/?project_inquiry=novupay')); ?>" class="service-learn-more"><?php esc_html_e('Request Similar Project', 'novus-digital'); ?> &rarr;</a>
              <span class="badge-pill badge-blue">Mobile App</span>
            </div>
          </div>
        </div>

        <!-- 5. FlowSync Landing Page -->
        <div class="portfolio-card" data-category="landing" id="flowsync">
          <div class="portfolio-thumb-wrap">
            <span class="portfolio-badge badge-pill badge-concept"><?php esc_html_e('Concept Demonstration', 'novus-digital'); ?></span>
            <img src="<?php echo esc_url($theme_uri . '/assets/images/portfolio-landing.svg'); ?>" alt="FlowSync Workflow Automation Landing Page" class="portfolio-svg-mockup" width="500" height="300">
          </div>
          <div class="portfolio-info">
            <span class="portfolio-category">Landing Pages</span>
            <h3 class="portfolio-title">FlowSync Workflow Automation</h3>
            <p class="portfolio-desc"><?php esc_html_e('Conversion-engineered SaaS marketing page with interactive product tour nodes, customer lead capture, and instant load performance.', 'novus-digital'); ?></p>
            <div class="portfolio-tech-tags">
              <span class="tech-tag">Vanilla JS</span>
              <span class="tech-tag">CSS3</span>
              <span class="tech-tag">Lighthouse 99</span>
            </div>
            <div class="portfolio-footer">
              <a href="<?php echo esc_url(home_url('/contact/?project_inquiry=flowsync')); ?>" class="service-learn-more"><?php esc_html_e('Request Similar Project', 'novus-digital'); ?> &rarr;</a>
              <span class="badge-pill badge-purple">Landing Page</span>
            </div>
          </div>
        </div>

        <!-- 6. NovuCare Clinic Portal -->
        <div class="portfolio-card" data-category="business" id="novucare">
          <div class="portfolio-thumb-wrap">
            <span class="portfolio-badge badge-pill badge-concept"><?php esc_html_e('Concept Demonstration', 'novus-digital'); ?></span>
            <img src="<?php echo esc_url($theme_uri . '/assets/images/portfolio-health.svg'); ?>" alt="NovuCare Digital Health Clinic Portal" class="portfolio-svg-mockup" width="500" height="300">
          </div>
          <div class="portfolio-info">
            <span class="portfolio-category">Business Website</span>
            <h3 class="portfolio-title">NovuCare Health Clinic</h3>
            <p class="portfolio-desc"><?php esc_html_e('HIPAA-ready patient portal featuring online doctor appointment booking, patient intake forms, and virtual waiting room integration.', 'novus-digital'); ?></p>
            <div class="portfolio-tech-tags">
              <span class="tech-tag">WordPress</span>
              <span class="tech-tag">Custom CPT</span>
              <span class="tech-tag">Telehealth API</span>
            </div>
            <div class="portfolio-footer">
              <a href="<?php echo esc_url(home_url('/contact/?project_inquiry=novucare')); ?>" class="service-learn-more"><?php esc_html_e('Request Similar Project', 'novus-digital'); ?> &rarr;</a>
              <span class="badge-pill badge-emerald">Healthcare</span>
            </div>
          </div>
        </div>

      </div>

      <!-- Demonstration Disclaimer -->
      <div style="background: rgba(30, 41, 59, 0.5); border: 1px solid rgba(255, 255, 255, 0.08); border-radius: var(--border-radius-lg); padding: 1.5rem; margin-top: 3.5rem; text-align: center;">
        <p style="font-size: 0.9rem; color: var(--text-secondary); margin: 0;">
          <strong style="color: #ffffff;">Concept Notice:</strong> In adherence to client confidentiality agreements and our commitment to truthful representation, demonstration items above showcase conceptual architectures and functional systems developed by our engineering team to illustrate capabilities across specific industry verticals.
        </p>
      </div>

    </div>
  </section>

<?php
get_footer();
