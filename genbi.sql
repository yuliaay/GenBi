-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 12, 2019 at 02:41 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

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
-- Table structure for table `absensis`
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
-- Dumping data for table `absensis`
--

INSERT INTO `absensis` (`id`, `id_pertemuan`, `id_user`, `konfirmasi`, `created_at`, `updated_at`) VALUES
(1, 8, 1, 0, '2018-12-30 08:39:14', '2018-12-30 08:39:14'),
(2, 9, 1, 0, '2018-12-30 08:53:09', '2018-12-30 08:53:09'),
(3, 10, 1, 0, '2018-12-30 14:16:35', '2018-12-30 14:16:35'),
(4, 1, 1, 0, '2018-12-31 01:28:16', '2018-12-31 01:28:16'),
(5, 2, 1, 0, '2018-12-31 01:30:06', '2018-12-31 01:30:06'),
(6, 3, 1, 0, '2018-12-31 01:30:09', '2018-12-31 01:30:09'),
(7, 4, 1, 0, '2018-12-31 01:30:13', '2018-12-31 01:30:13'),
(8, 5, 1, 0, '2018-12-31 01:30:15', '2018-12-31 01:30:15'),
(9, 6, 1, 0, '2018-12-31 01:30:18', '2018-12-31 01:30:18'),
(10, 11, 1, 0, '2018-12-31 01:36:00', '2018-12-31 01:36:00'),
(11, 3, 5, 0, '2018-12-31 02:09:57', '2018-12-31 02:09:57'),
(12, 4, 5, 0, '2018-12-31 02:10:07', '2018-12-31 02:10:07');

-- --------------------------------------------------------

--
-- Table structure for table `activities`
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

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
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
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `judul`, `kategori`, `konten`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Hatsune Miku is the best', 'Universitas', 'some text', 'Screen Shot 2018-12-30 at 1.01.53 PM_1547298662.png', '2019-01-12 10:40:50', '2019-01-12 13:11:02'),
(3, 'Text here', 'Internasional', 'I have no idea what to put here', 'Screen Shot 2018-12-30 at 11.27.07 PM_1547298651.png', '2019-01-12 11:00:48', '2019-01-12 13:38:32'),
(7, 'Unsubscribe to T-series', 'Nasional', 'Unsubscribe to T-series', 'Screen Shot 2018-12-30 at 11.28.13 PM_1547298458.png', '2019-01-12 12:55:51', '2019-01-12 13:37:39'),
(9, 'Subscribe to PewDiePie', 'Internasional', 'Subscribe to PewDiePie', 'Screen Shot 2018-12-30 at 12.58.47 PM_1547300243.png', '2019-01-12 13:37:23', '2019-01-12 13:37:23'),
(10, 'Hai Yulia :)', 'Nasional', 'owowowowowowow', 'Screen Shot 2018-12-30 at 12.59.19 PM_1547300367.png', '2019-01-12 13:39:27', '2019-01-12 13:39:27');

-- --------------------------------------------------------

--
-- Table structure for table `data`
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
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `user_id`, `nama`, `nim`, `jenis_kelamin`, `universitas`, `fakultas`, `ipk`, `tempat_lahir`, `tanggal_lahir`, `agama`, `golongan_darah`, `suku_bangsa`, `alamat`, `no_hp`, `facebook`, `instagram`, `nama_ibu`, `nama_ayah`, `minat_bakat`, `keterampilan`, `potensi`, `aktivitas_sosial`, `bersedia_aktif`, `saran`, `created_at`, `updated_at`) VALUES
(1, 1, 'tayo', '11', 'p', 'hsh', 'hshdv', 2.90, 'SHSJH', '2019-10-09', 'bhjh', 'jjhh', 'hhjh', 'hhhj', 'hhhj', 'hhjjh', 'hhjhj', 'hhhjjh', 'hjjhhj', 'hhjh', 'hjhj', 'hjhj', 'hhj', 'hj', 'hjhj', '2018-12-30 13:23:48', '2018-12-30 13:23:48'),
(3, 7, 'sf', 'sdf', 'sdf', 'sdf', 'sdf', 3.40, 'fsdfs', '2019-01-05', 'sfdsdf', 'sdfsdf', 'fsdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', '2019-01-05 14:19:35', '2019-01-05 14:19:35'),
(4, 8, 'punya rin', '3333', 'apache', 'dsfsdf', 'sdf', 3.00, 'sdfds', '2019-01-24', 'afsd', 'sdfsdf', 'dsfddsf', 'sdfddsf', 'sdfsd', 'sdfdsdf', 'sdfd', 'sdfsdf', 'sdfsd', 'sdf', 'sdfsdf', 'sfsdf', 'sdfsdf', 'sdfdsf', 'sdfsdf', '2019-01-05 14:23:09', '2019-01-05 14:23:09');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pertemuans`
--

CREATE TABLE `jenis_pertemuans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_pertemuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_pertemuans`
--

INSERT INTO `jenis_pertemuans` (`id`, `nama_pertemuan`, `created_at`, `updated_at`) VALUES
(1, 'Bercocok Tanam Kebun', NULL, NULL),
(2, 'Nongkrong Aja\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
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
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pertemuans`
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
-- Dumping data for table `pertemuans`
--

