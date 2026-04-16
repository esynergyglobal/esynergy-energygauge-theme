<?php
/**
 * 404 Not Found template
 */
get_header(); ?>

<section class="hero" style="padding:80px 24px 60px;">
  <div class="hero-inner">
    <div class="hero-eyebrow">EnergyGauge by eSynergy Global</div>
    <h1>Page Not <span>Found</span></h1>
    <p class="hero-sub">The page you're looking for doesn't exist or has been moved.</p>
    <div class="hero-actions">
      <a class="btn btn-primary" href="<?php echo home_url('/'); ?>">Go to Homepage</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
