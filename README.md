# News App

## Deskripsi
News App adalah aplikasi web untuk menampilkan berita terkini.

## Prasyarat
- PHP >= 8.2
- Composer >= 2.x.x
- Node.js >= 20.xx.x
- NPM
- PostgreSQL
- NPM => 10.2.3
- PostgresSQL => 14.12

## Instalasi
@@ -42,6 +42,18 @@ Salin file .env.example ke .env dan sesuaikan konfigurasi environment Anda:
cp .env.example .env

### Clone Repository
Clone repository ini ke direktori lokal Anda:

```bash

git clone https://github.com/arislaode/news-app.git

cd news-app

```

### Instal Dependensi
Instal dependensi PHP menggunakan Composer:

```bash
composer install
```

Instal dependensi Node.js menggunakan npm:
```bash
npm install
```

### Konfigurasi Environment
Pastikan anda telah membuat ```database``` di postgeresswl. Masuk ke file .env dan sesuaikan konfigurasi database Anda:

```bash
DB_CONNECTION=pgsql
DB_HOST=172.0.0.1
DB_PORT=5432
DB_DATABASE=database_name_postgresql
DB_USERNAME=database_user_postgresql
DB_PASSWORD=database_password_postgresql
cp .env.example .env
```

### Generate Key Laravel
Buat key baru project laravel:
```bash
php artisan key:generate
```
### Konfigurasi file static
buat penyimpanan gambar news:
```bash
php artisan storage:link
```

### Migrasi inisial laravel
menjalankan semua migrasi awal project laravel:

@@ -68,6 +74,14 @@ php artisan migrate

### Insert data awal
memasukan data awal ke project laravel:

```bash
php artisan db:seed

```

```bash
php artisan migrate

```

### Build Assets
Build aset menggunakan Vite:

```bash
npm run build
```

### Jalankan Server
Jalankan server pengembangan Laravel::

```bash
php artisan serve
```
