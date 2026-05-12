# WordPress Website Operations Practice Guide

This guide explains the practical WordPress, cPanel, DNS, email, SSL, migration, and troubleshooting workflow practised in this project.

It is not a theory document. It is a checklist for understanding which parts of a real website delivery workflow you have practised.

## Scenario

Imagine a small business needs a WordPress website:

- Domain: `demoagency.com.au`
- Hosting: Australian cPanel hosting
- Website type: small business brochure website
- Pages: Home, About, Services, Contact
- Contact form recipient: `info@demoagency.com.au`
- Launch plan: build and test first, then point the domain to the finished site

The workflow can be understood in eight main areas.

## 1. Domain And Hosting

You will usually work with:

- `domain`: the public website address
- `hosting`: where website files and databases live
- `cPanel`: hosting control panel
- `DNS`: records that control where the domain points

Useful exposure includes:

- Logging in to cPanel
- Checking `Domains`
- Creating or checking a subdomain
- Opening `File Manager`
- Checking `SSL/TLS`
- Opening `phpMyAdmin`

## 2. Installing WordPress

The most common workflow on shared hosting is a one-click installer:

1. Log in to cPanel.
2. Open `Softaculous`, `WordPress Manager`, `Installatron`, or the host's WordPress installer.
3. Select WordPress.
4. Select the install domain, for example `staging.demoagency.com.au`.
5. Choose the install directory.
6. Set admin username, password, and email.
7. Click install.

After installation, you usually receive:

- Frontend website URL
- Admin URL ending in `/wp-admin`
- WordPress admin username

If you have only edited an existing WordPress site, someone else may have completed this setup step before you joined the project.

## 3. Database Connection

One-click installers usually create and connect the database automatically. Manual installs make the process more visible.

The core idea:

- WordPress stores content in a MySQL database.
- Hosting provides MySQL.
- WordPress needs database connection details.

Manual workflow:

1. Open `MySQL Databases` in cPanel.
2. Create a database.
3. Create a database user.
4. Add the user to the database.
5. Grant permissions.
6. During WordPress install, enter:
   - Database name
   - Database username
   - Database password
   - Database host, often `localhost`

WordPress saves these details in `wp-config.php`.

## 4. SSL

SSL changes a site from `http` to `https`.

In cPanel, you may check:

- `SSL/TLS`
- `SSL/TLS Status`
- `AutoSSL`
- Certificate status for the domain

Common tasks:

- Check whether the site loads over `https`.
- Run AutoSSL after the domain points to the server.
- Troubleshoot browser warnings such as `Not Secure`.
- Confirm both root domain and `www` are covered.

## 5. Business Email

If the client needs `info@demoagency.com.au`, the usual cPanel process is:

1. Open `Email Accounts`.
2. Create the mailbox.
3. Set a strong password.
4. Record incoming/outgoing mail settings.
5. If DNS is managed elsewhere, configure `MX` and related `TXT` records.

If the business uses Microsoft 365 or Google Workspace:

- Mailboxes may not be created in cPanel.
- DNS records still usually need to be configured.
- Do not change MX/SPF/DKIM/DMARC records unless you know where email is hosted.

## 6. Common WordPress Plugin Categories

You do not need to master every plugin, but you should recognise the main categories.

Forms:

- `Contact Form 7`
- `WPForms`

SEO:

- `Yoast SEO`
- `Rank Math`

Migration and backup:

- `All-in-One WP Migration`
- `Duplicator`
- `UpdraftPlus`

Caching and speed:

- `LiteSpeed Cache`
- `WP Rocket`

Security:

- `Wordfence`

Page building:

- `Elementor`
- `WPBakery`

## 7. Launch Areas

Website launch usually happens across multiple systems, not just one button.

In WordPress admin:

- Check pages.
- Check forms.
- Check menus.
- Check plugins.

In cPanel:

- Files
- Database
- SSL
- Backups

In DNS:

- A record
- CNAME
- MX
- Nameservers

The key point: launching a website usually requires coordination across WordPress, hosting, DNS, SSL, and email.

## 8. Website Migration

The core of WordPress migration is:

- Files
- Database
- Domain/DNS

### Method A: Plugin Migration

Common workflow:

1. Install a migration plugin on the old site.
2. Export a backup package.
3. Install a clean WordPress site on the new host.
4. Install the same migration plugin on the new site.
5. Import the backup package.
6. Check pages, images, plugins, and forms.
7. Switch DNS after testing.

### Method B: Manual Migration

1. Back up old site files.
2. Export the old database.
3. Create a new database on the new host.
4. Upload files to the new host.
5. Import the database.
6. Update `wp-config.php`.
7. Check site URLs.
8. Enable SSL.
9. Switch DNS.
10. Complete post-launch checks.

## Self-Assessment

Mark each item as:

- `Can do independently`
- `Have done part of it`
- `Have seen it`
- `Have not done it`

Checklist:

- Log in to cPanel
- Find website files
- Create or check a subdomain
- Use a WordPress installer
- Log in to `/wp-admin`
- Install plugins
- Update themes or plugins
- Create a database
- Export a database using phpMyAdmin
- Import a database using phpMyAdmin
- Check SSL
- Create a business mailbox
- Update DNS records
- Export a site with a migration plugin
- Import a site with a migration plugin
- Check forms and pages after launch

## Current Goal

For Website Developer roles, you do not need every item to be fully independent yet.

Use this judgement:

- If most items are `Can do independently` or `Have done part of it`, you can apply.
- If most items are only `Have seen it`, the role may be a stretch.
- If you have worked with maintenance, plugins, pages, cPanel, DNS, migration support, forms, and troubleshooting, you are closer to website delivery than pure content editing.

## Next Step

Use this guide to identify what to strengthen next. For stronger WordPress Developer roles, prioritise:

- Elementor
- WooCommerce
- PHP basics
- Custom plugin practice
- Custom theme structure
- GA4/GTM basics
- Performance optimisation
