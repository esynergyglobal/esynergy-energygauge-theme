# EnergyGauge WordPress Theme

Custom WordPress theme for **EnergyGauge by eSynergy Global** — commercial building energy simulation software.

Deployed on WordPress.com (staging: `vijayf245411078-qecpw.wpcomstaging.com`).

## Structure

```
energygauge/
├── style.css              Theme header + metadata
├── functions.php          Theme setup, WooCommerce support, asset loading
├── header.php             Site-wide nav + transition banner
├── footer.php             Site-wide footer
├── index.php              Fallback template (renders WP content)
├── 404.php                Not Found template
├── front-page.php         Homepage (hero + product card + value props)
├── page.php               Default page template (Cart, Checkout, etc.)
├── page-summit.php        Summit product info page
├── page-resources.php     Knowledge base / Resources page
├── page-support.php       Support / FAQ page
├── woocommerce.php        WooCommerce shop + product pages wrapper
└── assets/
    ├── css/main.css       All theme styles (inlined by functions.php)
    ├── js/main.js         Banner dismiss, accordions, fade animations
    └── docs/summit/       Product documentation (PDFs, CHM, Web Help)
```

## Deployment

1. Zip the `energygauge/` folder (use Python zipfile, not PowerShell — backslash paths break on Linux hosts)
2. Upload via **Appearance > Themes > Add New > Upload Theme** in WordPress admin
3. If the theme is already active, first switch to Twenty Twenty-Four, delete the old version, then upload

## Key WordPress Pages

| Page | Template | Content Source |
|------|----------|----------------|
| Home | `front-page.php` | Hardcoded in template |
| Summit | `page-summit.php` | Hardcoded in template |
| Resources | `page-resources.php` | Hardcoded in template |
| Support | `page-support.php` | Hardcoded in template |
| Shop | `woocommerce.php` | WooCommerce auto-generates |
| Cart / Checkout / My Account | `page.php` | WooCommerce blocks/shortcodes in page content |
| Refund & Returns | `page.php` | Page content in WP editor |

## Products (WooCommerce)

- **EnergyGauge Summit FlaCom** — $389 — `/product/energygauge-summit-flacom/`
- **EnergyGauge Summit Premier** — $799 — `/product/energygauge-summit-premier/`
