<?php
/**
 * Template Name: Services Page
 *
 * @package Novus_Digital
 */

get_header();
?>

  <!-- Page Hero -->
  <section class="page-hero">
    <div class="container">
      <div class="section-badge"><?php esc_html_e('Tailored Solutions', 'novus-digital'); ?></div>
      <h1 class="page-hero-title">Our Development <span class="gradient-text">Services</span></h1>
      <p class="page-hero-subtitle"><?php esc_html_e('High-quality engineering, responsive design, and dependable ongoing support at transparent, affordable pricing for every business size.', 'novus-digital'); ?></p>
    </div>
  </section>

  <!-- Services Detailed Breakdown -->
  <section class="section" style="padding-top: 2rem;">
    <div class="container">

      <!-- 1. Website Development -->
      <div class="service-detail-section" id="website-development">
        <div class="service-detail-grid">
          <div class="service-detail-content">
            <span class="badge-pill badge-blue" style="margin-bottom: 0.75rem;">Flagship Service</span>
            <h2 class="service-detail-title">Website Development</h2>
            <p>We design and develop clean, high-performance business websites that build immediate authority and turn visitors into qualified leads. Every build incorporates mobile-first responsiveness, fast loading speeds, and robust SEO foundations.</p>
            
            <div class="service-includes-box">
              <h4 class="service-box-title">What the service includes:</h4>
              <div class="service-check-list">
                <div class="service-check-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Modern multi-page corporate and professional service websites.</span>
                </div>
                <div class="service-check-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>High-converting sales funnels and campaign landing pages.</span>
                </div>
                <div class="service-check-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Showcase portfolios for creators, consultants, and agencies.</span>
                </div>
              </div>
            </div>

            <div class="service-suitable-box">
              <h4 class="service-box-title">Who it is suitable for:</h4>
              <p>Startups establishing their initial digital presence, local service businesses needing steady inquiries, and companies looking to elevate their professional branding.</p>
            </div>
          </div>

          <div class="service-detail-sidebar">
            <div class="service-sidebar-card">
              <h4 style="font-size: 1.15rem; margin-bottom: 1rem; color: #ffffff;">Key Benefits &amp; Features</h4>
              <ul style="display: flex; flex-direction: column; gap: 0.75rem; margin-bottom: 1.75rem; color: var(--text-secondary); font-size: 0.925rem;">
                <li>&#10003; 100% Mobile &amp; Tablet Responsive</li>
                <li>&#10003; Sub-second page load times</li>
                <li>&#10003; Clean, semantic SEO markup</li>
                <li>&#10003; Interactive contact forms with spam protection</li>
                <li>&#10003; Google Analytics &amp; Meta tag integration</li>
              </ul>
              <a href="<?php echo esc_url(home_url('/contact/?service=website-development')); ?>" class="btn btn-primary" style="width: 100%;">Inquire About This Service &rarr;</a>
            </div>
          </div>
        </div>
      </div>

      <!-- 2. WordPress Development -->
      <div class="service-detail-section" id="wordpress-development">
        <div class="service-detail-grid reverse">
          <div class="service-detail-content">
            <span class="badge-pill badge-purple" style="margin-bottom: 0.75rem;">Easy Content Management</span>
            <h2 class="service-detail-title">WordPress Development</h2>
            <p>Get complete independence over your content. We engineer custom WordPress themes from scratch with zero bloat, allowing you to edit text, swap images, create blog articles, and add pages effortlessly.</p>

            <div class="service-includes-box">
              <h4 class="service-box-title">What the service includes:</h4>
              <div class="service-check-list">
                <div class="service-check-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Custom theme development without heavy, slow visual builders.</span>
                </div>
                <div class="service-check-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Custom Post Types and taxonomies for portfolios, services, and team profiles.</span>
                </div>
                <div class="service-check-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Gutenberg block patterns customized to your brand palette.</span>
                </div>
              </div>
            </div>

            <div class="service-suitable-box">
              <h4 class="service-box-title">Who it is suitable for:</h4>
              <p>Businesses that publish frequent updates, content creators, marketing teams, and organizations seeking an intuitive CMS they can govern themselves.</p>
            </div>
          </div>

          <div class="service-detail-sidebar">
            <div class="service-sidebar-card">
              <h4 style="font-size: 1.15rem; margin-bottom: 1rem; color: #ffffff;">Key Benefits &amp; Features</h4>
              <ul style="display: flex; flex-direction: column; gap: 0.75rem; margin-bottom: 1.75rem; color: var(--text-secondary); font-size: 0.925rem;">
                <li>&#10003; 100% Non-technical user friendly</li>
                <li>&#10003; Fast, clean custom theme code</li>
                <li>&#10003; Yoast &amp; RankMath SEO compatibility</li>
                <li>&#10003; Built-in security hardening</li>
                <li>&#10003; Live customizer settings for company info</li>
              </ul>
              <a href="<?php echo esc_url(home_url('/contact/?service=wordpress-development')); ?>" class="btn btn-primary" style="width: 100%;">Inquire About This Service &rarr;</a>
            </div>
          </div>
        </div>
      </div>

      <!-- 3. E-commerce Development -->
      <div class="service-detail-section" id="ecommerce-development">
        <div class="service-detail-grid">
          <div class="service-detail-content">
            <span class="badge-pill badge-emerald" style="margin-bottom: 0.75rem;">Online Sales</span>
            <h2 class="service-detail-title">E-commerce Development</h2>
            <p>Launch a secure, frictionless online store designed to maximize sales. We integrate modern payment gateways, streamlined checkout experiences, inventory management, and automated order notifications.</p>

            <div class="service-includes-box">
              <h4 class="service-box-title">What the service includes:</h4>
              <div class="service-check-list">
                <div class="service-check-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>WooCommerce store setups with tailored product catalog pages.</span>
                </div>
                <div class="service-check-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Frictionless checkout with Stripe, Apple Pay, PayPal, and credit cards.</span>
                </div>
                <div class="service-check-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Physical and digital download product configurations with automated delivery.</span>
                </div>
              </div>
            </div>

            <div class="service-suitable-box">
              <h4 class="service-box-title">Who it is suitable for:</h4>
              <p>Retailers launching their first direct-to-consumer store, boutique brands, and service companies selling downloadable guides, software licenses, or subscription memberships.</p>
            </div>
          </div>

          <div class="service-detail-sidebar">
            <div class="service-sidebar-card">
              <h4 style="font-size: 1.15rem; margin-bottom: 1rem; color: #ffffff;">Key Benefits &amp; Features</h4>
              <ul style="display: flex; flex-direction: column; gap: 0.75rem; margin-bottom: 1.75rem; color: var(--text-secondary); font-size: 0.925rem;">
                <li>&#10003; PCI-compliant, encrypted payment processing</li>
                <li>&#10003; Mobile-optimized 1-click cart and checkout</li>
                <li>&#10003; Coupon codes &amp; promotional discount engines</li>
                <li>&#10003; Real-time tax and shipping calculations</li>
              </ul>
              <a href="<?php echo esc_url(home_url('/contact/?service=ecommerce-development')); ?>" class="btn btn-primary" style="width: 100%;">Inquire About This Service &rarr;</a>
            </div>
          </div>
        </div>
      </div>

      <!-- 4. Web Application Development -->
      <div class="service-detail-section" id="app-development">
        <div class="service-detail-grid reverse">
          <div class="service-detail-content">
            <span class="badge-pill badge-purple" style="margin-bottom: 0.75rem;">Custom Software</span>
            <h2 class="service-detail-title">Web Application Development</h2>
            <p>When off-the-shelf software cannot meet your business requirements, we engineer custom web applications that streamline internal operations, automate workflows, and delight your customers.</p>

            <div class="service-includes-box">
              <h4 class="service-box-title">What the service includes:</h4>
              <div class="service-check-list">
                <div class="service-check-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Custom client portals, employee intranets, and administrative dashboards.</span>
                </div>
                <div class="service-check-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Online appointment booking, reservations, and calendar scheduling suites.</span>
                </div>
                <div class="service-check-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Custom database architecture, user authentication, and third-party API integrations.</span>
                </div>
              </div>
            </div>

            <div class="service-suitable-box">
              <h4 class="service-box-title">Who it is suitable for:</h4>
              <p>Growing companies needing automated internal workflows, SaaS founders launching an MVP, and service firms providing dedicated client access areas.</p>
            </div>
          </div>

          <div class="service-detail-sidebar">
            <div class="service-sidebar-card">
              <h4 style="font-size: 1.15rem; margin-bottom: 1rem; color: #ffffff;">Key Benefits &amp; Features</h4>
              <ul style="display: flex; flex-direction: column; gap: 0.75rem; margin-bottom: 1.75rem; color: var(--text-secondary); font-size: 0.925rem;">
                <li>&#10003; Scalable database architectures (SQL &amp; NoSQL)</li>
                <li>&#10003; Role-based access control &amp; security tokens</li>
                <li>&#10003; Automated email &amp; webhook notifications</li>
                <li>&#10003; High performance, modular codebase</li>
              </ul>
              <a href="<?php echo esc_url(home_url('/contact/?service=web-app-development')); ?>" class="btn btn-primary" style="width: 100%;">Inquire About This Service &rarr;</a>
            </div>
          </div>
        </div>
      </div>

      <!-- 5. Mobile Application Development -->
      <div class="service-detail-section" id="mobile-development">
        <div class="service-detail-grid">
          <div class="service-detail-content">
            <span class="badge-pill badge-blue" style="margin-bottom: 0.75rem;">iOS &amp; Android</span>
            <h2 class="service-detail-title">Mobile Application Development</h2>
            <p>Put your business directly into your customers' hands with intuitive, responsive cross-platform mobile apps. We leverage progressive web app (PWA) and cross-platform native technologies to deliver native performance at accessible costs.</p>

            <div class="service-includes-box">
              <h4 class="service-box-title">What the service includes:</h4>
              <div class="service-check-list">
                <div class="service-check-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Cross-platform mobile applications for iOS and Android.</span>
                </div>
                <div class="service-check-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Progressive Web Apps (PWAs) with offline support and home screen installation.</span>
                </div>
                <div class="service-check-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Push notifications, location services, and backend synchronization.</span>
                </div>
              </div>
            </div>

            <div class="service-suitable-box">
              <h4 class="service-box-title">Who it is suitable for:</h4>
              <p>Businesses seeking recurring customer engagement, field service teams needing mobile tools, and digital product startups.</p>
            </div>
          </div>

          <div class="service-detail-sidebar">
            <div class="service-sidebar-card">
              <h4 style="font-size: 1.15rem; margin-bottom: 1rem; color: #ffffff;">Key Benefits &amp; Features</h4>
              <ul style="display: flex; flex-direction: column; gap: 0.75rem; margin-bottom: 1.75rem; color: var(--text-secondary); font-size: 0.925rem;">
                <li>&#10003; Single codebase for both iOS &amp; Android</li>
                <li>&#10003; Native touch gestures and animations</li>
                <li>&#10003; Cloud data sync with offline support</li>
                <li>&#10003; App Store &amp; Google Play submission guidance</li>
              </ul>
              <a href="<?php echo esc_url(home_url('/contact/?service=mobile-development')); ?>" class="btn btn-primary" style="width: 100%;">Inquire About This Service &rarr;</a>
            </div>
          </div>
        </div>
      </div>

      <!-- 6. UI/UX Design -->
      <div class="service-detail-section" id="ui-ux-design">
        <div class="service-detail-grid reverse">
          <div class="service-detail-content">
            <span class="badge-pill badge-emerald" style="margin-bottom: 0.75rem;">Visual &amp; Flow</span>
            <h2 class="service-detail-title">UI/UX Design</h2>
            <p>Exceptional design is not just how something looks—it is how effortlessly it works. We research user journeys and craft modern, sleek user interfaces that build trust, reduce friction, and boost user retention.</p>

            <div class="service-includes-box">
              <h4 class="service-box-title">What the service includes:</h4>
              <div class="service-check-list">
                <div class="service-check-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Complete web and mobile application interface design in Figma.</span>
                </div>
                <div class="service-check-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Interactive prototypes so you can click through screens before coding starts.</span>
                </div>
                <div class="service-check-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Design system tokens, typography scales, and UI component libraries.</span>
                </div>
              </div>
            </div>

            <div class="service-suitable-box">
              <h4 class="service-box-title">Who it is suitable for:</h4>
              <p>Companies with clunky or confusing existing software, founders with an app concept needing visual validation, and brands seeking a state-of-the-art visual identity.</p>
            </div>
          </div>

          <div class="service-detail-sidebar">
            <div class="service-sidebar-card">
              <h4 style="font-size: 1.15rem; margin-bottom: 1rem; color: #ffffff;">Key Benefits &amp; Features</h4>
              <ul style="display: flex; flex-direction: column; gap: 0.75rem; margin-bottom: 1.75rem; color: var(--text-secondary); font-size: 0.925rem;">
                <li>&#10003; Clean, modern dark/light mode aesthetics</li>
                <li>&#10003; WCAG 2.1 accessible color contrasts</li>
                <li>&#10003; Seamless developer handoff files</li>
                <li>&#10003; Conversion-focused user action funnels</li>
              </ul>
              <a href="<?php echo esc_url(home_url('/contact/?service=ui-ux-design')); ?>" class="btn btn-primary" style="width: 100%;">Inquire About This Service &rarr;</a>
            </div>
          </div>
        </div>
      </div>

      <!-- 7. Website Redesign -->
      <div class="service-detail-section" id="redesign">
        <div class="service-detail-grid">
          <div class="service-detail-content">
            <span class="badge-pill badge-blue" style="margin-bottom: 0.75rem;">Digital Transformation</span>
            <h2 class="service-detail-title">Website Redesign &amp; Modernization</h2>
            <p>Is your existing website sluggish, non-responsive, or outdated? We breathe new life into your online presence with modern layouts, lightning-fast code, and contemporary branding while safeguarding your hard-earned SEO search rankings.</p>

            <div class="service-includes-box">
              <h4 class="service-box-title">What the service includes:</h4>
              <div class="service-check-list">
                <div class="service-check-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Complete visual makeover aligned with current modern web standards.</span>
                </div>
                <div class="service-check-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Speed and Core Web Vitals optimization to eliminate frustrating load lag.</span>
                </div>
                <div class="service-check-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>301 redirect mapping to ensure zero broken links or lost search equity.</span>
                </div>
              </div>
            </div>

            <div class="service-suitable-box">
              <h4 class="service-box-title">Who it is suitable for:</h4>
              <p>Established businesses whose current site no longer reflects their true service quality or fails to generate leads on mobile devices.</p>
            </div>
          </div>

          <div class="service-detail-sidebar">
            <div class="service-sidebar-card">
              <h4 style="font-size: 1.15rem; margin-bottom: 1rem; color: #ffffff;">Key Benefits &amp; Features</h4>
              <ul style="display: flex; flex-direction: column; gap: 0.75rem; margin-bottom: 1.75rem; color: var(--text-secondary); font-size: 0.925rem;">
                <li>&#10003; 3x to 5x faster load speeds</li>
                <li>&#10003; SEO preservation with URL redirect mapping</li>
                <li>&#10003; Seamless migration to WordPress CMS</li>
                <li>&#10003; Immediate upgrade in perceived brand trust</li>
              </ul>
              <a href="<?php echo esc_url(home_url('/contact/?service=redesign')); ?>" class="btn btn-primary" style="width: 100%;">Inquire About This Service &rarr;</a>
            </div>
          </div>
        </div>
      </div>

      <!-- 8. Maintenance and Technical Support -->
      <div class="service-detail-section" id="maintenance-support" style="border-bottom: none;">
        <div class="service-detail-grid reverse">
          <div class="service-detail-content">
            <span class="badge-pill badge-emerald" style="margin-bottom: 0.75rem;">Ongoing Reliability</span>
            <h2 class="service-detail-title">Website Maintenance &amp; Technical Support</h2>
            <p>Ensure your digital assets remain secure, up to date, and performing at their peak. We take care of routine updates, backups, security patches, and emergency fixes so you can focus entirely on running your business.</p>

            <div class="service-includes-box">
              <h4 class="service-box-title">What the service includes:</h4>
              <div class="service-check-list">
                <div class="service-check-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>WordPress core, theme, and plugin update testing and deployment.</span>
                </div>
                <div class="service-check-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Automated cloud backups with 1-click restore functionality.</span>
                </div>
                <div class="service-check-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Proactive uptime monitoring and malware scanning.</span>
                </div>
                <div class="service-check-item">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                  <span>Dedicated monthly developer hours for small content tweaks and fixes.</span>
                </div>
              </div>
            </div>

            <div class="service-suitable-box">
              <h4 class="service-box-title">Who it is suitable for:</h4>
              <p>Business owners without an internal technical team who need a dependable development partner on standby for updates and peace of mind.</p>
            </div>
          </div>

          <div class="service-detail-sidebar">
            <div class="service-sidebar-card">
              <h4 style="font-size: 1.15rem; margin-bottom: 1rem; color: #ffffff;">Key Benefits &amp; Features</h4>
              <ul style="display: flex; flex-direction: column; gap: 0.75rem; margin-bottom: 1.75rem; color: var(--text-secondary); font-size: 0.925rem;">
                <li>&#10003; 24/7 automated uptime monitoring</li>
                <li>&#10003; Daily off-site cloud backups</li>
                <li>&#10003; Rapid emergency incident response</li>
                <li>&#10003; Clear monthly health and performance reports</li>
              </ul>
              <a href="<?php echo esc_url(home_url('/contact/?service=maintenance')); ?>" class="btn btn-primary" style="width: 100%;">Inquire About This Service &rarr;</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

<?php
get_footer();
