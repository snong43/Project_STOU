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
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `sub_id` varchar(5) NOT NULL,
  `course_id` varchar(2) NOT NULL,
  `train_day` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`sub_id`, `course_id`, `train_day`) VALUES
('11112', '18', 7),
('16344', '27', 4),
('16360', '27', 4),
('16423', '27', 4),
('16426', '27', 4),
('16440', '27', 4),
('16441', '27', 4),
('16446', '27', 4),
('16448', '27', 4),
('16449', '27', 4),
('16452', '27', 4),
('16455', '27', 4),
('16457', '27', 4),
('16458', '27', 4),
('16463', '27', 4),
('27104', '08', 4),
('27104', '09', 4),
('27104', '10', 4),
('32477', '17', 5),
('32480', '17', 5),
('32485', '17', 5),
('52310', '28', 2),
('52311', '28', 4),
('54113', '29', 4),
('54118', '29', 4),
('55307', '38', 13),
('55310', '38', 10),
('55311', '38', 39),
('55313', '38', 10),
('55314', '38', 10),
('55315', '38', 5),
('55316', '38', 5),
('55317', '38', 10),
('55318', '38', 5),
('55319', '38', 25),
('55320', '38', 5),
('55321', '38', 5),
('55322', '38', 5),
('55324', '38', 13),
('55327', '38', 10),
('55328', '38', 10),
('55329', '38', 5),
('55330', '38', 5),
('55331', '38', 10),
('55332', '38', 5),
('55334', '38', 5),
('71304', '05', 4),
('93256', '22', 4),
('93446', '23', 4),
('93447', '23', 4),
('93455', '22', 5),
('93460', '23', 5),
('95413', '31', 3),
('95413', '32', 3),
('96408', '31', 3),
('96408', '32', 3),
('96414', '31', 3),
('96414', '32', 3),
('97216', '33', 4),
('97315', '32', 5),
('97316', '32', 4),
('97318', '33', 4),
('97403', '33', 4),
('97406', '33', 4),
('97431', '33', 4),
('99311', '32', 3),
('99412', '32', 4),
('99421', '31', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`sub_id`,`course_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
