# WordPress 网站运维实操训练

这份练习不是教你背定义，而是帮你判断：你在工作里到底做过哪些环节。

## 场景

假设公司接到一个新客户，要做一个 WordPress 官网：

- 域名：`demoagency.com.au`
- 主机：澳洲 cPanel 主机
- 网站类型：企业官网
- 页面：首页、About、Services、Contact
- 联系表单：提交后发到 `info@demoagency.com.au`
- 上线方式：先做测试站，再切到正式域名

你可以把整个流程理解成 8 步。

## 1. 域名和主机

你会碰到这些东西：

- `domain`：`demoagency.com.au`
- `hosting`：网站文件和数据库放的地方
- `cPanel`：主机管理后台
- `DNS`：控制域名指向哪里

你在这一环如果做过下面任意几项，就算接触过：

- 登录过 cPanel
- 看过 `Domains`
- 建过 `subdomain`
- 打开过 `File Manager`
- 看过 `SSL/TLS`
- 看过 `phpMyAdmin`

## 2. 安装 WordPress

最常见是通过 cPanel 的一键安装器：

1. 登录 cPanel
2. 打开 `Softaculous Apps Installer` 或主机商提供的 WordPress 安装器
3. 选择 WordPress
4. 选择安装域名，比如 `staging.demoagency.com.au`
5. 选择安装目录
6. 设置管理员账号、密码、邮箱
7. 点击安装

装完后你通常会拿到：

- 前台网址
- 后台网址：`/wp-admin`
- 管理员账号

如果你没有做过 setup，很可能是同事已经完成了这一步。

## 3. 数据库怎么连

一键安装时通常自动完成，手动安装时才更明显。

本质是：

- WordPress 需要一个数据库存内容
- 主机支持 MySQL
- 你要告诉 WordPress 该连哪个数据库

手动流程通常是：

1. 在 cPanel 打开 `MySQL Databases`
2. 新建数据库
3. 新建数据库用户
4. 把用户加到数据库
5. 给权限
6. 安装 WordPress 时填写：
   - 数据库名
   - 用户名
   - 密码
   - `localhost`

WordPress 会把这些信息写进 `wp-config.php`

## 4. SSL

作用就是让网站从 `http` 变成 `https`

你一般会在 cPanel 看到：

- `SSL/TLS`
- `AutoSSL`
- 域名证书状态

常见工作：

- 检查站点是不是 `https`
- 上线后证书有没有生效
- 如果浏览器显示 `Not Secure`，就要排查

## 5. 企业邮箱

如果客户要 `info@demoagency.com.au`

通常流程是：

1. 在 cPanel 打开 `Email Accounts`
2. 创建邮箱账号
3. 设置密码
4. 记录收发件设置
5. 如果 DNS 不在主机商这里，还要去 DNS 后台设置 `MX` / `TXT`

如果公司用 Microsoft 365 或 Google Workspace：

- 邮箱账号可能不在 cPanel 创建
- 但 DNS 往往还是要配

## 6. WordPress 常用插件

你不用全会，但最好认识这些类别。

### 表单

- `Contact Form 7`
- `WPForms`

### SEO

- `Yoast SEO`
- `Rank Math`

### 迁移和备份

- `All-in-One WP Migration`
- `Duplicator`
- `UpdraftPlus`

### 缓存和速度

- `LiteSpeed Cache`
- `WP Rocket`

### 安全

- `Wordfence`

### 页面搭建

- `Elementor`
- `WPBakery`

## 7. 上线是在哪里做

不是只在 cPanel 做，通常分三块：

### 在 WordPress 后台

- 检查页面
- 检查表单
- 检查菜单
- 检查插件

### 在 cPanel

- 文件
- 数据库
- SSL
- 备份

### 在 DNS 后台

- 改 `A record`
- 改 `CNAME`
- 改 `MX`
- 改 `nameserver`

所以“网站上线”通常是多后台协作，不是单一按钮。

## 8. 网站迁移

WordPress 网站迁移的核心是：

- 文件
- 数据库
- 域名/DNS

### 方法 A：插件迁移

最常见流程：

1. 旧站装迁移插件
2. 导出备份包
3. 新主机先装一个空的 WordPress
4. 新站装同样插件
5. 导入备份包
6. 检查页面、图片、表单
7. 切 DNS

### 方法 B：手动迁移

1. 备份旧站文件
2. 导出旧站数据库
3. 在新主机创建数据库
4. 上传文件到新主机
5. 导入数据库
6. 修改 `wp-config.php`
7. 检查网站 URL
8. 开 SSL
9. 切 DNS
10. 上线后检查

## 快速自测

把每一项标成：

- `会独立做`
- `做过一部分`
- `只见过`
- `没做过`

清单：

- 登录 cPanel
- 找到网站文件
- 新建子域名
- 使用 WordPress 安装器
- 登录 `/wp-admin`
- 安装插件
- 更新主题或插件
- 创建数据库
- 用 phpMyAdmin 导出数据库
- 用 phpMyAdmin 导入数据库
- 检查 SSL
- 创建企业邮箱
- 改 DNS 记录
- 用迁移插件导出网站
- 用迁移插件导入网站
- 上线后检查表单和页面

## 你现在的目标

如果你准备投这类岗位，不一定要所有项目都“独立做过”。

更现实的判断方式是：

- 如果大部分是 `会独立做` 或 `做过一部分`，可以投
- 如果大部分只是 `只见过`，那就偏弱
- 如果你已经做过维护、插件、页面、cPanel、上线配合，其实已经比纯内容编辑更接近 Website Developer

## 下一步

把上面的清单逐条回复我也行，或者直接在这份文档里自己标注也行。

我可以根据你的回答，帮你判断：

- 这类岗位你是强匹配、中匹配还是弱匹配
- 简历里哪些能放心写
- 哪些要保守表达
