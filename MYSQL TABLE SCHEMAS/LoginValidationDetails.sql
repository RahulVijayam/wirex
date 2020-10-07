-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 06, 2020 at 02:06 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id8977786_wirextechnologies`
--

-- --------------------------------------------------------

--
-- Table structure for table `LoginValidationDetails`
--

CREATE TABLE `LoginValidationDetails` (
  `userid` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `course` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `LoginValidationDetails`
--

INSERT INTO `LoginValidationDetails` (`userid`, `name`, `password`, `role`, `status`, `course`) VALUES
('111', 'RAHUL', '698d51a19d8a121ce581499d7b701668', 'student', 'not verified', 'practical c programming'),
('123', '123', '202cb962ac59075b964b07152d234b70', 'student', 'not verified', ''),
('143', '143', '903ce9225fca3e988c2af215d4e544d3', 'student', 'not verified', 'Web Designing'),
('admin', 'WireXTechnologies', '5f4dcc3b5aa765d61d8327deb882cf99', 'Admin', 'not verified', ''),
('mvc ', 'mb', '444aaff69c70f0c299474a911fdb1a89', 'student', 'not verified', ''),
('rahull', 'rahull', '671400d5f1f202dcdac3dbaf216bae8e', 'student', 'not verified', 'Web Designing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `LoginValidationDetails`
--
ALTER TABLE `LoginValidationDetails`
  ADD PRIMARY KEY (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
