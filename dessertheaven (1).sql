-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 10:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dessertheaven`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` int(110) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(13, 'Cakes Gift Box', '250.00', 'bgc2.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart_product`
--

CREATE TABLE `cart_product` (
  `id` int(110) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `category` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_product`
--

INSERT INTO `cart_product` (`id`, `name`, `price`, `category`, `image`) VALUES
(3, 'Cream cake', '129.90', 'Cake', 'c1.png'),
(6, 'Red Velvet Snowy Cake', '118.00', 'Cake', 'cake2.jpg'),
(7, 'Chocolate Cookies', '20.00', 'Dessert', 'download (8).jpeg'),
(8, 'Chocolate Brownies', '19.90', 'Dessert', 'download (6).jpeg'),
(9, 'Chocolate Truffle', '19.00', 'Dessert', 'download (10).jpeg'),
(10, 'S`more', '20.00', 'Dessert', 'download (9).jpeg'),
(11, 'Choco cake', '17.00', 'Cake', 'c2.png'),
(12, 'Strawberry Cake', '17.00', 'Cake', 'c3.png'),
(13, 'Chocolate + Bear + Baby`s Breath Gift Box', '29.90', 'Gift Box', 'gb12.jpeg'),
(14, 'Chocolate Gift Box', '30.90', 'Gift Box', 'gb1.jpeg'),
(15, 'Chocolate Gift Box Premium', '89.90', 'Gift Box', 'gb13.jpeg'),
(16, 'Chocolate Gift Box Gold', '129.90', 'Gift Box', 'gb14.jpeg'),
(17, 'Belgian Handmade Chocolates', '240.00', 'Gift Box', 'bgc4.jpg'),
(18, 'Ferrero Rocher Valentine`s day', '46.90', 'Gift Box', 'bgc1.jpg'),
(19, 'Hazel & Creme Cookies', '109.90', 'Gift Box', 'bgc3.jpg'),
(20, 'Cakes Gift Box', '250.00', 'Gift Box Cake', 'bgc2.jpg'),
(24, 'Matcha Truffle', '22.00', 'Dessert', 'download (11).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(110) NOT NULL,
  `name` varchar(110) NOT NULL,
  `email` varchar(110) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `number`, `message`) VALUES
(2, 'Dheo', 'user1@gmail.com', '011-1234567', 'Hello'),
(5, 'Nur Syamimi binti Ismail', 'user8@gmail.com', '0123456789', 'I want to ask about my order');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(110) NOT NULL,
  `name` text NOT NULL,
  `number` int(14) NOT NULL,
  `email` varchar(10) NOT NULL,
  `method` varchar(150) NOT NULL,
  `flat` varchar(50) NOT NULL,
  `street` varchar(500) NOT NULL,
  `city` text NOT NULL,
  `state` varchar(500) NOT NULL,
  `country` text NOT NULL,
  `postal_code` int(11) NOT NULL,
  `total_products` int(110) NOT NULL,
  `total_price` int(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `postal_code`, `total_products`, `total_price`, `date`) VALUES
(1, 'izu', 11179777, 'user1@gmai', 'Online payment(FPX)', 'no2', 'jalan cempaka maluri', 'Cheras', 'Kuala lumpur', 'Malaysia', 56000, 2, 39, '2023-11-17 07:33:48'),
(2, 'Mia Adriana', 111234567, 'user1@gmai', 'credit card', 'no22', 'jln mutiara hijau', 'cheras', 'Kuala Lumpur', 'malaysia', 56000, 4, 78, '2023-11-17 07:37:35'),
(9, 'Syamimi Ismail', 7976757, 'user1@gmai', 'Online payment(FPX)', 'no2', 'jalan cempaka maluri', 'Cheras', 'Kuala lumpur', 'Malaysia', 56000, 2, 248, '2023-11-19 05:16:17'),
(10, 'Nur Syamimi', 123456789, 'user8@gmai', 'Online payment(FPX)', '1009', 'Sky Residensi Shamelin', 'Cheras', 'Kuala Lumpur', 'Malaysia', 56000, 3, 750, '2023-11-19 08:51:15'),
(11, 'Mia Adriana', 2147483647, 'user1@gmai', 'credit card', 'no22', 'jln mutiara hijau', 'Johor Bahru', 'Johor', 'Malaysia', 87000, 0, 250, '2023-11-19 09:36:13');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(225) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `number` varchar(12) NOT NULL,
  `password` text NOT NULL,
  `role_as` int(11) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `number`, `password`, `role_as`, `address`) VALUES
(1, 'syamimi', 'user1@gmail.com', '01112345678', 'user1234@', 0, ''),
(2, 'admin', 'admin@gmail.com', '01234567890', 'admin1234@', 1, ''),
(3, 'Nur Syamimi', 'user8@gmail.com', '0123456789', 'user1234_', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_product`
--
ALTER TABLE `cart_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cart_product`
--
ALTER TABLE `cart_product`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
