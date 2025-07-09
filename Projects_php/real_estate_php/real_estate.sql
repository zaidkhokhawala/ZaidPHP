-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 09, 2025 at 12:53 PM
-- Server version: 8.4.3
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'zaid', 'cd6e5f8cae72a13cb149fa907abeeb19', '2025-07-05 09:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int NOT NULL,
  `cat_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(3, 'Apartment'),
(4, 'Penthouse'),
(5, 'Villa');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'zaid', 'zaidchipa36@gmail.com', 'send me xyz proper details');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `price` varchar(50) NOT NULL,
  `area` varchar(255) NOT NULL,
  `bhk` int NOT NULL,
  `floor` int NOT NULL,
  `parking` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `category_name`, `location`, `price`, `area`, `bhk`, `floor`, `parking`, `image`, `created_at`) VALUES
(3, 'Penthouse', '88 King\'s Road, Chelsea\n\n\n', '3500000', '850', 4, 5, '2', '2.jpg', '2025-07-05 07:15:00'),
(4, 'Villa', '52 Kensington Street, Kensington\n\n', '2900000', '1250', 5, 2, '3', '6.jpg', '2025-07-05 07:20:00'),
(5, 'Apartment', '12 Baker Street, Marylebone\n\n\n', '1850000', '950', 2, 3, '1', '1.png', '2025-07-05 07:30:00'),
(6, 'Penthouse', '103 Skyline Blvd, Chicago\n\n', '4100000', '1400', 5, 6, '2', '4.jpg', '2025-07-05 07:40:00'),
(7, 'Villa', '90 Canary Wharf, Docklands\n\n', '3250000', '1350', 4, 1, '2', '7.jpg', '2025-07-05 07:50:00'),
(8, 'Apartment', '14 Garden Hill Rd, Miami\n\n', '2050000', '800', 3, 2, '1', '9.jpg', '2025-07-05 08:00:00'),
(9, 'Penthouse', '88 Maple Ave, San Francisco\n\n', '4750000', '1600', 6, 7, '3', '3.jpg', '2025-07-05 08:10:00'),
(10, 'Villa', '18 Greenwich Church Street, Greenwich\n\n', '3100000', '1200', 4, 2, '2', '5.jpg', '2025-07-05 08:20:00'),
(11, 'Apartment', '56 Ocean Drive, Los Angeles\n\n', '2000000000', '338', 2, 1, '2', '8.jpg', '2025-07-08 07:36:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'zaid', 'zaid@gmail.com', '$2y$10$yNKefbNjMPSVxc/eja758.iKvuNc7SV7h0YedGk0YoUE1jhovZbJy');

-- --------------------------------------------------------

--
-- Table structure for table `visit_schedule`
--

CREATE TABLE `visit_schedule` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `visitor_name` varchar(100) DEFAULT NULL,
  `property_id` int DEFAULT NULL,
  `category_name` varchar(100) DEFAULT NULL,
  `visitor_number` varchar(20) DEFAULT NULL,
  `visit_date` date DEFAULT NULL,
  `visit_time` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `visit_schedule`
--

INSERT INTO `visit_schedule` (`id`, `user_id`, `username`, `visitor_name`, `property_id`, `category_name`, `visitor_number`, `visit_date`, `visit_time`, `created_at`) VALUES
(1, 1, 'zaid', 'zaid', 3, 'Penthouse', '1111111111', '2025-08-02', '21:57:00', '2025-07-08 11:23:04'),
(2, 1, 'zaid', 'Zaid Khokha', 3, 'Penthouse', '1111111111', '2025-07-03', '17:15:00', '2025-07-08 11:45:52'),
(3, 1, 'zaid', 'zzzz', 4, 'Villa', '22222', '2222-02-11', '18:16:00', '2025-07-08 11:46:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `visit_schedule`
--
ALTER TABLE `visit_schedule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visit_schedule`
--
ALTER TABLE `visit_schedule`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
