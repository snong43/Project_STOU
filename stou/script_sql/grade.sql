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
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `user` varchar(20) NOT NULL,
  `sub_id` varchar(5) NOT NULL,
  `sub_name` varchar(200) NOT NULL,
  `term_no` int(11) NOT NULL,
  `term_year` int(11) NOT NULL,
  `grade` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`user`, `sub_id`, `sub_name`, `term_no`, `term_year`, `grade`) VALUES
('', '', '', 0, 0, ''),
('', '99999', 'test', 1, 0, ''),
('snong43', '', '', 0, 0, ''),
('test', '11301', 'ภาษาอังกฤษสำหรับนักธุรกิจ', 1, 2564, 'H'),
('test', '32205', 'การบัญชีขั้นกลาง 2', 3, 2559, 'H*'),
('test', '99312', 'คณิตศาสตร์สำหรับเทคโนโลยีสารสนเทศและการสื่อสาร', 1, 2564, 'U*');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`user`,`sub_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
