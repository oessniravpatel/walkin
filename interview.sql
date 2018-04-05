-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2017 at 11:47 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interview`
--

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `ResultId` int(11) NOT NULL,
  `CandidateId` int(11) NOT NULL,
  `CorrectAns` int(11) NOT NULL,
  `WrongAns` int(11) NOT NULL,
  `Percentage` int(11) NOT NULL,
  `CreatedOn` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`ResultId`, `CandidateId`, `CorrectAns`, `WrongAns`, `Percentage`, `CreatedOn`) VALUES
(1, 4, 0, 5, 0, '2017-07-19 18:54:24'),
(2, 58, 0, 5, 0, '2017-07-19 18:58:55'),
(4, 60, 0, 5, 0, '2017-07-19 19:05:34'),
(5, 60, 0, 5, 0, '2017-07-19 19:08:47'),
(6, 61, 0, 5, 0, '2017-07-19 20:20:45'),
(7, 61, 5, 0, 100, '2017-07-19 20:27:07'),
(8, 61, 5, 0, 100, '2017-07-19 20:27:39'),
(9, 62, 0, 0, 0, '2017-07-19 20:41:38'),
(10, 62, 0, 5, 0, '2017-07-19 20:43:18'),
(11, 62, 3, 2, 60, '2017-07-19 20:50:42'),
(12, 62, 3, 2, 60, '2017-07-19 20:51:01'),
(13, 63, 4, 1, 80, '2017-07-19 21:13:00'),
(14, 66, 4, 1, 80, '2017-07-20 00:10:03'),
(15, 66, 4, 1, 80, '2017-07-20 00:29:27'),
(16, 67, 3, 2, 60, '2017-07-20 00:31:29'),
(17, 68, 4, 1, 80, '2017-07-20 00:54:00'),
(18, 69, 3, 2, 60, '2017-07-20 14:39:03');

-- --------------------------------------------------------

--
-- Table structure for table `tblinterview`
--

CREATE TABLE `tblinterview` (
  `interviewId` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL DEFAULT '',
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `contact` varchar(12) DEFAULT NULL,
  `experience` varchar(50) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `other` varchar(50) DEFAULT NULL,
  `CreatedDate` timestamp NULL DEFAULT NULL,
  `feedback1` text,
  `feedback2` text,
  `feedback3` text,
  `results` varchar(50) DEFAULT NULL,
  `isfeedback1` varchar(50) DEFAULT NULL,
  `isfeedback2` varchar(50) DEFAULT NULL,
  `isfeedback3` varchar(50) DEFAULT NULL,
  `scheduledays` varchar(50) DEFAULT NULL,
  `scheduletime` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblinterview`
--

