-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 03:00 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(78999, 'admin', '123999', 0, '0000-00-00 00:00:00'),
(00001, 'tumtum_admin', 'tumtum_admin', 1, '2020-12-12 14:15:38');

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
(10, 'ตำกุ้งสด.jpg', '', 'ตำกุ้งสด', '100', 'tum'),
(11, 'ตำข้าวโพดไข้เค็ม.jpg', '', 'ตำข้าวโพดไข้เค็ม', '80', 'tum'),
(12, 'ตำซั่ว.jpg', '', 'ตำซั่ว', '55', 'tum'),
(13, 'ตำถาด.jpg', '', 'ตำถาด', '120', 'tum'),
(14, 'ตำไทย.jpg', '', 'ตำไทย', '55', 'tum'),
(15, 'ตำปลาช่อนทอด.jpg', '', 'ตำปลาช่อนทอด', '100', 'tum'),
(16, 'ตำปูม้า.jpg', '', 'ตำปูม้า', '90', 'tum'),
(17, 'ตำลาว.jpg', '', 'ตำลาว', '55', 'tum'),
(18, 'แกงผักหวานใส่เห็ดเผาะ.jpg', '', 'แกงผักหวานใส่เห็ดเผาะ', '150', 'tom'),
(19, 'แกงเห็ดรวม.jpg', '', 'แกงเห็ดรวม', '100', 'tom'),
(20, 'แกงอ่อมหมู.jpg', '', 'แกงอ่อมหมู', '95', 'tom'),
(21, 'ซุปเปอร์ลูกทุ่ง.jpg', '', 'ซุปเปอร์ลูกทุ่ง', '95', 'tom'),
(22, 'ต้มไก่ใบมะขาม.jpg', '', 'ต้มไก่ใบมะขาม', '95', 'tom'),
(23, 'ต้มโคล้งปลาดุกย่าง.jpg', '', 'ต้มโคล้งปลาดุกย่าง', '150', 'tom'),
(24, 'ต้มแซ่บกกระดูกอ่อน.jpg', '', 'ต้มแซ่บกกระดูกอ่อน', '100', 'tom'),
(25, 'ต้มแซ่บซีฟู้ด.jpg', '', 'ต้มแซ่บซีฟู้ด', '95', 'tom'),
(26, 'ตับหวาน.jpg', '', 'ตับหวาน', '90', 'larb'),
(27, 'ลาบกุ้ง.jpg', '', 'ลาบกุ้ง', '100', 'larb'),
(28, 'ลาบไก่ย่าง.jpg', '', 'ลาบไก่ย่าง', '95', 'larb'),
(29, 'ลาบปลาดุกกรอบ.jpg', '', 'ลาบปลาดุกกรอบ', '90', 'larb'),
(30, 'ลาบปลาหมึก.jpg', '', 'ลาบปลาหมึก', '85', 'larb'),
(31, 'ลาบหมู.jpg', '', 'ลาบหมู', '90', 'larb'),
(32, 'ลาบหมูทอด.jpg', '', 'ลาบหมูทอด', '95', 'larb'),
(33, 'ลาบเห็ดฟาง.jpg', '', 'ลาบเห็ดฟาง', '85', 'larb'),
(34, 'กุ้งแช่น้ำปลา.jpg', '', 'กุ้งแช่น้ำปลา', '130', 'yarm'),
(35, 'พล่ากุ้ง.jpg', '', 'พล่ากุ้ง', '100', 'yarm'),
(36, 'ยำไก่ย่าง.jpg', '', 'ยำไก่ย่าง', '85', 'yarm'),
(37, 'ยำปูม้า.jpg', '', 'ยำปูม้า', '140', 'yarm'),
(38, 'ยำผักบุ้งกรอบ.jpg', '', 'ยำผักบุ้งกรอบ', '130', 'yarm'),
(39, 'ยำรวมมิตร.jpg', '', 'ยำรวมมิตร', '95', 'yarm'),
(40, 'ยำหอยแครง.jpg', '', 'ยำหอยแครง', '120', 'yarm'),
(41, 'หมูมะนาว.jpg', '', 'หมูมะนาว', '100', 'yarm'),
(42, 'เกี๊ยวห่อลาบ.jpg', '', 'เกี๊ยวห่อลาบ', '120', 'fires'),
(43, 'ปากเป็ดทอด.jpg', '', 'ปากเป็ดทอด', '100', 'fires'),
(44, 'ปีกไก่ทอด.jpg', '', 'ปีกไก่ทอด', '95', 'fires'),
(45, 'ฝรั่งห่อลาว.jpg', '', 'ฝรั่งห่อลาว', '160', 'fires'),
(46, 'สเต็กลาวหมู.jpg', '', 'สเต็กลาวหมู', '160', 'fires'),
(47, 'ไส้กรอกอีสาน.jpg', '', 'ไส้กรอกอีสาน', '95', 'fires'),
(48, 'ไส้ตันทอดกระเทียม.jpg', '', 'ไส้ตันทอดกระเทียม', '100', 'fires'),
(49, 'แหนมเอ็นไก่ทอด.jpg', '', 'แหนมเอ็นไก่ทอด', '95', 'fires'),
(50, 'น้ำกระเจี๊ยบ.jpg', '', 'น้ำกระเจี๊ยบ', '25', 'drink'),
(51, 'น้ำเก๊กฮวย.jpg', '', 'น้ำเก๊กฮวย', '25', 'drink'),
(52, 'น้ำแตงโมปั่น.jpg', '', 'น้ำแตงโมปั่น', '45', 'drink'),
(53, 'น้ำมะพร้าวปั่น.jpg', '', 'น้ำมะพร้าวปั่น', '45', 'drink'),
(54, 'น้ำลำไย.jpg', '', 'น้ำลำไย', '25', 'drink'),
(55, 'น้ำส้มปั่น.jpg', '', 'น้ำส้มปั่น', '45', 'drink');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbproduct`
--
ALTER TABLE `tbproduct`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
