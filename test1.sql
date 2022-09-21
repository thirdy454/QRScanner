-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2022 at 04:10 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `name`) VALUES
(1, 'CCIS-Alden');

-- --------------------------------------------------------

--
-- Table structure for table `testreg`
--

CREATE TABLE `testreg` (
  `id` int(11) NOT NULL,
  `testreg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testreg`
--

INSERT INTO `testreg` (`id`, `testreg`) VALUES
(1, 'CCIS-Alex Robles'),
(2, 'CCIS-Rodjan Fat'),
(4, ''),
(5, 'dingdong dantes'),
(6, 'dingdong dantes'),
(7, 'dingdong dantes'),
(8, 'dingdong dantes'),
(9, 'dingdong dantes'),
(10, 'dingdong dantes'),
(11, 'dingdong dantes'),
(12, 'dingdong dantes'),
(13, 'dingdong dantes'),
(14, 'dingdong dantes'),
(15, 'dingdong dantes'),
(16, 'dingdong dantes'),
(17, 'dingdong dantes'),
(18, 'dingdong dantes'),
(19, 'dingdong dantes'),
(20, 'dingdong dantes'),
(21, 'dingdong dantes'),
(22, 'CCIS-Alden'),
(23, 'CCIS-Alden'),
(24, 'CCIS-Alden'),
(25, 'CCIS-Alden'),
(26, 'CCIS-Alden'),
(27, 'CCIS-Alden'),
(28, 'CCIS-Alden'),
(29, 'CCIS-Alden'),
(30, 'CCIS-Alden'),
(31, 'CCIS-Alden'),
(32, 'CCIS-Alden'),
(33, 'CCIS-Alden'),
(34, 'dingdong dantes'),
(35, 'dingdong dantes'),
(36, 'dingdong dantes'),
(37, 'CCIS-Alden'),
(38, 'Marian rivera'),
(39, 'Marian rivera'),
(40, 'dingdong dantes'),
(41, 'CCIS-Alden');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `testreg`
--
ALTER TABLE `testreg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testreg`
--
ALTER TABLE `testreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
