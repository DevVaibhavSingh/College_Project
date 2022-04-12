-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2022 at 07:17 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scholar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Phone` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `Name`, `Email`, `Phone`, `Password`) VALUES
(1, 'admin', 'admin@gmail.com', '1234567890', 'abcd'),
(3, 'admin', 'admin@gmail.com', '1234567890', 'abcd'),
(4, 'Vishal', 'Vishalmalhotra@gmail.com', '2343212345', 'Binod@123');

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'How are you?', 'I am extremely good. How may I help you today?'),
(2, 'Did you eat today?', 'Umm! Please ask something more relevant.'),
(3, 'What is your name?', 'My Name is Megha. How may I help you today?'),
(4, 'Are you a girl?', 'Bots do not have gender. '),
(5, 'What is scholar?', 'Scholar helps you meet new opportunities like Scholarships, Internships etc'),
(6, 'Okay okay ok OK Ok', 'May I help you with anything else?'),
(7, 'Yes yes YES', 'What can I help you with?'),
(8, 'No', 'Thanks for using scholar. Have a great day!'),
(9, 'hi hello HI HELLO hey HEY Hey sup SUP Sup hii hiii helllo', 'Hey there! '),
(10, 'What is NetJRF', 'Google it!');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Post` varchar(1000) DEFAULT NULL,
  `Upload_Date` varchar(12) DEFAULT NULL,
  `Type` varchar(100) DEFAULT NULL,
  `comments` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `Name`, `Post`, `Upload_Date`, `Type`, `comments`) VALUES
(51, 'Vaibhav Singh', 'Hello', '09:46:48pm', 'Mentor', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `scholarships`
--

CREATE TABLE `scholarships` (
  `id` int(11) NOT NULL,
  `Scheme_Name` varchar(100) DEFAULT NULL,
  `Scheme_Type` varchar(100) DEFAULT NULL,
  `Eligibility_Creteria` varchar(500) DEFAULT NULL,
  `Amount` int(11) DEFAULT NULL,
  `Provider` varchar(200) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scholarships`
--

INSERT INTO `scholarships` (`id`, `Scheme_Name`, `Scheme_Type`, `Eligibility_Creteria`, `Amount`, `Provider`, `link`) VALUES
(1, 'Scheme for Disables', 'Monetory Support', 'Different level of disabilities', 100000, 'Galgotias University', 'https://xyz.com'),
(3, 'Booster Scholarship', 'Monetory Support', 'First son or daughter of those parents who were excluded from primary education.', 500000, 'Government', 'https://abc.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Phone` varchar(10) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Type` varchar(100) DEFAULT NULL,
  `Age` varchar(10) DEFAULT NULL,
  `Institute` varchar(100) DEFAULT NULL,
  `Contact` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `Email`, `Phone`, `Password`, `Type`, `Age`, `Institute`, `Contact`) VALUES
(1, 'Vaibhav Singh', 'profile.vaibhav@gmail.com', '6393438015', 'Vaibhav@123', 'Mentor', '23', 'Galgotias University', 'https://wa.link/dp36en'),
(2, 'Ritik Yadav', 'ritikydv@gmail.com', '6546789812', 'Ritik@123', 'Admin', '23', 'Galgotias University', 'https://wa.link/dp36en'),
(3, 'Vishal', 'Vishalmalhotra@gmail.com', '2343212345', 'Vishal@123', NULL, '23', 'LPU', 'ss');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scholarships`
--
ALTER TABLE `scholarships`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `scholarships`
--
ALTER TABLE `scholarships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
