-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2020 at 11:54 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `immunization`
--

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `Date` date NOT NULL,
  `Serial_No` varchar(50) NOT NULL,
  `CID` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `dOB` date NOT NULL,
  `Date_First_Seen` date NOT NULL,
  `Father_Name1` varchar(50) NOT NULL,
  `Father_Name2` varchar(50) NOT NULL,
  `Status_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`Date`, `Serial_No`, `CID`, `Name`, `sex`, `dOB`, `Date_First_Seen`, `Father_Name1`, `Father_Name2`, `Status_type`) VALUES
('2019-03-07', '1234567', '1020', 'Milly mourine', 'F', '2020-06-02', '2020-07-02', 'Kevin', 'Alvin', '');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `Father_Name1` varchar(50) NOT NULL,
  `Father_Name2` varchar(50) NOT NULL,
  `Serial_No` varchar(50) NOT NULL,
  `Phone_Number` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sex`
--

CREATE TABLE `sex` (
  `type` char(50) NOT NULL,
  `code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sex`
--

INSERT INTO `sex` (`type`, `code`) VALUES
('F', '21'),
('M', '22');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `Status_type` varchar(50) NOT NULL,
  `Remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`Status_type`, `Remarks`) VALUES
('Revaccination', ''),
('Fully_immunized', '');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `Types` varchar(50) NOT NULL,
  `Vaccine_ID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`Types`, `Vaccine_ID`) VALUES
('BCG', '01'),
('Polio_birth_dose', '02'),
('First_polio', '03'),
('Second_polio', '04'),
('Third_polio', '05'),
('DPT/Hep.B/Hib.1', '06'),
('DPT/Hep.B/Hib.2', '07'),
('DPT/Hep.B/Hib.3', '08'),
('Measles', '09'),
('Yellow_fever', '10'),
('Vitamin_A', '11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`Serial_No`);

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`Vaccine_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
