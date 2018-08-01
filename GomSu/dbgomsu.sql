-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2018 at 04:52 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbgomsu`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `payment` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `complete` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `id_customer`, `total`, `payment`, `note`, `complete`, `created_at`, `updated_at`) VALUES
(4, 6, 32100000, 'ATM', NULL, 0, '2017-11-13 19:05:27', '2018-02-12 21:00:44'),
(5, 8, 11490000, 'ATM', NULL, 0, '2018-02-10 07:19:59', '2018-02-12 21:00:45'),
(6, 9, 1850000, 'ATM', NULL, NULL, '2018-02-16 22:11:12', '2018-02-16 22:11:12'),
(7, 10, 1850000, 'ATM', NULL, NULL, '2018-02-16 22:11:38', '2018-02-16 22:11:38'),
(8, 11, 1150000, 'COD', 'chị gái tôi (nguyễn hậu) bảo kê', NULL, '2018-02-17 20:26:53', '2018-02-17 20:26:53'),
(9, 12, 1850000, 'COD', NULL, NULL, '2018-02-22 19:12:47', '2018-02-22 19:12:47'),
(10, 13, 3400000, 'ATM', NULL, NULL, '2018-02-23 08:38:42', '2018-02-23 08:38:42'),
(11, 14, 1000000, 'COD', NULL, NULL, '2018-02-23 08:46:21', '2018-02-23 08:46:21'),
(12, 15, 450000, 'ATM', NULL, NULL, '2018-02-23 08:47:06', '2018-02-23 08:47:06'),
(13, 16, 950000, 'COD', '123', NULL, '2018-02-26 23:16:57', '2018-02-26 23:16:57'),
(14, 17, 1550000, 'COD', 'asas', NULL, '2018-02-26 23:21:06', '2018-02-26 23:21:06'),
(15, 18, 2100000, 'COD', NULL, NULL, '2018-02-27 11:37:46', '2018-02-27 11:37:46'),
(16, 20, 4200000, 'COD', '12412421', NULL, '2018-02-27 11:41:16', '2018-02-27 11:41:16'),
(17, 21, 1550000, 'COD', 'rewrwerwer', NULL, '2018-02-27 11:48:18', '2018-02-27 11:48:18'),
(18, 23, 7965000, 'COD', '123', NULL, '2018-02-27 11:51:55', '2018-02-27 11:51:55'),
(19, 24, 950000, 'COD', NULL, NULL, '2018-03-01 14:57:40', '2018-03-01 14:57:40'),
(20, 25, 950000, 'COD', NULL, NULL, '2018-03-01 14:58:39', '2018-03-01 14:58:39'),
(21, 26, 5550000, 'COD', 'no', NULL, '2018-03-01 23:50:58', '2018-03-01 23:50:58'),
(22, 27, 2775000, 'ATM', 'yes', NULL, '2018-03-02 00:01:56', '2018-03-02 00:01:56'),
(23, 28, 2650000, 'COD', 'fast', NULL, '2018-03-02 00:06:05', '2018-03-02 00:06:05'),
(24, 29, 2650000, 'ATM', 'mai', NULL, '2018-03-04 18:40:44', '2018-03-04 18:40:44'),
(25, 30, 2100000, 'COD', 'xyz', NULL, '2018-03-04 23:21:45', '2018-03-04 23:21:45'),
(26, 31, 150000, 'COD', NULL, NULL, '2018-03-05 09:53:28', '2018-03-05 09:53:28'),
(27, 32, 150000, 'COD', NULL, NULL, '2018-03-05 09:58:02', '2018-03-05 09:58:02'),
(28, 33, 75000, 'COD', NULL, NULL, '2018-03-05 10:06:31', '2018-03-05 10:06:31'),
(29, 34, 150000, 'COD', NULL, NULL, '2018-03-05 10:56:34', '2018-03-05 10:56:34'),
(30, 35, 75000, 'COD', NULL, NULL, '2018-03-05 11:16:28', '2018-03-05 11:16:28'),
(31, 36, 75000, 'COD', NULL, NULL, '2018-03-05 11:17:36', '2018-03-05 11:17:36'),
(32, 37, 2000000, 'COD', NULL, NULL, '2018-03-05 17:46:00', '2018-03-05 17:46:00'),
(33, 38, 2000000, 'COD', NULL, NULL, '2018-03-05 21:43:51', '2018-03-05 21:43:51'),
(34, 39, 225000, 'COD', NULL, NULL, '2018-03-05 23:25:36', '2018-03-05 23:25:36'),
(35, 40, 150000, 'COD', NULL, NULL, '2018-03-05 23:32:44', '2018-03-05 23:32:44'),
(36, 41, 150000, 'COD', NULL, NULL, '2018-03-05 23:36:11', '2018-03-05 23:36:11'),
(37, 42, 2000000, 'COD', NULL, NULL, '2018-03-05 23:42:48', '2018-03-05 23:42:48'),
(38, 43, 150000, 'COD', NULL, NULL, '2018-03-05 23:45:45', '2018-03-05 23:45:45'),
(39, 44, 1550000, 'ATM', NULL, NULL, '2018-03-06 13:52:58', '2018-03-06 13:52:58'),
(40, 45, 1000000, 'COD', NULL, NULL, '2018-03-06 14:10:06', '2018-03-06 14:10:06'),
(41, 46, 1550000, 'COD', NULL, NULL, '2018-03-06 14:11:12', '2018-03-06 14:11:12'),
(42, 47, 950000, 'COD', NULL, NULL, '2018-03-06 14:20:07', '2018-03-06 14:20:07');

-- --------------------------------------------------------

--
-- Table structure for table `bill_details`
--

CREATE TABLE `bill_details` (
  `id` int(11) NOT NULL,
  `id_bill` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bill_details`
--

