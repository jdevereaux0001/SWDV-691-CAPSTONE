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
-- Table structure for table `home_info`
--

CREATE TABLE `home_info` (
  `home_id` int(12) NOT NULL,
  `location` varchar(30) NOT NULL,
  `room` varchar(30) NOT NULL,
  `placement` varchar(30) NOT NULL,
  `material` varchar(30) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `color` varchar(30) NOT NULL,
  `purchase_store` varchar(30) NOT NULL,
  `purchase_date` date NOT NULL,
  `purchase_store_zip5` int(5) NOT NULL,
  `purchase_store_website` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `home_info`
--

INSERT INTO `home_info` (`home_id`, `location`, `room`, `placement`, `material`, `brand`, `color`, `purchase_store`, `purchase_date`, `purchase_store_zip5`, `purchase_store_website`) VALUES
(1, 'Main floor', 'main bedroom', 'Wall', 'Paint', 'Behr', 'Beige', 'Home Depot', '2023-02-23', 63049, 'homedepot.com'),
(2, 'Basement', 'Theater Room', 'Wall', 'Paint', 'Valspar', 'SKU1 - Brown', 'Lowes', '2023-04-23', 63026, 'lowes.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
