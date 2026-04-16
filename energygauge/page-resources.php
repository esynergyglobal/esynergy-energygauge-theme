<?php /* Template Name: Resources */ ?>
<?php get_header(); ?>

<!-- HERO -->
<section class="hero animate-fade-up" style="padding:80px 24px 50px;">
  <div class="hero-inner">
    <div class="hero-eyebrow">Resources</div>
    <h1 style="font-size:clamp(28px,3.5vw,44px);">Support &amp; <span>Knowledge Base</span></h1>
    <p class="hero-sub">Documentation, downloads, and support for EnergyGauge Summit.</p>
  </div>
</section>

<section class="section animate-fade-up">
  <div class="section-inner">

    <!-- TECH SUPPORT -->
    <div class="section-eyebrow">Tech Support</div>
    <h2 class="section-title" style="margin-bottom:24px;">Need Help?</h2>
    <a href="https://support.freshservice.com/support/home" target="_blank" rel="noopener noreferrer" class="kb-doc" style="max-width:672px;padding:24px;border-radius:var(--radius-lg);box-shadow:var(--shadow-card);margin-bottom:48px;background:var(--white);display:flex;">
      <div class="kb-doc-left" style="gap:16px;">
        <div style="width:48px;height:48px;border-radius:12px;background:var(--teal-glow);color:var(--teal);display:flex;align-items:center;justify-content:center;font-size:24px;flex-shrink:0;">&#127915;</div>
        <div>
          <div style="font-family:var(--font-display);font-weight:700;font-size:18px;color:var(--gray-800);margin-bottom:4px;">Submit a Support Ticket</div>
          <div style="font-size:14px;color:var(--gray-600);margin-bottom:8px;">Access the support portal to submit a ticket, check status, or browse solutions.</div>
          <div style="font-family:var(--font-display);font-weight:600;font-size:14px;color:var(--teal-dim);">Open Support Portal &nearr;</div>
        </div>
      </div>
    </a>

    <!-- KNOWLEDGE BASE -->
    <div class="section-eyebrow">Knowledge Base</div>
    <div style="display:flex;align-items:center;gap:12px;margin-bottom:24px;">
      <h2 class="section-title" style="margin-bottom:0;">EnergyGauge Summit</h2>
      <span class="kb-folder">Ver8.1.1</span>
    </div>

    <!-- ChmHelp -->
    <div class="kb-section">
      <div class="kb-header" role="button" tabindex="0">
        <div style="display:flex;align-items:center;">
          <span class="kb-folder">ChmHelp</span>
          <span class="kb-desc">Windows Compiled HTML Help file for offline use.</span>
        </div>
        <div style="display:flex;align-items:center;">
          <span class="kb-count">2 items</span>
          <span class="kb-toggle">+</span>
        </div>
      </div>
      <div class="kb-body">
        <div class="kb-body-inner">
          <a href="<?php echo eg_docs_url('summit/ChmHelp/EnergyGaugeSummit.chm'); ?>" class="kb-doc">
            <div class="kb-doc-left">
              <span class="type-badge type-chm">CHM</span>
              <span class="kb-doc-name">EnergyGaugeSummit.chm</span>
            </div>
            <div class="kb-doc-right">
              <span class="kb-doc-size">5.6 MB</span>
              <span class="kb-doc-arrow">&darr;</span>
            </div>
          </a>
          <a href="<?php echo eg_docs_url('summit/ChmHelp/Index.HTM'); ?>" class="kb-doc">
            <div class="kb-doc-left">
              <span class="type-badge type-htm">HTM</span>
              <span class="kb-doc-name">Index.HTM</span>
            </div>
            <div class="kb-doc-right">
              <span class="kb-doc-size">349 B</span>
              <span class="kb-doc-arrow">&darr;</span>
            </div>
          </a>
        </div>
      </div>
    </div>

    <!-- PdfHelp -->
    <div class="kb-section">
      <div class="kb-header" role="button" tabindex="0">
        <div style="display:flex;align-items:center;">
          <span class="kb-folder">PdfHelp</span>
          <span class="kb-desc">Complete help manual in PDF format.</span>
        </div>
        <div style="display:flex;align-items:center;">
          <span class="kb-count">2 items</span>
          <span class="kb-toggle">+</span>
        </div>
      </div>
      <div class="kb-body">
        <div class="kb-body-inner">
          <a href="<?php echo eg_docs_url('summit/PdfHelp/EnergyGaugeSummit.pdf'); ?>" class="kb-doc">
            <div class="kb-doc-left">
              <span class="type-badge type-pdf">PDF</span>
              <span class="kb-doc-name">EnergyGaugeSummit.pdf</span>
            </div>
            <div class="kb-doc-right">
              <span class="kb-doc-size">5.5 MB</span>
              <span class="kb-doc-arrow">&darr;</span>
            </div>
          </a>
          <a href="<?php echo eg_docs_url('summit/PdfHelp/Index.HTM'); ?>" class="kb-doc">
            <div class="kb-doc-left">
              <span class="type-badge type-htm">HTM</span>
              <span class="kb-doc-name">Index.HTM</span>
            </div>
            <div class="kb-doc-right">
              <span class="kb-doc-size">272 B</span>
              <span class="kb-doc-arrow">&darr;</span>
            </div>
          </a>
        </div>
      </div>
    </div>

    <!-- ReleaseNotes -->
    <div class="kb-section">
      <div class="kb-header" role="button" tabindex="0">
        <div style="display:flex;align-items:center;">
          <span class="kb-folder">ReleaseNotes</span>
          <span class="kb-desc">Version history and detailed change documentation.</span>
        </div>
        <div style="display:flex;align-items:center;">
          <span class="kb-count">3 items</span>
          <span class="kb-toggle">+</span>
        </div>
      </div>
      <div class="kb-body">
        <div class="kb-body-inner">
          <a href="<?php echo eg_docs_url('summit/ReleaseNotes/ReleaseNotes.pdf'); ?>" class="kb-doc">
            <div class="kb-doc-left">
              <span class="type-badge type-pdf">PDF</span>
              <span class="kb-doc-name">ReleaseNotes.pdf</span>
            </div>
            <div class="kb-doc-right">
              <span class="kb-doc-size">518 KB</span>
              <span class="kb-doc-arrow">&darr;</span>
            </div>
          </a>
          <a href="<?php echo eg_docs_url('summit/ReleaseNotes/ReleaseNotesSummit.pdf'); ?>" class="kb-doc">
            <div class="kb-doc-left">
              <span class="type-badge type-pdf">PDF</span>
              <span class="kb-doc-name">ReleaseNotesSummit.pdf</span>
            </div>
            <div class="kb-doc-right">
              <span class="kb-doc-size">98 KB</span>
              <span class="kb-doc-arrow">&darr;</span>
            </div>
          </a>
          <a href="<?php echo eg_docs_url('summit/ReleaseNotes/Index.HTM'); ?>" class="kb-doc">
            <div class="kb-doc-left">
              <span class="type-badge type-htm">HTM</span>
              <span class="kb-doc-name">Index.HTM</span>
            </div>
            <div class="kb-doc-right">
              <span class="kb-doc-size">204 B</span>
              <span class="kb-doc-arrow">&darr;</span>
            </div>
          </a>
        </div>
      </div>
    </div>

    <!-- WebHelp -->
    <div class="kb-section">
      <div class="kb-header" role="button" tabindex="0">
        <div style="display:flex;align-items:center;">
          <span class="kb-folder">WebHelp</span>
          <span class="kb-desc">Full interactive web-based help system with searchable topics.</span>
        </div>
        <div style="display:flex;align-items:center;">
          <span class="kb-count">1 item</span>
          <span class="kb-toggle">+</span>
        </div>
      </div>
      <div class="kb-body">
        <div class="kb-body-inner">
          <a href="<?php echo eg_docs_url('summit/WebHelp/Index.HTM'); ?>" target="_blank" class="kb-doc">
            <div class="kb-doc-left">
              <span class="type-badge type-web">WEB</span>
              <span class="kb-doc-name">Open Web Help</span>
            </div>
            <div class="kb-doc-right">
              <span class="kb-doc-size">Web App</span>
              <span class="kb-doc-arrow">&nearr;</span>
            </div>
          </a>
        </div>
      </div>
    </div>

    <!-- WhatsNew -->
    <div class="kb-section">
      <div class="kb-header" role="button" tabindex="0">
        <div style="display:flex;align-items:center;">
          <span class="kb-folder">WhatsNew</span>
          <span class="kb-desc">Latest enhancements and changes in the current release.</span>
        </div>
        <div style="display:flex;align-items:center;">
          <span class="kb-count">3 items</span>
          <span class="kb-toggle">+</span>
        </div>
      </div>
      <div class="kb-body">
        <div class="kb-body-inner">
          <a href="<?php echo eg_docs_url('summit/WhatsNew/ReleaseNotes.pdf'); ?>" class="kb-doc">
            <div class="kb-doc-left">
              <span class="type-badge type-pdf">PDF</span>
              <span class="kb-doc-name">ReleaseNotes.pdf</span>
            </div>
            <div class="kb-doc-right">
              <span class="kb-doc-size">962 KB</span>
              <span class="kb-doc-arrow">&darr;</span>
            </div>
          </a>
          <a href="<?php echo eg_docs_url('summit/WhatsNew/WhatsNewDetail.HTM'); ?>" class="kb-doc">
            <div class="kb-doc-left">
              <span class="type-badge type-htm">HTM</span>
              <span class="kb-doc-name">WhatsNewDetail.HTM</span>
            </div>
            <div class="kb-doc-right">
              <span class="kb-doc-size">195 B</span>
              <span class="kb-doc-arrow">&darr;</span>
            </div>
          </a>
          <a href="<?php echo eg_docs_url('summit/WhatsNew/Index.HTM'); ?>" class="kb-doc">
            <div class="kb-doc-left">
              <span class="type-badge type-htm">HTM</span>
              <span class="kb-doc-name">Index.HTM</span>
            </div>
            <div class="kb-doc-right">
              <span class="kb-doc-size">165 B</span>
              <span class="kb-doc-arrow">&darr;</span>
            </div>
          </a>
        </div>
      </div>
    </div>

  </div>
</section>

<?php get_footer(); ?>
