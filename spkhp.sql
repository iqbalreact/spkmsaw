-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Bulan Mei 2021 pada 09.56
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spkhp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_alternatif` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`id`, `nama_alternatif`, `harga`, `user_id`) VALUES
(10, 'Xiaomi Note 10 Pro', 3498000, 10),
(11, 'Xiaomi Poco F2 Pro', 6349000, 10),
(12, 'Xiaomi Pocophone M3', 1899000, 10),
(13, 'Xiaomi Pocophone X3 NFC', 2850000, 10),
(14, 'Xiaomi Pocophone X3 Pro', 3625000, 10),
(15, 'Oppo A12', 1725000, 10),
(16, 'Oppo A74', 3799000, 10),
(17, 'Oppo Reno 5', 4500000, 10),
(18, 'Oppo A15', 1775000, 10),
(19, 'Oppo Reno 5F', 3890000, 10),
(20, 'Samsung Galaxy A12', 2190000, 10),
(21, 'Samsung Galaxy M02', 1220000, 10),
(22, 'Samsung Galaxy A11', 1650000, 10),
(23, 'Samsung Galaxy A72', 5999000, 10),
(24, 'Samsung Galaxy A52', 489000, 10),
(25, 'Realme C11', 1449000, 10),
(26, 'Realme 8 Pro', 4449000, 10),
(27, 'Realme C12', 1449000, 10),
(28, 'Realme 8', 3599000, 10),
(29, 'Realme 6 Pro', 3799000, 10),
(30, 'Vivo Y20', 2099000, 10),
(31, 'Vivo Y51A', 3399000, 10),
(32, 'Vivo Y20S', 2999000, 10),
(33, 'Vivo V20', 4399000, 10),
(34, 'Vivo Y30i', 2399000, 10),
(35, 'HP MI', 2500000, 18),
(37, 'RealMe 9', 2500000, 19),
(38, 'HP Phone', 3000000, 19);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kriteria` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot_kriteria` int(10) NOT NULL,
  `atribut_kriteria` enum('benefit','cost') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id`, `nama_kriteria`, `bobot_kriteria`, `atribut_kriteria`) VALUES
