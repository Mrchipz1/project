-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2019 at 10:44 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse`
--

-- --------------------------------------------------------

--
-- Table structure for table `allstud`
--

CREATE TABLE `allstud` (
  `_uid_` int(11) NOT NULL,
  `_namer_` varchar(200) DEFAULT NULL,
  `regno` varchar(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `_regged_` varchar(255) DEFAULT 'N',
  `_passed_` varchar(200) DEFAULT NULL,
  `_passed2_` varchar(200) DEFAULT NULL,
  `_coding_` varchar(250) DEFAULT NULL,
  `_timeup_` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_details` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`_id`, `cat_name`, `cat_details`, `date_added`, `date_modified`) VALUES
(1, 'PRESIDENTIAL ELECTION', '', '2019-03-12 08:23:01', '2019-03-18 13:11:58');

-- --------------------------------------------------------

--
-- Table structure for table `contestant`
--

CREATE TABLE `contestant` (
  `_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `contestant_name` varchar(255) NOT NULL,
  `contestant_dept` varchar(250) NOT NULL,
  `vote_count` varchar(255) NOT NULL,
  `contestant_level` varchar(10) NOT NULL,
  `image` varchar(30) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contestant`
--

INSERT INTO `contestant` (`_id`, `category_id`, `contestant_name`, `contestant_dept`, `vote_count`, `contestant_level`, `image`, `date_added`, `date_modified`) VALUES
(1, 1, 'Ogunforowa Oluwaseyi', 'Mechanical Engineering', '', '500', '1.png', '2018-04-08 01:54:16', '2018-04-08 12:08:24'),
(2, 1, 'Olanipekun Folabunmi', 'Computer Science', '', '100', '2.JPG', '2018-04-08 01:54:16', '2018-04-08 12:09:31'),
(3, 1, 'Okechukwu Esther', 'Biochemistry', '', '200', '3.png', '2018-04-08 01:58:25', '2018-04-08 12:09:44'),
(4, 1, 'Solomon Ashedzi', 'Computer Science', '', '200', '4.jpg', '2018-04-08 01:58:25', '2018-04-08 12:09:53'),
(5, 1, 'Olatunji Anuoluwapo', 'Chemical Engineering', '', '500', '5.png', '2018-04-08 01:59:51', '2018-04-08 12:10:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `_id` int(11) NOT NULL,
  `first-name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `clearText` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`_id`, `first-name`, `last_name`, `email`, `password`, `hash`, `active`, `date_added`, `date_modified`, `clearText`) VALUES
(1, 'Ogbuji', 'Bright', 'kelvinyounq@gmail.com', '34901464', '', 1, '2019-01-08 11:56:53', '2019-03-22 13:28:12', ''),
(2067, 'Bright', 'Ogbuji', 'bright@gmail.com', '$2y$10$n3fpGg.DMlBrmYJ/LnWEFuNMk/A522woWo9rRJgW8Ek5yt1JKzi1u', 'e57c6b956a6521b28495f2886ca0977a', 1, '2019-03-22 13:36:48', '2019-03-22 13:36:48', ''),
(2068, 'Daniel', 'Ezenna', 'Daniel2019@gmail.com', '$2y$10$iIWcV/EV3nQFKepNVH95GeMSrxUisHuXV0BLsJZP6IIHLPT9f/Fkm', '8f14e45fceea167a5a36dedd4bea2543', 1, '2019-03-22 13:36:48', '2019-03-22 13:36:48', '');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `contestant_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vote_count` int(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allstud`
--
ALTER TABLE `allstud`
  ADD PRIMARY KEY (`_uid_`),
  ADD UNIQUE KEY `_reg_no` (`regno`),
  ADD UNIQUE KEY `_reg_no_2` (`regno`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `contestant`
--
ALTER TABLE `contestant`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allstud`
--
ALTER TABLE `allstud`
  MODIFY `_uid_` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contestant`
--
ALTER TABLE `contestant`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2069;

--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
