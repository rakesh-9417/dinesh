-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2020 at 01:45 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(10) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `firstname`, `lastname`, `image`, `email`, `password`, `date_time`) VALUES
(1, 'Rakesh', 'kumar', '1.jfif', 'rakesh@gmail.com', 'admin', '2020-11-10 11:23:11'),
(2, 'umesh', 'kumar', '2.jfif', 'umesh@gmail.com', 'admin', '2020-11-10 11:29:17'),
(3, 'suraj', 'kumar', '3.jfif', 'suraj@gmail.com', 'admin', '2020-11-10 11:29:45'),
(6, 'mohit', 'kumar', '6.jfif', 'mohit@gmail.com', 'admin', '2020-11-10 12:47:34'),
(7, 'kartik', 'kumar', '8.jfif', 'kartik@gmail.com', 'admin', '2020-11-10 12:48:51'),
(8, 'surya', 'surya', '9.jfif', 'surya@gmail.com', 'admin', '2020-11-10 12:49:20'),
(9, 'anupam', 'surya', '10.jfif', 'anupam@gmail.com', 'admin', '2020-11-10 12:49:44'),
(10, 'jkjk', 'jkjk', '13.jfif', 'sdsd@fdsfd.kl', 'fgdfgfg', '2020-11-11 04:56:26'),
(11, 'sdsdsdsf', 'sdsds', '14.jfif', 'sdsaddsfd@dfgf.jk', 'ghfghgh', '2020-11-11 04:56:41'),
(12, 'vhjhjh', 'hjkhj', '9.jfif', 'zxz@vgvbgf.ghj', 'dfdggf', '2020-11-11 04:56:58'),
(13, 'ghjhj', 'fd', '11.jfif', 'df@ds.gf', 'Admin123', '2020-11-16 08:40:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
