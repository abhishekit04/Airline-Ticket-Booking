-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 21, 2025 at 04:38 PM
-- Server version: 8.0.37
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_flight`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int NOT NULL,
  `cust_id` varchar(256) DEFAULT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `flight_name` varchar(256) DEFAULT NULL,
  `order_no` varchar(256) DEFAULT NULL,
  `first_name` varchar(256) DEFAULT NULL,
  `Last_name` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `mobile` varchar(256) DEFAULT NULL,
  `address` text,
  `passport` varchar(256) DEFAULT NULL,
  `visa` varchar(256) DEFAULT NULL,
  `seat_no` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `price` varchar(256) DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0' COMMENT '0=booking 1= close'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `cust_id`, `date`, `flight_name`, `order_no`, `first_name`, `Last_name`, `email`, `mobile`, `address`, `passport`, `visa`, `seat_no`, `price`, `status`) VALUES
(4, '2', '2025-04-01 22:11:37', '1', '1', 'sasa', 'sa', 'sa@gmail.com', 'sa', 'sa', 'sa', '', '3', '2000 ', 0),
(5, '2', '2025-04-01 22:11:37', '1', '1', 'sa', 'sa', '', 'sa', 'sa', 'sasa', '', '4', '2000 ', 0),
(6, '2', '2025-04-01 22:23:57', '1', '2', 'sasa', 'sa', 'sa@gmail.com', 'sa', 'sa', 'sa', '', '5', '2000 ', 0),
(7, '2', '2025-04-01 22:23:57', '1', '2', 'sa', 'sa', '', 'sa', 'sa', 'sasa', '', '6', '2000 ', 0),
(8, '2', '2025-04-04 14:02:23', '4', 'Bid-0000001', 'Sachin', 'Gantennavra', '', '7204745662', 'bgm', '132154', '132132', '1', '700 ', 0),
(9, '2', '2025-04-04 14:05:44', '4', 'Bid-0000001', 'sasa', 'sa', 'sa', 'sa', 'sa', 'sa', 'sa', '2', '700 ', 0),
(10, '2', '2025-04-04 14:08:28', '4', 'Bid-0000001', 'sasa', 'sa', 'sa', 'sa', 'sa', 'sa', 'sa', '3', '700 ', 0),
(11, '2', '2025-04-04 14:08:56', '4', 'Bid-0000001', 'sa', 'sa', '', 'sa', '', 'sa', 'sa', '4', '700 ', 0),
(12, '2', '2025-04-04 14:09:23', '4', 'Bid-0000001', 'sa', 'sa', '', 'sa', '', 'sa', 'sa', '5', '700 ', 0),
(13, '2', '2025-04-04 14:09:42', '4', 'Bid-0000001', 'sa', 'sa', '', 'sa', '', 'sa', 'sa', '6', '700 ', 0),
(14, '2', '2025-04-06 19:36:30', '2', 'Bid-0000001', '', '', '', '', '', '', '', '1', '2000 ', 0),
(15, '2', '2025-04-06 19:36:30', '2', 'Bid-0000001', '', '', '', '', '', '', '', '2', '2000 ', 0),
(16, '2', '2025-04-07 18:37:18', '2', 'Bid-0000001', 'sachin', 'gantennavar', '', '7204745662', 'bgm', '78798', '1213', '3', '2000 ', 0),
(17, '2', '2025-04-07 18:40:51', '2', 'Bid-0000002', 'sachin', 'gantennavar', '', '7204745662', 'bgm', '78798', '1213', '4', '2000 ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `citys`
--

CREATE TABLE `citys` (
  `id` int NOT NULL,
  `city` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `citys`
--

INSERT INTO `citys` (`id`, `city`) VALUES
(1, 'Bengaluru '),
(2, 'Belgaum ');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `id` int NOT NULL,
  `flight_no` varchar(25) DEFAULT NULL,
  `flight_name` varchar(256) DEFAULT NULL,
  `seats` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`id`, `flight_no`, `flight_name`, `seats`) VALUES
(1, '1231', 'Air-india', '100'),
(3, '1111', 'King-airline', '150');

-- --------------------------------------------------------

--
-- Table structure for table `flight_details`
--

CREATE TABLE `flight_details` (
  `id` int NOT NULL,
  `flight_name` varchar(256) DEFAULT NULL,
  `arrivel` varchar(256) DEFAULT NULL,
  `time1` varchar(256) DEFAULT NULL,
  `form` varchar(256) DEFAULT NULL,
  `departure` varchar(256) DEFAULT NULL,
  `time2` varchar(256) DEFAULT NULL,
  `to` varchar(256) DEFAULT NULL,
  `duration` varchar(256) DEFAULT NULL,
  `price` varchar(256) DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0' COMMENT '0=ready 1=issue 2=departed 3=arived'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `flight_details`
--

INSERT INTO `flight_details` (`id`, `flight_name`, `arrivel`, `time1`, `form`, `departure`, `time2`, `to`, `duration`, `price`, `status`) VALUES
(1, '1', '2025-03-26', '13:36', '1', '2025-04-04', '15:37', '2', '4 hrs', '2000 ', 3),
(2, '1', '2025-04-02', '13:36', '1', '2025-04-01', '15:37', '2', '4 hrs', '2000 ', 0),
(3, '3', '2025-04-05', '15:57', '2', '2025-04-04', '13:57', '1', '1 Day', '5000 ', 3),
(4, '3', '2025-04-06', '16:00', '1', '2025-04-05', '13:00', '2', '15 min', '700 ', 0),
(5, '1', '2025-04-06', '19:31', '1', '2025-04-06', '19:31', '2', '4h', '100 ', 2);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int NOT NULL,
  `section` varchar(256) NOT NULL,
  `image` text NOT NULL,
  `name` varchar(256) NOT NULL,
  `price` varchar(100) NOT NULL,
  `status` int NOT NULL DEFAULT '0' COMMENT '0=active 1=inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `section`, `image`, `name`, `price`, `status`) VALUES
(2, 'Veg Food', '190425114517636977607425696252QYiiUU.webp', 'Masala Dosa', '120', 0),
(3, 'Veg Food', '190425114627pure-veg-meals-by-lunchbox-nashi.webp', 'Veg Meals', '100', 0),
(4, 'Veg Food', '190425115951Egg-fried-rice-2.webp', 'Pav Bhagi', '60', 0),
(5, 'Non Veg Food', '190425115341nonveg.webp', 'Chicken Suuka', '260', 0),
(6, 'Non Veg Food', '190425115800images (1).webp', 'chicken biryani', '180', 0),
(7, 'Non Veg Food', '190425115841Hyderabadi-Egg-Dum-Biryani.webp', 'Egg Biryani ', '150', 0),
(8, 'Fruits', '190425120242red-apple.webp', 'Apple 1Kg', '400', 0),
(9, 'Fruits', '190425120317orange-fruit-isolated-on-white.webp', 'Orange 1Kg', '150', 0),
(10, 'Fruits', '190425120526product-jpeg-500x500.webp', 'Banana 1Kg', '60', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int NOT NULL,
  `email` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `login_logo` text,
  `admin_logo` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `login_logo`, `admin_logo`) VALUES
(1, 'admin@gmail.com', 'admin', '190425121325-image-removebg-preview.png', '190425021852-image-removebg-preview.png');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int NOT NULL,
  `first_name` varchar(256) DEFAULT NULL,
  `last_name` varchar(256) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `mobile` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `review` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `first_name`, `last_name`, `email`, `mobile`, `password`, `review`) VALUES
(2, 'Sachin', 'Gantennavar', 'a1@gmail.com', '7204745662', 'Sachin@123', '{\"star\":\"5\",\"message\":\"One of the Best Flight Booking Services I never seen. easy to use and Management. good Service\",\"date\":\"$date\"}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `citys`
--
ALTER TABLE `citys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flight_details`
--
ALTER TABLE `flight_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `citys`
--
ALTER TABLE `citys`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `flight_details`
--
ALTER TABLE `flight_details`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
