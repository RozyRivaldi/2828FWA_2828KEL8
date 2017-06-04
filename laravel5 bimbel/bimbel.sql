-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Mei 2017 pada 06.59
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bimbel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bimbel`
--

CREATE TABLE IF NOT EXISTS `bimbel` (
`id` int(10) unsigned NOT NULL,
  `mata_pelajaran` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `bimbel`
--

INSERT INTO `bimbel` (`id`, `mata_pelajaran`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, 'mtk', 'susah bingits', '2017-05-16 15:58:55', '2017-05-16 15:58:55'),
(3, 'fisika', 'kaacau', '2017-05-17 05:03:59', '2017-05-17 05:03:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_bimbel`
--

CREATE TABLE IF NOT EXISTS `hasil_bimbel` (
`id` int(10) unsigned NOT NULL,
  `id_pelajar` int(10) unsigned NOT NULL,
  `id_bimbel` int(10) unsigned NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
`id` int(10) unsigned NOT NULL,
  `id_pelajar` int(10) unsigned NOT NULL,
  `id_ruangan` int(10) unsigned NOT NULL,
  `id_tutor_bimbel` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keahlian`
--

CREATE TABLE IF NOT EXISTS `keahlian` (
`id` int(10) unsigned NOT NULL,
  `keahlian` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keahlian_tutor`
--

CREATE TABLE IF NOT EXISTS `keahlian_tutor` (
`id` int(10) unsigned NOT NULL,
  `id_keahlian` int(10) unsigned NOT NULL,
  `id_tutor` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_05_14_153718_create_table_pengguna', 1),
('2017_05_14_154327_create_table_pelajar', 2),
('2017_05_14_154914_create_table_tutor', 2),
('2017_05_14_155724_create_table_bimbel', 3),
('2017_05_14_160037_create_table_tutor_bimbel', 4),
('2017_05_14_160702_create_table_ruangan', 5),
('2017_05_14_160845_create_table_jadwal', 6),
('2017_05_14_161744_create_table_keahlian', 6),
('2017_05_14_162008_create_table_keahlian_tutor', 6),
('2017_05_14_162522_create_table_hasil_bimbel', 6),
('2017_05_18_122823_crete_table_peran', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelajar`
--

CREATE TABLE IF NOT EXISTS `pelajar` (
`id` int(10) unsigned NOT NULL,
  `nim` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `pengguna_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `pelajar`
--

INSERT INTO `pelajar` (`id`, `nim`, `nama`, `alamat`, `pengguna_id`, `created_at`, `updated_at`) VALUES
(8, '1315015001', 'David', 'Balikpapan', 24, '2017-05-18 05:04:44', '2017-05-18 05:05:20'),
(9, '1315015035', 'edo', 'edo', 26, '2017-05-18 22:50:27', '2017-05-18 22:50:27'),
(10, '', '', '', 27, '2017-05-19 23:37:07', '2017-05-19 23:37:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
`id` int(10) unsigned NOT NULL,
  `nama_pengguna` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama_pengguna`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(22, 'upik', 'upik', NULL, '2017-05-16 15:58:08', '2017-05-16 15:58:08'),
(23, 'admin', 'admin', NULL, '2017-05-17 04:46:59', '2017-05-17 04:46:59'),
(24, 'david', 'david', NULL, '2017-05-18 05:04:40', '2017-05-18 05:10:10'),
(25, 'edo', 'edo1234', NULL, '2017-05-18 22:35:06', '2017-05-18 22:35:06'),
(26, 'edo', 'jancyuk', NULL, '2017-05-18 22:50:26', '2017-05-18 22:50:26'),
(27, '', '', NULL, '2017-05-19 23:37:06', '2017-05-19 23:37:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE IF NOT EXISTS `ruangan` (
`id` int(10) unsigned NOT NULL,
  `kode_ruangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`id`, `kode_ruangan`, `created_at`, `updated_at`) VALUES
(1, '1223', '2017-05-17 05:30:07', '2017-05-17 05:30:07'),
(2, '406', '2017-05-17 05:30:46', '2017-05-17 05:30:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tutor`
--

CREATE TABLE IF NOT EXISTS `tutor` (
`id` int(10) unsigned NOT NULL,
  `nip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `pengguna_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tutor`
--

INSERT INTO `tutor` (`id`, `nip`, `nama`, `email`, `alamat`, `pengguna_id`, `created_at`, `updated_at`) VALUES
(1, '1212121213', 'upik', 'vkhvhkhh@cyuk', 'bruberhbvjherbv', 22, '2017-05-16 15:58:09', '2017-05-16 15:58:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tutor_bimbel`
--

CREATE TABLE IF NOT EXISTS `tutor_bimbel` (
`id` int(10) unsigned NOT NULL,
  `id_tutor` int(10) unsigned NOT NULL,
  `id_bimbel` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bimbel`
--
ALTER TABLE `bimbel`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_bimbel`
--
ALTER TABLE `hasil_bimbel`
 ADD PRIMARY KEY (`id`), ADD KEY `hasil_bimbel_id_pelajar_foreign` (`id_pelajar`), ADD KEY `hasil_bimbel_id_bimbel_foreign` (`id_bimbel`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
 ADD PRIMARY KEY (`id`), ADD KEY `jadwal_id_pelajar_foreign` (`id_pelajar`), ADD KEY `jadwal_id_ruangan_foreign` (`id_ruangan`), ADD KEY `jadwal_id_tutor_bimbel_foreign` (`id_tutor_bimbel`);

--
-- Indexes for table `keahlian`
--
ALTER TABLE `keahlian`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keahlian_tutor`
--
ALTER TABLE `keahlian_tutor`
 ADD PRIMARY KEY (`id`), ADD KEY `keahlian_tutor_id_keahlian_foreign` (`id_keahlian`), ADD KEY `keahlian_tutor_id_tutor_foreign` (`id_tutor`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pelajar`
--
ALTER TABLE `pelajar`
 ADD PRIMARY KEY (`id`), ADD KEY `pelajar_pengguna_id_foreign` (`pengguna_id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
 ADD PRIMARY KEY (`id`), ADD KEY `tutor_pengguna_id_foreign` (`pengguna_id`);

--
-- Indexes for table `tutor_bimbel`
--
ALTER TABLE `tutor_bimbel`
 ADD PRIMARY KEY (`id`), ADD KEY `tutor_bimbel_id_tutor_foreign` (`id_tutor`), ADD KEY `tutor_bimbel_id_bimbel_foreign` (`id_bimbel`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bimbel`
--
ALTER TABLE `bimbel`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hasil_bimbel`
--
ALTER TABLE `hasil_bimbel`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `keahlian`
--
ALTER TABLE `keahlian`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `keahlian_tutor`
--
ALTER TABLE `keahlian_tutor`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pelajar`
--
ALTER TABLE `pelajar`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tutor_bimbel`
--
ALTER TABLE `tutor_bimbel`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `hasil_bimbel`
--
ALTER TABLE `hasil_bimbel`
ADD CONSTRAINT `hasil_bimbel_id_bimbel_foreign` FOREIGN KEY (`id_bimbel`) REFERENCES `bimbel` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `hasil_bimbel_id_pelajar_foreign` FOREIGN KEY (`id_pelajar`) REFERENCES `pelajar` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
ADD CONSTRAINT `jadwal_id_pelajar_foreign` FOREIGN KEY (`id_pelajar`) REFERENCES `pelajar` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `jadwal_id_ruangan_foreign` FOREIGN KEY (`id_ruangan`) REFERENCES `ruangan` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `jadwal_id_tutor_bimbel_foreign` FOREIGN KEY (`id_tutor_bimbel`) REFERENCES `tutor_bimbel` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `keahlian_tutor`
--
ALTER TABLE `keahlian_tutor`
ADD CONSTRAINT `keahlian_tutor_id_keahlian_foreign` FOREIGN KEY (`id_keahlian`) REFERENCES `keahlian` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `keahlian_tutor_id_tutor_foreign` FOREIGN KEY (`id_tutor`) REFERENCES `tutor` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pelajar`
--
ALTER TABLE `pelajar`
ADD CONSTRAINT `pelajar_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tutor`
--
ALTER TABLE `tutor`
ADD CONSTRAINT `tutor_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tutor_bimbel`
--
ALTER TABLE `tutor_bimbel`
ADD CONSTRAINT `tutor_bimbel_id_bimbel_foreign` FOREIGN KEY (`id_bimbel`) REFERENCES `bimbel` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `tutor_bimbel_id_tutor_foreign` FOREIGN KEY (`id_tutor`) REFERENCES `tutor` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
