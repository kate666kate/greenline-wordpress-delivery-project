# Interview Project Talking Points

Project: Greenline Studio WordPress Delivery Project

Purpose: A local WordPress portfolio project that demonstrates practical website delivery skills for agency-style small business work.

## 1. Short Project Summary

### English

I built a local WordPress delivery project to practise the full lifecycle of a small business website, not just page editing. The project includes WordPress setup, migration practice, DNS cutover simulation, SSL and email concepts, contact form testing, SEO checks, backups, troubleshooting, GA4/GTM tracking, WooCommerce readiness, and client handover documentation.

I also built a custom WordPress plugin called Greenline Site Toolkit. It includes an admin settings page, reusable shortcodes, a portfolio custom post type, a custom REST API endpoint, frontend API rendering, Google Tag Manager support, GA4 enquiry tracking, website audit sections, WooCommerce readiness checks, and a client handover checklist.

### Chinese

我做的是一个本地 WordPress 交付项目，用来练习小型企业网站从搭建、迁移、DNS、SSL、邮箱、表单、SEO、追踪、维护到客户交接的完整流程。它不是单纯改页面，而是模拟真实 agency 工作里会遇到的交付和维护场景。

我还写了一个自定义 WordPress 插件 Greenline Site Toolkit，用来展示我对 WordPress 插件开发、shortcode、REST API、GA4/GTM tracking、WooCommerce readiness 和客户交接流程的理解。

## 2. Two-Minute Interview Pitch

### English Script

One project I would like to show is my Greenline Studio WordPress Delivery Project. I built it as a local WordPress practice environment to demonstrate the full workflow of delivering a small business website.

The project covers more than page building. It includes a Docker-based WordPress setup, an old-site to new-site migration simulation, DNS cutover practice, cPanel-style concepts, SSL, email testing with Mailpit, contact forms, SEO checks, backup thinking, and troubleshooting.

To make the project stronger technically, I built a custom WordPress plugin called Greenline Site Toolkit. The plugin includes an admin settings page, reusable shortcodes, a portfolio custom post type, a custom REST API endpoint, a JavaScript-powered portfolio grid, Google Tag Manager support, GA4 event tracking for form submissions, CTA clicks, phone clicks and email clicks, plus WooCommerce readiness and client handover sections.

The reason I built it this way is that in a real agency role, a website is not only about making the design look good. It also needs to be maintainable, track enquiries, work with hosting and DNS, be safe for clients to update, and be easy to hand over. This project helped me connect the design, development, hosting, analytics, and client-support parts of website delivery.

### Chinese Meaning

我想展示的是 Greenline Studio WordPress Delivery Project。这个项目是我为了练习真实小型企业网站交付流程做的本地 WordPress 项目。

它不只是页面搭建，还包括 Docker WordPress 环境、旧站到新站迁移模拟、DNS 切换、cPanel 概念、SSL、邮箱测试、表单、SEO、备份和 troubleshooting。

技术上，我还做了一个自定义插件 Greenline Site Toolkit。它包含后台设置页、shortcode、portfolio 自定义内容类型、自定义 REST API、前端 API 渲染、Google Tag Manager、GA4 事件追踪、WooCommerce readiness、网站 audit 和 client handover。

我做这个项目的原因是，真实 agency 的网站工作不只是设计好看，还要可维护、可追踪 enquiry、能和 hosting/DNS/email 配合、客户能安全更新，并且可以顺利交接。

## 3. What This Project Proves

- WordPress site delivery: I understand WordPress setup, pages, plugins, forms, admin settings, and maintenance.
- Hosting awareness: I practised cPanel-style workflows including DNS, SSL, email, databases, phpMyAdmin, upload limits, and migration issues.
- Custom WordPress development: I built a plugin with settings, sanitisation, escaping, shortcodes, custom post types, REST API routes, and frontend scripts.
- Frontend integration: I used JavaScript to fetch API data and render a portfolio grid on the website.
- Analytics setup: I connected Google Tag Manager and GA4-style events for leads, CTA clicks, phone clicks, and email clicks.
- Client thinking: I added handover, audit, maintenance, and WooCommerce readiness sections so the project feels like a real client delivery, not only a developer demo.
- Troubleshooting: I practised realistic problems such as upload size limits, admin password reset, email delivery testing, DNS cutover, and tracking validation.

