<?php
/**
 * The front-page template for Novus Digital
 *
 * @package Novus_Digital
 */

get_header();

$hero_headline = get_theme_mod('novus_hero_headline', 'Beautiful Websites. Powerful Apps. Affordable Prices.');
$hero_subtext  = get_theme_mod('novus_hero_subtext', 'We help startups, entrepreneurs, and growing businesses turn their ideas into modern digital experiences without breaking the budget.');
$theme_uri     = get_template_directory_uri();
?>

  <!-- 1. Hero Section -->
  <section class="section hero-section" id="hero">
    <div class="container">
      <div class="hero-grid">
        <div class="hero-content">
          <div class="section-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"></path>
            </svg>
            <?php esc_html_e('Affordable Digital Excellence', 'novus-digital'); ?>
          </div>
          <h1 class="hero-title"><?php echo wp_kses_post($hero_headline); ?></h1>
          <p class="hero-description"><?php echo esc_html($hero_subtext); ?></p>
          
          <div class="hero-cta-group">
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary btn-lg btn-icon-right">
              <?php esc_html_e('Get a Free Quote', 'novus-digital'); ?>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </a>
            <a href="<?php echo esc_url(home_url('/services/')); ?>" class="btn btn-secondary btn-lg">
              <?php esc_html_e('Explore Our Services', 'novus-digital'); ?>
            </a>
          </div>

          <div class="hero-guarantee">
            <div class="guarantee-item">
              <svg class="guarantee-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span><?php esc_html_e('100% Transparent Quotes', 'novus-digital'); ?></span>
            </div>
            <div class="guarantee-item">
              <svg class="guarantee-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span><?php esc_html_e('No Hidden Fees', 'novus-digital'); ?></span>
            </div>
            <div class="guarantee-item">
              <svg class="guarantee-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
              <span><?php esc_html_e('Reliable Support', 'novus-digital'); ?></span>
            </div>
          </div>
        </div>

        <!-- Hero Visual Mockup -->
        <div class="hero-visual">
          <div class="visual-canvas">
            <img src="<?php echo esc_url($theme_uri . '/assets/images/hero-mockup.svg'); ?>" alt="<?php esc_attr_e('Responsive web and app dashboard mockup', 'novus-digital'); ?>" width="600" height="420" style="width: 100%; height: auto;">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 2. Trust and Value Section -->
  <section class="section section-dark-secondary" id="value">
    <div class="container">
      <div class="section-header">
        <div class="section-badge"><?php esc_html_e('Why Partner With Us', 'novus-digital'); ?></div>
        <h2 class="section-title">Big Agency Quality. <span class="gradient-text">Accessible Prices.</span></h2>
        <p class="section-subtitle"><?php esc_html_e('We remove unnecessary agency overhead so you get direct access to seasoned developers, tailor-made designs, and transparent pricing.', 'novus-digital'); ?></p>
      </div>

      <div class="trust-cards-grid">
        <div class="trust-card">
          <div class="trust-icon-box">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
          </div>
          <h3 class="trust-card-title"><?php esc_html_e('Affordable & Transparent Pricing', 'novus-digital'); ?></h3>
          <p class="trust-card-desc"><?php esc_html_e('Clear, flat-rate quotes without surprise fees or bloated agency markups. High quality code within your real budget.', 'novus-digital'); ?></p>
        </div>

        <div class="trust-card">
          <div class="trust-icon-box">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="m4.93 4.93 4.24 4.24"></path><path d="m14.83 9.17 4.24-4.24"></path><path d="m14.83 14.83 4.24 4.24"></path><path d="m9.17 14.83-4.24 4.24"></path></svg>
          </div>
          <h3 class="trust-card-title"><?php esc_html_e('Modern, Customized Designs', 'novus-digital'); ?></h3>
          <p class="trust-card-desc"><?php esc_html_e('Every brand is unique. We craft custom interfaces specifically tailored to your brand identity, audience, and goals.', 'novus-digital'); ?></p>
        </div>

        <div class="trust-card">
          <div class="trust-icon-box">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
          </div>
          <h3 class="trust-card-title"><?php esc_html_e('Mobile-Friendly & Responsive', 'novus-digital'); ?></h3>
          <p class="trust-card-desc"><?php esc_html_e('Over 60% of web traffic is mobile. We build with a mobile-first philosophy, ensuring flawless rendering on all screens.', 'novus-digital'); ?></p>
        </div>

        <div class="trust-card">
          <div class="trust-icon-box">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
          </div>
          <h3 class="trust-card-title"><?php esc_html_e('Fast & Efficient Development', 'novus-digital'); ?></h3>
          <p class="trust-card-desc"><?php esc_html_e('Agile development cycles that get your product to market quickly without sacrificing security or visual polish.', 'novus-digital'); ?></p>
        </div>

        <div class="trust-card">
          <div class="trust-icon-box">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
          </div>
          <h3 class="trust-card-title"><?php esc_html_e('SEO-Friendly Foundations', 'novus-digital'); ?></h3>
          <p class="trust-card-desc"><?php esc_html_e('Semantic HTML, structured metadata, clean URLs, and ultra-fast load times help your business rank on search engines.', 'novus-digital'); ?></p>
        </div>

        <div class="trust-card">
          <div class="trust-icon-box">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
          </div>
          <h3 class="trust-card-title"><?php esc_html_e('Friendly & Ongoing Support', 'novus-digital'); ?></h3>
          <p class="trust-card-desc"><?php esc_html_e('You are never left alone after launch. We provide reliable maintenance, technical updates, and direct developer communication.', 'novus-digital'); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- 3. Our Services Preview Section -->
  <section class="section" id="services">
    <div class="container">
      <div class="section-header">
        <div class="section-badge"><?php esc_html_e('Full-Spectrum Capabilities', 'novus-digital'); ?></div>
        <h2 class="section-title">Everything You Need to <span class="gradient-text">Grow Online</span></h2>
        <p class="section-subtitle"><?php esc_html_e('From high-converting landing pages to complex custom applications, we deliver robust solutions ready to scale.', 'novus-digital'); ?></p>
      </div>

      <div class="services-grid">
        <!-- Service Card 1: Website Development -->
        <div class="service-card">
          <div>
            <div class="service-card-header">
              <div class="service-icon-box">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
              </div>
              <span class="badge-pill badge-blue"><?php esc_html_e('Popular', 'novus-digital'); ?></span>
            </div>
            <h3 class="service-card-title"><?php esc_html_e('Website Development', 'novus-digital'); ?></h3>
            <p class="service-card-desc"><?php esc_html_e('Custom, responsive websites built to elevate your brand presence and convert visitors into paying clients.', 'novus-digital'); ?></p>
            
            <div class="service-sublist">
              <div class="service-subitem"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Business Websites</span></div>
              <div class="service-subitem"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Landing Pages</span></div>
              <div class="service-subitem"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Portfolio Websites</span></div>
              <div class="service-subitem"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>E-commerce Stores</span></div>
              <div class="service-subitem"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>WordPress Themes</span></div>
              <div class="service-subitem"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Site Redesign</span></div>
            </div>
          </div>
          <div class="service-card-footer">
            <a href="<?php echo esc_url(home_url('/services/#website-development')); ?>" class="service-learn-more">
              <?php esc_html_e('Learn More', 'novus-digital'); ?> &rarr;
            </a>
            <a href="<?php echo esc_url(home_url('/contact/?service=website-dev')); ?>" class="btn btn-secondary btn-sm"><?php esc_html_e('Get Quote', 'novus-digital'); ?></a>
          </div>
        </div>

        <!-- Service Card 2: Web & Mobile App Development -->
        <div class="service-card">
          <div>
            <div class="service-card-header">
              <div class="service-icon-box">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect><line x1="12" y1="18" x2="12.01" y2="18"></line></svg>
              </div>
              <span class="badge-pill badge-purple"><?php esc_html_e('High Performance', 'novus-digital'); ?></span>
            </div>
            <h3 class="service-card-title"><?php esc_html_e('Web & Mobile App Development', 'novus-digital'); ?></h3>
            <p class="service-card-desc"><?php esc_html_e('Feature-rich web applications, internal business tools, and mobile experiences built with scalable tech.', 'novus-digital'); ?></p>

            <div class="service-sublist">
              <div class="service-subitem"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Custom Web Apps</span></div>
              <div class="service-subitem"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Dashboards & Portals</span></div>
              <div class="service-subitem"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Mobile App Dev</span></div>
              <div class="service-subitem"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Booking Systems</span></div>
              <div class="service-subitem"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Workflow Automation</span></div>
              <div class="service-subitem"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>API Integrations</span></div>
            </div>
          </div>
          <div class="service-card-footer">
            <a href="<?php echo esc_url(home_url('/services/#app-development')); ?>" class="service-learn-more">
              <?php esc_html_e('Learn More', 'novus-digital'); ?> &rarr;
            </a>
            <a href="<?php echo esc_url(home_url('/contact/?service=app-dev')); ?>" class="btn btn-secondary btn-sm"><?php esc_html_e('Get Quote', 'novus-digital'); ?></a>
          </div>
        </div>

        <!-- Service Card 3: UI/UX Design -->
        <div class="service-card">
          <div>
            <div class="service-card-header">
              <div class="service-icon-box">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.586 7.586"></path><circle cx="11" cy="11" r="2"></circle></svg>
              </div>
              <span class="badge-pill badge-emerald"><?php esc_html_e('User Centric', 'novus-digital'); ?></span>
            </div>
            <h3 class="service-card-title"><?php esc_html_e('UI/UX Design', 'novus-digital'); ?></h3>
            <p class="service-card-desc"><?php esc_html_e('Human-centered user interface design and intuitive user flows that guide your customers directly to action.', 'novus-digital'); ?></p>

            <div class="service-sublist">
              <div class="service-subitem"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Web & App UI Design</span></div>
              <div class="service-subitem"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>UX Flow Optimization</span></div>
              <div class="service-subitem"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Interactive Prototypes</span></div>
              <div class="service-subitem"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Design Systems</span></div>
            </div>
          </div>
          <div class="service-card-footer">
            <a href="<?php echo esc_url(home_url('/services/#ui-ux-design')); ?>" class="service-learn-more">
              <?php esc_html_e('Learn More', 'novus-digital'); ?> &rarr;
            </a>
            <a href="<?php echo esc_url(home_url('/contact/?service=ui-ux')); ?>" class="btn btn-secondary btn-sm"><?php esc_html_e('Get Quote', 'novus-digital'); ?></a>
          </div>
        </div>

        <!-- Service Card 4: Website Maintenance & Support -->
        <div class="service-card">
          <div>
            <div class="service-card-header">
              <div class="service-icon-box">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
              </div>
              <span class="badge-pill badge-blue"><?php esc_html_e('Peace of Mind', 'novus-digital'); ?></span>
            </div>
            <h3 class="service-card-title"><?php esc_html_e('Maintenance & Support', 'novus-digital'); ?></h3>
            <p class="service-card-desc"><?php esc_html_e('Proactive security monitoring, core updates, speed optimizations, and ongoing technical troubleshooting.', 'novus-digital'); ?></p>

            <div class="service-sublist">
              <div class="service-subitem"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Security Updates</span></div>
              <div class="service-subitem"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Bug Fixes & Tweaks</span></div>
              <div class="service-subitem"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Speed Optimization</span></div>
              <div class="service-subitem"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Technical Assistance</span></div>
            </div>
          </div>
          <div class="service-card-footer">
            <a href="<?php echo esc_url(home_url('/services/#maintenance-support')); ?>" class="service-learn-more">
              <?php esc_html_e('Learn More', 'novus-digital'); ?> &rarr;
            </a>
            <a href="<?php echo esc_url(home_url('/contact/?service=maintenance')); ?>" class="btn btn-secondary btn-sm"><?php esc_html_e('Get Quote', 'novus-digital'); ?></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 4. Our Products Preview Section -->
  <section class="section section-dark-secondary" id="products">
    <div class="container">
      <div class="section-header">
        <div class="section-badge"><?php esc_html_e('Proprietary Digital Tools', 'novus-digital'); ?></div>
        <h2 class="section-title">Built By Us. <span class="gradient-text">Ready for You.</span></h2>
        <p class="section-subtitle"><?php esc_html_e('We design and maintain specialized digital solutions and starter kits to help businesses launch faster at lower upfront costs.', 'novus-digital'); ?></p>
      </div>

      <div class="products-grid">
        <!-- Product 1 -->
        <div class="product-card">
          <div class="product-image-wrap">
            <span class="product-badge-overlay badge-pill badge-concept"><?php esc_html_e('Sample Product Concept', 'novus-digital'); ?></span>
            <img src="<?php echo esc_url($theme_uri . '/assets/images/product-saas.svg'); ?>" alt="SaaSify Starter Kit Dashboard" class="product-mockup-svg" width="400" height="240">
          </div>
          <div class="product-body">
            <span class="product-category"><?php esc_html_e('Developer Starter Kit', 'novus-digital'); ?></span>
            <h3 class="product-title">SaaSify Boilerplate</h3>
            <p class="product-desc"><?php esc_html_e('A production-ready SaaS starter kit with pre-built authentication, multi-tenant billing with Stripe, and clean modern dashboards.', 'novus-digital'); ?></p>
            
            <div class="product-features-list">
              <div class="product-feature-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Next.js 14 &amp; TypeScript</span></div>
              <div class="product-feature-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Stripe Subscription Billing</span></div>
              <div class="product-feature-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Automated Authentication</span></div>
            </div>

            <div class="product-actions">
              <a href="<?php echo esc_url(home_url('/products/#saasify')); ?>" class="btn btn-outline btn-sm"><?php esc_html_e('Explore Product', 'novus-digital'); ?></a>
              <a href="<?php echo esc_url(home_url('/contact/?inquiry=saasify')); ?>" class="btn btn-primary btn-sm"><?php esc_html_e('Inquire Now', 'novus-digital'); ?></a>
            </div>
          </div>
        </div>

        <!-- Product 2 -->
        <div class="product-card">
          <div class="product-image-wrap">
            <span class="product-badge-overlay badge-pill badge-concept"><?php esc_html_e('Sample Product Concept', 'novus-digital'); ?></span>
            <img src="<?php echo esc_url($theme_uri . '/assets/images/product-booking.svg'); ?>" alt="OmniBook Pro Booking Suite" class="product-mockup-svg" width="400" height="240">
          </div>
          <div class="product-body">
            <span class="product-category"><?php esc_html_e('Business Application', 'novus-digital'); ?></span>
            <h3 class="product-title">OmniBook Pro</h3>
            <p class="product-desc"><?php esc_html_e('Smart booking and appointment management suite for service professionals, clinics, and consultants with automated SMS reminders.', 'novus-digital'); ?></p>

            <div class="product-features-list">
              <div class="product-feature-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Real-Time Calendar Sync</span></div>
              <div class="product-feature-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Automated SMS & Alerts</span></div>
              <div class="product-feature-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Integrated Deposit Payments</span></div>
            </div>

            <div class="product-actions">
              <a href="<?php echo esc_url(home_url('/products/#omnibook')); ?>" class="btn btn-outline btn-sm"><?php esc_html_e('Explore Product', 'novus-digital'); ?></a>
              <a href="<?php echo esc_url(home_url('/contact/?inquiry=omnibook')); ?>" class="btn btn-primary btn-sm"><?php esc_html_e('Inquire Now', 'novus-digital'); ?></a>
            </div>
          </div>
        </div>

        <!-- Product 3 -->
        <div class="product-card">
          <div class="product-image-wrap">
            <span class="product-badge-overlay badge-pill badge-concept"><?php esc_html_e('Sample Product Concept', 'novus-digital'); ?></span>
            <img src="<?php echo esc_url($theme_uri . '/assets/images/product-portal.svg'); ?>" alt="AgencyPulse Client Portal" class="product-mockup-svg" width="400" height="240">
          </div>
          <div class="product-body">
            <span class="product-category"><?php esc_html_e('Agency & Freelance Tool', 'novus-digital'); ?></span>
            <h3 class="product-title">AgencyPulse Portal</h3>
            <p class="product-desc"><?php esc_html_e('A white-labeled client management portal allowing agencies to share deliverables, collect feedback, and track milestones transparently.', 'novus-digital'); ?></p>

            <div class="product-features-list">
              <div class="product-feature-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Interactive Kanban Views</span></div>
              <div class="product-feature-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>Client Asset Approval</span></div>
              <div class="product-feature-item"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg><span>White-Label Custom Domain</span></div>
            </div>

            <div class="product-actions">
              <a href="<?php echo esc_url(home_url('/products/#agencypulse')); ?>" class="btn btn-outline btn-sm"><?php esc_html_e('Explore Product', 'novus-digital'); ?></a>
              <a href="<?php echo esc_url(home_url('/contact/?inquiry=agencypulse')); ?>" class="btn btn-primary btn-sm"><?php esc_html_e('Inquire Now', 'novus-digital'); ?></a>
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 3rem;">
        <a href="<?php echo esc_url(home_url('/products/')); ?>" class="btn btn-secondary">
          <?php esc_html_e('View Full Product Catalog', 'novus-digital'); ?> &rarr;
        </a>
      </div>
    </div>
  </section>

  <!-- 5. Portfolio Preview Section -->
  <section class="section" id="portfolio">
    <div class="container">
      <div class="section-header">
        <div class="section-badge"><?php esc_html_e('Recent Deliverables', 'novus-digital'); ?></div>
        <h2 class="section-title">Crafted with Precision. <span class="gradient-text">Built to Perform.</span></h2>
        <p class="section-subtitle"><?php esc_html_e('Explore a selection of our website and application builds across diverse industries. Each project is engineered for speed and conversion.', 'novus-digital'); ?></p>
      </div>

      <div class="portfolio-grid">
        <div class="portfolio-card">
          <div class="portfolio-thumb-wrap">
            <span class="portfolio-badge badge-pill badge-concept"><?php esc_html_e('Concept Demonstration', 'novus-digital'); ?></span>
            <img src="<?php echo esc_url($theme_uri . '/assets/images/portfolio-corp.svg'); ?>" alt="Vertex B2B Consulting Platform" class="portfolio-svg-mockup" width="500" height="300">
          </div>
          <div class="portfolio-info">
            <span class="portfolio-category">Business Website</span>
            <h3 class="portfolio-title">Vertex Strategic Consulting</h3>
            <p class="portfolio-desc"><?php esc_html_e('High-authority corporate advisory website with interactive service calculators and appointment booking.', 'novus-digital'); ?></p>
            <div class="portfolio-tech-tags">
              <span class="tech-tag">WordPress</span>
              <span class="tech-tag">Tailwind</span>
              <span class="tech-tag">PHP</span>
            </div>
            <div class="portfolio-footer">
              <a href="<?php echo esc_url(home_url('/portfolio/#vertex')); ?>" class="service-learn-more"><?php esc_html_e('Project Details', 'novus-digital'); ?> &rarr;</a>
              <span class="badge-pill badge-blue">Corporate</span>
            </div>
          </div>
        </div>

        <div class="portfolio-card">
          <div class="portfolio-thumb-wrap">
            <span class="portfolio-badge badge-pill badge-concept"><?php esc_html_e('Concept Demonstration', 'novus-digital'); ?></span>
            <img src="<?php echo esc_url($theme_uri . '/assets/images/portfolio-ecom.svg'); ?>" alt="Aura Collective Modern E-Commerce" class="portfolio-svg-mockup" width="500" height="300">
          </div>
          <div class="portfolio-info">
            <span class="portfolio-category">E-Commerce</span>
            <h3 class="portfolio-title">Aura Lifestyle &amp; Home</h3>
            <p class="portfolio-desc"><?php esc_html_e('Minimalist storefront featuring frictionless 1-click checkout, instant filtering, and mobile-first product cards.', 'novus-digital'); ?></p>
            <div class="portfolio-tech-tags">
              <span class="tech-tag">WooCommerce</span>
              <span class="tech-tag">JavaScript</span>
              <span class="tech-tag">Stripe</span>
            </div>
            <div class="portfolio-footer">
              <a href="<?php echo esc_url(home_url('/portfolio/#aura')); ?>" class="service-learn-more"><?php esc_html_e('Project Details', 'novus-digital'); ?> &rarr;</a>
              <span class="badge-pill badge-emerald">E-Commerce</span>
            </div>
          </div>
        </div>

        <div class="portfolio-card">
          <div class="portfolio-thumb-wrap">
            <span class="portfolio-badge badge-pill badge-concept"><?php esc_html_e('Concept Demonstration', 'novus-digital'); ?></span>
            <img src="<?php echo esc_url($theme_uri . '/assets/images/portfolio-app.svg'); ?>" alt="CloudMetric Telemetry Platform" class="portfolio-svg-mockup" width="500" height="300">
          </div>
          <div class="portfolio-info">
            <span class="portfolio-category">Web Application</span>
            <h3 class="portfolio-title">CloudMetric Operations App</h3>
            <p class="portfolio-desc"><?php esc_html_e('Real-time cloud infrastructure monitoring web app with live metrics streaming and cluster status alerts.', 'novus-digital'); ?></p>
            <div class="portfolio-tech-tags">
              <span class="tech-tag">React</span>
              <span class="tech-tag">Node.js</span>
              <span class="tech-tag">REST API</span>
            </div>
            <div class="portfolio-footer">
              <a href="<?php echo esc_url(home_url('/portfolio/#cloudmetric')); ?>" class="service-learn-more"><?php esc_html_e('Project Details', 'novus-digital'); ?> &rarr;</a>
              <span class="badge-pill badge-purple">Web App</span>
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 3rem;">
        <a href="<?php echo esc_url(home_url('/portfolio/')); ?>" class="btn btn-secondary">
          <?php esc_html_e('Explore All Portfolio Projects', 'novus-digital'); ?> &rarr;
        </a>
      </div>
    </div>
  </section>

  <!-- 6. Our Process Section -->
  <section class="section section-dark-secondary" id="process">
    <div class="container">
      <div class="section-header">
        <div class="section-badge"><?php esc_html_e('Structured Delivery', 'novus-digital'); ?></div>
        <h2 class="section-title">Our Simple, Proven <span class="gradient-text">4-Step Process</span></h2>
        <p class="section-subtitle"><?php esc_html_e('We follow a clear, predictable workflow that eliminates confusion, meets deadlines, and keeps you informed at every milestone.', 'novus-digital'); ?></p>
      </div>

      <div class="process-timeline">
        <div class="process-step-card">
          <div class="process-step-num">01</div>
          <h3 class="process-step-title"><?php esc_html_e('Discover', 'novus-digital'); ?></h3>
          <p class="process-step-desc"><?php esc_html_e('Understand your business, target audience, and functional requirements to craft an actionable project blueprint.', 'novus-digital'); ?></p>
        </div>

        <div class="process-step-card">
          <div class="process-step-num">02</div>
          <h3 class="process-step-title"><?php esc_html_e('Plan & Design', 'novus-digital'); ?></h3>
          <p class="process-step-desc"><?php esc_html_e('Develop the structure, wireframes, visual direction, and modern user experience aligned with your goals.', 'novus-digital'); ?></p>
        </div>

        <div class="process-step-card">
          <div class="process-step-num">03</div>
          <h3 class="process-step-title"><?php esc_html_e('Build & Test', 'novus-digital'); ?></h3>
          <p class="process-step-desc"><?php esc_html_e('Develop the website or application using clean code and rigorously test responsiveness across all devices.', 'novus-digital'); ?></p>
        </div>

        <div class="process-step-card">
          <div class="process-step-num">04</div>
          <h3 class="process-step-title"><?php esc_html_e('Launch & Support', 'novus-digital'); ?></h3>
          <p class="process-step-desc"><?php esc_html_e('Publish your live project smoothly and provide agreed post-launch support, training, and maintenance.', 'novus-digital'); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- 7. Why Choose Us Section -->
  <section class="section" id="why-choose-us">
    <div class="container">
      <div class="why-choose-grid">
        <div>
          <div class="section-badge"><?php esc_html_e('The Novus Difference', 'novus-digital'); ?></div>
          <h2 class="section-title">Why Businesses Choose <span class="gradient-text"><?php bloginfo('name'); ?></span></h2>
          <p class="section-subtitle" style="margin-bottom: 2rem;"><?php esc_html_e('We bridge the gap between expensive traditional agencies and unreliable freelance marketplaces.', 'novus-digital'); ?></p>

          <div class="why-features-list">
            <div class="why-feature-item">
              <div class="why-feature-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
              </div>
              <div class="why-feature-content">
                <h4><?php esc_html_e('Quality Solutions at Reasonable Prices', 'novus-digital'); ?></h4>
                <p><?php esc_html_e('Enjoy premium engineering standards, clean code, and modern design at a price point small businesses can afford.', 'novus-digital'); ?></p>
              </div>
            </div>

            <div class="why-feature-item">
              <div class="why-feature-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
              </div>
              <div class="why-feature-content">
                <h4><?php esc_html_e('Designs Tailored to Each Business', 'novus-digital'); ?></h4>
                <p><?php esc_html_e('We do not paste your logo onto cheap, generic templates. Your project is custom designed to match your specific market niche.', 'novus-digital'); ?></p>
              </div>
            </div>

            <div class="why-feature-item">
              <div class="why-feature-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
              </div>
              <div class="why-feature-content">
                <h4><?php esc_html_e('Clear Communication Throughout', 'novus-digital'); ?></h4>
                <p><?php esc_html_e('You speak directly with the creators building your site. Regular updates, transparent timelines, and prompt answers.', 'novus-digital'); ?></p>
              </div>
            </div>

            <div class="why-feature-item">
              <div class="why-feature-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
              </div>
              <div class="why-feature-content">
                <h4><?php esc_html_e('Scalable Architecture Ready to Grow', 'novus-digital'); ?></h4>
                <p><?php esc_html_e('Built with modular codebases and modern standards, allowing you to add features, products, and integrations as your business expands.', 'novus-digital'); ?></p>
              </div>
            </div>
          </div>
        </div>

        <div class="comparison-card">
          <h3 style="font-size: 1.35rem; margin-bottom: 0.5rem; text-align: center;"><?php esc_html_e('How We Compare', 'novus-digital'); ?></h3>
          <p style="text-align: center; font-size: 0.9rem; color: var(--text-secondary); margin-bottom: 2rem;"><?php esc_html_e('Transparent differences between development routes', 'novus-digital'); ?></p>

          <table class="comparison-table">
            <thead>
              <tr>
                <th><?php esc_html_e('Feature', 'novus-digital'); ?></th>
                <th><?php bloginfo('name'); ?></th>
                <th><?php esc_html_e('Big Agencies', 'novus-digital'); ?></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Custom Modern Design</td>
                <td><span class="check-green">&#10003; Yes, Tailored</span></td>
                <td><span class="check-green">&#10003; Yes</span></td>
              </tr>
              <tr>
                <td>Affordable, Flat Pricing</td>
                <td><span class="check-green">&#10003; Yes, Transparent</span></td>
                <td><span class="cross-red">&#10007; $15k+ Minimums</span></td>
              </tr>
              <tr>
                <td>Direct Developer Access</td>
                <td><span class="check-green">&#10003; Direct Chat/Email</span></td>
                <td><span class="cross-red">&#10007; Account Managers</span></td>
              </tr>
              <tr>
                <td>Mobile-First &amp; SEO Ready</td>
                <td><span class="check-green">&#10003; Included by default</span></td>
                <td><span class="check-green">&#10003; Often upsold</span></td>
              </tr>
              <tr>
                <td>Quick Delivery Cycle</td>
                <td><span class="check-green">&#10003; 2–4 Weeks Average</span></td>
                <td><span class="cross-red">&#10007; 3–6 Months</span></td>
              </tr>
              <tr>
                <td>Ongoing Support Plans</td>
                <td><span class="check-green">&#10003; Flexible &amp; Low-Cost</span></td>
                <td><span class="cross-red">&#10007; Expensive Retainers</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!-- 8. Testimonials Section -->
  <section class="section section-dark-secondary" id="testimonials">
    <div class="container">
      <div class="testimonials-box">
        <div class="testimonials-icon">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
        </div>
        <h3 class="testimonials-title"><?php esc_html_e('Client Feedback & Project Reviews', 'novus-digital'); ?></h3>
        <p class="testimonials-text"><?php esc_html_e('We are committed to total authenticity. We do not manufacture synthetic testimonials or ratings. If you would like to review genuine client references or explore recent case studies, our team is happy to connect with you directly.', 'novus-digital'); ?></p>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-outline btn-sm">
          <?php esc_html_e('Request Client Case Studies', 'novus-digital'); ?>
        </a>
      </div>
    </div>
  </section>

  <!-- 9. Frequently Asked Questions (FAQ) Section -->
  <section class="section" id="faq">
    <div class="container">
      <div class="section-header">
        <div class="section-badge"><?php esc_html_e('Got Questions?', 'novus-digital'); ?></div>
        <h2 class="section-title">Frequently Asked <span class="gradient-text">Questions</span></h2>
        <p class="section-subtitle"><?php esc_html_e('Find straightforward answers to common questions about our development process, pricing, timelines, and support.', 'novus-digital'); ?></p>
      </div>

      <div class="faq-accordion">
        <div class="faq-item">
          <button class="faq-header" type="button" aria-expanded="false">
            <span>How much does a website cost?</span>
            <span class="faq-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Our website solutions are customized to fit your specific scope and budget. Simple landing pages and modern brochure websites typically start under $1,000, while multi-page corporate sites or e-commerce stores range depending on required features. We provide transparent, itemized fixed-price quotes with zero surprises.
            </div>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-header" type="button" aria-expanded="false">
            <span>How long does website development take?</span>
            <span class="faq-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Most standard business websites are completed within 2 to 4 weeks from project kickoff. Complex web applications, customer portals, or large e-commerce platforms typically take 4 to 8 weeks. We provide a firm timeline at the start of every project.
            </div>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-header" type="button" aria-expanded="false">
            <span>Can you redesign my existing website?</span>
            <span class="faq-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Yes! We specialize in modernizing outdated websites. We refresh your visuals, overhaul the mobile responsiveness, enhance loading speeds, preserve your current SEO rankings, and transition you to a modern content management platform.
            </div>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-header" type="button" aria-expanded="false">
            <span>Will my website work on mobile devices?</span>
            <span class="faq-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Every website we build is 100% mobile-responsive and tested across smartphones, tablets, laptops, and ultra-wide desktop monitors. We follow mobile-first responsive design best practices so your site looks spectacular everywhere.
            </div>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-header" type="button" aria-expanded="false">
            <span>Can I update the website myself?</span>
            <span class="faq-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Yes. We build using intuitive WordPress architectures and user-friendly admin controls, empowering you to easily add blog posts, edit text, swap images, update products, and manage inquiries without knowing a line of code.
            </div>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-header" type="button" aria-expanded="false">
            <span>Do you provide website maintenance?</span>
            <span class="faq-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Yes, we offer ongoing maintenance and support packages covering WordPress core updates, security scans, cloud backups, performance tuning, and technical assistance whenever you need updates.
            </div>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-header" type="button" aria-expanded="false">
            <span>Can you develop custom web or mobile applications?</span>
            <span class="faq-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Absolutely. In addition to marketing websites, we develop custom web applications, SaaS dashboards, customer portals, online scheduling suites, and cross-platform mobile apps tailored to your business logic.
            </div>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-header" type="button" aria-expanded="false">
            <span>What information do you need to provide a quote?</span>
            <span class="faq-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Simply tell us a brief summary of what you are aiming to create, the core features you need (e.g., e-commerce, booking, contact form), any design references or competitor websites you admire, and your estimated budget range. We will handle the rest!
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 10. Final Call to Action Section -->
  <section class="section cta-section" id="cta">
    <div class="container">
      <div class="cta-banner">
        <h2 class="cta-headline">Have an Idea? <span class="gradient-text">Let's Build Something Great.</span></h2>
        <p class="cta-subtitle"><?php esc_html_e('Tell us what you want to create, and let\'s find an affordable solution for your business.', 'novus-digital'); ?></p>
        <div class="cta-buttons">
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-primary btn-lg"><?php esc_html_e('Start Your Project', 'novus-digital'); ?></a>
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-secondary btn-lg"><?php esc_html_e('Contact Us', 'novus-digital'); ?></a>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
