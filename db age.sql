-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.38-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for agekom
CREATE DATABASE IF NOT EXISTS `agekom` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `agekom`;

-- Dumping structure for table agekom.activity_log
CREATE TABLE IF NOT EXISTS `activity_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` int(11) DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `properties` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table agekom.activity_log: ~2 rows (approximately)
/*!40000 ALTER TABLE `activity_log` DISABLE KEYS */;
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_id`, `subject_type`, `causer_id`, `causer_type`, `properties`, `created_at`, `updated_at`) VALUES
	(1, 'default', 'Look mum, I logged something', NULL, 'App\\Mos', 1, 'App\\User', '{"nama_os":"os"}', '2019-05-04 02:21:35', '2019-05-04 02:21:35'),
	(2, 'default', 'Look mum, I logged something', NULL, 'App\\Mos', 1, 'App\\User', '{"nama_os":"os"}', '2019-05-04 02:22:04', '2019-05-04 02:22:04'),
	(3, 'default', 'updated', 1, 'App\\User', 1, 'App\\User', '{"attributes":{"name":"admin"},"old":{"name":"admin"}}', '2019-05-04 02:25:19', '2019-05-04 02:25:19'),
	(4, 'default', 'updated', 1, 'App\\User', 1, 'App\\User', '{"attributes":{"name":"admin"},"old":{"name":"admin"}}', '2019-05-05 14:33:19', '2019-05-05 14:33:19');
/*!40000 ALTER TABLE `activity_log` ENABLE KEYS */;

-- Dumping structure for table agekom.detail_laptop
CREATE TABLE IF NOT EXISTS `detail_laptop` (
  `kd_detail_laptop` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) DEFAULT NULL,
  `tipe` varchar(50) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `id_merk` int(11) DEFAULT NULL,
  `layar` varchar(10) DEFAULT NULL,
  `kd_procesor` int(11) DEFAULT NULL,
  `kd_hdd` int(11) DEFAULT NULL,
  `kd_ram_laptop` int(11) DEFAULT NULL,
  `kd_vga` int(11) DEFAULT NULL,
  `kd_os` int(11) DEFAULT NULL,
  `aksesoris` varchar(50) DEFAULT NULL,
  `H1` int(11) DEFAULT NULL,
  `H2` int(11) DEFAULT NULL,
  `H3` int(11) DEFAULT NULL,
  `odd` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kd_detail_laptop`),
  KEY `kd_procesor` (`kd_procesor`),
  KEY `kd_hdd` (`kd_hdd`),
  KEY `kd_ram` (`kd_ram_laptop`),
  KEY `kd_vga` (`kd_vga`),
  KEY `kd_os` (`kd_os`),
  KEY `id_merk` (`id_merk`)
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=latin1;

-- Dumping data for table agekom.detail_laptop: ~10 rows (approximately)
/*!40000 ALTER TABLE `detail_laptop` DISABLE KEYS */;
INSERT INTO `detail_laptop` (`kd_detail_laptop`, `image`, `tipe`, `color`, `kategori`, `id_merk`, `layar`, `kd_procesor`, `kd_hdd`, `kd_ram_laptop`, `kd_vga`, `kd_os`, `aksesoris`, `H1`, `H2`, `H3`, `odd`, `created_at`, `updated_at`) VALUES
	(98, '07-2019-05-2019-lenovo.jpg', 'Ideapad 330-14IGM', 'Onyx Black', 1, 5, '14 HD', 10, 2, 20, 9, 16, 'BAG', 3960000, 3999000, 4100000, '2', '2019-07-17 09:04:23', '2019-07-17 09:07:14'),
	(99, '07-2019-lenovo-ideapad-330-14ast.jpg', 'IdeaPad 330-14AST', 'Onyx Black/Platinum Grey', 1, 5, '14 inch', 11, 2, 20, 9, 1, 'BAG', 3785000, 3849000, 3913000, '1', '2019-07-17 09:17:11', '2019-07-17 09:17:11'),
	(105, '07-2019-X555QA-BX101T.jpg', 'X555QA-BX101T', 'Black', 1, 3, '14 inch', 21, 1, 20, 11, 1, 'Tas', 5460000, 5599000, 5699000, '1', '2019-07-17 10:29:21', '2019-07-17 10:29:21'),
	(106, '07-2019-076f6d8092f23d186ac911be543a1783.jpg', 'Ideapad 330-141GM 10ID', 'Onyx Black', 1, 5, '14 inch', 10, 2, 20, 9, 16, 'BAG', 5599000, 5599000, 5599000, '1', '2019-07-17 10:38:52', '2019-07-17 10:39:40'),
	(107, '07-2019-X441BA-GA913T.jpg', 'x445la', 'Black', 1, 3, '14 inch', 17, 1, 20, 5, 1, 'Tas', 3997000, 5099000, 5199000, '1', '2019-07-17 14:41:28', '2019-07-17 14:41:57'),
	(108, NULL, 'X441BA-GA913T', 'Brown Black', 1, 3, '14 inch', 11, 2, 20, 23, 18, 'Tas', 3997000, 4099000, 4199000, '1', '2019-07-17 14:42:41', '2019-07-17 14:42:41'),
	(109, NULL, '240 G6 03PA ', 'Black', 1, 8, '14 inch', 18, 1, 20, 8, 19, 'Tas', 6250000, 6449999, 6549999, '1', '2019-07-17 14:42:41', '2019-07-17 14:42:41'),
	(110, NULL, 'PREDATOR NITRO 5 ', 'Black', 1, 11, '15.6 inch', 19, 1, 21, 24, 19, 'Tas', 11589000, 12199000, 12299000, '2', '2019-07-17 14:42:41', '2019-07-17 14:42:41'),
	(111, NULL, 'Vostro 14-3468', 'Black', 1, 12, '14 inch', 18, 1, 20, 8, 19, 'Tas', 5769000, 5949000, 6049000, '1', '2019-07-17 14:42:41', '2019-07-17 14:42:41'),
	(112, '07-2019-X555QA-BX101T.jpg', 'UX331UN-EG105T', 'BLUE NIL', 1, 3, '13.3 inch', 20, 3, 24, 25, 19, 'Tas', 17860000, 18999000, 19099000, '2', '2019-07-17 14:42:42', '2019-07-17 14:43:18');
