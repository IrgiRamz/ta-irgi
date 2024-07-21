-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jul 2024 pada 20.07
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
  `pertanyaan2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iduser` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pertanyaan`
--

INSERT INTO `pertanyaan` (`idpertanyaan`, `pertanyaan`, `pertanyaan2`, `jawaban`, `status`, `iduser`) VALUES
(1, 'apa itu iconix', 'apa itu iconix', 'Iconix Adalah sebuah perusahaan yang bergerak di bidang penyedia jasa klinik kecantikan, kesehatan dan gigi.', 'aktif', 1),
(2, 'apa itu paket kedua', 'apa itu paket kedua', 'paket adalah sebuah fitur untuk membeli sebuah treatment banyak dalam 1 kali beli.', 'aktif', 1),
(7, 'harga klinik kecantikan premium', 'harga klinik kecantikan premium', 'Harga Klinik Kecantikan Premium adalah Rp.575.000', 'aktif', 1),
(8, 'berapa harga software aplikasi sehat pratama', 'berapakah harga software aplikasi kesehatan pratama', 'Harga klinik software kesehatan pratama untuk 1 bulannya adalah Rp. 375.000 dan untuk 1 tahun Rp.3.750.000', 'aktif', 1),
(9, 'maksud data transaksi', 'apa yang dimaksud dengan data transaksi', 'data transaksi adalah', 'aktif', 1),
(10, 'sih sebut sigma', 'apa sih yang disebut sigma', 'sigma adalah aku', 'aktif', NULL),
(11, 'tahu wing', 'apa yang kamu ketahui tentang mewing', 'mewing adalah sigma lite', 'aktif', NULL);

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
  `total` float NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domain` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktupesan` datetime NOT NULL,
  `bukti` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idproduk` bigint(20) NOT NULL,
  `iduser` bigint(20) UNSIGNED DEFAULT NULL,
  `idbayar` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`idpesanan`, `invoice`, `namapemesan`, `emailpemesan`, `nohp`, `namaklinik`, `lamapakai`, `total`, `alamat`, `domain`, `waktupesan`, `bukti`, `catatan`, `status`, `idproduk`, `iduser`, `idbayar`) VALUES
