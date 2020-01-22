-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2020 at 09:23 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `human_resource`
--

-- --------------------------------------------------------

--
-- Table structure for table `employeeadvance`
--

CREATE TABLE `employeeadvance` (
  `advID` int(7) NOT NULL,
  `employeeID` int(7) NOT NULL,
  `advanceAmount` int(10) NOT NULL,
  `takenDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employeeadvance`
--

INSERT INTO `employeeadvance` (`advID`, `employeeID`, `advanceAmount`, `takenDate`) VALUES
(1, 1, 250000, '2020-01-05');

-- --------------------------------------------------------

--
-- Table structure for table `employeeattendance`
--

CREATE TABLE `employeeattendance` (
  `atdID` int(7) NOT NULL,
  `employeeID` int(7) NOT NULL,
  `totalLeaves` int(5) NOT NULL,
  `overtimeHours` int(6) NOT NULL,
  `absentDays` int(5) NOT NULL,
  `lateMinutes` int(10) NOT NULL,
  `month/Year` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employeeattendance`
--

INSERT INTO `employeeattendance` (`atdID`, `employeeID`, `totalLeaves`, `overtimeHours`, `absentDays`, `lateMinutes`, `month/Year`) VALUES
(1, 1, 5, 6, 3, 24, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employeeloan`
--

CREATE TABLE `employeeloan` (
  `loanID` int(7) NOT NULL,
  `employeeID` int(7) NOT NULL,
  `loanAmount` int(10) DEFAULT NULL,
  `takenDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employeeloan`
--

INSERT INTO `employeeloan` (`loanID`, `employeeID`, `loanAmount`, `takenDate`) VALUES
(4, 2, 456789, '2012-02-05'),
(5, 5, 45679, '2020-02-05');

-- --------------------------------------------------------

--
-- Table structure for table `employeepayroll`
--

CREATE TABLE `employeepayroll` (
  `payrollID` int(7) NOT NULL,
  `employeeID` int(7) NOT NULL,
  `atdID` int(7) NOT NULL,
  `advID` int(7) NOT NULL,
  `loanID` int(7) NOT NULL,
  `totalSalary` int(10) NOT NULL,
  `accountNumber` int(30) NOT NULL,
  `month` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employeepayroll`
--

INSERT INTO `employeepayroll` (`payrollID`, `employeeID`, `atdID`, `advID`, `loanID`, `totalSalary`, `accountNumber`, `month`) VALUES
(0, 0, 0, 0, 0, 8000000, 0, '2020-01-05'),
(1, 1, 1, 1, 1, 250000, 42201, '2020-02-05'),
(2, 2, 2, 2, 2, 25000, 42201, '2020-02-05'),
(3, 3, 3, 3, 3, 3, 4567, '2020-05-02'),
(4, 4, 6, 3, 2, 250000, 324568, '2020-02-06'),
(5, 2, 6, 3, 4, 350000, 42201765, '2020-01-07'),
(6, 3, 3, 3, 5, 25000, 32456, '2020-03-05'),
(7, 3, 3, 4, 3, 25000, 56378, '2020-05-05'),
(8, 2, 2, 25, 2, 245668, 34567, '2020-02-08'),
(9, 3, 3, 3, 3, 25000, 4567, '2020-07-09'),
(11, 4, 3, 2, 5, 250000, 422987, '2020-02-05'),
(12, 2, 2, 2, 2, 45839, 42201987, '2020-02-05'),
(13, 2, 2, 2, 2, 250000, 42201, '2020-02-05'),
(23, 213, 456, 768, 345, 45000, 42568, '2020-03-09'),
(100, 0, 0, 0, 0, 80000000, 2147483647, '2020-02-05'),
(200, 3, 3, 3, 3, 25000, 42201, '2020-02-05'),
(234, 123, 245, 678, 456, 245789, 42201987, '2020-02-05'),
(3456, 2345, 23, 234, 456, 246789, 246279, '2020-02-05');

-- --------------------------------------------------------

--
-- Table structure for table `emplyeecredentials`
--

CREATE TABLE `emplyeecredentials` (
  `empoyeeID` int(7) NOT NULL,
  `employeeName` varchar(15) NOT NULL,
  `empContact` int(11) NOT NULL,
  `empAddress` varchar(30) NOT NULL,
  `empDesignation` varchar(15) NOT NULL,
  `empDepartment` varchar(15) NOT NULL,
  `hiringDate` date NOT NULL,
  `empEmail` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emplyeecredentials`
--

INSERT INTO `emplyeecredentials` (`empoyeeID`, `employeeName`, `empContact`, `empAddress`, `empDesignation`, `empDepartment`, `hiringDate`, `empEmail`) VALUES
(1, 'Muneeba', 2147483647, 'abcd', 'developer', 'VD', '2020-01-02', 'abc@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `payrollID` int(7) NOT NULL,
  `employeeID` int(7) NOT NULL,
  `totalSalary` int(10) NOT NULL,
  `accountNumber` int(13) NOT NULL,
  `month` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employeeadvance`
--
ALTER TABLE `employeeadvance`
  ADD PRIMARY KEY (`advID`),
  ADD KEY `employeeID` (`employeeID`);

--
-- Indexes for table `employeeattendance`
--
ALTER TABLE `employeeattendance`
  ADD PRIMARY KEY (`atdID`),
  ADD KEY `employeeID` (`employeeID`);

--
-- Indexes for table `employeeloan`
--
ALTER TABLE `employeeloan`
  ADD PRIMARY KEY (`loanID`);

--
-- Indexes for table `employeepayroll`
--
ALTER TABLE `employeepayroll`
  ADD PRIMARY KEY (`payrollID`);

--
-- Indexes for table `emplyeecredentials`
--
ALTER TABLE `emplyeecredentials`
  ADD PRIMARY KEY (`empoyeeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employeeloan`
--
ALTER TABLE `employeeloan`
  MODIFY `loanID` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employeeadvance`
--
ALTER TABLE `employeeadvance`
  ADD CONSTRAINT `employeeadvance_ibfk_1` FOREIGN KEY (`employeeID`) REFERENCES `emplyeecredentials` (`empoyeeID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employeeattendance`
--
ALTER TABLE `employeeattendance`
  ADD CONSTRAINT `employeeattendance_ibfk_1` FOREIGN KEY (`employeeID`) REFERENCES `emplyeecredentials` (`empoyeeID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