## 4. Technical Talking Points

### WordPress Plugin

English:

The plugin is called Greenline Site Toolkit. I used it to avoid editing theme files directly and to keep reusable site features in one maintainable place.

Chinese:

这个插件叫 Greenline Site Toolkit。我用插件来集中管理功能，而不是直接乱改 theme 文件，这样更安全、更好维护。

Key examples:

- Admin settings page: lets site managers update contact email, phone, CTA text, and business hours.
- Shortcodes: reusable blocks such as CTA, business hours, portfolio grid, tracking summary, handover checklist, audit summary, and WooCommerce readiness.
- Custom post type: separates portfolio projects from normal pages.
- REST API endpoint: outputs portfolio projects as JSON for frontend or external use.
- Tracking script: pushes user actions into the GTM data layer.

### REST API

English:

I created a custom REST API endpoint at `/wp-json/greenline/v1/portfolio`. It returns portfolio project data as JSON. Then the frontend JavaScript can fetch that data and display project cards on the page.

Chinese:

我开了一个自定义接口 `/wp-json/greenline/v1/portfolio`，它把 portfolio 项目用 JSON 格式输出。前端 JavaScript 可以读取这个接口，然后把项目卡片显示到网页上。

Simple explanation:

- WordPress stores the project content.
- The REST API makes that content available as structured data.
- JavaScript reads the data.
- The page displays it dynamically.

### GA4 And GTM

English:

GA4 is where the client reads the reports. GTM is the tool that manages when tracking events are sent. In this project, my WordPress plugin outputs the GTM container, and my tracking script pushes events such as `generate_lead`, `cta_click`, `phone_click`, and `email_click`.

Chinese:

GA4 是看数据报告的地方，GTM 是管理追踪规则的地方。这个项目里，我的插件负责把 GTM 放进 WordPress，tracking-events.js 负责把用户行为推送出去，比如表单提交、按钮点击、电话点击、邮箱点击。

### WooCommerce Readiness

English:

I added WooCommerce readiness sections to show I understand ecommerce work is not just installing WooCommerce. It also needs product setup, checkout testing, payment/shipping checks, transactional emails, analytics, and client training.

Chinese:

我加了 WooCommerce readiness，是为了说明我知道电商网站不只是装 WooCommerce，还要检查产品、checkout、付款、配送、订单邮件、analytics 和客户培训。

## 5. If Interviewer Asks Questions

### Q: Did you build a live client site?

Answer:

This is a local portfolio and training project, not a live client website. I built it to demonstrate the same workflow I would use for a client project: setup, build, test, track, document, and hand over.

### Q: Why did you use Docker?

Answer:

Docker lets me run a safe local WordPress environment without affecting a real client site. It is useful for practice, testing changes, migration simulation, and troubleshooting before doing anything on production.

### Q: Why use a custom plugin?

Answer:

I wanted reusable functionality that does not depend on theme edits. A plugin is easier to maintain, safer during theme changes, and closer to how I would package small custom features for a client site.

### Q: What part was most challenging?

Answer:

The most challenging part was connecting the website actions to analytics clearly. I had to understand the difference between GA4 and GTM, create custom data layer events, test them in Tag Assistant, and make sure a successful form submission was tracked as a lead rather than just a button click.

### Q: What would you improve next?

Answer:

I would add a small WooCommerce product demo, improve performance testing documentation, and create a short client training video or screenshot guide. I would also test the workflow on a staging server connected to a real domain.

## 6. Best Sentences To Remember

- This project shows the full website delivery workflow, not just visual page editing.
- I used a custom plugin to keep reusable functionality maintainable and separate from the theme.
- I practised the operational side of WordPress: hosting, DNS, SSL, email, migration, forms, SEO, analytics, and handover.
- I connected website actions to GA4 through GTM so the client can measure enquiries, not just page views.
- The project helped me think like a website support/development person: build, test, document, troubleshoot, and train the client.

