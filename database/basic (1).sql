-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2021 at 08:20 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `name`) VALUES
(1, 'admin', 'admin', 'adminpor'),
(2, 'admin123456789', 'admin1234', 'porrrrrrrrrrrrr'),
(4, 'member', 'member', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `book_detail` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `booktype_id` int(11) NOT NULL,
  `price` int(10) NOT NULL,
  `year_of_publication` varchar(10) NOT NULL,
  `member_id` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL COMMENT 'สถานะ 1.ว่าง 2.จองเเล้ว '
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_name`, `book_detail`, `author`, `booktype_id`, `price`, `year_of_publication`, `member_id`, `img`, `status`) VALUES
(2, 'วิ่งครั้งใหม่ ใจเกินร้อย เล่ม 2', '<p>คิคุซาโตะโชตะ นักเรียนมัธยมปลายผู้ประสบอุบัติเหตุ เสียขาข้างซ้ายไป จึงต้องใส่ขาเทียม เขาตัดสินใจเป็นนักกีฬาคนพิการ หลังได้รู้จักกับขาเทียมสำหรับวิ่งแข่งโดยการแนะนำของชิโดริ ช่างทำแขนขาเทียม คิคุซาโตะตั้งใจจะเข้าชมรมกรีฑา แต่ก็มีอุปสรรคขวางกั้น ทั้งเพื่อนเก่าสมัยอยู่ชมรมฟุตบอล แล้วไหนจะสมาชิกชมรมกรีฑาที่ยังไม่มั่นใจในตัวเขารวมถึงแม่ที่คัดค้านหัวชนฝา การเริ่มต้นชีวิตบทใหม่ของเด็กหนุ่มและเรื่องราวน่ายินดีกำลังเข้มข้นขึ้นแล้ว !!</p>\r\n', 'Wataru MIDORI', 3, 55, '2560', 3, '200769186720211002_054926.png', '2'),
(3, 'วิ่งครั้งใหม่ ใจเกินร้อย เล่ม 1', '<p>&quot;คิคุซาโตะ โชตะ นักเรียนมัธยมปลายประสบอุบัติเหตุสูญเสียขาซ้าย และต้องใส่ขาเทียม สมัยมัธยมต้นเคยเป็นกองหน้าตัวทำประตูของชมรมฟุตบอลก็จริง พอย้ายมาต่อมัธยมปลายที่โรงเรียนใหม่ซึ่งได้ชื่อว่าเป็นสายแข็งทีมฟุตบอลแต่กลับไม่มีโอกาสได้แตะลูกเลย แต่แล้ว การโคจรมาพบกับชิโดริ ช่างทำขาเทียมท่าทางน่าสงสัย ทำให้คิคุซาโตะได้พบกับขาเทียมสำหรับแข่งกีฬาเป็นครั้งแรก---</p>\r\n', 'Wataru MIDORI', 3, 55, '2560', 3, '54925596720210926_045701.png', '2'),
(4, 'จักรพรรดิเซียนหวนคืน เล่ม 2 รีไรท์', '<p>เมื่อการตามหาพ่อแม่และสาเหตุที่เขาต้องติดคุก โยงไปหาคนที่มีอำนาจมากขึ้น คนบงการเบื้องหลังนั้นเป็นใคร ยิ่งหายิ่งเจอข้อสงสัยมากมาย ในขณะที่ฉู่ชวิ๋นกำลังหาตัวคนร้าย เขาก็ต้องเข้าไปพัวพันกับสาวสวยอย่าง ฮัวชิงหวู่ พิธีแต่งงานที่ถูกบังคับ เขาจะช่วยเธอคลี่คลายปัญหานี้ได้หรือไม่....</p>\r\n', '修果', 1, 179, '2540', 4, '65511084820211002_053922.png', '2'),
(5, 'จักรพรรดิเซียนหวนคืน เล่ม 1 รีไรท์', '<p>เมื่อความแค้นทำให้เขาต้องกลับมา.. ฉู่ชวิ้น เด็กหนุ่มผู้ใสซื่อถูกจับเข้าคุกในข้อหาที่เขาเองก็ยังสงสัยมามันคืออะไร อีกทั้งชีวิตในคุกของเขาเต็มไปด้วยความเจ็บปวด จนกระทั้งเขาถูกกระทืบตาย หลังจากที่เขาตายแล้ววิญญาญได้ข้ามไปยังโลกแห่งผู้ฝึกตน คนอื่นใช้เวลาหมื่นปีเป็นจักรพรรดิ์เซียน แต่สำหรับเขานั้น ใช่เวลาเพียง 3000 ปีก็อยู่บนจุดสูงสุดของจักพรรดิ์เซียน แต่ในเวลานั้นจิตใจของเขายังคงสับสนเพราะต้องการรู้ความจริงที่เกิดขึ้นในภพชาติก่อน เขาจึงใช้พลังเซียนทั้งหมดเพื่อเปิดประตูมิติ ส่งวิญญาณของเขากลับมาที่ร่างเก่าที่อยู่ในคุก ก่อนวันที่เขาจะตายเพียงหนึ่งวัน........... นี้คือการกลับมาล้างแค้นและค้นหาความจริงแต่เขานั้นไม่ใช่คนเดิมอีกต่อไปเขาคือ จักรพรรดิเซียน!</p>\r\n', '修果', 0, 179, '2560', 4, '176938404520210927_203010.png', '2'),
(6, 'วิ่งครั้งใหม่ ใจเกินร้อย เล่ม 3', '<p>&quot;โชคชะตาและการโคจรมาพบกับกรีฑาคนพิการที่เคยฝันใฝ่ ความบาดหมางกับเพื่อนสมัยอยู่ชมรมฟุตบอล เล่านักกีฬาชมรมกรีฑาของโรงเรียนมัธยมปลายยามะงามิเนะที่ต้องเคว้ง เมื่อมหกรรมการแข่งขันกีฬารายการใหญ่ต้องหยุดไป อันเป็นผลมาจากการแพร่ระบาดของโควิด ไวรัสโคโรน่าสายพันธุ์ใหม่ คิคุซาโตะ นักเรียนชาย ม.ปลาย ผู้สูญเสียขาซ้ายตัดสินใจเริ่มต้นชีวิตนักกีฬากรีฑาด้วยขาเทียม... การดิ้นรน ต่อสู้ และเติบโต ------- เรื่องราวชีวิตบทใหม่ และความหวังของหนุ่มน้อยที่พร้อมจะก้าวต่อไปอย่างไม่หยุดยั้ง!!&quot;</p>\r\n', 'Wataru MIDORI\r\n', 1, 55, '2564', 3, '116088761220211002_060056.png', '2');

-- --------------------------------------------------------

--
-- Table structure for table `booktype`
--

CREATE TABLE `booktype` (
  `booktype_id` int(11) NOT NULL,
  `booktype_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booktype`
--

INSERT INTO `booktype` (`booktype_id`, `booktype_name`) VALUES
(1, 'นิยาย'),
(2, 'การ์ตูน'),
(3, 'หนังสือ');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member_id` int(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `title` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  `member_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `phone`, `title`, `name`, `lastname`, `email`, `username`, `password`, `member_type`) VALUES
(1, '0951838978', 'นางสาว', 'sasitorn', 'sasitorn', 'sasitorn@gmail.com', 'user1', 'user1', 'member'),
(3, '0640232594', 'นางสาว', 'sasiton1234', 'sasiton1234', 'a@dddd', '1st19881', '1st19881', 'member'),
(5, '  09185888', 'นาย', '  member123', '  member123', '  a@dddd', '  member', '  member', 'member'),
(7, '06152552', 'นางสาว', 'arin', 'lada', 'sfdfhtuyt@gmail.com', 'arinlada', '1234', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `transection`
--

CREATE TABLE `transection` (
  `booking_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `book_name` text NOT NULL,
  `member_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status_book` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transection`
--

INSERT INTO `transection` (`booking_id`, `book_id`, `book_name`, `member_id`, `price`, `date`, `status_book`) VALUES
(1, 5, 'จักรพรรดิเซียนหวนคืน เล่ม 1 รีไรท์', 3, 179, '2019-10-17 03:13:54', '1'),
(2, 6, 'วิ่งครั้งใหม่ ใจเกินร้อย เล่ม 3', 3, 55, '2018-10-18 03:14:25', '2'),
(3, 4, 'จักรพรรดิเซียนหวนคืน เล่ม 2 รีไรท์', 3, 179, '2021-10-02 04:55:19', '1'),
(4, 3, 'วิ่งครั้งใหม่ ใจเกินร้อย เล่ม 1', 3, 55, '2020-10-21 04:55:22', '2'),
(5, 2, 'วิ่งครั้งใหม่ ใจเกินร้อย เล่ม 2', 3, 55, '2021-10-02 04:55:25', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `booktype`
--
ALTER TABLE `booktype`
  ADD PRIMARY KEY (`booktype_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `transection`
--
ALTER TABLE `transection`
  ADD PRIMARY KEY (`booking_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `booktype`
--
ALTER TABLE `booktype`
  MODIFY `booktype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transection`
--
ALTER TABLE `transection`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
