-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2016 at 10:40 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jayaam`
--

-- --------------------------------------------------------

--
-- Table structure for table `cleaning`
--

DROP TABLE IF EXISTS `cleaning`;
CREATE TABLE IF NOT EXISTS `cleaning` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `job_code` int(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `approve` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inspections`
--

DROP TABLE IF EXISTS `inspections`;
CREATE TABLE IF NOT EXISTS `inspections` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `job_code` int(10) DEFAULT NULL,
  `irdate` date DEFAULT NULL,
  `std` varchar(20) NOT NULL,
  `batchNo` varchar(20) NOT NULL,
  `supplierName` varchar(20) NOT NULL,
  `pr_sampleNo` int(10) NOT NULL,
  `pr_sample` varchar(20) NOT NULL,
  `pr_minDip` int(10) NOT NULL,
  `pr_remarks` varchar(20) NOT NULL,
  `str_sample` varchar(20) NOT NULL,
  `str_thickness` float NOT NULL,
  `str_galvanizing` float NOT NULL,
  `str_blackWt` float NOT NULL,
  `str_area` float NOT NULL,
  `str_coatingWt` float NOT NULL,
  `str_coatingGms` float NOT NULL,
  `str_microns` text,
  `str_remarks` varchar(20) NOT NULL,
  `ham_sample` varchar(20) NOT NULL,
  `ham_location` varchar(20) NOT NULL,
  `ham_remarks` varchar(20) NOT NULL,
  `elco_sample` varchar(20) NOT NULL,
  `elco_microns` text,
  `elco_remarks` varchar(20) NOT NULL,
  `ann_no` int(10) NOT NULL,
  `ann_description` varchar(20) NOT NULL,
  `ann_uom` int(10) NOT NULL,
  `ann_quantity` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inspections`
--

INSERT INTO `inspections` (`id`, `job_code`, `irdate`, `std`, `batchNo`, `supplierName`, `pr_sampleNo`, `pr_sample`, `pr_minDip`, `pr_remarks`, `str_sample`, `str_thickness`, `str_galvanizing`, `str_blackWt`, `str_area`, `str_coatingWt`, `str_coatingGms`, `str_microns`, `str_remarks`, `ham_sample`, `ham_location`, `ham_remarks`, `elco_sample`, `elco_microns`, `elco_remarks`, `ann_no`, `ann_description`, `ann_uom`, `ann_quantity`, `created_at`, `updated_at`) VALUES
(1, NULL, '2016-04-20', 'IS%3A2629-1985', 'JGPL%2FGal%2FIR-008%', 'BALSARA ENGINEERING ', 12, 'jimmychloride', 3, 'good', 'zinc', 3, 45, 34, 4, 2, 2, '1', 'good', 'zinc', 'dfgh', 'no', 'zinc', '3.2,3.4,4.5,2.4,4.3,3.5,good,', 'good', 12, 'yay', 4, 20, '2016-04-20 05:54:34', '2016-04-20 05:54:34'),
(2, NULL, '2016-04-22', 'IS%3A2629-1985', 'JGPL%2FGal%2FIR-008%', 'BALSARA ENGINEERING ', 3, 'rtyhh', 5, 'g', 'rty', 3, 45, 56, 7, 6, 78, '4', 'g', 'rty', 'chenn', 'b', 'erty', '3.4,4,5.4,6,5.6,7.8,g,', 'g', 12, 'sery', 5, 8, '2016-04-22 04:36:37', '2016-04-22 04:36:37');

-- --------------------------------------------------------

--
-- Table structure for table `labs`
--

DROP TABLE IF EXISTS `labs`;
CREATE TABLE IF NOT EXISTS `labs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stage` varchar(50) DEFAULT NULL,
  `tank_no` int(11) DEFAULT NULL,
  `temp` float DEFAULT NULL,
  `ph` float DEFAULT NULL,
  `concentration` float DEFAULT NULL,
  `add_solution` varchar(50) DEFAULT NULL,
  `replace_tank` varchar(50) DEFAULT NULL,
  `specific_gravity` float DEFAULT NULL,
  `hcl_concentration` float DEFAULT NULL,
  `iron_concentration` float DEFAULT NULL,
  `add_water` float DEFAULT NULL,
  `zinc_ammonium_chloride_content` float DEFAULT NULL,
  `tds_maximum` varchar(50) DEFAULT NULL,
  `chromate_content` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labs`
--

