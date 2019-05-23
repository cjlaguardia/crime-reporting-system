-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2019 at 04:15 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reportsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `email`) VALUES
(0, 'admin', '$2y$10$W0hxN5O9FATeqN0XClrTEuXcv0fwjElfMrQNJYw28oIQFCeU3TsI.', 'kr_viejo@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `name_victim` varchar(255) NOT NULL,
  `abuse_victim` varchar(255) NOT NULL,
  `age_victim` int(3) NOT NULL,
  `gender_victim` varchar(255) NOT NULL,
  `date_victim` date NOT NULL,
  `address_victim` varchar(255) NOT NULL,
  `name_suspect` varchar(255) NOT NULL,
  `gender_suspect` varchar(255) NOT NULL,
  `address_suspect` varchar(255) NOT NULL,
  `report_date` date NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `admin_id` int(20) NOT NULL,
  `reporter_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_id`, `status`, `name_victim`, `abuse_victim`, `age_victim`, `gender_victim`, `date_victim`, `address_victim`, `name_suspect`, `gender_suspect`, `address_suspect`, `report_date`, `file_name`, `admin_id`, `reporter_id`) VALUES
(4, 'accepted', 'Monica Blancard', 'sexual', 25, 'Female', '2019-12-31', 'St. Michaels College', 'holypookl', 'Female', 'balay', '2019-05-02', 'r_1973645_LFf2y.jpg', 0, 0),
(5, 'accepted', 'Aqua Sama', 'mental', 14, 'Female', '0032-02-23', 'St. Michaels College', 'Will Frank', 'Female', 'I dont know', '2019-05-02', 'aqua.jpg', 0, 0),
(6, 'accepted', 'Keith Viejoss', 'sexual', 25, 'Female', '2019-03-12', 'iligan', 'Keith Viejo2211', 'gayshit', 'Tipanoy', '2019-05-10', '', 0, 0),
(7, 'accepted', 'The 25th Baam', 'sexual', 14, 'Female', '2019-05-10', 'iligan', 'Lucy', 'Female', 'Tipanoy', '2019-05-10', 'student.png', 0, 0),
(8, 'accepted', 'Hello wOrld', 'sexual', 24, 'Female', '2019-05-10', 'G7 internet cafe', 'Viole', 'Female', 'Tipanoy', '2019-05-10', 'lib.png', 0, 0),
(10, 'pending', 'Keith Viejo', 'sexual', 25, 'Female', '2019-05-14', 'St. Michaels College', 'Keith Viejo', 'gayshit', 'Tipanoy', '2019-05-14', 'r_1973645_LFf2y.jpg', 0, 0),
(11, 'accepted', 'ken terence', 'neglect', 25, 'Female', '2019-05-14', 'iligan', 'Keith Viejo', 'Female', 'Tipanoy', '2019-05-14', 'student.png', 0, 1),
(12, 'accepted', 'micah', 'sexual', 25, 'Female', '2019-05-14', 'G7 internet cafe', 'jajajaowk', 'gayshit', 'Tipanoy', '2019-05-14', 'aqua.jpg', 0, 1),
(13, 'accepted', 'Keith Viejo', 'physical', 25, 'Male', '2019-12-31', 'St. Michaels College', 'Keith Viejo', 'Female', 'Tipanoy', '2019-05-14', 'avatar.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reporter`
--

CREATE TABLE `reporter` (
  `reporter_id` int(50) NOT NULL,
  `name_reporter` varchar(255) NOT NULL,
  `contact_reporter` varchar(255) NOT NULL,
  `email_reporter` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `account_status` varchar(255) NOT NULL,
  `account_file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reporter`
--

INSERT INTO `reporter` (`reporter_id`, `name_reporter`, `contact_reporter`, `email_reporter`, `username`, `password`, `account_status`, `account_file_name`) VALUES
(0, 'Keith Viejo', '09361225733', 'kr_viejo@yahoo.com', 'kaizel1', '$2y$10$NwxP3LsV5uwtUV1OCCwHLuJofcBEu1V2luQSFBQER2cCQCANVejTy', 'verified', 'avatar.jpg'),
(1, 'Peter Canoy', '09361225733', 'kr_viejo@yahoo.com', 'kaizel5', '$2y$10$nOevoGMEWhjrFS06euvCt.Ta1M6/0uc5UFEBaQsbjXvDIZm.FJ4YO', 'verified', 'student.png'),
(6, 'rimuru', '09361225733', 'kr_viejo@yahoo.com', 'kaizel10', '$2y$10$oAh54OpSS64VBKAhZIQgveDKNETKb5xx3ExPrDo0C1ifGRjoAAhFK', 'verified', 'r_1973645_LFf2y.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `reporter_id` (`reporter_id`);

--
-- Indexes for table `reporter`
--
ALTER TABLE `reporter`
  ADD PRIMARY KEY (`reporter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reporter`
--
ALTER TABLE `reporter`
  MODIFY `reporter_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`reporter_id`) REFERENCES `reporter` (`reporter_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
