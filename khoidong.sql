-- phpMyAdmin SQL Dump
-- version 4.4.15.8
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2016 at 06:10 PM
-- Server version: 5.6.31
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khoidong`
--

-- --------------------------------------------------------

--
-- Table structure for table `dstukhoa`
--

CREATE TABLE IF NOT EXISTS `dstukhoa` (
  `matukhoa` int(2) NOT NULL,
  `magoicauhoi` int(11) NOT NULL,
  `ndtukhoa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dstukhoa`
--

INSERT INTO `dstukhoa` (`matukhoa`, `magoicauhoi`, `ndtukhoa`, `hinhanh`, `id`) VALUES
(1, 1, 'Ổ cứng', 'ocung.jpg', 2),
(2, 1, 'font', 'font.jpg', 3),
(3, 1, 'Bill Gates', 'billgates.jpg', 4),
(1, 2, 'Ổ cứng 2', 'ocung.jpg', 5),
(2, 2, 'font', 'font.jpg', 6),
(3, 2, 'Bill Gates', 'billgates.jpg', 7),
(1, 3, 'Ổ cứng', 'ocung.jpg', 8),
(2, 3, 'font', 'font.jpg', 9),
(3, 3, 'Bill Gates', 'billgates.jpg', 10),
(1, 4, 'Ổ cứng', 'ocung.jpg', 11),
(2, 4, 'font', 'font.jpg', 12),
(3, 4, 'Bill Gates', 'billgates.jpg', 13);

-- --------------------------------------------------------

--
-- Table structure for table `goicauhoi`
--

CREATE TABLE IF NOT EXISTS `goicauhoi` (
  `magoi` int(2) NOT NULL,
  `trangthai` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `goicauhoi`
--

INSERT INTO `goicauhoi` (`magoi`, `trangthai`) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dstukhoa`
--
ALTER TABLE `dstukhoa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goicauhoi`
--
ALTER TABLE `goicauhoi`
  ADD PRIMARY KEY (`magoi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dstukhoa`
--
ALTER TABLE `dstukhoa`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
