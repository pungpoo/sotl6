-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2019 at 11:19 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sotl`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(6) UNSIGNED NOT NULL,
  `regis_title_name` varchar(30) NOT NULL,
  `regis_academic_position` varchar(30) DEFAULT NULL,
  `regis_manage_position` varchar(30) DEFAULT NULL,
  `regis_eng_name` varchar(50) NOT NULL,
  `regis_eng_lastname` varchar(50) NOT NULL,
  `regis_th_name` varchar(100) NOT NULL,
  `regis_th_lastname` varchar(100) NOT NULL,
  `regis_gender` int(1) NOT NULL,
  `regis_age` int(2) NOT NULL,
  `regis_nationality` varchar(100) NOT NULL,
  `regis_mail` varchar(100) NOT NULL,
  `regis_tel` varchar(50) NOT NULL,
  `regis_affiliation` varchar(255) NOT NULL,
  `regis_workpace` varchar(255) DEFAULT NULL,
  `regis_food` int(1) NOT NULL,
  `regis_group` int(2) DEFAULT NULL,
  `regis_payment_rate` int(1) NOT NULL,
  `regis_payment_date` date DEFAULT NULL,
  `regis_payment_status` int(1) NOT NULL DEFAULT '0',
  `regis_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `regis_title_name`, `regis_academic_position`, `regis_manage_position`, `regis_eng_name`, `regis_eng_lastname`, `regis_th_name`, `regis_th_lastname`, `regis_gender`, `regis_age`, `regis_nationality`, `regis_mail`, `regis_tel`, `regis_affiliation`, `regis_workpace`, `regis_food`, `regis_group`, `regis_payment_rate`, `regis_payment_date`, `regis_payment_status`, `regis_date`) VALUES
(5, '1', '', '', 'Numchoke', 'Kunmunwong', 'นำโชค', 'ขุนหมื่นวงค์', 0, 30, 'ไทย', 'pungpoo23@gmail.com', '0875980464', 'IL', 'IL', 1, 0, 1, NULL, 0, '2019-08-08 02:33:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
