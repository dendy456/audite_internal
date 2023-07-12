-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jul 2023 pada 17.40
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auditinternal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `id_user`, `nama`, `created_at`, `updated_at`) VALUES
(1, 1, 'dendy', NULL, NULL),
(2, 2, 'martinus', NULL, NULL),
(6, 10, 'nesataa', '2023-07-10 13:06:37', '2023-07-10 13:06:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auditees`
--

CREATE TABLE `auditees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama_auditee` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_bagian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `auditees`
--

INSERT INTO `auditees` (`id`, `id_user`, `nama_auditee`, `sub_bagian`, `created_at`, `updated_at`) VALUES
(1, 5, 'nesta', 'rosting', NULL, NULL),
(2, 6, 'alvianus', 'bully', NULL, NULL),
(3, 12, 'adi', 'keuangan', '2023-07-10 14:03:13', '2023-07-10 14:03:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auditor_units`
--

CREATE TABLE `auditor_units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_unit_audit` bigint(20) UNSIGNED NOT NULL,
  `nama_auditor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_auditor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `auditor_units`
--

INSERT INTO `auditor_units` (`id`, `id_user`, `id_unit_audit`, `nama_auditor`, `nip_auditor`, `created_at`, `updated_at`) VALUES
(1, 3, 2, 'saukani', '908098979', NULL, NULL),
(2, 4, 1, 'saukanii', '9879798', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_audits`
--

CREATE TABLE `hasil_audits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_standar_ruang_lingkup` bigint(20) UNSIGNED NOT NULL,
  `kondisi_awal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dasar_evaluasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyebab` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `akibat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_kesanggupan_penyelesaian` date NOT NULL,
  `rekomendasi_follow_up` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tindak_lanjut` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `hasil_audits`
--

INSERT INTO `hasil_audits` (`id`, `id_standar_ruang_lingkup`, `kondisi_awal`, `dasar_evaluasi`, `penyebab`, `akibat`, `feedback`, `tanggal_kesanggupan_penyelesaian`, `rekomendasi_follow_up`, `tindak_lanjut`, `created_at`, `updated_at`) VALUES
(1, 1, 'mengajarin saukani dan martin mengerosting', 'memojokkan', 'hobi', 'kesenangan', 'bahagia', '2023-07-11', 'ngumpul di borneo', 'makian', NULL, NULL);

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
(4, '2023_07_09_211508_create_periode_audits_table', 1),
(5, '2023_07_09_211508_create_auditees_table', 2),
(6, '2023_07_09_211509_create_setup_files_table', 2),
(7, '2023_07_09_223339_create_admins_table', 3),
(8, '2023_07_10_003026_create_standar_ruang_lingkups_table', 3),
(9, '2023_07_10_003333_create_hasil_audits_table', 3),
(10, '2023_07_10_005454_create_unit_audits_table', 3),
(11, '2023_07_10_220443_create_auditor_units_table', 3);

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
-- Struktur dari tabel `periode_audits`
--

CREATE TABLE `periode_audits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_awal_audit` date NOT NULL,
  `tanggal_akhir_audit` date NOT NULL,
  `no_sk_tugas_audit` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_sk` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_sk` date NOT NULL,
  `ketua_spi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_ketua_spi` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `periode_audits`
--

INSERT INTO `periode_audits` (`id`, `tanggal_awal_audit`, `tanggal_akhir_audit`, `no_sk_tugas_audit`, `file_sk`, `tanggal_sk`, `ketua_spi`, `nip_ketua_spi`, `created_at`, `updated_at`) VALUES
(1, '2023-07-08', '2023-07-09', '20-roasting-2024', 'asfsdgddfg.pdf', '2023-07-10', 'ucup', '7987979', NULL, NULL),
(2, '2023-07-01', '2023-07-02', '12-bullying-2025', 'sjdbhaskjdah.ppt', '2023-07-03', 'yusup', '9879879', NULL, NULL),
(3, '2023-07-03', '2023-07-05', '001/AUD/2023', 'file-SPEYe.pdf', '2023-07-01', 'Jhon Doe', '1234567890', '2023-07-10 15:38:40', '2023-07-10 15:38:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setup_files`
--

CREATE TABLE `setup_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_auditee` bigint(20) UNSIGNED NOT NULL,
  `nama_file` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `setup_files`
--

INSERT INTO `setup_files` (`id`, `id_auditee`, `nama_file`, `deskripsi_file`, `created_at`, `updated_at`) VALUES
(1, 1, 'tutorial', 'tuttorial bullying', NULL, NULL),
(2, 2, 'tutorial', 'roasting', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `standar_ruang_lingkups`
--

CREATE TABLE `standar_ruang_lingkups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_setup_file` bigint(20) UNSIGNED NOT NULL,
  `nama_ruang_lingkup` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_ruang_lingkup` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `standar_ruang_lingkups`
--

INSERT INTO `standar_ruang_lingkups` (`id`, `id_setup_file`, `nama_ruang_lingkup`, `deskripsi_ruang_lingkup`, `created_at`, `updated_at`) VALUES
(1, 1, 'pengajar', 'pengajar bullyng yang handal', NULL, NULL),
(2, 2, 'murid', 'murid roasting yang newbie', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit_audits`
--

CREATE TABLE `unit_audits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_periode_audit` bigint(20) UNSIGNED NOT NULL,
  `id_standar_ruang_lingkup` bigint(20) UNSIGNED NOT NULL,
  `nama_unit` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_audit` date NOT NULL,
  `ketua_tim` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_ketua_tim` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `unit_audits`
--

INSERT INTO `unit_audits` (`id`, `id_periode_audit`, `id_standar_ruang_lingkup`, `nama_unit`, `tanggal_audit`, `ketua_tim`, `nip_ketua_tim`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'pengroasting', '2023-07-05', 'Saukani', '23242423', NULL, NULL),
(2, 2, 1, 'Pembully', '2023-07-06', 'Saukkani', '3232324', NULL, NULL),
(3, 3, 1, 'Prodi Informatika', '2023-07-05', 'Jane Smith', '0987654321', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `no_telp`, `role_user`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'den', 'den@gmail.com', NULL, 'den', '08798687', 'ADMIN', NULL, NULL, NULL),
(2, 'dendy', 'dendy@gmail', NULL, 'dendy', '89698698', 'ADMIN', NULL, NULL, NULL),
(3, 'sau', 'sau@gmail.com', NULL, 'sau', '987979', 'AUDITOR', NULL, NULL, NULL),
(4, 'saukani', 'saukani@gmail.com', NULL, 'saukani', '78679697698', 'AUDITOR', NULL, NULL, NULL),
(5, 'nes', 'nes@gmail.com', NULL, 'nes', '89797998798', 'AUDITEE', NULL, NULL, NULL),
(6, 'nesta', 'nesta@gmail.com', NULL, 'nesta', '98798798', 'AUDITEE', NULL, NULL, NULL),
(7, 'ucup', 'ucup@gmail.com', NULL, '$2y$10$fJ.437GKGSUqElghULK0x.ShJy5ohWFBFb61Up8J76BGyCm2ADgbi', '987989798', 'ADMIN', NULL, '2023-07-10 08:49:32', '2023-07-10 08:49:32'),
(8, 'syaukani', 'syaukani2001@gmail.com', NULL, '$2y$10$bjOJImcmn1zpcrZb/rKH5.R/Bie623qdNuVzFIy0D3HenEaGCNMBW', '085345678765', 'ADMIN', NULL, '2023-07-10 09:26:51', '2023-07-10 09:26:51'),
(9, 'dendy', 'dendylussa456@gmail.com', NULL, '$2y$10$xv9T4EheD5.lo4CJ3bZAU.sM0AQHN2Akew5sSbmWR6FlT3NnQmWj2', '8709797', 'ADMIN', NULL, '2023-07-10 11:11:10', '2023-07-10 11:11:10'),
(10, 'admin', 'admin@gmail.com', NULL, '$2y$10$v5TC5qsOh1CP8DWHY8f0zuoIioMISkiKRwjMpi5BvFMcjlJ6SAY3K', '0797868768', 'ADMIN', NULL, '2023-07-10 11:15:03', '2023-07-10 11:15:03'),
(11, 'auditor', 'auditor@gmail.com', NULL, '$2y$10$Hdr1nN.Df75uzkN7TcSOiu/FuEolG7.NtPPR9kvIlqp9v5Ou1xVmK', '786798678', 'AUDITOR', NULL, '2023-07-10 11:17:03', '2023-07-10 11:17:03'),
(12, 'auditee', 'auditee@gmail.com', NULL, '$2y$10$kiFvLYLjrPHRhi/CuGKXeONXlr4okTgt0KemwdfhOBS/8a5Enc7Wq', '7686876', 'AUDITEE', NULL, '2023-07-10 11:19:29', '2023-07-10 11:19:29');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admins_id_user_foreign` (`id_user`);

--
-- Indeks untuk tabel `auditees`
--
ALTER TABLE `auditees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auditees_id_user_foreign` (`id_user`);

--
-- Indeks untuk tabel `auditor_units`
--
ALTER TABLE `auditor_units`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auditor_units_id_user_foreign` (`id_user`),
  ADD KEY `auditor_units_id_unit_audit_foreign` (`id_unit_audit`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `hasil_audits`
--
ALTER TABLE `hasil_audits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hasil_audits_id_standar_ruang_lingkup_foreign` (`id_standar_ruang_lingkup`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `periode_audits`
--
ALTER TABLE `periode_audits`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `setup_files`
--
ALTER TABLE `setup_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `setup_files_id_auditee_foreign` (`id_auditee`);

--
-- Indeks untuk tabel `standar_ruang_lingkups`
--
ALTER TABLE `standar_ruang_lingkups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `standar_ruang_lingkups_id_setup_file_foreign` (`id_setup_file`);

--
-- Indeks untuk tabel `unit_audits`
--
ALTER TABLE `unit_audits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unit_audits_id_periode_audit_foreign` (`id_periode_audit`),
  ADD KEY `unit_audits_id_standar_ruang_lingkup_foreign` (`id_standar_ruang_lingkup`);

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
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `auditees`
--
ALTER TABLE `auditees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `auditor_units`
--
ALTER TABLE `auditor_units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hasil_audits`
--
ALTER TABLE `hasil_audits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `periode_audits`
--
ALTER TABLE `periode_audits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `setup_files`
--
ALTER TABLE `setup_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `standar_ruang_lingkups`
--
ALTER TABLE `standar_ruang_lingkups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `unit_audits`
--
ALTER TABLE `unit_audits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auditees`
--
ALTER TABLE `auditees`
  ADD CONSTRAINT `auditees_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auditor_units`
--
ALTER TABLE `auditor_units`
  ADD CONSTRAINT `auditor_units_id_unit_audit_foreign` FOREIGN KEY (`id_unit_audit`) REFERENCES `unit_audits` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auditor_units_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `hasil_audits`
--
ALTER TABLE `hasil_audits`
  ADD CONSTRAINT `hasil_audits_id_standar_ruang_lingkup_foreign` FOREIGN KEY (`id_standar_ruang_lingkup`) REFERENCES `standar_ruang_lingkups` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `setup_files`
--
ALTER TABLE `setup_files`
  ADD CONSTRAINT `setup_files_id_auditee_foreign` FOREIGN KEY (`id_auditee`) REFERENCES `auditees` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `standar_ruang_lingkups`
--
ALTER TABLE `standar_ruang_lingkups`
  ADD CONSTRAINT `standar_ruang_lingkups_id_setup_file_foreign` FOREIGN KEY (`id_setup_file`) REFERENCES `setup_files` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `unit_audits`
--
ALTER TABLE `unit_audits`
  ADD CONSTRAINT `unit_audits_id_periode_audit_foreign` FOREIGN KEY (`id_periode_audit`) REFERENCES `periode_audits` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `unit_audits_id_standar_ruang_lingkup_foreign` FOREIGN KEY (`id_standar_ruang_lingkup`) REFERENCES `standar_ruang_lingkups` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
