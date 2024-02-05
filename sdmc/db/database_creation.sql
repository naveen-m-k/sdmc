-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 05:39 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdmc`
--

-- --------------------------------------------------------

--
-- Table structure for table `fees_details`
--

CREATE TABLE `fees_details` (
  `transaction_id` varchar(6) NOT NULL,
  `register_number` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `receipt_no` int(4) NOT NULL,
  `fees_paid` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees_details`
--

INSERT INTO `fees_details` (`transaction_id`, `register_number`, `date`, `receipt_no`, `fees_paid`) VALUES
('001', '339CS19000', '2022-06-23', 23, 4000),
('002', '339CS19000', '2022-06-23', 23, 4000),
('003', '339CS19000', '2022-06-23', 23, 4000),
('1', '339CS19029', '2022-06-23', 23, 4000);

-- --------------------------------------------------------

--
-- Table structure for table `staff_users`
--

CREATE TABLE `staff_users` (
  `username` varchar(20) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `password` varchar(12) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `regdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_users`
--

INSERT INTO `staff_users` (`username`, `password`, `regdDate`) VALUES
('Admin', 'Test@123', '2022-06-12 12:44:55');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `register_number` varchar(10) NOT NULL,
  `branch` varchar(15) NOT NULL,
  `semester` int(1) NOT NULL,
  `name` varchar(32) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `date_of_birth` date NOT NULL,
  `father` varchar(20) NOT NULL,
  `mother` varchar(20) NOT NULL,
  `caste` varchar(5) NOT NULL,
  `sub-caste` varchar(20) NOT NULL,
  `sslc_reg_no` varchar(11) NOT NULL,
  `year_of_passing` int(4) NOT NULL,
  `mob_number_1` varchar(10) NOT NULL,
  `mob_number_2` varchar(10) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `regd_by` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`register_number`, `branch`, `semester`, `name`, `gender`, `date_of_birth`, `father`, `mother`, `caste`, `sub-caste`, `sslc_reg_no`, `year_of_passing`, `mob_number_1`, `mob_number_2`, `email`, `address`, `regd_by`) VALUES
('339CS19000', 'CS', 0, 'UPDATE', 'MALE', '2022-06-26', 'TEST', 'TEST', 'Gen', 'TEST', 'TEST', 0, '1231231231', '', 'TEST@GMAIL.COM', '    TEST    ', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fees_details`
--
ALTER TABLE `fees_details`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `register_no_foriegn_key` (`register_number`);

--
-- Indexes for table `staff_users`
--
ALTER TABLE `staff_users`
  ADD UNIQUE KEY `userID` (`username`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`register_number`) USING BTREE;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fees_details`
--
ALTER TABLE `fees_details`
  ADD CONSTRAINT `register_no_foriegn_key` FOREIGN KEY (`register_number`) REFERENCES `student_info` (`register_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
