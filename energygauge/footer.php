</main>

<footer class="footer">
  <div class="footer-inner">
    <div class="footer-top">
      <div class="footer-brand">
        <?php eg_render_brand(); ?>
        <p><?php echo esc_html(get_theme_mod('eg_footer_tagline', "Building energy simulation software for code compliance, energy analysis, and rating. Developed by UCF's Florida Solar Energy Center.")); ?></p>
      </div>
      <div>
        <h4>Products</h4>
        <?php eg_render_footer_menu('footer-products', function() { ?>
          <ul>
            <li><a href="<?php echo esc_url(home_url('/summit/')); ?>">Summit &mdash; Commercial</a></li>
            <li><a href="<?php echo esc_url(home_url('/shop/')); ?>">Buy Now</a></li>
          </ul>
        <?php }); ?>
      </div>
      <div>
        <h4>Support</h4>
        <?php eg_render_footer_menu('footer-support', function() { ?>
          <ul>
            <li><a href="<?php echo esc_url(home_url('/support/')); ?>">Documentation</a></li>
            <li><a href="<?php echo esc_url(home_url('/support/')); ?>">FAQ</a></li>
            <li><a href="<?php echo esc_url(home_url('/support/')); ?>">Submit a Ticket</a></li>
          </ul>
        <?php }); ?>
      </div>
      <div>
        <h4>Company</h4>
        <?php eg_render_footer_menu('footer-company', function() { ?>
          <ul>
            <li><a href="https://esynergyglobal.com" target="_blank" rel="noopener noreferrer">eSynergy Global</a></li>
            <li><a href="mailto:info@esynergyglobal.com">Contact</a></li>
            <li><a href="https://www.ucf.edu/internet-privacy-policy/" target="_blank" rel="noopener noreferrer">Privacy Policy</a></li>
            <li><a href="#">EULA</a></li>
          </ul>
        <?php }); ?>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; <?php echo date('Y'); ?> eSynergy Global. EnergyGauge was developed by the University of Central Florida's Florida Solar Energy Center.</p>
      <div class="footer-partners">
        <span>EPA ENERGY STAR</span>
        <span>DOE Building America</span>
        <span>RESNET</span>
      </div>
    </div>
  </div>
</footer>

<script>
<?php include get_template_directory() . '/assets/js/main.js'; ?>
</script>
<?php wp_footer(); ?>
</body>
</html>
