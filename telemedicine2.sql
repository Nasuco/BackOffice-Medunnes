-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2023 at 02:39 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telemedicine2`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `subject_type` varchar(255) DEFAULT NULL,
  `event` varchar(255) DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(255) DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`properties`)),
  `batch_uuid` char(36) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(1, 'default', 'created', 'App\\Models\\Admin', 'created', 1, NULL, NULL, '[]', NULL, '2023-07-03 01:16:57', '2023-07-03 01:16:57'),
(2, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 1, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-23 09:14:02', '2023-09-23 09:14:02'),
(3, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 1, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-23 09:16:45', '2023-09-23 09:16:45'),
(4, 'default', 'created', 'App\\Models\\Dokter', 'created', 5, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-23 09:22:33', '2023-09-23 09:22:33'),
(5, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 1, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-23 09:23:02', '2023-09-23 09:23:02'),
(6, 'default', 'created', 'App\\Models\\Spesialis', 'created', 2, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-23 09:25:40', '2023-09-23 09:25:40'),
(7, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 1, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-23 23:33:43', '2023-09-23 23:33:43'),
(8, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 1, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-23 23:48:23', '2023-09-23 23:48:23'),
(9, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 1, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-24 10:07:22', '2023-09-24 10:07:22'),
(10, 'default', 'created', 'App\\Models\\Spesialis', 'created', 3, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-24 10:13:52', '2023-09-24 10:13:52'),
(11, 'default', 'created', 'App\\Models\\Spesialis', 'created', 4, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-24 10:16:18', '2023-09-24 10:16:18'),
(12, 'default', 'created', 'App\\Models\\Spesialis', 'created', 5, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-24 10:17:05', '2023-09-24 10:17:05'),
(13, 'default', 'created', 'App\\Models\\Spesialis', 'created', 6, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-24 10:18:09', '2023-09-24 10:18:09'),
(14, 'default', 'created', 'App\\Models\\Spesialis', 'created', 7, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-24 10:18:36', '2023-09-24 10:18:36'),
(15, 'default', 'created', 'App\\Models\\Spesialis', 'created', 8, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-24 10:19:03', '2023-09-24 10:19:03'),
(16, 'default', 'created', 'App\\Models\\Spesialis', 'created', 9, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-24 10:19:22', '2023-09-24 10:19:22'),
(17, 'default', 'created', 'App\\Models\\Spesialis', 'created', 10, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-24 10:20:46', '2023-09-24 10:20:46'),
(18, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 1, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-24 10:21:47', '2023-09-24 10:21:47'),
(19, 'default', 'updated', 'App\\Models\\Dokter', 'updated', 5, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-24 10:21:58', '2023-09-24 10:21:58'),
(20, 'default', 'updated', 'App\\Models\\Pasien', 'updated', 1, 'App\\Models\\Admin', 1, '[]', NULL, '2023-09-24 18:41:52', '2023-09-24 18:41:52');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT '3',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Medunnes', 'medunnes@medunnes.com', NULL, '$2y$10$8AGfQfcw9n.iXLnBWfNjlezwbIcGb1hx4qFw2AHEgAb7rP/6inYj.', '3', NULL, '2023-07-03 01:16:57', '2023-07-03 01:16:57');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` bigint(20) UNSIGNED NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `img_artikel` varchar(255) NOT NULL,
  `desc_artikel` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `img_artikel`, `desc_artikel`, `created_at`, `updated_at`) VALUES
(1, 'Artikel 1', 'artikel/pHzzqMCRhhTf0ghgd26LgWN5bnyVAteyBs4xFdAG.png', 'Example Desc Lorem Ipsum Lorem Ipsum Lorem Ipsum', '2023-04-02 21:13:14', '2023-04-02 21:13:14');

-- --------------------------------------------------------

--
-- Table structure for table `bans`
--

