-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 24, 2018 at 12:33 AM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(1, 'REGAL (FASHIONABLE) (FEMALE)', '', '2018-04-08 00:23:01', '2018-04-08 00:24:58'),
(2, 'REGAL (FASHIONABLE) (MALE)', '', '2018-04-08 00:23:36', '2018-04-08 00:25:00'),
(3, 'OUTSTANDING ENTREPRENEUR (FEMALE)', '', '2018-04-08 00:23:36', '2018-04-08 00:25:03'),
(4, 'OUTSTANDING ENTREPRENEUR (MALE)', '', '2018-04-08 00:25:30', '2018-04-08 02:36:51'),
(5, 'OUTSTANDING CONTRIBUTION TO ARTS AND CULTURE (FEMALE)', '', '2018-04-08 00:25:30', '2018-04-08 02:36:55'),
(6, 'OUTSTANDING CONTRIBUTION TO ARTS AND CULTURE (MALE)', '', '2018-04-08 00:25:47', '2018-04-08 02:36:57'),
(7, 'RISING STAR (FEMALE)', '', '2018-04-08 00:26:06', '2018-04-08 02:37:00'),
(8, 'RISING STAR (MALE)', '', '2018-04-08 00:26:06', '2018-04-08 02:37:03'),
(9, 'SPIRIT OF SERVICE(STAR) (FEMALE)', '', '2018-04-08 00:26:28', '2018-04-08 02:37:10'),
(10, 'SPIRIT OF SERVICE(STAR) (MALE)', '', '2018-04-08 00:26:56', '2018-04-08 02:37:14'),
(11, 'EXCELLENCE IN EXTERNAL ENGAGEMENT (FEMALE)', '', '2018-04-08 00:26:56', '2018-04-08 02:37:17'),
(12, 'EXCELLENCE IN EXTERNAL ENGAGEMENT (MALE)', '', '2018-04-08 00:27:31', '2018-04-08 02:37:20'),
(13, 'OUTSTANDING CONTRIBUTION TO SPORTS (FEMALE)', '', '2018-04-08 00:27:31', '2018-04-08 02:37:34'),
(14, 'OUTSTANDING CONTRIBUTION TO SPORTS (MALE)', '', '2018-04-08 00:27:47', '2018-04-08 02:37:37'),
(15, 'FACE OF CSE (FEMALE)', '', '2018-04-08 00:27:47', '2018-04-08 02:37:39'),
(16, 'FACE OF CSE (MALE)', '', '2018-04-08 00:29:08', '2018-04-08 02:37:42'),
(17, 'PEOPLE\'S CHOICE AWARD (FEMALE)', '', '2018-04-08 00:29:08', '2018-04-08 02:37:45'),
(18, 'PEOPLE\'S CHOICE AWARD (MALE)', '', '2018-04-08 00:29:20', '2018-04-08 02:37:49');

-- --------------------------------------------------------

--
-- Table structure for table `contestant`
--

