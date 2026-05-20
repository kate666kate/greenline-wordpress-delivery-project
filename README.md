# Greenline Studio WordPress Delivery Project

Local WordPress portfolio project demonstrating practical website delivery skills for small business and agency-style work.

## What This Shows

- WordPress site setup and maintenance workflow
- Old-site to new-site migration practice
- DNS cutover simulation with Nginx
- cPanel-style hosting, DNS, SSL, email, and phpMyAdmin concepts
- Contact form and SMTP testing with Mailpit
- SEO checks, image alt text, and performance awareness
- Backup and troubleshooting practice
- A custom WordPress toolkit plugin with settings, shortcodes, a portfolio custom post type, REST API output, JavaScript API rendering, Google Tag Manager support, enquiry tracking, tracking summary, client handover checklist, website audit summary, WooCommerce readiness, and WooCommerce awareness

## Latest Plugin Upgrade

The original styling plugin has been upgraded into `Greenline Site Toolkit`.

Step-by-step improvements are documented in:

```text
RELEASE_NOTES.md
```

## Local Demo URLs

Run the environment first, then open:

```text
Finished site:        http://localhost:8090
Case study:           http://localhost:8090/case-study/
Old site:             http://localhost:8080
DNS simulator:        http://localhost:8000
Mailpit inbox:        http://localhost:8025
phpMyAdmin old DB:    http://localhost:8081
phpMyAdmin new DB:    http://localhost:8082
```

## Run Locally

```powershell
git clone https://github.com/kate666kate/greenline-wordpress-delivery-project.git
cd greenline-wordpress-delivery-project
Copy-Item .env.example .env
docker compose up -d
```

Then open:

```text
http://localhost:8090/case-study/
```

## Key Files

- `docker-compose.yml`: WordPress, MySQL, phpMyAdmin, Mailpit, and Nginx DNS simulator services.
- `nginx.conf`: simulated DNS cutover between old and migrated WordPress sites.
- `uploads.ini`: PHP upload and memory limits used during migration practice.
- `greenline-site-style/`: custom WordPress toolkit plugin and styling used by the project.
- `wordpress-website-developer-portfolio/`: interview notes, workflow checklists, demo script, and skill files.
- `wordpress-website-developer-portfolio/walkthrough-frames/`: visual project walkthrough frames.
- `INTERVIEW_PROJECT_TALKING_POINTS.md`: bilingual interview script, project positioning, and technical Q&A.
- `PROJECT_DEMO_FLOW.md`: step-by-step demo path for showing the project in an interview.
- `CLIENT_TRAINING_GUIDE.md`: client-facing guide for updating toolkit settings, portfolio projects, shortcodes, maintenance checks, and handover training.
- `GA_GTM_SETUP_NOTES.md`: GA4 and Google Tag Manager setup notes for tracking, form events, WooCommerce awareness, testing, and privacy.
- `ga-gtm-tracking-demo.html`: local visual demo showing how website actions can push events to a simulated GTM `dataLayer`.

## Interview Positioning

This project was built as a local training and portfolio environment. It is not a live client website. Its purpose is to demonstrate how WordPress page building connects with the surrounding operational work: hosting, DNS, SSL, email deliverability, SEO, QA, migration, and troubleshooting.

For interview preparation, start with:

```text
INTERVIEW_PROJECT_TALKING_POINTS.md
PROJECT_DEMO_FLOW.md
```

These documents explain how to present the project clearly as a full website delivery workflow: build, hosting, forms, email, analytics, QA, documentation, and client handover.

## Security Note

This repository uses local-only demo credentials through `.env.example`. Do not commit real cPanel, WordPress, SMTP, API, database, or client credentials.
