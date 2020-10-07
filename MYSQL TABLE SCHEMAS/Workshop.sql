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
-- Table structure for table `Workshop`
--

CREATE TABLE `Workshop` (
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `number` bigint(40) NOT NULL,
  `course` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `amount` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `pstatus` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `BillNumber` bigint(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Workshop`
--

INSERT INTO `Workshop` (`name`, `email`, `number`, `course`, `amount`, `pstatus`, `BillNumber`) VALUES
('   Diwaker reddy', 'diwakar7995@gmail.com', 7659848622, 'Hacking', '300', 'Completed', 554477184),
('Mallisetty Kiran Kumar', 'kittukiran357.kk@gmail.com', 9542438994, 'Hacking', '600', 'Completed', 1452126392),
('d.krishna chaitanya', 'krishnachaitanya.darala@gmail.com', 9010237178, 'Hacking', '300', 'Completed', 1535803351),
('K.Ashokkumar', 'kummaraashok9@gmail.com', 9963034705, 'Hacking', '300', 'Completed', 289959797),
('K.umesh kumar', 'lovelyumesh325@gmail.com', 6302777095, 'Hacking', '300', 'Completed', 197784049),
('M.Abhishek', 'mangalaabhi1999@gmail.com', 9154381054, 'Hacking', '300', 'Dropout', 1751138195),
('sadik', 'mohammadsadik856@gmail.com', 7386101316, 'Hacking', '300', 'Completed', 203698079),
('Nanda Sai ram', 'nandasairam170@gmail.com', 7032427060, 'Hacking', '300', 'Completed', 2016708717),
('N Suresh Babu', 'nanisuresh335@gmail.com', 7893273858, 'Hacking', '300', 'Completed', 107626622),
('O sai sagar Reddy', 'osagar202@gmail.com', 6305570751, 'Hacking', '300', 'Completed', 1761108635),
('Phani', 'Phanikrishnachirrapu670@gmail.com', 8106304636, 'Hacking', '300', 'Completed', 887151262),
('sameer', 's.sameer2712@gmail.com', 9703980836, 'Hacking', '300', 'Completed', 905072302),
('sai kiran', 'saikiransonu222@gmail.com', 8639575089, 'Hacking', '300', 'Completed', 2032138172),
('sathish', 'sathishcreater111@gmail.com', 9912710835, 'Hacking', '300', 'Completed', 947367780),
('Sharadvamsi ', 'sharadvamsisurya@gmail.com', 6302549497, 'Hacking', '300', 'Completed', 887141472),
('S.Nandakishore', 'snandakishore40@gmail.com', 7093490406, 'Hacking', '300', 'Completed', 1707547477),
('C.sudharshan Babu', 'sudharshanrock18512@gmail.com', 8074951596, 'Hacking', '300', 'Completed', 162634108),
('Tabjula Sai darshan', 'tabjuladharshan@gmail.com', 7013224061, 'Hacking', '300', 'Pending', 0),
('T.siva reddy', 'tadimarri10@gmail.com', 8886995763, 'Hacking', '300', 'Completed', 899995780),
('testing', 'testing@gmail.com', 123, 'Webdesigning', '300', 'Completed', 1496631144),
('Akuleti Vijay kumar', 'vinaykumarakuleti@gmail.com', 8074123866, 'Webdesigning', '300', 'Pending', 0),
('C.Yashwanth kumar', 'yaswanthkumar1578@gmail.com', 9347496198, 'Hacking', '300', 'Completed', 1461289345);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Workshop`
--
ALTER TABLE `Workshop`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