CREATE TABLE `contestant` (
  `_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `contestant_name` varchar(255) NOT NULL,
  `contestant_dept` varchar(250) NOT NULL,
  `contestant_level` varchar(10) NOT NULL,
  `image` varchar(30) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contestant`
--

INSERT INTO `contestant` (`_id`, `category_id`, `contestant_name`, `contestant_dept`, `contestant_level`, `image`, `date_added`, `date_modified`) VALUES
(1, 1, 'Ogunforowa Oluwaseyi', 'Mechanical Engineering', '500', '1.png', '2018-04-08 01:54:16', '2018-04-08 12:08:24'),
(2, 1, 'Olanipekun Folabunmi', 'Computer Science', '100', '2.JPG', '2018-04-08 01:54:16', '2018-04-08 12:09:31'),
(3, 1, 'Okechukwu Esther', 'Biochemistry', '200', '3.png', '2018-04-08 01:58:25', '2018-04-08 12:09:44'),
(4, 1, 'Solomon Ashedzi', 'Computer Science', '200', '4.jpg', '2018-04-08 01:58:25', '2018-04-08 12:09:53'),
(5, 1, 'Olatunji Anuoluwapo', 'Chemical Engineering', '500', '5.png', '2018-04-08 01:59:51', '2018-04-08 12:10:02'),
(6, 2, 'Obiajulu Lotachi', 'EIE', '500', '6.png', '2018-04-08 02:03:38', '2018-04-08 12:10:11'),
(7, 2, 'Ojutawo Prince', 'Chemical Engineering', '500', '7.jpeg', '2018-04-08 02:03:38', '2018-04-08 12:10:18'),
(8, 2, 'Unigbe Ohireime', 'Mechanical Engineeering', '500', '8.jpeg', '2018-04-08 02:05:51', '2018-04-08 12:10:26'),
(9, 2, 'Odafe Jemidafe', 'Mechanical Engineering', '200', '9.jpeg', '2018-04-08 02:05:51', '2018-04-08 12:10:33'),
(10, 2, 'Paradise Chukwunedum', 'Civil Engineering', '100', '10.jpeg', '2018-04-08 02:07:02', '2018-04-08 12:10:41'),
(11, 3, 'Akubo Divine', 'Chemical Engineering', '200', '11.jpeg', '2018-04-08 02:08:34', '2018-04-08 12:10:51'),
(12, 3, 'Bolarin Olwauyemisi', 'Civil Engineering', '500', '12.jpeg', '2018-04-08 02:08:34', '2018-04-08 12:11:04'),
(13, 3, 'Anita Fejiro', 'ABE', '500', '13.jpg', '2018-04-08 02:09:54', '2018-04-08 12:11:15'),
(14, 3, 'Jegede Temitayo', 'EIE', '500', '14.JPG', '2018-04-08 02:09:54', '2018-04-08 12:11:26'),
(15, 4, 'Akuma Onyedikachi(Kodikapice)', 'EIE', '400', '15.jpg', '2018-04-08 02:12:12', '2018-04-08 12:11:34'),
(16, 4, 'Lucas Mark ', 'Chemical Engineering ', '200', '16.jpeg', '2018-04-08 02:12:12', '2018-04-08 12:13:16'),
(17, 4, 'Adeyemi Taiwo', 'Civil Engineering ', '500', '17.jpg', '2018-04-08 02:13:57', '2018-04-08 12:11:45'),
(18, 4, 'Oladipo Olalekan', 'Mech. Engineering ', '500', '18.jpeg', '2018-04-08 02:13:57', '2018-04-08 12:30:05'),
(19, 4, 'Ayoola David', 'Computer Science', '400', '19.png', '2018-04-08 02:14:42', '2018-04-08 12:30:12'),
(20, 5, 'Itimi Fejiro', 'Chemical Engineering', '500', '20.png', '2018-04-08 02:15:44', '2018-04-08 12:30:24'),
(21, 5, 'Maduka Kelechi', 'EIE', '300', '21.JPG', '2018-04-08 02:15:44', '2018-04-08 12:30:29'),
(22, 5, 'Marvelous Mercy Maxwell', 'Biochemistry ', '200', '22.jpg', '2018-04-08 02:17:28', '2018-04-08 12:30:35'),
(23, 5, 'Ike-Ojukwu Chika', 'Chem. Engineering', '300', '23.JPG', '2018-04-08 02:17:28', '2018-04-08 12:30:40'),
(24, 6, 'Mordi Chukwuebuka ', 'Civil Engineering ', '300', '24.jpg', '2018-04-08 02:19:36', '2018-04-08 12:30:45'),
(25, 6, 'Adebayo Abayomi', 'Industrial Chem.', '400', '25.png', '2018-04-08 02:19:36', '2018-04-08 12:30:52'),
(26, 6, 'Ogor-Igbosuah Godwin', 'Industrial Chem.', '400', '26.jpg', '2018-04-08 02:25:35', '2018-04-08 12:30:58'),
(27, 6, 'Ugorgi Godwin', 'EIE', '500', '27.jpeg', '2018-04-08 02:25:35', '2018-04-08 12:31:04'),
(28, 6, 'Ezekiel Adejor', 'Computer Science', '400', '28.jpg', '2018-04-08 02:25:55', '2018-04-08 12:31:10'),
(29, 7, 'Iroaganachi Amarachi', 'Microbiology', '100', '29.JPG', '2018-04-08 02:27:18', '2018-04-08 12:31:15'),
(30, 7, 'Durojaiye Oluwakorede', 'Civil Engineering', '100', '30.JPG', '2018-04-08 02:27:18', '2018-04-08 12:31:21'),
(31, 7, 'Ottih Francess', 'EIE', '100', '31.jpg', '2018-04-08 02:28:54', '2018-04-08 12:31:26'),
(32, 7, 'Benson Ewonubare', 'Mech. Engineering ', '100', '32.jpeg', '2018-04-08 02:28:54', '2018-04-08 12:31:31'),
(33, 7, 'Olori Maero', 'Biochemistry', '100', '33.png', '2018-04-08 02:29:17', '2018-04-08 12:31:42'),
(34, 8, 'Onawale Paul', 'Computer Science', '100', '34.jpg', '2018-04-08 02:29:51', '2018-04-08 12:32:43'),
(35, 8, 'Samuel Jinadu', 'EIE', '100', '35.jpg', '2018-04-08 02:31:29', '2018-04-08 12:32:50'),
(36, 8, 'Tawose Samson', 'Civil Engineering', '100', '36.jpg', '2018-04-08 02:31:29', '2018-04-08 12:32:57'),
(37, 8, 'Victor Oluwole', 'Biochemistry', '100', '37.jpg', '2018-04-08 02:32:24', '2018-04-08 12:44:00'),
(38, 8, 'David', 'Mech. Engineering', '100', '', '2018-04-08 02:32:51', '0000-00-00 00:00:00'),
(39, 9, 'Alo Oluwabusola', 'Computer Science', '400', '39.jpg', '2018-04-08 02:34:03', '2018-04-08 12:33:18'),
(40, 9, 'Ogunriola Opemipo', 'EIE', '500', '40.png', '2018-04-08 02:34:03', '2018-04-08 12:33:33'),
(41, 9, 'Majekodunmi Grace', 'Computer Science', '400', '41.jpg', '2018-04-08 02:34:58', '2018-04-08 12:33:38'),
(42, 9, 'Odeniyi Temidayo', 'Chem. Engineering', '500', '42.png', '2018-04-08 02:34:58', '2018-04-08 12:33:44'),
(43, 10, 'Ajibade Pipeoluwa', 'Mech. Engineering', '500', '43.png', '2018-04-08 02:39:23', '2018-04-08 12:33:49'),
(44, 10, 'Usifoh Benedict', 'Mech. Engineering', '500', '44.JPG', '2018-04-08 02:39:23', '2018-04-08 13:14:15'),
(45, 10, 'Auta Adamu', 'Civil Engineering', '500', '45.jpg', '2018-04-08 02:40:13', '2018-04-08 12:33:56'),
(46, 10, 'Adebayo Adeyinka', 'Biochemistry', '400', '46.jpg', '2018-04-08 02:40:13', '2018-04-08 12:34:11'),
(47, 11, 'Obomanu Esther', 'Computer Science', '400', '47.jpg', '2018-04-08 02:41:21', '2018-04-08 12:34:16'),
(48, 11, 'Abang Hope ', 'EIE', '500', '48.jpg', '2018-04-08 02:41:21', '2018-04-08 12:34:24'),
(49, 11, 'IZEG-UDEVBUE DIVINE', 'Mech. Engineering', '300', '49.JPG', '2018-04-08 02:41:54', '2018-04-08 12:34:34'),
(50, 11, 'Ogundiran Angel ', 'EIE', '200', '50.jpeg', '2018-04-08 02:44:18', '2018-04-08 12:34:42'),
(51, 11, 'Oty Mark ', 'Civil Engineering ', '100', '51.PNG', '2018-04-08 02:44:18', '2018-04-08 12:34:48'),
(52, 12, 'Olalowo Nasir', 'Chem.Engineering ', '500', '52.png', '2018-04-08 02:45:23', '2018-04-08 12:34:54'),
(53, 12, 'Uwaga Daniel ', 'ABE', '100', '53.jpg', '2018-04-08 02:45:23', '2018-04-08 12:34:59'),
(54, 12, 'Ugorji Godwin ', 'EIE', '500', '54.jpeg', '2018-04-08 02:46:17', '2018-04-08 12:35:05'),
(55, 12, 'Basorun Adebayo', 'Civil Engineering', '500', '55.JPG', '2018-04-08 02:46:17', '2018-04-08 12:35:09'),
(56, 12, 'Oyedepo Jesuloluwa', 'Civil Engineering', '500', '56.JPG', '2018-04-08 02:46:55', '2018-04-08 12:35:14'),
(57, 13, 'Owoeye Deborah', 'Chem. Engineering', '500', '57.jpg', '2018-04-08 02:48:15', '2018-04-08 12:35:19'),
(58, 13, 'Aalo Valerie', 'Chem. Engineering', '200', '58.jpeg', '2018-04-08 02:48:15', '2018-04-08 12:35:27'),
(59, 13, 'Danimi Shalom', 'Civil Engineering', '200', '59.JPG', '2018-04-08 02:49:24', '2018-04-08 12:35:32'),
(60, 13, 'Onuoha Faith', 'EIE', '500', '60.jpg', '2018-04-08 02:49:24', '2018-04-08 12:35:37'),
(61, 13, 'Aderemi Peace ', 'Civil Engineering ', '500', '61.PNG', '2018-04-08 02:49:49', '2018-04-08 12:35:42'),
(62, 14, 'Fakunle Mobolaji', 'Chem. Engineering', '500', '62.jpg', '2018-04-08 02:51:14', '2018-04-08 12:35:48'),
(63, 14, 'Ajayi Samuel', 'Civil Engineering', '400', '63.JPG', '2018-04-08 02:51:14', '2018-04-08 12:35:58'),
(64, 14, 'Damilola', 'Mech. Engineering ', '300', '64.jpg', '2018-04-08 02:51:56', '2018-04-08 12:36:03'),
(65, 14, 'Elebe Maiga', 'EIE', '500', '65.jpeg', '2018-04-08 02:51:56', '2018-04-08 12:36:08'),
(66, 14, 'Timilehin Adeyemi', 'Computer Science', '200', '66.jpg', '2018-04-08 02:52:15', '2018-04-08 12:36:14'),
(67, 15, 'Johnsom Elizabeth', 'Civil Engineering', '200', '67.JPG', '2018-04-08 02:53:16', '2018-04-08 12:36:19'),
(68, 15, 'Ijeh Peace', 'Civil Engineering', '200', '68.png', '2018-04-08 02:53:16', '2018-04-08 12:36:26'),
(69, 15, 'Ottih Princess', 'EIE', '100', '69.png', '2018-04-08 02:54:33', '2018-04-08 12:36:33'),
(70, 15, 'Nwakudu Chinonso', 'Computer Science ', '100', '70.jpg', '2018-04-08 02:54:33', '2018-04-08 12:36:37'),
(71, 15, 'Okonkwo Chidinma', 'Computer Science', '100', '71.png', '2018-04-08 02:55:18', '2018-04-08 12:37:36'),
(72, 16, 'Owoniyi Wale', 'EIE', '200', '72.PNG', '2018-04-08 02:56:49', '2018-04-08 12:37:43'),
(73, 16, 'Henry Umeh', 'Biochemistry', '200', '73.jpg', '2018-04-08 02:56:49', '2018-04-08 12:51:54'),
(74, 16, 'Nwachukwu Xucong', 'EIE', '100', '74.jpeg', '2018-04-08 02:57:55', '2018-04-08 12:38:04'),
(75, 16, 'Frederick Idoko', 'Civil Engineering ', '100', '75.jpeg', '2018-04-08 02:57:55', '2018-04-08 12:38:10'),
(76, 16, 'Eze Samuel', 'Civil Engineering', '200', '76.jpg', '2018-04-08 02:58:29', '2018-04-08 12:38:14'),
(77, 17, 'Ukah Jessica', 'Biochemistry', '400', '77.jpg', '2018-04-08 02:59:29', '2018-04-08 12:38:20'),
(78, 17, 'Ayodeji Adegoroye', 'Chem. Engineering ', '500', '78.jpeg', '2018-04-08 02:59:29', '2018-04-08 12:38:25'),
(79, 17, 'Kolade Praise', 'EIE', '500', '79.png', '2018-04-08 03:00:19', '2018-04-08 12:38:31'),
(80, 17, 'Achibiri Chineherem', 'Civil Engineering ', '500', '80.JPG', '2018-04-08 03:00:19', '2018-04-08 12:38:35'),
(81, 17, 'Idefoh Claire', 'Chem. Engineering', '500', '81.jpeg', '2018-04-08 03:01:21', '2018-04-08 12:38:41'),
(82, 18, 'Udoh Victor', 'Chem. Engineering', '500', '82.JPG', '2018-04-08 03:01:21', '2018-04-08 12:38:46'),
(83, 18, 'Ebugosi Emmanuel (Blaise)', 'EIE', '500', '83.jpg', '2018-04-08 03:02:29', '2018-04-08 12:38:51'),
(84, 18, 'Onireti Demilade', 'Civil Engineering', '500', '84.JPG', '2018-04-08 03:02:29', '2018-04-08 12:38:56'),
(85, 18, 'Fadare Emmanuel', 'Mech. Engineering', '500', '85.JPG', '2018-04-08 03:03:50', '2018-04-08 12:39:01'),
(86, 18, 'Ohue Armour', 'Biochemistry', '400', '86.jpg', '2018-04-08 03:03:50', '2018-04-08 12:39:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `regno` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `clearText` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--


-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `contestant_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vote`
--


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
  MODIFY `_uid_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2523;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `contestant`
--
ALTER TABLE `contestant`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2066;
--
-- AUTO_INCREMENT for table `vote`
--
ALTER TABLE `vote`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25071;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