(1, 'Harga', 20, 'cost'),
(2, 'RAM', 10, 'benefit'),
(3, 'ROM', 10, 'benefit'),
(4, 'Sistem Operasi', 15, 'benefit'),
(5, 'Layar', 10, 'benefit'),
(6, 'Baterai', 15, 'benefit'),
(7, 'Kamera Depan', 10, 'benefit'),
(8, 'Kamera Belakang', 10, 'benefit');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_02_19_035320_create_kategoris_table', 1),
(5, '2021_02_19_040739_create_aspek_penilaians_table', 1),
(6, '2021_02_19_041507_create_sasaran_kinerjas_table', 1),
(7, '2021_02_19_041644_create_target_sasaran_kinerjas_table', 1),
(8, '2021_02_19_041732_create_realisasi_sasaran_kinerjas_table', 1),
(9, '2021_02_19_041805_create_pegawais_table', 1),
(10, '2021_03_22_063340_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(1, 'App\\User', 2),
(1, 'App\\User', 5),
(1, 'App\\User', 7),
(1, 'App\\User', 10),
(2, 'App\\User', 3),
(2, 'App\\User', 4),
(2, 'App\\User', 6),
(2, 'App\\User', 11),
(2, 'App\\User', 13),
(2, 'App\\User', 14),
(2, 'App\\User', 15),
(2, 'App\\User', 16),
(2, 'App\\User', 17),
(2, 'App\\User', 18),
(2, 'App\\User', 19);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_alternatif`
--

CREATE TABLE `nilai_alternatif` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alternatif_id` int(11) NOT NULL,
  `subkriteria_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai_alternatif`
--

INSERT INTO `nilai_alternatif` (`id`, `alternatif_id`, `subkriteria_id`, `user_id`) VALUES
(9, 12, 3, 19),
(10, 12, 7, 19),
(11, 12, 12, 19),
(12, 12, 17, 19),
(13, 12, 23, 19),
(14, 12, 27, 19),
(15, 12, 31, 19),
(16, 12, 37, 19),
(17, 38, 4, 19),
(18, 38, 7, 19),
(19, 38, 11, 19),
(20, 38, 16, 19),
(21, 38, 24, 19),
(22, 38, 28, 19),
(23, 38, 32, 19),
(24, 38, 38, 19);

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
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2021-03-21 23:50:06', '2021-03-21 23:50:06'),
(2, 'pengguna', 'web', '2021-03-21 23:50:47', '2021-03-21 23:50:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkriteria`
--

CREATE TABLE `subkriteria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kriteria_id` int(11) NOT NULL,
  `nama_subkriteria` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot_subkriteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `subkriteria`
--

INSERT INTO `subkriteria` (`id`, `kriteria_id`, `nama_subkriteria`, `bobot_subkriteria`) VALUES
(1, 1, 'Rp 1.500.000 - Rp 1.999.000', 5),
(2, 1, 'Rp 2.000.000 - Rp 2.499.000', 4),
(3, 1, 'Rp 2.500.000 - Rp 2.999.000', 3),
(4, 1, 'Rp 3.000.000 - Rp 3.499.000', 2),
(5, 1, 'Rp 3.500.000 - Rp 4.000.000', 1),
(6, 2, '8 GB', 5),
(7, 2, '6 GB', 4),
(8, 2, '4 GB', 3),
(9, 2, '3 GB', 2),
(10, 2, '2 GB', 1),
(11, 3, '128 GB', 5),
(12, 3, '64 GB', 4),
(13, 3, '32 GB', 3),
(14, 3, '16 GB', 2),
(15, 3, '8 GB', 1),
(16, 4, 'Android 11.0', 5),
(17, 4, 'Android 10.0', 4),
(18, 4, 'Android 9.0', 3),
(19, 4, 'Android 8.0', 2),
(20, 4, 'Android 7.0', 1),
(21, 5, '6,5\" - 7\"', 5),
(22, 5, '6,0\" - 6,4', 4),
(23, 5, '5,5\" - 5,9\"', 3),
(24, 5, '5,0\" - 5,4\"', 2),
(25, 5, '4,0\" - 4,9\"', 1),
(26, 6, '> 2500 mAh', 5),
(27, 6, '2100 mAh ??? 2500 mAh', 4),
(28, 6, '1600 mAh ??? 2000 mAh', 3),
(29, 6, '1100 mAh ??? 1500 mAh', 2),
(30, 6, '< 1000 mAh', 1),
(31, 7, '48 MP', 5),
(32, 7, '32 MP', 4),
(33, 7, '20 MP', 3),
(34, 7, '16 MP', 2),
(35, 7, '5 MP - 8 MP', 1),
(36, 8, '48 MP', 5),
(37, 8, '32 MP', 4),
(38, 8, '20 MP', 3),
(39, 8, '16 MP', 2),
(40, 8, '5 MP - 8 MP', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, 'Admin', '999', 'hello@admin.com', NULL, '$2y$10$bZZ5JHPuCV5QTxxkKBjPweThVX/BzM6BuPUyBdXFV8E.9u4.f9P9.', NULL, '2021-04-02 19:21:16', '2021-04-02 20:45:42'),
(17, 'guest', 'guest', 'guest@admin.com', NULL, '$2y$10$bOTrD/oE8sH7MHtX2y8.s.89QBsyjVQebi76OSl62AcelMtwuN8wC', NULL, '2021-05-19 03:52:39', '2021-05-19 03:52:39'),
(18, 'hapid', 'hapid123', 'hapid@gmail.com', NULL, '$2y$10$hVu5BUJp6chUTiEDnbR4b.UpyD/FWX5fkGLfWIHc09XJFcYMmbwNG', NULL, '2021-05-28 20:38:03', '2021-05-28 20:38:03'),
(19, 'Wildan', 'wildan123', 'wildan@gmail.com', NULL, '$2y$10$NCcXglSyKPlpMySZUQf5tenA.Dfd2D60yEEZ6y5cLZfKcQVEqH9C.', NULL, '2021-05-28 21:00:35', '2021-05-28 21:00:35');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `nilai_alternatif`
--
ALTER TABLE `nilai_alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `nilai_alternatif`
--
ALTER TABLE `nilai_alternatif`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `subkriteria`
--
ALTER TABLE `subkriteria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
