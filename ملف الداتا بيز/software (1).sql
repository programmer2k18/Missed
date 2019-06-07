-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2018 at 03:04 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `software`
--

-- --------------------------------------------------------

--
-- Table structure for table `missed_thing`
--

CREATE TABLE `missed_thing` (
  `missed_id` int(11) NOT NULL,
  `user_ssn` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `address` varchar(22) NOT NULL,
  `category` varchar(20) NOT NULL,
  `place` varchar(20) NOT NULL,
  `founded_Date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `missed_thing`
--

INSERT INTO `missed_thing` (`missed_id`, `user_ssn`, `Username`, `address`, `category`, `place`, `founded_Date`, `time`) VALUES
(12, 1, 'ahmed nabil', 'egypt cairo', 'clothes', 'eldoki', '2018-12-15', ''),
(13, 1, 'ahmed Elsaghir', 'giza helwan', 'device', 'eldoki', '2018-12-08', ''),
(15, 1, 'ali', 'harm', 'accessories', 'eldoki', '2018-12-14', ''),
(16, 1, 'ahmed nabil', 'Giza Atfih', 'cards', 'giza', '2018-12-11', ''),
(17, 1, 'a', 'Giza Atfih', 'money', 'maadi', '2018-12-11', ''),
(19, 1, 'ahmed nabil', 'hadayeq helw', 'clothes', 'nacer city', '2018-12-17', ''),
(20, 1, 'Ahmed Nabil', 'mohandesen', 'cards', 'Bani swaff', '2018-12-06', ''),
(21, 1, 'ali mohammed', 'fifth setlment', 'money', 'cairo', '2018-12-01', ''),
(22, 17, 'alaa nabil', 'Giza Atfih', 'accessories', 'Elsadat', '2018-12-11', ''),
(23, 1, 'Ahmed Nabil', 'Aswan', 'clothes', 'University', '2018-12-13', '14:59'),
(24, 18, 'Mostafa Erfan', 'Giza Atfih', 'money', 'October', '2018-12-18', '16:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `Email` varchar(26) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Age` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `Bdate` varchar(10) NOT NULL,
  `Gender` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Fname`, `Lname`, `Email`, `Password`, `Age`, `User_Id`, `Bdate`, `Gender`) VALUES
('Ahmed', 'Nabil', 'programmer2k18@gmail.com', 'hackthone', 21, 1, '0000-00-00', 'male'),
('mostafa', 'nabil', 'mostafaeldeeb@gmail.com', 'darch12', 26, 14, '2018-12-15', 'male'),
('soha', 'magdy', 'soha@gmail.com', 'pro', 22, 15, '2018-12-15', 'female'),
('osama', 'mohsen', 'osamamohsen@gmail.com', '789456', 55, 16, '2018-12-11', 'male'),
('Alaa nabil', 'Ahmed', 'alaaeldeeb@gmail.com', 'omeralaa', 27, 17, '2018-12-25', 'male'),
('Mostafa', 'Erfan', 'mostafaerfan33@yahoo.com', 'english', 22, 18, '2018-12-20', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `missed_thing`
--
ALTER TABLE `missed_thing`
  ADD PRIMARY KEY (`missed_id`),
  ADD KEY `setforiegn` (`user_ssn`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `missed_thing`
--
ALTER TABLE `missed_thing`
  MODIFY `missed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `missed_thing`
--
ALTER TABLE `missed_thing`
  ADD CONSTRAINT `setforiegn` FOREIGN KEY (`user_ssn`) REFERENCES `user` (`User_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
