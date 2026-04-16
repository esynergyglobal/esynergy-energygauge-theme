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
        'primary' => __('Primary Navigation', 'energygauge'),
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
