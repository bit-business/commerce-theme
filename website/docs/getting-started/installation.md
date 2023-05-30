---
sidebar_position: 1
---

# Installation

1. Install [Skijasi](https://github.com/nadzorservera-croatia/skijasi) first with [Skijasi commerce module](https://github.com/nadzorservera-croatia/skijasi-commerce-theme) installed. After that, you can install the module with the following command.

```bash
composer require skijasi/commerce-theme
```

2. Run the following command to easily setup the theme.

```bash
php artisan migrate
php artisan skijasi-commerce-theme:setup
composer dump-autoload
php artisan db:seed --class=SkijasiCommerceThemeSeeder
```

3. Add the plugins to your `MIX_SKIJASI_MODULES` to `.env`. If you have another plugins installed, include them using delimiter comma (,).

```
MIX_SKIJASI_MODULES=commerce-theme
```

4. Add the plugins menu to your `MIX_SKIJASI_MENU` to `.env`. If you have another menu, include them using delimiter comma (,).

```
MIX_SKIJASI_MENU=admin,commerce-theme
```

5. Fill the other variables in .env file.
    - `MIX_COMMERCE_WEB_ROUTE_PREFIX=commerce` Set prefix for the theme.
    - `CRON_EXPIRED_ORDER="*/5 * * * *"` Set the cron job to check for expired orders.

## Acknowledgements

- [TailwindCSS](https://tailwindcss.com/)
- [VocaJS](https://vocajs.com/)