<?php /* Template Name: Summit */ ?>
<?php get_header(); ?>

<!-- HERO -->
<section class="hero animate-fade-up" style="padding:80px 24px 60px;">
  <div class="hero-inner">
    <div class="hero-eyebrow">Commercial Buildings</div>
    <h1 style="font-size:clamp(32px,4vw,52px);">EnergyGauge <span>Summit</span></h1>
    <p class="hero-sub">Easy to use software for Building Energy Code Compliance, Energy Analysis and Rating. Available in two versions &mdash; FlaCom and Premier.</p>
    <div class="hero-actions">
      <a class="btn btn-primary" href="<?php echo home_url('/shop/'); ?>">Buy Now</a>
    </div>
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
            <td>2020 (7th Ed), 2023 (8th Ed) FL Code &mdash; ASHRAE 90.1 ECB &amp; Prescriptive</td>
            <td><span class="check">&#10003;</span></td>
            <td class="recommended-col"><span class="check">&#10003;</span></td>
          </tr>
          <tr>
            <td>2020 (7th Ed), 2023 (8th Ed) FL Code &mdash; FBC Total Building Performance</td>
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
            <td>Tax Deduction for Energy Efficient Commercial Buildings</td>
            <td><span class="dash">&mdash;</span></td>
            <td class="recommended-col"><span class="check">&#10003;</span></td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- PRICING CARDS -->
    <div class="pricing-grid animate-fade-up">
      <div class="price-card">
        <h3 style="font-family:var(--font-display);font-weight:700;font-size:20px;margin-bottom:8px;">FlaCom</h3>
        <div class="price-amount">$389</div>
        <div class="price-period">1-year license</div>
        <div style="font-family:var(--font-mono);font-size:13px;color:var(--gray-600);margin-bottom:16px;">$1,050 / 3-year</div>
        <a class="btn btn-amber btn-sm" href="<?php echo home_url('/product/energygauge-summit-flacom/'); ?>">Buy FlaCom</a>
      </div>
      <div class="price-card recommended">
        <div style="font-family:var(--font-mono);font-size:9px;letter-spacing:0.1em;color:var(--teal);font-weight:600;text-transform:uppercase;margin-bottom:8px;">RECOMMENDED</div>
        <h3 style="font-family:var(--font-display);font-weight:700;font-size:20px;margin-bottom:8px;">Premier</h3>
        <div style="text-decoration:line-through;color:var(--gray-400);font-size:14px;">$949</div>
        <div class="price-amount" style="color:var(--teal-dim);">$799</div>
        <div class="price-period">1-year license (promo)</div>
        <div style="font-family:var(--font-mono);font-size:13px;color:var(--gray-600);margin-bottom:16px;"><s style="color:var(--gray-400);">$2,562</s> $2,157 / 3-year</div>
        <a class="btn btn-primary btn-sm" href="<?php echo home_url('/product/energygauge-summit-premier/'); ?>">Buy Premier</a>
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
            <td>Automated ASHRAE 90.1 &amp; IECC code compliance&sup1;</td>
            <td class="recommended-col"><span class="check">&#10003;</span></td>
            <td><span class="dash">&mdash;</span></td>
            <td><span class="dash">&mdash;</span></td>
            <td><span class="dash">&mdash;</span></td>
          </tr>
          <tr>
            <td>Automated LEED simulation capabilities&sup1;</td>
            <td class="recommended-col"><span class="check">&#10003;</span></td>
            <td><span class="dash">&mdash;</span></td>
            <td><span class="dash">&mdash;</span></td>
            <td><span class="dash">&mdash;</span></td>
          </tr>
          <tr>
            <td>Automatic ASHRAE 90.1 Appendix G calculations</td>
            <td class="recommended-col"><span class="check">&#10003;</span></td>
            <td><span class="dash">&mdash;</span></td>
            <td><span class="dash">&mdash;</span></td>
            <td><span class="dash">&mdash;</span></td>
          </tr>
          <tr>
            <td>Qualified software for federal tax deductions</td>
            <td class="recommended-col"><span class="check">&#10003;</span></td>
            <td><span class="dash">&mdash;</span></td>
            <td><span class="dash">&mdash;</span></td>
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
            <td><span class="dash">&mdash;</span></td>
            <td><span class="dash">&mdash;</span></td>
            <td><span class="dash">&mdash;</span></td>
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
        <div class="feature-card-icon">&#128203;</div>
        <h4>Florida Energy Code (8th Edition)</h4>
        <ul>
          <li>ASHRAE Energy Cost Budget Option</li>
          <li>ASHRAE Prescriptive Compliance</li>
          <li>ASHRAE Appendix G Performance Rating</li>
          <li>FBC Total Building Performance</li>
          <li>FBC Prescriptive &amp; Component Performance</li>
        </ul>
      </div>
      <div class="feature-card">
        <div class="feature-card-icon">&#9889;</div>
        <h4>One Button Compliance</h4>
        <ul>
          <li>Auto-generates reference buildings</li>
          <li>Auto-generates baseline buildings</li>
          <li>Florida, IECC, LEED, ASHRAE 90.1</li>
          <li>IRS tax deduction calculations</li>
        </ul>
      </div>
      <div class="feature-card">
        <div class="feature-card-icon">&#127941;</div>
        <h4>LEED Certification</h4>
        <ul>
          <li>Minimum Energy Performance credit</li>
          <li>Optimize Energy Performance credit</li>
          <li>v4.0 and v2009 supported</li>
        </ul>
      </div>
      <div class="feature-card">
        <div class="feature-card-icon">&#128176;</div>
        <h4>Tax Deductions</h4>
        <ul>
          <li>Partial credit for lighting</li>
          <li>Partial credit for envelope</li>
          <li>Partial credit for HVAC</li>
          <li>Whole building credit</li>
        </ul>
      </div>
      <div class="feature-card">
        <div class="feature-card-icon">&#128208;</div>
        <h4>ASHRAE Standard 90.1</h4>
        <ul>
          <li>ECB Option (2007, 2010, 2013, 2016)</li>
          <li>Prescriptive Option</li>
          <li>Appendix G Performance Rating</li>
        </ul>
      </div>
      <div class="feature-card">
        <div class="feature-card-icon">&#128218;</div>
        <h4>Predefined Libraries</h4>
        <ul>
          <li>Building materials</li>
          <li>Wall, roof, floor constructs</li>
          <li>Window types</li>
          <li>Schedules for setpoints, lighting, HVAC</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
