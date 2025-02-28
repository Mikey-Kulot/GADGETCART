-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2025 at 04:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gadgetcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password_hash` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password_hash`) VALUES
(2, 'wwwwww', 'wwww@gmail.com', '$2y$10$PKhFhrrrN8rgFRdh86cfZubE5okxI.F6mFaO6pGynC/joWdKTBu6W'),
(3, 'jjjjjj', 'j@gmail.com', '$2y$10$vz.LzJFrCVgMEUBjGcYDZu5QJ4Jp7uX6Ph7QebHkVjFgD/TcvzhR.'),
(4, 'Michael', 'michael123@gmail.com', '$2y$10$tfZgcEiUHQmj0ebuw82/meE1/7eW7Z/MWifOXUXT0podHj2HSUZJO'),
(7, 'ram', 'ram@gmail.com', '$2y$10$IkORXY0XoUZOfjn8WiBoZOE87fy631eIgXxpOcoRdoW3NDY8NjdD6'),
(8, 'abc', 'abc@email.com', '$2y$10$jnFZ64jQxz8ybGDNXkQK3eT0PIYILDdn.Q55RDoMaPcbg5ZJwNmrG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
