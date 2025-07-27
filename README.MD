E-Learning (CodeIgniter 4)

<p align="center">
<img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/codeigniter/codeigniter-plain.svg" alt="Logo CodeIgniter" width="100"/>
</p>
<p align="center">Aplikasi web untuk mendukung Kegiatan Belajar Mengajar (KBM), dibangun dengan framework CodeIgniter 4.</p>
<p align="center">
<img src="https://img.shields.io/badge/PHP-%3E%3D%207.4-8892BF.svg?style=for-the-badge&logo=php" alt="Versi PHP">
<img src="https://img.shields.io/badge/CodeIgniter-4.x-DD4814.svg?style=for-the-badge&logo=codeigniter" alt="Versi CodeIgniter">
<img src="https://img.shields.io/badge/Lisensi-MIT-green.svg?style=for-the-badge" alt="Lisensi">
</p>

---

## 📝 Deskripsi

Proyek ini bertujuan untuk menciptakan sebuah platform digital yang memfasilitasi proses belajar mengajar. Guru dapat dengan mudah mengelola materi pelajaran dan membuat kuis penilaian, sementara siswa dapat mengakses materi dan mengerjakan tugas secara online dari mana saja.

### Template

- [Admin By: Iqonic](https://templates.iqonic.design/product/lite/streamit/html/dashboard/index.html)
- [User By: templatemo](https://templatemo.com/live/templatemo_592_glossy_touch)

## ✨ Fitur Utama

### 👨‍🏫 Untuk Guru:

- Manajemen Materi (CRUD)
- Manajemen Kuis (Pilihan Ganda & Esai)
- Pengaturan Batas Waktu Kuis
- Penilaian Jawaban Esai secara Manual
- Melihat Rekap Nilai Siswa

### 👨‍🎓 Untuk Siswa:

- Akses Materi Pembelajaran
- Mengerjakan Kuis secara Online
- Melihat Riwayat Nilai dan Hasil Kuis
- Dasbor personal untuk melihat tugas yang akan datang

## 🛠️ Teknologi yang Digunakan

- Framework: CodeIgniter 4
- Bahasa: PHP 7.4+
- Database: MySQL / MariaDB
- Frontend: HTML, CSS, JavaScript (Bootstrap 5)
- Manajemen Dependensi: Composer

## 🚀 Persyaratan Server

### Pastikan server atau lingkungan lokal Anda memenuhi persyaratan berikut:

- PHP versi 7.4 atau lebih baru.
- Ekstensi PHP: intl, mbstring, json, mysqlnd, xml, curl.
- Composer terinstal secara global.
- Database server seperti MySQL atau MariaDB.

### ⚙️ Cara Instalasi

### Ikuti langkah-langkah berikut untuk menjalankan proyek ini di lingkungan lokal Anda.

- Clone Repository
  `git clone https://github.com/izzi-digital/elearning.git`

- Instal Dependensi PHP
  `composer install`

- Konfigurasi Lingkungan (.env)
  `cp env .env`

- Atur Lingkungan
  `CI_ENVIRONMENT = development`

- Atur Base URL (sesuaikan dengan URL di server lokal Anda)
  `app.baseURL = 'http://localhost/elearning/public/'`

- Konfigurasi Koneksi Database
  `database.default.hostname = localhost`
  `database.default.database = elearning`
  `database.default.username = root`
  `database.default.password =`
  `database.default.DBDriver = MySQLi`

## Penting:

- Pastikan Anda sudah membuat database kosong dengan nama yang sesuai (contoh: elearning).
- Jalankan Migrasi Database
  php spark migrate

- Jalankan Development Server (CodeIgniter 4 memiliki server development bawaan).
  php spark serve

- Aplikasi Anda sekarang sudah berjalan dan dapat diakses melalui http://localhost:8080.

## 🤝 Kontribusi

### Kontribusi dari Anda sangat kami harapkan! Jika Anda ingin berkontribusi, silakan lakukan fork pada repository ini, buat branch baru untuk fitur atau perbaikan Anda, dan kirimkan Pull Request.

- Fork repository ini.
- Buat branch fitur baru (git checkout -b fitur/fitur-keren).
- Commit perubahan Anda (git commit -m 'Menambahkan fitur keren').
- Push ke branch (git push origin fitur/fitur-keren).
- Buka sebuah Pull Request.

## 📄 Lisensi

### Proyek ini dilisensikan di bawah Lisensi MIT.

- Lihat file LICENSE untuk detail lebih lanjut.

# Dibuat dengan semangat untuk memajukan pendidikan digital di Indonesia.
