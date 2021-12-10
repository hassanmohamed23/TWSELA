-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2019 at 02:37 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `location` varchar(1000) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `name`, `location`, `description`, `image`) VALUES
(1, 'mahmoud', 'https://www.google.com', 'jjjjsjjs', './img/1.png'),
(2, 'ali', 'https://wego.here.com/directions/mix//%D8%B5%D9%8A%D8%AF%D9%84%D9%8A%D9%87-%D8%A7%D9%84%D8%B9%D8%B2%D8%A8%D9%89-%D8%A7%D8%B3%D9%8A%D9%88%D8%B7,-%D8%B4%D8%A7%D8%B1%D8%B9-%D9%85%D8%AD%D9%85%D9%88%D8%AF-%D8%B1%D8%B4%D9%88%D8%A7%D9%86-%D8%A8%D8%AC%D9%88%D8%A7%D8%B1-%D9%85%D8%B3%D8%AC%D8%AF-%D9%85%D9%83%D9%87,-Asyut:e-eyJuYW1lIjoiXHUwNjM1XHUwNjRhXHUwNjJmXHUwNjQ0XHUwNjRhXHUwNjQ3IFx1MDYyN1x1MDY0NFx1MDYzOVx1MDYzMlx1MDYyOFx1MDY0OSBcdTA2MjdcdTA2MzNcdTA2NGFcdTA2NDhcdTA2MzciLCJhZGRyZXNzIjoiXHUwNjM0XHUwNjI3XHUwNjMxXHUwNjM5IFx1MDY0NVx1MDYyZFx1MDY0NVx1MDY0OFx1MDYyZiBcdTA2MzFcdTA2MzRcdTA2NDhcdTA2MjdcdTA2NDYgXHUwNjI4XHUwNjJjXHUwNjQ4XHUwNjI3XHUwNjMxIFx1MDY0NVx1MDYzM1x1MDYyY1x1MDYyZiBcdTA2NDVcdTA2NDNcdTA2NDcsIEFzeXV0IiwibGF0aXR1ZGUiOjI3LjE5MTU0MDcsImxvbmdpdHVkZSI6MzEuMTgyMzAxMywicHJvdmlkZXJOYW1lIjoiZmFjZWJvb2siLCJwcm92aWRlcklkIjoxODU5MjU0ODMxMDY0NzA0fQ==?map=27.18947,31.18432,17,normal&fb_locale=en_GB', 'love you  good ', './img/bed.jpg'),
(3, 'jejsj', 'jsejkjks', 'skeks', './img/bed.jpg\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `housing`
--

CREATE TABLE `housing` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `location` varchar(1000) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `housing`
--

INSERT INTO `housing` (`id`, `name`, `location`, `image`, `description`) VALUES
(1, 'ali', 'https://www.google.com', './img/study.jpg', 'jfjdfjj');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_name` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `class` int(11) DEFAULT NULL,
  `root` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_name`, `email`, `password`, `class`, `root`) VALUES
('ali', 'ali@gmail.com', 'ali123', 1, 0),
('hassn', 'hassan@gmail.com', '123', 1, 0),
('mahmoud', 'mg7427370@gmail.com', 'mahmoud123', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `housing`
--
ALTER TABLE `housing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `housing`
--
ALTER TABLE `housing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
