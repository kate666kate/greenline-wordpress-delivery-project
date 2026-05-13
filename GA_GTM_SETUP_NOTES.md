# GA4 And Google Tag Manager Setup Notes

This document explains how GA4 and Google Tag Manager can be prepared for a WordPress website project.

It is written as an implementation checklist for a small business website, not as a replacement for the official Google documentation.

## Why GA4 And GTM Matter

GA4 helps the client understand website activity:

- How many people visit the site
- Which pages they view
- Where visitors come from
- Whether users submit forms or interact with key calls to action

Google Tag Manager helps manage tracking scripts without editing theme files every time.

## Recommended Setup

### 1. Create Or Confirm GA4 Property

In Google Analytics:

1. Create a GA4 property.
2. Create a web data stream.
3. Copy the Measurement ID.

Example:

```text
G-XXXXXXXXXX
```

### 2. Create Or Confirm GTM Container

In Google Tag Manager:

1. Create a container for the website domain.
2. Choose `Web`.
3. Copy the container ID.

Example:

```text
GTM-XXXXXXX
```

### 3. Add GTM To WordPress

Common options:

- Use a trusted GTM plugin.
- Add GTM code through the theme or child theme.
- Add GTM code through a custom plugin if the project requires controlled implementation.

For client sites, a plugin is often safer and easier to maintain.

### 4. Configure GA4 Through GTM

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
- CTA button click
- Phone link click
- Email link click
- Portfolio project view
- File download, if relevant

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

In GTM, this can be tracked by:

1. Listening for the successful form submit event.
2. Pushing a custom event to the data layer.
3. Creating a GTM trigger for that custom event.
4. Sending the event to GA4.

Example data layer event:

```javascript
document.addEventListener("wpcf7mailsent", function () {
  window.dataLayer = window.dataLayer || [];
  window.dataLayer.push({
    event: "contact_form_submit",
    form_name: "contact_form"
  });
});
```

GA4 event name:

```text
contact_form_submit
```

## Testing Checklist

Before launch:

- GTM container is installed on all pages.
- GA4 receives page views.
- GTM Preview mode works.
- Contact form submit event fires only after successful submission.
- CTA click tracking works.
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
- Do not track personally identifiable information such as names, emails, or phone numbers as GA event parameters.

## Interview Talking Point

```text
I prepared a GA4 and Google Tag Manager setup checklist for the WordPress project, including pageview tracking, contact form submit tracking, CTA clicks, WooCommerce event awareness, testing steps and privacy considerations.
```

## Simple Explanation

GA4 tells the client what users are doing on the website. GTM is the tool that helps manage the tracking setup in a cleaner way, without hardcoding every tracking script directly into the theme.
