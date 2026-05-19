# GA4 (Google Analytics 4) And GTM (Google Tag Manager) Setup Notes

This document explains how GA4 (Google Analytics 4) and GTM (Google Tag Manager) can be prepared for a WordPress website project.

It is written as an implementation checklist for a small business website, not as a replacement for the official Google documentation.

## Why GA4 (Google Analytics 4) And GTM (Google Tag Manager) Matter

GA4 (Google Analytics 4) helps the client understand website activity:

- How many people visit the site
- Which pages they view
- Where visitors come from
- Whether users submit forms or interact with key calls to action

GTM (Google Tag Manager) helps manage tracking scripts without editing theme files every time.

## Recommended Setup

### 1. Create Or Confirm GA4 (Google Analytics 4) Property

In Google Analytics:

1. Create a GA4 property.
2. Create a web data stream.
3. Copy the Measurement ID.

Example:

```text
G-XXXXXXXXXX
```

### 2. Create Or Confirm GTM (Google Tag Manager) Container

In Google Tag Manager:

1. Create a container for the website domain.
2. Choose `Web`.
3. Copy the container ID.

Example:

```text
GTM-XXXXXXX
```

### 3. Add GTM (Google Tag Manager) To WordPress

Common options:

- Use a trusted GTM plugin.
- Add GTM code through the theme or child theme.
- Add GTM code through a custom plugin if the project requires controlled implementation.

For client sites, a plugin is often safer and easier to maintain.

In this portfolio project, GTM can be added through the custom plugin:

```text
WordPress Admin > Settings > Greenline Toolkit > GTM Container ID
```

Example:

```text
GTM-XXXXXXX
```

The plugin then outputs:

- GTM script in `wp_head`
- GTM noscript iframe in `wp_body_open`

This avoids manually editing theme files.

### 4. Configure GA4 (Google Analytics 4) Through GTM (Google Tag Manager)

In GTM:

1. Create a GA4 Configuration tag or Google Tag.
2. Add the GA4 Measurement ID.
3. Trigger it on all pages.
4. Preview and test.
5. Publish the GTM container.

## Suggested Tracking Events

For a small business WordPress site:

- Page views
- Contact form submission
- CTA (Call To Action) button click
- Phone link click
- Email link click
- Portfolio project view

For WooCommerce:

- Product view
- Add to cart
- Begin checkout
- Purchase

WooCommerce events should be configured carefully and tested before launch.

## Contact Form 7 Tracking Idea

Contact Form 7 fires a browser event after successful form submission.

Example JavaScript event:

```text
wpcf7mailsent
```

In GTM (Google Tag Manager), this can be tracked by:

1. Listening for the successful form submit event.
2. Pushing a custom event to the data layer.
3. Creating a GTM trigger for that custom event.
4. Sending the event to GA4.

Example data layer event:

```javascript
document.addEventListener("wpcf7mailsent", function () {
  window.dataLayer = window.dataLayer || [];
  window.dataLayer.push({
    event: "generate_lead",
    form_name: "contact_form"
  });
});
```

GA4 event name:

```text
generate_lead
```

In this portfolio project, the custom plugin includes this logic in:

```text
greenline-site-style/tracking-events.js
```

In GTM (Google Tag Manager), create:

1. A custom event trigger named `CE - generate_lead`.
2. Trigger event name: `generate_lead`.
3. A GA4 event tag named `GA4 - generate_lead`.
4. GA4 event name: `generate_lead`.
5. Trigger: `CE - generate_lead`.

## Phone Click Tracking Idea

Phone enquiries can be important for local service businesses. If the phone number is output as a `tel:` link, JavaScript can listen for phone clicks and push a custom event to GTM.

Example data layer event:

```javascript
window.dataLayer.push({
  event: "phone_click",
  event_source: "phone_link",
  link_url: "tel:0390000000"
});
```

In GTM (Google Tag Manager), create:

1. A custom event trigger named `CE - phone_click`.
2. Trigger event name: `phone_click`.
3. A GA4 event tag named `GA4 - phone_click`.
4. GA4 event name: `phone_click`.
5. Trigger: `CE - phone_click`.

## Email Click Tracking Idea

Email clicks show another type of enquiry intent. If the email address is output as a `mailto:` link, JavaScript can listen for email clicks and push a custom event to GTM.

Example data layer event:

```javascript
window.dataLayer.push({
  event: "email_click",
  event_source: "email_link",
  link_url: "mailto:hello@example.com"
});
```

In GTM (Google Tag Manager), create:

1. A custom event trigger named `CE - email_click`.
2. Trigger event name: `email_click`.
3. A GA4 event tag named `GA4 - email_click`.
4. GA4 event name: `email_click`.
5. Trigger: `CE - email_click`.

## CTA Click Tracking Idea

CTA (Call To Action) clicks show whether users are engaging with important buttons before they become enquiries. In this project, CTA tracking covers both the custom `[greenline_cta]` button and WordPress block buttons that link to `/contact/`.

Example data layer event:

```javascript
window.dataLayer.push({
  event: "cta_click",
  event_source: "greenline_cta",
  link_text: "Request a Consultation",
  link_url: "/contact/"
});
```

In GTM (Google Tag Manager), create:

1. A custom event trigger named `CE - cta_click`.
2. Trigger event name: `cta_click`.
3. A GA4 event tag named `GA4 - cta_click`.
4. GA4 event name: `cta_click`.
5. Trigger: `CE - cta_click`.

## Tracking Summary Block

The case study page can show the tracking setup with this shortcode:

```text
[greenline_tracking_summary]
```

This block is not another analytics tag. It is a presentation block that explains what the project tracks:

- `page_view`: visitor loads a page.
- `cta_click`: visitor clicks a key button.
- `generate_lead`: contact form sends successfully.
- `phone_click`: visitor clicks a phone link.
- `email_click`: visitor clicks an email link.

Use this on a portfolio or case study page when you need to explain the tracking work to a client, interviewer, or non-technical stakeholder.

## Testing Checklist

Before launch:

- GTM (Google Tag Manager) container is installed on all pages.
- GA4 (Google Analytics 4) receives page views.
- GTM (Google Tag Manager) Preview mode works.
- Contact form submit event fires only after successful submission.
- Phone click event fires when a `tel:` link is clicked.
- Email click event fires when a `mailto:` link is clicked.
- CTA click tracking works.
- Tracking summary block displays on the case study page.
- Phone and email click events work if configured.
- WooCommerce events are tested if shop functionality is active.
- Internal/test traffic is considered.
- Cookie/consent requirements are reviewed.

## Privacy And Consent

Analytics setup should respect applicable privacy and consent requirements.

For real client work:

- Confirm whether a cookie notice or consent banner is required.
- Confirm what data is collected.
- Avoid sending sensitive form content to GA4.
- Do not track personally identifiable information such as names, emails, or phone numbers as GA4 event parameters.

## Interview Talking Point

```text
I prepared a GA4 and Google Tag Manager setup checklist for the WordPress project, including pageview tracking, contact form submit tracking, CTA clicks, WooCommerce event awareness, testing steps and privacy considerations.
```

## Glossary

- GA4: Google Analytics 4.
- GTM: Google Tag Manager.
- CTA: Call To Action.
- dataLayer: a JavaScript array used by Google Tag Manager to receive structured website events.

## Simple Explanation

GA4 (Google Analytics 4) tells the client what users are doing on the website. GTM (Google Tag Manager) is the tool that helps manage the tracking setup in a cleaner way, without hardcoding every tracking script directly into the theme.
