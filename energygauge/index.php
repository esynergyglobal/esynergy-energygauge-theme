<?php
/**
 * Default fallback template - renders WordPress content
 * Used when no more specific template matches
 */
get_header(); ?>

<div style="padding-top:72px;">
  <section class="section">
    <div class="section-inner">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <h1 class="section-title" style="margin-bottom:32px;"><?php the_title(); ?></h1>
          <div class="entry-content">
            <?php the_content(); ?>
          </div>
        <?php endwhile; ?>
      <?php else : ?>
        <h1 class="section-title" style="margin-bottom:32px;">Page Not Found</h1>
        <p>The page you're looking for doesn't exist.</p>
        <a class="btn btn-primary" href="<?php echo home_url('/'); ?>">Go to Homepage</a>
      <?php endif; ?>
    </div>
  </section>
</div>

<?php get_footer(); ?>
