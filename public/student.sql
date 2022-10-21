-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2022 at 05:36 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `PetID` int(13) NOT NULL,
  `pet` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`PetID`, `pet`) VALUES
(1111, 'Dog'),
(1112, 'Cat'),
(1113, 'Horse'),
(1114, 'Chicken'),
(1115, 'Dragon');

-- --------------------------------------------------------

--
-- Table structure for table `studentbio`
--

CREATE TABLE `studentbio` (
  `SID` int(13) NOT NULL,
  `Sname` varchar(20) NOT NULL,
  `Slastname` varchar(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Telephone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentbio`
--

INSERT INTO `studentbio` (`SID`, `Sname`, `Slastname`, `Address`, `Telephone`) VALUES
(1163109050, 'Settapong', 'Pakunumnuay', '99 Ladprao Road. 95 Bangkok 10310', '0998899988'),
(1163109051, 'Prayut', 'Chan-o-cha', '888 Wang alley 55, Bangkok 11021', '0845556666'),
(1163109052, 'Prawit', 'Wongsuwan', '1 Siam one ,Bangkok 10150', '0855555555'),
(1163109053, 'Te', 'Mongkonkit', '123 Bangna Soi 88 ,Bangkok 11501', '0812345678'),
(1163109054, 'Leena', 'Jung', '5678 Future Park,Rangsit 88845', '0654441111'),
(1163109056, 'Kongthem', 'Pennueng', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `studentpet`
--

CREATE TABLE `studentpet` (
  `Counter` int(13) NOT NULL,
  `SID` int(11) NOT NULL,
  `PetID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentpet`
--

INSERT INTO `studentpet` (`Counter`, `SID`, `PetID`) VALUES
(10, 1163109050, 1111),
(5, 1163109051, 1115),
(5, 1163109052, 1113);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`PetID`);

--
-- Indexes for table `studentbio`
--
ALTER TABLE `studentbio`
  ADD PRIMARY KEY (`SID`);

--
-- Indexes for table `studentpet`
--
ALTER TABLE `studentpet`
  ADD KEY `SID` (`SID`),
  ADD KEY `PetID` (`PetID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
