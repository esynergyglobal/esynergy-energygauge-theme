<?php /* Template Name: Support */ ?>
<?php get_header(); ?>

<!-- HERO -->
<section class="hero animate-fade-up" style="padding:80px 24px 50px;">
  <div class="hero-inner">
    <div class="hero-eyebrow"><?php echo esc_html(eg_field('support_hero_eyebrow', 'Support')); ?></div>
    <h1 style="font-size:clamp(28px,3.5vw,44px);"><?php echo esc_html(eg_field('support_hero_title_pre', 'Get')); ?> <span><?php echo esc_html(eg_field('support_hero_title_highlight', 'Help')); ?></span></h1>
    <p class="hero-sub"><?php echo esc_html(eg_field('support_hero_description', 'Free technical support for all licensed EnergyGauge users. Documentation, FAQs, and a direct line to our support team — all in one place.')); ?></p>
  </div>
</section>

<section class="section animate-fade-up">
  <div class="section-inner">

    <!-- CONTACT + FAQ -->
    <div class="support-grid">
      <div class="support-box">
        <h3><?php echo esc_html(eg_field('contact_title', 'Contact Us')); ?></h3>
        <p><?php echo esc_html(eg_field('contact_description', 'Reach out for licensing questions, technical issues, or general inquiries.')); ?></p>
        <?php $contact_email = eg_field('contact_email', 'info@esynergyglobal.com'); ?>
        <?php if ($contact_email) : ?>
        <div style="margin-bottom:16px;">
          <div style="font-family:var(--font-mono);font-size:12px;color:var(--gray-400);text-transform:uppercase;letter-spacing:0.08em;margin-bottom:4px;">Email</div>
          <a href="mailto:<?php echo esc_attr($contact_email); ?>" style="font-family:var(--font-display);font-weight:600;font-size:16px;color:var(--teal-dim);text-decoration:none;"><?php echo esc_html($contact_email); ?></a>
        </div>
        <?php endif; ?>
        <a class="btn btn-primary" href="<?php echo esc_url(eg_field('contact_button_url', 'https://support.freshservice.com/support/home')); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html(eg_field('contact_button_text', 'Open Support Portal')); ?></a>
      </div>

      <div class="support-box">
        <h3><?php echo esc_html(eg_field('faq_section_title', 'Frequently Asked Questions')); ?></h3>
        <?php
        // Render up to 4 FAQ slots. A slot is shown only if it has a question.
        $faqs = [
            ['q' => eg_field('faq_1_question', 'What operating systems does EnergyGauge support?'), 'a' => eg_field('faq_1_answer', 'EnergyGauge Summit is compatible with Microsoft Windows 7 and newer operating systems.')],
            ['q' => eg_field('faq_2_question', 'How does licensing work?'),                          'a' => eg_field('faq_2_answer', 'EnergyGauge Summit uses annual single-seat, single-user licensing. Free updates are included during your license period.')],
            ['q' => eg_field('faq_3_question', 'What happened with the FSEC/UCF transition?'),      'a' => eg_field('faq_3_answer', 'EnergyGauge is now managed by eSynergy Global. All existing users remain fully supported. The software continues to operate as normal.')],
            ['q' => eg_field('faq_4_question', 'How do I activate my license?'),                    'a' => eg_field('faq_4_answer', 'Visit our support portal for step-by-step activation instructions. You\'ll need your license key, which is provided after purchase.')],
        ];
        $first = true;
        foreach ($faqs as $faq) :
            if (empty($faq['q'])) continue;
            $open_class = $first ? ' open' : '';
            $first = false;
        ?>
        <div class="faq-item<?php echo $open_class; ?>" onclick="this.classList.toggle('open')">
          <div class="faq-q"><?php echo esc_html($faq['q']); ?><span class="toggle">+</span></div>
          <div class="faq-a"><?php echo esc_html($faq['a']); ?></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- DOCUMENTATION (menu-driven) -->
    <div class="section-eyebrow animate-fade-up" style="margin-top:64px;"><?php echo esc_html(eg_field('docs_eyebrow', 'Documentation & Downloads')); ?></div>
    <div style="display:flex;align-items:center;gap:12px;margin-bottom:24px;">
      <h2 class="section-title" style="margin-bottom:0;"><?php echo esc_html(eg_field('docs_title', 'Product Documentation')); ?></h2>
      <?php $docs_version = eg_field('docs_version', 'Ver8.1.1'); ?>
      <?php if ($docs_version) : ?>
        <span class="kb-folder"><?php echo esc_html($docs_version); ?></span>
      <?php endif; ?>
    </div>
    <?php
    // Renders the Documentation menu (registered in functions.php). If the
    // menu hasn't been assigned yet, nothing is output.
    eg_render_documentation_menu();
    ?>

    <!-- SYSTEM REQUIREMENTS -->
    <div class="section-eyebrow animate-fade-up" style="margin-top:64px;"><?php echo esc_html(eg_field('sysreq_eyebrow', 'System Requirements')); ?></div>
    <h2 class="section-title" style="margin-bottom:24px;"><?php echo esc_html(eg_field('sysreq_title', 'Technical specifications')); ?></h2>
    <div class="sys-req">
      <?php
      $sysreqs = [
          ['label' => eg_field('sysreq_1_label', 'Operating System'),   'value' => eg_field('sysreq_1_value', 'Windows 7 or newer')],
          ['label' => eg_field('sysreq_2_label', 'License Type'),       'value' => eg_field('sysreq_2_value', 'Single seat, single user')],
          ['label' => eg_field('sysreq_3_label', 'Simulation Engine'),  'value' => eg_field('sysreq_3_value', 'DOE 2.1E (FSEC enhanced)')],
          ['label' => eg_field('sysreq_4_label', 'Updates'),            'value' => eg_field('sysreq_4_value', 'Free during license period')],
      ];
      foreach ($sysreqs as $req) :
          if (empty($req['label'])) continue;
      ?>
      <div class="sys-req-item">
        <div class="label"><?php echo esc_html($req['label']); ?></div>
        <div class="value"><?php echo esc_html($req['value']); ?></div>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<?php get_footer(); ?>
