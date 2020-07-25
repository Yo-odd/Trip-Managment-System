-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2020 at 10:52 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dtms`
--

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `expenseid` int(10) NOT NULL,
  `tripid` int(10) DEFAULT NULL,
  `userid` int(10) DEFAULT NULL,
  `accommodationPrice` int(10) DEFAULT NULL,
  `tourPrice` int(10) DEFAULT NULL,
  `food` int(10) DEFAULT NULL,
  `movie` int(10) DEFAULT NULL,
  `shopping` int(10) DEFAULT NULL,
  `other` int(10) DEFAULT NULL,
  `grandTotal` int(50) NOT NULL,
  `eTS` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Table will keep all the Expense data';

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pkgid` int(11) NOT NULL,
  `durationStart` date DEFAULT NULL,
  `durationEnd` date DEFAULT NULL,
  `source` varchar(50) DEFAULT NULL,
  `destination` varchar(50) DEFAULT NULL,
  `transport` varchar(50) DEFAULT NULL,
  `pkgPrice` int(11) DEFAULT NULL,
  `mealPrice` int(11) DEFAULT NULL,
  `Accommodation` varchar(50) DEFAULT NULL,
  `pkgTS` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Table will keep all the package data';

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pkgid`, `durationStart`, `durationEnd`, `source`, `destination`, `transport`, `pkgPrice`, `mealPrice`, `Accommodation`, `pkgTS`, `img`) VALUES
(1, '2020-02-24', '2020-02-28', 'Bharuch', 'Himachal', 'Wheels ', 9978, 6643, 'Adoration Hotel', '2020-02-24 23:13:01', 'C:/xampp/htdocs/TMS/dummytests/pkgStock/ankit-anand-ZcclGKNAHqg-unsplash.jpg'),
(13, '2020-02-24', '2020-02-28', 'Vadodara', 'Goa', 'Flight', 21000, 5000, 'emmy', '2020-02-24 22:28:12', 'C:/xampp/htdocs/TMS/dummytests/pkgStock/raja-sen-MzmI2I1GCnU-unsplash.jpg'),
(14, '2020-02-25', '2020-02-27', 'Delhi', 'Rajasthan', 'Flight', 15000, 4999, 'Rajvigadh', '2020-02-24 22:57:22', 'C:/xampp/htdocs/TMS/dummytests/pkgStock/aditya-siva-6rDbvXzIVpQ-unsplash.jpg'),
(16, '2020-02-25', '2020-02-28', 'surat', 'Kerala', 'Flight', 9899, 3999, 'anupam hotels', '2020-02-25 09:40:28', 'C:/xampp/htdocs/TMS/dummytests/pkgStock/aditya-chache-G2tz4a8ZE7A-unsplash.jpg'),
(17, '2020-02-26', '2020-02-29', 'Agra', 'Bhutan', 'Bus', 4999, 2999, 'shantiniketan Suits', '2020-02-25 16:05:31', 'C:/xampp/htdocs/TMS/dummytests/pkgStock/adli-wahid-A87rz-MJN_E-unsplash.jpg'),
(18, '2020-02-27', '2020-02-29', 'Bombay', 'Andamans', 'Train+Cruise', 23999, 4999, 'Hayers', '2020-02-26 22:39:26', 'C:/xampp/htdocs/TMS/dummytests/pkgStock/ravigopal-kesari-hR8IZoB7etc-unsplash.jpg'),
(19, '2020-03-13', '2020-03-23', 'delhi', 'Uttrakhand', 'Flight', 29999, 5499, 'emmy', '2020-03-12 14:58:30', 'C:/xampp/htdocs/TMS/dummytests/pkgStock/kalen-emsley-Bkci_8qcdvQ-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE `travel` (
  `travelid` int(11) NOT NULL,
  `tripid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `tcreatorid` int(11) NOT NULL,
  `tripType` varchar(10) NOT NULL,
  `payment` int(11) NOT NULL,
  `TravelTS` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Table will keep all the travel data';

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `tid` int(11) NOT NULL,
  `tCreatorid` int(11) DEFAULT NULL,
  `tsource` varchar(50) DEFAULT NULL,
  `tdestination` varchar(50) DEFAULT NULL,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `TripTS` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Table will keep all the Trip data with Trip Destination';

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `uidai` int(11) DEFAULT NULL,
  `UserTS` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Table will keep all the User data with credentials ';

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `emailid`, `password`, `contactno`, `uidai`, `UserTS`) VALUES
(1, 'dummy101', 'dummy@gmail.com', 'dummy', 91, 1, '2020-02-11 21:30:04'),
(15, 'hey', 'hey@hey.com', 'hey', 9999999999, 10, '2020-02-20 13:07:53'),
(19, 'name1', 'name1@domain1.com', 'name1', 91, 10, '2020-02-16 18:12:04'),
(24, 'chiman bhai', 'dummy@dum.com', 'dum', 9979501928, 10, '2020-02-16 19:32:14'),
(26, 'heya', 'heya@heya.com', 'heya', 9999999991, 11, '2020-02-17 14:11:58'),
(27, 'nirav', 'nirav@domain.com', 'nirav', 9999999942, 91, '2020-02-20 09:57:35'),
(28, 'Admin', '', 'Admin', NULL, NULL, '2020-02-23 21:07:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`expenseid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `tripid` (`tripid`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pkgid`);

--
-- Indexes for table `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`travelid`),
  ADD KEY `tcreatorid` (`tcreatorid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `tripid` (`tripid`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `tCreatorid` (`tCreatorid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `expenseid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pkgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `travel`
--
ALTER TABLE `travel`
  MODIFY `travelid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trip`
--
ALTER TABLE `trip`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `expenses_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`),
  ADD CONSTRAINT `expenses_ibfk_2` FOREIGN KEY (`tripid`) REFERENCES `trip` (`tid`);

--
-- Constraints for table `travel`
--
ALTER TABLE `travel`
  ADD CONSTRAINT `travel_ibfk_1` FOREIGN KEY (`tcreatorid`) REFERENCES `user` (`userid`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `travel_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`),
  ADD CONSTRAINT `travel_ibfk_3` FOREIGN KEY (`tripid`) REFERENCES `trip` (`tid`);

--
-- Constraints for table `trip`
--
ALTER TABLE `trip`
  ADD CONSTRAINT `trip_ibfk_1` FOREIGN KEY (`tCreatorid`) REFERENCES `user` (`userid`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
