-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2018 at 05:52 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` int(10) UNSIGNED NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul_artikel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_artikel` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `destinasi_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `foto`, `judul_artikel`, `isi_artikel`, `user_id`, `destinasi_id`, `created_at`, `updated_at`) VALUES
(11, '36a488a9f8c318785c3d053316035791.jpg', 'Situ Cisanti', 'boleh', 7, 5, '2018-06-10 20:45:13', '2018-06-22 01:12:35'),
(12, '5fd3119303b93a596e36443e239e6ffa.jpg', 'Pembawa Petaka Di Gunung Guntur', 'Saya Akan Bercerita panjang lebar kepada kalian semua , kasdjhsjhdjhasjhdjshdjsahdjsahdjshdjshjdhasjdhjshdjshdjshdjhsjdhsjdjsdjsghdjhdjhasjhdjhsjhjdhjashdjahdjashjshja\r\nmknskn\r\n,slmkd\r\nsmkm\r\nmlsm\r\n,s;mdls.,', 7, 5, '2018-06-22 08:40:57', '2018-06-22 08:40:57'),
(13, 'beaefff3680e9eac93a13e2ffb76e98a.jpg', 'Batasa', '<p>rafy jajaja</p>\r\n\r\n<p>majajaajjaajaj</p>', 6, 3, '2018-06-22 12:18:53', '2018-06-22 12:18:53'),
(14, 'ee5396915cc9b6b99630a8e1982d3c0f.jpg', 'mjajaja', '<p><strong>jajajajajajajja<em>mksksksksklakslakjdijsjdksj@section(&#39;js&#39;)<br />\r\n&lt;script&gt;<br />\r\n&nbsp; &nbsp; CKEDITOR.replace( &#39;isi_artikel&#39; );<br />\r\n&lt;/script&gt;<br />\r\n@endsection</em></strong><em>skkskskk<strong>skjkajkjiawjihdhuwhuhsjhdjhdasjhdsjhdsjhdjskdjwijidjskjdkwjdjksjdwjh</strong></em></p>', 6, 5, '2018-06-24 01:59:09', '2018-06-24 01:59:09'),
(15, '9bfdf2f1f7f5453a7a399af455ef30a4.jpg', 'kakak', 'kaakakkaakk', 7, 1, '2018-06-24 11:57:45', '2018-06-24 11:57:45'),
(16, 'a68860e592b9bc7a34c65e9566741647.jpg', 'mamaam', 'a,,a,a,a,aa,,', 7, 1, '2018-06-24 11:58:48', '2018-06-24 11:58:48'),
(17, '77f20edefa8ffa8d12d9f66ca6af2399.jpg', 'mamaam', 'a,,a,a,a,aa,,', 7, 1, '2018-06-24 11:59:21', '2018-06-24 11:59:21'),
(18, 'af001f78e75a45c5dc46df78e3e01892.jpg', 'Situ Cisanti', 'nananananana', 7, 1, '2018-06-24 12:09:53', '2018-06-24 12:09:53'),
(19, '909902166291521ca4b8caff0503ed33.jpg', 'rafa', 'ahhahahahah', 7, 1, '2018-06-24 12:21:19', '2018-06-24 12:21:19'),
(20, '81d98557baa2a1e4a0a4167f42943a2b.png', 'frff', 'dgggffgfg', 7, 1, '2018-06-24 12:33:13', '2018-06-24 12:33:13');

-- --------------------------------------------------------

--
-- Table structure for table `destinasis`
--

CREATE TABLE `destinasis` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_destinasi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destinasis`
--

