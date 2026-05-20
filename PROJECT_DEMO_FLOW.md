# Project Demo Flow

Project: Greenline Studio WordPress Delivery Project

Goal: Use this guide when showing the project in an interview, portfolio conversation, or application follow-up.

## 1. Before The Demo

Run the local environment:

```powershell
cd "C:\Users\webdev\Documents\Codex\2026-05-05\the-opportunity-working-in-customer-service"
docker compose up -d
```

Open these pages:

```text
GitHub repo:       https://github.com/kate666kate/greenline-wordpress-delivery-project
Finished site:     http://localhost:8090
Case study:        http://localhost:8090/case-study/
REST API:          http://localhost:8090/wp-json/greenline/v1/portfolio
Mailpit inbox:     http://localhost:8025
Tracking demo:     http://localhost:8077/ga-gtm-tracking-demo.html
```

## 2. Demo Order

### Step 1: Start With GitHub

Open:

```text
https://github.com/kate666kate/greenline-wordpress-delivery-project
```

Say:

```text
This is my WordPress delivery project. I used GitHub to document the project, track improvements, and keep release notes so the development process is visible.
```

Show:

- `README.md`
- `RELEASE_NOTES.md`
- `greenline-site-style/`
- `GA_GTM_SETUP_NOTES.md`
- `CLIENT_TRAINING_GUIDE.md`

Why this matters:

```text
It shows I can document work clearly, not just build something locally and forget how it works.
```

### Step 2: Show The Finished WordPress Site

Open:

```text
http://localhost:8090
```

Say:

```text
This is the finished WordPress site. It is a local demo site for a small business-style project.
```

Show:

- Home page
- Navigation
- Contact page
- Portfolio page if available

What to mention:

```text
I practised building and maintaining a WordPress website in a way that connects design, content, forms, and client-editable areas.
```

### Step 3: Show The Case Study Page

Open:

```text
http://localhost:8090/case-study/
```

Say:

```text
This page explains the delivery process behind the website. I added this because in real work, clients and employers need to understand what was done, what was tested, and how the site can be maintained.
```

Show these sections:

- Project overview
- Migration / operations thinking
- Tracking summary
- Website audit summary
- WooCommerce readiness
- Client handover checklist

Why this matters:

```text
It shows I understand website delivery as a workflow, not only visual design.
```

### Step 4: Show The Custom Plugin

Open the project file:

```text
greenline-site-style/greenline-site-style.php
```

Say:

```text
I built a custom plugin called Greenline Site Toolkit. It keeps reusable site features separate from the theme, which makes the site easier to maintain.
```

Show:

- Admin settings page code
- Shortcode registration
- Custom post type
- REST API route
- GTM output
- WooCommerce active check

Plain-English explanation:

```text
The plugin lets the site reuse blocks, expose portfolio data through an API, add tracking, and show client-friendly status sections.
```

### Step 5: Show The REST API

Open:

```text
http://localhost:8090/wp-json/greenline/v1/portfolio
```

Say:

```text
This is a custom REST API endpoint. It outputs WordPress portfolio projects as JSON, so the frontend or another system can read the data.
```

Then show:

```text
[greenline_portfolio_grid]
```

Explain:

```text
The shortcode creates a place on the page, and JavaScript fetches data from this API to render portfolio cards.
```

### Step 6: Show GA4 / GTM Tracking

Open:

```text
http://localhost:8077/ga-gtm-tracking-demo.html
```

Or show Tag Assistant if it is already open.

Say:

```text
I practised connecting website actions to analytics through GTM and GA4. The important idea is that clients need to measure enquiries, not only page views.
```

Show events:

- `generate_lead`
- `cta_click`
- `phone_click`
- `email_click`

Plain-English explanation:

```text
When a visitor submits a form or clicks a contact button, my tracking script pushes an event to the data layer. GTM can then send that event to GA4.
```

### Step 7: Show Contact Form And Email Testing

Open:

```text
http://localhost:8090/contact/
http://localhost:8025
```

Say:

```text
I used Mailpit to test email delivery safely in the local environment. This helps confirm form notifications before using real email inboxes.
```

Why this matters:

```text
It shows I know a website form is not finished until the email flow has been tested.
```

### Step 8: Finish With The Client Handover

Return to:

```text
http://localhost:8090/case-study/
```

Say:

```text
The final part is handover. I included training and maintenance notes because a website should be easy for the client to update safely after launch.
```

Mention:

- What the client can edit
- What should be handled by a developer
- Maintenance rhythm
- Backup and update checks
- Support boundaries

## 3. One-Minute Short Version

Use this when the interviewer only gives you a short time.

```text
This is my Greenline Studio WordPress Delivery Project. I built it to practise the full workflow of delivering a small business WordPress website.

It includes the site itself, a Docker-based local environment, migration and DNS cutover practice, email testing, SEO checks, and a custom plugin called Greenline Site Toolkit.

The plugin includes admin settings, shortcodes, a portfolio custom post type, a REST API endpoint, frontend API rendering, GTM integration, GA4 enquiry tracking, WooCommerce readiness, and client handover sections.

The main thing this project demonstrates is that I understand a website as a complete delivery system: design, build, hosting, forms, email, analytics, QA, documentation, and client support.
```

## 4. If Something Does Not Work During Demo

Stay calm and say:

```text
This is a local Docker environment, so sometimes I need to restart the containers. The project code and documentation are still available in GitHub, and I can walk through the implementation there.
```

Quick checks:

```powershell
docker compose ps
docker compose up -d
```

If WordPress is unavailable:

```text
Show GitHub README, release notes, plugin code, and screenshots/walkthrough notes instead.
```

## 5. Best Closing Line

```text
This project helped me connect the technical and client-facing parts of WordPress work. I can build pages, but I also understand the surrounding delivery tasks: hosting, DNS, email, tracking, testing, documentation, and handover.
```

