-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2019 at 05:42 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakerydata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbcontact`
--

CREATE TABLE `tbcontact` (
  `id` int(11) NOT NULL,
  `nameContact` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `contactchannel` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `datetimeContact` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbcontact`
--

INSERT INTO `tbcontact` (`id`, `nameContact`, `address`, `contactchannel`, `description`, `datetimeContact`) VALUES
(1, 'เกียรติศักดิ์', '88/1', 'kts@gmail.com', 'สั่งของ', '2019-10-16 10:17:23'),
(2, 'ศิริชัย  ', '88/2', 'sirichai@mail.com , 089-234-7899', 'ส่งสินค้่า', '2019-10-16 10:21:05'),
(3, 'สุชาติ', '88/3', '087-555-4455', 'สั่งของ', '2019-10-16 10:22:51'),
(4, 'พานิดา', '88/4', '081-335-7746', 'สั่งของเพิ่ม', '2019-10-16 10:25:32'),
(5, 'สันติ', '88/5', '065-998-8844', 'สั่งของเพิ่ม', '2019-10-16 10:47:48'),
(6, 'สมหญิง', '88/6', '055-355-4778', 'สอบถาม', '2019-10-16 10:50:37'),
(7, 'วงศฏาพร', '88/7', '082-669-7788', 'สอบถาม', '2019-10-16 10:53:48'),
(8, 'มาลิณี', '88/8', '081-665-7788', 'ส่งสินค้า', '2019-10-16 10:56:50'),
(9, 'อภิศฎา', '88/9', '099-999-9999', 'สั่งของเพิ่ม', '2019-11-05 11:39:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbproduct`
--

CREATE TABLE `tbproduct` (
  `productID` int(11) NOT NULL,
  `picproduct` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `engname` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `thname` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `typeproduct` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbproduct`
--

INSERT INTO `tbproduct` (`productID`, `picproduct`, `engname`, `thname`, `price`, `typeproduct`) VALUES
(1, 'f1.jpg', '', 'ปากเป็ดทอด', '', 'star'),
(2, 'f2.jpg', '', 'ไส้ตันทอด', '', 'star'),
(3, 'f3.jpg', '', 'ปีกไก่ทอด', '', 'star'),
(4, 'f4.jpg', '', 'คอหมูย่าง', '', 'star'),
(5, 'f5.jpg', '', 'ไก่อบโอ่ง', '', 'star'),
(6, 'f6.jpg', '', 'พล่ากุ้ง', '', 'star'),
(7, 'f7.jpg', '', 'ยำผักบุ้งกรอบ', '', 'star'),
(8, 'f8.jpg', '', 'ยำรวม', '', 'star'),
(9, 'f9.jpg', '', 'ลาบหมู', '', 'star');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbcontact`
--
ALTER TABLE `tbcontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbproduct`
--
ALTER TABLE `tbproduct`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbcontact`
--
ALTER TABLE `tbcontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbproduct`
--
ALTER TABLE `tbproduct`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
