-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 11:07 AM
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
-- Table structure for table `cust_regi`
--

CREATE TABLE `cust_regi` (
  `cust_id` int(3) NOT NULL,
  `cust_name` varchar(100) NOT NULL,
  `cust_email` varchar(100) NOT NULL,
  `cust_phone` int(100) NOT NULL,
  `cust_pass` varchar(100) NOT NULL,
  `cust_cpass` varchar(100) NOT NULL,
  `cust_state` varchar(200) NOT NULL,
  `cust_city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cust_regi`
--

INSERT INTO `cust_regi` (`cust_id`, `cust_name`, `cust_email`, `cust_phone`, `cust_pass`, `cust_cpass`, `cust_state`, `cust_city`) VALUES
(1, 'komal', 'k@gmail.com', 987456123, '123', '123', 'surat', ''),
(5, 'mitzz', 'm@gmail.com', 985612347, '145', '145', 'surat', ''),
(38, 'salmann', 'salman@gmail.com', 985647123, '456', '456', 'varodra', ''),
(40, 'jagu', 'jagu@gmail.com', 987456123, '789', '789', '1', '2'),
(42, 'pm', 'pm@gmail.com', 2147483647, '789', '789', '6', '22'),
(43, 'samir', 'sm@gmail.com', 789456123, '123', '123', '2', '8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cust_regi`
--
ALTER TABLE `cust_regi`
  ADD PRIMARY KEY (`cust_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cust_regi`
--
ALTER TABLE `cust_regi`
  MODIFY `cust_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
