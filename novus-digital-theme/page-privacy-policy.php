<?php
/**
 * Template Name: Privacy Policy
 *
 * @package Novus_Digital
 */

get_header();

$company_email = get_theme_mod('novus_company_email', 'audhesh123@gmail.com');
$company_phone = get_theme_mod('novus_company_phone', '+1 (343) 987-1244');
?>

  <section class="page-hero">
    <div class="container">
      <div class="section-badge"><?php esc_html_e('Legal & Compliance', 'novus-digital'); ?></div>
      <h1 class="page-hero-title">Privacy <span class="gradient-text">Policy</span></h1>
      <p class="page-hero-subtitle"><?php esc_html_e('How we protect and respect your personal data and privacy.', 'novus-digital'); ?></p>
    </div>
  </section>

  <section class="section" style="padding-top: 3rem;">
    <div class="container">
      <div class="privacy-container">
        <div class="privacy-content">
          <?php
          if (have_posts()) :
              while (have_posts()) :
                  the_post();
                  if (!empty(get_the_content())) :
                      the_content();
                  else :
          ?>
            <p>
              At <?php bloginfo('name'); ?> ("we", "our", or "us"), your privacy is of paramount importance. This Privacy Policy describes how we collect, use, store, and disclose your personal data when you visit our website, submit inquiries, purchase our digital products, or communicate with our team.
            </p>

            <h2>1. Information We Collect</h2>
            <p>We only collect information necessary to deliver and improve our services, including:</p>
            <ul>
              <li><strong>Contact Information:</strong> Your full name, email address, phone number, company name, and preferred contact channel when you submit a project inquiry or contact form.</li>
              <li><strong>Project Details:</strong> Information you voluntarily share about your project goals, business requirements, budget range, and technical specifications.</li>
              <li><strong>Technical and Usage Data:</strong> Anonymized server logs, browser type, operating system, pages visited, and timestamps to ensure website security, load speed, and usability.</li>
            </ul>

            <h2>2. How We Use Your Information</h2>
            <p>We process your personal information strictly for legitimate business purposes:</p>
            <ul>
              <li>To evaluate your project specifications and prepare customized, accurate service proposals.</li>
              <li>To communicate with you regarding service delivery, milestones, billing, and technical support.</li>
              <li>To safeguard our website infrastructure from automated spam, fraudulent submissions, and malicious attacks.</li>
              <li>To continuously optimize website performance, mobile responsiveness, and client user experience.</li>
            </ul>

            <h2>3. Cookies &amp; Tracking Technologies</h2>
            <p>
              Our website uses minimal, functional cookies necessary to ensure secure session operation and evaluate general visitor metrics. We do not use intrusive third-party cross-site trackers or sell your browsing habits to data brokers. You may adjust your browser preferences to disable cookies at any time without impacting your core browsing experience.
            </p>

            <h2>4. Data Protection &amp; Security</h2>
            <p>
              We implement robust technical and operational measures to protect your personal information against unauthorized access, loss, or alteration. All web communications are transmitted over modern TLS/SSL encrypted protocols. Access to client data is strictly restricted to authorized team members on a need-to-know basis.
            </p>

            <h2>5. Third-Party Sharing</h2>
            <p>
              We will <strong>never</strong> sell, rent, or trade your personal information to third parties. We only share information with trusted infrastructure providers (such as secure email routing or cloud hosting servers) strictly bound by confidentiality agreements for the express purpose of providing our services to you.
            </p>

            <h2>6. Your Privacy Rights</h2>
            <p>Depending on your jurisdiction (including GDPR, CCPA, and applicable regional privacy laws), you have the right to:</p>
            <ul>
              <li>Request a copy of the personal data we hold about you.</li>
              <li>Request correction of inaccurate or incomplete data.</li>
              <li>Request the deletion or erasure of your personal data from our active records.</li>
              <li>Opt out of marketing communications at any time.</li>
            </ul>

            <h2>7. Contact Us About Privacy</h2>
            <p>
              If you have any questions, requests, or concerns regarding this Privacy Policy or how your personal information is handled, please contact our data team at:
            </p>
            <p>
              <strong>Email:</strong> <a href="mailto:<?php echo esc_attr($company_email); ?>"><?php echo esc_html($company_email); ?></a><br>
              <strong>Phone:</strong> <?php echo esc_html($company_phone); ?>
            </p>
          <?php
                  endif;
              endwhile;
          endif;
          ?>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
