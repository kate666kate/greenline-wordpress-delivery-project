# WordPress 网站运维实操训练指南

这份指南解释这个项目里练过的 WordPress、cPanel、DNS、邮箱、SSL、迁移和排查流程。

它不是背定义用的，而是帮你判断：真实网站交付工作里，你到底接触过哪些环节。

## 场景

假设一个小型企业需要做一个 WordPress 网站：

- 域名：`demoagency.com.au`
- 主机：澳洲 cPanel hosting
- 网站类型：小型企业官网
- 页面：Home、About、Services、Contact
- 联系表单收件人：`info@demoagency.com.au`
- 上线计划：先搭建和测试，再把域名指向完成的网站

整个流程可以理解成 8 个主要部分。

## 1. 域名和主机

你通常会接触到：

- `domain`：网站公开地址
- `hosting`：网站文件和数据库所在位置
- `cPanel`：主机管理后台
- `DNS`：控制域名指向哪里

如果你做过下面任意几项，就算有相关接触：

- 登录过 cPanel
- 看过 `Domains`
- 创建或检查过 subdomain
- 打开过 `File Manager`
- 看过 `SSL/TLS`
- 打开过 `phpMyAdmin`

## 2. 安装 WordPress

共享主机上最常见的是一键安装：

1. 登录 cPanel。
2. 打开 `Softaculous`、`WordPress Manager`、`Installatron` 或主机商提供的 WordPress installer。
3. 选择 WordPress。
4. 选择安装域名，例如 `staging.demoagency.com.au`。
5. 选择安装目录。
6. 设置管理员用户名、密码和邮箱。
7. 点击 install。

安装完成后，通常会得到：

- 前台网址
- 以 `/wp-admin` 结尾的后台网址
- WordPress 管理员用户名

如果你以前只是编辑现有 WordPress 网站，很可能 setup 已经由别人完成了。

## 3. 数据库连接

一键安装通常会自动创建并连接数据库。手动安装时这个过程更明显。

核心理解：

- WordPress 把内容存在 MySQL 数据库里。
- Hosting 提供 MySQL。
- WordPress 需要知道数据库连接信息。

手动流程：

1. 在 cPanel 打开 `MySQL Databases`。
2. 创建数据库。
3. 创建数据库用户。
4. 把用户加入数据库。
5. 授权。
6. 安装 WordPress 时填写：
   - 数据库名
   - 数据库用户名
   - 数据库密码
   - 数据库 host，通常是 `localhost`

WordPress 会把这些信息保存到 `wp-config.php`。

## 4. SSL

SSL 的作用是让网站从 `http` 变成 `https`。

在 cPanel 里通常会看：

- `SSL/TLS`
- `SSL/TLS Status`
- `AutoSSL`
- 域名证书状态

常见工作：

- 检查网站是否通过 `https` 打开。
- 域名指向当前 server 后运行 AutoSSL。
- 排查浏览器里的 `Not Secure`。
- 确认 root domain 和 `www` 都被证书覆盖。

## 5. 企业邮箱

如果客户需要 `info@demoagency.com.au`，cPanel 常见流程是：

1. 打开 `Email Accounts`。
2. 创建邮箱账号。
3. 设置强密码。
4. 记录收发件设置。
5. 如果 DNS 不在当前主机商，需要去 DNS 后台配置 `MX` 和相关 `TXT` 记录。

如果公司用 Microsoft 365 或 Google Workspace：

- 邮箱账号可能不在 cPanel 创建。
- DNS 记录通常仍然要配置。
- 不确定邮箱在哪里托管时，不要乱改 MX/SPF/DKIM/DMARC。

## 6. 常见 WordPress 插件类别

你不需要所有插件都会，但最好认识主要类别。

表单：

- `Contact Form 7`
- `WPForms`

SEO：

- `Yoast SEO`
- `Rank Math`

迁移和备份：

- `All-in-One WP Migration`
- `Duplicator`
- `UpdraftPlus`

缓存和速度：

- `LiteSpeed Cache`
- `WP Rocket`

安全：

- `Wordfence`

页面搭建：

- `Elementor`
- `WPBakery`

## 7. 网站上线涉及哪里

网站上线通常不是只点一个按钮，而是多个系统配合。

在 WordPress 后台：

- 检查页面
- 检查表单
- 检查菜单
- 检查插件

在 cPanel：

- 文件
- 数据库
- SSL
- 备份

在 DNS：

- A record
- CNAME
- MX
- Nameservers

重点：网站上线通常需要 WordPress、hosting、DNS、SSL、邮箱一起配合。

## 8. 网站迁移

WordPress 迁移的核心是：

- 文件
- 数据库
- 域名/DNS

### 方法 A：插件迁移

常见流程：

1. 在旧站安装迁移插件。
2. 导出备份包。
3. 在新主机安装一个干净的 WordPress。
4. 在新站安装同样的迁移插件。
5. 导入备份包。
6. 检查页面、图片、插件、表单。
7. 测试完成后切换 DNS。

### 方法 B：手动迁移

1. 备份旧站文件。
2. 导出旧站数据库。
3. 在新主机创建数据库。
4. 上传文件到新主机。
5. 导入数据库。
6. 更新 `wp-config.php`。
7. 检查网站 URL。
8. 启用 SSL。
9. 切换 DNS。
10. 上线后检查。

## 快速自测

每一项标记成：

- `会独立做`
- `做过一部分`
- `只见过`
- `没做过`

清单：

- 登录 cPanel
- 找到网站文件
- 创建或检查 subdomain
- 使用 WordPress installer
- 登录 `/wp-admin`
- 安装插件
- 更新主题或插件
- 创建数据库
- 用 phpMyAdmin 导出数据库
- 用 phpMyAdmin 导入数据库
- 检查 SSL
- 创建企业邮箱
- 修改 DNS 记录
- 用迁移插件导出网站
- 用迁移插件导入网站
- 上线后检查表单和页面

## 你现在的目标

申请 Website Developer 类岗位时，不一定每一项都要完全独立做过。

可以这样判断：

- 如果大部分是 `会独立做` 或 `做过一部分`，可以投。
- 如果大部分只是 `只见过`，这个岗位可能偏难。
- 如果你已经做过维护、插件、页面、cPanel、DNS、迁移配合、表单和 troubleshooting，你已经比纯内容编辑更接近 website delivery。

## 下一步

用这份指南判断下一步要补什么。针对更强的 WordPress Developer 岗位，优先补：

- Elementor
- WooCommerce
- PHP 基础
- Custom plugin 练习
- Custom theme 结构
- GA4/GTM 基础
- Performance optimisation
