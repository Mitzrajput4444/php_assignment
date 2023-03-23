-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 11:06 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ehousing`
--

-- --------------------------------------------------------

--
-- Table structure for table `cust_city`
--

CREATE TABLE `cust_city` (
  `city_id` int(255) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `state_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cust_city`
--

INSERT INTO `cust_city` (`city_id`, `city_name`, `state_id`) VALUES
(1, 'SURAT', 1),
(3, 'VAPI', 1),
(4, 'BHARUCH', 1),
(5, 'NAVSARI', 1),
(6, 'ANKALESHWAR', 1),
(7, 'BARDOLI', 1),
(8, 'ALIPUR', 2),
(9, 'BEGUM PUR', 2),
(10, 'CHANDNI CHOWK', 2),
(11, 'LIBASPUR', 2),
(12, 'DHUBRI', 3),
(13, 'GOLAGHAT', 3),
(14, 'JORHAT', 3),
(15, 'NAGAON', 3),
(16, 'PANJIM', 4),
(17, 'CANACONA', 4),
(18, 'BORIVALI', 5),
(19, 'MUMBAI', 5),
(20, 'BANDRA', 5),
(21, 'AMRITSTAR', 6),
(22, 'PATIYALA', 6),
(23, 'KOCHI', 7),
(24, 'PONNANI', 7),
(25, 'PATNA', 8),
(26, 'MUZAFFARPUR', 8),
(27, 'GOPALGUNJ', 8),
(28, 'SHIMLA', 9),
(29, 'KULLU', 9),
(30, 'UNA', 9),
(31, 'MANALI', 9),
(32, 'JAIPUR', 10),
(33, 'UDAIPUR', 10),
(34, 'JODHPUR', 10),
(35, 'JAISLMER', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cust_city`
--
ALTER TABLE `cust_city`
  ADD PRIMARY KEY (`city_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cust_city`
--
ALTER TABLE `cust_city`
  MODIFY `city_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
