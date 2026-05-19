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

### 8. Google Tag Manager support

Added a `GTM Container ID` setting to:

```text
Settings > Greenline Toolkit
```

When a valid ID such as `GTM-XXXXXXX` is saved, the plugin outputs:

- GTM script in `wp_head`
- GTM noscript iframe in `wp_body_open`

WordPress and analytics concepts demonstrated:

- GTM-ready WordPress integration
- Admin-configurable tracking ID
- Avoiding direct theme edits
- Safe validation for `GTM-` container IDs

### 9. Contact form lead tracking

Added a small frontend tracking script:

```text
greenline-site-style/tracking-events.js
```

When a Contact Form 7 form successfully sends, the script pushes this event into the GTM data layer:

```javascript
{
  event: "generate_lead",
  form_plugin: "contact_form_7",
  form_id: "..."
}
```

This lets GTM send a GA4 lead event only after the form submission succeeds, instead of counting every form button click as a lead.

WordPress and analytics concepts demonstrated:

- Frontend event listening
- Contact Form 7 event integration
- GTM data layer events
- GA4 lead/conversion tracking
- Avoiding personal information in analytics events

### 10. Phone click tracking

Updated the business hours shortcode so the phone number becomes a clickable `tel:` link. Added tracking logic in:

```text
greenline-site-style/tracking-events.js
```

When a visitor clicks the phone link, the script pushes this event into the GTM data layer:

```javascript
{
  event: "phone_click",
  event_source: "phone_link",
  link_url: "tel:..."
}
```

This lets GTM send a GA4 event for phone enquiries, which is useful for service businesses that receive leads by phone as well as forms.

WordPress and analytics concepts demonstrated:

- Click event tracking
- `tel:` link handling
- GTM data layer events
- GA4 contact-intent tracking

### 11. Email click tracking

Added `mailto:` link tracking to the same frontend tracking script:

```text
greenline-site-style/tracking-events.js
```

When a visitor clicks an email link, the script pushes this event into the GTM data layer:

```javascript
{
  event: "email_click",
  event_source: "email_link",
  link_url: "mailto:..."
}
```

This helps track users who prefer to enquire by email rather than submitting a form or clicking a phone number.

WordPress and analytics concepts demonstrated:

- Email link click tracking
- Reusable JavaScript event tracking pattern
- GTM custom event triggers
- GA4 enquiry-intent reporting

## Interview Talking Point

```text
I upgraded the original styling plugin into a small WordPress site toolkit. I added an admin settings page, reusable shortcodes, a portfolio custom post type, a custom REST API endpoint, WooCommerce awareness, GTM support, lead tracking for successful contact form submissions, phone click tracking, and email click tracking. This helped me practise WordPress plugin structure, the Settings API, sanitisation and escaping, shortcodes, custom post types, REST API routes, frontend event tracking, and analytics QA.
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
- Add a GTM Container ID in `Settings > Greenline Toolkit` and confirm the GTM script appears in page source.
- Submit a Contact Form 7 form and confirm the `generate_lead` event appears in GTM Preview.
- Click the phone link in the `[greenline_hours]` block and confirm the `phone_click` event appears in GTM Preview.
- Click the email link in the `[greenline_hours]` block and confirm the `email_click` event appears in GTM Preview.
