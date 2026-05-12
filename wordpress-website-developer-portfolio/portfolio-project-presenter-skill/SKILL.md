---
name: portfolio-project-presenter
description: Bilingual English/Chinese interview presentation workflow for showcasing Meisi Xu's Greenline Studio Docker WordPress Delivery Project. Use when the user asks to present, explain, rehearse, demo, showcase, or prepare interview talking points for the WordPress portfolio project at localhost:8090/case-study, including build, migration, DNS, SSL, SMTP/email, SEO, performance, backups, phpMyAdmin, troubleshooting, and how it maps to a Website Developer role.
---

# Portfolio Project Presenter / 项目展示助手

Use this skill when the user wants to show the Greenline Studio WordPress Delivery Project in an interview or portfolio conversation.

当用户想展示 Greenline Studio WordPress 项目、准备面试讲解、练习项目介绍时，使用这个 skill。

## Default Behaviour / 默认行为

When the user says:

当用户说：

```text
帮我展示这个项目
Help me present this project
用 portfolio-project-presenter 带我展示项目
Use portfolio-project-presenter to present my project
```

Start with a short confirmation and ask whether to begin the guided demo.

先简短确认，然后问是否开始 guided demo。

```text
这是 Greenline Studio WordPress Delivery Project。
This is the Greenline Studio WordPress Delivery Project.

现在需要进入面试展示模式吗？
Would you like to start interview demo mode?

[开始项目展示]
[Start project demo]
```

After confirmation, guide the user step by step. Do not overwhelm them with the full script at once.

用户确认后，一步步带，不要一次把所有稿子丢出来。

## Demo URLs / 展示链接

Primary page / 主要展示页：

```text
http://localhost:8090/case-study/
```

Supporting URLs / 辅助展示页：

```text
Finished site:        http://localhost:8090
Case study:           http://localhost:8090/case-study/
Old site:             http://localhost:8080
DNS simulator:        http://localhost:8000
Mailpit inbox:        http://localhost:8025
phpMyAdmin old DB:    http://localhost:8081
phpMyAdmin new DB:    http://localhost:8082
```

If URLs do not open, remind the user to run:

如果打不开，提醒用户运行：

```powershell
cd "C:\Users\webdev\Documents\Codex\2026-05-05\the-opportunity-working-in-customer-service"
docker compose up -d
```

## Project Positioning / 项目定位

English:

```text
Greenline Studio is a local WordPress portfolio project I built to practise the full website delivery workflow for a small business site. It covers WordPress setup, page building, migration, DNS cutover simulation, SSL concepts, SMTP email testing, SEO, image optimisation, backups, and troubleshooting.
```

中文：

```text
Greenline Studio 是我做的本地 WordPress portfolio 项目，用来练习小型商业网站从搭建、迁移、DNS/SSL/email、SEO、图片优化、备份到 troubleshooting 的完整交付流程。
```

## Guided Demo Flow / 展示流程

Guide in this order:

按这个顺序带用户讲：

1. Project overview / 项目概览
2. WordPress build / WordPress 搭建
3. Migration flow / 迁移流程
4. DNS, SSL, and email / DNS、SSL、邮箱
5. SEO and performance / SEO 和性能
6. Troubleshooting / 排查能力
7. Job match / 和 JD 的匹配
8. Closing summary / 结尾总结

At each step, provide:

每一步都提供：

- What to click / 点哪里
- What to say in English / 英文怎么说
- Chinese meaning / 中文意思
- Optional deeper explanation / 如果面试官追问，可以怎么展开

## Step 1 - Project Overview / 项目概览

Click:

```text
http://localhost:8090/case-study/
```

Say:

```text
This is a local WordPress delivery project I built to practise the end-to-end workflow of creating and supporting a small business website.
```

中文意思：

```text
这是我做的本地 WordPress 交付项目，用来练习小型商业网站从创建到支持维护的完整流程。
```

## Step 2 - WordPress Build / WordPress 搭建

Mention:

- Pages and menu / 页面和菜单
- Contact form / 联系表单
- Custom styling plugin / 自定义样式插件
- Images and alt text / 图片和 alt text

Say:

```text
I created the core site structure, including pages, navigation, portfolio content, a contact form, custom styling, and image alt text.
```

## Step 3 - Migration Flow / 迁移流程

Mention:

