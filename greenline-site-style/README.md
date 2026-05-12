# Greenline Site Toolkit

Version: `1.1.0`

Custom WordPress practice plugin for the Greenline Studio portfolio project.

## Features

1. Admin settings page
   - Location: `Settings > Greenline Toolkit`
   - Stores contact email, phone, CTA content, CTA button, and business hours.

2. CTA shortcode
   - Usage: `[greenline_cta]`
   - Optional attributes: `heading`, `text`, `button_text`, `button_url`

3. Business hours shortcode
   - Usage: `[greenline_hours]`
   - Pulls business hours, phone, and email from the settings page.

4. Portfolio custom post type
   - Admin menu: `Portfolio Projects`
   - REST-enabled post type for portfolio/project content.

5. REST API endpoint
   - URL: `/wp-json/greenline/v1/portfolio`
   - Optional query: `?per_page=6`

6. WooCommerce active check
   - Shortcode: `[greenline_woocommerce_status]`
   - Shows whether WooCommerce is active.
   - Displays a settings-page admin notice.

## Interview Talking Point

This plugin demonstrates practical WordPress development concepts: settings API, sanitisation/escaping, shortcodes, custom post types, REST API routes, asset enqueueing, and plugin dependency awareness.

For the step-by-step improvement process, see:

```text
../RELEASE_NOTES.md
```
