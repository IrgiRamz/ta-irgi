-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jul 2024 pada 01.56
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_chatbot`
--

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
-- Struktur dari tabel `metodebayar`
--

CREATE TABLE `metodebayar` (
  `idbayar` bigint(20) NOT NULL,
  `kode` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembayaran` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `norek` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `metodebayar`
--

INSERT INTO `metodebayar` (`idbayar`, `kode`, `pembayaran`, `norek`, `tipe`, `status`) VALUES
(1, 'BNK-240705001', 'BNI', '1232321321312', 'bank', 'aktif'),
(3, 'EWL-240705001', 'Dana', '2421432432', 'ewallet', 'aktif');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `idpertanyaan` bigint(20) UNSIGNED NOT NULL,
  `pertanyaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iduser` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pertanyaan`
--

INSERT INTO `pertanyaan` (`idpertanyaan`, `pertanyaan`, `jawaban`, `status`, `iduser`) VALUES
(1, 'apa itu iconix', 'Iconix Adalah sebuah perusahaan yang bergerak di bidang penyedia jasa klinik kecantikan, kesehatan dan gigi.', 'aktif', 1),
(2, 'apa itu paket kedua', 'paket adalah sebuah fitur untuk membeli sebuah treatment banyak dalam 1 kali beli.', 'aktif', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `idpesanan` bigint(20) NOT NULL,
  `invoice` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namapemesan` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailpemesan` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaklinik` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lamapakai` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domain` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktupesan` datetime NOT NULL,
  `bukti` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idproduk` bigint(20) NOT NULL,
  `iduser` bigint(20) UNSIGNED NOT NULL,
  `idbayar` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produkjasa`
--

CREATE TABLE `produkjasa` (
  `idproduk` bigint(20) NOT NULL,
  `kodeproduk` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaproduk` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` float NOT NULL,
  `kategori` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produkjasa`
--

INSERT INTO `produkjasa` (`idproduk`, `kodeproduk`, `namaproduk`, `harga`, `kategori`, `status`) VALUES
(1, 'CTK-240705001', 'Klinik Kecantikan [Premium]', 575000, NULL, 'aktif'),
(5, 'CTK-240705002', 'Klinik Kecantikan [Business]', 475000, NULL, 'aktif'),
(6, 'CTK-240705001', 'Klinik Kecantikan [Basic]', 375000, NULL, 'nonaktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kodeuser` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `kodeuser`, `name`, `email`, `email_verified_at`, `password`, `telepon`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ADM-240704001', 'Admin Irgi', 'admin@gmail.com', NULL, '$2y$12$h1OIiY..ELuGxYBDRCtGjuADGHaTkCXxJMR44a5jKLPEiKGg.mr8W', '0889924110', 'admin', 'aktif', NULL, '2024-07-03 17:55:46', '2024-07-04 06:22:55'),
(16, 'ADM-240704003', 'Irgi Rama Sulistio', 'irgi@gmail.com', NULL, '$2y$12$5pqVc3wcF9bWlPkqRZo3dOX0THp2nI2EsWj51gyKG9fwcieBTuwLS', '0849289428', 'admin', 'aktif', NULL, '2024-07-04 01:32:07', '2024-07-04 01:32:07'),
(19, 'FNC-240704001', 'nailal salamah', 'nail3@gmail.com', NULL, '$2y$12$q38BNvqT.RNqN3PAlMQOBuU8Xvv.lsjvMFVwqpQ/Lnd/Cy5CXc73K', '084928942', 'finance', 'aktif', NULL, '2024-07-04 01:53:58', '2024-07-04 02:40:39'),
(20, 'SPP-240704001', 'ucok', 'ucok@gmail.com', NULL, '$2y$12$nQ6.8Yy5w.tOGtMxCy.SV.LXebLhJGCtY5zF9SuIlGqd2FHy8XOYi', '04892894289', 'support', 'aktif', NULL, '2024-07-04 02:43:43', '2024-07-04 02:43:43'),
(21, 'ADM-240704004', 'hezkia', 'hezkia@gmail.com', NULL, '$2y$12$npLYTnbf5QC.2rOq.dnwdeng1Q8a1pOxTWNdeJBKhBKCrrVt3LNm.', '0849389489', 'admin', 'aktif', NULL, '2024-07-04 02:44:26', '2024-07-04 02:44:26'),
(22, 'FNC-240704002', 'salamah', 'salamah@gmail.com', NULL, '$2y$12$ckvoLlvbf5BxXAhnXGyleOZ8zPBeI7CPUciLQwcaeXxGt4AW1TL32', '04892894289', 'finance', 'nonaktif', NULL, '2024-07-04 02:45:41', '2024-07-04 03:18:50'),
(25, 'FNC-240704003', 'rama', 'rama@gmail.com', NULL, '$2y$12$QRjI/p0rcx8WqSLwy12p.ulBjzkKB8ADYWLzy79F3u5CJ47.cnAsy', '0849289428', 'finance', 'nonaktif', NULL, '2024-07-04 03:48:03', '2024-07-04 04:55:59');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `metodebayar`
--
ALTER TABLE `metodebayar`
  ADD PRIMARY KEY (`idbayar`);

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
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`idpertanyaan`),
  ADD KEY `fk_pertanyaan_user1` (`iduser`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`idpesanan`),
  ADD KEY `fk_pesanan_produkjasa` (`idproduk`),
  ADD KEY `fk_pesanan_user1` (`iduser`),
  ADD KEY `fk_pesanan_metodebayar1` (`idbayar`);

--
-- Indeks untuk tabel `produkjasa`
--
ALTER TABLE `produkjasa`
  ADD PRIMARY KEY (`idproduk`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `metodebayar`
--
ALTER TABLE `metodebayar`
  MODIFY `idbayar` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `idpertanyaan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `idpesanan` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produkjasa`
--
ALTER TABLE `produkjasa`
  MODIFY `idproduk` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD CONSTRAINT `fk_pertanyaan_user1` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_pesanan_metodebayar1` FOREIGN KEY (`idbayar`) REFERENCES `metodebayar` (`idbayar`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pesanan_produkjasa` FOREIGN KEY (`idproduk`) REFERENCES `produkjasa` (`idproduk`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pesanan_user1` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