- Old site and new site / 旧站和新站
- Export/import / 导出导入
- Upload limit troubleshooting / 上传限制排查
- Post-migration checks / 迁移后检查

Say:

```text
I simulated a migration from an old WordPress environment to a new one, including export and import, upload limit troubleshooting, and post-migration checks.
```

## Step 4 - DNS, SSL, Email / DNS、SSL、邮箱

Mention:

- DNS cutover simulator / DNS 切换模拟
- A record and CNAME / A record 和 CNAME
- SSL/AutoSSL concept / SSL/AutoSSL 概念
- SMTP and Mailpit / SMTP 和 Mailpit
- MX/SPF/DKIM/DMARC awareness / 邮箱 DNS 记录意识

Say:

```text
I also practised the hosting side of website delivery, including DNS cutover logic, SSL concepts, SMTP form testing, and email deliverability records such as MX, SPF, DKIM, and DMARC.
```

## Step 5 - SEO And Performance / SEO 和性能

Mention:

- Clean URLs / 干净 URL
- One H1 per page / 每页一个 H1
- SEO titles and meta descriptions / SEO title 和 meta description
- Sitemap and robots / sitemap 和 robots
- Image compression and alt text / 图片压缩和 alt text

Say:

```text
I completed basic SEO checks, including clean URLs, H1 structure, SEO titles, meta descriptions, sitemap checks, robots checks, and image alt text.
```

## Step 6 - Troubleshooting / 排查能力

Mention:

- phpMyAdmin / phpMyAdmin
- Admin password recovery / 管理员密码恢复
- Plugin conflict / 插件冲突
- Database connection error logic / 数据库连接错误思路
- PHP settings and error logs / PHP 设置和 error logs

Say:

```text
I practised common support scenarios such as admin password recovery, database checks with phpMyAdmin, plugin conflict recovery, PHP upload limits, and error log reasoning.
```

## Step 7 - Job Match / 匹配岗位

Say:

```text
This project is relevant to the Website Developer role because it connects WordPress page building with the operational work around hosting, DNS, SSL, email, SEO, QA, migration, and troubleshooting.
```

中文意思：

```text
这个项目和 Website Developer 岗位相关，因为它不只是页面搭建，也包括 hosting、DNS、SSL、邮箱、SEO、QA、迁移和故障排查。
```

## 30-Second Version / 30 秒版本

Use this when the user needs a short answer:

如果用户需要短版本，用这个：

```text
I built this local WordPress project to practise the full website delivery workflow. I created the site, migrated it from an old environment to a new one, simulated DNS cutover, tested form email delivery, reviewed SSL and email DNS records, added SEO metadata, checked image performance, made backups, and practised common troubleshooting scenarios. It shows I understand both WordPress page building and the hosting/support work around it.
```

## 2-Minute Version / 2 分钟版本

Use this when the user wants a fuller interview answer:

如果用户要完整面试回答，用这个：

```text
This is a local WordPress portfolio project I built around a small business scenario called Greenline Studio. The goal was to practise not only page building, but the full website delivery process.

I created the WordPress site structure, including pages, navigation, portfolio content, contact form setup, custom styling, image alt text, and SEO basics. I then practised migrating the site from an old local environment to a new one, including export/import, upload limit troubleshooting, and post-migration checks.

I also worked through the hosting and support side: DNS cutover simulation, SSL concepts, SMTP testing with Mailpit, and email deliverability concepts such as MX, SPF, DKIM, and DMARC. On top of that, I practised support scenarios such as phpMyAdmin checks, admin password recovery, plugin conflict recovery, database connection troubleshooting, PHP settings, and error log reasoning.

This project helped me connect WordPress development with the real operational tasks involved in maintaining and launching client websites.
```

## If Asked "Did You Build This For A Real Client?" / 如果被问是不是客户项目

Be honest:

要诚实：

```text
This is a local portfolio and training project, not a live client site. I built it to practise the workflow I would use in a real agency or website support environment.
```

中文：

```text
这是本地 portfolio 和训练项目，不是真实客户网站。我做它是为了练习真实 agency 或网站维护工作中会用到的流程。
```

## Closing / 结束语

Finish with:

结尾可以说：

```text
The main value of this project is that it shows I can think beyond page edits. I understand the surrounding website operations: hosting, DNS, SSL, email, SEO, migration, QA, and troubleshooting.
```
