-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table somiti.appuser
CREATE TABLE IF NOT EXISTS `appuser` (
  `user_id` varchar(12) NOT NULL DEFAULT '',
  `user_name` varchar(128) DEFAULT NULL,
  `user_password` varchar(40) DEFAULT NULL,
  `user_level` varchar(10) NOT NULL DEFAULT 'ROLE_USER' COMMENT 'Admin,Developer,General',
  `login_status` tinyint(4) DEFAULT NULL COMMENT '1=login; 0=not login;',
  `is_active` int(1) NOT NULL DEFAULT 1 COMMENT '1=Active,0=Blocked',
  `token` text DEFAULT NULL,
  `modified_by` varchar(20) DEFAULT NULL,
  `modified_time` datetime DEFAULT NULL,
  `created_by` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table somiti.appuser: ~4 rows (approximately)
/*!40000 ALTER TABLE `appuser` DISABLE KEYS */;
INSERT INTO `appuser` (`user_id`, `user_name`, `user_password`, `user_level`, `login_status`, `is_active`, `token`, `modified_by`, `modified_time`, `created_by`, `created_at`) VALUES
	('1000002', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'ADMIN', NULL, 1, 'bc236146c05bc216bea93525266e3911', NULL, NULL, '1001014', '2023-08-02 21:57:23'),
	('1001', '1001', 'e10adc3949ba59abbe56e057f20f883e', 'USER', NULL, 1, NULL, NULL, NULL, NULL, '2023-08-15 23:13:33'),
	('1002', '1002', 'e10adc3949ba59abbe56e057f20f883e', 'USER', NULL, 1, NULL, NULL, NULL, NULL, '2023-08-15 23:37:16'),
	('1003', '1003', 'e10adc3949ba59abbe56e057f20f883e', 'USER', NULL, 1, NULL, NULL, NULL, NULL, '2023-08-15 23:53:58'),
	('1004', '1004', 'e10adc3949ba59abbe56e057f20f883e', 'USER', NULL, 1, NULL, NULL, NULL, NULL, '2023-08-15 23:54:21'),
	('1005', '1005', 'e10adc3949ba59abbe56e057f20f883e', 'USER', NULL, 1, NULL, NULL, NULL, NULL, '2023-08-15 23:55:49'),
	('1006', '1006', 'e10adc3949ba59abbe56e057f20f883e', 'USER', NULL, 1, NULL, NULL, NULL, NULL, '2023-08-15 23:56:54'),
	('1010', '1010', 'e10adc3949ba59abbe56e057f20f883e', 'MEMBER', NULL, 1, NULL, NULL, NULL, NULL, '2023-04-19 10:26:34'),
	('2000008', 'nixon', 'e10adc3949ba59abbe56e057f20f883e', 'ROLE_USER', NULL, 1, 'c98c613580968a3a258fb0a721461ad8', NULL, NULL, '3000042', '2023-03-27 22:05:37');
/*!40000 ALTER TABLE `appuser` ENABLE KEYS */;

-- Dumping structure for table somiti.designation
CREATE TABLE IF NOT EXISTS `designation` (
  `designation_id` int(11) NOT NULL AUTO_INCREMENT,
  `designation_name` varchar(50) DEFAULT NULL,
  `top_order` int(11) NOT NULL,
  PRIMARY KEY (`designation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table somiti.designation: ~4 rows (approximately)
/*!40000 ALTER TABLE `designation` DISABLE KEYS */;
INSERT INTO `designation` (`designation_id`, `designation_name`, `top_order`) VALUES
	(1, 'Managesing Director', 1),
	(2, 'Director', 2),
	(3, 'Project Manager', 3),
	(4, 'Accounts Manager', 4);
/*!40000 ALTER TABLE `designation` ENABLE KEYS */;

-- Dumping structure for table somiti.employment_rec
CREATE TABLE IF NOT EXISTS `employment_rec` (
  `rec_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL DEFAULT 0,
  `offical_phone_no` varchar(20) DEFAULT NULL,
  `offical_email` varchar(50) DEFAULT NULL,
  `personal_phone_no` varchar(20) DEFAULT NULL,
  `personal_email` varchar(50) DEFAULT NULL,
  `present_address` varchar(100) DEFAULT NULL,
  `rec_start_date` date DEFAULT NULL,
  `rec_end_date` date DEFAULT NULL,
  `member_type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table somiti.employment_rec: ~0 rows (approximately)
/*!40000 ALTER TABLE `employment_rec` DISABLE KEYS */;
/*!40000 ALTER TABLE `employment_rec` ENABLE KEYS */;

-- Dumping structure for table somiti.emp_info
CREATE TABLE IF NOT EXISTS `emp_info` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_no` int(11) NOT NULL DEFAULT 0,
  `emp_name` varchar(50) DEFAULT NULL,
  `designation_id` int(11) NOT NULL,
  `official_phone` varchar(20) DEFAULT NULL,
  `official_email` varchar(50) DEFAULT NULL,
  `personal_phone` varchar(20) DEFAULT NULL,
  `personal_email` varchar(50) DEFAULT NULL,
  `present_address` varchar(100) DEFAULT NULL,
  `permanent_address` varchar(100) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `photo_path` varchar(100) DEFAULT NULL,
  `member_type` varchar(20) DEFAULT NULL,
  `last_rec_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`emp_id`),
  KEY `FK1_emp_info_designation_id` (`designation_id`),
  CONSTRAINT `FK1_emp_info_designation_id` FOREIGN KEY (`designation_id`) REFERENCES `designation` (`designation_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table somiti.emp_info: ~0 rows (approximately)
/*!40000 ALTER TABLE `emp_info` DISABLE KEYS */;
INSERT INTO `emp_info` (`emp_id`, `emp_no`, `emp_name`, `designation_id`, `official_phone`, `official_email`, `personal_phone`, `personal_email`, `present_address`, `permanent_address`, `joining_date`, `gender`, `photo_path`, `member_type`, `last_rec_id`) VALUES
	(1, 1001, 'Md. Shah Alam Khan', 1, '3993939', 'nixonpd@gmail.com', '01222223323', 'nixonpd@gamil.com', 'Mirpur, Dhaka', NULL, '0000-00-00', 'Male', 'uploads/1001.png', 'BM', NULL),
	(2, 1002, 'Mr. Jamal Hossen', 4, '3993939', 'nixonpd@gmail.com', '01222223323', 'nixonpd@gamil.com', 'Mirpur, Dhaka', NULL, '0000-00-00', 'Male', '0', 'E', NULL),
	(3, 1003, 'Mr. Kamal Hossen', 3, '3993939', 'nixonpd@gmail.com', '01222223323', 'nixonpd@gamil.com', 'Mirpur', NULL, '0000-00-00', 'Male', '0', 'E', NULL),
	(4, 1004, 'Mr. Kamal Hossen', 3, '3993939', 'nixonpd@gmail.com', '01222223323', 'nixonpd@gamil.com', 'Mirpur', NULL, '0000-00-00', 'Male', '0', 'E', NULL),
	(5, 1005, 'Mr. Kamal Hossen', 3, '3993939', 'nixonpd@gmail.com', '01222223323', 'nixonpd@gamil.com', 'Mirpur', NULL, '0000-00-00', 'Male', '0', 'E', NULL),
	(6, 1006, 'Mr. Kamal Hossen', 3, '3993939', 'nixonpd@gmail.com', '01222223323', 'nixonpd@gamil.com', 'Mirpur', NULL, '0000-00-00', 'Male', 'uploads/1006.png', 'E', NULL);
/*!40000 ALTER TABLE `emp_info` ENABLE KEYS */;

-- Dumping structure for table somiti.member_info
CREATE TABLE IF NOT EXISTS `member_info` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_no` int(11) NOT NULL DEFAULT 0,
  `member_name` varchar(50) DEFAULT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `present_address` varchar(100) DEFAULT NULL,
  `permanent_address` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `monthly_payable` decimal(10,2) DEFAULT NULL,
  `opening_balance` decimal(10,2) DEFAULT 0.00,
  `photo_path` varchar(100) DEFAULT NULL,
  `member_type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

-- Dumping data for table somiti.member_info: ~10 rows (approximately)
/*!40000 ALTER TABLE `member_info` DISABLE KEYS */;
INSERT INTO `member_info` (`member_id`, `member_no`, `member_name`, `phone_no`, `email`, `present_address`, `permanent_address`, `gender`, `joining_date`, `monthly_payable`, `opening_balance`, `photo_path`, `member_type`) VALUES
	(27, 1001, 'sdfdffdsf s', '324324234', 'Male', 'DDDDD', 'RRRRRR', NULL, NULL, NULL, 0.00, '0', NULL),
	(28, 1002, 'dssdfsdf', 'sdfdfsdf', '', 'sdfsdf', 'sdfsdfsdfsdf', 'Male', NULL, NULL, 0.00, 'uploads/1002.png', NULL),
	(29, 1003, 'adasdad', '', '', '', '', 'Male', NULL, NULL, 0.00, '0', NULL),
	(30, 1004, 'sdfsfdsf', '', '', '', '', 'Male', NULL, NULL, 0.00, '0', NULL),
	(31, 1005, 'fdsfsfdsf', '', '', '', '', 'Male', NULL, NULL, 0.00, '0', NULL),
	(32, 1006, 'dsfsdfsf', '', '', '', '', 'Male', NULL, NULL, 0.00, '0', NULL),
	(33, 1007, 'sfsdf', '', '', '', '', 'Male', NULL, NULL, 0.00, '0', NULL),
	(34, 1008, '44444', '', '', '', '', 'Male', NULL, NULL, 0.00, '0', NULL),
	(35, 1009, 'wrwrwer', '', '', '', '', 'Male', NULL, NULL, 0.00, '0', NULL),
	(36, 1010, 'sdfsdf', '234234', 'ffffff@gggg.nnn', 'ddddddd99', 'RRRRRR', 'Male', NULL, 2000.00, 10000.00, 'uploads/1010.png', NULL);
/*!40000 ALTER TABLE `member_info` ENABLE KEYS */;

-- Dumping structure for table somiti.payment_collection
CREATE TABLE IF NOT EXISTS `payment_collection` (
  `collection_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) DEFAULT NULL,
  `collection_date` date DEFAULT NULL,
  `month_no` smallint(6) NOT NULL,
  `year_no` smallint(6) NOT NULL,
  `payable_amount` decimal(10,2) DEFAULT NULL,
  `paid_amount` decimal(10,2) DEFAULT NULL,
  `paid_method` smallint(6) DEFAULT NULL,
  `ref_no` varchar(30) DEFAULT NULL,
  `added_on` timestamp NULL DEFAULT current_timestamp(),
  `added_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`collection_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table somiti.payment_collection: ~2 rows (approximately)
/*!40000 ALTER TABLE `payment_collection` DISABLE KEYS */;
INSERT INTO `payment_collection` (`collection_id`, `member_id`, `collection_date`, `month_no`, `year_no`, `payable_amount`, `paid_amount`, `paid_method`, `ref_no`, `added_on`, `added_by`) VALUES
	(1, 36, '2023-05-18', 1, 2023, 12000.00, 12000.00, 1, NULL, '2023-05-18 19:27:32', NULL),
	(2, 35, '2023-05-25', 0, 0, 79.00, 79.00, 2, NULL, '2023-05-23 00:05:40', NULL);
/*!40000 ALTER TABLE `payment_collection` ENABLE KEYS */;

-- Dumping structure for table somiti.payment_method
CREATE TABLE IF NOT EXISTS `payment_method` (
  `paid_method_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `paid_method` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`paid_method_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table somiti.payment_method: ~3 rows (approximately)
/*!40000 ALTER TABLE `payment_method` DISABLE KEYS */;
INSERT INTO `payment_method` (`paid_method_id`, `paid_method`, `description`) VALUES
	(1, 'Cash', 'Cash Amount'),
	(2, 'Chaque', 'Cheque No :'),
	(3, 'bKash', 'bKash Transaction No:');
/*!40000 ALTER TABLE `payment_method` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
