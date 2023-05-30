---
sidebar_position: 1
---

# Installation

1. Install [Skijasi](https://github.com/nadzorservera-croatia/skijasi) dengan modul [Skijasi commerce module](https://github.com/nadzorservera-croatia/skijasi-commerce-theme) diinstal. Setelah itu, Anda dapat menginstal modul dengan perintah berikut.
```bash
composer require skijasi/commerce-theme
```

2.Jalankan perintah berikut untuk mengatur tema dengan mudah.

```bash
php artisan migrate
php artisan skijasi-commerce-theme:setup
composer dump-autoload
php artisan db:seed --class=SkijasiCommerceThemeSeeder
```

3. Tambahkan plugin ke `MIX_SKIJASI_MODULES` Anda ke `.env`. Jika Anda memiliki plugin lain yang diinstal, sertakan plugin tersebut menggunakan koma pembatas (,).

```
MIX_SKIJASI_MODULES=commerce-theme
```

4. Tambahkan menu plugin ke `MIX_SKIJASI_MENU` Anda ke `.env`. Jika Anda memiliki menu lain, sertakan menu tersebut menggunakan koma pembatas (,).

```
MIX_SKIJASI_MENU=admin,commerce-theme
```

5. Isi variabel lain dalam file .env.
    - `MIX_COMMERCE_WEB_ROUTE_PREFIX=commerce` Tetapkan awalan untuk tema.
    - `CRON_EXPIRED_ORDER="*/5 * * * *"` Atur tugas cron untuk memeriksa pesanan yang kedaluwarsa.

## Acknowledgements

- [TailwindCSS](https://tailwindcss.com/)
- [VocaJS](https://vocajs.com/)