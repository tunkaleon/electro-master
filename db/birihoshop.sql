-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2023 at 08:37 PM
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
-- Database: `birihoshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_cost` int(11) NOT NULL,
  `order_stutus` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_names` varchar(255) NOT NULL,
  `user_phone` int(11) NOT NULL,
  `user_city` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_cost`, `order_stutus`, `user_id`, `client_names`, `user_phone`, `user_city`, `user_address`, `order_date`) VALUES
(26, 12000000, 'on_hold', 1, 'leon', 789932372, 'kigali', 'kabgayi', '2022-11-29 08:00:00'),
(27, 12000000, 'on_hold', 1, 'kaka', 789932372, 'kigali', 'rwanda/kgl', '2022-11-29 08:00:00'),
(28, 12000000, 'on_hold', 1, 'leon', 789932372, 'kigali', 'rwanda/kgl', '2022-11-29 08:00:00'),
(29, 12000000, 'on_hold', 1, 'leon', 789932372, 'kigali', 'rwanda/kgl', '2022-11-29 08:00:00'),
(30, 12000000, 'on_hold', 1, 'kaka', 789932372, 'kigali', 'kicukiro', '2022-11-29 08:00:00'),
(31, 12000000, 'on_hold', 1, 'leon', 789932372, 'kigali', 'kicukiro', '2022-11-29 08:00:00'),
(32, 12000000, 'on_hold', 1, 'leon', 789932372, 'kigali', 'kicukiro', '2022-11-29 08:00:00'),
(33, 12000000, 'on_hold', 1, 'leon', 789932372, 'kigali', 'kicukiro', '2022-11-29 08:00:00'),
(34, 12000000, 'on_hold', 1, 'leon', 789932372, 'kigali', 'kicukiro', '2022-11-29 08:00:00'),
(35, 12000000, 'on_hold', 1, 'leon', 789932372, 'kigali', 'kicukiro', '2022-11-29 08:00:00'),
(36, 12000000, 'on_hold', 1, 'leon', 789932372, 'kigali', 'kicukiro', '2022-11-29 08:00:00'),
(37, 0, 'on_hold', 1, 'leon', 789932372, 'rwanda/kigali', 'kicukiro', '2022-12-01 08:00:00'),
(38, 1200, 'on_hold', 1, 'leon', 789932372, 'rwanda/kigali', 'kicukiro', '2022-12-01 08:00:00'),
(39, 3600, 'on_hold', 1, 'leon', 789932372, 'kigali', 'kicukiro', '2022-12-02 08:00:00'),
(40, 3600, 'on_hold', 1, 'leon', 789932372, 'kigali', 'kicukiro', '2022-12-02 08:00:00'),
(41, 3600, 'on_hold', 1, 'leon', 789932372, 'rwanda/kigali', 'kicukiro', '2022-12-02 08:00:00'),
(42, 12000000, 'on_hold', 1, 'tunka', 789932372, 'rwanda/kigali', 'kabgayi', '2022-12-02 21:30:44'),
(43, 12000000, 'on_hold', 1, 'tunka', 789932372, 'rwanda/kigali', 'kabgayi', '2022-12-02 21:31:01'),
(44, 24000000, 'on_hold', 1, 'HAKIZIMANA', 789932372, 'rwanda/kigali', 'kabgayi', '2022-12-02 21:32:27'),
(45, 36000000, 'on_hold', 1, 'HAKIZIMANA', 789932372, 'kigali', 'kicukiro', '2022-12-02 21:36:49'),
(46, 96000000, 'on_hold', 1, 'HAKIZIMANA', 789932372, 'rwanda/kigali', 'kicukiro', '2022-12-02 21:41:36'),
(47, 24000000, 'on_hold', 1, 'tunka', 789932372, 'kigali', 'kicukiro', '2022-12-04 01:23:33'),
(48, 36008400, 'on_hold', 1, 'leon', 789932372, 'rwanda/kigali', 'kicukiro', '2022-12-06 07:24:11'),
(49, 12000000, 'on_hold', 1, 'leon', 789932372, 'rwanda/kigali', 'kicukiro', '2022-12-10 07:50:34'),
(50, 12000000, 'on_hold', 1, 'leon', 789932372, 'rwanda/kigali', 'kabgayi', '2022-12-10 07:51:23'),
(51, 12000000, 'on_hold', 1, 'leon', 789932372, 'rwanda/kigali', 'kabgayi', '2022-12-10 07:55:40'),
(52, 12000000, 'on_hold', 1, 'leon', 789932372, 'rwanda/kigali', 'kicukiro', '2022-12-10 08:23:20'),
(53, 12000000, 'on_hold', 1, 'leon', 789932372, 'rwanda/kigali', 'kicukiro', '2022-12-10 08:25:15'),
(54, 12000000, 'on_hold', 1, 'leon', 789932372, 'kigali', 'kicukiro', '2022-12-10 08:25:58'),
(55, 12000000, 'on_hold', 1, 'tunka', 789932372, 'kigali', 'kicukiro', '2022-12-10 08:36:30'),
(56, 12000000, 'on_hold', 1, 'leon', 789932372, 'rwanda/kigali', 'kabgayi', '2022-12-10 09:42:48'),
(57, 12000000, 'on_hold', 1, 'roro', 789932372, 'kigali', 'rwanda/kgl', '2022-12-10 13:19:07'),
(58, 2000000, 'on_hold', 1, 'kaka', 789932372, 'kicukiro', 'kicukiro', '2022-12-10 13:22:18'),
(59, 60000000, 'on_hold', 1, 'kaka', 789932372, 'rwanda/kigali', 'kicukiro', '2022-12-19 07:55:20'),
(60, 12000000, 'on_hold', 1, 'leon', 789932372, 'kigali', 'rwanda/kgl', '2022-12-20 02:32:43'),
(61, 1200, 'on_hold', 1, 'leon', 789932372, 'kalrongi', 'rwanda/kgl', '2022-12-24 09:43:53'),
(62, 12000000, 'on_hold', 1, 'leon', 789932372, 'muhanga', 'burera', '2022-12-24 09:47:41'),
(63, 12000000, 'on_hold', 1, 'leon', 789932372, 'muhanga', 'burera', '2022-12-24 09:48:36'),
(64, 12000000, 'on_hold', 1, 'leon', 789932372, 'muhanga', 'burera', '2022-12-24 09:51:11'),
(65, 12000000, 'on_hold', 1, 'leon', 789932372, 'muhanga', 'burera', '2022-12-24 09:52:56'),
(66, 12000000, 'on_hold', 1, 'leon', 789932372, 'muhanga', 'burera', '2022-12-24 09:53:49'),
(67, 12000000, 'on_hold', 1, 'leon', 789932372, 'muhanga', 'burera', '2022-12-24 09:53:56'),
(68, 12000000, 'on_hold', 1, 'roro', 789932372, 'kalrongi', 'kabgayi', '2022-12-24 09:55:34'),
(69, 12000000, 'on_hold', 1, 'tunka', 789932372, 'kicukiro', 'kabgayi', '2022-12-24 09:57:17'),
(70, 12000000, 'on_hold', 1, 'kaka', 789932372, 'kigali', 'kicukiro', '2022-12-24 09:58:30'),
(71, 12000000, 'on_hold', 1, 'leon', 789932372, 'kigali', 'burera', '2022-12-24 10:10:09'),
(72, 1200, 'on_hold', 1, 'HAKIZIMANA', 789932372, 'kigali', 'kicukiro', '2022-12-24 14:10:29'),
(73, 1200, 'on_hold', 1, 'leon', 789932372, 'kigali', 'kicukiro', '2022-12-25 08:51:05');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `item_id` int(11) NOT NULL,
  `order_id` int(10) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` decimal(6,0) NOT NULL,
  `product_quantity` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`item_id`, `order_id`, `product_id`, `product_name`, `product_image`, `product_price`, `product_quantity`, `user_id`, `order_date`) VALUES
(6, 11, 6, 'tv', 'product01.png', '999999', 4, 1, '2022-11-30 02:18:42'),
(7, 12, 6, 'tv', 'product01.png', '999999', 3, 1, '2022-11-30 02:34:00'),
(8, 13, 6, 'tv', 'product01.png', '999999', 3, 1, '2022-11-30 02:36:02'),
(9, 13, 5, 'laptop', 'product03.png', '1200', 8, 1, '2022-11-30 02:36:02'),
(10, 14, 6, 'tv', 'product01.png', '999999', 1, 1, '2022-11-30 02:40:51'),
(11, 14, 5, 'laptop', 'product03.png', '1200', 8, 1, '2022-11-30 02:40:51'),
(12, 15, 6, 'tv', 'product01.png', '999999', 1, 1, '2022-11-30 02:43:04'),
(13, 15, 5, 'laptop', 'product03.png', '1200', 8, 1, '2022-11-30 02:43:04'),
(14, 16, 6, 'tv', 'product01.png', '999999', 1, 1, '2022-11-30 02:44:53'),
(15, 16, 5, 'laptop', 'product03.png', '1200', 8, 1, '2022-11-30 02:44:53'),
(16, 17, 6, 'tv', 'product01.png', '999999', 1, 1, '2022-11-30 02:45:41'),
(17, 18, 6, 'tv', 'product01.png', '999999', 1, 1, '2022-11-30 03:18:05'),
(18, 19, 6, 'tv', 'product01.png', '999999', 1, 1, '2022-11-30 03:23:49'),
(19, 20, 6, 'tv', 'product01.png', '999999', 1, 1, '2022-11-30 03:24:46'),
(20, 20, 5, 'laptop', 'product03.png', '1200', 1, 1, '2022-11-30 03:24:46'),
(21, 21, 6, 'tv', 'product01.png', '999999', 1, 1, '2022-11-30 03:32:03'),
(22, 21, 5, 'laptop', 'product03.png', '1200', 1, 1, '2022-11-30 03:32:03'),
(23, 22, 6, 'tv', 'product01.png', '999999', 1, 1, '2022-11-30 03:43:53'),
(24, 22, 5, 'laptop', 'product03.png', '1200', 1, 1, '2022-11-30 03:43:53'),
(25, 23, 6, 'tv', 'product01.png', '999999', 1, 1, '2022-11-30 03:47:59'),
(26, 24, 6, 'tv', 'product01.png', '999999', 1, 1, '2022-11-30 04:20:24'),
(27, 25, 6, 'tv', 'product01.png', '999999', 1, 1, '2022-11-30 04:31:41'),
(28, 26, 6, 'tv', 'product01.png', '999999', 1, 1, '2022-11-30 05:08:56'),
(29, 27, 6, 'tv', 'product01.png', '999999', 1, 1, '2022-11-30 05:50:18'),
(30, 28, 6, 'tv', 'product01.png', '999999', 1, 1, '2022-11-30 05:53:33'),
(31, 29, 6, 'tv', 'product01.png', '999999', 1, 1, '2022-11-30 05:58:36'),
(32, 30, 6, 'tv', 'product01.png', '999999', 1, 1, '2022-11-30 06:01:48'),
(33, 31, 6, 'tv', 'product01.png', '999999', 1, 1, '2022-11-30 06:05:32'),
(34, 32, 6, 'tv', 'product01.png', '999999', 1, 1, '2022-11-30 06:17:38'),
(35, 33, 6, 'tv', 'product01.png', '999999', 1, 1, '2022-11-30 06:17:46'),
(36, 34, 6, 'tv', 'product01.png', '999999', 1, 1, '2022-11-30 06:19:17'),
(37, 35, 6, 'tv', 'product01.png', '999999', 1, 1, '2022-11-30 06:51:05'),
(38, 36, 6, 'tv', 'product01.png', '999999', 1, 1, '2022-11-30 06:53:52'),
(39, 40, 7, 'lg tv', 'product04.png', '1200', 3, 1, '2022-12-02 18:13:57'),
(40, 41, 7, 'lg tv', 'product04.png', '1200', 3, 1, '2022-12-02 18:16:52'),
(41, 46, 9, 'camera12+', 'product09.png', '999999', 8, 1, '2022-12-02 21:41:36'),
(42, 47, 8, 'laptop', 'product03.png', '999999', 1, 1, '2022-12-04 01:23:33'),
(43, 47, 9, 'camera12+', 'product09.png', '999999', 1, 1, '2022-12-04 01:23:33'),
(44, 48, 11, 'phone', 'product07.png', '1200', 7, 1, '2022-12-06 07:24:11'),
(45, 48, 8, 'laptop', 'product03.png', '999999', 3, 1, '2022-12-06 07:24:11'),
(46, 49, 17, 'camera12+', 'shop02.png', '999999', 1, 1, '2022-12-10 07:50:34'),
(47, 50, 17, 'camera12+', 'shop02.png', '999999', 1, 1, '2022-12-10 07:51:23'),
(48, 51, 17, 'camera12+', 'shop02.png', '999999', 1, 1, '2022-12-10 07:55:40'),
(49, 54, 17, 'camera12+', 'shop02.png', '999999', 1, 1, '2022-12-10 08:25:58'),
(50, 55, 17, 'camera12+', 'shop02.png', '999999', 1, 1, '2022-12-10 08:36:30'),
(51, 56, 17, 'camera12+', 'shop02.png', '999999', 1, 1, '2022-12-10 09:42:48'),
(52, 57, 17, 'camera12+', 'shop02.png', '999999', 1, 1, '2022-12-10 13:19:07'),
(53, 58, 18, 'laptop', 'product08.png', '999999', 1, 1, '2022-12-10 13:22:18'),
(54, 59, 19, 'laptop', '1.jpg', '999999', 4, 1, '2022-12-19 07:55:20'),
(55, 60, 19, 'laptop', '1.jpg', '999999', 1, 1, '2022-12-20 02:32:43'),
(56, 61, 20, 'accessories', '2.jpg', '1200', 1, 1, '2022-12-24 09:43:53'),
(57, 62, 19, 'laptop', '1.jpg', '999999', 1, 1, '2022-12-24 09:47:41'),
(58, 63, 19, 'laptop', '1.jpg', '999999', 1, 1, '2022-12-24 09:48:36'),
(59, 64, 19, 'laptop', '1.jpg', '999999', 1, 1, '2022-12-24 09:51:11'),
(60, 65, 19, 'laptop', '1.jpg', '999999', 1, 1, '2022-12-24 09:52:56'),
(61, 66, 19, 'laptop', '1.jpg', '999999', 1, 1, '2022-12-24 09:53:49'),
(62, 68, 19, 'laptop', '1.jpg', '999999', 1, 1, '2022-12-24 09:55:34'),
(63, 69, 19, 'laptop', '1.jpg', '999999', 1, 1, '2022-12-24 09:57:17'),
(64, 70, 19, 'laptop', '1.jpg', '999999', 1, 1, '2022-12-24 09:58:30'),
(65, 71, 19, 'laptop', '1.jpg', '999999', 1, 1, '2022-12-24 10:10:09'),
(66, 72, 26, 'DELL', 'product04.png', '1200', 1, 1, '2022-12-24 14:10:29'),
(67, 73, 20, 'accessories', '2.jpg', '1200', 1, 1, '2022-12-25 08:51:05');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `p_names` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `p_names`, `description`, `price`, `quantity`, `date`, `image`, `category`) VALUES
(17, 'camera12+', 'it has high focus and HD camera', 12000000, 12, '2022-12-09', 'shop02.png', 'camera'),
(18, 'laptop', '4G of RAM', 2000000, 12, '2022-12-09', 'product08.png', ''),
(19, 'laptop', 'has many quality', 12000000, 2, '2022-12-15', '1.jpg', ''),
(20, 'accessories', 'accessories from chine', 1200, 12, '2022-12-15', '2.jpg', 'accessory'),
(21, 'car', 'from low price to high price', 20000, 2, '2022-12-15', '7.jpg', ''),
(22, 'HP', 'with 8RAM and high processor', 12000000, 12, '2022-12-15', 'product03.png', ''),
(23, 'laptop', 'has 200 SSD', 1200, 12, '2022-12-17', '1.jpg', ''),
(24, 'camera12+', 'with high focus', 1200, 12, '2022-12-17', '3.jpg', ''),
(25, 'laptop', 'has many quality 8G of RAM, 500 SSD and touch screen', 500000, 2, '2022-12-18', 'product01.png', 'computer'),
(26, 'DELL', 'wit full screen', 1200, 11, '2022-12-18', 'product04.png', 'desktop'),
(27, 'LG TV', 'has high full screen and high resolution also it is HD with 32 pulse', 250000, 11, '2022-12-24', '11.JPG', 'TVS'),
(28, 'SUMSUNG TV', 'it is smart tvs', 2000000, 12, '2022-12-24', 't1.JPG', 'TVS'),
(29, 'fridge', 'low power consumption', 300000, 1, '2022-12-24', '13.JPG', 'fridge'),
(30, 'head phone', 'wireless and Bluetooth and camera ', 12000, 2, '2022-12-24', 'product05.png', 'headphone');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `names` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `names`, `email`, `password`, `user_type`) VALUES
(1, 'leon', 'leon@gmail.com', '123', 0),
(2, 'kaka', 'kaka@gmail.com', '1234', 1),
(3, 'Leon official', 'tunkaleon01@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(4, 'Tunka-Leon', 'leon01@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(5, 'Tunka-Leon', 'lolo@gmail.com', 'fcea920f7412b5da7be0cf42b8c93759', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
