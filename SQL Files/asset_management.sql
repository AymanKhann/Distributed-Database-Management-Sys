-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2020 at 05:18 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asset_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `fixedassets`
--

CREATE TABLE `fixedassets` (
  `AssetCode` varchar(10) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `HistoricCost` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fixedassets`
--

INSERT INTO `fixedassets` (`AssetCode`, `Type`, `Location`, `HistoricCost`) VALUES
('AC100', 'Storage', 'Clifton Karachi', 9000000),
('AC101', 'Factory', 'Nazimabad', 620000),
('AC102', 'Factory', 'Malir Karachi', 1500000),
('AC103', 'Factory', 'Clifton Karachi', 10000000);

-- --------------------------------------------------------

--
-- Table structure for table `generalpurchases`
--

CREATE TABLE `generalpurchases` (
  `GPCode` varchar(10) NOT NULL,
  `GPAmount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `generalpurchases`
--

INSERT INTO `generalpurchases` (`GPCode`, `GPAmount`) VALUES
('GP100', 45000),
('GP102', 90000),
('GP103', 82000),
('GP104', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `intangibleassets`
--

CREATE TABLE `intangibleassets` (
  `IACode` varchar(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `HistoricCost` int(20) NOT NULL,
  `Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intangibleassets`
--

INSERT INTO `intangibleassets` (`IACode`, `Name`, `HistoricCost`, `Description`) VALUES
('AC103', 'Trademark', 3000000, 'Purchased Trademark for brand'),
('AC104', 'License', 1500000, 'License Purchased for 2020'),
('IA100', 'Goodwill', 90000, 'Purchased Goodwill for brand'),
('IA101', 'Copy Rights', 620000, 'Puchased copy rights for year 2020');

-- --------------------------------------------------------

--
-- Table structure for table `repairandmgmt`
--

CREATE TABLE `repairandmgmt` (
  `BudgetID` varchar(10) NOT NULL,
  `Month` varchar(50) NOT NULL,
  `FixedBudget` int(20) NOT NULL,
  `AdditionalAmmount` int(20) NOT NULL,
  `AllocatedTo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `repairandmgmt`
--

INSERT INTO `repairandmgmt` (`BudgetID`, `Month`, `FixedBudget`, `AdditionalAmmount`, `AllocatedTo`) VALUES
('BD100', 'SEPT', 66000, 8000, 'AC102'),
('BD101', 'NOV', 54000, 10000, 'AC100'),
('BD102', 'DEC', 99000, 0, 'AC103'),
('BD103', 'JAN', 67000, 5000, 'AC101');

-- --------------------------------------------------------

--
-- Table structure for table `sender`
--

CREATE TABLE `sender` (
  `rowid` varchar(10) NOT NULL,
  `assetcode` varchar(10) NOT NULL,
  `assetcost` int(20) NOT NULL,
  `gpcode` varchar(10) NOT NULL,
  `gpamount` int(20) NOT NULL,
  `iacode` varchar(10) NOT NULL,
  `iacost` int(20) NOT NULL,
  `budgetid` varchar(10) NOT NULL,
  `fixedbudget` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sender`
--

INSERT INTO `sender` (`rowid`, `assetcode`, `assetcost`, `gpcode`, `gpamount`, `iacode`, `iacost`, `budgetid`, `fixedbudget`) VALUES
('105', 'AC105', 450000, 'GP105', 0, 'IA105', 450000, 'BD105', 690000),
('100', 'AC105', 45000, 'GP105', 0, 'IA105', 12000, 'BD105', 80000),
('300', 'AC300', 78000, 'GP300', 0, 'IA300', 990000, 'BD300', 90000),
('400', 'AC400', 90000, 'GP400', 0, 'IA400', 200000, 'BD400', 700000),
('400', 'AC400', 90000, 'GP400', 0, 'IA400', 200000, 'BD400', 700000),
('600', 'AC600', 670000, 'GP600', 0, 'IA600', 20000, 'BD600', 670000),
('800', 'AC800', 8000000, 'GP800', 0, 'IA800', 600000, 'BD800', 8000000),
('700', 'AC700', 900000, 'GP700', 0, 'IA700', 550000, 'BD700', 770000),
('701', 'AC701', 66000, 'GP701', 0, 'IA701', 340000, 'BD701', 60000),
('900', 'AC900', 800000, 'GP900', 0, 'IA900', 300000, 'BD900', 700000);

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `rowid` varchar(10) NOT NULL,
  `assetcode` varchar(10) NOT NULL,
  `assetcost` int(20) NOT NULL,
  `gpcode` varchar(10) NOT NULL,
  `gpamount` int(20) NOT NULL,
  `iacode` varchar(10) NOT NULL,
  `iacost` int(20) NOT NULL,
  `budgetid` varchar(10) NOT NULL,
  `fixedbudget` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fixedassets`
--
ALTER TABLE `fixedassets`
  ADD PRIMARY KEY (`AssetCode`);

--
-- Indexes for table `generalpurchases`
--
ALTER TABLE `generalpurchases`
  ADD PRIMARY KEY (`GPCode`);

--
-- Indexes for table `intangibleassets`
--
ALTER TABLE `intangibleassets`
  ADD PRIMARY KEY (`IACode`);

--
-- Indexes for table `repairandmgmt`
--
ALTER TABLE `repairandmgmt`
  ADD PRIMARY KEY (`BudgetID`),
  ADD KEY `repairandmgmt_ibfk_1` (`AllocatedTo`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `repairandmgmt`
--
ALTER TABLE `repairandmgmt`
  ADD CONSTRAINT `repairandmgmt_ibfk_1` FOREIGN KEY (`AllocatedTo`) REFERENCES `fixedassets` (`AssetCode`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
