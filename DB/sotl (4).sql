-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2020 at 10:39 AM
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
  `regis_th_name` varchar(50) NOT NULL,
  `regis_th_lastname` varchar(50) DEFAULT NULL,
  `regis_eng_name` varchar(100) DEFAULT NULL,
  `regis_eng_lastname` varchar(100) NOT NULL,
  `regis_gender` varchar(1) NOT NULL,
  `regis_age` int(2) NOT NULL,
  `regis_nationality` varchar(100) NOT NULL,
  `regis_mail` varchar(100) NOT NULL,
  `regis_phone` varchar(50) NOT NULL,
  `regis_emergency_phone` varchar(20) DEFAULT NULL,
  `regis_affiliation` varchar(255) NOT NULL,
  `regis_province` varchar(50) NOT NULL,
  `regis_food` int(1) NOT NULL,
  `regis_food_allergy` varchar(50) DEFAULT NULL,
  `regis_group` int(2) DEFAULT NULL,
  `regis_workshop_day1` varchar(2) DEFAULT NULL,
  `regis_workshop_day2` varchar(2) DEFAULT NULL,
  `regis_payment_rate` int(1) NOT NULL,
  `regis_payment_date` date DEFAULT NULL,
  `regis_payment_status` int(1) NOT NULL DEFAULT '0',
  `regis_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `regis_title_name`, `regis_th_name`, `regis_th_lastname`, `regis_eng_name`, `regis_eng_lastname`, `regis_gender`, `regis_age`, `regis_nationality`, `regis_mail`, `regis_phone`, `regis_emergency_phone`, `regis_affiliation`, `regis_province`, `regis_food`, `regis_food_allergy`, `regis_group`, `regis_workshop_day1`, `regis_workshop_day2`, `regis_payment_rate`, `regis_payment_date`, `regis_payment_status`, `regis_date`) VALUES
(112, 'รศ.ดร.', 'User1', '11', '11', '', 'M', 11, '11', 'User1@gmail.com', '33', '', '11', 'ฉะเชิงเทรา', 1, '', 0, 'w1', 'w5', 1, NULL, 9, '2019-12-20 09:00:38'),
(113, 'รศ.ดร.', 'User2', 'User2', 'User2', 'User2', 'F', 22, '22', 'User2@gmail.com', '222', '', 'ss', 'สระแก้ว', 2, '', 0, 'w2', 'w6', 1, NULL, 9, '2019-12-20 09:00:42'),
(114, 'นาง', 'User3', '333', '', '', 'F', 33, '33', 'User3@gmail.com', '33', '', 'ss', 'ปราจีนบุรี', 1, '', 0, 'w3', 'w7', 1, NULL, 9, '2019-12-20 09:00:45'),
(115, 'ผศ.', 'User4', 'User44', '', '', 'M', 44, '44', 'User44@gmail.com', '44', '', 'ss', 'ตราด', 1, '', 0, 'w4', 'w8', 1, NULL, 9, '2019-12-20 09:00:47'),
(136, 'นาย', 'นำโชค', 'ขุนหมื่นวงค์', 'Numchoke', 'yum', 'M', 33, 'ไทย', 'pungpoo23@gmail.com', '0875980464', '654654', 'สถาบันนวัตกรรมการเรียนรู้ สถาบันนวัตกรรมการเรียนรู้สถาบันนวัตกรรมการเรียนรู้', 'ปราจีนบุรี', 3, 'wefr', 0, 'w1', 'w5', 1, NULL, 0, '2019-12-18 09:23:05'),
(137, 'นาย', 'User1', '11', '11', '11', 'M', 11, '11', 'User1@gmail.com1', '111', '111', '11', 'ปราจีนบุรี', 1, '11', 1, 'w2', 'w6', 1, NULL, 0, '2019-12-20 09:25:00'),
(138, 'นาง', 'User2', '22', 'User2', 'User2', 'F', 2, '22', 'qqq@gmail.com22', '22', '', 'เด้พะ้ั', 'นครราชสีมา', 2, '22', 1, 'w3', 'w7', 1, NULL, 0, '2019-12-20 09:25:07'),
(139, 'รศ.ดร.', 'User3', '333', '2233', 'rr', 'M', 3, '33', '33@gmail.com33', '33', '', '33', 'ฉะเชิงเทรา', 3, '33', 1, 'w3', 'w5', 1, NULL, 0, '2019-12-20 09:25:12'),
(140, 'ผศ.', 'พพพ', 'ะพั-ภถ', '', '', 'M', 44, 'พพพ', '44@gmail.com44', '5656', '351651', 'พะำพะไำพเ', 'ปราจีนบุรี', 1, '้เด้ำพะ', 1, 'w4', 'w8', 1, NULL, 0, '2019-12-20 09:25:17'),
(141, 'พพพพ', 'User5พำพ', '55', 'พพพพ', 'พพพ', 'M', 20, '33', '55@gmail.com55', '4444', '444', '55', 'จันทบุรี', 3, 'ery', 1, 'w3', 'w5', 1, NULL, 0, '2019-12-20 09:25:21'),
(142, 'รศ.ดร.', 'พำพำ', 'พำพำ', 'ertdfh', 'sfdh', 'M', 98, 'ไทย', '66@gmail.com66', '080808', '654654', '321321', 'สระแก้ว', 1, 'ื่ม้่า', 1, 'w4', 'w7', 1, NULL, 0, '2019-12-20 09:25:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_province`
--

