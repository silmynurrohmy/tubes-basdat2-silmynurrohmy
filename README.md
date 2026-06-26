Sistem Informasi Akademik (SIAKAD)

Deskripsi

Sistem Informasi Akademik (SIAKAD) merupakan aplikasi berbasis web yang dikembangkan menggunakan framework CodeIgniter 3 dan database MySQL. Aplikasi ini bertujuan untuk memudahkan pengelolaan data akademik seperti data mahasiswa, dosen, mata kuliah, kelas, dan nilai secara terintegrasi.

Project ini dibuat sebagai tugas besar mata kuliah Basis Data.


## Fitur
Sistem menyediakan beberapa fitur utama, antara lain:

- Login dan Logout
- Dashboard
- Manajemen Data Mahasiswa (Create, Read, Update, Delete)
- Manajemen Data Dosen (Create, Read, Update, Delete)
- Manajemen Data Mata Kuliah (Create, Read, Update, Delete)
- Manajemen Data Kelas (Create, Read, Update, Delete)
- Manajemen Data Nilai (Create, Read, Update, Delete)
- Halaman Detail Data
- Validasi Autentikasi Pengguna


## Teknologi yang Digunakan

- PHP
- CodeIgniter 3
- MySQL
- HTML
- CSS
- Bootstrap
- JavaScript


## Struktur Project

TUBES_BASDAT3_SILMY
│
├── application
│   ├── controllers
│   ├── models
│   ├── views
│   └── config
│
├── docs
│   ├── api.md
│   └── changelog.md
│
├── assets
├── asset
├── system
├── index.php
└── README.md



Cara Menjalankan Project

1. Simpan project pada folder htdocs (XAMPP).
2. Jalankan Apache dan MySQL melalui XAMPP.
3. Import database ke MySQL menggunakan phpMyAdmin.
4. Atur konfigurasi database pada: application/config/database.php
5. Jalankan aplikasi melalui browser.

http://localhost/TUBES_BASDAT3_SILMY/


## Dokumentasi

Dokumentasi tambahan tersedia pada folder:

- docs/api.md
- docs/changelog.md


## Pengembang

Project ini dikembangkan sebagai tugas besar mata kuliah Basis Data menggunakan framework CodeIgniter 3 dengan menerapkan konsep Model-View-Controller (MVC).