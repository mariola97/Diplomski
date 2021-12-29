-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2021 at 05:52 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_trgovina`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(50) COLLATE cp1250_croatian_ci NOT NULL,
  `country` varchar(50) COLLATE cp1250_croatian_ci NOT NULL,
  `year_of_manufacture` varchar(50) COLLATE cp1250_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `country`, `year_of_manufacture`) VALUES
(1, 'Samsung', 'South Korea', '1938'),
(2, 'OnePlus', 'China', '2013'),
(3, 'Apple', 'United States', '1976'),
(4, 'Xiaomi', 'China', '2010');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `date_of_order` date NOT NULL,
  `model` varchar(30) COLLATE cp1250_croatian_ci NOT NULL,
  `quantity` int(30) NOT NULL,
  `paying` varchar(50) COLLATE cp1250_croatian_ci NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total_price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `model` varchar(30) COLLATE cp1250_croatian_ci NOT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `year_of_manufacture` date NOT NULL,
  `price` int(50) NOT NULL,
  `RAM` int(50) NOT NULL,
  `storage` int(50) NOT NULL,
  `processor` varchar(50) COLLATE cp1250_croatian_ci NOT NULL,
  `camera_mp` int(50) NOT NULL,
  `guarantee` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `model`, `brand_id`, `year_of_manufacture`, `price`, `RAM`, `storage`, `processor`, `camera_mp`, `guarantee`) VALUES
(1, 'Galaxy S20 Ultra', 1, '2020-02-11', 1380, 12, 128, '2.84', 108, 2),
(5, 'Galaxy A72', 1, '2021-03-26', 700, 8, 256, '2.30', 64, 2),
(6, 'Galaxy A52', 1, '2021-03-26', 680, 8, 256, '2.30', 64, 1),
(7, 'Iphone 12 PRO MAX', 3, '2020-11-13', 2200, 6, 256, '3.1', 12, 2),
(8, 'Iphone SE', 3, '2020-04-24', 850, 3, 64, '2.65', 12, 1),
(9, 'Iphone 11 ', 3, '2019-09-20', 1100, 4, 64, '2.65', 12, 2),
(10, 'Nord CE 5G', 2, '2021-06-11', 980, 12, 256, '2.2', 64, 2),
(11, '9 Pro', 2, '2021-03-30', 1550, 12, 128, '2.84', 50, 2),
(12, '7T', 2, '2019-09-27', 780, 8, 128, '2.42', 48, 1),
(13, 'Mi Note 10 Lite', 4, '2020-05-09', 620, 6, 128, '2.2', 64, 2),
(14, 'Mi 11 Ultra', 4, '2021-04-02', 2200, 8, 256, '2.84', 50, 2),
(15, 'Redmi Note 9', 4, '2020-05-12', 570, 6, 128, '2.0', 48, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `ime` varchar(30) COLLATE cp1250_croatian_ci NOT NULL,
  `prezime` varchar(30) COLLATE cp1250_croatian_ci NOT NULL,
  `username` varchar(30) COLLATE cp1250_croatian_ci NOT NULL,
  `lozinka` varchar(30) COLLATE cp1250_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ime`, `prezime`, `username`, `lozinka`) VALUES
(1, 'mario', 'maglica', 'mario97', 'cincar'),
(2, 'ivan', 'matic', 'ivan98', 'vlasic'),
(3, 'luka', 'kordic', 'luigi99', 'cvrsnica');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`),
  ADD UNIQUE KEY `name` (`brand_name`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`customer_id`) USING BTREE,
  ADD KEY `product_id` (`product_id`) USING BTREE;

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
