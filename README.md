# Website Sekolahku

Selamat datang di repositori Website Sekolahku, sebuah aplikasi web berbasis Laravel untuk manajemen pendaftaran siswa baru.

## Deskripsi

Website Sekolahku adalah platform digital yang dirancang untuk memudahkan proses pendaftaran siswa baru. Aplikasi ini menyediakan antarmuka yang user-friendly bagi calon siswa dan orang tua, serta panel administrasi yang efisien bagi staf sekolah.

Fitur utama:
- Pendaftaran online untuk calon siswa
- Panel admin untuk mengelola pendaftaran
- Sistem notifikasi email otomatis
- Manajemen tahun ajaran
- Laporan dan statistik pendaftaran

## Instalasi

Ikuti langkah-langkah berikut untuk menginstal Website Sekolahku di mesin lokal Anda:

1. Clone repositori ini:
   ```
   git clone https://github.com/uthadehikaru/sekolahku.git
   ```

2. Masuk ke direktori proyek:
   ```
   cd sekolahku
   ```

3. Instal dependensi PHP menggunakan Composer:
   ```
   composer install
   ```

4. Salin file .env.example menjadi .env:
   ```
   cp .env.example .env
   ```

5. Generate kunci aplikasi:
   ```
   php artisan key:generate
   ```

6. Konfigurasi database Anda di file .env:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=sekolahku
   DB_USERNAME=root
   DB_PASSWORD=
   ```

7. Jalankan migrasi database:
   ```
   php artisan migrate
   ```

8. Jalankan server pengembangan:
   ```
   php artisan serve
   ```

9. Buka `http://localhost:8000` di browser Anda untuk mengakses aplikasi.

## Penggunaan

Setelah instalasi, Anda dapat:
1. Mengakses halaman pendaftaran siswa baru di homepage.
2. Masuk ke panel admin menggunakan kredensial default:
   - Email: admin@laravel.test
   - Password: secret

## Kontribusi

Kami sangat menghargai kontribusi Anda untuk Website Sekolahku. Silakan buat pull request atau laporkan issues jika Anda menemukan bug atau memiliki saran perbaikan.

## Lisensi

Website Sekolahku adalah perangkat lunak open-source yang dilisensikan di bawah [MIT license](https://opensource.org/licenses/MIT).
