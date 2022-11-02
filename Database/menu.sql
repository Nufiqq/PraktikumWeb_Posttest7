-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2022 at 03:46 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menu`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(64) NOT NULL,
  `nama_menu` varchar(64) NOT NULL,
  `tall` int(64) NOT NULL,
  `grande` int(64) NOT NULL,
  `venti` int(64) NOT NULL,
  `gambar` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama_menu`, `tall`, `grande`, `venti`, `gambar`) VALUES
(25, 'Brown Sugar Oatmilk ISE', 61000, 66000, 68000, 'Brown Sugar Oatmilk ISE.jpg'),
(26, 'Chocolate Malt Oatmilk ISE', 61000, 66000, 68000, 'Chocolate Malt Oatmilk ISE.jpg'),
(27, 'Pumpkin Spice Latte', 61000, 66000, 68000, 'Pumpkin Spice Latte.jpg'),
(28, 'Pumpkin Spice Frappuccino', 61000, 66000, 68000, 'Pumpkin Spice Frappuccino.jpg'),
(29, 'Brown Sugar Cocoa Oatmilk Coffee Frappuccino', 61000, 66000, 68000, 'Brown Sugar Cocoa Oatmilk Coffee Frappuccino.jpg'),
(30, 'Pumpkin Cream Cold Brew', 61000, 66000, 68000, 'Pumpkin Cream Cold Brew.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
