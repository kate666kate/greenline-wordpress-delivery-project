---
name: wordpress-site-ops
description: Bilingual English/Chinese website delivery and operations workflow for new or existing small business websites, especially WordPress, Shopify, cPanel, DNS, SSL, email, SEO, AI-assisted website content, QA, migration, and troubleshooting tasks. Use when Codex needs to guide or perform website setup, maintenance, migration, launch checks, hosting/domain/email configuration, client handover, or create a repeatable operation page for a new website project.
---

# WordPress Site Ops / 网站交付流程

Use this skill for practical website build, migration, maintenance, launch, handover, and support tasks.

使用这个 skill 处理真实或模拟的网站工作：新建网站、迁移、维护、上线检查、客户交付、排查问题。

Core goal: reduce thinking load. Gather project facts, choose the right workflow, show the next action clearly, and produce practical notes.

核心目标：让用户不用每次重新想流程。先收集资料，再判断下一步，并用清楚的步骤带用户做。

## Default Behaviour / 默认行为

When the user says they have a new website to build, do not start with long advice.

当用户说“我有一个新网站要做”时，不要先讲一大堆理论。

Start in this order:

按这个顺序来：

1. Ask for the project intake information.
2. 用户填完资料后，只做简短确认。
3. Ask whether to generate/use an operation page.
4. 用户确认后，再开始第 1 步。
5. For real live websites, ask before risky changes.

## Intake Template / 项目资料模板

Ask the user to fill this in. Unknown items can be `TBC`.

让用户填写下面资料，不知道就写 `TBC`。

```text
网站类型 / Website type:
任务类型 / Task type:
客户/网站名称 / Client or website name:
域名 / Domain:
Hosting / Hosting:
DNS 在哪里管理 / DNS location:
邮箱系统 / Email system:
页面 / Pages:
目标 / Goal:
素材 / Assets:
Form 收件邮箱 / Form recipient email:
Deadline / Deadline:
```

Example / 示例：

```text
网站类型 / Website type: WordPress
任务类型 / Task type: 新建 / New build
客户/网站名称 / Client or website name: Bright Dental Studio
域名 / Domain: brightdental.com.au
Hosting / Hosting: cPanel
DNS 在哪里管理 / DNS location: cPanel Zone Editor
邮箱系统 / Email system: cPanel Email
页面 / Pages: Home, About, Services, Contact
目标 / Goal: 展示服务 + 收 enquiry / Showcase services and receive enquiries
素材 / Assets: logo, 5 photos, navy blue + white
Form 收件邮箱 / Form recipient email: reception@brightdental.com.au
Deadline / Deadline: next Friday
```

## Confirmation Prompt / 确认提示

After intake, do not explain the full workflow immediately. Stop at this short prompt:

用户填完资料后，不要立刻讲完整流程，先停在这个确认点：

```text
资料已收到。
Project details received.

现在需要生成/使用操作页面吗？
Would you like to generate/use the operation page now?

[生成/使用操作页面]
[Generate/use operation page]
```

Only after the user confirms, open or generate the operation page and begin step 1.

只有用户确认后，才开始生成/使用操作页面，并进入第 1 步。

## Operation Page Mode / 操作页面模式

When creating a practice or visual operation page, include:

创建模拟/可视化操作页面时，需要包含：

- Client intake summary / 客户资料摘要
- Left-side step navigation / 左侧步骤导航
- Main panel showing the current step / 主区域显示当前步骤
- Mock fields that mirror real tools / 模拟真实工具里的字段
- Notes explaining where this happens in real work / 说明真实工作里在哪里操作
- Warning boxes for risky actions / 高风险操作提醒
- Buttons that mark steps complete / 完成步骤按钮
- Final handover summary / 最终交付总结

Recommended WordPress/cPanel steps:

WordPress + cPanel 新站推荐步骤：

1. Access + risk check / 权限与风险检查
2. Add or check domain in cPanel / 在 cPanel 添加或确认域名
3. Install WordPress / 安装 WordPress
4. Create email account / 创建邮箱
5. Check DNS Zone Editor / 检查 DNS
6. Run AutoSSL / SSL check / 运行 AutoSSL
7. Configure WordPress basic settings / 设置 WordPress 基础配置
8. Create pages and menu / 创建页面和菜单
9. Draft content using AI assistance and manual review / AI 辅助写文案并人工确认
10. Configure contact form and SMTP / 设置表单和 SMTP
11. Complete SEO and image QA / 做 SEO 和图片检查
12. Backup and handover / 备份和交付

For Shopify, replace cPanel/WordPress installation with Shopify admin setup, theme, products, collections, navigation, pages, domain connection, forms/apps, SEO, QA, and handover.

如果是 Shopify，把 cPanel/WordPress 安装步骤替换成 Shopify 后台、theme、products、collections、navigation、pages、domain、forms/apps、SEO、QA 和交付。

## Permission Handoff / 权限交接

At each step, tell the user whether Codex can take over and what information is needed.

