-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Mar 29, 2021 at 05:40 PM
-- Server version: 8.0.23
-- PHP Version: 7.4.16

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skillup_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Creation: Mar 25, 2021 at 07:06 PM
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `age` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `age`) VALUES
(1, 'Bart Simpson', NULL, 7),
(2, 'Homer Simpson', NULL, 40),
(3, 'Marge Simpson', NULL, 32),
(4, 'Meggie Simpson', NULL, 2),
(5, 'Bart Simpson', NULL, 7),
(6, 'Homer Simpson', NULL, 40),
(7, 'Marge Simpson', NULL, 32),
(8, 'Meggie Simpson', NULL, 2),
(9, 'Snowball', NULL, NULL),
(10, 'Dmytro Kotenko', NULL, 32),
(11, 'Bart Simpson', NULL, 7),
(12, 'Homer Simpson', NULL, 40),
(13, 'Marge Simpson', NULL, 32),
(14, 'Meggie Simpson', NULL, 2),
(15, 'Snowball', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_contacts`
--
-- Creation: Mar 25, 2021 at 06:43 PM
--

CREATE TABLE `user_contacts` (
  `id` int UNSIGNED NOT NULL,
  `type` enum('phone','email','address','fax') DEFAULT NULL,
  `contact` varchar(255) NOT NULL,
  `user_id` int UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_contacts`
--

INSERT INTO `user_contacts` (`id`, `type`, `contact`, `user_id`) VALUES
(19, 'phone', '+37369584354', 1),
(20, 'email', 'malen@test.com', 1),
(21, 'fax', '+37369584254', 1),
(22, 'phone', '+37369584300', 2),
(23, 'email', 'mazurvaleria00@gmail.com', 2),
(24, 'fax', '+37369584201', 2),
(25, 'phone', '+37369584311', 3),
(26, 'email', 'mazurvaleria11@gmail.com', 3),
(27, 'fax', '+37369584202', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_contacts`
--
ALTER TABLE `user_contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact` (`contact`),
  ADD KEY `fk-user_contacts-user_id-users-id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_contacts`
--
ALTER TABLE `user_contacts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_contacts`
--
ALTER TABLE `user_contacts`
  ADD CONSTRAINT `fk-user_contacts-user_id-users-id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
