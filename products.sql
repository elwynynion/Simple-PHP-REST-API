-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 12:25 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `product_stock` bigint(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_id`, `product_name`, `product_desc`, `product_stock`) VALUES
(1, 'EL-TQIWPJT0OO', 'Apple iPhone 12 Pro Apple AirPods Pro', 'Active noise cancellation for immersive sound. Transparency mode for hearing and connecting with the world around you', 11),
(2, 'EL-F5O4CM9MCF', 'Apple Magic Keyboard (for 12.9-inch iPad Pro - 5th Generation) -US English- White', 'The Magic Keyboard is the perfect companion for iPad Pro, now available in two colors.', 20),
(3, 'EL-XONIVT9O59', '2021 Apple TV HD (32GB, 5th Generation)', '1080p HD high-quality video, Dolby Digital Plus 7.1 surround sound, A8 chip for great gameplay and app experiences', 23),
(4, 'EL-6EHR67DKG1', 'Apple iPhone XR, US Version, 64GB, Black - Unlocked', 'This phone is unlocked and compatible with any carrier of choice on GSM and CDMA networks (e.g. AT&T, T-Mobile, Sprint, Verizon, US Cellular, Cricket, Metro, Tracfone, Mint Mobile, etc.).', 43),
(5, 'EL-CP3GC5RXXW', '2020 Apple iPad Air (10.9-inch, Wi-Fi, 64GB) - Space Gray (4th Generation)', 'Stunning 10.9-inch Liquid Retina display with True Tone and P3 wide color A14 Bionic chip with Neural Engine Touch ID for secure authentication and Apple Pay', 13),
(6, 'EL-ZPKPAJJUWY', 'Apple MagSafe Charger', 'The MagSafe Charger makes wireless charging a snap. The perfectly aligned magnets attach to your AirPods or iPhone', 133);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
