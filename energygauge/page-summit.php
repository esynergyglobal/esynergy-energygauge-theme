<?php /* Template Name: Summit */ ?>
<?php
get_header();

// Feature card images (bundled in the theme at assets/images/features/).
$img_base = get_template_directory_uri() . '/assets/images/features';
?>

<!-- RELEASE ANNOUNCEMENT BANNER -->
<section class="release-banner animate-fade-up" style="padding:96px 24px 0;">
  <div class="release-banner-inner">
    <div class="release-banner-content">
      <span class="badge-new" style="margin-bottom:12px;">Latest Release</span>
      <h2 style="font-family:var(--font-display);font-weight:700;font-size:24px;margin:0 0 8px;color:var(--gray-800);">
        EnergyGauge Summit v8.1.1 Available Now
      </h2>
      <p style="margin:0 0 16px;color:var(--gray-600);line-height:1.6;">
        Now including the 2023 (8th Edition) Florida Energy Conservation Code compliance options.
      </p>
      <div class="release-banner-actions" style="display:flex;gap:12px;flex-wrap:wrap;">
        <a class="btn btn-primary btn-sm" href="https://support.energygauge.com/support/solutions/articles/5000686389-latest-energygauge-summit-version" target="_blank" rel="noopener">Download Latest Version</a>
        <a class="btn btn-secondary btn-sm" href="<?php echo esc_url(eg_docs_url('summit/ReleaseNotes/ReleaseNotesSummit.pdf')); ?>" target="_blank" rel="noopener">Release Notes (PDF)</a>
      </div>
    </div>
    <div class="release-banner-image">
      <img src="<?php echo esc_url($img_base . '/florida-energy-code.jpg'); ?>" alt="2023 Florida Energy Conservation Code 8th Edition">
    </div>
  </div>
</section>

<!-- HERO -->
<section class="hero animate-fade-up" style="padding:48px 24px 60px;">
  <div class="hero-inner">
    <div class="hero-eyebrow"><?php echo esc_html(eg_field('summit_hero_eyebrow', 'Commercial Buildings')); ?></div>
    <h1 style="font-size:clamp(32px,4vw,52px);"><?php echo esc_html(eg_field('summit_hero_title_pre', 'EnergyGauge')); ?> <span><?php echo esc_html(eg_field('summit_hero_title_highlight', 'Summit')); ?></span></h1>
    <p class="hero-sub"><?php echo esc_html(eg_field('summit_hero_description', 'Easy-to-use software for Building Energy Code Compliance, Energy Analysis, and Rating. Available in two versions — FlaCom and Premier. Choose the product that best fits your compliance needs using the comparison below.')); ?></p>
    <div class="hero-actions">
      <a class="btn btn-primary" href="<?php echo esc_url(eg_field('summit_hero_cta_url', home_url('/shop/'))); ?>"><?php echo esc_html(eg_field('summit_hero_cta_text', 'Buy Now')); ?></a>
    </div>
    <p style="margin-top:28px;font-size:13px;color:var(--gray-400);max-width:680px;margin-left:auto;margin-right:auto;">
      By purchasing this software you agree to the
      <a href="https://www.energygauge.com/downloads/End-User_License_Agreement_EnergyGauge_8.22.2019.pdf" target="_blank" rel="noopener" style="color:var(--teal-dim);text-decoration:underline;">EnergyGauge End User License Agreement</a>.
    </p>
  </div>
</section>