每一步都要告诉用户：这一步 Codex 是否可以接管，需要什么信息。

Use this wording:

推荐表达：

```text
从这一步开始我可以接管。
From this step, I can take over.

请提供：
Please provide:

- Login URL
- Username
- Temporary password or application password
- 2FA: yes/no
- Allowed actions
- Not allowed actions
- Live site: yes/no
```

For cPanel, be cautious. Prefer user confirmation before changes.

cPanel 权限很大，改动前要谨慎，最好让用户确认。

For WordPress admin/API, Codex can usually help more directly:

WordPress 后台或 API 通常更适合 Codex 接管：

- Create pages / 创建页面
- Edit copy / 修改文案
- Configure forms / 设置表单
- Add SEO titles/meta / 添加 SEO title/meta
- Check headings, URLs, images / 检查 H1、URL、图片
- Prepare handover notes / 准备交付说明

Never perform these without confirmation:

这些操作必须确认后再做：

- Change DNS / 改 DNS
- Delete files or database / 删除文件或数据库
- Overwrite migration destination / 迁移覆盖
- Change MX/SPF/DKIM/DMARC / 改邮箱 DNS 记录
- Change PHP version/settings / 改 PHP 设置
- Disable important plugins / 停用重要插件
- Change live theme / 更换 live theme

## Core Mental Model / 核心理解

WordPress site = files + database + domain/DNS + server/PHP + email/SMTP.

WordPress 网站 = 文件 + 数据库 + 域名/DNS + server/PHP + 邮箱/SMTP。

Common locations / 常见位置：

- cPanel files: `public_html`
- WordPress content: `public_html/wp-content`
- Plugins: `public_html/wp-content/plugins`
- Themes: `public_html/wp-content/themes`
- Uploads: `public_html/wp-content/uploads`
- Docker WordPress files: `/var/www/html`
- Database connection: `wp-config.php`

## Build Checklist / 新站搭建清单

1. Confirm goal, pages, assets, domain, hosting, email, and launch date.
2. 确认目标、页面、素材、域名、hosting、邮箱、上线时间。
3. Install or access WordPress.
4. 安装或进入 WordPress。
5. Set `Settings > General`.
6. 设置 `Settings > General`。
7. Set `Settings > Permalinks > Post name`.
8. 设置 `Settings > Permalinks > Post name`。
9. Create required pages.
10. 创建页面。
11. Set static homepage in `Settings > Reading`.
12. 设置静态首页。
13. Build menu.
14. 创建菜单。
15. Add contact form.
16. 添加联系表单。
17. Configure SMTP.
18. 设置 SMTP。
19. Draft/refine content with AI assistance, then manually review.
20. 用 AI 辅助文案，再人工确认。
21. Add SEO title/meta.
22. 添加 SEO title/meta。
23. Add alt text and optimise images.
24. 添加 alt text 并压缩图片。
25. Test mobile layout.
26. 测试手机端。
27. Run final handover checks.
28. 做最终交付检查。

## AI-Assisted Website Workflow / AI 辅助网页流程

Use AI as a production assistant, not as the only source of truth.

AI 是生产助手，不是唯一事实来源。

Good AI uses / 适合 AI 做的事：

- Draft page structure from a brief / 根据 brief 起页面结构
- Rewrite website copy / 润色网页文案
- Suggest SEO titles and meta descriptions / 建议 SEO title/meta
- Generate FAQ ideas / 生成 FAQ 想法
- Draft image alt text / 起草图片 alt text
- Explain technical steps / 解释技术步骤
- Produce QA, migration, and launch checklists / 生成 QA、迁移、上线清单
- Help troubleshoot HTML/CSS, WordPress, Shopify, and cPanel symptoms / 辅助排查问题

Always verify / 必须人工确认：

- Business facts / 商业事实
- Pricing and claims / 价格和承诺
- Address, phone number, opening hours / 地址、电话、营业时间
- Legal or medical text / 法律或医疗文字
- SEO intent / SEO 目标
- Brand tone / 品牌语气
- Technical instructions before live changes / live 改动前的技术步骤

## DNS Checklist / DNS 清单

For website cutover, usually change:

网站切换通常只改：

- `@` A record to new server IP / 根域名 A record 指向新 server IP
- `www` CNAME to root domain, or A record to new server IP / www 指向根域名或新 IP

Do not casually change email records:

不要随便改邮箱记录：

- MX
- SPF TXT
- DKIM TXT/CNAME
- DMARC TXT

Email records affect mailbox delivery. Preserve them unless email hosting is also moving.

邮箱记录会影响客户收信。除非邮箱也迁移，否则不要乱改。

## Email And Forms / 邮箱和表单

Separate mailbox creation from WordPress sending.

邮箱创建和 WordPress 发信是两件事。

