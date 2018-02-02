-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2018 at 10:23 AM
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
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `consumer`
--

CREATE TABLE `consumer` (
  `cid` varchar(100) NOT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `addr` varchar(255) DEFAULT NULL,
  `phno` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consumer`
--

INSERT INTO `consumer` (`cid`, `pass`, `name`, `addr`, `phno`) VALUES
('103', 'siddhant', 'Siddhant', 'patil nagar,deopur.dhule', '2147483647'),
('123456', '1234', 'onkar', 'cxfhvgvf', '9960964087'),
('151669', 'amazon', 'Aditya', 'amazon', '2147483647'),
('15617', 'jvcjhv', 'lavish patil', 'hvhv', 'bcj797'),
('15726', 'ihbj', 'lavish', 'jgj', 'ghjb7878'),
('4567', 'adi123', 'aditya ', 'lake town pune', '2147483647'),
('9421363251', 'sidd', 'shubs 01', 'katraj pune', '9421363'),
('987', 'krushan', 'krushna', 'bibwewadi', '8287878');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `aid` varchar(100) NOT NULL,
  `pid` varchar(100) NOT NULL,
  `cid` varchar(100) NOT NULL,
  `delievered` int(10) NOT NULL,
  `date1` date NOT NULL,
  `addr` varchar(400) NOT NULL,
  `locality` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `cost` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`aid`, `pid`, `cid`, `delievered`, `date1`, `addr`, `locality`, `price`, `cost`) VALUES
('7890', '1', '4567', 1, '2017-11-23', 'swapnil society', 'Bibwewadi', 5, 5),
('7890', '2', '4567', 1, '2017-11-03', 'knkn', 'Kondhwa', 5, 5),
('7890', '1', '4567', 1, '2017-11-24', 'qqq', 'Bibwewadi', 5, 6),
('0', '3', '4567', 1, '2017-11-24', 'bjbjbj', 'Mukund Nagar', 4, 6),
('7890', '3', '2147483647', 0, '2017-11-23', 'katraj pune', 'Bibwewadi', 4, 6),
('0', '2', '987', 0, '2017-11-24', 'rwqt', 'Balaji Nagar', 5, 6),
('0', '3', '987', 0, '2017-11-28', 'balajinagar', 'Balaji Nagar', 4, 6),
('qwert', '4', '987', 0, '2017-11-24', 'kuk', 'Balaji Nagar', 6, 6),
('6789', '2', '103', 1, '2017-11-24', 'fwf', 'Balaji Nagar', 5, 6),
('6789', '1', '151669', 1, '2017-11-23', 'katraj pune', 'Balaji Nagar', 5, 6),
('6789', '2', '151669', 1, '2017-11-23', 'katraj pune', 'Balaji Nagar', 5, 6),
('7890', '1', '103', 1, '2017-11-24', 'hdhdf', 'Bibwewadi', 5, 6),
('7890', '2', '103', 1, '2017-11-24', 'hdhdf', 'Bibwewadi', 5, 6),
('7890', '1', '103', 1, '2017-11-25', 'swapnil society bibwewadi', 'Bibwewadi', 5, 6),
('7890', '3', '103', 1, '2017-11-25', 'swapnil society bibwewadi', 'Bibwewadi', 4, 6),
('7890', '1', '103', 1, '2017-11-24', 'yuu', 'Kondhwa', 5, 6),
('7890', '1', '103', 1, '2017-11-24', 'yuu', 'Kondhwa', 5, 6),
('6789', '2', '103', 1, '2017-11-25', 'wervy', 'Mukund Nagar', 5, 6),
('6789', '3', '103', 1, '2017-11-25', 'wervy', 'Mukund Nagar', 4, 6),
('6789', '1', '103', 1, '2017-11-26', 'yyuii', 'Mukund Nagar', 5, 6),
('6789', '2', '103', 1, '2017-11-26', 'yyuii', 'Mukund Nagar', 5, 6),
('6789', '1', '103', 1, '2017-11-25', 'uhbj', 'Mukund Nagar', 5, 6),
('6789', '1', '103', 1, '2017-11-30', 'ttttttuuuuu', 'Mukund Nagar', 5, 6),
('6789', '2', '103', 1, '2017-11-30', 'ttttttuuuuu', 'Mukund Nagar', 5, 6),
('7890', '1', '103', 1, '2017-10-12', 'abc', 'Bibwewadi', 5, 6),
('7890', '4', '103', 1, '2017-10-12', 'abc', 'Bibwewadi', 6, 6),
('7890', '1', '103', 1, '2017-11-24', 'uuuu', 'Upper', 5, 6),
('6789', '1', '103', 1, '2017-11-24', 'hhh', 'Balaji Nagar', 5, 6),
('6789', '2', '103', 0, '2017-11-25', 'tt', 'Balaji Nagar', 5, 6),
('7890', '5', '103', 1, '2017-11-24', 'popopo', 'Upper', 3, 6),
('7890', '1', '103', 1, '2017-11-24', '<script>alert(\"ABC\")</script>', 'Upper', 5, 6),
('7890', '3', '103', 1, '2017-11-24', '<script>alert(\"ABC\")</script>', 'Upper', 4, 6),
('7890', '1', '103', 1, '2017-11-24', 'sudu', 'Upper', 5, 6),
('7890', '3', '103', 1, '2017-11-24', 'sudu', 'Upper', 4, 6),
('7890', '1', '103', 0, '2017-11-29', '&lt;script&gt;abc&lt;/script&gt;', 'Kondhwa', 5, 6),
('7890', '1', '123456', 0, '2017-12-22', 'pooja sadi centre namegaon', 'Bibwewadi', 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` varchar(200) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `name`, `pass`) VALUES
('12345', 'siddhant chigale', 'siddhant123');

-- --------------------------------------------------------

--
-- Table structure for table `paper_name`
--

CREATE TABLE `paper_name` (
  `pname` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paper_name`
--

INSERT INTO `paper_name` (`pname`, `price`, `id`) VALUES
('Lokmat', 5, 1),
('Times of India', 5, 2),
('Sakal', 4, 3),
('Hindustan Times', 6, 4),
('Punya Nagari', 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `id` varchar(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `phno` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`id`, `name`, `pass`, `phno`) VALUES
('6789', 'hari', 'hari', 537787),
('7890', 'Rahul', 'worker123', 25656),
('8765', 'kumar', 'kumar', 3682638),
('qwert', 'shubham', 'shubham', 76579876);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consumer`
--
ALTER TABLE `consumer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paper_name`
--
ALTER TABLE `paper_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paper_name`
--
ALTER TABLE `paper_name`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
