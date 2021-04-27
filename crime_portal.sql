-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 27, 2021 at 07:32 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crime_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `anonymous`
--

CREATE TABLE `anonymous` (
  `a_id` bigint(255) UNSIGNED NOT NULL,
  `Location` varchar(128) NOT NULL,
  `Crime Type` varchar(11) NOT NULL,
  `Date of Crime` varchar(11) NOT NULL,
  `Witnessed The Crime` text NOT NULL,
  `Description` text NOT NULL,
  `Contact` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `anonymous`
--

INSERT INTO `anonymous` (`a_id`, `Location`, `Crime Type`, `Date of Crime`, `Witnessed The Crime`, `Description`, `Contact`) VALUES
(1, 'Delhi', 'Kidnapping', '2021-03-28', 'Yes', 'A man probably 30 years old kidnapped a little girl probably 7 years old and ran away in car with his partner.This took place Geeta colony ', ''),
(2, 'Ghaziabad', 'Pick Pocket', '2021-04-12', 'Yes', 'A guy in restaurant food pick pocket my wallet which contained my College id ,2000 Rs .That person color was dark and was aroun 5 feet 10 inch tall.', '9632587410'),
(3, 'Delhi', 'Theft', '2021-04-22', 'Yes', 'Test', '');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `c_id` int(11) NOT NULL,
  `a_no` bigint(12) NOT NULL,
  `location` varchar(50) NOT NULL,
  `type_crime` varchar(50) NOT NULL,
  `d_o_c` date NOT NULL,
  `description` varchar(7000) NOT NULL,
  `inc_status` varchar(50) DEFAULT 'Unassigned',
  `pol_status` varchar(50) DEFAULT 'null',
  `p_id` varchar(50) DEFAULT 'Null'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`c_id`, `a_no`, `location`, `type_crime`, `d_o_c`, `description`, `inc_status`, `pol_status`, `p_id`) VALUES
(1, 123456789011, 'Ghaziabad', 'Robbery', '2021-03-22', 'My home Got robbed when I was away so robbery took place between 10AM to 4PM ,robbers stole laptop,jewells and 20000Rs cash', 'Assigned', 'null', 'G1'),
(2, 123456789011, 'Delhi', 'Kidnapping', '2021-04-01', 'A man probably 30 years old kidnapped a little girl probably 7 years old and ran away in car with his partner.This took place Geeta colony ', 'Assigned', 'null', 'D2'),
(3, 123456789002, 'Noida', 'Pick Pocket', '2021-04-23', 'My pocket had a small purse which had 5000Rs My aadhar card got emptied in metro . It happened between station noida sector 52 and noida sector 59', 'Unassigned', 'null', 'Null'),
(4, 123214521452, 'Gurgaon', 'Missing', '2021-04-22', 'My younger brother aged 16 ,height 5 feet 7 inch ,color pale yellow is missing.There is no sign of him in last 24 hours .He told us he is going to market', 'Unassigned', 'null', 'Null');

-- --------------------------------------------------------

--
-- Table structure for table `head`
--

CREATE TABLE `head` (
  `h_id` varchar(50) NOT NULL,
  `h_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `head`
--

INSERT INTO `head` (`h_id`, `h_pass`) VALUES
('head@kp', 'head'),
('head@gmail.com', 'test123');

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE `police` (
  `p_name` varchar(50) NOT NULL,
  `p_id` varchar(50) NOT NULL,
  `spec` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `p_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`p_name`, `p_id`, `spec`, `location`, `p_pass`) VALUES
('Rex', 'D1', 'All', 'Delhi', 'helloworld'),
('bear', 'D2', 'Kidnapping', 'Delhi', 'helloworld'),
('duke', 'D3', 'Murder', 'Delhi', 'helloworld'),
('Kenny', 'G1', 'All', 'Ghaziabad', 'Kenny123'),
('Ramesh', 'G2', 'Murder', 'Ghaziabad', 'Ramesh123'),
('Suresh', 'G3', 'Robbery', 'Ghaziabad', 'Suresh123'),
('Nexa', 'Gu1', 'Murder', 'Gurgaon', 'Nexa123'),
('Jax', 'Gu2', 'All', 'Gurgaon', 'Jax123'),
('Hex', 'Gu3', 'All', 'Gurgaon', 'Hex123'),
('Axel', 'N1', 'Rape', 'Noida ', 'axel123'),
('Steel', 'N2', 'All', 'Noida ', 'Steel123'),
('James', 'N3', 'Kidnapping', 'Noida ', 'james123');

-- --------------------------------------------------------

--
-- Table structure for table `police_station`
--

CREATE TABLE `police_station` (
  `i_id` varchar(50) NOT NULL,
  `i_name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `i_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police_station`
--

INSERT INTO `police_station` (`i_id`, `i_name`, `location`, `i_pass`) VALUES
('101', 'Eagle', 'Delhi', 'Eagle123'),
('102', 'Sam', 'Ghaziabad', 'Sam123'),
('103', 'Duke', 'Noida ', 'Duke123'),
('104', 'Travis', 'Gurgaon', 'Travis123');

-- --------------------------------------------------------

--
-- Table structure for table `update_case`
--

CREATE TABLE `update_case` (
  `c_id` int(11) NOT NULL,
  `d_o_u` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `case_update` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `update_case`
--

INSERT INTO `update_case` (`c_id`, `d_o_u`, `case_update`) VALUES
(1, '2021-03-25 10:32:06', 'Report Verified'),
(1, '2021-04-10 12:32:12', 'Criminal Caught'),
(1, '2021-04-11 06:32:15', 'Criminal Interrogated'),
(1, '2021-04-11 08:32:21', 'Criminal Accepted the Crime'),
(1, '2021-04-12 10:32:26', 'The case has been moved to Court.'),
(1, '2021-04-19 07:32:51', 'Criminal Charged');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_name` varchar(50) NOT NULL,
  `u_id` varchar(50) NOT NULL,
  `u_pass` varchar(50) NOT NULL,
  `u_addr` varchar(100) NOT NULL,
  `a_no` bigint(12) NOT NULL,
  `gen` varchar(15) NOT NULL,
  `mob` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_name`, `u_id`, `u_pass`, `u_addr`, `a_no`, `gen`, `mob`) VALUES
('Satyansh Kumar', 'satyansh123@gmail.com', 'satyansh', 'Gurgaon', 123214521452, 'Male', 9854123654),
('Jay Susan', 'jaysusa@yahoo.com', 'koxoxx', 'XYZ-Ghaziabad', 123456789002, 'Male', 9876543210),
('virajdangwal', 'dangwalviraj2001@gmail.com', 'helloworld', 'XYZ-Ghaziabad', 123456789011, 'Male', 9971628090);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anonymous`
--
ALTER TABLE `anonymous`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `police`
--
ALTER TABLE `police`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `police_station`
--
ALTER TABLE `police_station`
  ADD PRIMARY KEY (`i_id`),
  ADD UNIQUE KEY `location` (`location`);

--
-- Indexes for table `update_case`
--
ALTER TABLE `update_case`
  ADD UNIQUE KEY `d_o_u` (`d_o_u`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`a_no`),
  ADD UNIQUE KEY `u_id` (`u_id`),
  ADD UNIQUE KEY `mob` (`mob`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anonymous`
--
ALTER TABLE `anonymous`
  MODIFY `a_id` bigint(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