INSERT INTO `tblinterview` (`interviewId`, `fname`, `lname`, `email`, `contact`, `experience`, `position`, `other`, `CreatedDate`, `feedback1`, `feedback2`, `feedback3`, `results`, `isfeedback1`, `isfeedback2`, `isfeedback3`, `scheduledays`, `scheduletime`) VALUES
(4, 'nitin', 'shirasat', 'nitin2@gmail.com', '9654874587', '8', 'php', '', '2017-07-18 10:32:31', 'zuber\'mansuri', 'aa', 'dsdss', 'clear', '', '', '', '', ''),
(2, 'zuber', 'mansuri', 'zuber@yahoo.com', '9173745062', '1.6', 'php', '', '2017-07-18 10:17:18', '', '', '', 'clear', '', '', '', '', ''),
(3, 'Ujval', 'bhatt', 'ujval2@gmail.com', '9654874587', '4', 'Desiner', '', '2017-07-18 10:18:06', '', '', '', 'reject', '', '', '', '', ''),
(46, 'Gopal', 'patel', 'gopal2@yahoo.com', '965785654', '2', 'Php Developer', '', '2017-07-18 18:24:38', '', '', '', '', '', '', '', 'Monday', '2:30PM to 3:00PM'),
(47, 'Albina', 'Bhatt', 'albna3@gmail.com', '9632547854', '1', 'IT Recruiter', '', '2017-07-18 18:24:38', '', '', '', '', '', '', '', '', ''),
(48, 'Ujval', 'Bhatt', 'ujval2@gmail.com', '9632547845', '3-5 Years', 'PHP Developer', '', '2017-07-18 18:33:17', '', '', '', '', '', '', '', '', ''),
(49, 'Swar', 'Pandy', 'swar2@yahoo.com', '9998457865', '1-2 Years', '.NET Developer', '', '2017-07-18 18:34:55', '', '', '', '', '', '', '', '', ''),
(50, 'Trushant', 'Mehta', 'tmehta@theopeneyes.com', '5546645544', '2-3 Years', 'IT Recruiter', '', '2017-07-18 19:36:14', '', '', '', '', '', '', '', '', ''),
(55, 'Nitin', 'Patel', 'nitin1@gmail.com', '9654785478', '1-2 Years', 'Other', 'marketing', '2017-07-19 09:37:08', '', '', '', '', '', '', '', '', ''),
(54, 'kajal', 'agrawal', 'kajal2@gmail.com', '9654785478', '2-3 Years', 'IT Recruiter', '', '2017-07-19 09:03:32', '', '', '', '', '', '', '', '', ''),
(56, 'ff', 'ddd', 'demo2@gmail.com', '9654785478', '2-3 Years', 'PHP Developer', '', '2017-07-19 11:45:13', '', '', '', '', '', '', '', '', ''),
(57, 'ff', 'ddd', 'demo2@gmail.com', '9654785478', '2-3 Years', '.NET Developer', '', '2017-07-19 11:45:35', '', '', '', '', '', '', '', '', ''),
(58, 'swar', 'Pandy', 'swar2@yahoo.com', '9545784565', '2-3 Years', 'PHP Developer', '', '2017-07-19 13:28:27', '', '', '', '', '', '', '', '', ''),
(59, 'mukut', 'Patel', 'mukut@gmail.com', '9654785654', '10+ Years', '.NET Developer', '', '2017-07-19 13:31:50', '', '', '', '', '', '', '', '', ''),
(60, 'Nitin', 'Bhatt', 'nitin1@gmail.com', '2225456654', '5-10 Years', '.NET Developer', '', '2017-07-19 13:35:21', '', '', '', '', '', '', '', '', ''),
(61, 'Ujval', 'Bhatt', 'ujval2@gmail.com', '9654785478', '2-3 Years', 'PHP Developer', '', '2017-07-19 14:47:57', '', '', '', '', '', '', '', '', ''),
(62, 'zuber', 'mansuri', 'zubermansuri1988@gmail.com', '9654785478', '2-3 Years', 'PHP Developer', '', '2017-07-19 15:09:21', '', '', '', '', '', '', '', '', ''),
(63, 'Raju', 'patel', 'rajr@gmail.com', '9654784578', '2-3 Years', 'PHP Developer', '', '2017-07-19 15:42:26', '', '', '', '', '', '', '', '', ''),
(64, 'ujaval', 'bhatt', 'ujval2@gmail.com', '9654784578', '1-2 Years', 'PHP Developer', '', '2017-07-19 18:36:23', '', '', '', '', '', '', '', '', ''),
(65, 'ujaval', 'bhatt', 'ujval2@gmail.com', '9654784578', '1-2 Years', '.NET Developer', '', '2017-07-19 18:39:16', '', '', '', '', '', '', '', '', ''),
(66, 'ujaval', 'bhatt', 'ujval2@gmail.com', '9654784578', '1-2 Years', 'PHP Developer', '', '2017-07-19 18:39:44', '', '', '', '', '', '', '', '', ''),
(67, 'Albina', 'Sweeti', 'albina1@gmail.com', '9654784578', '1-2 Years', '.NET Developer', '', '2017-07-19 19:01:17', '', '', '', '', '', '', '', '', ''),
(68, 'zuber', 'mansuri', 'zubermansuri1988@gmail.com', '9654785478', '1-2 Years', 'PHP Developer', '', '2017-07-19 19:23:40', 'Fine', 'Good', 'Very Good', '', 'Approve', 'Approve', 'Approve', '', ''),
(69, 'veena', 'yadav', 'veena@gmail.com', '6598787887', '1-2 Years', '.NET Developer', '', '2017-07-20 09:08:54', 'dddd', 'ssss', 'cccc', '', 'Disapprove', 'Approve', 'Not sure', '', ''),
(70, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'monday', '9:00'),
(71, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'monday', '9:00'),
(72, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'monday', '9:00'),
(73, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'monday', '9:00'),
(74, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'monday', '9:00'),
(75, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'monday', '9:00'),
(76, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'monday', '9:00'),
(77, 'ujaval', 'bhatt', 'ujval2@gmail.com', '9654785478', '2-3 Years', '.NET Developer', '', '2017-07-20 11:42:41', '', '', '', '', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`ResultId`);

--
-- Indexes for table `tblinterview`
--
ALTER TABLE `tblinterview`
  ADD PRIMARY KEY (`interviewId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `ResultId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tblinterview`
--
ALTER TABLE `tblinterview`
  MODIFY `interviewId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
