-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 30, 2023 at 03:11 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysql`
--

-- --------------------------------------------------------

--
-- Table structure for table `home_user`
--

CREATE TABLE `home_user` (
  `userid` varchar(10) NOT NULL,
  `password` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `primary_phone` int(10) NOT NULL,
  `alt_phone` int(10) NOT NULL,
  `primary_email` varchar(40) NOT NULL,
  `emergency_contact_name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `emergency_phone` int(10) NOT NULL,
  `emergency_email` varchar(40) NOT NULL,
  `member_since` date NOT NULL,
  `mailing_list` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `home_user`
--

INSERT INTO `home_user` (`userid`, `password`, `first_name`, `last_name`, `primary_phone`, `alt_phone`, `primary_email`, `emergency_contact_name`, `emergency_phone`, `emergency_email`, `member_since`, `mailing_list`) VALUES
('jdevereaux', 'password', 'Jason', 'Devereaux', 2147483647, 2147483647, 'jdevereaux1@live.maryville.edu', 'Michele Devereaux', 2147483647, 'jdevereaux1@live.maryville.edu', '2023-01-23', 'Y');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
