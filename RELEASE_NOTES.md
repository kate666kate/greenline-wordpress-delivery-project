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

### 12. CTA click tracking

Added click tracking for buttons output by:

```text
[greenline_cta]
```

The tracker also recognises WordPress block buttons that link to `/contact/`, such as `Start a conversation`.

When a visitor clicks a CTA button, the script pushes this event into the GTM data layer:

```javascript
{
  event: "cta_click",
  event_source: "greenline_cta",
  link_text: "...",
  link_url: "..."
}
```

This helps measure whether visitors are engaging with key calls to action before submitting a form, calling, or emailing.

WordPress and analytics concepts demonstrated:

- CTA engagement tracking
- Event parameters
- Reusable frontend tracking script
- GA4 funnel and intent reporting
- Support for shortcode CTAs and WordPress block buttons

### 13. Tracking summary display

Added:

```text
[greenline_tracking_summary]
```

This outputs a visual summary block for a case study or portfolio page. It explains the tracking funnel in plain language:

- Visitor lands on the site
- Visitor clicks a CTA
- Visitor submits a form, calls, or emails
- GA4 receives the enquiry event through GTM

The block lists the main events used in the project:

```text
page_view
cta_click
generate_lead
phone_click
email_click
```

This makes the analytics work easier to demonstrate in an interview because the page now shows both the business reason and the technical tracking events.

WordPress and analytics concepts demonstrated:

- Shortcode-based reporting component
- Case study presentation layer
- GA4 event naming
- GTM data layer workflow explanation
- Turning technical tracking work into client-friendly language

### 14. Client handover checklist

Added:

```text
[greenline_handover_checklist]
```

This outputs a visual handover board for:

- Client training
- Launch checks
- Maintenance rhythm
- Support boundaries

The goal is to show the work that happens after a WordPress website is built: training the client, checking the launch, planning updates, and making sure risky changes are escalated instead of done casually.

Updated:

```text
CLIENT_TRAINING_GUIDE.md
```

The guide now includes:

- Safe client edits
- Shortcode usage
- Monthly maintenance checks
- Quarterly review checks
- Handover call agenda
- Items that require developer support

WordPress and operations concepts demonstrated:

- Client handover
- Maintenance planning
- Support boundaries
- Training documentation
- Turning a website build into an ongoing support workflow

### 15. Website audit summary

Added:

```text
[greenline_site_audit_summary]
```

This outputs a launch-readiness summary for:

- Performance
- Security
- SEO
- Forms
- Recovery

The goal is to show how a finished WordPress site can be reviewed before handover. It makes the project stronger for Website Developer roles because it connects page building with technical QA, maintenance planning, and client-facing reporting.

WordPress and operations concepts demonstrated:

- Performance awareness
- Security maintenance planning
- SEO launch review
- Form testing
- Backup and recovery thinking
- Client-friendly QA reporting

### 16. WooCommerce readiness checklist

Added:

```text
[greenline_woocommerce_readiness]
```

This outputs an ecommerce launch checklist for:

- Products
- Checkout
- Testing
- Operations

The block uses the existing WooCommerce active check and adds a client-friendly explanation of what should be reviewed before enabling shop features.

WordPress and WooCommerce concepts demonstrated:

- WooCommerce dependency awareness
- Product and checkout readiness
- Payment, shipping, tax, and email testing awareness
- Test order workflow
- Store operations planning

## Interview Talking Point

```text
I upgraded the original styling plugin into a small WordPress site toolkit. I added an admin settings page, reusable shortcodes, a portfolio custom post type, a custom REST API endpoint, WooCommerce awareness, GTM support, lead tracking for successful contact form submissions, phone click tracking, email click tracking, CTA click tracking, a tracking summary block, a client handover checklist, a website audit summary, and a WooCommerce readiness checklist. This helped me practise WordPress plugin structure, the Settings API, sanitisation and escaping, shortcodes, custom post types, REST API routes, frontend event tracking, analytics QA, client-friendly reporting, website handover planning, launch-readiness checks, and ecommerce setup thinking.
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
- Click the `[greenline_cta]` button and confirm the `cta_click` event appears in GTM Preview.
- Add `[greenline_tracking_summary]` to the case study page and confirm the tracking funnel summary displays clearly.
- Add `[greenline_handover_checklist]` to the case study page and confirm the handover board displays clearly.
- Add `[greenline_site_audit_summary]` to the case study page and confirm the audit summary displays clearly.
- Add `[greenline_woocommerce_readiness]` to the case study page and confirm the ecommerce readiness checklist displays clearly.