INSERT INTO `labs` (`id`, `stage`, `tank_no`, `temp`, `ph`, `concentration`, `add_solution`, `replace_tank`, `specific_gravity`, `hcl_concentration`, `iron_concentration`, `add_water`, `zinc_ammonium_chloride_content`, `tds_maximum`, `chromate_content`, `created_at`, `updated_at`) VALUES
(1, 'dgr', 1, 23.5, 2.7, 6, 'zinc', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-04-20 05:41:21', '2016-04-20 05:41:21'),
(2, 'pck', 2, 68.2, NULL, NULL, 'sulphur', '2', 1.2, 9, 48, NULL, NULL, NULL, NULL, '2016-04-20 05:42:16', '2016-04-20 05:42:16'),
(3, 'rns', 7, 34.5, 4, NULL, NULL, '1', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2016-04-20 05:43:15', '2016-04-20 05:43:15'),
(4, 'flx', 9, NULL, 4.5, NULL, 'zinc', '5', 1.11, NULL, NULL, NULL, 34.5, NULL, NULL, '2016-04-20 05:44:22', '2016-04-20 05:44:22'),
(5, 'dry', 10, 45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-04-20 05:45:08', '2016-04-20 05:45:08'),
(6, 'glv', 11, 420, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-04-20 05:45:19', '2016-04-20 05:45:19'),
(7, 'que', 12, NULL, 4, NULL, NULL, '2', NULL, NULL, NULL, 0, NULL, '30', NULL, '2016-04-20 05:45:39', '2016-04-20 05:45:39'),
(8, 'pas', 13, 45, 3.4, NULL, 'yes', '3', NULL, NULL, NULL, NULL, NULL, NULL, '0.2', '2016-04-20 05:46:10', '2016-04-20 05:46:10'),
(9, 'dgr', 1, 34.4, 3.1, 10.5, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-04-22 04:05:51', '2016-04-22 04:05:51'),
(10, 'dgr', 1, 45.5, 3, 20, 'zinc', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-04-22 04:10:33', '2016-04-22 04:10:33'),
(11, 'pck', 2, 67.3, NULL, NULL, 'zinc', '4', 1, 10, 48, NULL, NULL, NULL, NULL, '2016-04-22 04:14:59', '2016-04-22 04:14:59'),
(12, 'pck', 2, 56, NULL, NULL, 'zinc', '5', 1.23, 10, 100, NULL, NULL, NULL, NULL, '2016-04-22 04:21:21', '2016-04-22 04:21:21'),
(13, 'flx', 9, NULL, 4, NULL, 'zinc', '3', 1.12, NULL, NULL, NULL, 0, NULL, NULL, '2016-04-22 04:30:20', '2016-04-22 04:30:20'),
(14, 'dry', 10, 110, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-04-22 04:30:33', '2016-04-22 04:30:33'),
(15, 'glv', 11, 430, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-04-22 04:30:43', '2016-04-22 04:30:43'),
(16, 'que', 12, NULL, 5.5, NULL, NULL, '4', NULL, NULL, NULL, 0, NULL, '100', NULL, '2016-04-22 04:31:01', '2016-04-22 04:31:01'),
(17, 'pas', 13, 60, 4, NULL, 'yes', '3', NULL, NULL, NULL, NULL, NULL, NULL, '1', '2016-04-22 04:31:19', '2016-04-22 04:31:19'),
(18, 'pas', 13, 59, 4, NULL, 'yes', '2', NULL, NULL, NULL, NULL, NULL, NULL, '3', '2016-04-22 04:31:39', '2016-04-22 04:31:39'),
(19, 'pck', 2, 34, NULL, NULL, 'yes', '1', 1.2, 6, 100, NULL, NULL, NULL, NULL, '2016-04-22 04:41:04', '2016-04-22 04:41:04'),
(20, 'flx', 9, NULL, 3.2, NULL, 'sulphur', '4', 1.12, NULL, NULL, NULL, 34, NULL, NULL, '2016-04-22 04:44:11', '2016-04-22 04:44:11');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

DROP TABLE IF EXISTS `materials`;
CREATE TABLE IF NOT EXISTS `materials` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `job_code` int(11) NOT NULL,
  `material_type` text,
  `material_structure` text,
  `material_dimension` text,
  `quantity` int(11) NOT NULL,
  `lot_no` int(11) NOT NULL,
  `rejected` int(11) DEFAULT NULL,
  `material_status` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `materials_id_unique` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `job_code`, `material_type`, `material_structure`, `material_dimension`, `quantity`, `lot_no`, `rejected`, `material_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'hd', 'metal', 'shdkjlkckc', 10, 32, 1, '', '2016-04-20 05:13:49', '2016-04-20 05:13:49'),
(2, 1, 'wire', 'copper', 'flfklfjkl', 5, 30, 0, '', '2016-04-20 05:13:49', '2016-04-20 05:13:49'),
(3, 1, 'chip', 'mercury', 'ekfml', 30, 20, 5, '', '2016-04-20 05:13:49', '2016-04-20 05:13:49'),
(4, 2, 'ghjk', 'cvbfy', 'drftgg', 4, 1, 2, 'unloading', '2016-04-20 06:52:36', '2016-04-20 06:52:36'),
(5, 2, 'Jimdonkey', 'rgthj', 'ertyu', 4, 6, NULL, 'uploading', '2016-04-20 07:03:44', '2016-04-20 07:03:44'),
(6, 2, 'rtyuu', 'yuio', 'dfgh', 2, 9, NULL, 'uploading', '2016-04-20 07:03:44', '2016-04-20 07:03:44'),
(7, 3, 'qwerty', 'stuff', 'erttyu', 8, 1, 1, 'unloading', '2016-04-22 03:45:36', '2016-04-22 03:45:36'),
(8, 3, 'qwerty', 'stuff', 'erttyu', 8, 1, 1, 'unloading', '2016-04-22 03:45:38', '2016-04-22 03:45:38'),
(9, 3, 'qwerty', 'stuff', 'erttyu', 8, 1, 1, 'unloading', '2016-04-22 03:45:40', '2016-04-22 03:45:40'),
(10, 2, 'rtty', 'rttyu', 'yuiioo', 5, 2, NULL, 'uploading', '2016-04-22 04:46:35', '2016-04-22 04:46:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(765) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(765) NOT NULL,
  `token` varchar(765) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

DROP TABLE IF EXISTS `plans`;
CREATE TABLE IF NOT EXISTS `plans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_code` int(11) NOT NULL,
  `microns_required` int(11) NOT NULL,
  `suggested_dip_time` time NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `job_code`, `microns_required`, `suggested_dip_time`, `created_at`, `updated_at`) VALUES
(1, 1, 15, '10:46:10', '2016-04-20 05:59:16', '2016-04-20 05:59:16'),
(2, 1, 6, '10:00:05', '2016-04-22 03:49:34', '2016-04-22 03:49:34');

-- --------------------------------------------------------

--
-- Table structure for table `processes`
--

DROP TABLE IF EXISTS `processes`;
CREATE TABLE IF NOT EXISTS `processes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `job_code` int(11) NOT NULL,
  `lot_no` int(11) NOT NULL,
  `fixture` int(11) NOT NULL,
  `jig_no` int(11) NOT NULL,
  `quantity` int(50) DEFAULT NULL,
  `status` varchar(765) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `processes_id_unique` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `processes`
--

INSERT INTO `processes` (`id`, `job_code`, `lot_no`, `fixture`, `jig_no`, `quantity`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 30, 2, 10, 15, 'dry_1', '2016-04-26 09:58:20', '2016-04-26 09:58:20'),
(2, 2, 20, 3, 5, 9, 'cln_1', '2016-04-20 11:43:42', '2016-04-20 11:43:42'),
(3, 3, 1, 2, 5, 7, 'cln_1', '2016-04-22 10:04:37', '2016-04-22 10:04:37'),
(4, 3, 1, 3, 4, 4, 'glv_0', '2016-04-22 11:25:45', '2016-04-22 11:25:45');

-- --------------------------------------------------------

--
-- Table structure for table `qualities`
--

DROP TABLE IF EXISTS `qualities`;
CREATE TABLE IF NOT EXISTS `qualities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_code` int(11) NOT NULL,
  `required_coating` varchar(50) NOT NULL,
  `microns` varchar(500) NOT NULL,
  `qty` int(11) NOT NULL,
  `remarks` text,
  `shift` int(11) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `recovery_supervisor` varchar(50) NOT NULL,
  `shift_incharge` varchar(100) NOT NULL,
  `quality_incharge` varchar(50) NOT NULL,
  `work_manager` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualities`
--

INSERT INTO `qualities` (`id`, `job_code`, `required_coating`, `microns`, `qty`, `remarks`, `shift`, `image`, `recovery_supervisor`, `shift_incharge`, `quality_incharge`, `work_manager`, `created_at`, `updated_at`) VALUES
(1, 2, '6', '2.3,3.4,4.5,3.2,4.5,5.5,3.6,5.0,4.8,7.9,', 10, '', 2, '', 'jimdonkey', 'kevinfellow', 'dannymoonji', 'monica', '2016-04-20 05:48:39', '2016-04-20 05:48:39'),
(2, 3, '5', '3,2.3,4.4,5.5,6.0,7.0,8.0,9.0,7.6,5.9,', 56, 'Ftyhujikok', 2, '', 'Jimmy', ' teddy', 'monica', 'daniel', '2016-04-22 04:33:29', '2016-04-22 04:33:29');

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

DROP TABLE IF EXISTS `receipts`;
CREATE TABLE IF NOT EXISTS `receipts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `job_code` int(11) NOT NULL,
  `vehicle_regno` varchar(60) NOT NULL,
  `party_dc` varchar(300) NOT NULL,
  `dc_date` date NOT NULL,
  `party_name` varchar(300) NOT NULL,
  `dc_weight` double(8,2) NOT NULL,
  `wbl_weight` double(8,2) NOT NULL,
  `wb_weight` double(8,2) DEFAULT NULL,
  `units` varchar(150) DEFAULT NULL,
  `vehicle_in` datetime NOT NULL,
  `vehicle_out` datetime DEFAULT NULL,
  `notes` varchar(1500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `receipts_id_unique` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipts`
--

INSERT INTO `receipts` (`id`, `job_code`, `vehicle_regno`, `party_dc`, `dc_date`, `party_name`, `dc_weight`, `wbl_weight`, `wb_weight`, `units`, `vehicle_in`, `vehicle_out`, `notes`, `created_at`, `updated_at`) VALUES
(1, 1, 'tn20bu4676', 'jayamdc89765', '2016-04-13', 'daniel', 50.00, 100.00, 10.00, 'tons', '2016-04-20 10:38:30', '2016-04-20 10:44:58', 'Ghjku', '2016-04-22 10:16:36', '2016-04-22 10:16:36'),
(2, 2, 'tn20bu4070', 'jayamdc56743', '2016-04-21', 'sharon', 23.00, 45.00, NULL, 'kg', '2016-04-20 10:56:32', NULL, NULL, '2016-04-20 10:56:32', '2016-04-20 10:56:32'),
(3, 3, 'tn20br3421', 'jayamdc32', '2016-04-22', 'monkey', 580.00, 90.00, 90.00, 'kg', '2016-04-22 09:04:58', '2016-04-22 09:16:07', NULL, '2016-04-22 09:16:07', '2016-04-22 09:16:07');

-- --------------------------------------------------------

--
-- Table structure for table `stages`
--

DROP TABLE IF EXISTS `stages`;
CREATE TABLE IF NOT EXISTS `stages` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `process_id` int(11) NOT NULL,
  `stage` varchar(150) NOT NULL,
  `image` varchar(150) DEFAULT NULL,
  `temp` varchar(150) DEFAULT NULL,
  `diptime` varchar(50) DEFAULT NULL,
  `facility` varchar(150) NOT NULL,
  `time_in` datetime NOT NULL,
  `time_out` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `stages_id_unique` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stages`
--

INSERT INTO `stages` (`id`, `process_id`, `stage`, `image`, `temp`, `diptime`, `facility`, `time_in`, `time_out`, `created_at`, `updated_at`) VALUES
(17, 1, 'dgr', '', NULL, NULL, '1', '2016-04-22 07:40:58', '0000-00-00 00:00:00', '2016-04-22 02:10:58', '2016-04-22 02:10:58'),
(18, 1, 'pck', '', NULL, NULL, '3', '2016-04-22 07:44:03', '0000-00-00 00:00:00', '2016-04-22 02:14:03', '2016-04-22 02:14:03'),
(19, 3, 'bnd', '', NULL, NULL, '5', '2016-04-22 09:20:32', '2016-04-22 09:20:42', '2016-04-22 09:20:42', '2016-04-22 09:20:42'),
(20, 3, 'dgr', '', NULL, NULL, '1', '2016-04-22 09:27:59', '2016-04-22 09:28:17', '2016-04-22 09:28:17', '2016-04-22 09:28:17'),
(21, 3, 'pck', '', NULL, NULL, '4', '2016-04-22 09:28:29', '2016-04-22 09:28:43', '2016-04-22 09:28:43', '2016-04-22 09:28:43'),
(22, 3, 'rns', '', NULL, NULL, '8', '2016-04-22 09:28:54', '2016-04-22 09:29:02', '2016-04-22 09:29:02', '2016-04-22 09:29:02'),
(23, 3, 'flx', '', NULL, NULL, '9', '2016-04-22 09:29:16', '2016-04-22 09:29:30', '2016-04-22 09:29:30', '2016-04-22 09:29:30'),
(24, 3, 'dry', '', NULL, NULL, '10', '2016-04-22 09:29:52', '2016-04-22 09:30:05', '2016-04-22 09:30:05', '2016-04-22 09:30:05'),
(25, 3, 'glv', '', '67.7', NULL, '11', '2016-04-22 09:31:22', '2016-04-22 09:31:30', '2016-04-22 09:31:30', '2016-04-22 09:31:30'),
(26, 3, 'que', '', NULL, NULL, '12', '2016-04-22 09:31:42', '2016-04-22 09:34:47', '2016-04-22 09:34:47', '2016-04-22 09:34:47'),
(27, 3, 'pas', '', NULL, NULL, '13', '2016-04-22 09:35:07', '2016-04-22 09:35:16', '2016-04-22 09:35:16', '2016-04-22 09:35:16'),
(28, 3, 'ubn', '', NULL, NULL, '', '2016-04-22 10:03:51', '2016-04-22 10:03:57', '2016-04-22 10:03:57', '2016-04-22 10:03:57'),
(29, 3, 'cln', '', NULL, NULL, '', '2016-04-22 10:04:07', '2016-04-22 10:04:37', '2016-04-22 10:04:37', '2016-04-22 10:04:37'),
(30, 1, 'que', '1461322529161.jpg,', NULL, NULL, '12', '2016-04-22 10:55:39', '2016-04-22 10:56:39', '2016-04-22 10:56:39', '2016-04-22 10:56:39'),
(31, 1, 'glv', '1461322529161.jpg,1461322623574.jpg,', NULL, NULL, '13', '2016-04-22 10:57:06', '0000-00-00 00:00:00', '2016-04-22 11:14:15', '2016-04-22 11:14:15'),
(32, 0, 'pas', '1461322529161.jpg,1461322623574.jpg,', NULL, NULL, '', '2016-04-22 10:57:10', '0000-00-00 00:00:00', '2016-04-22 05:27:10', '2016-04-22 05:27:10'),
(33, 0, 'pas', '1461322529161.jpg,1461322623574.jpg,', NULL, NULL, '', '2016-04-22 10:57:23', '0000-00-00 00:00:00', '2016-04-22 05:27:23', '2016-04-22 05:27:23'),
(34, 0, 'pas', '1461322529161.jpg,1461322623574.jpg,', NULL, NULL, '', '2016-04-22 10:57:59', '0000-00-00 00:00:00', '2016-04-22 05:27:59', '2016-04-22 05:27:59'),
(35, 4, 'bnd', '', NULL, NULL, '4', '2016-04-22 11:23:31', '2016-04-22 11:23:38', '2016-04-22 11:23:38', '2016-04-22 11:23:38'),
(36, 4, 'dgr', '', NULL, NULL, '1', '2016-04-22 11:23:46', '2016-04-22 11:23:57', '2016-04-22 11:23:57', '2016-04-22 11:23:57'),
(37, 4, 'pck', '', NULL, NULL, '2', '2016-04-22 11:24:05', '2016-04-22 11:24:20', '2016-04-22 11:24:20', '2016-04-22 11:24:20'),
(38, 4, 'rns', '', NULL, NULL, '8', '2016-04-22 11:24:27', '2016-04-22 11:24:33', '2016-04-22 11:24:33', '2016-04-22 11:24:33'),
(39, 4, 'flx', '', NULL, NULL, '9', '2016-04-22 11:24:40', '2016-04-22 11:24:51', '2016-04-22 11:24:51', '2016-04-22 11:24:51'),
(40, 4, 'dry', '', NULL, NULL, '10', '2016-04-22 11:25:00', '2016-04-22 11:25:07', '2016-04-22 11:25:07', '2016-04-22 11:25:07'),
(41, 4, 'glv', '1461322529161.jpg,1461322623574.jpg,1461324341857.jpg,', '23', NULL, '11', '2016-04-22 11:25:45', '0000-00-00 00:00:00', '2016-04-22 05:55:45', '2016-04-22 05:55:45'),
(42, 1, 'glv', '', '45', NULL, '11', '2016-04-26 09:45:03', '0000-00-00 00:00:00', '2016-04-26 04:15:03', '2016-04-26 04:15:03'),
(43, 1, 'glv', '', '32', NULL, '11', '2016-04-26 09:46:22', '0000-00-00 00:00:00', '2016-04-26 04:16:22', '2016-04-26 04:16:22'),
(44, 1, 'glv', '', '21', '00:04', '11', '2016-04-26 09:53:13', '0000-00-00 00:00:00', '2016-04-26 04:23:13', '2016-04-26 04:23:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(765) NOT NULL,
  `email` varchar(765) NOT NULL,
  `password` varchar(180) NOT NULL,
  `remember_token` varchar(300) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
