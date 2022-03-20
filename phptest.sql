-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2022 at 04:34 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phptest`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE `assign` (
  `aid` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `tid` int(11) DEFAULT NULL,
  `isdelete` varchar(50) DEFAULT NULL,
  `createby` varchar(50) DEFAULT NULL,
  `createdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assign`
--

INSERT INTO `assign` (`aid`, `date`, `cid`, `sid`, `tid`, `isdelete`, `createby`, `createdate`) VALUES
(1, '0000-00-00', 2, 1, 2, NULL, NULL, NULL),
(2, '0000-00-00', 2, 2, 2, NULL, NULL, NULL),
(3, '0000-00-00', 2, 2, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `assigncourse`
--

CREATE TABLE `assigncourse` (
  `aid` int(11) NOT NULL,
  `sid` int(11) DEFAULT NULL,
  `tid` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assigncourse`
--

INSERT INTO `assigncourse` (`aid`, `sid`, `tid`, `date`) VALUES
(1, 1, 1, '2022-03-04'),
(2, 3, 2, '0000-00-00'),
(4, 3, 1, '0000-00-00'),
(7, 2, 3, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `assignteachercourse`
--

CREATE TABLE `assignteachercourse` (
  `id` int(11) NOT NULL,
  `cid` int(11) DEFAULT NULL,
  `tid` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cid` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `bookname` varchar(100) DEFAULT NULL,
  `isbn` varchar(100) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT NULL,
  `createby` varchar(50) DEFAULT NULL,
  `createdate` date DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `date`, `bookname`, `isbn`, `isdelete`, `createby`, `createdate`, `id`) VALUES
(1, '2022-03-18', 'math', '12e', 0, '', '2022-03-20', NULL),
(2, '0000-00-00', 'english', '123', 0, 'moiz', '2022-03-20', NULL),
(3, '0000-00-00', 'urdu', '1213', 0, 'moiz', '2022-03-20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `rdate` date DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobileNo` int(11) DEFAULT NULL,
  `CNIC` int(11) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT NULL,
  `createby` varchar(50) DEFAULT NULL,
  `createdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `rdate`, `name`, `username`, `address`, `password`, `email`, `mobileNo`, `CNIC`, `role`, `isdelete`, `createby`, `createdate`) VALUES
(1, '0000-00-00', 'umer', 'maymar', 'moiz09', '123', 'moizmehmood212@gmail.com', 111, 121, 'Student', 0, '', '2022-03-19'),
(2, NULL, 'moiz', 'moiz09', NULL, '123', NULL, NULL, NULL, 'admin', 0, NULL, NULL),
(3, '0000-00-00', 'maaz', 'maaz09', 'maymar', '123', '', 0, 0, 'Teacher', 0, 'moiz', '2022-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobileNo` int(11) DEFAULT NULL,
  `cnic` int(11) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT NULL,
  `createdate` date DEFAULT NULL,
  `createby` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `date`, `name`, `address`, `username`, `password`, `email`, `mobileNo`, `cnic`, `isdelete`, `createdate`, `createby`) VALUES
(1, '0000-00-00', 'mmm', '', '', '', '', 0, 0, 0, '2022-03-20', 'moiz'),
(2, '0000-00-00', 'ebada', '', '', '', '', 0, 0, 0, '2022-03-20', 'moiz');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tid` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobileNo` int(11) DEFAULT NULL,
  `cnic` int(11) DEFAULT NULL,
  `isdelete` tinyint(1) DEFAULT NULL,
  `createby` varchar(50) DEFAULT NULL,
  `createdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tid`, `date`, `name`, `address`, `username`, `password`, `email`, `mobileNo`, `cnic`, `isdelete`, `createby`, `createdate`) VALUES
(1, '0000-00-00', '', '', '', '', '', 0, 0, 0, 'moiz', '2022-03-20'),
(2, '0000-00-00', 'ssa', '', '', '123', '', 0, 0, 0, 'moiz', '2022-03-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign`
--
ALTER TABLE `assign`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `sid` (`sid`),
  ADD KEY `tid` (`tid`);

--
-- Indexes for table `assigncourse`
--
ALTER TABLE `assigncourse`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `id` (`sid`),
  ADD KEY `cid` (`tid`);

--
-- Indexes for table `assignteachercourse`
--
ALTER TABLE `assignteachercourse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign`
--
ALTER TABLE `assign`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `assigncourse`
--
ALTER TABLE `assigncourse`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `assignteachercourse`
--
ALTER TABLE `assignteachercourse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assign`
--
ALTER TABLE `assign`
  ADD CONSTRAINT `assign_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `course` (`cid`),
  ADD CONSTRAINT `assign_ibfk_2` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`),
  ADD CONSTRAINT `assign_ibfk_3` FOREIGN KEY (`tid`) REFERENCES `teacher` (`tid`);

--
-- Constraints for table `assigncourse`
--
ALTER TABLE `assigncourse`
  ADD CONSTRAINT `assigncourse_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `registration` (`id`),
  ADD CONSTRAINT `assigncourse_ibfk_2` FOREIGN KEY (`tid`) REFERENCES `course` (`cid`);

--
-- Constraints for table `assignteachercourse`
--
ALTER TABLE `assignteachercourse`
  ADD CONSTRAINT `assignteachercourse_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `course` (`cid`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`id`) REFERENCES `registration` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
