# 🏫 Website Profil SMP Negeri 6 Dongko (ESNADO)


**Versi 1.0** | Diterbitkan: 8 Februari 2026

Sistem berbasis web yang menampilkan profil sekolah sebagai personal branding untuk SMP Negeri 6 Dongko

---


## 🎯 Tentang Proyek

Website Profil SMP Negeri 6 Dongko adalah aplikasi berbasis web yang dirancang untuk menjadi personal branding sekolah dalam mengenalkan profil, prestasi, dan kegiatan sekolah kepada masyarakat luas.

### Tujuan
- Menyediakan informasi profil sekolah yang lengkap dan mudah diakses
- Menampilkan berita dan kegiatan terkini sekolah
- Memudahkan pengelolaan konten website oleh admin
- Meningkatkan branding dan kredibilitas SMP Negeri 6 Dongko

### Dikembangkan Oleh
- **Developer**: Luthfiyya Ayu
- **Pengelola**: Tim IT ESNADO

---

## ✨ Fitur Utama

### 🌐 Halaman Publik
- **Beranda**: Sambutan Kepala Sekolah, Program Unggulan, Berita Terbaru, Galeri
- **Profil**: Visi & Misi, Sejarah, Struktur Organisasi, Akreditasi, Makna Logo
- **Akademik**: Kurikulum, Intrakurikuler, Profil Pelajar Pancasila, Program Unggulan, Ekstrakurikuler
- **Kesiswaan**: Prestasi Siswa, Kegiatan OSIS, Lomba, Organisasi Siswa
- **Berita**: Artikel dan pengumuman terkini
- **Fasilitas**: Galeri foto fasilitas sekolah
- **PPDB**: Informasi dan pendaftaran siswa baru

### 🔐 Dashboard Admin
- **Manajemen Berita**: CRUD berita dengan kategori, gambar, dan penjadwalan publikasi
- **Manajemen Galeri**: Upload, edit, dan hapus foto dengan kategorisasi
- **Manajemen Fasilitas**: CRUD fasilitas sekolah dengan gambar dan deskripsi
- **Manajemen Prestasi**: Input prestasi siswa dengan tingkat dan tahun
- **Pengaturan**:
  - Informasi Kepala Sekolah (foto, nama, jabatan, sambutan)
  - Jadwal PPDB (tanggal pendaftaran, tes, pengumuman, daftar ulang)
- **Dashboard Overview**: Statistik jumlah berita, galeri, dan prestasi
- **Quick Actions**: Akses cepat untuk membuat berita, upload foto, dan tambah prestasi

### 🔍 Fitur Tambahan
- Filter dan pencarian konten (berita, galeri, prestasi)
- Sistem autentikasi dan otorisasi
- Responsive design untuk mobile dan desktop
- Upload dan manajemen gambar
- Enkripsi kata sandi untuk keamanan

---

## 🛠️ Tech Stack

### Backend
- **Framework**: Laravel 10.x
- **PHP**: 8.1+
- **Database**: MySQL 8.0

### Frontend
- **Templating**: Blade
- **CSS Framework**: Tailwind CSS 3.x
- **Icons**: Font Awesome

### Tools & Libraries
- **Composer**: Dependency management
- **NPM/Yarn**: Asset management
- **Laravel Mix/Vite**: Asset bundling

---

## 💻 Persyaratan Sistem

Pastikan sistem Anda memenuhi persyaratan berikut:

- **PHP**: >= 8.1
- **Composer**: >= 2.0
- **MySQL**: >= 8.0 atau MariaDB >= 10.3
- **Node.js**: >= 16.x (untuk build assets)
- **NPM**: >= 8.x
- **Web Server**: Apache/Nginx
- **PHP Extensions**:
  - BCMath
  - Ctype
  - Fileinfo
  - JSON
  - Mbstring
  - OpenSSL
  - PDO
  - Tokenizer
  - XML
  - GD (untuk image processing)

### Browser yang Didukung
- Google Chrome (versi terbaru)
- Mozilla Firefox (versi terbaru)
- Microsoft Edge (versi terbaru)
- Safari (versi terbaru)

---

## 🚀 Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/luthfiyyaa/website-smpn-6-dongko
cd esnado-website
```

### 2. Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install NPM dependencies
npm install
```

### 3. Konfigurasi Environment

