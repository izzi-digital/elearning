ELearning - CodeIgniter 4
Ini adalah aplikasi web untuk mendukung Kegiatan Belajar Mengajar (KBM). Dibangun menggunakan PHP dengan framework CodeIgniter 4.

Aplikasi ini bertujuan untuk mempermudah guru dalam mengelola materi pelajaran dan memberikan penilaian, serta memudahkan siswa untuk mengakses materi dan mengerjakan tugas atau kuis secara online.

Fitur Utama 📋
Manajemen Materi: Guru dapat menambah, mengubah, dan menghapus materi pelajaran.

Manajemen Kuis: Guru dapat membuat kuis dengan soal pilihan ganda atau esai, lengkap dengan batas waktu pengerjaan.

Sistem Penilaian: Jawaban pilihan ganda dinilai otomatis, sedangkan esai dapat dinilai manual oleh guru.

Akses Siswa: Siswa dapat login untuk melihat materi dan mengerjakan kuis yang tersedia.

Dasbor Pengguna: Halaman ringkasan untuk guru dan siswa.

Laporan Nilai: Rekapitulasi nilai untuk setiap siswa dan kuis.

Persyaratan Server 🚀
Pastikan server atau lingkungan lokal Anda memenuhi persyaratan berikut, sesuai dengan standar CodeIgniter 4:

PHP versi 7.4 atau lebih baru.

Ekstensi PHP berikut harus aktif: intl, mbstring, json, mysqlnd, xml, curl. (Biasanya sudah aktif pada instalasi PHP modern seperti XAMPP).

Composer terinstal secara global.

Database server seperti MySQL atau MariaDB.

Cara Instalasi 💻
Ikuti langkah-langkah berikut untuk menjalankan proyek ini di lingkungan lokal Anda.

1. Clone Repository
   Buka terminal atau Git Bash, lalu clone repository ini ke komputer Anda.

git clone https://github.com/izzi-digital/elearning.git

2. Instal Dependensi PHP
   Gunakan Composer untuk menginstal semua pustaka (library) PHP yang dibutuhkan.

composer install

3. Konfigurasi Lingkungan (.env)
   Salin file env menjadi .env. File ini akan digunakan untuk menyimpan konfigurasi spesifik untuk lingkungan Anda.

cp env .env

Selanjutnya, buka file .env menggunakan teks editor dan sesuaikan baris-baris berikut:

Atur Lingkungan ke Development

CI_ENVIRONMENT = development

Atur Base URL (sesuaikan dengan URL di server lokal Anda)

app.baseURL = 'http://localhost/elearning/public/'

Konfigurasi Koneksi Database (sesuaikan dengan pengaturan database Anda)

database.default.hostname = localhost
database.default.database = elearning
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi

Penting: Pastikan Anda sudah membuat database kosong dengan nama yang sesuai (contoh: elearning).

4. Jalankan Migrasi Database
   Migrasi akan secara otomatis membuat semua tabel yang dibutuhkan oleh aplikasi di dalam database Anda.

php spark migrate
php spark db:seed DBSeeder

5. Jalankan Development Server
   CodeIgniter 4 memiliki server development bawaan. Jalankan dengan perintah berikut dari terminal:

php spark serve

Aplikasi Anda sekarang sudah berjalan dan dapat diakses melalui http://localhost:8080.

Selamat mencoba! Jika menemukan masalah, silakan buat issue baru di repository ini.
