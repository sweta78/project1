-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2017 at 05:03 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proj`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `question_id` int(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `answer_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`question_id`, `username`, `answer`, `answer_id`) VALUES
(10, 'dgfg34', 'c is an important programming language.It forms the basic for higher object oriented programming languages.', 1),
(7, 'umrao23', 'tutorials will help', 2);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `question` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `username`, `question`) VALUES
(7, 'sweta235', 'how to study c?'),
(10, 'sweta235', 'why to study?'),
(12, 'sweta235', 'when to use include and when to use require?'),
(13, 'umrao23', 'IS java a good language?');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `NAME` varchar(25) NOT NULL,
  `USERNAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(15) NOT NULL,
  `C_ADDRESS1` varchar(25) NOT NULL,
  `C_ADDRESS2` varchar(25) NOT NULL,
  `C_CITY` text NOT NULL,
  `C_STATE` text NOT NULL,
  `C_PINCODE` int(10) NOT NULL,
  `C_MOBILENO` bigint(10) NOT NULL,
  `EMAIL` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`NAME`, `USERNAME`, `PASSWORD`, `C_ADDRESS1`, `C_ADDRESS2`, `C_CITY`, `C_STATE`, `C_PINCODE`, `C_MOBILENO`, `EMAIL`) VALUES
('fggcg', 'dgfg34', 'abcdefgh', 'dsfef', '', 'erwef', 'fsdff', 123456, 1234567890, 'dgd@cb.com'),
('Sweta', 'sweta235', 'helpme', 'hinoo', '', 'ranchi', 'jharkhand', 834002, 9450573327, 'swetap93@gmail.com'),
('Shweta Umrao', 'umrao23', 'greatdone', 'house no 78', 'arvind vihar', 'Kanpur', 'UP', 208021, 8956321458, 'umraoshweta@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD KEY `answer_id` (`answer_id`) USING BTREE;

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`USERNAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `answer_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
