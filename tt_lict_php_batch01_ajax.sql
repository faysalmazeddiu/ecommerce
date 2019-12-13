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
-- Database: `tt_lict_php_batch01_ajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE IF NOT EXISTS `tbl_company` (
  `id` int(4) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `like_count` int(3) NOT NULL,
  `dislike_count` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`id`, `company_name`, `like_count`, `dislike_count`) VALUES
(1, 'TalhaTraining', 3, 0),
(2, 'Google', 0, 0),
(3, 'Facebook', 4, 0),
(4, 'BITM', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE IF NOT EXISTS `tbl_student` (
  `student_id` int(4) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_email` varchar(100) NOT NULL,
  `mobile` varchar(14) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`student_id`, `student_name`, `student_email`, `mobile`) VALUES
(1, 'Aminur', 'aminur@gmail.com', '<br>'),
(2, 'Nipa', 'nipa@gmail.com', '01918989898'),
(3, 'Uzzol', 'uzzol@yanoo.com', '01918878787'),
(4, 'Kawser', 'kawser@gmail.com', '01987676767'),
(5, 'Mazed', 'mazed@gmail.com', '<br>'),
(6, 'Minaur', 'minaur@gmail.com', '01676767676'),
(7, 'Rashu', 'rashu@gmail.com', '01918878685'),
(8, 'Rayhan', 'rayhan@gmail.com', '01716767676'),
(9, 'akramul', 'akramul@gmail.com', '01716858585'),
(10, 'golam rabbani', 'golamrabbani@gmail.com', '01745794968'),
(11, 'fahad', 'fahad@gmail.com', '0168957584'),
(12, 'rasel', 'rasel@gmail.com', '01489547565');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_company`
--
ALTER TABLE `tbl_company`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `student_id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