INSERT INTO `bill_details` (`id`, `id_bill`, `id_product`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES
(4, 4, 4, 1, 9600000, '2017-11-13 19:05:27', '2017-11-13 19:05:27'),
(5, 5, 10, 1, 11490000, '2018-02-10 07:19:59', '2018-02-10 07:19:59'),
(6, 7, 12, 1, 1850000, '2018-02-16 22:11:39', '2018-02-16 22:11:39'),
(7, 8, 10, 1, 1150000, '2018-02-17 20:26:53', '2018-02-17 20:26:53'),
(8, 9, 12, 1, 1850000, '2018-02-22 19:12:47', '2018-02-22 19:12:47'),
(9, 10, 12, 1, 1850000, '2018-02-23 08:38:42', '2018-02-23 08:38:42'),
(10, 10, 6, 1, 1550000, '2018-02-23 08:38:42', '2018-02-23 08:38:42'),
(11, 11, 7, 1, 1000000, '2018-02-23 08:46:21', '2018-02-23 08:46:21'),
(12, 12, 14, 1, 450000, '2018-02-23 08:47:06', '2018-02-23 08:47:06'),
(13, 13, 9, 1, 950000, '2018-02-26 23:16:57', '2018-02-26 23:16:57'),
(14, 14, 6, 1, 1550000, '2018-02-26 23:21:06', '2018-02-26 23:21:06'),
(15, 15, 9, 1, 950000, '2018-02-27 11:37:46', '2018-02-27 11:37:46'),
(16, 15, 10, 1, 1150000, '2018-02-27 11:37:46', '2018-02-27 11:37:46'),
(17, 16, 5, 1, 1100000, '2018-02-27 11:41:16', '2018-02-27 11:41:16'),
(18, 16, 6, 2, 6200000, '2018-02-27 11:41:16', '2018-02-27 11:41:16'),
(19, 17, 6, 1, 1550000, '2018-02-27 11:48:18', '2018-02-27 11:48:18'),
(20, 18, 10, 1, 1150000, '2018-02-27 11:51:55', '2018-02-27 11:51:55'),
(21, 18, 11, 1, 2240000, '2018-02-27 11:51:55', '2018-02-27 11:51:55'),
(22, 18, 14, 2, 1800000, '2018-02-27 11:51:56', '2018-02-27 11:51:56'),
(23, 18, 9, 1, 950000, '2018-02-27 11:51:56', '2018-02-27 11:51:56'),
(24, 18, 4, 1, 75000, '2018-02-27 11:51:56', '2018-02-27 11:51:56'),
(25, 18, 8, 1, 1650000, '2018-02-27 11:51:56', '2018-02-27 11:51:56'),
(26, 18, 7, 1, 1000000, '2018-02-27 11:51:56', '2018-02-27 11:51:56'),
(27, 19, 9, 1, 950000, '2018-03-01 14:57:41', '2018-03-01 14:57:41'),
(28, 20, 9, 1, 950000, '2018-03-01 14:58:39', '2018-03-01 14:58:39'),
(29, 21, 12, 3, 16650000, '2018-03-01 23:50:58', '2018-03-01 23:50:58'),
(30, 22, 4, 1, 75000, '2018-03-02 00:01:56', '2018-03-02 00:01:56'),
(31, 22, 6, 1, 1550000, '2018-03-02 00:01:56', '2018-03-02 00:01:56'),
(32, 22, 10, 1, 1150000, '2018-03-02 00:01:56', '2018-03-02 00:01:56'),
(33, 23, 5, 1, 1100000, '2018-03-02 00:06:06', '2018-03-02 00:06:06'),
(34, 23, 6, 1, 1550000, '2018-03-02 00:06:06', '2018-03-02 00:06:06'),
(35, 24, 5, 1, 1100000, '2018-03-04 18:40:44', '2018-03-04 18:40:44'),
(36, 24, 6, 1, 1550000, '2018-03-04 18:40:44', '2018-03-04 18:40:44'),
(37, 25, 5, 1, 1100000, '2018-03-04 23:21:45', '2018-03-04 23:21:45'),
(38, 25, 7, 1, 1000000, '2018-03-04 23:21:45', '2018-03-04 23:21:45'),
(39, 26, 4, 2, 300000, '2018-03-05 09:53:29', '2018-03-05 09:53:29'),
(40, 27, 4, 2, 300000, '2018-03-05 09:58:02', '2018-03-05 09:58:02'),
(41, 28, 4, 1, 75000, '2018-03-05 10:06:31', '2018-03-05 10:06:31'),
(42, 29, 4, 2, 300000, '2018-03-05 10:56:34', '2018-03-05 10:56:34'),
(43, 30, 4, 1, 75000, '2018-03-05 11:16:28', '2018-03-05 11:16:28'),
(44, 31, 4, 1, 75000, '2018-03-05 11:17:36', '2018-03-05 11:17:36'),
(45, 32, 7, 2, 4000000, '2018-03-05 17:46:00', '2018-03-05 17:46:00'),
(46, 33, 7, 2, 4000000, '2018-03-05 21:43:51', '2018-03-05 21:43:51'),
(47, 34, 4, 3, 675000, '2018-03-05 23:25:36', '2018-03-05 23:25:36'),
(48, 35, 4, 2, 300000, '2018-03-05 23:32:44', '2018-03-05 23:32:44'),
(49, 36, 4, 2, 300000, '2018-03-05 23:36:11', '2018-03-05 23:36:11'),
(50, 37, 7, 2, 2000000, '2018-03-05 23:42:48', '2018-03-05 23:42:48'),
(51, 38, 4, 2, 75000, '2018-03-05 23:45:45', '2018-03-05 23:45:45'),
(52, 39, 6, 1, 1550000, '2018-03-06 13:52:58', '2018-03-06 13:52:58'),
(53, 40, 7, 1, 1000000, '2018-03-06 14:10:06', '2018-03-06 14:10:06'),
(54, 41, 6, 1, 1550000, '2018-03-06 14:11:12', '2018-03-06 14:11:12'),
(55, 42, 9, 1, 950000, '2018-03-06 14:20:07', '2018-03-06 14:20:07');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `image` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Ấm chén', NULL, NULL, '2017-11-12 15:59:43', '2018-02-08 23:59:32'),
(2, 'Bộ đồ ăn', NULL, NULL, '2017-11-12 15:59:49', '2018-02-09 21:35:26'),
(3, 'Đèn sứ thấu quang', NULL, NULL, '2017-11-12 15:59:55', '2018-02-09 21:36:32'),
(4, 'Lọ lộc bình', NULL, NULL, '2017-11-12 16:00:00', '2018-02-09 21:37:00'),
(5, 'Bình sứ trưng bày', NULL, NULL, '2017-11-12 16:00:04', '2018-02-09 21:38:26'),
(6, 'Đồ thờ cúng', NULL, NULL, '2018-02-18 10:18:16', '2018-02-18 10:18:16');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idproduct` int(11) NOT NULL,
  `id_users` int(11) DEFAULT NULL,
  `rate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comment`, `idproduct`, `id_users`, `rate`, `created_at`, `updated_at`) VALUES
(12, 'giá là bao nhiêu đây', 12, 5, '', '2018-02-18 12:31:14', '2018-02-18 12:31:14'),
(13, 'sản phẩm chúng tôi', 32, 5, '', '2018-02-19 10:33:46', '2018-02-19 10:33:46'),
(14, 'hậu nguyễn', 11, 5, '', '2018-02-20 14:24:43', '2018-02-20 14:24:43'),
(15, 'sản phẩm đẹp lắm !!', 14, 5, '', '2018-02-20 14:28:07', '2018-02-20 14:28:07'),
(17, 'tôi rất ưng bộ sản phẩm này', 4, 5, '', '2018-02-20 14:35:27', '2018-02-20 14:35:27'),
(18, 'sản phẩm hay', 12, 5, '', '2018-02-20 20:47:18', '2018-02-20 20:47:18'),
(19, 'sản phẩm chất lượng tốt', 5, 5, '', '2018-02-20 20:47:44', '2018-02-20 20:47:44'),
(20, 'sản phẩm chất lượng', 18, 5, '', '2018-03-06 14:06:27', '2018-03-06 14:06:27');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `gender`, `email`, `address`, `phone_number`, `note`, `created_at`, `updated_at`) VALUES
(6, 'Linh', 'nữ', 'linh@gmail.com', 'Ngọc Khánh, Hà Nội', '01685275068', NULL, '2017-11-13 19:05:27', '2017-11-13 19:05:27'),
(7, 'Nguyễn Thị Hậu', 'nữ', 'haunt42@wru.vn', 'bỉm sơn -thanh hóa', '01695722171', NULL, '2018-02-08 22:43:36', '2018-02-08 22:43:36'),
(8, 'Nguyễn Thị Hậu', 'nam', 'haunguyen9627@gmail.com', 'bỉm sơn -thanh hóa', '01695722171', NULL, '2018-02-10 07:19:59', '2018-02-10 07:19:59'),
(9, 'Nguyễn Thị Lan', 'nữ', 'haunguyen9627@gmail.com', 'bỉm sơn thanh hóa', '01695722171', NULL, '2018-02-16 22:11:12', '2018-02-16 22:11:12'),
(10, 'Nguyễn Thị Lan', 'nữ', 'haunguyen9627@gmail.com', 'bỉm sơn thanh hóa', '01695722171', NULL, '2018-02-16 22:11:38', '2018-02-16 22:11:38'),
(11, 'trần mai anh', 'nam', 'thint42@wru.vn', 'số 25,đường tống duy tân,quận 3,hồ chí minh', '0965755157', 'chị gái tôi (nguyễn hậu) bảo kê', '2018-02-17 20:26:53', '2018-02-17 20:26:53'),
(12, 'Nguyễn Thị Lan', 'nữ', 'haunt42@wru.vn', '124 tây sơn', '0567890987', NULL, '2018-02-22 19:12:47', '2018-02-22 19:12:47'),
(13, 'đoàn hoàng anh', 'nữ', 'anhdth42@wru.vn', 'nghệ an', '016789799', NULL, '2018-02-23 08:38:42', '2018-02-23 08:38:42'),
(14, 'Hậu Nguyễn', 'nữ', 'anhhau9799@gmail.com', '124 tây sơn - hà nội', '1695722171', NULL, '2018-02-23 08:46:20', '2018-02-23 08:46:20'),
(15, 'Hậu Nguyễn', 'nam', 'anhhau9799@gmail.com', '124 tây sơn - hà nội', '1695722171', NULL, '2018-02-23 08:47:06', '2018-02-23 08:47:06'),
(16, 'super', 'nam', 'super@gmail.com', 'abc', '123456789', '123', '2018-02-26 23:16:57', '2018-02-26 23:16:57'),
(17, 'abc', 'nam', 'abc@gmail.com', 'dasddsadaasad', '123456789', 'asas', '2018-02-26 23:21:06', '2018-02-26 23:21:06'),
(18, 'noname', 'nam', 'haunguyen112797@gmail.com', NULL, '1242312321', NULL, '2018-02-27 11:37:46', '2018-02-27 11:37:46'),
(19, 'noname', 'nam', 'haunguyen112797@gmail.com', 'dqwqeqeq', '12345678', 'eqeqeq', '2018-02-27 11:39:11', '2018-02-27 11:39:11'),
(20, 'noname', 'nam', 'haunguyen112797@gmail.com', '31241242', '321312', '12412421', '2018-02-27 11:41:16', '2018-02-27 11:41:16'),
(21, 'sam', 'nam', 'sam@gmail.com', '1234567', '1234567', 'rewrwerwer', '2018-02-27 11:48:18', '2018-02-27 11:48:18'),
(22, 'sa', 'nam', 'sam@gmail.com', '3131', '12131', '31', '2018-02-27 11:50:37', '2018-02-27 11:50:37'),
(23, 'halo', 'nam', 'sam@gmail.com', 'fdsfsd', '12345678', '123', '2018-02-27 11:51:55', '2018-02-27 11:51:55'),
(24, 'hau', 'nam', 'haunguyen112797@gmail.com', 'aaaaa', '1343423423', NULL, '2018-03-01 14:57:40', '2018-03-01 14:57:40'),
(25, 'hau', 'nam', 'haunguyen112797@gmail.com', 'aaaaa', '1343423423', NULL, '2018-03-01 14:58:39', '2018-03-01 14:58:39'),
(26, 'jdk', 'nam', 'haunguyen112797@gmail.com', 'ha noi', '12345678', 'no', '2018-03-01 23:50:57', '2018-03-01 23:50:57'),
(27, 'jre', 'nữ', 'haunguyen112797@gmail.com', 'hello', '0912345678', 'yes', '2018-03-02 00:01:56', '2018-03-02 00:01:56'),
(28, 'bro', 'nam', 'haunguyen112797@gmail.com', 'USA', '123456789', 'fast', '2018-03-02 00:06:05', '2018-03-02 00:06:05'),
(29, 'Đỏ', 'nam', 'haunguyen112797@gmail.com', 'Quận Đống Đa', '12345678', 'mai', '2018-03-04 18:40:44', '2018-03-04 18:40:44'),
(30, 'tét', 'nữ', 'haunguyen112797@gmail.com', 'abc', '123456789', 'xyz', '2018-03-04 23:21:45', '2018-03-04 23:21:45'),
(31, 'aaa', 'nam', 'abc@gmail.com', 'aaaa', '12345678', NULL, '2018-03-05 09:53:28', '2018-03-05 09:53:28'),
(32, 'aaa', 'nam', 'abc@gmail.com', 'aaa', '12345789', NULL, '2018-03-05 09:58:02', '2018-03-05 09:58:02'),
(33, 'asd', 'nam', 'abc@gmail.com', 'asad', '123456434', NULL, '2018-03-05 10:06:31', '2018-03-05 10:06:31'),
(34, 'asdfg', 'nam', 'abc@gmail.com', 'as', '123423', NULL, '2018-03-05 10:56:33', '2018-03-05 10:56:33'),
(35, 'aaa', 'nam', 'abc@gmail.com', 'sasa', '12345678', NULL, '2018-03-05 11:16:28', '2018-03-05 11:16:28'),
(36, 'aa', 'nam', 'abc@gmail.com', 'sasa', '123456', NULL, '2018-03-05 11:17:36', '2018-03-05 11:17:36'),
(37, 'aaa', 'nam', 'abc@gmail.com', 'aaa', '12345678', NULL, '2018-03-05 17:46:00', '2018-03-05 17:46:00'),
(38, 'hey', 'nam', 'haunguyen112797@gmail.com', 'asdfg', '2345678', NULL, '2018-03-05 21:43:51', '2018-03-05 21:43:51'),
(39, 'so luong san pham', 'nam', 'haunguyen112797@gmail.com', 'qưertyu', '123456789', NULL, '2018-03-05 23:25:36', '2018-03-05 23:25:36'),
(40, 'test', 'nam', 'haunguyen112797@gmail.com', 'ksjfsld', '123456789', NULL, '2018-03-05 23:32:44', '2018-03-05 23:32:44'),
(41, 'ád', 'nam', 'haunguyen112797@gmail.com', 'àddsfsd', '1234567', NULL, '2018-03-05 23:36:11', '2018-03-05 23:36:11'),
(42, 'finish', 'nam', 'haunguyen112797@gmail.com', 'asdf', '12345678', NULL, '2018-03-05 23:42:47', '2018-03-05 23:42:47'),
(43, 'hoanf thanhf', 'nam', 'haunguyen112797@gmail.com', 'asd', '2345678', NULL, '2018-03-05 23:45:45', '2018-03-05 23:45:45'),
(44, 'hoafng anh', 'nam', 'haunguyen112797@gmail.com', 'asdfghjk', '0912345678', NULL, '2018-03-06 13:52:58', '2018-03-06 13:52:58'),
(45, 'ngoannguyen', 'nam', 'ngoannt42@wru.vn', 'ádfghjk', '01695722171', NULL, '2018-03-06 14:10:06', '2018-03-06 14:10:06'),
(46, 'ngoannguyen', 'nam', 'haunguyen112797@gmail.com', 'ádfghjkl', '01695722171', NULL, '2018-03-06 14:11:12', '2018-03-06 14:11:12'),
(47, 'hau', 'nam', 'haunguyen112797@gmail.com', 'ádfghjk', '01695722171', NULL, '2018-03-06 14:20:07', '2018-03-06 14:20:07');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cate_id` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `unit_price` int(11) DEFAULT NULL,
  `promotion_price` decimal(10,0) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `cate_id`, `description`, `unit_price`, `promotion_price`, `image`, `unit`, `created_at`, `updated_at`) VALUES
