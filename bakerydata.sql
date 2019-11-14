-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2019 at 09:09 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

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
-- Table structure for table `admintb`
--

CREATE TABLE `admintb` (
  `AdminID` int(5) UNSIGNED ZEROFILL NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `LoginStatusad` int(1) NOT NULL,
  `LastUpdatead` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admintb`
--

INSERT INTO `admintb` (`AdminID`, `username`, `password`, `LoginStatusad`, `LastUpdatead`) VALUES
(78999, 'admin', '123999', 0, '0000-00-00 00:00:00');

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
(1, 'มานะ', '88 ดุสอต', 'mana@gmail.com', 'สั่งของ', '2019-10-16 10:17:23'),
(2, 'ศิริชัย  ', '111 ลาดพร้าว  กรงเทพ', 'sirichai@mail.com , 089-2347899', 'เรื่องการจัดส่งสินค้่า', '2019-10-16 10:21:05'),
(3, 'สุชาติ', '222', '0874-5554455', 'สั่งของ', '2019-10-16 10:22:51'),
(4, 'พานิดา', '254 ', '081-3357746', 'สั่งของเพิ่ม', '2019-10-16 10:25:32'),
(5, 'สันติ', '699', '065-9988844', 'สั่ง', '2019-10-16 10:47:48'),
(6, 'สมหญิง', '897', '055-3554778', 'สอบถาม', '2019-10-16 10:50:37'),
(7, 'วง', '222', '082-6697788', 'ส', '2019-10-16 10:53:48'),
(8, 'มาลิณี', '897', '081-6657788', 'สั่ง', '2019-10-16 10:56:50');

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
(1, 'bun-pork1.jpg', 'pig suagesage bread ', 'ขนมปังไส้กรอกหมู', '25', 'star'),
(2, 'cake4.jpg', 'VanilaCake ', 'เค๊กวนิลา', '49', 'star'),
(3, 'bun-pork1.jpg', 'pig suagesage bread ', 'ขนมปังไส้กรอกหมู', '25', 'bread'),
(4, 'cake4.jpg', 'VanilaCake ', 'เค๊กวนิลา', '49', 'cakepiece');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintb`
--
ALTER TABLE `admintb`
  ADD PRIMARY KEY (`AdminID`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbproduct`
--
ALTER TABLE `tbproduct`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