(1, 'INV-240705001', 'Rama ganteng', 'rama@gmail.com', '0868686t866', 'Beauty Klinik', '6', 2250000, 'Bogor', 'Beauty.clinics.id', '2024-07-05 20:33:09', NULL, NULL, 'belum', 13, 1, 1),
(2, 'INV-240705002', 'Rama', 'rama2@gmail.com', '049389438943', 'Beauty Klinik', '12', 5750000, 'Perumahan Grand Kahuripan Cluster Merapi no:IA38 Kec.Klapanunggal', 'ramatara.clinics.id', '2024-07-05 20:37:34', NULL, NULL, 'verif', 14, 26, 3),
(3, 'INV-240705003', 'Irgi', 'irgi@gmail.com', '084927427942', 'Klinik Kecantikan Hebat', '12', 3750000, 'Bogor', 'ramataro.beautyclinic.app', '2024-07-05 21:36:56', NULL, NULL, 'verif', 13, 1, 3),
(4, 'INV-240705004', 'Nail', 'nail@gmail.com', '08492894289', 'Klinik Nailal', '12', 3750000, 'Jakarta Timur', 'nailal.clinic.co.id', '2024-07-05 21:42:33', NULL, NULL, 'belum', 13, 1, 1),
(5, 'INV-240705005', 'salamah', 'salamah@gmail.com', '948298492942', 'Klinik Nailal 2', '12', 3750000, 'Jakarta', 'salamah.beautyclinic.app', '2024-07-05 22:14:10', NULL, NULL, 'belum', 13, 1, 1),
(10, 'INV-240706001', 'Tio', 'tio@gmail.com', '9849278428940', 'Cantik Kliniks', '1', 375000, 'Perumahan Grand Kahuripan Cluster Merapi no:IA38 Kec.Klapanunggal', 'ramatarax.clinics.id', '2024-07-06 10:33:56', NULL, NULL, 'belum', 13, NULL, 1),
(13, 'INV-240708001', 'Tio', 'tio@gmail.com', '42424242', 'Beauty Klinik', '1', 375000, 'Perumahan Grand Kahuripan Cluster Merapi no:IA38 Kec.Klapanunggal', 'ramatarax.clinics.id', '2024-07-08 01:40:56', NULL, NULL, 'belum', 13, NULL, 1),
(14, 'INV-240708002', 'Tio', 'tio@gmail.com', '42424242', 'Beauty Klinik', '1', 375000, 'Perumahan Grand Kahuripan Cluster Merapi no:IA38 Kec.Klapanunggal', 'ramatarax.clinics.id', '2024-07-08 01:42:05', NULL, NULL, 'belum', 13, NULL, 1),
(15, 'INV-240708003', 'Tio', 'tio@gmail.com', '4242424', 'Klinik Kecantikan Hebat', '1', 375000, 'Perumahan Grand Kahuripan Cluster Merapi no:IA38 Kec.Klapanunggal', 'ramatarax.clinics.id', '2024-07-08 01:42:23', NULL, NULL, 'belum', 13, NULL, 1),
(16, 'INV-240708004', 'Tio', 'tio@gmail.com', '4242424', 'Klinik Kecantikan Hebat', '1', 375000, 'Perumahan Grand Kahuripan Cluster Merapi no:IA38 Kec.Klapanunggal', 'ramatarax.clinics.id', '2024-07-08 01:42:40', NULL, NULL, 'belum', 13, NULL, 1),
(17, 'INV-240708005', 'lala', 'lala@gmail.com', '089472874287', 'Lala kliniks', '12', 5750000, 'Perumahan Grand Kahuripan Cluster Merapi no:IA38 Kec.Klapanunggal', '0888938298329.clinic.co.id', '2024-07-08 09:27:53', 'uploads/EtJPju4SW6tch6NGhhDSNZfti8N5sqD0fBafxtsV.png', 'sudah bayar', 'sudah', 14, NULL, 3),
(18, 'INV-240708006', 'lala2', 'lala@gmail.com', '0840289428942', 'Lala kliniks', '1', 375000, 'Perumahan Grand Kahuripan Cluster Merapi no:IA38 Kec.Klapanunggal', 'ramatara.clinic.co.id', '2024-07-08 09:43:31', 'assets/bukti/sTZ3w15a2CsnC7zrF30taOoxPvQaAVN0p8B2JxyL.png', 'sudah bayar', 'verif', 13, NULL, 3),
(19, 'INV-240708007', 'Nail', 'rama2@gmail.com', '432434334', 'Beauty Klinik', '6', 3450000, 'Perumahan Grand Kahuripan Cluster Merapi no:IA38 Kec.Klapanunggal', 'klinikss.beautyclinic.app', '2024-07-08 09:50:17', 'assets/bukti/1720407035_29e522e01dbcedeaf93a820681f653df.png', 'sudah bayar', 'sudah', 14, NULL, 1),
(20, 'INV-240708008', 'Nail3', 'rama2@gmail.com', '432434334', 'Beauty Klinik', '6', 3450000, 'Perumahan Grand Kahuripan Cluster Merapi no:IA38 Kec.Klapanunggal', 'klinikss.beautyclinic.app', '2024-07-08 09:57:05', 'assets/bukti/1720407437_83790f2b43f00be.png', 'sudah', 'sudah', 14, NULL, 1),
(21, 'INV-240708009', 'Rama ganteng', 'tio@gmail.com', '2432421412412', 'Klinik Nailal 2', '1', 375000, 'Perumahan Grand Kahuripan Cluster Merapi no:IA38 Kec.Klapanunggal', 'ramataro.clinic.co.id', '2024-07-08 10:03:33', 'assets/bukti/1720407832_20055311_1 (1).jpg', 'sudah bayar yaa mass', 'verif', 13, 1, 3),
(22, 'INV-240710001', 'Nail', 'nail1234@gmail.com', '04298429824', 'Klinik Nailal 2', '1', 375000, 'Perumahan Grand Kahuripan Cluster Merapi no:IA38 Kec.Klapanunggal', 'nailal.clinics.id', '2024-07-10 05:56:12', 'assets/bukti/1720565786_83790f2b43f00be.png', 'sudah', 'sudah', 13, NULL, 1),
(23, 'INV-240721001', 'Rama', 'ram2a@gmail.com', '4243243232', 'Klinik Nailal', '1', 375000, 'Perumahan Grand Kahuripan Cluster Merapi no:IA38 Kec.Klapanunggal', 'ramatarax.clinics.id', '2024-07-21 11:14:30', NULL, NULL, 'belum', 13, NULL, 1);

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
(13, 'CTK-240705001', 'Klinik Kecantikan [Basic]', 375000, NULL, 'aktif'),
(14, 'CTK-240705002', 'Klinik Kecantikan [Business]', 575000, NULL, 'aktif');

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
(25, 'FNC-240704003', 'rama', 'rama@gmail.com', NULL, '$2y$12$QRjI/p0rcx8WqSLwy12p.ulBjzkKB8ADYWLzy79F3u5CJ47.cnAsy', '0849289428', 'finance', 'nonaktif', NULL, '2024-07-04 03:48:03', '2024-07-04 04:55:59'),
(26, 'FNC-240709001', 'finance tios', 'finance@gmail.com', NULL, '$2y$12$tp7za6.2QfbQYCFDFOXoa.BvXh0G9ZjwbJQ8EvILs6uQ9zpZLdQbS', '0492924', 'finance', 'aktif', NULL, '2024-07-09 15:49:28', '2024-07-09 22:37:57'),
(27, 'SPP-240710001', 'irgi', 'irgi123@gmail.com', NULL, '$2y$12$xnNoieT7D5ud4bB3/NUFd.fovOkzEg2FI9A2WPKa15j14neGzvyY.', '097979696', 'support', 'aktif', NULL, '2024-07-09 21:46:25', '2024-07-09 21:46:25');

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
ALTER TABLE `pertanyaan` ADD FULLTEXT KEY `ft_index` (`pertanyaan`);

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
  MODIFY `idpertanyaan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `idpesanan` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `produkjasa`
--
ALTER TABLE `produkjasa`
  MODIFY `idproduk` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD CONSTRAINT `fk_pertanyaan_user1` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_pesanan_metodebayar1` FOREIGN KEY (`idbayar`) REFERENCES `metodebayar` (`idbayar`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pesanan_produkjasa` FOREIGN KEY (`idproduk`) REFERENCES `produkjasa` (`idproduk`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pesanan_user1` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
