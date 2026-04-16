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

## ACF (Advanced Custom Fields)

Certain page templates pull their editable text/prices/URLs from ACF fields instead
of hardcoding them, so content can be updated from the WordPress admin without a
theme re-upload. Field definitions live in `energygauge/acf-json/` and are loaded
via the `acf/settings/load_json` filter in `functions.php`.

**Currently using ACF:**
- `page-summit.php` — hero section + FlaCom/Premier pricing cards

### First-time setup after uploading the theme

1. Install the **Advanced Custom Fields** plugin (free version is fine).
2. In WP admin, go to **ACF > Field Groups**.
3. Look for a "Sync available" notice at the top. Click **Review sync** → **Sync changes**
   to import the field groups defined in `acf-json/` into the database.
4. Edit any page that uses the template (e.g. Summit) — the field inputs appear
   below the normal content editor.

### Fallback behavior

Every ACF field read in the templates uses the `eg_field($key, $default)` helper
defined in `functions.php`. If ACF is not installed, the plugin is deactivated, or
a field is left blank, the template falls back to the hardcoded default text — so
the site never displays broken/empty content.

### Adding new field groups

1. Define the group in `energygauge/acf-json/group_<name>.json`.
2. Update the relevant template to call `eg_field('field_name', 'fallback')`.
3. After the theme is uploaded, click **Sync** in ACF > Field Groups.
