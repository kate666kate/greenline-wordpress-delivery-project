# Project Structure

This file explains where the important project pieces live.

## Runtime Files

Located in the parent folder:

```text
docker-compose.yml
```

Starts WordPress, MySQL, phpMyAdmin, Mailpit, and DNS simulator services.

```text
uploads.ini
```

PHP upload and memory settings used to fix migration import size limits.

```text
nginx.conf
```

Local DNS cutover simulator. It points the demo domain proxy to either the old or new WordPress container.

```text
greenline-site-style/
```

Small custom WordPress plugin that loads `style.css` for the case study and site styling.

```text
portfolio-images/
```

Practice images uploaded to the Portfolio page.

## WordPress URLs

```text
http://localhost:8090
```

Final migrated site.

```text
http://localhost:8090/case-study/
```

Main case study presentation page.

```text
http://localhost:8080
```

Old source site.

## Support URLs

```text
http://localhost:8025
```

Mailpit local email inbox.

```text
http://localhost:8082
```

phpMyAdmin for the new site database.

```text
http://localhost:8000
```

DNS cutover simulator.
