-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 04:22 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginregister`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `activity_log_id` int(100) NOT NULL,
  `activity` varchar(225) NOT NULL,
  `user_id` varchar(225) NOT NULL,
  `date` varchar(225) NOT NULL,
  `time` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`activity_log_id`, `activity`, `user_id`, `date`, `time`) VALUES
(76, 'Change Password', 'EvangelistaClara', '2021-04-23', '05:52:37'),
(77, 'Change Password', 'EvangelistaClara', '2021-04-23', '05:52:37'),
(78, 'Login', 'EvangelistaClara', '2021-04-24', '12:25:12'),
(79, 'Logout', 'EvangelistaClara', '2021-04-24', '12:25:43'),
(80, 'Login', 'EvangelistaClara', '2021-04-24', '12:26:42'),
(81, 'Change Password', 'EvangelistaClara', '2021-04-24', '12:27:06'),
(82, 'Forgot Password', 'EvangelistaClara', '2021-04-24 06:27:51', '2021-04-24 06:27:41'),
(83, 'Forgot Password', 'EvangelistaClara', '2021-04-24 06:27:51', '2021-04-24 06:27:41'),
(84, 'Forgot Password', 'EvangelistaClara', '2021-04-24 06:29:14', '2021-04-24 06:29:04'),
(85, 'Forgot Password', 'EvangelistaClara', '2021-04-24 06:29:40', '2021-04-24 06:29:30'),
(86, 'Forgot Password', '12321', '2021-04-24 06:30:07', '2021-04-24 06:29:57'),
(87, 'Forgot Password', 'EvangelistaClara', '2021-04-24 06:31:18', '2021-04-24 06:31:08'),
(88, 'Forgot Password', 'EvangelistaClara', '2021-04-24 06:31:39', '2021-04-24 06:31:29'),
(89, 'Forgot Password', 'EvangelistaClara', '2021-04-24 06:35:02', '2021-04-24 06:34:52'),
(90, 'Login', 'EvangelistaClara', '2021-04-24', '12:35:35'),
(91, 'Change Password', 'EvangelistaClara', '2021-04-24', '12:35:40'),
(92, 'Login', 'EvangelistaClara', '2021-04-24', '12:36:43'),
(93, 'Logout', 'EvangelistaClara', '2021-04-24', '12:36:58'),
(94, 'Login', 'EvangelistaClara', '2021-04-24', '12:37:37'),
(95, 'Change Password', 'EvangelistaClara', '2021-04-24', '12:38:00'),
(96, 'Forgot Password', 'EvangelistaClara', '2021-04-24 06:38:41', '2021-04-24 06:38:31'),
(97, 'Forgot Password', 'EvangelistaClara', '', '12:42:00'),
(98, 'Forgot Password', 'EvangelistaClara', '2021-04-24', '12:42:29');

-- --------------------------------------------------------

--
-- Table structure for table `authentication`
--

CREATE TABLE `authentication` (
  `id` int(25) NOT NULL,
  `user_id` varchar(225) NOT NULL,
  `code` varchar(225) NOT NULL,
  `created_at` varchar(225) NOT NULL,
  `expiration` time(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authentication`
--

INSERT INTO `authentication` (`id`, `user_id`, `code`, `created_at`, `expiration`) VALUES
(383, 'EvangelistaClara', '212934', '2021-04-24 06:24:31', '06:24:41.00000'),
(384, 'EvangelistaClara', '155978', '2021-04-24 06:25:07', '06:25:17.00000'),
(385, 'EvangelistaClara', '271647', '2021-04-24 06:25:12', '06:25:22.00000'),
(386, 'EvangelistaClara', '385143', '2021-04-24 06:26:38', '06:26:48.00000'),
(387, 'EvangelistaClara', '965126', '2021-04-24 06:26:42', '06:26:52.00000'),
(388, 'EvangelistaClara', '440411', '2021-04-24 06:35:30', '06:35:40.00000'),
(389, 'EvangelistaClara', '892429', '2021-04-24 06:35:35', '06:35:45.00000'),
(390, 'EvangelistaClara', '965978', '2021-04-24 06:36:36', '06:36:46.00000'),
(391, 'EvangelistaClara', '509752', '2021-04-24 06:36:43', '06:36:53.00000'),
(392, 'EvangelistaClara', '394657', '2021-04-24 06:37:34', '06:37:44.00000'),
(393, 'EvangelistaClara', '373555', '2021-04-24 06:37:37', '06:37:47.00000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `cpassword`) VALUES
(1, 'EvangelistaClara', 'plbrnlmt@gmail.com', '6083a1b5328e3', '6083a1b5328e3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`activity_log_id`);

--
-- Indexes for table `authentication`
--
ALTER TABLE `authentication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `activity_log_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `authentication`
--
ALTER TABLE `authentication`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=394;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
