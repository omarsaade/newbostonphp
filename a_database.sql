-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2021 at 09:59 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `food` varchar(25) NOT NULL,
  `calories` int(11) NOT NULL,
  `healthy_unhealthy` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `food`, `calories`, `healthy_unhealthy`) VALUES
(1, 'pizza', 1000, 'u'),
(2, 'salad', 200, 'h'),
(3, 'pasta', 600, 'h'),
(4, 'Ice cream', 700, 'u');

-- --------------------------------------------------------

--
-- Table structure for table `hits_count`
--

CREATE TABLE `hits_count` (
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hits_count`
--

INSERT INTO `hits_count` (`count`) VALUES
(0);

-- --------------------------------------------------------

--
-- Table structure for table `hits_ip`
--

CREATE TABLE `hits_ip` (
  `ip` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hits_ip`
--

INSERT INTO `hits_ip` (`ip`) VALUES
('127.0.0.1'),
('127.0.0.1'),
('127.0.0.1'),
('127.0.0.1'),
('127.0.0.1'),
('127.0.0.1'),
('127.0.0.1'),
('127.0.0.1'),
('127.0.0.1'),
('127.0.0.1'),
('127.0.0.1'),
('127.0.0.1'),
('127.0.0.1'),
('127.0.0.1'),
('127.0.0.1'),
('127.0.0.1'),
('127.0.0.1'),
('127.0.0.1'),
('127.0.0.1'),
('127.0.0.1'),
('127.0.0.1'),
('127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `names`
--

CREATE TABLE `names` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `names`
--

INSERT INTO `names` (`id`, `name`) VALUES
(1, 'alex Garrett'),
(2, 'Alex Malcolm'),
(3, 'Dale Garrett'),
(4, 'Billy Garrett');

-- --------------------------------------------------------

--
-- Table structure for table `namez`
--

CREATE TABLE `namez` (
  `surname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `namez`
--

INSERT INTO `namez` (`surname`) VALUES
('Garrett'),
('Garrett'),
('Malcolm'),
('Garrett'),
('Garrett'),
('Malcolm'),
('smith');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `name`) VALUES
(1, 'Alex'),
(2, 'Dale');

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `id` int(11) NOT NULL,
  `people_id` int(11) NOT NULL,
  `pet` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`id`, `people_id`, `pet`) VALUES
(1, 1, 'cat'),
(2, 1, 'fish'),
(3, 2, 'dog');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `surname` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `surname`) VALUES
(1, 'alex', '32250170a0dca92d53ec9624f336ca24', 'Alex', 'Garrett'),
(2, 'billy', '32250170a0dca92d53ec9624f336ca24', 'Billy', 'Garrett'),
(3, 'omar', '32250170a0dca92d53ec9624f336ca24', 'ammur', 'saade'),
(4, 'faysal', '32250170a0dca92d53ec9624f336ca24', 'faysal', 'saade'),
(5, '\'', '0cc175b9c0f1b6a831c399e269772661', 'faysal', 'saade'),
(6, '\"', '0cc175b9c0f1b6a831c399e269772661', '<script>window.location.href=`http://goo', '<br /><b>Warning</b>:  Undefined variabl'),
(8, 'c', '0cc175b9c0f1b6a831c399e269772661', '&lt;br /&gt;&lt;b&gt;Warning&lt;/b&gt;: ', '&lt;br /&gt;&lt;b&gt;Warning&lt;/b&gt;: ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hits_count`
--
ALTER TABLE `hits_count`
  ADD PRIMARY KEY (`count`);

--
-- Indexes for table `names`
--
ALTER TABLE `names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `names`
--
ALTER TABLE `names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
