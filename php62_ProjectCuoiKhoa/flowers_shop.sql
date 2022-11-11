-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2022 at 11:14 AM
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
-- Database: `flowers_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `flowers`
--

CREATE TABLE `flowers` (
  `maloaihoa` int(11) NOT NULL,
  `tenloaihoa` varchar(100) NOT NULL,
  `hinhanh` varchar(500) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flowers`
--

INSERT INTO `flowers` (`maloaihoa`, `tenloaihoa`, `hinhanh`, `soluong`, `dongia`) VALUES
(1, 'Hoa lyly', '', 10, 100000),
(2, 'Hoa hồng', '', 12, 120000),
(3, 'Hoa lan', '', 20, 300000);

-- --------------------------------------------------------

--
-- Table structure for table `plants`
--

CREATE TABLE `plants` (
  `maloaicay` int(11) NOT NULL,
  `tenloaicay` varchar(100) NOT NULL,
  `hinhanh` varchar(500) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plants`
--

INSERT INTO `plants` (`maloaicay`, `tenloaicay`, `hinhanh`, `soluong`, `dongia`) VALUES
(5, 'Yellow Orchid', '', 10, 100000),
(6, 'Calathea Zebra Plant', '', 12, 120000),
(7, 'Peace Lily', '', 15, 200000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flowers`
--
ALTER TABLE `flowers`
  ADD PRIMARY KEY (`maloaihoa`);

--
-- Indexes for table `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`maloaicay`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flowers`
--
ALTER TABLE `flowers`
  MODIFY `maloaihoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `plants`
--
ALTER TABLE `plants`
  MODIFY `maloaicay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
