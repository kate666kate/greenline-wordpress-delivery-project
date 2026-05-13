# Release Notes

## v1.1.0 - Greenline Site Toolkit Upgrade

This release upgrades the original styling-only plugin into a small WordPress site toolkit. The goal is to demonstrate practical custom plugin development for agency-style WordPress work.

## Step-by-Step Improvements

### 1. Admin settings page

Added `Settings > Greenline Toolkit` so a site manager can update common business content without editing code:

- Contact email
- Phone number
- CTA heading
- CTA text
- CTA button text
- CTA button URL
- Business hours

WordPress concepts demonstrated:

- Settings API
- Sanitisation
- Escaping output
- Client-editable content

### 2. CTA shortcode

Added:

```text
[greenline_cta]
```

This outputs a reusable call-to-action block using the settings page values.

WordPress concepts demonstrated:

- Shortcode API
- Reusable content components
- Frontend output escaping

### 3. Business hours shortcode

Added:

```text
[greenline_hours]
```

This outputs business hours, contact email, and phone number from the settings page.

WordPress concepts demonstrated:

- Shortcode output
- Client-editable business information
- Safe email and text output

### 4. Portfolio custom post type

Added `Portfolio Projects` as a custom post type.

This allows project/case-study content to be managed separately from normal pages.

WordPress concepts demonstrated:

- `register_post_type`
- Admin menu integration
- REST-enabled content type
- Rewrite rules and activation/deactivation handling

### 5. REST API endpoint

Added:

```text
/wp-json/greenline/v1/portfolio
```

This returns published portfolio projects as JSON.

WordPress concepts demonstrated:

- `register_rest_route`
- `WP_Query`
- JSON API output
- API-aware WordPress development

### 6. WooCommerce active check

Added:

```text
[greenline_woocommerce_status]
```

This checks whether WooCommerce is active and displays a status message. The settings page also shows an admin notice.

WordPress concepts demonstrated:

- Plugin dependency awareness
- Conditional feature checks
- WooCommerce readiness

### 7. API-powered portfolio grid

Added:

```text
[greenline_portfolio_grid]
```

This shortcode renders a frontend grid and uses JavaScript `fetch` to load project data from the custom REST API endpoint.

WordPress and frontend concepts demonstrated:

- Shortcode-rendered frontend mount point
- `wp_enqueue_script`
- Passing REST API data to JavaScript
- JavaScript `fetch`
- Rendering API data into frontend cards
- Loading, empty, and error states

## Interview Talking Point

```text
I upgraded the original styling plugin into a small WordPress site toolkit. I added an admin settings page, reusable shortcodes, a portfolio custom post type, a custom REST API endpoint, and a WooCommerce active check. This helped me practise WordPress plugin structure, the Settings API, sanitisation and escaping, shortcodes, custom post types, REST API routes, and plugin dependency awareness.
```

## Test Checklist

- Open `Settings > Greenline Toolkit`.
- Save contact details, CTA content, and business hours.
- Add `[greenline_cta]` to a page.
- Add `[greenline_hours]` to a page.
- Create a `Portfolio Project`.
- Visit `/wp-json/greenline/v1/portfolio`.
- Add `[greenline_woocommerce_status]` to a page.
- Add `[greenline_portfolio_grid]` to a page and confirm projects render as cards.