(4, 'Tách Cafe thấp nhiều màu cao12.5cm, rộng 8 cm', 1, NULL, 75000, '0', 'tachcafe.jpg', '89', '2017-11-13 12:30:15', '2018-02-10 07:58:19'),
(5, 'Bộ ấm chén vuốt bọc đồng số 2 vẽ trúc lâm thất hiền', 1, 'Kích thước bộ sản phẩm: \r\n\r\n1. Bình trà: cao 13cm (Bình trà này có thể đựng 500ml nước)\r\n\r\n2. Chén: \r\n\r\n- Đường kính: 6.5cm\r\n\r\n- Cao; 5cm\r\n\r\n3. Đĩa kê chén: đường kính 9.5cm\r\n\r\n\r\n\r\nTrúc lâm thất hiền – Rừng trúc và 7 ông hiền.\r\n\r\nTrúc lầm thất hiền, bảy nhà thơ, nhà văn Trung Quốc sống thời ký cuối Ngụy đầu Tấn, thế kỷ thứ 3 ở ẩn trong rừng Trúc, đánh đàn uống rượu ngâm thơ, bàn triết học Lão Trang, nói chuyện huyền viễn để tỏ lòng chống đối chế độ đương thời.\r\n\r\nĐẶC ĐIỂM NỔI BẬT\r\n\r\nHoa văn đơn giản vẽ tay thủ công tinh xảo rất phù hợp với việc trưng bày trong phòng khách (trên bàn gỗ, bàn kính) hoặc dùng ở sân vườn, phù hợp với cả những ngôi nhà cổ và sự hòa quện giữa cổ điển và hiện đại trong những căn nhà mới…\r\n\r\nBộ ấm chén men cổ có ưu điểm không bám nước chè. mỗi lần sử dụng, bạn chỉ cần tráng nước nóng mà không cần rửa bề mặt lại trở nên nhẵn bóng, sạch sẽ. kiểu dáng thiết kế cũng độc đáo và lạ mắt, mỗi bộ ấm chén là một kiểu dáng khác nhau.\r\n\r\nSản phẩm bao gồm \r\n\r\n- 1 ấm \r\n\r\n- 6 chén\r\n\r\n- 6 đĩa kê', 1100000, NULL, 'am-chen-su-men-co-boc-dong-bo-am-chen-vuot-boc-dong-so-2-ve-truc-lam-that-hien-22778-1.jpg', '87', '2017-11-13 19:20:28', '2018-02-15 17:43:19'),
(6, 'Bộ ấm chén dáng nhật - đầy đủ phụ kiện - men rạn cổ bọc đồng', 1, 'Bộ ấm chén dáng nhật - đầy đủ phụ kiện - men rạn cổ bọc đồng kích thước phù hợp với mọi gia đình, có thể làm quà.', 1600000, '1550000', 'amchen3.jpg', '94', '2017-11-13 19:20:28', '2018-02-10 22:15:30'),
(7, 'Bộ ấm chén dáng Nhật - men rạn cổ bọc đồng', 1, 'Bộ ấm chén men rạn cổ \r\nBao gồm : 1 bình trà, 6 chén trà, 7 đĩa kê', 1000000, '0', 'am-chen-men-ran-co-bo-am-chen-dang-nhat-day-du-phu-kien-men-ran-co-boc-dong-23468-1.jpg', '54', '2017-11-13 19:20:28', '2018-02-15 17:20:31'),
(8, 'Bộ đồ ăn Bát Tràng - Mai vàng may mắn', 2, 'Bộ sản phẩm bao gồm:\r\n10 bát ăn cơm\r\n6 đĩa tròn\r\n2 âu đựng cơm\r\n3 bát tô to\r\n1 bát mắm\r\n1 đĩa muối\r\n\r\nThông tin sản phẩm:\r\nChất liệu: sứ Bát Tràng cao cấp\r\nMàu men trắng trong\r\nHọa tiết: mai vàng\r\n\r\n\r\nBộ sản phẩm được làm từ chất liệu gốm sứ Bát Tràng cao cấp, họa tiết mai vàng nổi bật trên nền sứ trắng trong vô cùng đẹp mắt. \r\n\r\nSản phẩm có thể sử dụng trong lò vi sóng. Màu men trắng trong dễ dàng lau chùi, càng dùng càng sáng bóng.\r\nĐặc biệt, sản phẩm được nung ở nhiệt độ cao đảm bảo an toàn cho sức khỏe của bạn cũng như những người thân trong gia đình.\r\n\r\nBộ đồ ăn mai vàng may mắn với thiết kế tinh tế không chỉ phù hợp với không gian bếp hiện đại mà còn rất hợp nếu bạn dùng làm quà biếu tặng lãnh đạo, người thân, bạn bè, hay trong những dịp đặt biệt: tân gia, năm mới...\r\n\r\nBộ sản phẩm mai vàng như  một lời chúc may mắn trao tặng đến bạn bè, người thân, lãnh đạo để mừng tân gia, năm mới hay những dịp quan trọng...\r\nÝ nghĩa họa tiết HOA MAI\r\n\r\nHình ảnh cây mai nở rộ trong ngày đầu xuân là bài học đạo lý đối với mọi người và mọi nhà. Cây mai dãi nắng dầm mưa trong lòng đất Việt Nam cũng là hình ảnh tiêu biểu cho những phẩm chất tinh thần cao quý của người dân Việt trong quá trình đấu tranh và lao động xây dựng cuộc sống qua nhiều thế hệ. \r\n\r\nCây mai gắn bó với làng quê ruộng vườn xứ sở Việt Nam, gắn bó với con người từ lúc tổ tiên khai đất lập làng để sinh sống. Cây mai chịu đựng gió mưa lụt bão để có thể nở hoa vào dịp tết, đó là hình ảnh tượng trưng cho người dân Việt vượt mọi gian khó để gìn giữ quê hương nòi giống và sống đời có ý nghĩa.\r\n\r\nNhư cây mai vàng rễ cắm sâu trong lòng đất, không bị ngã trước gió bão, con người Việt Nam dù ở đâu cũng gìn giữ đạo lý ân nghĩa và cội nguồn văn hóa tốt đẹp của tổ tiên.\r\n\r\nNhư cây mai vàng đứng trước thời tiết nghiệt ngã, vẫn sống bền bỉ theo năm tháng vươn mình ươm chồi nẩy lộc, người Việt Nam dù bất cứ ở đâu cũng nhẫn nại và can đảm trước mọi hoàn cảnh để xây dựng cuộc đời.\r\n\r\nNhư cây mai vàng trút những chiếc lá già cỗi cuối đông, nhường cho chồi non và hoa vàng nở đầu xuân, người Việt Nam dù bất cứ ở đâu cũng sống hy sinh cho thế hệ con cháu tương lai.\r\n\r\nNhư cây mai vàng gìn giữ nhựa sống sâu kín trong thân tạo sức sống mạnh khỏe để hoa nở đầu xuân, người Việt Nam dù ở đâu cũng gìn giữ đạo lý trong tâm, tu nhân tích đức để sống có ích cho mình và cho mọi người.\r\n\r\nCây mai sống qua bao năm tháng với thời tiết khắc nghiệt vẫn âm thầm chịu đựng dẽo dai, xuân về dâng cho đời bông hoa xinh đẹp. Hình ảnh đó xứng đáng là nét tượng trưng cho phẩm đức  nhẫn nại và sự hy sinh cao cả của tổ tiên trong quá trình lao động xây dựng quê hương và duy trì bản sắc văn hóa dân tộc.', 1650000, NULL, 'bodoan1.jpg', '77', '2017-11-13 19:20:28', '2018-02-18 10:36:28'),
(9, 'Bộ đồ ăn Bát Tràng vẽ hoa xanh', 2, 'Bộ sản phẩm bao gồm:\r\n- 10 bát ăn cơm\r\n- 3 đĩa đĩa đường kính: 16 cm, 18cm, 20cm\r\n\r\n- 2 bát tô đường kính: 18cm, 20cm\r\n- 1 bát mắm, 1 đĩa muối\r\n\r\nThông tin sản phẩm:\r\nChất liệu: sứ Bát Tràng cao cấp\r\nMàu men xanh lam\r\nHọa tiết: Hoa cách điệu\r\n\r\nBộ đồ ăn Bát Tràng được làm từ chất đất cao cấp tạo nên sản phẩm có màu trắng trong đẹp mắt. Họa tiết hoa mềm mại, tinh tế, bắt mắt rất phù hợp với không gian bếp của gia đình bạn\r\n\r\nSản phẩm có thể sử dụng trong lò vi sóng. Màu men trắng trong dễ dàng lau chùi, càng dùng càng sáng bóng.\r\nĐặc biệt, sản phẩm được nung ở nhiệt độ cao đảm bảo an toàn cho sức khỏe của bạn cũng như những người thân trong gia đình.', 950000, '0', 'bodoan2.jpg', '86', '2017-11-13 19:20:28', '2018-02-18 10:38:43'),
(10, 'Bộ đồ ăn Bát Tràng vẽ Trúc - men chàm', 2, NULL, 1190000, '1150000', 'bo-do-an-ve-truc-bo-do-an-bat-trang-ve-truc-men-cham-23052-1.jpg', '90', '2017-11-13 19:20:28', '2018-02-14 21:56:45'),
(11, 'Bộ đồ ăn Bát Tràng - vẽ hoa hồng - 25 món', 2, 'Chất liệu: sứ Bát Tràng cao cấp\r\n\r\nBộ đồ ăn Bát Tràng được làm từ chất đất cao cấp tạo nên sản phẩm có màu trắng trong đẹp mắt. Họa tiết hoa văn mềm mại, tinh tế, bắt mắt rất phù hợp với không gian bếp của gia đình bạn\r\n\r\nSản phẩm có thể sử dụng trong lò vi sóng. Màu men trắng trong dễ dàng lau chùi, càng dùng càng sáng bóng.\r\nĐặc biệt, sản phẩm được nung ở nhiệt độ cao đảm bảo an toàn cho sức khỏe của bạn cũng như những người thân trong gia đình.', 2450000, '2240000', 'bodoan3.jpg', '81', '2017-11-13 19:20:28', '2018-02-18 10:40:14'),
(12, 'Bộ đồ ăn Bát Tràng 37 món - Hoa đào', 2, '01 Âu đựng cơm đường kính 22cm\r\n\r\n-        10 Bát ăn cơm đường kính 11cm\r\n\r\n-        06 Gác đũa\r\n\r\n-        06 Thìa con\r\n\r\n-        01 Đĩa bầu dục (26x19cm)\r\n\r\n-        01 Ống đựng hạt tiêu\r\n\r\n-        01 Khay đựng tương ớt – tương cà (12x6.5cm)\r\n\r\n \r\n\r\n-        01 Đĩa thuyền sâu (24x17cm)\r\n\r\n-        01 Khay chữ nhật cỡ lớn (27x17cm)\r\n\r\n-        01 Khay chữ nhật cỡ nhor (22x13cm)\r\n\r\n-        03 Đĩa tròn (Đường kính 20cm, 16cm, 14cm)\r\n\r\n-        01 Đĩa mắm (10cm)\r\n\r\n-        01 Bát muối (10cm)\r\n\r\n-        01 Tô vuông (17.5cm)\r\n\r\n-        02 Tô loe (19cm, 16cm)', 1850000, '0', 'bodoan6.jpg', '114', '2017-11-13 19:20:28', '2018-02-18 10:47:57'),
(13, 'Bộ đồ ăn Bát Tràng - vẽ sen - men tràm 17 món', 2, 'Chất liệu: sứ Bát Tràng cao cấp\r\nMàu men tràm cổ\r\nHọa tiết: vẽ hoa sen\r\n\r\nBộ đồ ăn Bát Tràng được làm từ chất đất cao cấp tạo nên sản phẩm có màu trắng trong đẹp mắt. Họa tiết hoa văn mềm mại, tinh tế, bắt mắt rất phù hợp với không gian bếp của gia đình bạn\r\n\r\nSản phẩm có thể sử dụng trong lò vi sóng. Màu men trắng trong dễ dàng lau chùi, càng dùng càng sáng bóng.\r\nĐặc biệt, sản phẩm được nung ở nhiệt độ cao đảm bảo an toàn cho sức khỏe của bạn cũng như những người thân trong gia đình.', 1090000, '0', 'bodoan5.jpg', '79', '2017-11-13 19:20:28', '2018-02-18 10:43:33'),
(14, 'Bộ ấm tử sa đen - Đắp nổi hoa phù dung đỏ', 1, 'Bộ sản phẩm bao gồm:\r\n- 01 Ấm pha trà:\r\n- 01 đĩa kê ấm\r\n- 06 chén\r\n- 06 đĩa kê chén\r\n\r\nBộ ấm chén được làm từ chất liệu gốm đất đỏ - một loại đất đặc trưng của bát tràng.  Trong lòng chén được tráng một lớp men đặc trưng mà không nơi nào có tạo nên vẻ đẹp tinh tế của bộ bình trà, đồng thời cũng giữ cho sản phẩm luôn sạch sẽ sau mỗi lần sử dụng.\r\n\r\nKhi rót trà vào chén, ta sẽ thấy được sự kết hợp rất ăn ý giữa màu men của gốm và màu xanh của trà, chính sự hòa quện này đã tạo nên phong cách trà đạo truyền thống việt nam.\r\n\r\nPhù dung trong tiếng Hán đồng âm với “phú vinh” nghĩa là giàu có, vinh hiển. Trong các hình hoa văn thường thấy vẽ Phù dung và Mẫu đơn với nhau thành “vinh hoa phú quý”, nhằm chỉ nghĩa cát tường.\r\n\r\nHoa Phù Dung sớm nở tối tàn, ném hết ưu tư phiền muộn vào nắng và gió. Bỏ mặc nhân gian sầu thế, vui nở bằng tất cả niềm tin, niềm vui, niềm sống được tạo nên bởi đôi bàn tay tài hoa khóe léo của người nghệ nhân làng gốm. Màu ấm và màu chén đồng bộ riêng biệt vô cùng độc đáo.\r\n\r\nVới thiết kế tinh tế, sản phẩm phù hợp với việc trưng bày trong phòng khách (trên bàn gỗ, bàn kính) hoặc dùng ở sân vườn, phù hợp với cả những ngôi nhà cổ và sự hòa quện giữa cổ điển và hiện đại trong những căn nhà mới…', 590000, '450000', 'am-chen-gom-bo-am-tu-sa-den-dap-noi-hoa-phu-dung-do-23503-1.jpg', '82', '2017-11-13 19:20:28', '2018-02-15 17:14:22'),
(15, 'Đèn xông tinh dầu (vẽ sen , dáng đèn trứng)', 3, '- Đèn xông tinh dầu bằng gốm sứ, chạy điện.\r\n- Vừa trang trí phòng khách, phòng ngủ sang trọng, vừa tạo hương thơm cho gia đình.\r\n- Đảm bảo sức khỏe.\r\n- Chất liệu sứ bát tràng cao cấp.\r\n- Công suất đèn: 10w\r\n\r\nĐèn xông tinh dầu là sản phẩm thông minh, tiện dụng, tích hợp 02 chức năng vừa là đèn ngủ vừa là đèn xông hương trong một. Với các chức năng vừa là chiếc đèn ngủ, vừa tỏa hương thơm, vừa làm ấm căn phòng, đèn xông hương tinh dầu trở thành mặt hang ngày càng được ưa chuộng trên thị trường.\r\n\r\nGốm Sứ Thank  hướng dẫn sử dụng đèn xông tinh dầu\r\n\r\n- Bước 1: Đổ nước vào phần chứa nước của đèn xông tinh dầu. Bạn có thể cho nước nóng (60 độC đến 80 độC) vào ngập khoảng 1/2 đến 2/3 đĩa nước.\r\n\r\n- Bước 2: Cắm điện\r\n\r\nTrước khi cắm điện, bạn nên để các chiết áp ở mức nhỏ nhất để tránh những ảnh hưởng từ nguồn điện tăng vọt sẽ làm hỏng chiếc bóng đèn của bạn.\r\n\r\n- Bước 3: Nhỏ tinh dầu\r\n\r\nBạn chỉ nên cho từ 4-5 giọt tinh dầu (dùng cho diện tích khoảng 15 đến 18m2) vào chiếc đèn để tránh mùi hương quá nặng hoặc gây lãng phí. Bạn không nên nhỏ trực tiếp tinh dầu vào nước lạnh vì như thế sẽ làm giảm tác dụng. Nên nhớ, nước phải đủ độ nóng thì tinh dầu mới phát huy tác dụng hiệu quả nhất\r\n\r\nĐèn đốt tinh dầu của battrangonline.vn với mẫu mã đẹp, phong phú và đa dạng, các loại đèn đốt tinh dầu này cũng có thể được sử dụng làm đèn ngủ, đèn trang trí trong văn phòng, phòng ngủ, hành lang… Đây cũng có thể làm một món quà tặng vô cùng thú vị và ý nghĩa.', 300000, '0', 'den-xong-tinh-dau-den-xong-tinh-dau-ve-sen-dang-den-trung-22761-1.jpg', '94', '2017-11-13 19:20:28', '2018-02-15 17:18:35'),
(16, 'Đèn xông tinh dầu chữ phúc - dáng sóng - vẽ tay - men trắng cao cấp', 3, '- Đèn xông tinh dầu bằng gốm sứ, chạy điện. - Vừa trang trí phòng khách, phòng ngủ sang trọng, vừa tạo hương thơm cho gia đình. - Đảm bảo sức khỏe. - Chất liệu sứ bát tràng cao cấp. - Công suất đèn: 10w Đèn xông tinh dầu là sản phẩm thông minh, tiện dụng, tích hợp 02 chức năng vừa là đèn ngủ vừa là đèn xông hương trong một. Với các chức năng vừa là chiếc đèn ngủ, vừa tỏa hương thơm, vừa làm ấm căn phòng, đèn xông hương tinh dầu trở thành mặt hang ngày càng được ưa chuộng trên thị trường. Gốm Sứ Thank hướng dẫn sử dụng đèn xông tinh dầu - Bước 1: Đổ nước vào phần chứa nước của đèn xông tinh dầu. Bạn có thể cho nước nóng (60 độC đến 80 độC) vào ngập khoảng 1/2 đến 2/3 đĩa nước. - Bước 2: Cắm điện Trước khi cắm điện, bạn nên để các chiết áp ở mức nhỏ nhất để tránh những ảnh hưởng từ nguồn điện tăng vọt sẽ làm hỏng chiếc bóng đèn của bạn. - Bước 3: Nhỏ tinh dầu Bạn chỉ nên cho từ 4-5 giọt tinh dầu (dùng cho diện tích khoảng 15 đến 18m2) vào chiếc đèn để tránh mùi hương quá nặng hoặc gây lãng phí. Bạn không nên nhỏ trực tiếp tinh dầu vào nước lạnh vì như thế sẽ làm giảm tác dụng. Nên nhớ, nước phải đủ độ nóng thì tinh dầu mới phát huy tác dụng hiệu quả nhất Đèn đốt tinh dầu của battrangonline.vn với mẫu mã đẹp, phong phú và đa dạng, các loại đèn đốt tinh dầu này cũng có thể được sử dụng làm đèn ngủ, đèn trang trí trong văn phòng, phòng ngủ, hành lang… Đây cũng có thể làm một món quà tặng vô cùng thú vị và ý nghĩa.', 300000, '280000', 'den-xong-tinh-dau-den-xong-tinh-dau-chu-phuc-dang-song-ve-tay-men-trang-cao-cap-23756-1.jpg', '61', '2017-11-13 19:20:28', '2018-02-15 17:23:45'),
(17, 'Đèn sứ BATO để bàn vẽ bách nhi - 60x38cm', 3, 'Sản phẩm được sản xuất trực tiếp tại Bát Tràng bằng chất liệu sứ thấu quang đặc biệt, đảm bảo cho anh sáng có thể lọt qua.\r\n\r\nHọa tiết bách nhi được vẽ trên bề mặt bên ngoài của gốm, khi ánh sáng đèn điện được bật lên từ bên trong sẽ phát sáng tạo nên vẻ đẹp huyền ảo của sản phẩm.\r\n\r\nÝ nghĩa sản phẩm\r\n\r\nBÁCH NHI (BÁCH PHÚC): Cháu con sung túc đầy nhà, sống trường thọ.\r\n\r\nBách Nhi được thể hiện trên sản phẩm đền sứ thấu quang là 100 đứa trẻ, mỗi đứa trẻ là 1 điều phúc,100 trẻ là 100 điều Phúc hay còn được gọi là Bách Phúc. Cây tùng biểu tượng cho sự trường thọ, dẻo dai như cây Bách cây Tùng. Mái nhà biểu tượng cho sự sung túc, ấm no…\r\n\r\nThời gian triển khai vẽ 7 ngày cho 1 sản phẩm\r\n\r\nSản phẩm có kích thước 60x38cm.', 14000000, '10900000', 'den-trung-bay-cao-cap-den-su-bato-de-ban-ve-bach-nhi-60x38cm-24319-1.jpg', '91', '2017-11-13 19:20:28', '2018-02-15 17:32:49'),
(18, 'Đèn sứ thấu quang vẽ lý ngư vọng nguyệt - cao 58cm', 3, 'Sản phẩm được sản xuất trực tiếp tại Bát Tràng bằng chất liệu sứ thấu quang đặc biệt, đảm bảo cho anh sáng có thể lọt qua.\r\n\r\nHọa tiết lý ngư vọng nguyệt được vẽ nổi trên bề mặt bên ngoài của gốm, khi ánh sáng đèn điện được bật lên từ bên trong sẽ phát sáng tạo nên vẻ đẹp huyền ảo của sản phẩm.\r\n\r\nSản phẩm có kích thước 56x38cm.', 10000000, '8900000', 'den-trung-bay-cao-cap-den-su-thau-quang-ve-ly-ngu-vong-nguyet-cao-58cm-24114-1.jpg', '101', '2017-11-22 04:20:20', '2018-02-15 17:29:09'),
(19, 'Đèn ngủ sứ cao cấp Bát Tràng', 3, NULL, 2800000, '0', 'den-trung-bay-cao-cap-den-ngu-su-cao-cap-bat-trang-24453-1.jpg', '99', '2017-11-07 06:17:16', '2018-02-15 17:32:31'),
(20, 'Lọ lộc bình men rạn cổ - bình an may mắn - Cao 175 cm', 4, 'Lọ lộc bình vẽ Tùng Cúc Trúc Mai: gồm 2 lọ lộc bình cao 1m6 và 2 chân đế kê (mỗi chân đế cao từ 13cm đến 15cm)\r\n\r\n\r\n\r\nTùng – Trúc – Cúc – Mai thể hiện sự luân chuyển của bốn mùa xuân – hạ - thu – đông. Sự luân chuyển này vừa đem lại may mắn cho con người, vừa là sự hi vọng, ước mong về sự suôn sẻ và thịnh vượng trong cuộc sống. \r\n\r\n\r\n\r\nĐặc biệt bức tranh phong cảnh 4 mùa được khắc họa nổi trên nền gốm sứ Bát Tràng vô cùng uyển chuyển, đẹp mắt. Màu men rạn giả cổ càng tạo thêm nét riêng có cho sản phẩm.  Hoàn toàn được tạo nên từ phương pháp thủ công truyền thống bởi đôi bàn tay khéo léo của người thợ, bạn sẽ hoàn toàn hài lòng khi lựa chọn đôi lọ lộc bình tứ cảnh này!\r\n\r\nSản phẩm dùng thích hợp để trưng bày hoặc làm quà biếu tặng.\r\n\r\nHàng đẹp loại I, không nứt, không vỡ gió, bền màu theo thời gian.', 8000000, '7500000', 'locbinh1.jpg', '100', '2017-11-01 06:16:16', '2018-02-16 13:34:08'),
(21, 'Lọ Lộc Bình Đắp Nổi - Cảnh Công Cúc Vạn Thọ', 4, 'Sản phẩm được làm trên chất liệu gốm sứ Bát Tràng cao cấp. Cảnh chim công hoa cúc được nghệ nhân đắp nổi hoàn toàn bằng tay, từng đường nét uyển chuyển tinh tế vô cùng mà không phải ngưởi thợ thủ công nào cũng làm được.\r\nSản phẩm có thể dùng để trưng bày hoặc làm quà biếu tặng cấp trên, người thân', 5000000, NULL, 'locbinh2.jpg', '84', '2017-11-02 00:00:24', '2018-02-16 13:26:32'),
(22, 'Lộc bình- Phúc Lộc Thọ - men lam- cao 60cm', 4, 'kích thước:  cao 60, vị trí đường kính lớn nhất 24cm', 1950000, '0', 'locbinh4.jpg', '78', '2017-11-02 00:25:21', '2018-02-16 13:56:57'),
(27, 'Lọ lộc bình Phúc Mãn Đường- men bóng - cao 1.55m', 4, 'Bộ sản phẩm gồm: 2 lọ lộc bình + 2 chân đế\r\nChất liệu: gốm sứ Bát Tràng cao cấp\r\nMàu men: men bóng đặc trưng\r\nHọa tiết: Vẽ Phúc Mãn Đường\r\n\r\nLộc bình có hình dạng rất đặc trưng, thân phình to, cổ thắt lại trên miệng thường loe ra. Trong phong thủy, lộc bình mang ý nghĩa tượng trưng cho sự sung túc về tiền bạc, phát tài phát lộc, sự sinh sôi nảy nở, sự phát triển những điều mới mẻ, may mắn và cát khánh đồng thời nó cất giữ, bảo quản tài sản và của cải cho gia chủ.\r\n\r\n\r\nĐôi lọ lộc bình (lục bình) của Bát Tràng được tạo nên bởi đôi bàn tay tài tình của người thợ  thủ công lành nghề, với những nét vẽ, họa tiết tinh xảo tạo nên chiều sâu ý nghĩa. Như 1 lời chúc phúc cho gia chủ:\r\n\r\nPhúc đầy nhà, năm thêm giàu có\r\n\r\nÐức ngập tràn, ngày một vinh hoa\r\n\r\n\r\n9 con cá chén (cửu ngư) mang ý nghĩa: may mắn, sung túc và trường tồn. Ngoài ra còn có ý nghĩa cầu cho con cháu học hành đỗ đạt sau này\r\nMột bên của sản phẩm là mình hạc sương mai: thể hiện cho chữ phúc trong nhà, vợ chồng thủy chung son sắt, một bên là họa tiết phượng hoàng tượng trưng cho giàu sang phú quý.\r\nHơn nữa, hoa và cây trên đôi lọ tượng trưng cho 4 mùa trong 1 năm mang đến sinh khí cho gia chủ\r\n\r\nĐược làm từ chất đất cao cấp của Bát Tràng, kết hợp men bóng trong tinh túy, bền màu theo thời gian\r\n\r\nLọ lộc bình Bát Tràng có thể dùng để trưng bày trong gia đình hoặc làm quà biếu, quà tặng trong những dịp quan trọng như: tân gia, mừng thăng quan tiến chức... Sản phẩm đẹp hơn nữa khi được trưng bày trong những gian nhà cổ, có hoành phi câu đối', 6000000, '0', 'locbinh3.jpg', '94', '2017-11-09 00:16:00', '2018-02-16 13:53:39'),
(28, 'Lọ lộc bình phú quý -cao 1m55', 4, NULL, 4000000, '0', 'locbinh5.jpg', '72', '2018-02-16 14:08:10', '2018-02-16 14:08:10'),
(29, 'Bình thu tài hút lộc - vẽ bát tiên quá hải', 5, 'Bình trang trí - Thu tài hút lộc\r\n\r\nXuất xứ: Bát Tràng - Việt Nam\r\n\r\nSản phẩm vẽ tay hoàn toàn, sự kết hợp độc đáo giữa màu men xanh của Bát Tràng truyền thống với men màu hiện đại tạo cho sản phẩm sự độc đáo riêng có.', 3500000, NULL, 'binhsutrungbay1.jpg', '82', '2018-02-16 16:07:33', '2018-02-16 16:07:33'),
(30, 'Quả trứng phong thủy vẽ đồ cổ - Cao 45cm', 5, 'Quả trứng phong thủy mang ý nghĩa: đem lại tài lộc may mắn bất tận.\r\n\r\nSản phẩm có thể dùng để trang trí trên bàn làm việc của các doanh nhân, nhằm biểu tượng cho sự sinh sôi\r\nHọa tiết hoàn toàn được vẽ tay độc đáo, chất liệu gốm sứ cao cấp tạo cho không gian trưng bày nhiều ý nghĩa.', 3000000, NULL, 'binhsutrungbay2.jpg', '79', '2018-02-16 16:22:16', '2018-02-16 16:22:16'),
(31, 'Bình hút tài lộc mã đáo thành công - men rạn cổ - cao 40cm', 5, 'Bộ sản phẩm bao gồm.\r\n\r\n01 bình có chiều cao 40cm đường kính 40cm.\r\n\r\n01 chân đế gỗ hương\r\n\r\nChất liệu: Sứ Bát Tràng\r\n\r\nHọa tiết đắp nổi\r\n\r\nSản phẩm được đun ở nhiệt độ 1300 độ C đảm bảo chắc chắn, bền đẹp.', 8000000, '7500000', 'binhsutrungbay3.jpg', '81', '2018-02-16 16:26:28', '2018-02-16 16:26:28'),
(32, 'Chóe Bát Tràng vẽ chim trĩ, hoa phù dung', 5, 'Thông tin sản phẩm:\r\n\r\nXuất xứ: Bát Tràng - Việt Nam\r\n\r\nDung tích: mỗi chóe khoảng 10l nước\r\n\r\nSản phẩm được vẽ tay hoàn toàn trên nền chất liệu sứ Bát Tràng cao cấp.', 2900000, '2500000', 'binhsutrungbay4.jpg', '91', '2018-02-16 16:29:08', '2018-02-16 16:29:08'),
(33, 'Đèn dầu thờ - dáng đèn đĩa - men lam cổ - cao 20 cm', 6, 'Theo thông tục của người Châu Á nói chung và người Việt Nam nói riêng, đèn dầu là vật thờ cúng không thể thiếu, tượng trưng cho chữ \"hỏa\" (lửa), tạo không khí ấm áp và tôn vinh sức mạnh. Đèn dầu là nét đẹp tín ngưỡng và mang ý nghĩa phong thủy. Do đó đèn dầu luôn được đặt ở vị trí ưu tiên trên bàn thờ ở các gia đình hoặc đình chùa để \"giữ lửa\" và để lấy lửa thắp hương trong các kì cúng lễ hay giỗ chạp.\r\n\r\nSản phẩm đèn dầu hoàn toàn được vẽ thủ công nhờ đôi bàn tay tài hoa khéo léo của người thợ làng gốm, kết hợp với bọc đồng tạo sức hút riêng cho sản phẩm.', 400000, NULL, 'den-dau-tho-den-dau-tho-dang-den-dia-men-lam-co-cao-20-cm-22955-1.jpg', '61', '2018-02-25 20:04:14', '2018-02-25 20:04:14'),
(34, 'Bộ ấm chén thờ - Vẽ hoa sen - Men lam', 6, NULL, 300000, '250000', 'do-tho-cung-men-mau-bo-am-chen-tho-ve-hoa-sen-men-lam-23747-1.jpg', '112', '2018-02-25 20:05:27', '2018-02-25 20:05:27');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `image`, `link`, `description`, `created_at`, `updated_at`) VALUES
(3, 'banner2.jpg', NULL, NULL, '2018-03-06 13:44:25', '2018-03-06 13:44:25'),
(4, 'banner3.jpg', 'http://localhost/GomSu/public/detail/31', NULL, '2018-03-06 13:45:03', '2018-03-06 13:45:03'),
(5, 'banner4.jpg', 'http://localhost/GomSu/public/detail/14', NULL, '2018-03-06 13:46:04', '2018-03-06 13:46:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_user` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `admin_user`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Đức Kiên', 'kienndb@bkav.com', '$2y$10$82xDH74fYTjsxbl3BTgE7eqcXXryNRkebIVAzrt1rkgeX1qVOfu2G', '1', '39dGhjLJxKLNhI54KKnoYObdbuSCNURcqUKn9YsZGUEYzgT0ikX4hBgExsnh', '2018-02-01 11:37:31', '2018-02-01 11:37:31'),
(2, 'thank', 'thank@gmail.com', '$2y$10$oOJWxqp/txGf89DHuefUBOmlkoNkEawmLgSOFkkCe/nmewzHewSGK', '0', 'YqncDna49MznbImG7wZxrFwltJFJj01BAvERobo24vU4txv9rvpWOg13Pi0Q', '2018-02-01 11:39:12', '2018-02-01 11:39:12'),
(3, 'Hậu Nguyễn', 'haunt42@wru.vn', '$2y$10$1GGI0eT7iCxQMzaAE10ZjeIB/mU852OiW.PNln0.lqjRsZR8m0C5K', '1', NULL, '2018-02-08 22:28:43', '2018-02-08 22:28:43'),
(4, 'Nguyễn Thị Hậu', 'thint42@wru.vn', '$2y$10$NlqN2Dz3/839QAD9prgFjej6wOkTo4tg9FcSdx2RZd8hMyAlT4nHa', '0', NULL, '2018-02-12 21:31:27', '2018-02-12 21:31:27'),
(5, 'ngoannguyen', 'ngoannt42@wru.vn', '$2y$10$Aivc/L8/PiYGk5tFtY8wMehHUJKbweNS64tQrFZuc.aQD1toqrKLW', '0', 'PekufZEUWm61eH8vEyuwgx0t9djtEmoFX9uc5K3jkUpK6TgPGFxqxfnfbvRD', '2018-02-18 10:21:26', '2018-02-18 10:21:26'),
(20, 'Mr.Key', 'haunguyen112797@gmail.com', '$2y$10$8n6ut7dbO8Gg9NtrBmq8V.QW3NZwGfTV5aNvjKkdYmoX6pYoi4Nl.', '0', NULL, '2018-03-04 18:36:46', '2018-03-04 18:36:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_customer_idx` (`id_customer`);

--
-- Indexes for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_idx` (`id_product`),
  ADD KEY `fk_bills_idx` (`id_bill`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idproduct` (`idproduct`),
  ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_ibfk_1` (`cate_id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `fk_customer` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `bill_details`
--
ALTER TABLE `bill_details`
  ADD CONSTRAINT `bill_details_ibfk_1` FOREIGN KEY (`id_bill`) REFERENCES `bills` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_product` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`idproduct`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
