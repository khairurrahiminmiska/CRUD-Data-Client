# 📋 CRUD App

Aplikasi CRUD (Create, Read, Update, Delete) sederhana yang dibangun menggunakan **Laravel** dengan database **SQLite**.

---

## 🚀 Fitur

- ✅ Tambah data (Create)
- ✅ Lihat data (Read)
- ✅ Edit data (Update)
- ✅ Hapus data (Delete)

---

## 🛠️ Teknologi yang Digunakan

| Teknologi | Versi |
|-----------|-------|
| PHP | >= 8.1 |
| Laravel | >= 10.x |
| SQLite | 3.x |
| Composer | >= 2.x |

---

## ⚙️ Persyaratan Sistem

Sebelum memulai, pastikan perangkat kamu sudah terinstall:

- [PHP](https://www.php.net/downloads) >= 8.1
- [Composer](https://getcomposer.org/download/)
- Extension PHP: `pdo_sqlite`, `sqlite3`, `mbstring`, `openssl`, `xml`

Cek ekstensi PHP yang aktif:
```bash
php -m
```

---

## 📦 Instalasi

Ikuti langkah-langkah berikut untuk menjalankan project di lokal:

### 1. Clone Repository

```bash
git clone https://github.com/khairurrahiminmiska/CRUD-Data-Client.git
cd crud-app
```

> Ganti `username` dengan username GitHub kamu.

### 2. Install Dependency

```bash
composer install
```

### 3. Salin File Konfigurasi Environment

```bash
cp .env.example .env
```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Konfigurasi Database SQLite

Buat file database SQLite:

```bash
touch database/database.sqlite
```

Pastikan file `.env` menggunakan konfigurasi berikut:

```env
DB_CONNECTION=sqlite
DB_DATABASE=/absolute/path/to/database/database.sqlite
```

> **Catatan:** Ganti `/absolute/path/to/` dengan path absolut sesuai lokasi project kamu. Contoh di Windows: `C:/xampp/htdocs/crud-app/database/database.sqlite`

### 6. Jalankan Migrasi Database

```bash
php artisan migrate
```

### 7. (Opsional) Jalankan Seeder

Jika tersedia data dummy:

```bash
php artisan db:seed
```

### 8. Jalankan Server Lokal

```bash
php artisan serve
```

Aplikasi akan berjalan di: **http://127.0.0.1:8000**

---

## 🗂️ Struktur Project

```
crud-app/
├── app/
│   ├── Http/
│   │   └── Controllers/     # Logic controller
│   └── Models/              # Model Eloquent
├── database/
│   ├── migrations/          # File migrasi database
│   └── database.sqlite      # File database SQLite
├── resources/
│   └── views/               # File tampilan Blade
├── routes/
│   └── web.php              # Routing aplikasi
├── .env.example             # Template konfigurasi environment
└── README.md
```

---

## 🔧 Konfigurasi Tambahan

### Mengatur Izin Folder (Linux/Mac)

```bash
chmod -R 775 storage
chmod -R 775 bootstrap/cache
```

### Membersihkan Cache

```bash
php artisan config:clear
php artisan cache:clear
php artisan view:clear
```

---

## ❓ Troubleshooting

| Masalah | Solusi |
|--------|--------|
| `could not find driver` | Aktifkan ekstensi `pdo_sqlite` dan `sqlite3` di `php.ini` |
| `No application encryption key has been specified` | Jalankan `php artisan key:generate` |
| Halaman kosong / error 500 | Cek file `.env`, pastikan `APP_KEY` sudah terisi |
| Database tidak ditemukan | Pastikan file `database/database.sqlite` sudah dibuat |

---

## 📄 Lisensi

Project ini menggunakan lisensi [MIT](LICENSE).

---

## 👤 Author

**Nama Kamu**
- GitHub: [@username](https://github.com/username)

---

> Dibuat dengan ❤️ menggunakan Laravel
