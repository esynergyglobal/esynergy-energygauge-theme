<?php /* Template Name: Support */ ?>
<?php get_header(); ?>

<!-- HERO -->
<section class="hero animate-fade-up" style="padding:80px 24px 50px;">
  <div class="hero-inner">
    <div class="hero-eyebrow">Support</div>
    <h1 style="font-size:clamp(28px,3.5vw,44px);">Get <span>Help</span></h1>
    <p class="hero-sub">Free technical support for all licensed EnergyGauge users. Online, ticket, and email.</p>
  </div>
</section>

<section class="section animate-fade-up">
  <div class="section-inner">

    <!-- CONTACT + FAQ -->
    <div class="support-grid">
      <div class="support-box">
        <h3>Contact Us</h3>
        <p>Reach out for licensing questions, technical issues, or general inquiries.</p>
        <div style="margin-bottom:16px;">
          <div style="font-family:var(--font-mono);font-size:12px;color:var(--gray-400);text-transform:uppercase;letter-spacing:0.08em;margin-bottom:4px;">Email</div>
          <a href="mailto:info@esynergyglobal.com" style="font-family:var(--font-display);font-weight:600;font-size:16px;color:var(--teal-dim);text-decoration:none;">info@esynergyglobal.com</a>
        </div>
        <a class="btn btn-primary" href="https://support.freshservice.com/support/home" target="_blank" rel="noopener noreferrer">Open Support Portal</a>
      </div>

      <div class="support-box">
        <h3>Frequently Asked Questions</h3>
        <div class="faq-item open" onclick="this.classList.toggle('open')">
          <div class="faq-q">What operating systems does EnergyGauge support?<span class="toggle">+</span></div>
          <div class="faq-a">EnergyGauge Summit is compatible with Microsoft Windows 7 and newer operating systems.</div>
        </div>
        <div class="faq-item" onclick="this.classList.toggle('open')">
          <div class="faq-q">How does licensing work?<span class="toggle">+</span></div>
          <div class="faq-a">EnergyGauge Summit uses annual single-seat, single-user licensing. Choose between 1-year and 3-year options. Free updates are included during your license period.</div>
        </div>
        <div class="faq-item" onclick="this.classList.toggle('open')">
          <div class="faq-q">What happened with the FSEC/UCF transition?<span class="toggle">+</span></div>
          <div class="faq-a">EnergyGauge is transitioning to eSynergy Global as the new licensing partner. All existing users remain fully supported. The software continues to operate as normal.</div>
        </div>
        <div class="faq-item" onclick="this.classList.toggle('open')">
          <div class="faq-q">How do I activate my license?<span class="toggle">+</span></div>
          <div class="faq-a">Visit our support portal for step-by-step activation instructions. You'll need your license key, which is provided after purchase.</div>
        </div>
      </div>
    </div>

    <!-- PRODUCT SUPPORT -->
    <div class="section-eyebrow animate-fade-up">Product Documentation</div>
    <h2 class="section-title" style="margin-bottom:24px;">Product Support</h2>
    <a href="<?php echo home_url('/resources/'); ?>" style="display:block;padding:24px;background:var(--white);border-radius:var(--radius);box-shadow:var(--shadow-card);max-width:672px;cursor:pointer;transition:var(--transition);text-decoration:none;color:inherit;margin-bottom:48px;" onmouseover="this.style.boxShadow='0 8px 32px rgba(0,0,0,0.1)';this.style.transform='translateY(-2px)'" onmouseout="this.style.boxShadow='';this.style.transform=''">
      <h4 style="font-family:var(--font-display);font-weight:600;font-size:16px;color:var(--navy);margin-bottom:8px;">EnergyGauge Summit Support</h4>
      <p style="font-size:14px;color:var(--gray-600);line-height:1.6;margin-bottom:0;">Help topics, release notes, changelog, and downloadable documentation for the commercial building compliance software.</p>
    </a>

    <!-- SYSTEM REQUIREMENTS -->
    <div class="section-eyebrow animate-fade-up">System Requirements</div>
    <h2 class="section-title" style="margin-bottom:24px;">Technical specifications</h2>
    <div class="sys-req">
      <div class="sys-req-item">
        <div class="label">Operating System</div>
        <div class="value">Windows 7 or newer</div>
      </div>
      <div class="sys-req-item">
        <div class="label">License Type</div>
        <div class="value">Single seat, single user</div>
      </div>
      <div class="sys-req-item">
        <div class="label">Simulation Engine</div>
        <div class="value">DOE 2.1E (FSEC enhanced)</div>
      </div>
      <div class="sys-req-item">
        <div class="label">Updates</div>
        <div class="value">Free during license period</div>
      </div>
    </div>

  </div>
</section>

<?php get_footer(); ?>
