-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 02:21 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stou`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` varchar(2) NOT NULL,
  `course_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`) VALUES
('01', 'สาขาวิชาศิลปศาสตร์ - ไทยคดีศึกษา'),
('02', 'สาขาวิชาศิลปศาสตร์ - สารสนเทศทั่วไป'),
('03', 'สาขาวิชาศิลปศาสตร์ - สารสนเทศสำนักงาน'),
('04', 'สาขาวิชาศิลปศาสตร์ - ภาษาอังกฤษ'),
('05', 'สาขาวิชามนุษยนิเวศศาสตร์ - อาหาร โภชนาการและการประยุกต์'),
('06', 'สาขาวิชามนุษยนิเวศศาสตร์ - พัฒนาการมนุษย์และครอบครัว'),
('07', 'สาขาวิชาศึกษาศาสตร์ - การพัฒนาเด็กปฐมวัย'),
('08', 'สาขาวิชาศึกษาศาสตร์ - การแนะแนวและการปรึกษาเชิงจิตวิทยา'),
('09', 'สาขาวิชาศึกษาศาสตร์ - การเรียนรู้ตลอดชีวิต'),
('10', 'สาขาวิชาศึกษาศาสตร์ - เทคโนโลยีและสื่อสารการศึกษา'),
('11', 'สาขาวิชารัฐศาสตร์ - การเมืองการปกครอง'),
('12', 'สาขาวิชารัฐศาสตร์ - ความสัมพันธ์ระหว่างประเทศ'),
('13', 'สาขาวิชาวิทยาการจัดการ - การจัดการงานก่อสร้าง'),
('14', 'สาขาวิชาวิทยาการจัดการ - การจัดการ'),
('15', 'สาขาวิชาวิทยาการจัดการ - การเงิน'),
('16', 'สาขาวิชาวิทยาการจัดการ - การตลาด'),
('17', 'สาขาวิชาวิทยาการจัดการ - การจัดการการท่องเที่ยว'),
('18', 'สาขาวิชาวิทยาการจัดการ - บัญชีบัณฑิต'),
('19', 'สาขาวิชาวิทยาการจัดการ - รัฐประศาสนศาสตร์บัณฑิต'),
('20', 'สาขาวิชาเกษตรศาสตร์และสหกรณ์ - ส่งเสริมและพัฒนาการเกษตร'),
('21', 'สาขาวิชาเกษตรศาสตร์และสหกรณ์ - การจัดการทรัพยากรป่าไม้และสิ่งแวดล้อม'),
('22', 'สาขาวิชาเกษตรศาสตร์และสหกรณ์ - การจัดการการผลิตพืช'),
('23', 'สาขาวิชาเกษตรศาสตร์และสหกรณ์ - การจัดการการผลิตสัตว์'),
('24', 'สาขาวิชาเกษตรศาสตร์และสหกรณ์ - ธุรกิจการเกษตร'),
('25', 'สาขาวิชาเกษตรศาสตร์และสหกรณ์ - สหกรณ์'),
('26', 'สาขาวิชานิติศาสตร์'),
('27', 'สาขาวิชานิเทศศาสตร์'),
('28', 'สาขาวิชาวิทยาศาสตร์สุขภาพ - สาธารณสุขชุมชน'),
('29', 'สาขาวิชาวิทยาศาสตร์สุขภาพ - อาชีวอนามัยและความปลอดภัย'),
('30', 'สาขาวิชาวิทยาศาสตร์และเทคโนโลยี - การจัดการเทคโนโลยีสารสนเทศและการสื่อสาร'),
('31', 'สาขาวิชาวิทยาศาสตร์และเทคโนโลยี - วิทยาการคอมพิวเตอร์'),
('32', 'สาขาวิชาวิทยาศาสตร์และเทคโนโลยี - เทคโนโลยีการผลิตอุตสาหกรรม'),
('33', 'สาขาวิชาวิทยาศาสตร์และเทคโนโลยี - เทคโนโลยีการพิมพ์และบรรจุภัณฑ์'),
('34', 'สาขาวิชาเศรษฐศาสตร์ - เศรษฐศาสตร์'),
('35', 'สาขาวิชาเศรษฐศาสตร์ - เศรษฐศาสตร์ธุรกิจ'),
('36', 'โครงการสัมฤทธิบัตร'),
('37', 'ผู้สนใจเรียน');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;