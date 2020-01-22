-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2020 at 05:22 AM
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
-- Database: `production&distribution`
--

-- --------------------------------------------------------

--
-- Table structure for table `finalproduction`
--

CREATE TABLE `finalproduction` (
  `ProductID` varchar(10) NOT NULL,
  `BatchID` varchar(10) NOT NULL,
  `PackingCost` int(20) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `TotalUnits` varchar(20) NOT NULL,
  `ProductCost` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finalproduction`
--

INSERT INTO `finalproduction` (`ProductID`, `BatchID`, `PackingCost`, `Category`, `TotalUnits`, `ProductCost`) VALUES
('PD100', 'BD100', 20000, 'Oil Paints', '700units', 100000),
('PD101', 'BD101', 100000, 'Matt Paints', '100units', 5000000),
('PD102', 'BD102', 45000, 'Gloss Paint', '90units', 1000000),
('PD103', 'BD101', 78000, 'Semi-Gloss Paints', '90units', 700000);

-- --------------------------------------------------------

--
-- Table structure for table `pdsender`
--

CREATE TABLE `pdsender` (
  `rowid` varchar(10) NOT NULL,
  `rmID` varchar(10) NOT NULL,
  `rmcost` int(20) NOT NULL,
  `vendorname` varchar(50) NOT NULL,
  `dealername` varchar(50) NOT NULL,
  `productid` varchar(10) NOT NULL,
  `shipmentid` varchar(10) NOT NULL,
  `rcvdamount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pdsender`
--

INSERT INTO `pdsender` (`rowid`, `rmID`, `rmcost`, `vendorname`, `dealername`, `productid`, `shipmentid`, `rcvdamount`) VALUES
('100', 'RM100', 34000, 'RABIYA KHAN', '', 'PD100', 'SH100', 4500000),
('200', 'RM200', 67000, 'Rabiya Khan', '', 'PD200', 'SH200', 120000),
('201', 'RM201', 3400000, 'AYMAN KHAN', '', 'PD201', 'SH201', 7800000),
('202', 'RM202', 450000, 'MUNEEBA SIDS', '', 'PD202', 'SH202', 99000),
('500', 'RM500', 1000000, 'AYMAN ASAD', 'AYESHA KHAN', 'PD500', 'SH500', 780000),
('500', 'RD500', 900000, 'AYMAN ASAD', 'RABIYA KHAN', 'PD500', 'SH500', 780000),
('000', 'RM000', 90000, 'MUNEEBA', 'AYESHA', 'PD000', 'SH000', 80000),
('600', 'RM600', 67000, 'Waseem Shah', 'Hafsa Ali', 'PD600', 'SH600', 780000),
('700', 'RM700', 450000, 'Ahmed Khan', 'Sana Khan', 'PD700', 'SH700', 900000),
('R789', 'RM301', 0, '', '', 'P', '', 0),
('R789', 'RM301', 0, '', '', 'P', '', 0),
('R789', 'RM301', 0, '', '', 'P', '', 0),
('R789', 'RM301', 0, '', '', 'P', '', 0),
('801', 'RM801', 80000, 'Rabiya Khan', 'Ali Shah', 'PD801', 'SH801', 440000),
('801', 'RM801', 80000, 'Rabiya Khan', 'Ali Shah', 'PD801', 'SH801', 440000);

-- --------------------------------------------------------

--
-- Table structure for table `rawmaterialconsumed`
--

CREATE TABLE `rawmaterialconsumed` (
  `BatchID` varchar(10) NOT NULL,
  `RMID` varchar(20) NOT NULL,
  `RMConsumed` varchar(50) NOT NULL,
  `RMRemaining` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rawmaterialconsumed`
--

INSERT INTO `rawmaterialconsumed` (`BatchID`, `RMID`, `RMConsumed`, `RMRemaining`) VALUES
('BD100', 'RM100', '14units', '36units'),
('BD101', 'RM101', '4000units', '2000units'),
('BD102', 'RM102', '500units', '2000units'),
('BD103', 'RM103', '60units', '20units');

-- --------------------------------------------------------

--
-- Table structure for table `rawmaterialpurchased`
--

CREATE TABLE `rawmaterialpurchased` (
  `RMID` varchar(10) NOT NULL,
  `VendorID` varchar(10) NOT NULL,
  `RawMaterialCost` int(20) NOT NULL,
  `RawMaterialQuantity` varchar(50) NOT NULL,
  `PurchaseDate` date NOT NULL,
  `ShipmentPort` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rawmaterialpurchased`
--

INSERT INTO `rawmaterialpurchased` (`RMID`, `VendorID`, `RawMaterialCost`, `RawMaterialQuantity`, `PurchaseDate`, `ShipmentPort`) VALUES
('RM100', 'VID100', 130000, '50units', '2019-02-12', 'PR0099'),
('RM101', 'VID102', 5400000, '8000units', '2019-01-09', 'RD4555'),
('RM102', 'VID101', 1000000, '2500units', '2019-07-02', 'FG6666'),
('RM103', 'VID103', 760000, '80units', '2019-07-09', 'HU9000');

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `SHID` varchar(10) NOT NULL,
  `ProductID` varchar(10) NOT NULL,
  `DealerName` varchar(50) NOT NULL,
  `DealerContact` int(20) NOT NULL,
  `ProductQuantity` varchar(20) NOT NULL,
  `DeparturePort` varchar(20) NOT NULL,
  `DepartureDate` date NOT NULL,
  `ReceivableAmount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`SHID`, `ProductID`, `DealerName`, `DealerContact`, `ProductQuantity`, `DeparturePort`, `DepartureDate`, `ReceivableAmount`) VALUES
('SH100', 'PD100', 'Bilal Khan', 2134577654, '9000units', 'PD2222', '2020-01-07', 30000000),
('SH101', 'PD101', 'Ismail Ali', 542977765, '1000units', 'FG4444', '2020-01-22', 90000000);

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `rowid` varchar(10) NOT NULL,
  `rmid` varchar(10) NOT NULL,
  `rmcost` int(20) NOT NULL,
  `vendorname` varchar(50) NOT NULL,
  `productid` varchar(10) NOT NULL,
  `shipmentid` varchar(10) NOT NULL,
  `rcvdamount` int(20) NOT NULL,
  `dealername` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `VendorID` varchar(10) NOT NULL,
  `VendorName` varchar(50) NOT NULL,
  `VendorContact` int(20) NOT NULL,
  `VendorCompany` varchar(50) NOT NULL,
  `RawMaterial` varchar(50) NOT NULL,
  `ItemDescription` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`VendorID`, `VendorName`, `VendorContact`, `VendorCompany`, `RawMaterial`, `ItemDescription`) VALUES
