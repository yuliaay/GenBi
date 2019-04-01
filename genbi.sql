-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01 Apr 2019 pada 17.06
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `genbi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensis`
--

CREATE TABLE `absensis` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_pertemuan` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `konfirmasi` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `absensis`
--

INSERT INTO `absensis` (`id`, `id_pertemuan`, `id_user`, `konfirmasi`, `created_at`, `updated_at`) VALUES
(17, 15, 8, 0, '2019-02-27 15:27:28', '2019-02-27 15:27:28'),
(18, 17, 8, 0, '2019-02-27 15:27:32', '2019-02-27 15:27:32'),
(19, 18, 8, 0, '2019-02-28 12:23:52', '2019-02-28 12:23:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `activities`
--

CREATE TABLE `activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `peserta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bentuk_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `activities`
--

INSERT INTO `activities` (`id`, `tanggal`, `peserta`, `tempat`, `nama_kegiatan`, `bentuk_kegiatan`, `jenis_kegiatan`, `created_at`, `updated_at`) VALUES
(1, '0006-06-06', 'hhh', 'ddd', 'dsss', 'sds', 'RUTIN/TERLAKSANA/INISIATIF', '2019-01-13 03:34:45', '2019-01-13 03:34:45'),
(2, '0006-06-06', 'hhh', 'ddd', 'dsss', 'sds', 'RUTIN/TERLAKSANA/INISIATIF', '2019-01-13 03:34:46', '2019-01-13 03:34:46'),
(3, '2018-06-10', 'Hey Tayo', 'Tayo Tayo', 'Hello', 'Smile', 'RUTIN/TERLAKSANA/INISIATIF', '2019-01-14 13:38:26', '2019-01-14 13:38:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikels`
--

CREATE TABLE `artikels` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `artikels`
--