CREATE TABLE `bans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bannable_type` varchar(255) DEFAULT NULL,
  `bannable_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by_type` varchar(255) DEFAULT NULL,
  `created_by_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `expired_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `metas` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`metas`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `diskusi`
--

CREATE TABLE `diskusi` (
  `id_diskusi` bigint(20) UNSIGNED NOT NULL,
  `konsultasi_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `janji`
--

CREATE TABLE `janji` (
  `id_janji` bigint(20) UNSIGNED NOT NULL,
  `pasien_id` bigint(20) UNSIGNED NOT NULL,
  `dokter_id` bigint(20) UNSIGNED NOT NULL,
  `pasien_tambahan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sesi_id` bigint(20) UNSIGNED NOT NULL,
  `datetime` datetime NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `status` enum('pending','accepted','rejected') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` bigint(20) UNSIGNED NOT NULL,
  `pasien_id` bigint(20) UNSIGNED NOT NULL,
  `dokter_id` bigint(20) UNSIGNED NOT NULL,
  `topik` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsultasi`, `pasien_id`, `dokter_id`, `topik`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Dolor sit amet', '2023-09-23 16:26:00', '2023-09-23 16:26:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_15_084449_create_spesialis_table', 1),
(6, '2023_03_06_080933_create_user_pasien_table', 1),
(7, '2023_03_06_080938_create_user_dokter_table', 1),
(8, '2023_03_06_080948__create_pasien_tambahan_table', 1),
(9, '2023_03_06_081000_create_konsultasi_table', 1),
(10, '2023_03_06_081008_create_diskusi_table', 1),
(11, '2023_03_26_171130_create_sesi_table', 1),
(12, '2023_03_26_171132_create_rating_table', 1),
(13, '2023_03_26_171140_create_janji_table', 1),
(14, '2023_03_27_081008_create_artikel_table', 1),
(16, '2023_03_06_080948_create_pasien_tambahan_table', 2),
(17, '2014_10_12_000000_create_admins_table', 3),
(18, '2014_10_12_100000_create_password_resets_table', 3),
(19, '2023_04_15_034324_create_activity_log_table', 3),
(20, '2023_04_15_034325_add_event_column_to_activity_log_table', 3),
(21, '2023_04_15_034326_add_batch_uuid_column_to_activity_log_table', 3),
(22, '2023_05_04_032543_add_banned_at_column_to_user_pasien_table', 3),
(23, 'create_bans_table', 3),
(24, 'metas_field_to_bans_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pasien_tambahan`
--

CREATE TABLE `pasien_tambahan` (
  `id_pasien_tambahan` bigint(20) UNSIGNED NOT NULL,
  `pasien_id` bigint(20) UNSIGNED NOT NULL,
  `nama_pasien_tambahan` varchar(255) NOT NULL,
  `TB` bigint(20) NOT NULL,
  `BB` bigint(20) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `hubungan_keluarga` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pasien_tambahan`
--

INSERT INTO `pasien_tambahan` (`id_pasien_tambahan`, `pasien_id`, `nama_pasien_tambahan`, `TB`, `BB`, `jenis_kelamin`, `tgl_lahir`, `hubungan_keluarga`, `created_at`, `updated_at`) VALUES
(1, 1, 'Putri Azna Fitri Abidah', 160, 50, 'L', '2012-03-09', 'Adik Pertama', '2023-04-02 10:32:02', '2023-04-02 10:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'MyApp', '464352135e92f5473fe8d78da9e6dae7acbafcb40899116151e67803e0fa3c92', '[\"*\"]', '2023-04-02 21:25:11', NULL, '2023-04-02 09:15:51', '2023-04-02 21:25:11'),
(2, 'App\\Models\\User', 2, 'MyApp', 'ac86517f07fe06661aedbe6cb2c19c13c73d6b7ee180f2f029e4cee8766bc9da', '[\"*\"]', '2023-04-09 19:36:49', NULL, '2023-04-02 09:16:03', '2023-04-09 19:36:49');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `dokter_id` bigint(20) UNSIGNED NOT NULL,
  `pasien_id` bigint(20) UNSIGNED NOT NULL,
  `rating` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`dokter_id`, `pasien_id`, `rating`, `created_at`, `updated_at`) VALUES
(1, 1, 5, '2023-04-02 09:16:51', '2023-04-02 09:16:51'),
(1, 1, 5, '2023-04-02 09:16:51', '2023-04-02 09:16:51');

-- --------------------------------------------------------

--
-- Table structure for table `sesi`
--

CREATE TABLE `sesi` (
  `id_sesi` bigint(20) UNSIGNED NOT NULL,
  `dokter_id` bigint(20) UNSIGNED NOT NULL,
  `dari` time NOT NULL,
  `sampai` time NOT NULL,
  `day` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spesialis`
--

CREATE TABLE `spesialis` (
  `id_spesialis` bigint(20) UNSIGNED NOT NULL,
  `nama_spesialis` varchar(255) NOT NULL,
  `img_spesialis` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spesialis`
--

INSERT INTO `spesialis` (`id_spesialis`, `nama_spesialis`, `img_spesialis`, `created_at`, `updated_at`) VALUES
(1, 'Poli Penyakit Telinga , Hidung dan Tenggorokan', 'asset/tht.png', '2023-09-24 10:13:52', '2023-09-24 10:13:52'),
(2, 'Spesialis Anak / Pediatrik', 'asset/anak-pediatrik.png', '2023-09-24 10:16:18', '2023-09-24 10:16:18'),
(3, 'Spesialis Jantung', 'asset/jantung.png', '2023-09-24 10:17:05', '2023-09-24 10:17:05'),
(4, 'Spesialis Paru', 'asset/paru.png', '2023-09-24 10:18:09', '2023-09-24 10:18:09'),
(5, 'Spesialis Saraf', 'asset/saraf.png', '2023-09-24 10:18:36', '2023-09-24 10:18:36'),
(6, 'Spesialis Mata', 'asset/mata.png', '2023-09-24 10:19:03', '2023-09-24 10:19:03'),
(7, 'Spesialis Kedokteran Gigi Anak', 'asset/gigi-anak.png', '2023-09-24 10:19:22', '2023-09-24 10:19:22'),
(8, 'Spesialis Penyakit Dalam', 'asset/penyakit-dalam.png', '2023-09-24 10:20:46', '2023-09-24 10:20:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` enum('pasien','dokter','admin') NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `email`, `type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Radjiman', 'dokter@gmail.com', 'dokter', NULL, '$2y$10$2Tx1kS3YrTrglXRo30Bfre6zYtSrv4E33k6nb6PIRWLJW.q5BBwfO', NULL, '2023-04-02 09:15:50', '2023-04-02 09:15:50'),
(2, 'Muhamad Akbar', 'akbar@gmail.com', 'pasien', NULL, '$2y$10$pqXydjXvBxN8aaPhpW0KberEQ4xIl3MsQMTwvVi99WJbK.cznqDO6', NULL, '2023-04-02 09:16:03', '2023-04-02 09:16:03');

-- --------------------------------------------------------

--
-- Table structure for table `user_dokter`
--

CREATE TABLE `user_dokter` (
  `id_dokter` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `spesialis_id` bigint(20) UNSIGNED NOT NULL,
  `title_depan` varchar(255) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `title_belakang` varchar(255) NOT NULL,
  `img_dokter` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_tlp` varchar(255) NOT NULL,
  `tempat_kerja` varchar(255) NOT NULL,
  `tahun_lulus` int(11) NOT NULL,
  `tgl_mulai_aktif` date NOT NULL,
  `alumni_kampus` varchar(255) NOT NULL,
  `no_reg` bigint(20) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `status` enum('panding','approve','reject','suspend') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_dokter`
--

INSERT INTO `user_dokter` (`id_dokter`, `user_id`, `spesialis_id`, `title_depan`, `nama_dokter`, `title_belakang`, `img_dokter`, `alamat`, `no_tlp`, `tempat_kerja`, `tahun_lulus`, `tgl_mulai_aktif`, `alumni_kampus`, `no_reg`, `jenis_kelamin`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Dr.', 'Radjiman', 'Sp.A', 'asset/k7n4U22mFiFfLCbRLi2AB1UttbdbdAMwrusXjEjh.png', 'Yogyakarta', '085123213123', 'Rumah Sakit Dr Oen', 2017, '2023-03-09', 'UGM', 8309218312312, 'L', 'approve', '2023-04-02 09:15:50', '2023-09-24 10:21:47'),
(2, 2, 3, 'Dr.', 'Rendi', 'Sp.A', 'asset/WhatsApp Image 2023-07-31 at 22.03.26.jpg', 'Sleman, Special Region of Yogyakarta, Indonesia', '08888888888', 'RS. Yogyakarta', 2011, '2023-09-23', 'UII', 8973478934, 'L', 'panding', '2023-09-23 09:22:33', '2023-09-24 10:21:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_pasien`
--

CREATE TABLE `user_pasien` (
  `id_pasien` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `NIK` bigint(20) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `img_pasien` varchar(255) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_tlp` varchar(255) NOT NULL,
  `TB` int(11) NOT NULL,
  `BB` int(11) NOT NULL,
  `status` enum('active','suspend') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_pasien`
--

INSERT INTO `user_pasien` (`id_pasien`, `user_id`, `NIK`, `nama_pasien`, `img_pasien`, `jenis_kelamin`, `alamat`, `no_tlp`, `TB`, `BB`, `status`, `created_at`, `updated_at`, `banned_at`) VALUES
(1, 2, 4124712411233, 'Muhamad Akbar', NULL, 'L', 'Yogyakarta', '085123213123', 160, 50, 'active', '2023-04-02 09:16:03', '2023-09-24 18:41:52', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `bans`
--
ALTER TABLE `bans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bans_bannable_type_bannable_id_index` (`bannable_type`,`bannable_id`),
  ADD KEY `bans_created_by_type_created_by_id_index` (`created_by_type`,`created_by_id`),
  ADD KEY `bans_ip_index` (`ip`),
  ADD KEY `bans_expired_at_index` (`expired_at`);

--
-- Indexes for table `diskusi`
--
ALTER TABLE `diskusi`
  ADD PRIMARY KEY (`id_diskusi`),
  ADD KEY `diskusi_konsultasi_id_foreign` (`konsultasi_id`),
  ADD KEY `diskusi_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `janji`
--
ALTER TABLE `janji`
  ADD PRIMARY KEY (`id_janji`),
  ADD KEY `janji_pasien_id_foreign` (`pasien_id`),
  ADD KEY `janji_dokter_id_foreign` (`dokter_id`),
  ADD KEY `janji_sesi_id_foreign` (`sesi_id`),
  ADD KEY `janji_pasien_tambahan_id_foreign` (`pasien_tambahan_id`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`),
  ADD KEY `konsultasi_pasien_id_foreign` (`pasien_id`),
  ADD KEY `konsultasi_dokter_id_foreign` (`dokter_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasien_tambahan`
--
ALTER TABLE `pasien_tambahan`
  ADD PRIMARY KEY (`id_pasien_tambahan`),
  ADD KEY `pasien_tambahan_pasien_id_foreign` (`pasien_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD KEY `rating_dokter_id_foreign` (`dokter_id`),
  ADD KEY `rating_pasien_id_foreign` (`pasien_id`);

--
-- Indexes for table `sesi`
--
ALTER TABLE `sesi`
  ADD PRIMARY KEY (`id_sesi`),
  ADD KEY `sesi_dokter_id_foreign` (`dokter_id`);

--
-- Indexes for table `spesialis`
--
ALTER TABLE `spesialis`
  ADD PRIMARY KEY (`id_spesialis`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_dokter`
--
ALTER TABLE `user_dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `user_dokter_user_id_foreign` (`user_id`),
  ADD KEY `user_dokter_spesialis_id_foreign` (`spesialis_id`);

--
-- Indexes for table `user_pasien`
--
ALTER TABLE `user_pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD KEY `user_pasien_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bans`
--
ALTER TABLE `bans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diskusi`
--
ALTER TABLE `diskusi`
  MODIFY `id_diskusi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `janji`
--
ALTER TABLE `janji`
  MODIFY `id_janji` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_konsultasi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pasien_tambahan`
--
ALTER TABLE `pasien_tambahan`
  MODIFY `id_pasien_tambahan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sesi`
--
ALTER TABLE `sesi`
  MODIFY `id_sesi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `spesialis`
--
ALTER TABLE `spesialis`
  MODIFY `id_spesialis` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_dokter`
--
ALTER TABLE `user_dokter`
  MODIFY `id_dokter` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_pasien`
--
ALTER TABLE `user_pasien`
  MODIFY `id_pasien` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diskusi`
--
ALTER TABLE `diskusi`
  ADD CONSTRAINT `diskusi_konsultasi_id_foreign` FOREIGN KEY (`konsultasi_id`) REFERENCES `konsultasi` (`id_konsultasi`),
  ADD CONSTRAINT `diskusi_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `janji`
--
ALTER TABLE `janji`
  ADD CONSTRAINT `janji_dokter_id_foreign` FOREIGN KEY (`dokter_id`) REFERENCES `user_dokter` (`id_dokter`),
  ADD CONSTRAINT `janji_pasien_id_foreign` FOREIGN KEY (`pasien_id`) REFERENCES `user_pasien` (`id_pasien`),
  ADD CONSTRAINT `janji_pasien_tambahan_id_foreign` FOREIGN KEY (`pasien_tambahan_id`) REFERENCES `pasien_tambahan` (`id_pasien_tambahan`),
  ADD CONSTRAINT `janji_sesi_id_foreign` FOREIGN KEY (`sesi_id`) REFERENCES `sesi` (`id_sesi`);

--
-- Constraints for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD CONSTRAINT `konsultasi_dokter_id_foreign` FOREIGN KEY (`dokter_id`) REFERENCES `user_dokter` (`id_dokter`),
  ADD CONSTRAINT `konsultasi_pasien_id_foreign` FOREIGN KEY (`pasien_id`) REFERENCES `user_pasien` (`id_pasien`);

--
-- Constraints for table `pasien_tambahan`
--
ALTER TABLE `pasien_tambahan`
  ADD CONSTRAINT `pasien_tambahan_pasien_id_foreign` FOREIGN KEY (`pasien_id`) REFERENCES `user_pasien` (`id_pasien`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_dokter_id_foreign` FOREIGN KEY (`dokter_id`) REFERENCES `user_dokter` (`id_dokter`),
  ADD CONSTRAINT `rating_pasien_id_foreign` FOREIGN KEY (`pasien_id`) REFERENCES `user_pasien` (`id_pasien`);

--
-- Constraints for table `sesi`
--
ALTER TABLE `sesi`
  ADD CONSTRAINT `sesi_dokter_id_foreign` FOREIGN KEY (`dokter_id`) REFERENCES `user_dokter` (`id_dokter`);

--
-- Constraints for table `user_dokter`
--
ALTER TABLE `user_dokter`
  ADD CONSTRAINT `user_dokter_spesialis_id_foreign` FOREIGN KEY (`spesialis_id`) REFERENCES `spesialis` (`id_spesialis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_dokter_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_pasien`
--
ALTER TABLE `user_pasien`
  ADD CONSTRAINT `user_pasien_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
