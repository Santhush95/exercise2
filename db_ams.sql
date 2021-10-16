-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2021 at 05:13 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banks`
--

CREATE TABLE `tbl_banks` (
  `bank_id` int(11) NOT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_code` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_banks`
--

INSERT INTO `tbl_banks` (`bank_id`, `bank_name`, `bank_code`, `created_at`, `updated_at`) VALUES
(1, 'Sampath Bank', 7850, '2021-10-12 15:37:11', '2021-10-12 21:07:11'),
(2, 'Bank of ceylon', 5678, '2021-10-12 15:37:12', '2021-10-12 21:07:12'),
(3, 'People\'s Bank', 5434, '2021-10-16 14:49:12', '2021-10-16 20:19:12'),
(4, 'NSB Bank', 1932, '2021-10-16 14:49:12', '2021-10-16 20:19:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_branches`
--

CREATE TABLE `tbl_branches` (
  `branch_id` int(11) NOT NULL,
  `branch_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_code` int(11) NOT NULL,
  `bank_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_branches`
--

INSERT INTO `tbl_branches` (`branch_id`, `branch_name`, `branch_code`, `bank_id`, `created_at`, `updated_at`) VALUES
(1, 'Kiribathgoda', 93, 1, '2021-10-13 12:23:39', '2021-10-16 20:40:03'),
(2, 'Nugegoda', 45, 2, '2021-10-13 12:23:39', '2021-10-16 19:47:58'),
(4, 'Kandy', 32, 4, '2021-10-16 14:46:11', '2021-10-16 20:42:09'),
(5, 'Galle', 34, 3, '2021-10-16 14:49:48', '2021-10-16 20:42:52'),
(6, 'Kottawa ', 21, 4, '2021-10-16 14:50:06', '2021-10-16 20:42:21'),
(7, 'Kadawatha', 54, 2, '2021-10-16 14:50:35', '2021-10-16 20:42:26'),
(8, 'Negambo', 116, 4, '2021-10-16 15:06:21', '2021-10-16 20:42:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_banks`
--
ALTER TABLE `tbl_banks`
  ADD PRIMARY KEY (`bank_id`);

--
-- Indexes for table `tbl_branches`
--
ALTER TABLE `tbl_branches`
  ADD PRIMARY KEY (`branch_id`),
  ADD KEY `bank_id` (`bank_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_banks`
--
ALTER TABLE `tbl_banks`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_branches`
--
ALTER TABLE `tbl_branches`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_branches`
--
ALTER TABLE `tbl_branches`
  ADD CONSTRAINT `tbl_branches_ibfk_1` FOREIGN KEY (`bank_id`) REFERENCES `tbl_banks` (`bank_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
