-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 01:10 PM
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
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Canon EOS', 36000),
(2, 'Sony DSLR', 40000),
(3, 'Sony DSLR', 50000),
(4, 'Olympus DSLR', 80000),
(5, 'Titan Model #301', 13000),
(6, 'Titan Model #201', 3000),
(7, 'HMT Milan', 8000),
(8, 'Faber Luba #111', 18000),
(9, 'H&W', 800),
(10, 'Luis Phil', 1000),
(11, 'John Zok', 1500),
(12, 'Jhalsani', 1300);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `contact` varchar(255) CHARACTER SET latin1 NOT NULL,
  `city` varchar(255) CHARACTER SET latin1 NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to Cart','Confirmed') CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users_products`
--

CREATE TABLE `users_products` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `products_id` int(11) DEFAULT NULL,
  `purchase_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_products`
--

INSERT INTO `users_products` (`id`, `user_id`, `products_id`, `purchase_timestamp`) VALUES
(1, 12, 3, '2016-10-10 12:40:12'),
(2, 12, 6, '2016-10-10 12:40:12'),
(3, 8, 6, '2016-10-29 06:42:12'),
(4, 4, 6, '2016-10-15 07:40:04'),
(5, 10, 9, '2016-10-09 20:45:16'),
(6, 7, 4, '2016-10-10 03:04:42'),
(7, 5, 1, '2016-10-19 11:28:54'),
(8, 4, 5, '2016-10-14 06:05:32'),
(9, 8, 5, '2016-10-23 18:15:23'),
(10, 7, 7, '2016-10-04 07:42:35'),
(11, 12, 2, '2016-10-14 06:53:41'),
(12, 12, 7, '2016-10-21 08:45:13'),
(13, 7, 2, '2016-10-05 10:38:02'),
(14, 7, 8, '2016-10-06 12:04:49'),
(15, 1, 2, '2016-10-13 10:07:51'),
(16, 11, 6, '2016-10-15 04:33:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_products`
--
ALTER TABLE `users_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `products_id` (`products_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_products`
--
ALTER TABLE `users_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
