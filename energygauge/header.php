<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- NAV -->
<div class="nav-wrap">
  <nav class="nav">
    <?php eg_render_brand(); ?>
    <button class="nav-toggle" onclick="document.querySelector('.nav-links').classList.toggle('open')" aria-label="Toggle menu">
      <span></span><span></span><span></span>
    </button>
    <ul class="nav-links">
      <?php eg_render_primary_nav_links(); ?>
      <li><a href="<?php echo esc_url(home_url('/cart/')); ?>" class="nav-cart" aria-label="View Cart">&#128722;</a></li>
      <li><a href="<?php echo esc_url(home_url('/summit/')); ?>" class="nav-cta">Buy Now</a></li>
    </ul>
  </nav>
</div>

<!-- BANNER -->
<div class="transition-banner" id="transitionBanner">
  <div class="transition-banner-inner">
    <div style="display:flex;align-items:center;gap:12px;flex-wrap:wrap;">
      <span class="badge-new">New</span>
      <p>EnergyGauge is now managed by <strong>eSynergy Global</strong>. All existing users remain fully supported. New purchases and renewals are available. <a href="mailto:info@esynergyglobal.com">Contact us</a></p>
    </div>
    <button class="banner-dismiss" onclick="this.closest('.transition-banner').style.display='none'" aria-label="Dismiss banner">&times;</button>
  </div>
</div>

<main>
