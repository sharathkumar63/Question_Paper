-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2022 at 11:03 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addmission_predictor`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `description`) VALUES
(4, 'SC/ST', 'ST/SC'),
(6, 'OBC', 'OBC');

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `fees` int(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `course_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `name`, `email`, `phone`, `fees`, `address`, `description`, `course_id`, `status`) VALUES
(35, 'MITE', 'mite@gmail.com', '7894561230', 100000, 'Moodabidri', 'Mangalore Institute of Technology ', 1, 1),
(36, 'MITE', 'mite@gmail.com', '7894561230', 100000, 'Moodabidri', 'Mangalore Institute of Technology ', 2, 1),
(37, 'MITE', 'mite@gmail.com', '7894561230', 100000, 'Moodabidri', 'Mangalore Institute of Technology ', 3, 1),
(38, 'MITE', 'mite@gmail.com', '7894561230', 100000, 'Moodabidri', 'Mangalore Institute of Technology ', 4, 1),
(39, 'St Joseph', 'joseph@gmail.com', '7896543210', 120000, 'Vamanjoor', 'St Josephs College Mangalore', 1, 1),
(40, 'St Joseph', 'joseph@gmail.com', '7896543210', 120000, 'Vamanjoor', 'St Josephs College Mangalore', 2, 1),
(41, 'St Joseph', 'joseph@gmail.com', '7896543210', 120000, 'Vamanjoor', 'St Josephs College Mangalore', 3, 1),
(42, 'Srinivas University', 'srinivas@gmail.com', '3210654987', 80000, 'Mangalore', 'Srinivas College', 2, 1),
(43, 'KPT', 'kpt@gmail.com', '9448979456', 5000, 'mangalore', 'abcd', 1, 1),
(44, 'KPT', 'kpt@gmail.com', '9448979456', 5000, 'mangalore', 'abcd', 2, 1),
(45, 'KPT', 'kpt@gmail.com', '9448979456', 5000, 'mangalore', 'abcd', 3, 1),
(46, 'KPT', 'kpt@gmail.com', '9448979456', 5000, 'mangalore', 'abcd', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `course_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_name`) VALUES
(1, 'CS'),
(2, 'Mechanical'),
(3, 'Electronic'),
(4, 'Civil');

-- --------------------------------------------------------

--
-- Table structure for table `cutoff`
--

CREATE TABLE `cutoff` (
  `id` int(11) NOT NULL,
  `college_email_id` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `rank` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cutoff`
--

INSERT INTO `cutoff` (`id`, `college_email_id`, `category_id`, `rank`) VALUES
(20, 'joseph@gmail.com', 4, 50000),
(21, 'joseph@gmail.com', 6, 40000),
(22, 'mite@gmail.com', 4, 80000),
(23, 'mite@gmail.com', 6, 60000),
(24, 'srinivas@gmail.com', 4, 100000),
(25, 'srinivas@gmail.com', 6, 90000),
(26, 'kpt@gmail.com', 4, 80000),
(27, 'kpt@gmail.com', 6, 90000);

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `rank` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`id`, `student_id`, `course_id`, `rank`) VALUES
(21, 30, 1, 4000),
(22, 31, 4, 18000),
(23, 32, 4, 0),
(24, 33, 2, 60000),
(25, 34, 1, 10000),
(26, 35, 4, 20000),
(27, 36, 1, 1000),
(28, 37, 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `phone`, `address`, `category_id`, `password`, `status`) VALUES
(30, 'Rakshith P', 'rakshithpnaik@gmail.com', '7090533818', 'Panja', 4, 'Rak', 1),
(31, 'Prasad', 'prasad@gmail.com', '7894561230', 'Kalanja', 6, 'prasad', 1),
(32, 'MANOJ KUMAR B', 'manoj@gmail.com', '09148188432', 'Puttur', 6, 'manoj', 1),
(33, 'Kowshik', 'kowshik@gmail.com', '4561237890', 'Mangalore', 6, 'kowshik', 1),
(34, 'Abishek', 'abishek@gmail.com', '7894561230', 'Mangalore', 6, 'abi', 1),
(35, 'Manu', 'manu@gmail.com', '09148188432', ' Nidpalli Post and Village Puttur Taluk 574259', 4, 'manu', 1),
(36, 'karan', 'karansshetty11@gmail.com', '7676085605', 'surathkal', 6, '1234', 1),
(37, 'Avinash', 'avinash@gmail.com', '+917090533818', 'Kurinja', 4, 'avinash', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cutoff`
--
ALTER TABLE `cutoff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cutoff`
--
ALTER TABLE `cutoff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