- Mailbox creation: cPanel Email Accounts, Google Workspace, or Microsoft 365.
- 创建邮箱：cPanel Email Accounts、Google Workspace 或 Microsoft 365。
- WordPress sending: WP Mail SMTP or equivalent.
- WordPress 发信：WP Mail SMTP 或类似插件。
- Form recipient: Contact Form 7 `Mail > To`.
- 表单收件人：Contact Form 7 的 `Mail > To`。
- Customer reply: use `Reply-To: [your-email]`.
- 回复客户：用 `Reply-To: [your-email]`。

Recommended Contact Form 7 structure / 推荐表单邮件结构：

```text
To: info@example.com
From: Website <noreply@example.com>
Additional headers: Reply-To: [your-email]
```

If forms fail / 如果表单不发邮件：

1. Check form `To` / 检查收件人
2. Check mail tags / 检查表单标签
3. Check SMTP settings / 检查 SMTP
4. Check spam/junk / 检查垃圾邮件
5. Check MX/SPF/DKIM/DMARC / 检查邮箱 DNS
6. Test from real mailbox / 用真实邮箱测试

## SEO Checklist / SEO 清单

- Clean URL / 干净 URL
- One H1 per page / 每页一个 H1
- Unique SEO title / 每页独立 SEO title
- Useful meta description / 有吸引力的 meta description
- Natural keyword usage / 自然包含关键词
- Image alt text / 图片 alt text
- Sitemap exists / 有 sitemap
- Robots does not block indexing / robots 没有阻止索引
- Search engine visibility enabled / 允许搜索引擎索引

## Migration Checklist / 迁移清单

1. Backup old site files and database / 备份旧站文件和数据库
2. Prepare new hosting / 准备新 hosting
3. Install clean WordPress or prepare destination / 安装干净 WordPress 或准备目标站
4. Export old site / 导出旧站
5. Import into new site / 导入新站
6. Increase PHP upload limits if import fails / 如果导入失败，提高 PHP 上传限制
7. Refresh permalinks / 刷新 permalinks
8. Check pages, media, plugins, forms, admin login / 检查页面、媒体、插件、表单、后台登录
9. Replace old URLs if needed / 如需要，替换旧 URL
10. Switch DNS only after new site is verified / 新站验证后再切 DNS
11. Check SSL and forms after cutover / 切换后检查 SSL 和表单
12. Keep old site for rollback before cancellation / 取消旧站前保留回滚机会

## Troubleshooting Order / 排查顺序

Use this order:

按这个顺序排查：

1. DNS/domain / DNS 或域名
2. Hosting/server / hosting 或 server
3. SSL
4. WordPress core / WordPress 本身
5. Plugins / 插件
6. Theme / 主题
7. Database / 数据库
8. PHP version/settings / PHP 版本或设置
9. Error logs / 错误日志

## Common Fixes / 常见修复

Plugin conflict / 插件冲突：

- If admin works: deactivate suspected plugin.
- 后台能进：停用可疑插件。
- If admin fails: rename plugin folder in `wp-content/plugins`.
- 后台不能进：在 `wp-content/plugins` 里重命名插件文件夹。

Database connection error / 数据库连接错误：

- Check database exists / 数据库是否存在
- Check DB user exists / 数据库用户是否存在
- Check DB password / 数据库密码是否正确
- Check DB user permissions / 数据库用户权限
- Check `wp-config.php` / 检查 `wp-config.php`
- Check MySQL service / 检查 MySQL 服务

Forgotten admin password / 忘记管理员密码：

- Use password reset email if available / 优先用邮件重置
- Use WP-CLI/API if authenticated / 有权限可用 WP-CLI/API
- Use phpMyAdmin: `wp_users > user_pass > MD5 > new password`, then log in and update password in WordPress.
- phpMyAdmin 方法：`wp_users > user_pass > MD5 > 新密码`，登录后再在 WordPress 里改成正式密码。

SSL issue / SSL 问题：

- Check DNS points to current host / DNS 是否指向当前 hosting
- Run AutoSSL / check SSL/TLS Status / 运行 AutoSSL
- Confirm root and www are covered / 确认 root 和 www 都覆盖
- Force HTTPS redirect / 强制 HTTPS
- Fix mixed content / 修复 mixed content

## Handover / 交付

Before handover / 交付前确认：

- Backup complete / 已备份
- Forms tested / 表单已测试
- SEO checked / SEO 已检查
- Sitemap/robots checked / sitemap 和 robots 已检查
- SSL checked / SSL 已检查
- DNS checked / DNS 已检查
- Admin users reviewed / 管理员账号已检查
- App passwords revoked if no longer needed / 不需要的 application passwords 已删除
- Migration plugins inactive unless still needed / 迁移插件不用时已停用

Client-friendly summary format / 客户交付总结格式：

```text
What was changed / 改了什么:
What was tested / 测试了什么:
Risks or pending confirmations / 风险或待确认:
What the client should check next / 客户下一步检查:
Recommended follow-up work / 建议后续工作:
```

Keep the summary practical and non-technical unless the user asks for technical detail.

除非用户要求技术细节，否则交付总结要实用、简单、非技术化。
