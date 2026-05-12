# WordPress Portfolio Project - Start Here

This folder contains a complete local WordPress practice project for a Website Developer interview.

## Best Demo URL

Open this first:

```text
http://localhost:8090/case-study/
```

This is the clearest presentation page. It explains the project goal, what was built, the technical workflow, migration flow, evidence, key decisions, and how the work matches the Website Developer job description.

## Local URLs

```text
Finished site:        http://localhost:8090
Case study:           http://localhost:8090/case-study/
Old site:             http://localhost:8080
DNS simulator:        http://localhost:8000
Mailpit inbox:        http://localhost:8025
phpMyAdmin old DB:    http://localhost:8081
phpMyAdmin new DB:    http://localhost:8082
```

## Start The Environment

Run this in PowerShell:

```powershell
git clone https://github.com/kate666kate/greenline-wordpress-delivery-project.git
cd greenline-wordpress-delivery-project
Copy-Item .env.example .env
docker compose up -d
```

## Stop The Environment

```powershell
docker compose stop
```

## Main Project Folder

Open:

```text
wordpress-website-developer-portfolio
```

This contains the interview materials, checklists, notes, and reusable WordPress operations skill.

## What This Project Demonstrates

- WordPress site build
- Page/menu setup
- Contact form and SMTP testing
- Mailpit local email testing
- Migration from old site to new site
- PHP upload limit troubleshooting
- DNS cutover simulation
- cPanel DNS/email/SSL concepts
- SEO checks
- Image alt text and performance checks
- Backups
- Plugin conflict recovery
- Admin password recovery
- Database connection troubleshooting
- Error log reasoning

## Recommended Interview Flow

1. Open `http://localhost:8090/case-study/`.
2. Explain the project goal.
3. Show the migration visual.
4. Click the demo links: Portfolio, Contact, Mailpit, DNS Simulator.
5. Explain one troubleshooting example: upload limit, database error, or form email.
6. Finish with how the project maps to the Website Developer role.

## 30-Second Explanation

```text
I built this local WordPress project to practise the full website delivery workflow. I created the site, migrated it from an old environment to a new one, simulated DNS cutover, tested form email delivery, reviewed SSL and email DNS records, added SEO metadata, checked image performance, made backups and practised common troubleshooting scenarios. It shows I understand both WordPress page building and the hosting/support work around it.
```
