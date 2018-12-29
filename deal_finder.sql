-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2018 at 08:19 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deal_finder`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Electronic Devices'),
(2, 'Women Fashion'),
(3, 'Men Fashion'),
(4, 'Watches'),
(5, 'Groceries'),
(6, 'Health & Beauty');

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `discount` varchar(20) NOT NULL,
  `coupons` varchar(20) NOT NULL,
  `sale` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`discount`, `coupons`, `sale`) VALUES
('15%', '5422', 'arong');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `gender`) VALUES
(1, 'kamruna', 'konica', 'konica@gmail.com', '123456', 'Female'),
(2, 'tamanna', 'islam', 'tamannaislam@gmail.com', '$2y$10$jp/o3sJs4isEoJmXFP.hoOWRS0eiQUDiAco.sdwKKjK', 'Female'),
(3, 'tamanna', 'habiba', 'tamannahabiba@yahoo.com', '$2y$10$tK.EHB7Q9BBe52YQMvhp.OTHii3ObQIiENtQ.d2huEl', 'Female'),
(4, 'sadia', 'islam', 'sadia@gmail.cpm', '$2y$10$LCfUOducC5CpFPSZOJ6U8O/rKLBemcaPpZL8QJr.Sh.', 'Female'),
(5, 'supriya', 'islam', 'supriya@gmail.com', 'ef15d8edd00a6960c9c16937cbf14212', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `vendor_id` int(10) NOT NULL,
  `vendor_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vendor_id`, `vendor_name`) VALUES
(1, 'Amazon'),
(2, 'Aarong'),
(3, 'pickaboo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
