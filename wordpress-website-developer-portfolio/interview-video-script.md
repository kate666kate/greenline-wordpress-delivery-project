# Interview Video Script

Goal: Record a 4-6 minute walkthrough showing practical Website Developer skills.

Recommended tool: Loom, OBS, Zoom recording, Clipchamp, or Windows screen recording.

## Video Structure

### 1. Opening

Say:

> Hi, I want to show a WordPress practice project I built to demonstrate website development, hosting awareness, migration, DNS, email, SEO, and troubleshooting skills.

Show:

- `http://localhost:8090`
- Home page
- Navigation menu

### 2. Website Build

Say:

> I created a small business website for a fictional client, Greenline Studio. The site includes Home, About, Services, Portfolio, and Contact pages. I set the homepage, built the menu, added a contact form, and applied consistent styling.

Show:

- Pages in WordPress admin
- Menu
- Frontend pages
- Portfolio page

### 3. Contact Form And Email

Say:

> I configured Contact Form 7 and tested WordPress email delivery using WP Mail SMTP with Mailpit. This lets me confirm the website is triggering emails before connecting a real SMTP mailbox.

Show:

- Contact Form 7 Mail tab
- WP Mail SMTP settings
- Mailpit inbox at `http://localhost:8025`

### 4. Migration And Hosting Concepts

Say:

> I practised a migration from an old local WordPress site to a new one. I exported the site, created a new WordPress environment, resolved an upload limit issue by increasing PHP upload settings, imported the site, and ran post-migration checks.

Show:

- Old site `http://localhost:8080`
- New site `http://localhost:8090`
- `uploads.ini`
- phpMyAdmin new database

### 5. DNS And SSL Understanding

Say:

> I also simulated DNS cutover. In production, this would usually mean changing the domain A record from the old server IP to the new server IP. Locally, I used an Nginx proxy at localhost:8000 to simulate the official domain pointing to either the old or new site.

Show:

- `nginx.conf`
- DNS simulator page if useful
- Explain `server wordpress-new:80`

Say:

> I also reviewed cPanel SSL/TLS Status, AutoSSL, SPF, DKIM, DMARC, MX records, and how these affect website security and email deliverability.

### 6. SEO And Performance

Say:

> I completed a basic SEO checklist: clean URLs, one H1 per page, SEO titles, meta descriptions, sitemap, robots.txt, image alt text, and indexability. I also checked image size, lazy loading, and active plugins.

Show:

- Yoast snippet or page SEO fields
- Portfolio images with alt text
- Sitemap URL
- Plugin list

### 7. Troubleshooting

Say:

> I practised common support scenarios, including admin password recovery, plugin conflict troubleshooting, database connection errors, PHP upload limits, and reading error logs to identify whether an issue is caused by a plugin, theme, database, or hosting layer.

Show:

- phpMyAdmin `wp_users`
- `wp-content/plugins`
- UpdraftPlus backup

### 8. Closing

Say:

> This project helped me connect WordPress development with the operational side of hosting, DNS, email, SSL, migration, backups, SEO, performance, and troubleshooting. It reflects the kind of practical website support and build work I am looking to keep developing in an agency environment.

## Recording Tips

- Keep the video under 6 minutes.
- Do not show real passwords or private client information.
- Keep browser tabs clean.
- Zoom in when showing settings.
- Use the same vocabulary as the job ad: WordPress, hosting, DNS, migrations, troubleshooting, performance, SEO, and design support.
