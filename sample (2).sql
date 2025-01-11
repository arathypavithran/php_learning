-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 10, 2025 at 10:12 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `product_id` int NOT NULL,
  `quantity` int DEFAULT '1',
  `added_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`, `added_at`) VALUES
(1, 8, 18, 5, '2025-01-09 10:29:57');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(30) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(8, 'cat3'),
(7, 'cat2'),
(6, 'cat1');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_rate` decimal(10,2) NOT NULL,
  `quantity` int NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `order_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`),
  KEY `user_id` (`user_id`),
  KEY `product_id` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `user_id`, `product_id`, `product_name`, `product_rate`, `quantity`, `fname`, `lname`, `address`, `order_date`) VALUES
(1, 0, 18, 'product5', '40000.00', 3, 'arathy', 'aasadsds', 'dsds', '2025-01-07 14:41:57'),
(6, 8, 20, 'product2', '20000.00', 3, 'sa', 'aa ', 'aasa', '2025-01-08 10:16:08'),
(3, 0, 16, 'product3', '10000.00', 7, 'acb', 'dsd', 'sad', '2025-01-08 08:52:31'),
(4, 0, 18, 'product5', '40000.00', 3, 'sa', 'aa ', 'aasa', '2025-01-08 10:05:35'),
(5, 8, 18, 'product5', '40000.00', 3, 'sa', 'aa ', 'aasa', '2025-01-08 10:09:02'),
(7, 8, 18, 'product5', '40000.00', 5, 'sa', 'aa ', 'aasa', '2025-01-08 10:16:56');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(30) NOT NULL,
  `subcat_id` int NOT NULL,
  `product_rate` decimal(10,0) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `cat_id` int DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `subcat_id`, `product_rate`, `product_image`, `cat_id`) VALUES
(18, 'product5', 2, '40000', 'download.jpg', 7),
(17, 'product4', 2, '40000', 'download (2).jpg', 7),
(16, 'product3', 3, '10000', 'download (1).jpg', 8),
(19, 'product1', 2, '20000', 'OIP.jpg', 7),
(20, 'product2', 2, '20000', 'download (2).jpg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

DROP TABLE IF EXISTS `subcategory`;
CREATE TABLE IF NOT EXISTS `subcategory` (
  `subcat_id` int NOT NULL AUTO_INCREMENT,
  `subcat_name` varchar(30) NOT NULL,
  `cat_id` int NOT NULL,
  PRIMARY KEY (`subcat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcat_id`, `subcat_name`, `cat_id`) VALUES
(1, 'subcat1', 8),
(2, 'subcat2', 7),
(3, 'subcat3', 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `email`, `password`, `address`) VALUES
(3, 'df', 'dd', 'sds@gmail.com', '$2y$10$a.qU2K./vkfOpmzhEBJ9VeqkV5HVu.lcI1aii3ffYT3OeXgyDZwrO', 'dssds'),
(2, 'arathy', 'asa', 'arathy@gmail.com', '$2y$10$0Stfz.dwalXP0RLaJFz8.e/YahBRcbyHHb0JPuaWn5VAnz4q5qwXK', 'sdsdsds'),
(4, 'zddsd', 'dssd', 'sdsd@gmail.com', '$2y$10$TtAKemv1pNgMrZxdVGBt5uJcUCKUNSsN.zMFbMeqfGhAdXuio3agm', 'dsf'),
(5, 'anu', 'aas', 'anu@gmail.com', '$2y$10$NqtB58eV525KsWyqu0piFuugpahFI.0LlxdbMXMFFzr3XzesdE.yG', 'snbmn'),
(6, 'adad', 'sd', 'sdasd@gmail.com', '$2y$10$1jCWMeAExNZtcIEbeenrdu9uKE0fZ.X7r5nKYOrvzznrWKSdhgLt6', 'sas'),
(7, 'ammu', 'ammu', 'ammu@gmail.com', '$2y$10$cjJLx1S/3JPc0WCbN4jRwOrigXOzZdaIgvNVYXqw9HsQ5eqZE2DJy', 'sadad'),
(8, 'sa', 'aa', 'aa@gmail.com', '$2y$10$drn3yb5lDODwqoRuing1wu/czfxjbQAYUwIodm5RFtMjyuHeMRig6', 'aasa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