INSERT INTO `destinasis` (`id`, `nama_destinasi`, `created_at`, `updated_at`) VALUES
(1, 'Jawa Barat', '2018-06-08 01:02:28', '2018-06-08 01:02:28'),
(2, 'Jawa Tengah', '2018-06-20 04:43:28', '2018-06-20 04:43:28'),
(3, 'Sumatera Selatan', '2018-06-20 05:17:50', '2018-06-20 05:17:50'),
(4, 'Sumatera Barat', '2018-06-20 05:18:06', '2018-06-20 05:18:06'),
(5, 'Sumatera Utara', '2018-06-20 05:18:37', '2018-06-20 05:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `galeris`
--

CREATE TABLE `galeris` (
  `id` int(10) UNSIGNED NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `artikel_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeris`
--

INSERT INTO `galeris` (`id`, `foto`, `artikel_id`, `created_at`, `updated_at`) VALUES
(1, '9698606c91894a44bc3811769568d2ed.jpg', 14, '2018-06-24 09:26:40', '2018-06-24 09:26:40'),
(2, '7bbaf461fc12f9680cf33b879e4813c6.jpg', 14, '2018-06-24 09:36:47', '2018-06-24 09:36:47'),
(3, '2cd65a22e2e1f6320906606763aa15ed.jpg', 18, '2018-06-24 12:12:25', '2018-06-24 12:12:25'),
(4, 'd9eae312b189eb321097c4a02f47c5d3.jpg', 18, '2018-06-24 12:13:06', '2018-06-24 12:13:06'),
(5, '4a679a26cf19a5fa1722f90bc18ca823.jpg', 18, '2018-06-24 12:13:23', '2018-06-24 12:13:23'),
(6, '4fc8f6be86ad7a601fd79778c52ad99c.jpg', 19, '2018-06-24 12:21:34', '2018-06-24 12:21:34'),
(7, '1ae3c062657278cc736a4d0f7bf54fd0.png', 20, '2018-06-24 12:33:39', '2018-06-24 12:33:39');

-- --------------------------------------------------------

--
-- Table structure for table `komentars`
--

CREATE TABLE `komentars` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `artikel_id` int(10) UNSIGNED NOT NULL,
  `komentar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komentars`
--

INSERT INTO `komentars` (`id`, `user_id`, `artikel_id`, `komentar`, `created_at`, `updated_at`) VALUES
(1, 6, 13, 'raftfafafafaffaf', '2018-06-23 09:58:43', '2018-06-23 09:58:43'),
(2, 6, 13, 'Iya aku tau kok', '2018-06-23 10:51:19', '2018-06-23 10:51:19'),
(3, 7, 13, 'bababababab', '2018-06-24 00:18:46', '2018-06-24 00:18:46'),
(4, 6, 13, 'kakakakak', '2018-06-24 01:38:23', '2018-06-24 01:38:23'),
(5, 8, 13, 'halo kakkaka', '2018-06-24 09:04:14', '2018-06-24 09:04:14'),
(6, 8, 14, 'rafy', '2018-06-24 09:40:34', '2018-06-24 09:40:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2014_10_12_000000_create_users_table', 1),
(18, '2014_10_12_100000_create_password_resets_table', 1),
(19, '2018_05_31_040236_create_destinasis_table', 1),
(20, '2018_05_31_040624_create_artikels_table', 1),
(21, '2018_05_31_040716_create_pesans_table', 1),
(22, '2018_05_31_040800_create_komentars_table', 1),
(23, '2018_06_05_040218_laratrust_setup_tables', 1),
(24, '2018_06_07_022709_create_galeris_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesans`
--

CREATE TABLE `pesans` (
  `id` int(10) UNSIGNED NOT NULL,
  `isi_pesan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artikel_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(4, 'member', 'Member', NULL, '2018-06-08 19:25:48', '2018-06-08 19:25:48'),
(5, 'super_admin', 'SuperAdmin', NULL, '2018-06-08 19:25:48', '2018-06-08 19:25:48');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(5, 6, 'App\\User'),
(4, 7, 'App\\User'),
(4, 8, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 'Super Admin', 'superadmin@gmail.com', '$2y$10$byodyJImxUCkqKNZ5RsvwO5X6RVF3PgT16fg9D5nPKv9Ob1eSPk72', 'rYwAeurQdSfcAngzErZOS3mVju7J1L7e3tKqEpQWIIRgb9zo9amn229cV72O', '2018-06-08 19:25:48', '2018-06-08 19:25:48'),
(7, 'member', 'member@gmail.com', '$2y$10$lcctjUtp5BvaV0Kx.iXmdeq3nRS7k321KuGW0sBPfTa4NqejNmsq2', 'qVYqE1xXggWnlEvW3BQHnPripOOAfmuzdCDURLqXP9pvEMbNM9380vs7cKVO', '2018-06-08 19:25:48', '2018-06-08 19:25:48'),
(8, 'member 2', 'member2@gmail.com', '$2y$10$/08rwjL2uaeOw1u3t9l1YONfZitAnNsKrPI.j6vuW/jYhJcjRSoJq', 'WXKpUA3IMHLxhhrAHDnFi2mH3yOT8JVDGOJO7WRfVAa6MqqjAfllJlEom7tN', '2018-06-08 19:25:49', '2018-06-08 19:25:49'),
(9, 'rafy', 'rafy@nsjj.co', '$2y$10$nlU939WyGXLqTWHbHtJHrOzBgPyULARSfe57rFUEB3gunFeRTxv7y', NULL, '2018-06-24 20:54:36', '2018-06-24 20:54:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artikels_user_id_foreign` (`user_id`),
  ADD KEY `artikels_destinasi_id_foreign` (`destinasi_id`);

--
-- Indexes for table `destinasis`
--
ALTER TABLE `destinasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galeris_artikel_id_foreign` (`artikel_id`);

--
-- Indexes for table `komentars`
--
ALTER TABLE `komentars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `komentars_user_id_foreign` (`user_id`),
  ADD KEY `komentars_artikel_id_foreign` (`artikel_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `pesans`
--
ALTER TABLE `pesans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesans_artikel_id_foreign` (`artikel_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `destinasis`
--
ALTER TABLE `destinasis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `komentars`
--
ALTER TABLE `komentars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesans`
--
ALTER TABLE `pesans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikels`
--
ALTER TABLE `artikels`
  ADD CONSTRAINT `artikels_destinasi_id_foreign` FOREIGN KEY (`destinasi_id`) REFERENCES `destinasis` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `artikels_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `galeris`
--
ALTER TABLE `galeris`
  ADD CONSTRAINT `galeris_artikel_id_foreign` FOREIGN KEY (`artikel_id`) REFERENCES `artikels` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `komentars`
--
ALTER TABLE `komentars`
  ADD CONSTRAINT `komentars_artikel_id_foreign` FOREIGN KEY (`artikel_id`) REFERENCES `artikels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `komentars_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesans`
--
ALTER TABLE `pesans`
  ADD CONSTRAINT `pesans_artikel_id_foreign` FOREIGN KEY (`artikel_id`) REFERENCES `artikels` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
