<?php
/**
 * WooCommerce template - renders Shop, product archives, and single products
 * Wraps WooCommerce output with our theme's header/footer
 */
get_header(); ?>

<div style="padding-top:72px;">
  <section class="section">
    <div class="section-inner">
      <?php woocommerce_content(); ?>
    </div>
  </section>
</div>

<?php get_footer(); ?>