```bash
# Copy file .env.example
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4. Konfigurasi Database

Edit file `.env` dan sesuaikan dengan database Anda:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=smpn6
DB_USERNAME=root
DB_PASSWORD=your_password
```

### 5. Buat Database

```bash
# Buat database MySQL
mysql -u root -p
CREATE DATABASE smpn6;
EXIT;
```

### 6. Jalankan Migration & Seeder

```bash
# Jalankan migration
php artisan migrate
```

### 7. Setup Storage Link

```bash
# Buat symbolic link untuk storage
php artisan storage:link
```

### 8. Build Assets

```bash
# Development
npm run dev

# Production
npm run build
```

### 9. Jalankan Server

```bash
# Jalankan development server
php artisan serve
```

Akses aplikasi di: `http://localhost:8000`

---

## ⚙️ Konfigurasi

### Konfigurasi File Upload

Edit `config/filesystems.php` jika perlu menyesuaikan lokasi penyimpanan file:

```php
'public' => [
    'driver' => 'local',
    'root' => storage_path('app/public'),
    'url' => env('APP_URL').'/storage',
    'visibility' => 'public',
],
```

### Permissions (Linux/Mac)

```bash
# Set permissions untuk storage dan bootstrap/cache
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

---
## 🗂️ Struktur Halaman

### Halaman Publik

```
├── Beranda
│   ├── Sambutan Kepala Sekolah
│   ├── Program Unggulan
│   ├── Berita Terbaru
│   └── Galeri Sekolah
│
├── Profil 
│   ├── Visi & Misi
│   ├── Sejarah Sekolah
│   ├── Struktur Organisasi
│   ├── Akreditasi
│   └── Makna Logo
│
├── Akademik 
│   ├── Kurikulum
│   ├── Intrakurikuler
│   ├── Profil Pelajar Pancasila
│   ├── Program Unggulan
│   └── Ekstrakurikuler
│
├── Kesiswaan 
│   ├── Prestasi Siswa
│   ├── Kegiatan OSIS
│   ├── Lomba
│   └── Organisasi Siswa
│
├── Berita 
│   └── Daftar Berita & Detail
│
├── Fasilitas 
│   ├── Daftar Fasilitas
│   └── Galeri Foto
│
└── PPDB 
    └── Informasi & Pendaftaran
```

### Dashboard Admin

```
/admin
├── Dashboard
├── Berita
│   ├── Daftar Berita
│   ├── Buat Berita
│   └── Edit Berita
├── Galeri
│   ├── Daftar Foto
│   ├── Upload Foto
│   └── Edit Foto
├── Fasilitas
│   ├── Daftar Fasilitas
│   ├── Tambah Fasilitas
│   └── Edit Fasilitas
├── Prestasi Siswa
│   ├── Daftar Prestasi
│   ├── Tambah Prestasi
│   └── Edit Prestasi
└── Pengaturan
    ├── Informasi Kepala Sekolah
    └── Jadwal PPDB
```


---

## ❓ FAQ

### Saya lupa kata sandi, apa yang harus dilakukan?
Silakan hubungi Tim IT melalui kontak yang tertera. Permintaan reset kata sandi akan diproses paling lambat dalam waktu 1 x 24 jam.

### Apakah pengunjung dapat menambah berita?
Tidak. Pengelolaan informasi dalam Website Profil hanya dilakukan oleh user yang memiliki peran sebagai Admin.

### Apakah data saya aman?
Ya. Seluruh data pengguna dilindungi dengan enkripsi kata sandi dan sistem autentikasi login yang aman, sesuai dengan kebijakan privasi yang berlaku.

### Format gambar apa yang didukung?
Format yang didukung: JPG, JPEG, PNG dengan ukuran maksimal 2MB.

---

## 📞 Kontak Dukungan

Untuk bantuan teknis atau pertanyaan lebih lanjut:

### Tim IT ESNADO
- **Nama**: Admin SMP Negeri 6 Dongko
- **Email**: smpnsatap3dongko@gmail.com

### Developer
- **Nama**: Luthfiyya Ayu
- **Email**: luthfiyyaaayu@gmail.com

---

## 🙏 Acknowledgments

- Tim IT ESNADO
- SMP Negeri 6 Dongko
- Semua kontributor yang telah membantu proyek ini

---

<div align="center">

**Made with ❤️ for SMP Negeri 6 Dongko**

© 2026 SMP Negeri 6 Dongko. All rights reserved.

</div>