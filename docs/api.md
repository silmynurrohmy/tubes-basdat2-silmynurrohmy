API Documentation

Autentikasi

## Login

- URL : "/auth/login"
- Method : POST
- Deskripsi : Memvalidasi username dan password pengguna sebelum masuk ke sistem.

## Logout

- URL : "/auth/logout"
- Method : GET
- Deskripsi : Mengakhiri sesi login pengguna.



## Dashboard

- URL : "/dashboard"
- Method : GET
- Deskripsi : Menampilkan ringkasan data Sistem Informasi Akademik.


## Mahasiswa

Menampilkan Data Mahasiswa

- URL : "/mahasiswa"
- Method : GET

Menambah Mahasiswa

- URL : "/mahasiswa/tambah"
- Method : POST

Mengubah Mahasiswa

- URL : "/mahasiswa/edit/{nim}"
- Method : POST

Menghapus Mahasiswa

- URL : "/mahasiswa/hapus/{nim}"
- Method : GET



## Dosen

Menampilkan Data Dosen

- URL : "/dosen"
- Method : GET

Menambah Dosen

- URL : "/dosen/tambah"
- Method : POST

Mengubah Dosen

- URL : "/dosen/edit/{nidn}"
- Method : POST

Menghapus Dosen

- URL : "/dosen/hapus/{nidn}"
- Method : GET


## Mata Kuliah

Menampilkan Data Mata Kuliah

- URL : "/mata_kuliah"
- Method : GET

Menambah Mata Kuliah

- URL : "/mata_kuliah/tambah"
- Method : POST

Mengubah Mata Kuliah

- URL : "/mata_kuliah/edit/{kode_mk}"
- Method : POST

Menghapus Mata Kuliah

- URL : "/mata_kuliah/hapus/{kode_mk}"
- Method : GET



## Kelas

Menampilkan Data Kelas

- URL : "/kelas"
- Method : GET

Menambah Kelas

- URL : "/kelas/tambah"
- Method : POST

Mengubah Kelas

- URL : "/kelas/edit/{id}"
- Method : POST

Menghapus Kelas

- URL : "/kelas/hapus/{id}"
- Method : GET



## Nilai

Menampilkan Data Nilai

- URL : "/nilai"
- Method : GET

Menambah Nilai

- URL : "/nilai/tambah"
- Method : POST

Mengubah Nilai

- URL : "/nilai/edit/{id_nilai}"
- Method : POST

Menghapus Nilai

- URL : "/nilai/hapus/{id_nilai}"
- Method : GET



Teknologi

- Framework : CodeIgniter 3
- Bahasa Pemrograman : PHP
- Database : MySQL
- Arsitektur : MVC (Model-View-Controller)