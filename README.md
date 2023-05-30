<p align="center">
  <a href="https://skijasi-docs.uatech.co.id/">
    <img src="https://i.ibb.co/Vq5hH9k/skijasi-commerce-theme-logo.png" width="150px" alt="Skijasi logo" />
  </a>
</p>
<h3 align="center">skijasi/commerce-theme</h3>
<p align="center">Official e-commerce theme for skijasi <a href="https://github.com/nadzorservera-croatia/skijasi-commerce-module">commerce module</a></p>
<p align="center"><a href="https://skijasi-demo.uatech.co.id/commerce" target="_blank">Try live demo</a></p>
<br />

<p align="center">
<a href="https://github.styleci.io/repos/347838630"><img src="https://github.styleci.io/repos/347838630/shield" alt="Skijasi StyleCI"></a>
<a href="https://packagist.org/packages/nadzorservera-croatia/skijasi"><img src="https://img.shields.io/packagist/dt/skijasi/core" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/nadzorservera-croatia/skijasi"><img src="https://img.shields.io/packagist/v/skijasi/core" alt="Latest Stable Version"></a>
</p>

<p align="center">
  <a href="https://skijasi-docs.uatech.co.id/">
    <img src="https://i.ibb.co/mTdhq0T/Screen-Shot-2021-12-08-at-22-47-51.png" alt="screencapture-skijasi-dashboard-uatech-co-id-dashboard-crud-2021-03-17-09-57-08-1" />
  </a>
</p>

## Installation
- Install skijasi first with commerce module installed. After that, you can install the module with the following command.

```bash
composer require skijasi/commerce-theme
```

- Run the following command to easily setup the theme.

```bash
php artisan migrate
php artisan skijasi-commerce-theme:setup
composer dump-autoload
php artisan db:seed --class=SkijasiCommerceThemeSeeder
```

- Add the plugins to your `MIX_SKIJASI_MODULES` to `.env`. If you have another plugins installed, include them using delimiter comma (,).

```
MIX_SKIJASI_MODULES=commerce-theme
```

- Add the plugins menu to your `MIX_SKIJASI_MENU` to `.env`. If you have another menu, include them using delimiter comma (,).

```
MIX_SKIJASI_MENU=admin,commerce-theme
```

- Fill the other variables in .env file.
  - `MIX_COMMERCE_WEB_ROUTE_PREFIX=commerce` Set prefix for the theme.
  - `CRON_EXPIRED_ORDER="*/5 * * * *"` Set the cron job to check for expired orders.

## Acknowledgements

- [TailwindCSS](https://tailwindcss.com/)
- [VocaJS](https://vocajs.com/)