CREATE TABLE `tbl_province` (
  `﻿province_id` int(3) NOT NULL,
  `country_id` int(3) DEFAULT NULL,
  `province_name_th` varchar(255) DEFAULT NULL,
  `province_name_en` varchar(255) DEFAULT NULL,
  `province_regional_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_province`
--

INSERT INTO `tbl_province` (`﻿province_id`, `country_id`, `province_name_th`, `province_name_en`, `province_regional_name`) VALUES
(10, 217, 'กรุงเทพมหานคร', 'BANGKOK', 'BKK'),
(11, 217, 'สมุทรปราการ', 'SAMUT PRAKAN', 'NearBKK'),
(12, 217, 'นนทบุรี', 'NONTHABURI', 'NearBKK'),
(13, 217, 'ปทุมธานี', 'PATHUM THANI', 'NearBKK'),
(14, 217, 'พระนครศรีอยุธยา', 'PHRA NAKHON SI AYUTTHAYA', 'Central'),
(15, 217, 'อ่างทอง', 'ANG THONG', 'Central'),
(16, 217, 'ลพบุรี', 'LOPBURI', 'Central'),
(17, 217, 'สิงห์บุรี', 'SING BURI', 'Central'),
(18, 217, 'ชัยนาท', 'CHAINAT', 'Central'),
(19, 217, 'สระบุรี', 'SARABURI', 'Central'),
(20, 217, 'ชลบุรี', 'CHONBURI', 'East'),
(21, 217, 'ระยอง', 'RAYONG', 'East'),
(22, 217, 'จันทบุรี', 'CHANTHABURI', 'East'),
(23, 217, 'ตราด', 'TRAT', 'East'),
(24, 217, 'ฉะเชิงเทรา', 'CHACHOENGSAO', 'East'),
(25, 217, 'ปราจีนบุรี', 'PRACHINBURI', 'East'),
(26, 217, 'นครนายก', 'NAKHON NAYOK', 'Central'),
(27, 217, 'สระแก้ว', 'SA KAEO', 'East'),
(30, 217, 'นครราชสีมา', 'NAKHON RATCHASIMA', 'NEast'),
(31, 217, 'บุรีรัมย์', 'BURIRAM', 'NEast'),
(32, 217, 'สุรินทร์', 'SURIN', 'NEast'),
(33, 217, 'ศรีสะเกษ', 'SISAKET', 'NEast'),
(34, 217, 'อุบลราชธานี', 'UBON RATCHATHANI', 'NEast'),
(35, 217, 'ยโสธร', 'YASOTHON', 'NEast'),
(36, 217, 'ชัยภูมิ', 'CHAIYAPHUM', 'NEast'),
(37, 217, 'อำนาจเจริญ', 'AMNAT CHAROEN', 'NEast'),
(38, 217, 'บึงกาฬ', 'BUENG KAN', 'NEast'),
(39, 217, 'หนองบัวลำภู', 'NONG BUA LAMPHU', 'NEast'),
(40, 217, 'ขอนแก่น', 'KHON KAEN', 'NEast'),
(41, 217, 'อุดรธานี', 'UDON THANI', 'NEast'),
(42, 217, 'เลย', 'LOEI', 'NEast'),
(43, 217, 'หนองคาย', 'NONG KHAI', 'NEast'),
(44, 217, 'มหาสารคาม', 'MAHA SARAKHAM', 'NEast'),
(45, 217, 'ร้อยเอ็ด', 'ROI ET', 'NEast'),
(46, 217, 'กาฬสินธุ์', 'KALASIN', 'NEast'),
(47, 217, 'สกลนคร', 'SAKON NAKHON', 'NEast'),
(48, 217, 'นครพนม', 'NAKHON PHANOM', 'NEast'),
(49, 217, 'มุกดาหาร', 'MUKDAHAN', 'NEast'),
(50, 217, 'เชียงใหม่', 'CHIANG MAI', 'North'),
(51, 217, 'ลำพูน', 'LAMPHUN', 'North'),
(52, 217, 'ลำปาง', 'LAMPANG', 'North'),
(53, 217, 'อุตรดิตถ์', 'UTTARADIT', 'North'),
(54, 217, 'แพร่', 'PHRAE', 'North'),
(55, 217, 'น่าน', 'NAN', 'North'),
(56, 217, 'พะเยา', 'PHAYAO', 'North'),
(57, 217, 'เชียงราย', 'CHIANG RAI', 'North'),
(58, 217, 'แม่ฮ่องสอน', 'MAE HONG SON', 'North'),
(60, 217, 'นครสวรรค์', 'NAKHON SAWAN', 'Central'),
(61, 217, 'อุทัยธานี', 'UTHAI THANI', 'Central'),
(62, 217, 'กำแพงเพชร', 'KAMPHAENG PHET', 'Central'),
(63, 217, 'ตาก', 'TAK', 'West'),
(64, 217, 'สุโขทัย', 'SUKHOTHAI', 'Central'),
(65, 217, 'พิษณุโลก', 'PHITSANULOK', 'Central'),
(66, 217, 'พิจิตร', 'PHICHIT', 'Central'),
(67, 217, 'เพชรบูรณ์', 'PHETCHABUN', 'Central'),
(70, 217, 'ราชบุรี', 'RATCHABURI', 'West'),
(71, 217, 'กาญจนบุรี', 'KANCHANABURI', 'West'),
(72, 217, 'สุพรรณบุรี', 'SUPHAN BURI', 'Central'),
(73, 217, 'นครปฐม', 'NAKHON PATHOM', 'NearBKK'),
(74, 217, 'สมุทรสาคร', 'SAMUT SAKHON', 'Central'),
(75, 217, 'สมุทรสงคราม', 'SAMUT SONGKHRAM', 'Central'),
(76, 217, 'เพชรบุรี', 'PHETCHABURI', 'West'),
(77, 217, 'ประจวบคีรีขันธ์', 'PRACHUAP KHIRI KHAN', 'West'),
(80, 217, 'นครศรีธรรมราช', 'NAKHON SI THAMMARAT', 'South'),
(81, 217, 'กระบี่', 'KRABI', 'South'),
(82, 217, 'พังงา', 'PHANG NGA', 'South'),
(83, 217, 'ภูเก็ต', 'PHUKET', 'South'),
(84, 217, 'สุราษฎร์ธานี', 'SURAT THANI', 'South'),
(85, 217, 'ระนอง', 'RANONG', 'South'),
(86, 217, 'ชุมพร', 'CHUMPHON', 'South'),
(90, 217, 'สงขลา', 'SONGKHLA', 'South'),
(91, 217, 'สตูล', 'SATUN', 'South'),
(92, 217, 'ตรัง', 'TRANG', 'South'),
(93, 217, 'พัทลุง', 'PHATTHALUNG', 'South'),
(94, 217, 'ปัตตานี', 'PATTANI', 'South'),
(95, 217, 'ยะลา', 'YALA', 'South'),
(96, 217, 'นราธิวาส', 'NARATHIWAT', 'South');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_province`
--
ALTER TABLE `tbl_province`
  ADD PRIMARY KEY (`﻿province_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
