-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 12:28 AM
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
  `course_name` varchar(200) NOT NULL,
  `en` varchar(1) NOT NULL,
  `math` varchar(1) NOT NULL,
  `sci` varchar(1) NOT NULL,
  `write_exam` varchar(1) NOT NULL,
  `train` varchar(1) NOT NULL,
  `m_edu` int(11) NOT NULL,
  `online` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `en`, `math`, `sci`, `write_exam`, `train`, `m_edu`, `age25`, `online`) VALUES
('01', 'สาขาวิชาศิลปศาสตร์ - ไทยคดีศึกษา', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('02', 'สาขาวิชาศิลปศาสตร์ - สารสนเทศทั่วไป', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('03', 'สาขาวิชาศิลปศาสตร์ - สารสนเทศสำนักงาน', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('04', 'สาขาวิชาศิลปศาสตร์ - ภาษาอังกฤษ', 'Y', 'Y', 'N', 'Y', 'Y', 6, 'N', 'Y'),
('05', 'สาขาวิชามนุษยนิเวศศาสตร์ - อาหาร โภชนาการและการประยุกต์', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('06', 'สาขาวิชามนุษยนิเวศศาสตร์ - พัฒนาการมนุษย์และครอบครัว', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('07', 'สาขาวิชาศึกษาศาสตร์ - การพัฒนาเด็กปฐมวัย', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('08', 'สาขาวิชาศึกษาศาสตร์ - การแนะแนวและการปรึกษาเชิงจิตวิทยา', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('09', 'สาขาวิชาศึกษาศาสตร์ - การเรียนรู้ตลอดชีวิต', 'N', 'N', 'Y', 'N', 'N', 9, 'N', 'N'),
('10', 'สาขาวิชาศึกษาศาสตร์ - เทคโนโลยีและสื่อสารการศึกษา', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('11', 'สาขาวิชารัฐศาสตร์ - การเมืองการปกครอง', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('12', 'สาขาวิชารัฐศาสตร์ - ความสัมพันธ์ระหว่างประเทศ', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('13', 'สาขาวิชาวิทยาการจัดการ - การจัดการงานก่อสร้าง', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('14', 'สาขาวิชาวิทยาการจัดการ - การจัดการ', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('15', 'สาขาวิชาวิทยาการจัดการ - การเงิน', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('16', 'สาขาวิชาวิทยาการจัดการ - การตลาด', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('17', 'สาขาวิชาวิทยาการจัดการ - การจัดการการท่องเที่ยว', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('18', 'สาขาวิชาวิทยาการจัดการ - บัญชีบัณฑิต', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('19', 'สาขาวิชาวิทยาการจัดการ - รัฐประศาสนศาสตร์บัณฑิต', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('20', 'สาขาวิชาเกษตรศาสตร์และสหกรณ์ - ส่งเสริมและพัฒนาการเกษตร', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('21', 'สาขาวิชาเกษตรศาสตร์และสหกรณ์ - การจัดการทรัพยากรป่าไม้และสิ่งแวดล้อม', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('22', 'สาขาวิชาเกษตรศาสตร์และสหกรณ์ - การจัดการการผลิตพืช', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('23', 'สาขาวิชาเกษตรศาสตร์และสหกรณ์ - การจัดการการผลิตสัตว์', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('24', 'สาขาวิชาเกษตรศาสตร์และสหกรณ์ - ธุรกิจการเกษตร', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('25', 'สาขาวิชาเกษตรศาสตร์และสหกรณ์ - สหกรณ์', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('26', 'สาขาวิชานิติศาสตร์', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('27', 'สาขาวิชานิเทศศาสตร์', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('28', 'สาขาวิชาวิทยาศาสตร์สุขภาพ - สาธารณสุขชุมชน', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('29', 'สาขาวิชาวิทยาศาสตร์สุขภาพ - อาชีวอนามัยและความปลอดภัย', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('30', 'สาขาวิชาวิทยาศาสตร์และเทคโนโลยี - การจัดการเทคโนโลยีสารสนเทศและการสื่อสาร', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('31', 'สาขาวิชาวิทยาศาสตร์และเทคโนโลยี - วิทยาการคอมพิวเตอร์', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('32', 'สาขาวิชาวิทยาศาสตร์และเทคโนโลยี - เทคโนโลยีการผลิตอุตสาหกรรม', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('33', 'สาขาวิชาวิทยาศาสตร์และเทคโนโลยี - เทคโนโลยีการพิมพ์และบรรจุภัณฑ์', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('34', 'สาขาวิชาเศรษฐศาสตร์ - เศรษฐศาสตร์', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('35', 'สาขาวิชาเศรษฐศาสตร์ - เศรษฐศาสตร์ธุรกิจ', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('36', 'โครงการสัมฤทธิบัตร', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('37', 'ผู้สนใจเรียน', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N'),
('38', 'สาขาวิชาวิทยาศาสตร์สุขภาพ - แพทย์แผนไทย', 'N', 'N', 'N', 'N', 'N', 3, 'N', 'N');

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
