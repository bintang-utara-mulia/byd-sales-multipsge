# BYD Sales - Multi Page

Website sales mobil listrik BYD berbasis Laravel dengan struktur multi-page.

## Halaman
- `/` - Home
- `/tentang-kami` - Tentang Kami
- `/produk` - Produk
- `/promo` - Promo
- `/testimoni` - Testimoni
- `/faq` - FAQ
- `/kontak` - Kontak
- `/products/byd-seal` - Detail BYD Seal
- `/products/byd-dolphin` - Detail BYD Dolphin
- `/products/byd-atto-3` - Detail BYD Atto 3
- `/products/byd-m6` - Detail BYD M6

## Struktur
Section yang digunakan bersama tetap berada di `resources/views/sections`, sedangkan halaman utama berada di file Blade terpisah. Navbar dan footer diletakkan di layout sehingga tidak perlu ditulis ulang pada setiap halaman.

## Menjalankan
```bash
composer install
npm install
npm run dev
php artisan serve
```

Repository target: `byd-sales-MultiPage`
