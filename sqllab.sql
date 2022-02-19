-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2022 at 10:18 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sqllab`
--

-- --------------------------------------------------------

--
-- Table structure for table `passwords`
--

CREATE TABLE `passwords` (
  `ID` int(11) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passwords`
--

INSERT INTO `passwords` (`ID`, `Name`, `Email`, `Password`) VALUES
(1, 'neo', 'neo@gmail.com', 'a29a882324bcd8bf5abaef6eb64ba3fb'),
(2, 'cats', 'cats', '7a083fdb509e2f1d1e28a0d5219c7a9a'),
(3, 'hihih', 'hihih@gmail.com', 'd4b349f84c941b7385974df8f5a973b2'),
(4, 'sumit', 'sumit@gmail.com', '54190d2a430dd795e8a6fc6936526a07'),
(5, 'chandan', 'chandan@gmail.com', 'be04c6800b7fce846ac87a56e37444de'),
(6, 'not jarves', 'notjarvespro@gmail.com', 'clc0VHRyY01HRDdMalVUNEs1Rm5zcmhrWjc4SFJlbW04QW13SHh1Sms='),
(7, 'sayan', 'sayan@gmail.com', '7e4acb6585c97b264d47e6e18873efb9');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Salary` int(11) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `FirstName`, `LastName`, `Email`, `Address`, `Salary`, `City`) VALUES
(1, 'abhiram', 'sharma', 'abhiramsharma@gmail.com', 'navlakha square', 10000, 'indore'),
(2, 'aman', 'sharma', 'amansharma@gmail.com', 'Bangali square', 15000, 'indore'),
(3, 'shiva', 'sharma', 'shivasharma@gmail.com', 'navlakha square', 15000, 'indore'),
(4, 'sayan', 'bose', 'rowdysayan@gmail.com', 'kolkata', 17000, 'pune'),
(5, 'trevor', 'sharma', 'tsharma@gmail.com', 'vespucci beach', 19000, 'LA'),
(6, 'shiva', 'sharma', 'shivasharma@gmail.com', 'Bullet', 18000, 'goa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
