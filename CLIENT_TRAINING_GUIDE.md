# Client Training Guide

This guide explains how a non-technical client can safely update common content on the Greenline Studio WordPress site.

## What The Client Can Update

The client can safely update:

- Contact email
- Phone number
- CTA heading and text
- CTA button text and link
- Business hours
- Portfolio project content
- Basic page text and images

The client should not change:

- Theme files
- Plugin code
- DNS records
- Database settings
- PHP settings
- WooCommerce or payment settings without support

## 1. Update Business Details

Go to:

```text
WordPress Admin > Settings > Greenline Toolkit
```

The client can update:

- Contact email
- Phone
- CTA heading
- CTA text
- CTA button text
- CTA button URL
- Business hours

After editing, click:

```text
Save Changes
```

Where this appears:

- `[greenline_cta]`
- `[greenline_hours]`

## 2. Update The CTA Section

The CTA section is controlled from:

```text
Settings > Greenline Toolkit
```

Fields:

- `CTA heading`
- `CTA text`
- `CTA button text`
- `CTA button URL`

Recommended button URL:

```text
/contact/
```

This keeps the link portable if the website domain changes.

## 3. Update Business Hours

Go to:

```text
Settings > Greenline Toolkit > Business hours
```

Use one line per day or schedule item:

```text
Monday - Friday: 9:00am - 5:00pm
Saturday: By appointment
Sunday: Closed
```

These hours display wherever this shortcode is used:

```text
[greenline_hours]
```

## 4. Add A Portfolio Project

Go to:

```text
WordPress Admin > Portfolio Projects > Add New
```

Add:

- Title
- Project description
- Excerpt
- Featured image

Then click:

```text
Publish
```

Published projects appear in the API-powered portfolio grid:

```text
[greenline_portfolio_grid]
```

They are also available through the custom REST API endpoint:

```text
/wp-json/greenline/v1/portfolio
```

## 5. Use Shortcodes On A Page

Shortcodes can be added using a Shortcode block in the WordPress editor.

Available shortcodes:

```text
[greenline_cta]
[greenline_hours]
[greenline_woocommerce_status]
[greenline_portfolio_grid]
```

What they do:

- `[greenline_cta]`: shows the call-to-action block
- `[greenline_hours]`: shows business hours and contact details
- `[greenline_woocommerce_status]`: shows whether WooCommerce is active
- `[greenline_portfolio_grid]`: loads portfolio projects from the custom REST API and displays them as cards

## 6. Basic Page Editing

Go to:

```text
WordPress Admin > Pages
```

Choose a page and click:

```text
Edit
```

Safe edits:

- Text updates
- Replacing images
- Adding headings
- Updating buttons
- Adding shortcode blocks

Before publishing:

- Preview the page
- Check desktop and mobile layout
- Check links
- Check contact forms

## 7. When To Ask For Support

Ask for support before changing:

- Plugins
- Theme
- WooCommerce settings
- Checkout/payment settings
- DNS records
- SSL settings
- Database
- PHP version
- User roles and admin accounts

## Client Handover Summary

The Greenline Studio site includes a custom toolkit that allows safe content updates without editing code. The client can update common business information from `Settings > Greenline Toolkit`, add portfolio projects from the WordPress admin, and use shortcodes to display reusable content blocks across the website.
