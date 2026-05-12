# Greenline Studio WordPress Build

This is a local WordPress portfolio project built to demonstrate practical Website Developer skills across site setup, content build, migration, DNS/SSL concepts, email deliverability, SEO, performance, backup, and troubleshooting.

## Project Summary

Client scenario:

- Business: Greenline Studio
- Industry: Office plant styling and maintenance
- Location: Melbourne
- Website type: Small business brochure site
- Pages: Home, About, Services, Portfolio, Contact

Local environment:

- Old site: `http://localhost:8080`
- New migrated site: `http://localhost:8090`
- DNS simulation: `http://localhost:8000`
- phpMyAdmin old DB: `http://localhost:8081`
- phpMyAdmin new DB: `http://localhost:8082`
- Mailpit test inbox: `http://localhost:8025`

## What This Project Demonstrates

- Built and configured a WordPress site locally.
- Created core pages, navigation, contact form, and portfolio content.
- Configured SMTP email testing with Mailpit.
- Used phpMyAdmin to inspect WordPress database tables.
- Exported and migrated a WordPress site using All-in-One WP Migration.
- Resolved upload limit issues by adjusting PHP settings.
- Simulated DNS cutover from old site to new site with an Nginx proxy.
- Reviewed cPanel-style DNS, SSL, SPF, DKIM, DMARC, and mailbox concepts.
- Added SEO titles, meta descriptions, focus keywords, sitemap, robots checks, and H1 fixes.
- Added image alt text, lazy loading, width/height attributes, and checked image sizes.
- Created a small custom WordPress plugin to load site CSS.
- Practised admin password recovery via API and phpMyAdmin.
- Practised backup, plugin conflict troubleshooting, database connection error logic, PHP settings, and error log reasoning.

## Key Files

- `docker-compose.yml`: local WordPress, databases, phpMyAdmin, Mailpit, and DNS simulator services.
- `uploads.ini`: PHP upload and memory settings for migration/import practice.
- `nginx.conf`: DNS cutover simulator configuration.
- `greenline-site-style/`: custom WordPress plugin for loading project CSS.
- `portfolio-images/`: practice portfolio images used for image SEO and performance.

## Interview Positioning

This project can be described as a practical WordPress operations and delivery exercise:

> I built a local WordPress practice environment with separate old and new sites, migrated content between them, simulated DNS cutover, configured form email testing, reviewed SSL and DNS records, and completed an SEO/performance handover checklist.

## Important Note

This is a local training environment. For production work, credentials, API passwords, SMTP passwords, DNS records, and backups must be handled securely and never committed into project files.