('VID100', 'Rabiya Khan', 2134988768, 'RK Pigments Ltd', 'Paint Pigments', 'Signed Contract 2018 for 3 years'),
('VID101', 'Ayman Khan', 2135677789, 'Winston Chemicals', 'Chemical X', 'Signed Contract 2019 for 1 year'),
('VID102', 'Muneeba Siddiqui', 429887687, 'Sidds Priv Ltd', 'Chemical Y', 'Signed Contract 2017 for 4 years'),
('VID103', 'Ayesha Khan', 546788832, 'Chemicals Company', 'Acids', 'Signed Contract 2020 for 2 years');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `finalproduction`
--
ALTER TABLE `finalproduction`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `finalproduction_ibfk_1` (`BatchID`);

--
-- Indexes for table `rawmaterialconsumed`
--
ALTER TABLE `rawmaterialconsumed`
  ADD PRIMARY KEY (`BatchID`),
  ADD KEY `rawmaterialconsumed_ibfk_1` (`RMID`);

--
-- Indexes for table `rawmaterialpurchased`
--
ALTER TABLE `rawmaterialpurchased`
  ADD PRIMARY KEY (`RMID`),
  ADD KEY `rawmaterialpurchased_ibfk_1` (`VendorID`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`SHID`),
  ADD KEY `ProductID` (`ProductID`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`VendorID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `finalproduction`
--
ALTER TABLE `finalproduction`
  ADD CONSTRAINT `finalproduction_ibfk_1` FOREIGN KEY (`BatchID`) REFERENCES `rawmaterialconsumed` (`BatchID`) ON UPDATE CASCADE;

--
-- Constraints for table `rawmaterialconsumed`
--
ALTER TABLE `rawmaterialconsumed`
  ADD CONSTRAINT `rawmaterialconsumed_ibfk_1` FOREIGN KEY (`RMID`) REFERENCES `rawmaterialpurchased` (`RMID`) ON UPDATE CASCADE;

--
-- Constraints for table `rawmaterialpurchased`
--
ALTER TABLE `rawmaterialpurchased`
  ADD CONSTRAINT `rawmaterialpurchased_ibfk_1` FOREIGN KEY (`VendorID`) REFERENCES `vendor` (`VendorID`) ON UPDATE CASCADE;

--
-- Constraints for table `shipment`
--
ALTER TABLE `shipment`
  ADD CONSTRAINT `shipment_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `finalproduction` (`ProductID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
