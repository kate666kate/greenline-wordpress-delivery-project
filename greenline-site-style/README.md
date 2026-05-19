# Greenline Site Toolkit

Version: `1.2.2`

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

7. API-powered portfolio grid
   - Shortcode: `[greenline_portfolio_grid]`
   - Uses JavaScript `fetch` to load `/wp-json/greenline/v1/portfolio`.
   - Renders published portfolio projects as frontend cards.

8. Google Tag Manager support
   - Setting: `Settings > Greenline Toolkit > GTM Container ID`
   - Example value: `GTM-XXXXXXX`
   - Outputs the GTM `<head>` script and `<body>` noscript iframe without editing theme files.

9. Contact form lead tracking
   - File: `tracking-events.js`
   - Listens for Contact Form 7 successful submissions.
   - Pushes a `generate_lead` event into `dataLayer`.
   - Designed to be connected to a GA4 event tag inside GTM.

10. Phone click tracking
   - The `[greenline_hours]` shortcode outputs the phone number as a `tel:` link.
   - `tracking-events.js` listens for phone link clicks.
   - Pushes a `phone_click` event into `dataLayer`.
   - Designed to be connected to a GA4 event tag inside GTM.

11. Email click tracking
   - The `[greenline_hours]` shortcode outputs the email as a `mailto:` link.
   - `tracking-events.js` listens for email link clicks.
   - Pushes an `email_click` event into `dataLayer`.
   - Designed to be connected to a GA4 event tag inside GTM.

## Interview Talking Point

This plugin demonstrates practical WordPress development concepts: settings API, sanitisation/escaping, shortcodes, custom post types, REST API routes, asset enqueueing, JavaScript API rendering, Google Tag Manager support, lead-event tracking, phone-click tracking, email-click tracking, and plugin dependency awareness.

For the step-by-step improvement process, see:

```text
../RELEASE_NOTES.md
```
