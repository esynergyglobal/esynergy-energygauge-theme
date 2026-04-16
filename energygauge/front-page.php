<?php get_header(); ?>

<!-- HERO -->
<section class="hero animate-fade-up">
  <div class="hero-inner">
    <div class="hero-eyebrow">Building Energy Simulation Software</div>
    <h1>Compliance made <span>simple.</span><br>Analysis made <span>powerful.</span></h1>
    <p class="hero-sub">Industry-standard energy simulation for code compliance, LEED certification, and tax deductions. Trusted by engineers across Florida and the nation.</p>
    <div class="hero-actions">
      <a class="btn btn-primary" href="<?php echo home_url('/summit/'); ?>">Explore Summit</a>
      <a class="btn btn-secondary" href="<?php echo home_url('/resources/'); ?>">Resources &amp; Support</a>
    </div>
  </div>
</section>

<!-- PRODUCT -->
<section class="section animate-fade-up">
  <div class="section-inner">
    <div class="section-eyebrow">Flagship Software</div>
    <h2 class="section-title">Commercial Building Compliance</h2>
    <p class="section-subtitle">EnergyGauge Summit delivers one-button compliance with the DOE 2.1E simulation engine for commercial building energy analysis.</p>
    <a class="product-card" href="<?php echo home_url('/summit/'); ?>">
      <div class="product-card-header">
        <div class="product-card-icon commercial">&#127970;</div>
        <div class="product-label">Commercial</div>
        <h3>EnergyGauge Summit</h3>
        <p>ASHRAE 90.1, IECC, LEED, Florida Energy Code, and federal tax deductions. Two tiers: FlaCom and Premier.</p>
      </div>
      <div class="product-card-footer">
        <div class="starting">From <strong>$389</strong>/yr</div>
        <div class="arrow">&rarr;</div>
      </div>
    </a>
  </div>
</section>

<!-- VALUE PROPS -->
<section class="section section-alt animate-fade-up">
  <div class="section-inner">
    <div class="value-grid">
      <div class="value-card">
        <div class="value-icon">&#9889;</div>
        <h3>One Button Compliance</h3>
        <p>Automatically generates reference and baseline buildings. No manual baseline creation required.</p>
      </div>
      <div class="value-card">
        <div class="value-icon">&#128735;</div>
        <h3>Free Technical Support</h3>
        <p>Online, ticket, and email support. Solution center with detailed articles and video tutorials.</p>
      </div>
      <div class="value-card">
        <div class="value-icon">&#127963;&#65039;</div>
        <h3>UCF/FSEC Heritage</h3>
        <p>Developed by the University of Central Florida's Florida Solar Energy Center. Trusted for decades.</p>
      </div>
    </div>
  </div>
</section>

<!-- TRUST BAR -->
<div class="trust-bar animate-fade-up">
  <div class="trust-inner">
    <div class="trust-item"><span class="trust-dot"></span> EPA ENERGY STAR Partner</div>
    <div class="trust-item"><span class="trust-dot"></span> DOE Building America</div>
    <div class="trust-item"><span class="trust-dot"></span> RESNET Member</div>
    <div class="trust-item"><span class="trust-dot"></span> UCF / FSEC Developed</div>
    <div class="trust-item"><span class="trust-dot"></span> DOE 2.1E Simulation Engine</div>
  </div>
</div>

<?php get_footer(); ?>
