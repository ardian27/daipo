-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 20, 2018 at 09:08 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_daipo`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_divisi`
--

CREATE TABLE `jenis_divisi` (
  `id_devisi` int(11) NOT NULL,
  `divisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_divisi`
--

INSERT INTO `jenis_divisi` (`id_devisi`, `divisi`) VALUES
(1, 'Poli Gigi'),
(2, 'Poli Anak'),
(3, 'Poli Penyakit Dalam'),
(4, 'Poli Jantung');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_masalah`
--

CREATE TABLE `jenis_masalah` (
  `id_jenis_masalah` int(11) NOT NULL,
  `masalah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_masalah`
--

INSERT INTO `jenis_masalah` (`id_jenis_masalah`, `masalah`) VALUES
(1, 'Registrasi Ganda'),
(2, 'Salah Ruangan'),
(3, 'Salah / Ganti Debitur'),
(4, 'Ganti Kelas Pasien');

-- --------------------------------------------------------

--
-- Table structure for table `masalah`
--

CREATE TABLE `masalah` (
  `id_masalah` int(11) NOT NULL,
  `nama_pelapor` varchar(20) NOT NULL,
  `id_jenis_masalah` int(11) NOT NULL,
  `waktu_pelaporan` datetime NOT NULL,
  `detail_masalah` text NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masalah`
--

INSERT INTO `masalah` (`id_masalah`, `nama_pelapor`, `id_jenis_masalah`, `waktu_pelaporan`, `detail_masalah`, `status`) VALUES
(10001, 'Aliando', 3, '2018-11-12 15:36:38', 'Pasian Kelas I VVI 306 Kaburs', ''),
(10002, 'Andri Rahmat', 1, '2018-11-12 15:50:20', 'asdas', 'Pending'),
(10003, 'dsdas', 2, '2018-11-12 15:50:29', 'asdasdsad', 'Selesai'),
(10004, 'zubaedah', 4, '2018-11-27 14:44:24', 'mau ke kelas yang lebih mahal, soalnya anaknya udah kaya sekarang', 'Menunggu Eksekusi');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1542013776),
('m150214_044831_init_user', 1545218351);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `divisi` varchar(20) NOT NULL,
  `telepon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `divisi`, `telepon`) VALUES
('3234234', 'Ardiansyah', 'IT / ADMIN 1', 24434234),
('3234234234324', 'Maulana Ihsan', 'IT / Admin 2', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `penyelesaian`
--

CREATE TABLE `penyelesaian` (
  `id_penyelesaian` varchar(20) NOT NULL,
  `id_masalah` varchar(20) NOT NULL,
  `id_pegawai` varchar(20) NOT NULL,
  `waktu_penyelesaian` time NOT NULL,
  `tgl_penyelesaian` date NOT NULL,
  `deskripsi_penyelesaian` text NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timezone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `created_at`, `updated_at`, `full_name`, `timezone`) VALUES
(1, 1, '2018-12-19 04:19:11', NULL, 'the one', NULL),
(2, 2, '2018-12-19 04:27:28', '2018-12-19 04:27:28', 'a', NULL),
(3, 3, '2018-12-19 08:44:18', '2018-12-19 08:44:18', 'xxx', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id_riwayat` int(11) NOT NULL,
  `id_tiket` int(11) NOT NULL,
  `riwayat` int(11) NOT NULL,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `can_admin` smallint(6) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `created_at`, `updated_at`, `can_admin`) VALUES
(1, 'Admin', '2018-12-19 04:19:11', NULL, 1),
(2, 'User', '2018-12-19 04:19:11', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `status` smallint(6) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `access_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logged_in_ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logged_in_at` timestamp NULL DEFAULT NULL,
  `created_ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  `banned_reason` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `role_id`, `status`, `email`, `username`, `password`, `auth_key`, `access_token`, `logged_in_ip`, `logged_in_at`, `created_ip`, `created_at`, `updated_at`, `banned_at`, `banned_reason`) VALUES
(1, 1, 1, 'neo@neo.com', 'isan', '$2y$13$xXDjKgVN3B1dKTbqfh.AM.aQdlyIKvoF/KzGp8cCGdnhbEQ7JG1Hu', 'XBYW9Oxj4KQ05-IGJBlRxp6QP_ien2yI', '6y8AZPF5nDue1ZspJzYkSsVTYdiiRa2g', '::1', '2018-12-19 22:52:55', NULL, '2018-12-19 04:19:11', '2018-12-19 08:45:35', NULL, NULL),
(2, 2, 1, 'aaa@f.com', 'axeldi', '$2y$13$uOvq80B5P2HRynXMGfAEl.dJula8f9a2FZcHb9zbv08jQsJW3XiJe', NULL, NULL, '::1', '2018-12-19 04:28:34', NULL, '2018-12-19 04:27:28', '2018-12-19 04:27:28', NULL, NULL),
(3, 2, 1, 'aaaaaa@gmail.com', 'xxx', '$2y$13$UKfqqKXJOBCCYs9q.nC.WuN5qJ/.zHqDBHqMNZ.dtboZid4EMMrhS', NULL, NULL, NULL, NULL, NULL, '2018-12-19 08:44:18', '2018-12-19 08:44:18', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_auth`
--

CREATE TABLE `user_auth` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provider_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provider_attributes` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `type` smallint(6) NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `expired_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_divisi`
--
ALTER TABLE `jenis_divisi`
  ADD PRIMARY KEY (`id_devisi`);

--
-- Indexes for table `jenis_masalah`
--
ALTER TABLE `jenis_masalah`
  ADD PRIMARY KEY (`id_jenis_masalah`);

--
-- Indexes for table `masalah`
--
ALTER TABLE `masalah`
  ADD PRIMARY KEY (`id_masalah`),
  ADD KEY `jenis_masalah` (`id_jenis_masalah`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_user_id` (`user_id`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD KEY `masalah` (`id_tiket`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email` (`email`),
  ADD UNIQUE KEY `user_username` (`username`),
  ADD KEY `user_role_id` (`role_id`);

--
-- Indexes for table `user_auth`
--
ALTER TABLE `user_auth`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_auth_provider_id` (`provider_id`),
  ADD KEY `user_auth_user_id` (`user_id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_token_token` (`token`),
  ADD KEY `user_token_user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_divisi`
--
ALTER TABLE `jenis_divisi`
  MODIFY `id_devisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jenis_masalah`
--
ALTER TABLE `jenis_masalah`
  MODIFY `id_jenis_masalah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `masalah`
--
ALTER TABLE `masalah`
  MODIFY `id_masalah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10005;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_auth`
--
ALTER TABLE `user_auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `masalah`
--
ALTER TABLE `masalah`
  ADD CONSTRAINT `jenis_masalah` FOREIGN KEY (`id_jenis_masalah`) REFERENCES `jenis_masalah` (`id_jenis_masalah`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD CONSTRAINT `masalah` FOREIGN KEY (`id_tiket`) REFERENCES `masalah` (`id_masalah`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_role_id` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

--
-- Constraints for table `user_auth`
--
ALTER TABLE `user_auth`
  ADD CONSTRAINT `user_auth_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `user_token`
--
ALTER TABLE `user_token`
  ADD CONSTRAINT `user_token_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
