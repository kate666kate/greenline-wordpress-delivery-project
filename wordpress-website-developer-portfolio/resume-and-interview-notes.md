# Resume And Interview Notes

## Resume Bullets

Use or adapt these:

- Built a local WordPress business website with Home, About, Services, Portfolio, and Contact pages, including navigation, contact form setup, and custom styling.
- Practised full WordPress site migration between local environments using export/import workflows, upload limit troubleshooting, and post-migration checks.
- Configured WordPress email testing with WP Mail SMTP and Mailpit to validate form notifications before connecting a production SMTP mailbox.
- Reviewed and applied core SEO checks including clean URLs, single H1 structure, SEO titles, meta descriptions, sitemap, robots.txt, and image alt text.
- Simulated DNS cutover from old to new hosting using an Nginx proxy and reviewed cPanel DNS records including A, CNAME, MX, SPF, DKIM, and DMARC.
- Used phpMyAdmin to inspect WordPress database tables and practise admin password recovery through `wp_users`.
- Completed WordPress maintenance checks including plugin cleanup, backup workflow, performance checks, and troubleshooting scenarios.

## Interview Questions

### How would you migrate a WordPress site?

Answer:

> I would first take a full backup of files and database. Then I would prepare the new hosting environment, install WordPress if needed, export the old site using a migration plugin or manual file/database backup, import it into the new site, check pages, media, plugins, forms, permalinks, and admin login, then switch DNS once the new site is verified. After cutover, I would check SSL, forms, redirects, email, and keep the old site available for rollback for a short period.

### What do you check if a contact form is not sending email?

Answer:

> I check the form recipient first, then the mail tags, From and Reply-To settings, then SMTP configuration. I test whether WordPress is triggering emails using SMTP logs or a test inbox. If the site is live, I also check the real mailbox, spam folder, MX, SPF, DKIM, and DMARC records.

### What do you check after changing DNS?

Answer:

> I check that the A record and www record point to the new hosting, MX/TXT email records have not been broken, DNS propagation is underway, SSL is valid on the new host, and the live domain loads the migrated site. I also check forms, admin login, images, redirects, and sitemap.

### What would you do if a WordPress site shows a database connection error?

Answer:

> I would check whether the database exists, whether MySQL is running, and whether `wp-config.php` has the correct DB name, user, password, and host. I would also check database user permissions and phpMyAdmin access. If the DB password was reset in cPanel, I would update `wp-config.php` to match.

### What do you check for basic SEO?

Answer:

> I check clean URLs, one H1 per page, SEO title, meta description, readable page structure, relevant keywords in natural places, image alt text, sitemap, robots.txt, and whether the site is allowed to be indexed.
