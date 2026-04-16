<?php
/**
 * Default page template - renders WordPress editor content
 * Used for pages without a custom template (Cart, Checkout, Shop, My Account, About, etc.)
 */
get_header(); ?>

<div style="padding-top:72px;">
  <section class="section">
    <div class="section-inner">
      <?php while (have_posts()) : the_post(); ?>
        <h1 class="section-title" style="margin-bottom:32px;"><?php the_title(); ?></h1>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      <?php endwhile; ?>
    </div>
  </section>
</div>

<?php get_footer(); ?>
