/**
 * NOVUS DIGITAL - Interactive Features & UI Enhancements
 * Version: 1.2.0 - Global Interactive Quote Modal & Live Email Dispatch
 */

document.addEventListener('DOMContentLoaded', () => {
  'use strict';

  const RECIPIENT_EMAIL = 'audhesh123@gmail.com';
  const FORMSPREE_ENDPOINT = 'https://formspree.io/f/xzeeqanb';

  // --------------------------------------------------------------------------
  // 1. Sticky Header on Scroll
  // --------------------------------------------------------------------------
  const header = document.querySelector('.site-header');
  const handleScroll = () => {
    if (!header) return;
    if (window.scrollY > 20) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  };
  window.addEventListener('scroll', handleScroll, { passive: true });
  handleScroll();

  // --------------------------------------------------------------------------
  // 2. Mobile Navigation Drawer
  // --------------------------------------------------------------------------
  const mobileToggle = document.querySelector('.mobile-nav-toggle');
  const mobileDrawer = document.querySelector('.mobile-drawer');
  const drawerBackdrop = document.querySelector('.drawer-backdrop');
  const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

  const openDrawer = () => {
    if (!mobileDrawer) return;
    mobileDrawer.classList.add('open');
    mobileToggle?.classList.add('open');
    mobileToggle?.setAttribute('aria-expanded', 'true');
    drawerBackdrop?.classList.add('open');
    document.body.style.overflow = 'hidden';
  };

  const closeDrawer = () => {
    if (!mobileDrawer) return;
    mobileDrawer.classList.remove('open');
    mobileToggle?.classList.remove('open');
    mobileToggle?.setAttribute('aria-expanded', 'false');
    drawerBackdrop?.classList.remove('open');
    document.body.style.overflow = '';
  };

  if (mobileToggle) {
    mobileToggle.addEventListener('click', (e) => {
      e.preventDefault();
      const isOpen = mobileDrawer?.classList.contains('open');
      if (isOpen) {
        closeDrawer();
      } else {
        openDrawer();
      }
    });
  }

  drawerBackdrop?.addEventListener('click', closeDrawer);

  mobileNavLinks.forEach(link => {
    link.addEventListener('click', closeDrawer);
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && mobileDrawer?.classList.contains('open')) {
      closeDrawer();
    }
  });

  // --------------------------------------------------------------------------
  // 3. FAQ Accordion
  // --------------------------------------------------------------------------
  const faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(item => {
    const headerBtn = item.querySelector('.faq-header');
    const content = item.querySelector('.faq-content');

    if (headerBtn && content) {
      headerBtn.addEventListener('click', () => {
        const isActive = item.classList.contains('active');

        // Close all other items for a clean accordion effect
        faqItems.forEach(otherItem => {
          if (otherItem !== item) {
            otherItem.classList.remove('active');
            const otherContent = otherItem.querySelector('.faq-content');
            if (otherContent) otherContent.style.maxHeight = null;
          }
        });

        // Toggle current item
        if (isActive) {
          item.classList.remove('active');
          content.style.maxHeight = null;
        } else {
          item.classList.add('active');
          content.style.maxHeight = content.scrollHeight + 'px';
        }
      });
    }
  });

  // --------------------------------------------------------------------------
  // 4. Portfolio & Products Filter Tabs
  // --------------------------------------------------------------------------
  const filterTabs = document.querySelectorAll('.filter-tab');
  const filterableItems = document.querySelectorAll('[data-category]');

  if (filterTabs.length && filterableItems.length) {
    filterTabs.forEach(tab => {
      tab.addEventListener('click', () => {
        filterTabs.forEach(t => t.classList.remove('active'));
        tab.classList.add('active');

        const filterValue = tab.getAttribute('data-filter') || 'all';

        filterableItems.forEach(item => {
          const itemCategory = item.getAttribute('data-category');
          if (filterValue === 'all' || itemCategory === filterValue) {
            item.style.display = '';
            item.style.animation = 'fadeInUp 0.4s ease forwards';
          } else {
            item.style.display = 'none';
          }
        });
      });
    });
  }

  // --------------------------------------------------------------------------
  // 5. Global Interactive Quote Modal (Injected Dynamically)
  // --------------------------------------------------------------------------
  let modalOverlay = document.getElementById('novusQuoteModal');
  
  function initQuoteModal() {
    if (modalOverlay) return modalOverlay;

    const modalHTML = `
      <div class="quote-modal-overlay" id="novusQuoteModal" role="dialog" aria-modal="true" aria-labelledby="modalQuoteHeading">
        <div class="quote-modal-container">
          <button type="button" class="modal-close-btn" id="closeQuoteModalBtn" aria-label="Close quote modal">&times;</button>
          
          <!-- Form View -->
          <div id="modalFormContainer">
            <div class="quote-modal-header">
              <span class="badge badge-accent" style="margin-bottom: 0.65rem; display:inline-block;">⚡ Instant Project Estimate</span>
              <h2 class="quote-modal-title" id="modalQuoteHeading">Get a Free <span class="gradient-text">Project Quote</span></h2>
              <p class="quote-modal-desc">
                Tell us about your project. On submission, we’ll dispatch an email directly to our engineering team at <strong>${RECIPIENT_EMAIL}</strong> and prepare your consultation.
              </p>
            </div>

            <form id="interactiveModalQuoteForm" novalidate>
              <div class="form-row-2">
                <div class="form-group">
                  <label for="modalFullName" class="form-label">Full Name <span class="required">*</span></label>
                  <input type="text" id="modalFullName" name="full_name" class="form-control" placeholder="Jane Doe" required autocomplete="name">
                </div>
                <div class="form-group">
                  <label for="modalEmail" class="form-label">Work Email <span class="required">*</span></label>
                  <input type="email" id="modalEmail" name="email_address" class="form-control" placeholder="jane@company.com" required autocomplete="email">
                </div>
              </div>

              <div class="form-row-2">
                <div class="form-group">
                  <label for="modalPhone" class="form-label">Phone / WhatsApp <span class="optional">(optional)</span></label>
                  <input type="tel" id="modalPhone" name="phone_number" class="form-control" placeholder="+1 (555) 000-0000" autocomplete="tel">
                </div>
                <div class="form-group">
                  <label for="modalService" class="form-label">Service Required <span class="required">*</span></label>
                  <select id="modalService" name="service_type" class="form-control" required>
                    <option value="Website Development">Custom Website Development</option>
                    <option value="WordPress Development">WordPress CMS Website</option>
                    <option value="E-Commerce Store">E-Commerce Online Store</option>
                    <option value="Web Application & SaaS">Web Application & SaaS</option>
                    <option value="Mobile App Development">Mobile App (iOS & Android)</option>
                    <option value="UI/UX Interface Design">UI/UX Interface Design</option>
                    <option value="Website Redesign">Website Redesign & Modernization</option>
                    <option value="Maintenance & Support">Ongoing Maintenance & Support</option>
                    <option value="Digital Product Purchase">Digital Product / Boilerplate</option>
                  </select>
                </div>
              </div>

              <div class="form-row-2">
                <div class="form-group">
                  <label for="modalBudget" class="form-label">Estimated Budget <span class="optional">(flexible)</span></label>
                  <select id="modalBudget" name="budget_range" class="form-control">
                    <option value="Under $1,000">Under $1,000 (Starter / MVP)</option>
                    <option value="$1,000 – $2,500" selected>$1,000 – $2,500 (Standard Growth)</option>
                    <option value="$2,500 – $5,000">$2,500 – $5,000 (Advanced Custom)</option>
                    <option value="$5,000+">$5,000+ (Full App / Enterprise)</option>
                    <option value="Flexible / Need Consultation">Flexible / Let's Discuss</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="modalTimeline" class="form-label">Desired Timeline</label>
                  <select id="modalTimeline" name="timeline" class="form-control">
                    <option value="ASAP (1–2 weeks)">ASAP (1–2 weeks)</option>
                    <option value="Within 1 month" selected>Within 1 month</option>
                    <option value="1–3 months">1–3 months</option>
                    <option value="Flexible planning">Flexible planning</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="modalDescription" class="form-label">Project Description & Goals <span class="required">*</span></label>
                <textarea id="modalDescription" name="project_description" class="form-control" style="min-height: 100px;" placeholder="Tell us about your company, target audience, core features, or any reference websites..." required></textarea>
              </div>

              <div id="modalFormFeedback" class="form-feedback" role="alert" style="margin-bottom: 1.25rem;"></div>

              <button type="submit" class="btn btn-primary btn-lg" id="modalSubmitBtn" style="width: 100%; justify-content: center; gap: 0.6rem;">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <line x1="22" y1="2" x2="11" y2="13"></line>
                  <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                </svg>
                Send Free Quote &amp; Email
              </button>

              <div class="modal-footer-notes">
                <span>🔒 100% confidential. No spam or high-pressure sales.</span>
                <span>Direct email: <a href="mailto:${RECIPIENT_EMAIL}" class="modal-direct-mailto">${RECIPIENT_EMAIL}</a></span>
              </div>
            </form>
          </div>

          <!-- Success View (Shown after sending) -->
          <div id="modalSuccessView" class="quote-success-banner" style="display: none;">
            <div class="success-icon-check">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
            </div>
            <h3 class="quote-success-title">Quote Request &amp; Email Dispatched!</h3>
            <p class="quote-success-desc">
              Thank you, <strong id="successLeadName">there</strong>! Your quote request has been transmitted to our engineering desk at <strong>${RECIPIENT_EMAIL}</strong>. We also triggered your mail client so you have an immediate copy in your outbox.
            </p>

            <div style="background: rgba(255, 255, 255, 0.04); border: 1px solid rgba(255, 255, 255, 0.09); border-radius: var(--border-radius-md); padding: 1.15rem; text-align: left; margin: 0 auto 1.5rem auto; max-width: 480px; font-size: 0.875rem;">
              <div style="display: flex; justify-content: space-between; margin-bottom: 0.45rem;">
                <span style="color: var(--text-muted);">Service:</span>
                <span id="summaryService" style="color: #ffffff; font-weight: 600;">Custom Website</span>
              </div>
              <div style="display: flex; justify-content: space-between; margin-bottom: 0.45rem;">
                <span style="color: var(--text-muted);">Recipient:</span>
                <span style="color: var(--color-primary-light); font-weight: 600;">${RECIPIENT_EMAIL}</span>
              </div>
              <div style="display: flex; justify-content: space-between; margin-bottom: 0.45rem;">
                <span style="color: var(--text-muted);">Status:</span>
                <span style="color: #34d399; font-weight: 600;">✓ Saved &amp; Dispatched</span>
              </div>
              <div style="display: flex; justify-content: space-between;">
                <span style="color: var(--text-muted);">Response Time:</span>
                <span style="color: #ffffff;">Within 2–4 hours</span>
              </div>
            </div>

            <div style="display: flex; gap: 0.85rem; justify-content: center; flex-wrap: wrap;">
              <button type="button" class="btn btn-primary" id="btnModalCloseDone">
                Got It, Thank You
              </button>
              <a href="mailto:${RECIPIENT_EMAIL}" id="btnManualMailtoOpen" class="btn btn-secondary" target="_blank" rel="noopener">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                  <polyline points="22,6 12,13 2,6"></polyline>
                </svg>
                Open in Email App
              </a>
            </div>
          </div>
        </div>
      </div>
    `;

    const wrapper = document.createElement('div');
    wrapper.innerHTML = modalHTML;
    modalOverlay = wrapper.firstElementChild;
    document.body.appendChild(modalOverlay);

    // Attach Modal Internal Events
    const closeBtn = modalOverlay.querySelector('#closeQuoteModalBtn');
    const doneBtn = modalOverlay.querySelector('#btnModalCloseDone');
    const form = modalOverlay.querySelector('#interactiveModalQuoteForm');

    closeBtn?.addEventListener('click', closeQuoteModal);
    doneBtn?.addEventListener('click', closeQuoteModal);

    modalOverlay.addEventListener('click', (e) => {
      if (e.target === modalOverlay) {
        closeQuoteModal();
      }
    });

    form?.addEventListener('submit', handleModalSubmit);

    return modalOverlay;
  }

  function openQuoteModal(options = {}) {
    initQuoteModal();
    if (!modalOverlay) return;

    // Reset views
    const formContainer = modalOverlay.querySelector('#modalFormContainer');
    const successView = modalOverlay.querySelector('#modalSuccessView');
    const feedback = modalOverlay.querySelector('#modalFormFeedback');
    const form = modalOverlay.querySelector('#interactiveModalQuoteForm');

    if (formContainer) formContainer.style.display = 'block';
    if (successView) {
      successView.style.display = 'none';
      successView.classList.remove('active');
    }
    if (feedback) {
      feedback.style.display = 'none';
      feedback.textContent = '';
      feedback.className = 'form-feedback';
    }

    // Pre-select service or note if supplied
    if (options.service && form) {
      const serviceSelect = form.querySelector('#modalService');
      if (serviceSelect) {
        for (let i = 0; i < serviceSelect.options.length; i++) {
          if (serviceSelect.options[i].value.toLowerCase().includes(options.service.toLowerCase()) ||
              serviceSelect.options[i].text.toLowerCase().includes(options.service.toLowerCase())) {
            serviceSelect.selectedIndex = i;
            break;
          }
        }
      }
    }

    if (options.product && form) {
      const descInput = form.querySelector('#modalDescription');
      if (descInput && !descInput.value) {
        descInput.value = `Hi, I am interested in licensing / inquiring about the digital product: "${options.product}".`;
      }
    }

    modalOverlay.classList.add('active');
    document.body.style.overflow = 'hidden';

    // Auto focus name field
    setTimeout(() => {
      const firstInput = modalOverlay.querySelector('#modalFullName');
      firstInput?.focus();
    }, 120);
  }

  function closeQuoteModal() {
    if (!modalOverlay) return;
    modalOverlay.classList.remove('active');
    document.body.style.overflow = '';
  }

  // Expose global methods
  window.openQuoteModal = openQuoteModal;
  window.closeQuoteModal = closeQuoteModal;


  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && modalOverlay?.classList.contains('active')) {
      closeQuoteModal();
    }
  });

  // --------------------------------------------------------------------------
  // 6. Unified Email Dispatch Engine (POST /api/send-quote + mailto)
  // --------------------------------------------------------------------------
  function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
  }

  async function sendEmailAndQuote({
    fullName,
    emailAddress,
    companyName = 'N/A',
    phoneNumber = 'N/A',
    serviceType = 'Website Development',
    budgetRange = 'Flexible',
    timeline = 'Within 1 month',
    contactMethod = 'Email',
    projectDescription = ''
  }) {
    // 1. Generate unique reference ID and timestamp for every submission
    // Unique subjects prevent Gmail from collapsing multiple submissions into a single thread!
    const refCode = 'NV-' + Math.floor(1000 + Math.random() * 9000);
    const now = new Date();
    const timeFormatted = now.toLocaleTimeString('en-US', { hour: '2-digit', minute: '2-digit', second: '2-digit' });
    const dateFormatted = now.toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' });
    const emailSubject = `[Novus Quote #${refCode}] ${fullName} - ${serviceType} (${timeFormatted})`;

    const emailBody = 
`Hello Novus Digital Team,

I would like to request a free quote and consultation for my project.

--- REFERENCE & SUBMISSION TIME ---
• Reference Code:     #${refCode}
• Date & Time:        ${dateFormatted} at ${timeFormatted}

--- CLIENT & PROJECT DETAILS ---
• Client Name:        ${fullName}
• Email Address:      ${emailAddress}
• Company / Brand:    ${companyName}
• Phone / WhatsApp:   ${phoneNumber}
• Service Requested:  ${serviceType}
• Estimated Budget:   ${budgetRange}
• Expected Timeline:  ${timeline}
• Preferred Contact:  ${contactMethod}

--- PROJECT GOALS & SPECIFICATIONS ---
${projectDescription}

Looking forward to your cost breakdown, proposed architecture, and delivery schedule.

Best regards,
${fullName}`;

    // 2. Prepare mailto URI
    const mailtoUrl = `mailto:${RECIPIENT_EMAIL}?subject=${encodeURIComponent(emailSubject)}&body=${encodeURIComponent(emailBody)}`;
    let serverSuccess = false;
    let serverMessage = '';

    // 3. Dispatch via Formspree Cloud Relay
    if (FORMSPREE_ENDPOINT) {
      try {
        const fsRes = await fetch(FORMSPREE_ENDPOINT, {
          method: 'POST',
          headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({
            _subject: emailSubject,
            _replyto: emailAddress,
            'Reference Code': refCode,
            'Submitted At': `${dateFormatted} at ${timeFormatted}`,
            'Full Name': fullName,
            'Email Address': emailAddress,
            'Company': companyName,
            'Phone Number': phoneNumber,
            'Service Type': serviceType,
            'Budget Range': budgetRange,
            'Timeline': timeline,
            'Preferred Contact': contactMethod,
            'Project Description': projectDescription
          })
        });

        if (fsRes.ok) {
          serverSuccess = true;
          serverMessage = `Inquiry #${refCode} dispatched to ${RECIPIENT_EMAIL}`;
        } else {
          const errData = await fsRes.json().catch(() => ({}));
          console.warn('Formspree response not ok:', fsRes.status, errData);
          serverMessage = errData.error || `Formspree responded with HTTP ${fsRes.status}`;
        }
      } catch (err) {
        console.warn('Formspree dispatch error:', err);
        serverMessage = 'Network connection issue with cloud dispatch.';
      }
    }

    // 4. Check WordPress AJAX (if running inside WordPress)
    if (!serverSuccess && window.novusAjax && window.novusAjax.ajax_url) {
      try {
        const fd = new FormData();
        fd.append('action', 'novus_submit_quote');
        fd.append('nonce', window.novusAjax.nonce);
        fd.append('ref_code', refCode);
        fd.append('full_name', fullName);
        fd.append('email_address', emailAddress);
        fd.append('company_name', companyName);
        fd.append('phone_number', phoneNumber);
        fd.append('service_type', serviceType);
        fd.append('budget_range', budgetRange);
        fd.append('contact_method', contactMethod);
        fd.append('project_description', projectDescription);

        const res = await fetch(window.novusAjax.ajax_url, { method: 'POST', body: fd });
        const resData = await res.json();
        if (resData.success) {
          serverSuccess = true;
          serverMessage = resData.data?.message || 'Quote sent successfully!';
        }
      } catch (err) {
        console.warn('WP AJAX failed', err);
      }
    }

    // 5. Local server backup recording in background
    try {
      fetch('/api/send-quote', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
          ref_code: refCode,
          full_name: fullName,
          email_address: emailAddress,
          company_name: companyName,
          phone_number: phoneNumber,
          service_type: serviceType,
          budget_range: budgetRange,
          timeline: timeline,
          contact_method: contactMethod,
          project_description: projectDescription
        })
      }).then(r => r.json()).then(data => {
        if (!serverSuccess && data.success) {
          serverSuccess = true;
          serverMessage = data.message;
        }
      }).catch(() => {});
    } catch (e) {}

    // Fallback: If cloud dispatch failed, trigger native mailto
    if (!serverSuccess) {
      try {
        const mailtoTrigger = document.createElement('a');
        mailtoTrigger.href = mailtoUrl;
        mailtoTrigger.style.display = 'none';
        document.body.appendChild(mailtoTrigger);
        mailtoTrigger.click();
        setTimeout(() => {
          document.body.removeChild(mailtoTrigger);
        }, 500);
      } catch (e) {
        console.warn('Could not launch mailto link automatically', e);
      }
    }

    return {
      success: serverSuccess,
      refCode,
      timeFormatted,
      dateFormatted,
      message: serverMessage || (serverSuccess ? `Quote request dispatched to ${RECIPIENT_EMAIL}` : 'Dispatch pending'),
      mailtoUrl,
      data: { fullName, serviceType, budgetRange, refCode }
    };
  }

  // --------------------------------------------------------------------------
  // 7. Modal Form Submit Handler
  // --------------------------------------------------------------------------
  async function handleModalSubmit(e) {
    e.preventDefault();
    const form = e.target;
    const feedback = modalOverlay?.querySelector('#modalFormFeedback');
    const submitBtn = form.querySelector('#modalSubmitBtn');
    const originalText = submitBtn ? submitBtn.innerHTML : 'Send Free Quote & Email';

    const fullName = form.querySelector('#modalFullName')?.value.trim();
    const emailAddress = form.querySelector('#modalEmail')?.value.trim();
    const phoneNumber = form.querySelector('#modalPhone')?.value.trim() || 'N/A';
    const serviceType = form.querySelector('#modalService')?.value || 'Website Development';
    const budgetRange = form.querySelector('#modalBudget')?.value || '$1,000 – $2,500';
    const timeline = form.querySelector('#modalTimeline')?.value || 'Within 1 month';
    const projectDescription = form.querySelector('#modalDescription')?.value.trim();

    // Validation
    if (!fullName) {
      showModalFeedback('Please enter your full name.', 'error');
      return;
    }
    if (!emailAddress || !validateEmail(emailAddress)) {
      showModalFeedback('Please provide a valid work email address.', 'error');
      return;
    }
    if (!projectDescription) {
      showModalFeedback('Please describe what you would like to build or achieve.', 'error');
      return;
    }

    // Button loading
    if (submitBtn) {
      submitBtn.disabled = true;
      submitBtn.innerHTML = `
        <svg class="spinner" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="animation: spin 1s linear infinite; vertical-align: middle; margin-right: 6px;">
          <circle cx="12" cy="12" r="10" stroke-opacity="0.25"></circle>
          <path d="M12 2a10 10 0 0 1 10 10"></path>
        </svg>
        Sending Inquiry to ${RECIPIENT_EMAIL}...
      `;
    }

    try {
      const result = await sendEmailAndQuote({
        fullName,
        emailAddress,
        phoneNumber,
        serviceType,
        budgetRange,
        timeline,
        projectDescription
      });

      if (!result.success) {
        showModalFeedback(result.message || 'Could not send request. Please email us directly at ' + RECIPIENT_EMAIL, 'error');
        return;
      }

      // Switch to Success View
      const formContainer = modalOverlay.querySelector('#modalFormContainer');
      const successView = modalOverlay.querySelector('#modalSuccessView');
      const leadNameEl = modalOverlay.querySelector('#successLeadName');
      const serviceEl = modalOverlay.querySelector('#summaryService');
      const mailtoBtn = modalOverlay.querySelector('#btnManualMailtoOpen');

      if (leadNameEl) leadNameEl.textContent = fullName;
      if (serviceEl) serviceEl.textContent = `${serviceType} (#${result.refCode})`;
      if (mailtoBtn && result.mailtoUrl) mailtoBtn.href = result.mailtoUrl;

      if (formContainer) formContainer.style.display = 'none';
      if (successView) {
        successView.style.display = 'block';
        successView.classList.add('active');
      }

      form.reset();
    } catch (err) {
      showModalFeedback('Failed to process request. Please try again or email us directly at ' + RECIPIENT_EMAIL, 'error');
    } finally {
      if (submitBtn) {
        submitBtn.disabled = false;
        submitBtn.innerHTML = originalText;
      }
    }
  }

  function showModalFeedback(msg, type) {
    const feedback = modalOverlay?.querySelector('#modalFormFeedback');
    if (!feedback) return;
    feedback.textContent = msg;
    feedback.className = `form-feedback ${type}`;
    feedback.style.display = 'block';
  }

  // --------------------------------------------------------------------------
  // 8. On-Page Quote Form Handler (#novusQuoteForm on contact.html)
  // --------------------------------------------------------------------------
  const onPageQuoteForm = document.getElementById('novusQuoteForm');
  const onPageFeedback = document.getElementById('formFeedback');

  if (onPageQuoteForm) {
    onPageQuoteForm.addEventListener('submit', async (e) => {
      e.preventDefault();

      const submitBtn = onPageQuoteForm.querySelector('button[type="submit"]');
      const originalBtnText = submitBtn ? submitBtn.innerHTML : 'Request a Free Quote →';

      const fullName = onPageQuoteForm.querySelector('#fullName')?.value.trim();
      const emailAddress = onPageQuoteForm.querySelector('#emailAddress')?.value.trim();
      const companyName = onPageQuoteForm.querySelector('#companyName')?.value.trim() || 'N/A';
      const phoneNumber = onPageQuoteForm.querySelector('#phoneNumber')?.value.trim() || 'N/A';
      const serviceType = onPageQuoteForm.querySelector('#serviceType')?.value || 'Website Development';
      const contactMethod = onPageQuoteForm.querySelector('#contactMethod')?.value || 'Email';
      const budgetRadio = onPageQuoteForm.querySelector('input[name="budget_range"]:checked');
      const budgetRange = budgetRadio ? budgetRadio.value : 'Standard ($1,000 – $2,500)';
      const projectDescription = onPageQuoteForm.querySelector('#projectDesc')?.value.trim();

      // Clear previous feedback
      if (onPageFeedback) {
        onPageFeedback.style.display = 'none';
        onPageFeedback.className = 'form-feedback';
        onPageFeedback.innerHTML = '';
      }

      // Validation
      if (!fullName) {
        showOnPageFeedback('Please enter your full name.', 'error');
        onPageQuoteForm.querySelector('#fullName')?.focus();
        return;
      }
      if (!emailAddress || !validateEmail(emailAddress)) {
        showOnPageFeedback('Please provide a valid email address so we can reply.', 'error');
        onPageQuoteForm.querySelector('#emailAddress')?.focus();
        return;
      }
      if (!projectDescription) {
        showOnPageFeedback('Please provide a short description of your project or requirements.', 'error');
        onPageQuoteForm.querySelector('#projectDesc')?.focus();
        return;
      }

      // Loading state
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = `
          <svg class="spinner" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="animation: spin 1s linear infinite; vertical-align: middle; margin-right: 6px;">
            <circle cx="12" cy="12" r="10" stroke-opacity="0.25"></circle>
            <path d="M12 2a10 10 0 0 1 10 10"></path>
          </svg>
          Sending Inquiry to ${RECIPIENT_EMAIL}...
        `;
      }

      try {
        const result = await sendEmailAndQuote({
          fullName,
          emailAddress,
          companyName,
          phoneNumber,
          serviceType,
          budgetRange,
          contactMethod,
          projectDescription
        });

        if (!result.success) {
          showOnPageFeedback(
            `Could not dispatch automatically (${result.message}). Please email us directly at ${RECIPIENT_EMAIL} or try again.`,
            'error'
          );
          return;
        }

        const successHTML = `
          <div style="text-align: center; padding: 1.25rem 0;">
            <div style="width: 56px; height: 56px; border-radius: 50%; background: rgba(16, 185, 129, 0.2); border: 2px solid #10b981; color: #34d399; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem auto;">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            </div>
            <h4 style="color: #ffffff; font-size: 1.3rem; margin-bottom: 0.4rem; font-weight: 700;">Inquiry Dispatched Successfully!</h4>
            <p style="color: #cbd5e1; font-size: 0.95rem; margin-bottom: 0.6rem; max-width: 520px; margin-left: auto; margin-right: auto; line-height: 1.6;">
              Thank you, <strong>${fullName}</strong>! Your quote request has been transmitted directly to <strong>${RECIPIENT_EMAIL}</strong>.
            </p>
            <div style="display: inline-block; background: rgba(255, 255, 255, 0.06); border: 1px solid rgba(255, 255, 255, 0.12); border-radius: 8px; padding: 0.5rem 1rem; margin-bottom: 1.15rem; font-size: 0.85rem; color: #94a3b8;">
              <span style="color: #38bdf8; font-weight: 600;">Ref Code:</span> #${result.refCode} &nbsp;|&nbsp; 
              <span style="color: #38bdf8; font-weight: 600;">Time:</span> ${result.timeFormatted} &nbsp;|&nbsp; 
              <span style="color: #34d399; font-weight: 600;">Status:</span> Delivered
            </div>
            <p style="color: #94a3b8; font-size: 0.825rem; margin-bottom: 1.25rem;">
              💡 <em>Note for Gmail:</em> Every quote generates a unique reference (#${result.refCode}) and timestamp so each email appears as a separate conversation in your inbox.
            </p>
            <div style="display: flex; gap: 0.75rem; justify-content: center; flex-wrap: wrap;">
              <button type="button" class="btn btn-primary btn-sm" id="btnResetQuoteForm">
                + Send Another Inquiry
              </button>
              <a href="${result.mailtoUrl}" class="btn btn-secondary btn-sm" target="_blank" rel="noopener">
                Open in Email App
              </a>
            </div>
          </div>
        `;

        if (onPageFeedback) {
          onPageFeedback.innerHTML = successHTML;
          onPageFeedback.className = 'form-feedback success';
          onPageFeedback.style.display = 'block';
          onPageFeedback.scrollIntoView({ behavior: 'smooth', block: 'nearest' });

          document.getElementById('btnResetQuoteForm')?.addEventListener('click', () => {
            onPageQuoteForm.reset();
            onPageFeedback.style.display = 'none';
            onPageFeedback.innerHTML = '';
            onPageQuoteForm.querySelector('#fullName')?.focus();
          });
        }

        onPageQuoteForm.reset();
      } catch (err) {
        showOnPageFeedback('There was an issue sending your request. Please email us directly at ' + RECIPIENT_EMAIL, 'error');
      } finally {
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.innerHTML = originalBtnText;
        }
      }
    });
  }

  function showOnPageFeedback(message, type) {
    if (!onPageFeedback) return;
    onPageFeedback.textContent = message;
    onPageFeedback.className = `form-feedback ${type}`;
    onPageFeedback.style.display = 'block';
    onPageFeedback.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  }

  // --------------------------------------------------------------------------
  // 9. Intercept All "Get a Free Quote" / Quote CTA Clicks Across All Pages
  // --------------------------------------------------------------------------
  document.addEventListener('click', (e) => {
    const targetLink = e.target.closest('a, button');
    if (!targetLink) return;

    // Do NOT intercept elements inside forms (submit buttons, inputs, dropdowns)
    if (targetLink.closest('form')) {
      return;
    }

    // Check if the clicked element is a Quote trigger
    const text = (targetLink.textContent || '').trim().toLowerCase();
    const href = targetLink.getAttribute('href') || '';
    const isQuoteBtn = 
      targetLink.classList.contains('open-quote-modal') ||
      targetLink.classList.contains('btn-quote') ||
      text.includes('get a free quote') ||
      text.includes('request a free quote') ||
      text.includes('get quote') ||
      text.includes('request free quote') ||
      text.includes('request free consultation') ||
      text.includes('inquire about this service') ||
      text.includes('inquire / license');

    // If it's a quote button
    if (isQuoteBtn) {
      // If we are currently on contact.html and the main on-page form exists:
      const formEl = document.getElementById('novusQuoteForm');
      if (formEl) {
        e.preventDefault();
        formEl.scrollIntoView({ behavior: 'smooth', block: 'center' });
        formEl.classList.add('form-highlight-pulse');
        setTimeout(() => formEl.classList.remove('form-highlight-pulse'), 1500);
        setTimeout(() => {
          const firstInput = formEl.querySelector('#fullName');
          firstInput?.focus();
        }, 400);
        return;
      }

      // On all other pages: ALWAYS FORCE REDIRECT TO contact.html?v=fresh
      e.preventDefault();
      let targetUrl = 'contact.html?v=fresh';
      if (href && href.includes('?')) {
        const queryPart = href.split('?')[1];
        if (!queryPart.includes('v=fresh')) {
          targetUrl = 'contact.html?v=fresh&' + queryPart;
        } else {
          targetUrl = 'contact.html?' + queryPart;
        }
      }
      window.location.href = targetUrl;
    }
  }, true);

  // --------------------------------------------------------------------------
  // 10. URL Parameter Detection on contact.html (Auto-focus and pre-selection)
  // --------------------------------------------------------------------------
  const urlParams = new URLSearchParams(window.location.search);
  const onPageForm = document.getElementById('novusQuoteForm');
  if (onPageForm && (urlParams.has('service') || urlParams.has('product') || urlParams.has('inquiry') || urlParams.has('project_inquiry') || urlParams.has('quote'))) {
    setTimeout(() => {
      onPageForm.scrollIntoView({ behavior: 'smooth', block: 'center' });
      onPageForm.classList.add('form-highlight-pulse');
      setTimeout(() => onPageForm.classList.remove('form-highlight-pulse'), 1500);
      onPageForm.querySelector('#fullName')?.focus();
    }, 300);
  }

  // --------------------------------------------------------------------------
  // 11. Smooth Scroll for internal hash links
  // --------------------------------------------------------------------------
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const targetId = this.getAttribute('href');
      if (targetId === '#' || targetId === '') return;
      const targetEl = document.querySelector(targetId);
      if (targetEl) {
        e.preventDefault();
        targetEl.scrollIntoView({
          behavior: 'smooth'
        });
      }
    });
  });
});

// Animation helper injection for spinner & form pulse
const animStyle = document.createElement('style');
animStyle.textContent = `
  @keyframes spin {
    to { transform: rotate(360deg); }
  }
  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(15px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
  @keyframes formPulseHighlight {
    0% { box-shadow: 0 0 0 0 rgba(56, 189, 248, 0.7); border-color: rgba(56, 189, 248, 0.9); }
    50% { box-shadow: 0 0 30px 4px rgba(56, 189, 248, 0.5); border-color: #38bdf8; }
    100% { box-shadow: none; border-color: var(--border-light); }
  }
  .form-highlight-pulse {
    animation: formPulseHighlight 1.5s ease-out;
  }
`;
document.head.appendChild(animStyle);
