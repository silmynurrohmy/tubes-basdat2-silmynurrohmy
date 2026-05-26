-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2021 pada 06.28
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `upload` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'draft',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `kelas` varchar(255) NOT NULL DEFAULT 'umum'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `jabatan`, `role_id`, `status`, `created_at`, `image`) VALUES
(1, '19950520', '$2y$10$maPZxoaIMGSXbFhQ9eHpE.vdLaSXVT7W2JgvP/rhTfibE3LjWidtG', 'Admin', 'Admin', 1, 1, 1624938599, 'logo_jabar1.png'),
(2, '123456789', '$2y$10$EXTvxFw9GlupkyD.nSiLoetrXKEe4U/C7.VAvKC.4iK.krjZmAjiy', 'Admin - Sekolah', 'Guru', 2, 1, 1624938990, 'default.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 0, 0),
(5, 1, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Wakasek'),
(3, 'Guru'),
(4, 'Menu'),
(5, 'Test');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Wakasek'),
(3, 'Guru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 1, 'File Sekolah', 'file', 'fab fa-fw fa-wpforms', 1),
(3, 1, 'File Guru', 'file/guru', 'fab fa-fw fa-wpforms', 1),
(4, 1, 'File Pribadi', 'pribadi', 'fab fa-fw fa-wpforms', 1),
(5, 2, 'Dashboard', 'wakasek', 'fas fa-fw fa-tachometer-alt', 1),
(6, 2, 'File Sekolah', 'file', 'fab fa-fw fa-wpforms', 1),
(7, 2, 'File Guru', 'file/guru', 'fab fa-fw fa-wpforms', 1),
(8, 2, 'File Pribadi', 'pribadi', 'fab fa-fw fa-wpforms', 1),
(9, 3, 'Dashboard', 'guru', 'fas fa-fw fa-tachometer-alt', 1),
(10, 3, 'File Sekolah', 'file', 'fab fa-fw fa-wpforms', 1),
(11, 3, 'File Guru', 'file/guru', 'fab fa-fw fa-wpforms', 1),
(12, 3, 'File Pribadi', 'pribadi', 'fab fa-fw fa-wpforms', 1),
(13, 1, 'Profil', 'user/edit', 'fas fa-cogs fa-sm fa-fw', 1),
(14, 2, 'Profil', 'user/edit', 'fas fa-cogs fa-sm fa-fw', 1),
(15, 3, 'Profil', 'user/edit', 'fas fa-cogs fa-sm fa-fw', 1),
(16, 1, 'User', 'user', 'fas fa-user fa-sm fa-fw', 1),
(17, 1, 'Registrasi', 'login/registrasi', 'fas fa-list fa-sm fa-fw', 1),
(18, 4, 'Menu Manajemen', 'menu', 'fas fa-cogs fa-sm fa-fw', 1),
(20, 4, 'SubMenu Manajemen', 'menu/submenu', 'fas fa-cogs fa-sm fa-fw', 1),
(21, 1, 'Change Password', 'user/changepassword', 'fas fa-cogs fa-sm fa-fw', 1),
(22, 2, 'Change Password', 'user/changepassword', 'fas fa-cogs fa-sm fa-fw', 1),
(23, 3, 'Change Password', 'user/changepassword', 'fas fa-cogs fa-sm fa-fw', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