INSERT INTO `artikels` (`id`, `judul`, `kategori`, `konten`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'The Government’s further commitment and seriousness in implementing e-Government', 'Nasional', 'The Government’s further commitment and seriousness in implementing e-Government The Government’s further commitment and seriousness in implementing e-Government The Government’s further commitment and seriousness in implementing e-Government The Government’s further commitment and seriousness in implementing e-Government The Government’s further commitment and seriousness in implementing e-Government The Government’s further commitment and seriousness in implementing e-Government The Government’s further commitment and seriousness in implementing e-Government The Government’s further commitment and seriousness in implementing e-Government The Government’s further commitment and seriousness in implementing e-Government The Government’s further commitment and seriousness in implementing e-Government The Government’s further commitment and seriousness in implementing e-Government The Government’s further commitment and seriousness in implementing e-Government The Government’s further commitment and seriousness in implementing e-Government The Government’s further commitment and seriousness in implementing e-Government The Government’s further commitment and seriousness in implementing e-Government The Government’s further commitment and seriousness in implementing e-Government The Government’s further commitment and seriousness in implementing e-Government The Government’s further commitment and seriousness in implementing e-Government The Government’s further commitment and seriousness in implementing e-Government The Government’s further commitment and seriousness in implementing e-Government The Government’s further commitment and seriousness in implementing e-Government The Government’s further commitment and seriousness in implementing e-Government The Government’s further commitment and seriousness in implementing e-Government The Government’s further commitment and seriousness in implementing e-Government The Government’s further commitment and seriousness in implementing e-Government The Government’s further commitment and seriousness in implementing e-Government The Government’s further commitment and seriousness in implementing e-Government The Government’s further commitment and seriousness in implementing e-Government', 'IMG_20190125_093024_1551581242.jpg', '2019-03-03 02:46:04', '2019-03-03 02:47:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `universitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ipk` double(8,2) NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `golongan_darah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suku_bangsa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minat_bakat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterampilan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `potensi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aktivitas_sosial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bersedia_aktif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id`, `user_id`, `nama`, `nim`, `jenis_kelamin`, `universitas`, `fakultas`, `ipk`, `tempat_lahir`, `tanggal_lahir`, `agama`, `golongan_darah`, `suku_bangsa`, `alamat`, `no_hp`, `facebook`, `instagram`, `nama_ibu`, `nama_ayah`, `minat_bakat`, `keterampilan`, `potensi`, `aktivitas_sosial`, `bersedia_aktif`, `saran`, `created_at`, `updated_at`) VALUES
(3, 7, 'sf', 'sdf', 'sdf', 'sdf', 'sdf', 3.40, 'fsdfs', '2019-01-05', 'sfdsdf', 'sdfsdf', 'fsdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', '2019-01-05 14:19:35', '2019-01-05 14:19:35'),
(4, 8, 'Yulia Oktaviani', 'F1E115015', 'Perempuan', 'Universitas Jambi', 'Sains dan Teknologi', 3.65, 'Jambi', '1997-10-05', 'Islam', 'A', 'Minang', 'Perm. Villa Sentosa Indah', '082289680251', 'Yulia Oktaviani', 'yuliaoktviani', 'Rosmani', 'Indra', 'Desain Grafis, Programming', 'Desain Grafis', 'Kreatif, Jujur', 'Relawan Lembaga Sosial', 'Ya', 'Mengembangan Website untuk GenBI', '2019-02-28 10:58:57', '2019-02-28 10:58:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_pertemuans`
--

CREATE TABLE `jenis_pertemuans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_pertemuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_pertemuan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenis_pertemuans`
--

INSERT INTO `jenis_pertemuans` (`id`, `nama_pertemuan`, `deskripsi_pertemuan`, `created_at`, `updated_at`) VALUES
(6, 'GenPul', 'Kegiatan Generasi Bank Indonesia Peduli Uang Lusuh yang rutin dilakukan setiap minggu', '2019-02-11 14:45:23', '2019-02-11 14:45:23'),
(7, 'GenBi Memasak', 'Kegiatan GenBi memasak', '2019-02-24 04:40:49', '2019-02-24 04:40:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(86, '2014_10_12_000000_create_users_table', 1),
(87, '2014_10_12_100000_create_password_resets_table', 1),
(88, '2018_12_23_100512_create_data_table', 1),
(89, '2018_12_24_014751_create_activities_table', 1),
(90, '2018_12_25_025009_create_prestasis_table', 1),
(91, '2018_12_25_054943_create_jenis_pertemuans_table', 1),
(92, '2018_12_25_055316_create_pertemuans_table', 1),
(93, '2018_12_30_054030_create_artikels_table', 1),
(94, '2018_12_30_055659_create_absensis_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertemuans`
--

CREATE TABLE `pertemuans` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_jenis_pertemuan` int(10) UNSIGNED NOT NULL,
  `pertemuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pertemuan` date NOT NULL,
  `tempat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pertemuans`
--

INSERT INTO `pertemuans` (`id`, `id_jenis_pertemuan`, `pertemuan`, `tanggal_pertemuan`, `tempat`, `created_at`, `updated_at`) VALUES
(15, 6, 'Pertemuan 1', '2019-02-11', 'Pasar Simpang Pule', '2019-02-11 14:46:12', '2019-02-11 14:46:12'),
(16, 7, 'Pertemuan 1', '2019-02-28', 'Jambi', '2019-02-24 04:42:31', '2019-02-24 04:42:31'),
(17, 6, 'Pertemuan 2', '2019-02-27', 'BI', '2019-02-27 15:26:45', '2019-02-27 15:26:45'),
(18, 6, 'Pertemuan 3', '2019-02-26', 'BI', '2019-02-28 12:23:15', '2019-02-28 12:23:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasis`
--

CREATE TABLE `prestasis` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `nama_prestasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tingkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `prestasis`
--

INSERT INTO `prestasis` (`id`, `user_id`, `nama_prestasi`, `tahun`, `tingkat`, `created_at`, `updated_at`) VALUES
(2, 7, 'another miku prestasi', '2020', 'Nasional', '2019-01-05 14:20:22', '2019-01-05 14:20:22'),
(5, 7, 'prestatsi miku yg kesekian kalinya', '3030', 'Universitas', '2019-01-05 14:37:46', '2019-01-05 14:39:11'),
(7, 7, 'yay miku', '3939', 'Universitas', '2019-01-05 14:42:24', '2019-01-05 14:42:24'),
(8, 1, 'hey tayo', '2019', 'Universitas', '2019-01-14 14:17:18', '2019-01-14 14:17:18'),
(9, 1, 'hallo', '20019', 'Universitas', '2019-01-14 14:22:10', '2019-01-14 14:22:10'),
(10, 1, 'heh', '2609', 'Universitas', '2019-02-10 10:35:39', '2019-02-10 10:35:39'),
(11, 1, 'ddd', '222', 'Universitas', '2019-02-10 10:35:55', '2019-02-10 10:35:55'),
(12, 8, 'Juara Lomba Mewarnai', '2019', 'Universitas', '2019-02-28 12:07:05', '2019-02-28 12:07:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hak_akses` int(11) NOT NULL DEFAULT '0',
  `data_id` int(10) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `hak_akses`, `data_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'tayotayo', 'tayo@gmail.com', NULL, '$2y$10$V2VgMLdbTdvHLVdJ1fLso.wl7nfwKg1c0iIU8KiyWMmiprBHoj9eC', 2, NULL, 's4PAciGtZZS0MA2G8RtAStlpVzrky97nNTkC0XmHbtchrJb4EIlurUVWYHc5', '2018-12-30 08:38:41', '2019-03-02 15:24:10'),
(5, 'Yulia Oktaviani', 'yulia@gmail.com', NULL, '$2y$10$.snBNU/d5ix9psNoCqb9Oetfewtsj3i6dtY6K7BaGUNYqG6bSDS9W', 2, NULL, NULL, '2018-12-30 09:42:27', '2018-12-30 09:42:27'),
(6, 'hey', 'hey@gmail.com', NULL, '$2y$10$3FjoomAAQ8yq.dH4aqILG.VrmOqMnj8dwh6lc4850CQcX7XfEFrS.', 0, NULL, NULL, '2018-12-30 14:37:11', '2018-12-30 14:37:11'),
(7, 'Hatsune Miku', 'miku@hatsune.com', NULL, '$2y$10$V2VgMLdbTdvHLVdJ1fLso.wl7nfwKg1c0iIU8KiyWMmiprBHoj9eC', 0, NULL, 'OWyUP4zsxhFf2fiDdulGA22Zd0AjKa4ABXkjgz69TgHmB7aHGdID4zHPeMGX', '2019-01-05 13:51:40', '2019-01-05 13:51:40'),
(8, 'yulia', 'yulia1@gmail.com', NULL, '$2y$10$zmHURJEICqagKuMd8ZFRZehguj7VK3VM7y5wQqy45/mOZOhHJefwy', 0, NULL, 'H8iMMDP9IqLPuk4tARNB70HkHB1GkZcJJP67WTBHNHBVI59t7HXeVvNBfCQO', '2019-02-24 04:34:24', '2019-02-24 04:34:24'),
(9, 'yulita', 'yulita@gmail.com', NULL, '$2y$10$khWchJ/Pv1t45UfwNAvK/Ol4HRnz6mNIqwrnwzdSnTxjOB9Sf8Edm', 1, NULL, '0PVTh0aGXeRPT7xM9LIGXRCFgaDpCRcYqTJqyNEpLGGsOejQYWhbkgW9raPO', '2019-02-24 04:35:46', '2019-02-24 04:35:46'),
(12, 'hey', 'heyo@gmail.com', NULL, '$2y$10$j/OC80G7uX.gKPz8EoDudu7PcSKwKWzBgqhzkjz96dzCJtXnq36nO', 0, NULL, NULL, '2019-02-28 13:19:22', '2019-02-28 13:19:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensis`
--
ALTER TABLE `absensis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absensis_id_pertemuan_foreign` (`id_pertemuan`),
  ADD KEY `absensis_id_user_foreign` (`id_user`);

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_user_id_foreign` (`user_id`);

--
-- Indexes for table `jenis_pertemuans`
--
ALTER TABLE `jenis_pertemuans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pertemuans`
--
ALTER TABLE `pertemuans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pertemuans_id_jenis_pertemuan_foreign` (`id_jenis_pertemuan`);

--
-- Indexes for table `prestasis`
--
ALTER TABLE `prestasis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prestasis_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensis`
--
ALTER TABLE `absensis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jenis_pertemuans`
--
ALTER TABLE `jenis_pertemuans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `pertemuans`
--
ALTER TABLE `pertemuans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `prestasis`
--
ALTER TABLE `prestasis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `absensis`
--
ALTER TABLE `absensis`
  ADD CONSTRAINT `absensis_id_pertemuan_foreign` FOREIGN KEY (`id_pertemuan`) REFERENCES `pertemuans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `absensis_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `data_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pertemuans`
--
ALTER TABLE `pertemuans`
  ADD CONSTRAINT `pertemuans_id_jenis_pertemuan_foreign` FOREIGN KEY (`id_jenis_pertemuan`) REFERENCES `jenis_pertemuans` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `prestasis`
--
ALTER TABLE `prestasis`
  ADD CONSTRAINT `prestasis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