<!-- FLACOM vs PREMIER COMPARISON -->
<section class="section animate-fade-up">
  <div class="section-inner">
    <div class="section-eyebrow">Compare Versions</div>
    <h2 class="section-title">FlaCom vs. Premier</h2>
    <p class="section-subtitle">Choose the tier that matches your compliance needs. Premier adds national standards, LEED, and tax deduction capabilities.</p>

    <div class="table-wrap">
      <table class="comparison">
        <thead>
          <tr>
            <th>Feature</th>
            <th>FlaCom</th>
            <th class="recommended">Premier</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2020 (7th Ed), 2023* (8th Ed) FL Code &mdash; ASHRAE 90.1 Energy Cost Budget &amp; Prescriptive Compliance Options</td>
            <td><span class="check">&#10003;</span></td>
            <td class="recommended-col"><span class="check">&#10003;</span></td>
          </tr>
          <tr>
            <td>2020 (7th Ed), 2023 (8th Ed) FL Code &mdash; FBC Total Building Performance, Prescriptive &amp; Component Performance Alternative Options</td>
            <td><span class="check">&#10003;</span></td>
            <td class="recommended-col"><span class="check">&#10003;</span></td>
          </tr>
          <tr>
            <td>2023 (8th Ed) FL Code &mdash; ASHRAE Appendix G Rating Option</td>
            <td><span class="check">&#10003;</span></td>
            <td class="recommended-col"><span class="check">&#10003;</span></td>
          </tr>
          <tr>
            <td>Hourly Simulation Energy Analysis</td>
            <td><span class="check">&#10003;</span></td>
            <td class="recommended-col"><span class="check">&#10003;</span></td>
          </tr>
          <tr>
            <td>LEED v4.0, v2009 Minimum Energy Performance &amp; Energy Optimization</td>
            <td><span class="dash">&mdash;</span></td>
            <td class="recommended-col"><span class="check">&#10003;</span></td>
          </tr>
          <tr>
            <td>ASHRAE 90.1 (2016, 2013, 2010, 2007) All Compliance Options</td>
            <td><span class="dash">&mdash;</span></td>
            <td class="recommended-col"><span class="check">&#10003;</span></td>
          </tr>
          <tr>
            <td>IECC (2018, 2015, 2012) All Compliance Options</td>
            <td><span class="dash">&mdash;</span></td>
            <td class="recommended-col"><span class="check">&#10003;</span></td>
          </tr>
          <tr>
            <td>Tax deduction for energy efficient commercial buildings: All options per IRS Notices 2006-52, 2008-40, 2012-26, and PATH 2015</td>
            <td><span class="dash">&mdash;</span></td>
            <td class="recommended-col"><span class="check">&#10003;</span></td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- PRICING CARDS -->
    <?php
    $flacom_price       = eg_field('flacom_price', '$389');
    $flacom_period      = eg_field('flacom_period', '1-year license only');
    $flacom_buy_url     = eg_field('flacom_buy_url', home_url('/product/energygauge-summit-flacom/'));

    $premier_original   = eg_field('premier_original_price', '$949');
    $premier_sale       = eg_field('premier_sale_price', '$799');
    $premier_period     = eg_field('premier_period', '1-year license (promo)');
    $premier_3yr_orig   = eg_field('premier_3yr_original', '$2,562');
    $premier_3yr_sale   = eg_field('premier_3yr_sale', '$2,157');
    $premier_buy_url    = eg_field('premier_buy_url', home_url('/product/energygauge-summit-premier/'));
    ?>
    <div class="pricing-grid animate-fade-up">
      <div class="price-card">
        <h3 style="font-family:var(--font-display);font-weight:700;font-size:20px;margin-bottom:8px;">FlaCom</h3>
        <div class="price-amount"><?php echo esc_html($flacom_price); ?></div>
        <div class="price-period" style="margin-bottom:16px;"><?php echo esc_html($flacom_period); ?></div>
        <a class="btn btn-amber btn-sm" href="<?php echo esc_url($flacom_buy_url); ?>">Buy FlaCom</a>
      </div>
      <div class="price-card recommended">
        <div style="font-family:var(--font-mono);font-size:9px;letter-spacing:0.1em;color:var(--teal);font-weight:600;text-transform:uppercase;margin-bottom:8px;">RECOMMENDED</div>
        <h3 style="font-family:var(--font-display);font-weight:700;font-size:20px;margin-bottom:8px;">Premier</h3>
        <?php if ($premier_original) : ?>
          <div style="text-decoration:line-through;color:var(--gray-400);font-size:14px;"><?php echo esc_html($premier_original); ?></div>
        <?php endif; ?>
        <div class="price-amount" style="color:var(--teal-dim);"><?php echo esc_html($premier_sale); ?></div>
        <div class="price-period"><?php echo esc_html($premier_period); ?></div>
        <div style="font-family:var(--font-mono);font-size:13px;color:var(--gray-600);margin-bottom:16px;">
          <?php if ($premier_3yr_orig) : ?><s style="color:var(--gray-400);"><?php echo esc_html($premier_3yr_orig); ?></s> <?php endif; ?><?php echo esc_html($premier_3yr_sale); ?> / 3-year
        </div>
        <a class="btn btn-primary btn-sm" href="<?php echo esc_url($premier_buy_url); ?>">Buy Premier</a>
      </div>
    </div>

    <!-- PRODUCT DEMO VIDEO -->
    <div class="video-section animate-fade-up" style="margin-top:64px;">
      <div class="section-eyebrow">See It In Action</div>
      <h2 class="section-title">EnergyGauge Summit Demo</h2>
      <div class="video-embed">
        <iframe
          src="https://player.vimeo.com/video/29380350"
          title="EnergyGauge Summit demo"
          frameborder="0"
          allow="autoplay; fullscreen; picture-in-picture"
          allowfullscreen
          loading="lazy">
        </iframe>
      </div>
    </div>

    <!-- COMPETITIVE COMPARISON -->
    <div class="section-eyebrow animate-fade-up" style="margin-top:64px;">Why EnergyGauge</div>
    <h2 class="section-title">Compare to the Competition</h2>
    <p class="section-subtitle">EnergyGauge Summit Premier is the only software with automated compliance, LEED, tax deductions, and free support &mdash; all in one package.</p>

    <div class="table-wrap animate-fade-up">
      <table class="comparison">
        <thead>
          <tr>
            <th>Capability</th>
            <th class="recommended">EG Summit Premier</th>
            <th>EnergyPlus</th>
            <th>VisualDOE</th>
            <th>eQuest</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Annual hourly building energy simulation</td>
            <td class="recommended-col"><span class="check">&#10003;</span></td>
            <td><span class="check">&#10003;</span></td>
            <td><span class="check">&#10003;</span></td>
            <td><span class="check">&#10003;</span></td>
          </tr>
          <tr>
            <td>Automated features for ASHRAE 90.1 &amp; IECC code compliance&sup1;</td>
            <td class="recommended-col"><span class="check">&#10003;</span></td>
            <td><span class="dash">&mdash;</span></td>
            <td><span class="dash">&mdash;</span></td>
            <td><span class="dash">&mdash;</span></td>
          </tr>
          <tr>
            <td>Automated features for LEED simulation capabilities&sup1;</td>
            <td class="recommended-col"><span class="check">&#10003;</span></td>
            <td><span class="dash">&mdash;</span></td>
            <td><span class="dash">&mdash;</span></td>
            <td><span class="dash">&mdash;</span></td>
          </tr>
          <tr>
            <td>Automatic features for ASHRAE 90.1 Appendix G calculations</td>
            <td class="recommended-col"><span class="check">&#10003;</span></td>
            <td><span class="dash">&mdash;</span></td>
            <td><span class="dash">&mdash;</span></td>
            <td><span class="dash">&mdash;</span></td>
          </tr>
          <tr>
            <td>Qualified software for federal tax deductions</td>
            <td class="recommended-col"><span class="check">&#10003;</span></td>
            <td><span class="check">&#10003;</span></td>
            <td><span class="check">&#10003;</span></td>
            <td><span class="dash">&mdash;</span></td>
          </tr>
          <tr>
            <td>Approved for Florida energy code compliance</td>
            <td class="recommended-col"><span class="check">&#10003;</span></td>
            <td><span class="dash">&mdash;</span></td>
            <td><span class="dash">&mdash;</span></td>
            <td><span class="dash">&mdash;</span></td>
          </tr>
          <tr>
            <td>Free technical support</td>
            <td class="recommended-col"><span class="check">&#10003;</span></td>
            <td><span class="check">&#10003;</span></td>
            <td><span class="dash">&mdash;</span></td>
            <td><span class="check">&#10003;</span></td>
          </tr>
        </tbody>
      </table>
    </div>
    <p class="competitive-note">&sup1; Without requiring manually creating the baseline building.</p>

    <!-- KEY FEATURES -->
    <div class="section-eyebrow animate-fade-up" style="margin-top:32px;">Key Features</div>
    <h2 class="section-title">Everything you need for commercial compliance</h2>
    <br>
    <div class="features-grid animate-fade-up">
      <div class="feature-card">
        <img class="feature-card-image" src="<?php echo esc_url($img_base . '/florida-energy-code.jpg'); ?>" alt="Florida Energy Conservation Code" loading="lazy">
        <h4>Florida Energy Code (2023 8th Ed &amp; 2020 7th Ed)</h4>
        <ul>
          <li>ASHRAE Energy Cost Budget Option</li>
          <li>ASHRAE Prescriptive Compliance Option</li>
          <li>ASHRAE Appendix G Performance Rating Option<sup>&dagger;</sup></li>
          <li>FBC Total Building Performance Compliance</li>
          <li>FBC Prescriptive Compliance</li>
          <li>FBC Component Performance Alternative</li>
        </ul>
        <p style="font-size:12px;color:var(--gray-400);margin-top:12px;"><sup>&dagger;</sup> Not available in 2020 (7th ed)</p>
      </div>
      <div class="feature-card">
        <img class="feature-card-image" src="<?php echo esc_url($img_base . '/one-button-compliance.jpg'); ?>" alt="One-button compliance calculation" loading="lazy">
        <h4>One Button Compliance</h4>
        <p style="color:var(--gray-600);font-size:14px;margin:-4px 0 12px;">Automatically generates reference and baseline buildings.</p>
        <ul>
          <li>Florida Energy Conservation Code (7th &amp; 8th Ed)</li>
          <li>IECC (2018, 2015, 2012)</li>
          <li>LEED (v4.0, v2009)</li>
          <li>ASHRAE 90.1 ECB (2016, 2013, 2010, 2007)</li>
          <li>ASHRAE 90.1 Appendix G Rating (2007, 2010, 2013)</li>
          <li>IRS tax deduction calculations</li>
        </ul>
      </div>
      <div class="feature-card">
        <img class="feature-card-image" src="<?php echo esc_url($img_base . '/leed-certified.png'); ?>" alt="LEED Certified" loading="lazy">
        <h4>LEED Building Certification</h4>
        <ul>
          <li>Minimum Energy Performance credit</li>
          <li>Optimize Energy Performance credit</li>
          <li>v4.0 and v2009 supported</li>
        </ul>
      </div>
      <div class="feature-card">
        <img class="feature-card-image" src="<?php echo esc_url($img_base . '/tax-credits.png'); ?>" alt="Energy efficient tax credits" loading="lazy">
        <h4>Energy Efficient Tax Credit</h4>
        <ul>
          <li>Partial Credit for Lighting</li>
          <li>Partial Credit for Envelope</li>
          <li>Partial Credit for HVAC</li>
          <li>Whole Building Credit</li>
        </ul>
      </div>
      <div class="feature-card">
        <img class="feature-card-image" src="<?php echo esc_url($img_base . '/iecc.png'); ?>" alt="International Energy Conservation Code" loading="lazy">
        <h4>IECC Compliance</h4>
        <p style="color:var(--gray-600);font-size:14px;margin:-4px 0 12px;">Enter your building and comply with either method:</p>
        <ul>
          <li>Prescriptive Building Option (2018, 2012, 2009)</li>
          <li>Total Building Performance Method (2018, 2012, 2009)</li>
        </ul>
      </div>
      <div class="feature-card">
        <img class="feature-card-image" src="<?php echo esc_url($img_base . '/ashrae-logo.png'); ?>" alt="ASHRAE Standard 90.1" loading="lazy">
        <h4>ASHRAE Standard 90.1</h4>
        <p style="color:var(--gray-600);font-size:14px;margin:-4px 0 12px;">Comply with any of three methods:</p>
        <ul>
          <li>ECB Option (2007, 2010, 2013, 2016)</li>
          <li>Prescriptive Option (2007, 2010, 2013, 2016)</li>
          <li>Appendix G Performance Rating (2007, 2010, 2013)</li>
        </ul>
      </div>
      <div class="feature-card">
        <img class="feature-card-image" src="<?php echo esc_url($img_base . '/libraries.png'); ?>" alt="Predefined libraries" loading="lazy">
        <h4>Predefined &amp; Customizable Libraries</h4>
        <p style="color:var(--gray-600);font-size:14px;margin:-4px 0 12px;">Save time, or create your own:</p>
        <ul>
          <li>Building materials</li>
          <li>Constructs (walls, roof, floors)</li>
          <li>Window types</li>
          <li>Schedules for setpoints, lighting, HVAC</li>
        </ul>
      </div>
      <div class="feature-card">
        <img class="feature-card-image" src="<?php echo esc_url($img_base . '/tech-support.png'); ?>" alt="Free technical support" loading="lazy">
        <h4>Free Technical Support</h4>
        <ul>
          <li>Online, ticket, and email support</li>
          <li>Anytime, anywhere solution center</li>
          <li>Free online video tutorials</li>
          <li>No-cost updates during license period</li>
        </ul>
        <a class="btn btn-secondary btn-sm" href="<?php echo esc_url(home_url('/support/')); ?>" style="margin-top:12px;">Get Support</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