INSERT INTO `pertemuans` (`id`, `id_jenis_pertemuan`, `pertemuan`, `tanggal_pertemuan`, `tempat`, `created_at`, `updated_at`) VALUES
(1, 1, 'nn', '2009-06-06', 'hhh', '2018-12-29 23:57:57', '2018-12-29 23:57:57'),
(2, 1, 'nn', '2009-06-06', 'hhh', '2018-12-30 00:00:21', '2018-12-30 00:00:21'),
(3, 1, 'kedua', '2018-12-30', 'bb', '2018-12-30 00:33:08', '2018-12-30 00:33:08'),
(4, 1, 'hh', '2018-12-30', 'hh', '2018-12-30 00:35:21', '2018-12-30 00:35:21'),
(5, 2, 'Perdana Kuy', '2018-12-06', 'Asia Pasifik', '2018-12-30 00:37:30', '2018-12-30 00:37:30'),
(6, 1, 'hei', '2018-12-05', 'tayo', '2018-12-30 00:38:42', '2018-12-30 00:38:42'),
(7, 1, 'sada', '2010-12-31', 'sa', '2018-12-30 09:40:07', '2018-12-30 00:40:07'),
(8, 1, 'ini baru tadi', '2018-12-21', 'l', '2018-12-30 07:41:03', '2018-12-30 07:41:03'),
(9, 2, 'wah keren', '2018-12-14', 'Yu', '2018-12-30 08:52:57', '2018-12-30 08:52:57'),
(10, 2, 'Ketiga', '2018-10-09', 'taman', '2018-12-30 14:16:13', '2018-12-30 14:16:13'),
(11, 2, 'Pertemuan 14', '2018-12-31', 'Perpustakaan Kota', '2018-12-31 01:34:17', '2018-12-31 01:34:17');

-- --------------------------------------------------------

--
-- Table structure for table `prestasis`
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
-- Dumping data for table `prestasis`
--

