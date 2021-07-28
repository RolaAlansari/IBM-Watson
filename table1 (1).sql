-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29 يوليو 2021 الساعة 01:45
-- إصدار الخادم: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `motor`
--

-- --------------------------------------------------------

--
-- بنية الجدول `table1`
--

CREATE TABLE `table1` (
  `m1` int(4) NOT NULL,
  `m2` int(4) NOT NULL,
  `m3` int(4) NOT NULL,
  `m4` int(4) NOT NULL,
  `m5` int(4) NOT NULL,
  `m6` int(4) NOT NULL,
  `Id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `table1`
--

INSERT INTO `table1` (`m1`, `m2`, `m3`, `m4`, `m5`, `m6`, `Id`) VALUES
(0, 0, 0, 0, 0, 85, 1),
(0, 0, 0, 0, 0, 58, 2),
(55, 66, 53, 36, 30, 20, 3),
(0, 0, 0, 0, 81, 0, 4),
(109, 0, 0, 0, 0, 0, 5),
(0, 0, 0, 0, 97, 0, 6),
(0, 0, 0, 0, 0, 57, 7),
(0, 0, 0, 0, 0, 63, 8),
(76, 0, 0, 0, 0, 0, 9),
(0, 0, 0, 0, 112, 0, 10),
(0, 0, 0, 134, 0, 0, 11),
(97, 96, 93, 71, 40, 130, 12),
(0, 0, 0, 0, 0, 157, 13),
(0, 0, 93, 94, 105, 0, 14),
(180, 180, 180, 180, 180, 176, 15),
(113, 102, 0, 0, 0, 0, 17),
(82, 82, 0, 0, 0, 0, 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
