-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 06, 2019 at 02:50 PM
-- Server version: 10.3.17-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sharjanh_mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblBooks`
--

CREATE TABLE `tblBooks` (
  `bookID` int(3) NOT NULL,
  `bookName` varchar(100) NOT NULL,
  `bookQuantity` int(11) NOT NULL,
  `bookPrice` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblBooks`
--

INSERT INTO `tblBooks` (`bookID`, `bookName`, `bookQuantity`, `bookPrice`) VALUES
(1, 'GOT', 12, 200),
(2, 'Subtle Art', 30, 200),
(3, 'Art', 45, 50),
(7, 'Cases II', 10, 120),
(4, 'Anatomy', 30, 150.99),
(5, 'Cases', 5, 59.99);

-- --------------------------------------------------------

--
-- Table structure for table `tblUsers`
--

CREATE TABLE `tblUsers` (
  `userid` int(3) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblUsers`
--

INSERT INTO `tblUsers` (`userid`, `username`, `password`) VALUES
(14, 'chmod', '$2y$10$XJh2NBkHRKAflK26vLWPpuJV280C4OA/RtQMdVJMiVYaIyj91elxS'),
(1, 'test', '$2y$10$Kvf4EkOjq.mmPqFU8EIYcusevFbHy3AMrypwWN0.C6i5xsDnRC1zm'),
(2, 'janhvi', '$2y$10$/bysLW5aiMFunO2GmpCItexnT6mB9N1wvf/MHzk3LCPFj/wBILJwO'),
(3, 'janhvisharma', '$2y$10$Qoi1QrdHHzh8QDUjDZxGR.kWULzac0w4qAk3.MvoklfPBFKrkpejq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblBooks`
--
ALTER TABLE `tblBooks`
  ADD PRIMARY KEY (`bookID`);

--
-- Indexes for table `tblUsers`
--
ALTER TABLE `tblUsers`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblBooks`
--
ALTER TABLE `tblBooks`
  MODIFY `bookID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblUsers`
--
ALTER TABLE `tblUsers`
  MODIFY `userid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
