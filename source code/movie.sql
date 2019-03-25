-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2018 at 07:09 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_detail`
--

CREATE TABLE `account_detail` (
  `username` varchar(150) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(150) NOT NULL,
  `new_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_detail`
--

INSERT INTO `account_detail` (`username`, `email`, `password`, `new_password`) VALUES
('hafeez', 'hafeez@gmail.com', '1234', '1234'),
('hafeez', 'hafeez0815@gmail.com', '1234', '1234'),
('dhruvin', 'dhruvin@gmail.com', '', ''),
('dhruvin', 'dhruvin@gmail.com', '1234', '1234'),
('ram', 'hafeez0815@gmail.com', '1', '1'),
('ram', 'ram@gmail.com', '1234', ''),
('sachin', 'sachin@gmail.com', '1234', ''),
('baghavan', 'baghavan@gmail.com', '1234', ''),
('sachin s', 'sachin@gmail.com', '1234', ''),
('ram m', 'ram@gmail.com', '1234', ''),
('giri', 'giri@gmail.com', '1234', '');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `mov_id` int(20) NOT NULL,
  `mov_title` varchar(150) NOT NULL,
  `mov_year` varchar(64) NOT NULL,
  `mov_lang` varchar(64) NOT NULL,
  `dir_id` int(10) NOT NULL,
  `type` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`mov_id`, `mov_title`, `mov_year`, `mov_lang`, `dir_id`, `type`) VALUES
(11, 'BETA', '2015', 'English', 100, 'Action'),
(12, 'ALPHA', '2016', 'English', 101, 'Comdey'),
(13, 'The Letter Writer', '2017', 'Eenglish', 100, 'Herrow'),
(14, 'The Love you Man', '2015', 'English', 101, 'Action');

-- --------------------------------------------------------

--
-- Table structure for table `movie_actor`
--

CREATE TABLE `movie_actor` (
  `act_id` int(50) NOT NULL,
  `act_name` varchar(150) NOT NULL,
  `act_gender` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie_actor`
--

INSERT INTO `movie_actor` (`act_id`, `act_name`, `act_gender`) VALUES
(1000, 'salman khan', 'male'),
(1001, 'rock h', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `movie_cast`
--

CREATE TABLE `movie_cast` (
  `act_id` int(20) NOT NULL,
  `mov_id` int(64) NOT NULL,
  `role` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie_cast`
--

INSERT INTO `movie_cast` (`act_id`, `mov_id`, `role`) VALUES
(1000, 11, 'friend'),
(1000, 12, 'shyam'),
(1001, 12, 'best friend');

-- --------------------------------------------------------

--
-- Table structure for table `movie_desc`
--

CREATE TABLE `movie_desc` (
  `mov_id` int(11) NOT NULL,
  `mov_name` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `rating` int(255) NOT NULL,
  `language` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie_desc`
--

INSERT INTO `movie_desc` (`mov_id`, `mov_name`, `year`, `type`, `rating`, `language`) VALUES
(11, 'BETA', '2017', 'Action', 8, 'english'),
(12, 'ALPHA', '2018', 'comedy', 7, 'english'),
(13, 'the Letter Writer', '2016', 'action', 9, 'english'),
(14, 'The Love ', '2015', 'Horror', 6, 'english');

-- --------------------------------------------------------

--
-- Table structure for table `movie_detail`
--

CREATE TABLE `movie_detail` (
  `id` int(16) NOT NULL,
  `movie_name` varchar(64) NOT NULL,
  `actor_name` varchar(64) NOT NULL,
  `director_name` varchar(64) NOT NULL,
  `movie_rating` int(10) NOT NULL,
  `movie_date` date NOT NULL,
  `mlang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie_detail`
--

INSERT INTO `movie_detail` (`id`, `movie_name`, `actor_name`, `director_name`, `movie_rating`, `movie_date`, `mlang`) VALUES
(104, 'zero', 'rock', 'sohail khan', 6, '2018-10-10', 'hindi'),
(108, 'alpha', 'rackj', 'hiofd', 8, '2015-01-12', 'english'),
(109, 'sultan', 'amir khan', 'kabir', 8, '2015-12-01', 'english'),
(110, 'sallu', 'dg', 'ghh', 8, '2016-12-12', 'hindi'),
(112, 'kirik party', 'Rakshit Shetty', 'gouri khan ', 8, '1998-01-02', 'english'),
(113, 'dangal', 'Rakshit Shetty', 'gouri khan ', 10, '2016-12-12', 'marati');

-- --------------------------------------------------------

--
-- Table structure for table `movie_director`
--

CREATE TABLE `movie_director` (
  `dir_id` int(20) NOT NULL,
  `dir_name` varchar(150) NOT NULL,
  `dir_phone` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie_director`
--

INSERT INTO `movie_director` (`dir_id`, `dir_name`, `dir_phone`) VALUES
(100, 'Kabir M', 997251193),
(101, 'Manish shah', 344354444);

-- --------------------------------------------------------

--
-- Table structure for table `mov_rating`
--

CREATE TABLE `mov_rating` (
  `mov_id` int(20) NOT NULL,
  `rev_star` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mov_rating`
--

INSERT INTO `mov_rating` (`mov_id`, `rev_star`) VALUES
(11, '5'),
(12, '6');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `username` varchar(150) NOT NULL,
  `id` varchar(150) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`username`, `id`, `pass`) VALUES
('hafeez', '123456789', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`mov_id`);

--
-- Indexes for table `movie_cast`
--
ALTER TABLE `movie_cast`
  ADD PRIMARY KEY (`act_id`,`mov_id`);

--
-- Indexes for table `movie_desc`
--
ALTER TABLE `movie_desc`
  ADD PRIMARY KEY (`mov_id`);

--
-- Indexes for table `movie_detail`
--
ALTER TABLE `movie_detail`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `movie_director`
--
ALTER TABLE `movie_director`
  ADD PRIMARY KEY (`dir_id`);

--
-- Indexes for table `mov_rating`
--
ALTER TABLE `mov_rating`
  ADD PRIMARY KEY (`mov_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie_detail`
--
ALTER TABLE `movie_detail`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
