-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 13, 2019 at 10:04 PM
-- Server version: 5.7.11
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rutgers`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID_student` int(1) NOT NULL,
  `fname` varchar(12) NOT NULL,
  `lname` varchar(12) NOT NULL,
  `phone` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` varchar(12) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID_student`, `fname`, `lname`, `phone`, `email`, `status`, `start_date`, `end_date`) VALUES
(3, 'Alexis', 'Lane', '8759014689', 'wild_goose@hotmail.com', 'complete', '2016-01-01', '2019-05-24'),
(4, 'Jessica', 'Roberts', '2025460130', 'jroberts@gmail.com', 'active', '2018-12-06', '2019-12-20'),
(5, 'Mark', 'Anthony', '4305808940', 'markanthony@yahoo.com', 'active', '2017-07-11', '2019-05-24'),
(6, 'Logan', 'Walker', '7493590239', 'eyes4u@yahoo.com', 'active', '2015-05-15', '2020-05-24'),
(7, 'Jessica', 'EW', '3949392939', 'fireonice@blaze.com', 'active', '2015-03-05', '2019-05-20'),
(8, 'mediiii', 'madfghjhj', '9483948393', 'fireonice@blaze.com', 'active', '2015-03-05', '2019-01-01'),
(9, 'Alexis', 'Lane', '8759014689', 'wild_goose@hotmail.com', 'complete', '2016-01-01', '2019-05-24'),
(10, 'D', 'Wolf', '2015454644', 'icecream@gmail.com', 'inactive', '2015-03-05', '2019-01-01'),
(11, 'D', 'Wolf', '2015454644', 'icecream@gmail.com', 'inactive', '2015-03-05', '2019-01-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID_student`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID_student` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
