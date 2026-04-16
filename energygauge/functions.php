<?php
/**
 * EnergyGauge Theme Functions
 */

// Theme setup
function energygauge_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);

    register_nav_menus([
        'primary'       => __('Primary Navigation', 'energygauge'),
        'documentation' => __('Support Page Documentation List', 'energygauge'),
    ]);

    // WooCommerce support
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'energygauge_setup');

// WooCommerce: Remove default wrapper and use our own
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

function energygauge_wc_wrapper_start() {
    echo '<div class="woocommerce-wrapper">';
}
function energygauge_wc_wrapper_end() {
    echo '</div>';
}
add_action('woocommerce_before_main_content', 'energygauge_wc_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'energygauge_wc_wrapper_end', 10);

// Enqueue fonts and scripts
function energygauge_enqueue() {
    // Google Fonts
    wp_enqueue_style(
        'energygauge-fonts',
        'https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;0,600;1,400&family=JetBrains+Mono:wght@400;500;600&display=swap',
        [],
        null
    );

    // Scripts are inlined via energygauge_inline_js
}
add_action('wp_enqueue_scripts', 'energygauge_enqueue');

// Inline CSS directly into head (bulletproof for WordPress.com)
function energygauge_inline_css() {
    $css_file = get_template_directory() . '/assets/css/main.css';
    if (file_exists($css_file)) {
        echo '<style id="energygauge-inline-css">' . "\n";
        include $css_file;
        echo "\n" . '</style>';
    }
}
add_action('wp_head', 'energygauge_inline_css', 20);

// Helper: get docs URL
function eg_docs_url($path) {
    return get_template_directory_uri() . '/assets/docs/' . $path;
}

// Helper: safely read ACF field with fallback to default if ACF is unavailable,
// the field is empty, or the field doesn't exist on this post.
function eg_field($key, $default = '') {
    if (!function_exists('get_field')) {
        return $default;
    }
    $value = get_field($key);
    if ($value === '' || $value === null || $value === false) {
        return $default;
    }
    return $value;
}

// Register the theme's acf-json/ directory so ACF loads field group definitions
// from version-controlled JSON files instead of relying on the database alone.
add_filter('acf/settings/load_json', function($paths) {
    $paths[] = get_template_directory() . '/acf-json';
    return $paths;
});

// Also save field group changes made in the admin UI back into the same folder
// so they stay in sync with the theme (only takes effect if the folder is writable).
add_filter('acf/settings/save_json', function($path) {
    $theme_path = get_template_directory() . '/acf-json';
    return is_writable($theme_path) ? $theme_path : $path;
});

// Disable admin bar on frontend for cleaner look
add_filter('show_admin_bar', '__return_false');

// Remove default WordPress emoji scripts
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// 301 redirect /resources/ to /support/ — the two pages were consolidated.
// Runs before template dispatch so it fires whether or not a page with that
// slug still exists in the database.
add_action('template_redirect', function() {
    $uri = isset($_SERVER['REQUEST_URI']) ? strtok($_SERVER['REQUEST_URI'], '?') : '';
    $uri = rtrim($uri, '/');
    if ($uri === '/resources') {
        wp_redirect(home_url('/support/'), 301);
        exit;
    }
});

// Helper: render the Documentation menu as a nested accordion for the
// Support page. Top-level items become category headers; their children
// render as a list of document links inside each expandable panel.
// Auto-detects a type badge (PDF / CHM / HTM / WEB) from each link's
// URL extension so the admin doesn't have to specify it manually.
function eg_render_documentation_menu() {
    $menu_location = 'documentation';
    $locations = get_nav_menu_locations();
    if (empty($locations[$menu_location])) {
        return; // No menu assigned yet — render nothing.
    }
    $menu = wp_get_nav_menu_object($locations[$menu_location]);
    if (!$menu) return;

    $items = wp_get_nav_menu_items($menu->term_id);
    if (empty($items)) return;

    // Group into parent => [children...]
    $top = [];
    $children = [];
    foreach ($items as $item) {
        if (empty($item->menu_item_parent) || $item->menu_item_parent === '0') {
            $top[$item->ID] = $item;
        } else {
            $children[$item->menu_item_parent][] = $item;
        }
    }

    foreach ($top as $parent) {
        $kids = isset($children[$parent->ID]) ? $children[$parent->ID] : [];

        // Parent with no children → render as a single standalone link.
        if (empty($kids)) {
            $url = esc_url($parent->url ?: '#');
            $title = esc_html($parent->title);
            echo '<a href="' . $url . '" target="_blank" rel="noopener" class="kb-doc" style="max-width:none;margin-bottom:12px;">';
            echo '  <div class="kb-doc-left">';
            echo '    <span class="type-badge ' . esc_attr(eg_doc_type_class($parent->url)) . '">' . esc_html(eg_doc_type_label($parent->url)) . '</span>';
            echo '    <span class="kb-doc-name">' . $title . '</span>';
            echo '  </div>';
            echo '  <div class="kb-doc-right"><span class="kb-doc-arrow">&nearr;</span></div>';
            echo '</a>';
            continue;
        }

        // Parent with children → accordion section.
        $count = count($kids);
        $desc = !empty($parent->description) ? $parent->description : '';
        echo '<div class="kb-section">';
        echo '  <div class="kb-header" role="button" tabindex="0">';
        echo '    <div style="display:flex;align-items:center;">';
        echo '      <span class="kb-folder">' . esc_html($parent->title) . '</span>';
        if ($desc) echo '      <span class="kb-desc">' . esc_html($desc) . '</span>';
        echo '    </div>';
        echo '    <div style="display:flex;align-items:center;">';
        echo '      <span class="kb-count">' . (int) $count . ' item' . ($count === 1 ? '' : 's') . '</span>';
        echo '      <span class="kb-toggle">+</span>';
        echo '    </div>';
        echo '  </div>';
        echo '  <div class="kb-body"><div class="kb-body-inner">';
        foreach ($kids as $k) {
            $url = esc_url($k->url ?: '#');
            echo '<a href="' . $url . '" target="_blank" rel="noopener" class="kb-doc">';
            echo '  <div class="kb-doc-left">';
            echo '    <span class="type-badge ' . esc_attr(eg_doc_type_class($k->url)) . '">' . esc_html(eg_doc_type_label($k->url)) . '</span>';
            echo '    <span class="kb-doc-name">' . esc_html($k->title) . '</span>';
            echo '  </div>';
            echo '  <div class="kb-doc-right"><span class="kb-doc-arrow">&nearr;</span></div>';
            echo '</a>';
        }
        echo '  </div></div>';
        echo '</div>';
    }
}

function eg_doc_type_label($url) {
    $ext = strtolower(pathinfo(parse_url($url, PHP_URL_PATH) ?: '', PATHINFO_EXTENSION));
    switch ($ext) {
        case 'pdf': return 'PDF';
        case 'chm': return 'CHM';
        case 'htm': case 'html': return 'HTM';
        case 'doc': case 'docx': return 'DOC';
        case 'zip': return 'ZIP';
        default:    return 'WEB';
    }
}

function eg_doc_type_class($url) {
    $label = strtolower(eg_doc_type_label($url));
    return 'type-' . $label;
}
