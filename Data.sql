-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 02:04 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getdetail`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdetail`
--

CREATE TABLE `userdetail` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(15) NOT NULL,
  `Mobile No.` bigint(12) NOT NULL,
  `Credit` int(15) NOT NULL,
  `User Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdetail`
--

INSERT INTO `userdetail` (`Name`, `Email`, `Mobile No.`, `Credit`, `User Id`) VALUES
('Anzal', 'anz@gmail.com', 9958623147, 10020000, 10000),
('Aman', 'asd@gmail.com', 8056235641, 9980000, 50000),
('Kritansh', 'krts@gmail.com', 8956236589, 8520000, 100212),
('Kinjalk', 'sdf@gmail.com', 7456895621, 2126000, 5000),
('Namit', 'nmt@gmail.com', 7458965412, 85450100, 65000),
('Mohit', 'knj@gmail.com', 7840652315, 874001, 4000),
('Harshit', 'hrst@gmail.com', 8965987456, 292000, 3200),
('Devesh', 'dvs@gmail.com', 8562347856, 549900, 62000),
('Mridul', 'mrd@gmail.com', 7589636985, 63922000, 10),
('Manikya', 'mnky@gmail.com', 9056234785, 6991999, 62000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
