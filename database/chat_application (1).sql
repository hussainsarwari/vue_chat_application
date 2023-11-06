-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2023 at 04:23 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat_application`
--

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `friends_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`friends_id`, `user_id`) VALUES
(1, 3),
(2, 1),
(3, 1),
(2, 3),
(3, 3),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(1, 2),
(2, 3),
(2, 3),
(3, 2),
(3, 2),
(3, 2),
(3, 2),
(3, 2),
(3, 2),
(3, 2),
(2, 3),
(2, 1),
(2, 1),
(1, 4),
(1, 4),
(1, 4),
(1, 4),
(1, 4),
(1, 4),
(1, 4),
(2, 4),
(2, 4),
(3, 4),
(2, 5),
(5, 3),
(3, 4),
(4, 1),
(4, 2),
(4, 3),
(1, 6),
(2, 6),
(4, 6),
(4, 6),
(4, 6),
(4, 6),
(6, 3),
(3, 6),
(6, 3),
(7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `date`, `user_id`, `friend_id`, `msg`) VALUES
(76, '0000-00-00', 0, 0, ''),
(77, '0000-00-00', 0, 0, '{\r\n    \"name\":\"hussain\",\r\n    \"first_name\":\"sarwar\"\r\n}'),
(78, '0000-00-00', 0, 0, 'sarwar'),
(79, '0000-00-00', 0, 0, 'sarwar'),
(80, '0000-00-00', 0, 0, 'sarwar');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_getter` int(11) NOT NULL,
  `requestor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_getter`, `requestor`) VALUES
(4, 4),
(5, 4),
(5, 4),
(4, 4),
(1, 7),
(3, 7),
(4, 7);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `name` text NOT NULL,
  `last_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`name`, `last_name`) VALUES
('', 'sarwar'),
('', 'sarwar');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(12) NOT NULL,
  `country` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `education` varchar(100) NOT NULL,
  `birth` date NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `linkedln` varchar(100) NOT NULL,
  `whatsapp` int(12) NOT NULL,
  `skype` varchar(100) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `father_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `name`, `user_address`, `email`, `phone`, `country`, `gender`, `education`, `birth`, `facebook`, `instagram`, `linkedln`, `whatsapp`, `skype`, `friend_id`, `message_id`, `user_password`, `father_name`) VALUES
(1, 'hussain', 'sarwaru', 'kabul', 'mohammadhussainsarwari5@gmail.com', 766805049, 'Afghanistan', 'male', 'computer science', '1999-11-07', '0790234523', '0790234523', '0790234523', 790234523, '0790234523', 0, 0, '0790234523', 'ziauddin'),
(2, 'ali mahammadi', 'ali', 'kabul', 'mohammadhussainsarwari5@gmail.com', 766805049, 'Afghanistan', 'male', '3d', '2023-11-22', '231', '23', '23', 23, '23', 0, 0, '23', 'mohammad'),
(3, 'hadializada', 'hadi', 'mazar', 'hadializada789@gmail.com', 796174490, 'Iran', 'male', 'engineering', '2009-06-10', 'hadi', 'hadi123', 'hadi22', 790299090, 'hadi2233', 0, 0, 'hadi123', 'mohammad'),
(4, 'hussain', 'hussain', 'kabul', 'hussain@gmail.com', 23123, '', '', 'c', '2023-11-01', '23', '23', '23', 23, '23', 0, 0, '23', 'ziauddin'),
(5, 'hussain', 'hussain', 'kabul', 'hussain@gmail.com', 23123, '', '', 'c', '2023-11-01', '23', '23', '23', 23, '23', 0, 0, '23', 'ziauddin'),
(6, 'yaduallah', 'yaduallah', 'kabul', 'yaduallah@gmailcom', 790909090, 'Afghanistan', 'male', 'communication', '1996-03-15', '0790909090', 'yaduallal', 'yaduallataheri', 790909090, 'yaduallah', 0, 0, '123', 'nazer'),
(7, 'yasin', 'ali', 'kabul', 'mohammadhussainsarwari5@gmail.com', 766805049, 'Afghanistan', 'male', 'communication', '2023-11-20', 'ali', 'ali123', '123', 0, '9089', 0, 0, '22', 'mohammad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `friends_id` (`friends_id`) USING BTREE;

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD KEY `requestor` (`requestor`),
  ADD KEY `request_getter` (`request_getter`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `friends`
--
ALTER TABLE `friends`
  ADD CONSTRAINT `friends_ibfk_1` FOREIGN KEY (`friends_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `friends_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`requestor`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`request_getter`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