INSERT INTO `prestasis` (`id`, `user_id`, `nama_prestasi`, `tahun`, `tingkat`, `created_at`, `updated_at`) VALUES
(1, 7, 'prestasi miku', '2039', 'Universitas', '2019-01-05 14:20:06', '2019-01-05 14:20:06'),
(2, 7, 'another miku prestasi', '2020', 'Nasional', '2019-01-05 14:20:22', '2019-01-05 14:20:22'),
(3, 8, 'prestasi rin', '2030', 'Universitas', '2019-01-05 14:21:56', '2019-01-05 14:22:28'),
(4, 8, 'another rin prestasi', '3000', 'Universitas', '2019-01-05 14:22:18', '2019-01-05 14:22:18'),
(5, 7, 'prestatsi miku yg kesekian kalinya', '3030', 'Universitas', '2019-01-05 14:37:46', '2019-01-05 14:39:11'),
(6, 8, 'yay rin', '3434', 'Universitas', '2019-01-05 14:42:03', '2019-01-05 14:42:03'),
(7, 7, 'yay miku', '3939', 'Universitas', '2019-01-05 14:42:24', '2019-01-05 14:42:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `hak_akses`, `data_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'tayo', 'tayo@gmail.com', NULL, '$2y$10$V2VgMLdbTdvHLVdJ1fLso.wl7nfwKg1c0iIU8KiyWMmiprBHoj9eC', 2, NULL, 'Ja3yXjk3slgbjKzzHxdyC6aBVy5n5xCBUDq8Ri1XN193nu3Pr0y7IPFh9Hdi', '2018-12-30 08:38:41', '2018-12-30 08:38:41'),
(2, 'Norman Halilintar', 'noha@gmail.com', NULL, '$2y$10$FKamy70Gy6kj93AGY.EdQujQm33sIGnTD2fqqQsy7VBL9pv1oWKqu', 1, NULL, '9DeBG5CGabuX6F8QAGW9v2SDQWJt90tPiAzRZiFXV1FMPkPrgTeLKJa1JDgD', '2018-12-30 09:15:11', '2018-12-30 09:15:11'),
(3, 'Khatami Hoax', 'khatami@hoax.com', NULL, '$2y$10$E3xcMz9PdWDgZPOhwKAh2Of8CsJ0Hlb0ExIilBUILBQtaU6gUMlRe', 0, NULL, 'FfAy56BhyVtHrcMaXNDOxrnYVfRAj6zuHDlmGzCWQPUqzGly40bbrHXyaest', '2018-12-30 09:23:12', '2018-12-30 09:23:12'),
(4, 'Mauladi', 'mauladi@gmail.com', NULL, '$2y$10$0eCF8JJc5kBDib3fsGlhOO7w4PiffLh7yju8fMDnJcoH.W/UffkSq', 2, NULL, 'mlal7RfTcEdMy4IxMEqreYDtW1SNfvXrwbgzzPOwmILJxDu4oebL8jtlLMYq', '2018-12-30 09:32:47', '2018-12-30 09:32:47'),
(5, 'Yulia Oktaviani', 'yulia@gmail.com', NULL, '$2y$10$.snBNU/d5ix9psNoCqb9Oetfewtsj3i6dtY6K7BaGUNYqG6bSDS9W', 2, NULL, NULL, '2018-12-30 09:42:27', '2018-12-30 09:42:27'),
(6, 'hey', 'hey@gmail.com', NULL, '$2y$10$3FjoomAAQ8yq.dH4aqILG.VrmOqMnj8dwh6lc4850CQcX7XfEFrS.', 0, NULL, NULL, '2018-12-30 14:37:11', '2018-12-30 14:37:11'),
(7, 'Hatsune Miku', 'miku@hatsune.com', NULL, '$2y$10$V2VgMLdbTdvHLVdJ1fLso.wl7nfwKg1c0iIU8KiyWMmiprBHoj9eC', 0, NULL, 'OWyUP4zsxhFf2fiDdulGA22Zd0AjKa4ABXkjgz69TgHmB7aHGdID4zHPeMGX', '2019-01-05 13:51:40', '2019-01-05 13:51:40'),
(8, 'Kagamine Rin', 'rin@kagamine.com', NULL, '$2y$10$zn3n98TBbO38dbOi0q5Dq.mIPJj.2mKhYLVnYy6SJCjxXaF0Q3Awi', 0, NULL, '0CXk2AvNFhYFyTrXw7aj7VI9987IxUHCOTDGPFpCjvxUBwQtlcUC9dL3wAva', '2019-01-05 14:21:12', '2019-01-05 14:21:12');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jenis_pertemuans`
--
ALTER TABLE `jenis_pertemuans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `pertemuans`
--
ALTER TABLE `pertemuans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `prestasis`
--
ALTER TABLE `prestasis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensis`
--
ALTER TABLE `absensis`
  ADD CONSTRAINT `absensis_id_pertemuan_foreign` FOREIGN KEY (`id_pertemuan`) REFERENCES `pertemuans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `absensis_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `data_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pertemuans`
--
ALTER TABLE `pertemuans`
  ADD CONSTRAINT `pertemuans_id_jenis_pertemuan_foreign` FOREIGN KEY (`id_jenis_pertemuan`) REFERENCES `jenis_pertemuans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `prestasis`
--
ALTER TABLE `prestasis`
  ADD CONSTRAINT `prestasis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
