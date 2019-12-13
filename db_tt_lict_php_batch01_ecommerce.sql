-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2016 at 08:54 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tt_lict_php_batch01_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_08_30_050732_create_tbl_admin_table', 1),
('2016_09_01_064200_create_tbl_category_table', 2),
('2016_09_19_035122_create_tbl_manufacturer_table', 3),
('2016_09_19_055459_create_tbl_product_table', 4),
('2016_09_29_041555_create_tbl_customer_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(10) unsigned NOT NULL,
  `admin_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `admin_email_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admin_password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `access_label` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `admin_name`, `admin_email_address`, `admin_password`, `access_label`, `created_at`, `updated_at`) VALUES
(1, 'Md. Shafiul Alam', 'topu1826@gmail.com', '96e79218965eb72c92a549dd5a330112', 1, '2016-08-30 07:00:00', '2016-08-30 07:00:00'),
(2, 'Md. Saahil Alam Talha', 'saahil.alam@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, '2016-08-29 07:00:00', '2016-08-29 07:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `id` int(10) unsigned NOT NULL,
  `category_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Mobile', '=-----------------<br>', 1, NULL, NULL),
(3, 'TV', '+++++++++++++', 1, NULL, NULL),
(5, 'Laptop', '----------------', 1, NULL, NULL),
(6, 'Pendrive', '---------------', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `customer_id` int(10) unsigned NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `first_name`, `last_name`, `email_address`, `password`, `mobile`, `address`, `gender`, `dob`, `city`, `country`, `zip_code`, `created_at`, `updated_at`) VALUES
(1, 'Shafana', 'Alam', 'shafana.alam@gmail.com', '96e79218965eb72c92a549dd5a330112', '01712742217', 'Kolabagan,Dhaka', 'Female', '2014-07-24', 'Dhaka', 'Bangladesh', '1205', NULL, NULL),
(2, 'Saahil', 'Alam', 'saahil.alam@gmail.com', '96e79218965eb72c92a549dd5a330112', '01918989898', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Jannatul', 'Miskat', 'jannatul.miskat@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01918989898', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Jannatul', 'Miskat', 'jannatul.miskat@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01918989898', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufacturer`
--

CREATE TABLE IF NOT EXISTS `tbl_manufacturer` (
  `id` int(10) unsigned NOT NULL,
  `manufacturer_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `manufacturer_description` text COLLATE utf8_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_manufacturer`
--

INSERT INTO `tbl_manufacturer` (`id`, `manufacturer_name`, `manufacturer_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Sony Electra', 'Sony Manufacturer description', 0, NULL, NULL),
(3, 'Samsung', 'Samsung Manufacturer description', 1, NULL, NULL),
(4, 'Butterfly', 'Butterfly Manufacturer description', 1, NULL, NULL),
(5, 'Transcend', '----------------------', 1, NULL, NULL),
(6, 'Apple', '------------', 1, NULL, NULL),
(7, 'Sony', '-----------', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `id` int(10) unsigned NOT NULL,
  `category_id` int(11) NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `reorder_label` int(11) NOT NULL,
  `is_featured` tinyint(4) NOT NULL,
  `product_short_description` text COLLATE utf8_unicode_ci NOT NULL,
  `product_long_description` text COLLATE utf8_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `category_id`, `manufacturer_id`, `product_name`, `product_price`, `product_quantity`, `reorder_label`, `is_featured`, `product_short_description`, `product_long_description`, `product_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 1, 6, 'IPhone 7', 70000.00, 10, 2, 1, 'IPhone 7 Short Description Here....<br>', 'IPhone 7 Long Description Here....', 'public/product_image/hAkYXdk0rStaKkNzEfRz.jpg', 1, '2016-09-20 06:08:06', NULL),
(3, 5, 6, 'Mac Latest', 120000.00, 10, 2, 1, 'Mac Latest short description<br>', 'Mac Latest Long description', 'public/product_image/DkcbHH1ckBsVkM2nMKOD.jpg', 1, '2016-09-20 06:09:18', NULL),
(4, 3, 7, 'Sony Tv', 80000.00, 5, 1, 0, 'Sony Tv Short Description<br>', 'Sony Tv Long Description', 'public/product_image/oDlwoXxbG2tHaMITclmf.jpg', 1, '2016-09-20 06:10:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_manufacturer`
--
ALTER TABLE `tbl_manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_manufacturer`
--
ALTER TABLE `tbl_manufacturer`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
