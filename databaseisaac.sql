-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 04:41 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2015cse052`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `item_id` int(100) NOT NULL,
  `item_name` varchar(200) NOT NULL,
  `item_price` int(200) NOT NULL,
  `item_placeofdelivery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`item_id`, `item_name`, `item_price`, `item_placeofdelivery`) VALUES
(1, 'Masala dosa', 30, 'any place'),
(1, 'Masala dosa', 30, 'any place'),
(2, 'noodles', 45, 'any place'),
(3, 'poori', 30, 'any place'),
(2, 'noodles', 45, 'any place'),
(3, 'poori', 30, 'any place'),
(5, 'plain dosa', 30, 'any place'),
(7, 'ricebath', 30, 'anyplace'),
(6, 'curd rice', 30, 'anyplace');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `phonenumber` bigint(15) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phonenumber` bigint(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `placeofdelivery` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `username`, `email`, `password`, `phonenumber`, `address`, `placeofdelivery`) VALUES
('Isaac A R', 'isaac@143', 'isaacabraham1997@gmail.com', '123456', 9108897344, 'kammanahalli bangalore ', 'kammanahalli'),
('jaya', 'jaya@123', 'jaya@gmail.com', '123456', 1234567890, 'qwertyuiopasdfghjklZxcvbnm', 'presidency'),
('qwefe', '', 'qeqfe@jhas', '', 1210000000000000, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `username` (`username`(50));
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