/*!40000 ALTER TABLE `detail_laptop` ENABLE KEYS */;

-- Dumping structure for table agekom.detail_proyektor
CREATE TABLE IF NOT EXISTS `detail_proyektor` (
  `kd_dt_pro` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) DEFAULT NULL,
  `kd_merk` int(11) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `kd_tipe_pro` int(11) DEFAULT NULL,
  `kd_ktg_proyek` int(11) DEFAULT NULL,
  `kd_jenis_pro` int(11) DEFAULT NULL,
  `kd_int_pro` int(11) DEFAULT NULL,
  `detail_pro` longtext,
  `H1` varchar(50) DEFAULT NULL,
  `H2` varchar(50) DEFAULT NULL,
  `H3` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kd_dt_pro`),
  KEY `merk` (`kd_merk`),
  KEY `tipe` (`kd_tipe_pro`),
  KEY `kategori` (`kd_ktg_proyek`),
  KEY `jenis_pro` (`kd_jenis_pro`),
  KEY `its_pro` (`kd_int_pro`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table agekom.detail_proyektor: ~1 rows (approximately)
/*!40000 ALTER TABLE `detail_proyektor` DISABLE KEYS */;
INSERT INTO `detail_proyektor` (`kd_dt_pro`, `image`, `kd_merk`, `model`, `kd_tipe_pro`, `kd_ktg_proyek`, `kd_jenis_pro`, `kd_int_pro`, `detail_pro`, `H1`, `H2`, `H3`, `created_at`, `updated_at`) VALUES
	(4, NULL, 4, 'XM44', 2, 9, 2, 2, 'XGA(1920x1080)', '4000000', '4300000', '0', '2019-05-31 08:53:50', '2019-05-31 09:05:40');
/*!40000 ALTER TABLE `detail_proyektor` ENABLE KEYS */;

-- Dumping structure for table agekom.int_pro
CREATE TABLE IF NOT EXISTS `int_pro` (
  `kd_int_pro` int(11) NOT NULL AUTO_INCREMENT,
  `nama_int` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kd_int_pro`),
  KEY `its_pro` (`nama_int`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table agekom.int_pro: ~1 rows (approximately)
/*!40000 ALTER TABLE `int_pro` DISABLE KEYS */;
INSERT INTO `int_pro` (`kd_int_pro`, `nama_int`, `created_at`, `updated_at`) VALUES
	(2, '3300AL', '2019-05-20 09:03:40', '2019-05-20 09:03:40');
/*!40000 ALTER TABLE `int_pro` ENABLE KEYS */;

-- Dumping structure for table agekom.ktg_proyektor
CREATE TABLE IF NOT EXISTS `ktg_proyektor` (
  `kd_ktg_proyek` int(11) NOT NULL AUTO_INCREMENT,
  `ktg_proyektor` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kd_ktg_proyek`),
  KEY `ktg_proyektor` (`ktg_proyektor`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table agekom.ktg_proyektor: ~2 rows (approximately)
/*!40000 ALTER TABLE `ktg_proyektor` DISABLE KEYS */;
INSERT INTO `ktg_proyektor` (`kd_ktg_proyek`, `ktg_proyektor`, `created_at`, `updated_at`) VALUES
	(7, 'gaming', '2019-05-18 21:30:13', '2019-05-18 21:30:13'),
	(8, 'gaminga', '2019-05-18 21:30:22', '2019-05-18 21:30:22'),
	(9, 'PORTABLE', NULL, NULL);
/*!40000 ALTER TABLE `ktg_proyektor` ENABLE KEYS */;

-- Dumping structure for table agekom.log
CREATE TABLE IF NOT EXISTS `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `kode` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=271 DEFAULT CHARSET=latin1;

-- Dumping data for table agekom.log: ~99 rows (approximately)
/*!40000 ALTER TABLE `log` DISABLE KEYS */;
INSERT INTO `log` (`id`, `user_id`, `name`, `kode`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(156, '1', 'admin', NULL, 'Create Ram Laptop', '2019-05-20 06:16:21', '2019-05-20 06:16:21', NULL),
	(157, '1', 'admin', NULL, 'Update Ram Laptop', '2019-05-20 06:16:43', '2019-05-20 06:16:43', NULL),
	(158, '1', 'admin', '3', 'Delete Ram Laptop', '2019-05-20 06:23:37', '2019-05-20 06:23:37', NULL),
	(159, '1', 'admin', '1', 'Create Ram Laptop', '2019-05-20 06:23:54', '2019-05-20 06:23:54', NULL),
	(160, '1', 'admin', '1', 'Create Ram Laptop', '2019-05-20 06:24:14', '2019-05-20 06:24:14', NULL),
	(161, '1', 'admin', '1', 'Create Ram Laptop', '2019-05-20 06:24:27', '2019-05-20 06:24:27', NULL),
	(162, '1', 'admin', '2', 'Update Ram Laptop', '2019-05-20 06:24:51', '2019-05-20 06:24:51', NULL),
	(163, '1', 'admin', '1', 'Delete HDD Laptop', '2019-05-20 08:59:07', '2019-05-20 08:59:07', NULL),
	(164, '1', 'admin', '2', 'Delete HDD Laptop', '2019-05-20 09:02:01', '2019-05-20 09:02:01', NULL),
	(165, '1', 'admin', '2', 'Delete HDD Laptop', '2019-05-20 09:02:16', '2019-05-20 09:02:16', NULL),
	(166, '1', 'admin', '2', 'Delete HDD Laptop', '2019-05-20 09:03:29', '2019-05-20 09:03:29', NULL),
	(167, '1', 'admin', '3', 'Delete HDD Laptop', '2019-05-20 09:03:33', '2019-05-20 09:03:33', NULL),
	(168, '1', 'admin', '1', 'Delete HDD Laptop', '2019-05-20 09:03:40', '2019-05-20 09:03:40', NULL),
	(169, '1', 'admin', '1', 'Create Jenis Proyektor', '2019-05-20 09:47:18', '2019-05-20 09:47:18', NULL),
	(170, '1', 'admin', '2', 'Update Jenis Proyektor', '2019-05-20 09:47:31', '2019-05-20 09:47:31', NULL),
	(171, '1', 'admin', '3', 'Delete Jenis Proyektor', '2019-05-20 09:47:34', '2019-05-20 09:47:34', NULL),
	(172, '1', 'admin', '1', ' Create Data Laptop', '2019-05-21 08:30:10', '2019-05-21 08:30:10', NULL),
	(173, '1', 'admin', '1', ' Create Data Laptop', '2019-05-21 08:32:08', '2019-05-21 08:32:08', NULL),
	(174, '1', 'admin', '2', 'Update Data Laptop', '2019-05-21 08:39:11', '2019-05-21 08:39:11', NULL),
	(175, '1', 'admin', '2', 'Update Data Laptop', '2019-05-21 08:39:38', '2019-05-21 08:39:38', NULL),
	(176, '1', 'admin', '2', 'Update Data Laptop', '2019-05-21 08:40:14', '2019-05-21 08:40:14', NULL),
	(177, '1', 'admin', '2', 'Update Data Laptop', '2019-05-21 08:40:49', '2019-05-21 08:40:49', NULL),
	(178, '1', 'admin', '2', 'Update Data Laptop', '2019-05-21 08:41:30', '2019-05-21 08:41:30', NULL),
	(179, '1', 'admin', '1', 'Create Jenis Proyektor', '2019-05-23 09:11:18', '2019-05-23 09:11:18', NULL),
	(180, '1', 'admin', '1', 'Create Tipe Proyektor', '2019-05-23 09:11:47', '2019-05-23 09:11:47', NULL),
	(181, '1', 'admin', '1', ' Create Data proyektor', '2019-05-23 09:13:13', '2019-05-23 09:13:13', NULL),
	(182, '1', 'admin', NULL, 'Delete Data Laptop', '2019-05-25 11:56:44', '2019-05-25 11:56:44', NULL),
	(183, '1', 'admin', NULL, 'Delete Data Laptop', '2019-05-25 11:56:51', '2019-05-25 11:56:51', NULL),
	(184, '1', 'admin', NULL, 'Delete Data proyektor', '2019-05-31 08:42:19', '2019-05-31 08:42:19', NULL),
	(185, '1', 'admin', NULL, 'Import Data Laptop From Excel', '2019-05-31 08:52:34', '2019-05-31 08:52:34', NULL),
	(186, '1', 'admin', NULL, 'Import Data Laptop From Excel', '2019-05-31 08:53:51', '2019-05-31 08:53:51', NULL),
	(187, '1', 'admin', NULL, 'Create OS Laptop', '2019-05-31 08:54:22', '2019-05-31 08:54:22', NULL),
	(188, '1', 'admin', NULL, 'Create OS Laptop', '2019-05-31 08:54:35', '2019-05-31 08:54:35', NULL),
	(189, '1', 'admin', NULL, 'Update Data proyektor', '2019-05-31 09:05:40', '2019-05-31 09:05:40', NULL),
	(190, '1', 'admin', NULL, 'Create OS Laptop', '2019-05-31 09:06:06', '2019-05-31 09:06:06', NULL),
	(191, '1', 'admin', NULL, 'Create OS Laptop', '2019-05-31 09:06:31', '2019-05-31 09:06:31', NULL),
	(192, '1', 'admin', NULL, 'Update Jenis Proyektor', '2019-05-31 09:07:11', '2019-05-31 09:07:11', NULL),
	(193, '1', 'admin', NULL, 'Update Data Laptop', '2019-05-31 09:25:30', '2019-05-31 09:25:30', NULL),
	(194, '1', 'admin', NULL, 'Update Data Laptop', '2019-06-20 09:25:35', '2019-06-20 09:25:35', NULL),
	(195, '1', 'admin', NULL, 'Update Data Laptop', '2019-06-28 09:02:37', '2019-06-28 09:02:37', NULL),
	(196, '1', 'admin', NULL, 'Update Data Laptop', '2019-06-28 09:03:43', '2019-06-28 09:03:43', NULL),
	(197, '1', 'admin', NULL, 'Update Data Laptop', '2019-06-28 09:06:32', '2019-06-28 09:06:32', NULL),
	(198, '1', 'admin', NULL, 'Update Data Laptop', '2019-06-28 09:06:53', '2019-06-28 09:06:53', NULL),
	(199, '1', 'admin', NULL, 'Update Data Laptop', '2019-06-28 09:08:39', '2019-06-28 09:08:39', NULL),
	(200, '1', 'admin', NULL, 'Update Data Laptop', '2019-06-28 09:09:28', '2019-06-28 09:09:28', NULL),
	(201, '1', 'admin', NULL, 'Update Data Laptop', '2019-06-28 09:09:59', '2019-06-28 09:09:59', NULL),
	(202, '1', 'admin', NULL, 'Update Data Laptop', '2019-06-28 09:15:46', '2019-06-28 09:15:46', NULL),
	(203, '1', 'admin', NULL, 'Update Data Laptop', '2019-06-28 09:16:09', '2019-06-28 09:16:09', NULL),
	(204, '1', 'admin', NULL, 'Update Data Laptop', '2019-06-28 09:17:50', '2019-06-28 09:17:50', NULL),
	(205, '1', 'admin', NULL, 'Update Data Laptop', '2019-06-28 09:18:19', '2019-06-28 09:18:19', NULL),
	(206, '1', 'admin', NULL, 'Update Data Laptop', '2019-06-28 09:21:11', '2019-06-28 09:21:11', NULL),
	(207, '1', 'admin', NULL, 'Update Data Laptop', '2019-06-28 09:22:22', '2019-06-28 09:22:22', NULL),
	(208, '1', 'admin', NULL, 'Update Data Laptop', '2019-06-28 09:24:21', '2019-06-28 09:24:21', NULL),
	(209, '1', 'admin', NULL, 'Update Data Laptop', '2019-06-28 09:25:12', '2019-06-28 09:25:12', NULL),
	(210, '1', 'admin', NULL, 'Update Data Laptop', '2019-06-28 09:27:20', '2019-06-28 09:27:20', NULL),
	(211, '1', 'admin', NULL, 'Update Data Laptop', '2019-06-28 09:27:42', '2019-06-28 09:27:42', NULL),
	(212, '1', 'admin', NULL, 'Update Data Laptop', '2019-06-28 09:28:07', '2019-06-28 09:28:07', NULL),
	(213, '1', 'admin', NULL, 'Update Data Laptop', '2019-06-28 09:28:27', '2019-06-28 09:28:27', NULL),
	(214, '1', 'admin', NULL, 'Update Data Laptop', '2019-06-28 09:28:52', '2019-06-28 09:28:52', NULL),
	(215, '1', 'admin', NULL, 'Delete Data Laptop', '2019-06-28 09:29:01', '2019-06-28 09:29:01', NULL),
	(216, '1', 'admin', NULL, ' Create Data Laptop', '2019-07-11 10:01:09', '2019-07-11 10:01:09', NULL),
	(217, '1', 'admin', NULL, 'Import Data Laptop From Excel', '2019-07-13 10:38:52', '2019-07-13 10:38:52', NULL),
	(218, '1', 'admin', NULL, 'Delete Data Laptop', '2019-07-13 10:40:52', '2019-07-13 10:40:52', NULL),
	(219, '1', 'admin', NULL, 'Import Data Laptop From Excel', '2019-07-13 10:41:13', '2019-07-13 10:41:13', NULL),
	(220, '1', 'admin', NULL, 'Delete Data Laptop', '2019-07-13 10:41:28', '2019-07-13 10:41:28', NULL),
	(221, '1', 'admin', NULL, 'Import Data Laptop From Excel', '2019-07-13 10:42:47', '2019-07-13 10:42:47', NULL),
	(222, '1', 'admin', NULL, ' Create Data Laptop', '2019-07-13 10:45:10', '2019-07-13 10:45:10', NULL),
	(223, '1', 'admin', NULL, 'Update Data Laptop', '2019-07-13 10:46:01', '2019-07-13 10:46:01', NULL),
	(224, '1', 'admin', NULL, 'Update Data Laptop', '2019-07-15 11:00:18', '2019-07-15 11:00:18', NULL),
	(225, '1', 'admin', NULL, 'Update Data Laptop', '2019-07-15 11:05:22', '2019-07-15 11:05:22', NULL),
	(226, '1', 'admin', NULL, 'Delete Data Laptop', '2019-07-15 11:09:56', '2019-07-15 11:09:56', NULL),
	(227, '1', 'admin', NULL, 'Update Data Laptop', '2019-07-15 11:10:37', '2019-07-15 11:10:37', NULL),
	(228, '1', 'admin', NULL, 'Update Data Laptop', '2019-07-15 11:12:19', '2019-07-15 11:12:19', NULL),
	(229, '1', 'admin', NULL, 'Update Data Laptop', '2019-07-15 11:14:12', '2019-07-15 11:14:12', NULL),
	(230, '1', 'admin', NULL, 'Update Data Laptop', '2019-07-15 11:24:52', '2019-07-15 11:24:52', NULL),
	(231, '1', 'admin', NULL, 'Update Data Laptop', '2019-07-15 11:26:03', '2019-07-15 11:26:03', NULL),
	(232, '1', 'admin', NULL, 'Delete Data Laptop', '2019-07-15 11:26:15', '2019-07-15 11:26:15', NULL),
	(233, '1', 'admin', NULL, 'Import Data Laptop From Excel', '2019-07-15 12:21:38', '2019-07-15 12:21:38', NULL),
	(234, '1', 'admin', NULL, 'Import Data Laptop From Excel', '2019-07-15 12:22:04', '2019-07-15 12:22:04', NULL),
	(235, '1', 'admin', NULL, 'Import Data Laptop From Excel', '2019-07-15 12:28:01', '2019-07-15 12:28:01', NULL),
	(236, '1', 'admin', NULL, 'Delete Data Laptop', '2019-07-15 12:28:40', '2019-07-15 12:28:40', NULL),
	(237, '1', 'admin', NULL, 'Import Data Laptop From Excel', '2019-07-15 19:59:22', '2019-07-15 19:59:22', NULL),
	(238, '1', 'admin', NULL, 'Delete Data Laptop', '2019-07-15 20:02:01', '2019-07-15 20:02:01', NULL),
	(239, '1', 'admin', NULL, 'Update Data Laptop', '2019-07-15 21:46:12', '2019-07-15 21:46:12', NULL),
	(240, '1', 'admin', NULL, 'Delete Member', '2019-07-15 21:50:52', '2019-07-15 21:50:52', NULL),
	(241, '1', 'admin', NULL, ' Create Data Laptop', '2019-07-16 10:18:03', '2019-07-16 10:18:03', NULL),
	(242, '1', 'admin', NULL, 'Update Data Laptop', '2019-07-16 10:19:08', '2019-07-16 10:19:08', NULL),
	(243, '1', 'admin', NULL, 'Import Data Laptop From Excel', '2019-07-16 10:19:54', '2019-07-16 10:19:54', NULL),
	(244, '1', 'admin', NULL, 'Update Data Laptop', '2019-07-16 12:04:34', '2019-07-16 12:04:34', NULL),
	(245, '1', 'admin', NULL, ' Create Data Laptop', '2019-07-17 09:04:24', '2019-07-17 09:04:24', NULL),
	(246, '1', 'admin', NULL, 'Update Data Laptop', '2019-07-17 09:07:14', '2019-07-17 09:07:14', NULL),
	(247, '1', 'admin', NULL, ' Create Data Laptop', '2019-07-17 09:17:11', '2019-07-17 09:17:11', NULL),
	(248, '1', 'admin', NULL, 'Import Data Laptop From Excel', '2019-07-17 10:09:25', '2019-07-17 10:09:25', NULL),
	(249, '1', 'admin', NULL, 'Update Data Laptop', '2019-07-17 10:14:48', '2019-07-17 10:14:48', NULL),
	(250, '1', 'admin', NULL, 'Delete Data Laptop', '2019-07-17 10:15:23', '2019-07-17 10:15:23', NULL),
	(251, '1', 'admin', NULL, 'Delete Data Laptop', '2019-07-17 10:16:00', '2019-07-17 10:16:00', NULL),
	(252, '1', 'admin', NULL, 'Delete Data Laptop', '2019-07-17 10:16:07', '2019-07-17 10:16:07', NULL),
	(253, '1', 'admin', NULL, 'Delete Data Laptop', '2019-07-17 10:16:14', '2019-07-17 10:16:14', NULL),
	(254, '1', 'admin', NULL, 'Delete Data Laptop', '2019-07-17 10:16:21', '2019-07-17 10:16:21', NULL),
	(255, '1', 'admin', NULL, 'Create Procesor Laptop', '2019-07-17 10:25:42', '2019-07-17 10:25:42', NULL),
	(256, '1', 'admin', NULL, ' Create Data Laptop', '2019-07-17 10:29:22', '2019-07-17 10:29:22', NULL),
	(257, '1', 'admin', NULL, ' Create Data Laptop', '2019-07-17 10:38:53', '2019-07-17 10:38:53', NULL),
	(258, '1', 'admin', NULL, 'Update Data Laptop', '2019-07-17 10:39:40', '2019-07-17 10:39:40', NULL),
	(259, '1', 'admin', NULL, 'Import Data Laptop From Excel', '2019-07-17 10:40:37', '2019-07-17 10:40:37', NULL),
	(260, '1', 'admin', NULL, 'Create Member ', '2019-07-17 10:47:03', '2019-07-17 10:47:03', NULL),
	(261, '1', 'admin', NULL, 'Delete Data Laptop', '2019-07-17 13:20:43', '2019-07-17 13:20:43', NULL),
	(262, '1', 'admin', NULL, 'Delete Data Laptop', '2019-07-17 13:20:50', '2019-07-17 13:20:50', NULL),
	(263, '1', 'admin', NULL, 'Delete Data Laptop', '2019-07-17 13:20:56', '2019-07-17 13:20:56', NULL),
	(264, '1', 'admin', NULL, 'Delete Data Laptop', '2019-07-17 13:21:01', '2019-07-17 13:21:01', NULL),
	(265, '1', 'admin', NULL, 'Delete Data Laptop', '2019-07-17 13:21:08', '2019-07-17 13:21:08', NULL),
	(266, '1', 'admin', NULL, ' Create Data Laptop', '2019-07-17 14:41:29', '2019-07-17 14:41:29', NULL),
	(267, '1', 'admin', NULL, 'Update Data Laptop', '2019-07-17 14:41:57', '2019-07-17 14:41:57', NULL),
	(268, '1', 'admin', NULL, 'Import Data Laptop From Excel', '2019-07-17 14:42:42', '2019-07-17 14:42:42', NULL),
	(269, '1', 'admin', NULL, 'Update Data Laptop', '2019-07-17 14:43:18', '2019-07-17 14:43:18', NULL),
	(270, '1', 'admin', NULL, 'Create Member ', '2019-07-17 14:45:46', '2019-07-17 14:45:46', NULL);
/*!40000 ALTER TABLE `log` ENABLE KEYS */;

-- Dumping structure for table agekom.merk_laptop
CREATE TABLE IF NOT EXISTS `merk_laptop` (
  `id_merk` int(11) NOT NULL AUTO_INCREMENT,
  `merk` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_merk`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table agekom.merk_laptop: ~6 rows (approximately)
/*!40000 ALTER TABLE `merk_laptop` DISABLE KEYS */;
INSERT INTO `merk_laptop` (`id_merk`, `merk`, `created_at`, `updated_at`) VALUES
	(2, 'Toshiba', NULL, NULL),
	(3, 'Asus', NULL, NULL),
	(4, 'Samsung', NULL, NULL),
	(5, 'lenovo', NULL, NULL),
	(8, 'Hp', NULL, NULL),
	(11, 'Acer', NULL, NULL),
	(12, 'Dell', NULL, NULL);
/*!40000 ALTER TABLE `merk_laptop` ENABLE KEYS */;

-- Dumping structure for table agekom.merk_proyektor
CREATE TABLE IF NOT EXISTS `merk_proyektor` (
  `kd_merk` int(11) NOT NULL AUTO_INCREMENT,
  `merk_pro` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kd_merk`),
  KEY `nama_merk` (`merk_pro`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table agekom.merk_proyektor: ~4 rows (approximately)
/*!40000 ALTER TABLE `merk_proyektor` DISABLE KEYS */;
INSERT INTO `merk_proyektor` (`kd_merk`, `merk_pro`, `created_at`, `updated_at`) VALUES
	(1, 'as', '2019-05-19 20:40:19', '2019-05-31 08:54:22'),
	(3, 'f', '2019-05-19 20:41:00', '2019-05-19 20:41:00'),
	(4, 'BenQ', NULL, '2019-05-31 09:06:06'),
	(5, 'n', '2019-05-31 08:54:35', '2019-05-31 08:54:35');
/*!40000 ALTER TABLE `merk_proyektor` ENABLE KEYS */;

-- Dumping structure for table agekom.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table agekom.migrations: ~2 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table agekom.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table agekom.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table agekom.tb_hdd
CREATE TABLE IF NOT EXISTS `tb_hdd` (
  `kd_hdd` int(11) NOT NULL AUTO_INCREMENT,
  `storage` varchar(50) DEFAULT NULL,
  `kecepatan` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kd_hdd`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table agekom.tb_hdd: ~2 rows (approximately)
/*!40000 ALTER TABLE `tb_hdd` DISABLE KEYS */;
INSERT INTO `tb_hdd` (`kd_hdd`, `storage`, `kecepatan`, `created_at`, `updated_at`) VALUES
	(1, '1TB', '7200rpm', NULL, NULL),
	(2, '500GB', '7200rpm', NULL, NULL),
	(3, '512GB SSD', NULL, NULL, NULL);
/*!40000 ALTER TABLE `tb_hdd` ENABLE KEYS */;

-- Dumping structure for table agekom.tb_jenis
CREATE TABLE IF NOT EXISTS `tb_jenis` (
  `kd_jenis` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kd_jenis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table agekom.tb_jenis: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_jenis` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_jenis` ENABLE KEYS */;

-- Dumping structure for table agekom.tb_jenis_proyektor
CREATE TABLE IF NOT EXISTS `tb_jenis_proyektor` (
  `kd_jenis_pro` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_pro` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kd_jenis_pro`),
  KEY `jenis_pro` (`jenis_pro`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table agekom.tb_jenis_proyektor: ~1 rows (approximately)
/*!40000 ALTER TABLE `tb_jenis_proyektor` DISABLE KEYS */;
INSERT INTO `tb_jenis_proyektor` (`kd_jenis_pro`, `jenis_pro`, `created_at`, `updated_at`) VALUES
	(1, 'ssad', '2019-05-23 09:11:17', '2019-05-23 09:11:17'),
	(2, 'AUDITORIUM', NULL, '2019-05-31 09:07:11');
/*!40000 ALTER TABLE `tb_jenis_proyektor` ENABLE KEYS */;

-- Dumping structure for table agekom.tb_os
CREATE TABLE IF NOT EXISTS `tb_os` (
  `kd_os` int(11) NOT NULL AUTO_INCREMENT,
  `nama_os` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kd_os`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- Dumping data for table agekom.tb_os: ~8 rows (approximately)
/*!40000 ALTER TABLE `tb_os` DISABLE KEYS */;
INSERT INTO `tb_os` (`kd_os`, `nama_os`, `created_at`, `updated_at`) VALUES
	(1, 'Windows 10', NULL, NULL),
	(2, 'Windows 8', NULL, NULL),
	(4, 'Windows 7', NULL, NULL),
	(15, 'Windows 10', NULL, NULL),
	(16, 'W10HOME PPP', NULL, NULL),
	(17, 'Win10HOM', NULL, NULL),
	(18, 'Win10', NULL, NULL),
	(19, 'Win 10 Home ', NULL, NULL);
/*!40000 ALTER TABLE `tb_os` ENABLE KEYS */;

-- Dumping structure for table agekom.tb_procesor
CREATE TABLE IF NOT EXISTS `tb_procesor` (
  `kd_procesor` int(11) NOT NULL AUTO_INCREMENT,
  `nama_procesor` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kd_procesor`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- Dumping data for table agekom.tb_procesor: ~15 rows (approximately)
/*!40000 ALTER TABLE `tb_procesor` DISABLE KEYS */;
INSERT INTO `tb_procesor` (`kd_procesor`, `nama_procesor`, `created_at`, `updated_at`) VALUES
	(3, 'Intel I5 8570', NULL, NULL),
	(6, 'intel i7 7700HQ', NULL, NULL),
	(8, 'intel i7 8570HQ', NULL, NULL),
	(9, 'Intel I5 8570 HK', NULL, NULL),
	(10, 'N4000', NULL, NULL),
	(11, 'AMD A4-9125', NULL, NULL),
	(12, 'AMD A9-9425', NULL, NULL),
	(13, 'AMD A9-9420', NULL, NULL),
	(14, 'AMD RYZEN™ 7 2700U', NULL, NULL),
	(15, 'Core i3-6006U', NULL, NULL),
	(16, 'Core i3-7020U', NULL, NULL),
	(17, 'i5-8250U', NULL, NULL),
	(18, 'Intel Core i3-7020U', NULL, NULL),
	(19, 'i5-8300H', NULL, NULL),
	(20, 'i7-8550U', NULL, NULL),
	(21, 'AMD A10-9620P', NULL, NULL);
/*!40000 ALTER TABLE `tb_procesor` ENABLE KEYS */;

-- Dumping structure for table agekom.tb_ram_laptop
CREATE TABLE IF NOT EXISTS `tb_ram_laptop` (
  `kd_ram_laptop` int(11) NOT NULL AUTO_INCREMENT,
  `kapasitas` varchar(50) DEFAULT NULL,
  `kecepatan` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kd_ram_laptop`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- Dumping data for table agekom.tb_ram_laptop: ~4 rows (approximately)
/*!40000 ALTER TABLE `tb_ram_laptop` DISABLE KEYS */;
INSERT INTO `tb_ram_laptop` (`kd_ram_laptop`, `kapasitas`, `kecepatan`, `type`, `created_at`, `updated_at`) VALUES
	(20, '4GB', '2400mhz', 'DDR4', '2019-05-11 11:59:34', '2019-05-11 11:59:34'),
	(21, '8GB', '2400mhz', 'DDR4', '2019-05-11 11:59:46', '2019-05-11 11:59:46'),
	(23, '4GB', '2400mhz', 'DDR3', '2019-05-20 06:23:54', '2019-05-20 06:23:54'),
	(24, '16GB', '2400mhz', 'DDR4', '2019-05-20 06:24:14', '2019-05-20 06:24:14'),
	(25, '8GB', '2400mhz', 'DDR3', '2019-05-20 06:24:26', '2019-05-20 06:24:51');
/*!40000 ALTER TABLE `tb_ram_laptop` ENABLE KEYS */;

-- Dumping structure for table agekom.tb_vga
CREATE TABLE IF NOT EXISTS `tb_vga` (
  `kd_vga` int(11) NOT NULL AUTO_INCREMENT,
  `nama_vga` varchar(50) DEFAULT NULL,
  `vram` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kd_vga`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- Dumping data for table agekom.tb_vga: ~16 rows (approximately)
/*!40000 ALTER TABLE `tb_vga` DISABLE KEYS */;
INSERT INTO `tb_vga` (`kd_vga`, `nama_vga`, `vram`, `created_at`, `updated_at`) VALUES
	(5, 'NvidiaGeforce MX130', '4GB', NULL, NULL),
	(6, 'NvidiaGeforce GTX 1060', '4GB', NULL, NULL),
	(7, 'NvidiaGeforce GTX 760', '4GB', NULL, NULL),
	(8, 'INTEGRATED', NULL, NULL, NULL),
	(9, 'AMD RADEON™ R4 GRAPHICS', NULL, NULL, NULL),
	(10, 'AMD RADEON™ R3GRAPHICS', NULL, NULL, NULL),
	(11, 'AMD Radeon R5 M530 2GB', NULL, NULL, NULL),
	(12, 'AMD RADEON™ 530 GDDR5 2G', NULL, NULL, NULL),
	(13, 'AMD RADEON™ 540 GDDR5 2G', NULL, NULL, NULL),
	(14, 'NVIDIA® GEFORCE® 920MX (2GB GDDR5)', NULL, NULL, NULL),
	(15, 'NVIDIA GeForce 920MX DDR5 2G', NULL, NULL, NULL),
	(16, 'AMD Radeon 530 GDDR5 2GB', NULL, NULL, NULL),
	(22, 'Nvidia Geforce MX130', NULL, NULL, NULL),
	(23, 'AMD Radeon R5', NULL, NULL, NULL),
	(24, 'GTX 1050 ', NULL, NULL, NULL),
	(25, 'NVIDIA® GeForce  MX150 ', NULL, NULL, NULL);
/*!40000 ALTER TABLE `tb_vga` ENABLE KEYS */;

-- Dumping structure for table agekom.tipe_proyektor
CREATE TABLE IF NOT EXISTS `tipe_proyektor` (
  `kd_tipe_pro` int(11) NOT NULL AUTO_INCREMENT,
  `tipe_pro` varchar(50) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kd_tipe_pro`),
  KEY `tipe_pro` (`tipe_pro`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table agekom.tipe_proyektor: ~1 rows (approximately)
/*!40000 ALTER TABLE `tipe_proyektor` DISABLE KEYS */;
INSERT INTO `tipe_proyektor` (`kd_tipe_pro`, `tipe_pro`, `created_at`, `updated_at`) VALUES
	(1, 'wXA', '2019-05-23 09:11:47', '2019-05-23 09:11:47'),
	(2, 'XGA', NULL, '2019-05-31 09:06:31');
/*!40000 ALTER TABLE `tipe_proyektor` ENABLE KEYS */;

-- Dumping structure for table agekom.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `no_pelanggan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `last_log_in_at` timestamp NULL DEFAULT NULL,
  `current_log_in_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `no_pelanggan` (`no_pelanggan`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table agekom.users: ~9 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `no_pelanggan`, `name`, `email`, `alamat`, `telp`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `level`, `last_log_in_at`, `current_log_in_at`) VALUES
	(1, NULL, 'admin', 'admin@gmail.com', '', '', NULL, '$2y$10$Se60.Ltji7F7lRLRmmCj5.GdgUdRKR9fyJYtqLZ.ZAhO4v4MDl/cO', 'Q6QCOFgG0zwFe2YMtV0muBw50xA1ljY7LYLXZqxxUVOoT6s81ylIFZnOaBjq', '2019-04-08 14:06:00', '2019-05-04 04:36:32', 1, '2019-05-04 04:36:32', '2019-05-04 04:36:32'),
	(6, 'P0006', 'Sutejo', 'bayusegara623@gmail.com', 'Jalan Mayor Jendral Di Panjaitan 20A\r\n6341920', '212121', NULL, '$2y$10$2fhMyKvB0DSJigG.lysPqe4FHr864QNAFZrWmO/19ZaAkFtDhhusm', 'jbSilQiVP2fMbD2L4cMP1XiK8oejfGyn09kvXLX2vuqgcfHdb7fnH5VCetnv', '2019-05-08 02:56:42', '2019-05-08 02:56:42', 2, NULL, NULL),
	(8, 'P0008', 'asa', 'test@gmail.com', 'Jalan Mayor Jendral Di Panjaitan 20A\r\n6341920', '21312312', NULL, '$2y$10$hVnhyFACLV.j7GrSPKl1reRUyGHs67w74wT3CWgGA91wK4qCwLvOy', NULL, '2019-05-13 09:59:46', '2019-05-13 09:59:46', 2, NULL, NULL),
	(9, 'P0009', 'asa', 'test@gmail.com', 'Jalan Mayor Jendral Di Panjaitan 20A\r\n6341920', '21312312', NULL, '$2y$10$5hx91yBxT4jqmvn4PZvcfOyVst/S8XM8nP1Gs5NXP/vFTyjPMu0d.', NULL, '2019-05-13 10:00:51', '2019-05-13 10:00:51', 2, NULL, NULL),
	(10, 'P0010', 'asas', 'gg@gmail.com', 'Jalan Mayor Jendral Di Panjaitan 20A\r\n6341920', '21312312', NULL, '$2y$10$RrgqTi0SgbMo/jKEoC/8x.jlI0n5Q/peKiSdulPlBibENxt6P5PkC', 'FN6ooCn4hmFKsRdUsI5ATwqIvgrFiGjaYz8cHC0k4ZsR30mLI7oCiAkWMt1W', '2019-05-13 10:03:12', '2019-05-13 10:03:12', 2, NULL, NULL),
	(11, 'P0011', 'das', 'as@s.com', 'dsa', '21312312', NULL, '$2y$10$vbUFypYbkG2Vfjmn63G3D.o22oH3qUYrmE6TsP3/JgdgWka0ew2EC', NULL, '2019-05-13 10:04:16', '2019-05-13 10:04:16', 2, NULL, NULL),
	(12, 'P0012', 'sa', 'asa@s', 'sa', 'sa', NULL, '$2y$10$UQCheVmhY1o2rPYdWy8DGOHeS9klj8Pl4H9VfF5LhuYAmEGlLWikS', NULL, '2019-05-13 10:06:38', '2019-05-13 10:06:38', 2, NULL, NULL),
	(14, 'P0014', 'dasd', 'bayusega@gmail.com', 'Jalan Mayor Jendral Di Panjaitan 20A\r\n6341920', '21312312', NULL, '$2y$10$pIjmWGwwbp.4c6bBzXaC5OOLhgVEK0hjC/mNkLiDzU5/Ea2OpZMia', NULL, '2019-07-17 10:47:03', '2019-07-17 10:47:03', 2, NULL, NULL),
	(15, 'P0015', 'ipan', 'ipan@gmail.com', 'jl.podang', '21312312', NULL, '$2y$10$ORi5eglhtIEvTJhWOFuChO1VbMvk0Sg5KaO19X.seGaossqdgyJ4O', NULL, '2019-07-17 14:45:46', '2019-07-17 14:45:46', 2, NULL, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
