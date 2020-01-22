-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2020 at 05:03 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `financial&cost_accounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `*account_payable`
--

CREATE TABLE `*account_payable` (
  `APCode` varchar(30) NOT NULL,
  `PtypeID` varchar(30) NOT NULL,
  `creditor` varchar(30) NOT NULL,
  `creditAmount` int(30) NOT NULL,
  `paidBalance` int(30) NOT NULL,
  `unpaidBalance` int(30) NOT NULL,
  `creditorAccountNo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `*account_receivable`
--

CREATE TABLE `*account_receivable` (
  `ARCode` varchar(30) NOT NULL,
  `RtypeID` varchar(30) NOT NULL,
  `debtor` varchar(30) NOT NULL,
  `debitAmount` int(30) NOT NULL,
  `paidBalance` int(30) NOT NULL,
  `unpaidBalance` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `*assets`
--

CREATE TABLE `*assets` (
  `AssetCode` varchar(30) NOT NULL,
  `AtypeID` varchar(30) NOT NULL,
  `historicalCost` int(30) NOT NULL,
  `fairValue` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee_payroll`
--

CREATE TABLE `employee_payroll` (
  `payroll_ID` varchar(30) NOT NULL,
  `employeeID` varchar(30) NOT NULL,
  `totalSalary` int(50) NOT NULL,
  `accountNumber` varchar(50) NOT NULL,
  `month` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_payroll`
--

INSERT INTO `employee_payroll` (`payroll_ID`, `employeeID`, `totalSalary`, `accountNumber`, `month`) VALUES
('', '', 0, '', '0000-00-00'),
('0', '0', 8000000, '0', '2020-01-05'),
('1', '1', 60000, '2147483647', '0000-00-00'),
('12', '675', 24569, '42201', '2020-02-05'),
('23', '213', 45000, '42568', '2020-03-09'),
('234', '123', 245789, '42201987', '2020-02-05'),
('3', '3', 3, '4567', '2020-05-02'),
('Pay17', 'Emp28', 35000, 'IBAN45378907', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `fixed_assets`
--

CREATE TABLE `fixed_assets` (
  `FACode` varchar(30) NOT NULL,
  `historicCost` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fixed_assets`
--

INSERT INTO `fixed_assets` (`FACode`, `historicCost`) VALUES
('', 0),
('AC100', 450000),
('AC105', 450000),
('AC205', 780000),
('AC206', 5000000),
('AC300', 78000),
('AC400', 90000),
('AC600', 670000),
('AC700', 900000),
('AC701', 66000),
('AC800', 8000000),
('AC900', 800000),
('fa01', 10000),
('fa02', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `general_purchases`
--

CREATE TABLE `general_purchases` (
  `GPCode` varchar(30) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_purchases`
--

INSERT INTO `general_purchases` (`GPCode`, `cost`) VALUES
('', 0),
('gp01', 5000),
('GP100', 0),
('GP105', 0),
('GP300', 0),
('GP400', 0),
('GP600', 0),
('GP700', 0),
('GP701', 0),
('GP800', 0),
('GP900', 0);

-- --------------------------------------------------------

--
-- Table structure for table `intangible_assets`
--

CREATE TABLE `intangible_assets` (
  `IACode` varchar(10) NOT NULL,
  `historicCost` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intangible_assets`
--

INSERT INTO `intangible_assets` (`IACode`, `historicCost`) VALUES
('', 0),
('IA01', 30000),
('IA100', 250000),
('IA105', 450000),
('IA300', 990000),
('IA400', 200000),
('IA600', 20000),
('IA700', 550000),
('IA701', 340000),
('IA800', 600000),
('IA900', 300000);

-- --------------------------------------------------------

--
-- Table structure for table `rawmaterial_purchased`
--

CREATE TABLE `rawmaterial_purchased` (
  `rawMaterial_ID` varchar(30) NOT NULL,
  `vendorName` varchar(30) NOT NULL,
  `rawMaterialCost` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rawmaterial_purchased`
--

INSERT INTO `rawmaterial_purchased` (`rawMaterial_ID`, `vendorName`, `rawMaterialCost`) VALUES
('', 'RABIYA KHAN', 340000),
('RD2', 'Muneebs', 45000),
('RD3', 'SYNC', 46000),
('RD500', 'RABIYA KHAN', 900000),
('RM01', 'MeerManufactures', 50000),
('RM101', 'Ali Naz', 78000),
('RM102', 'Ayesha Faisal', 45000),
('RM202', 'RABIYA KHAN', 450000),
('RM301', '', 0),
('RM600', 'Hafsa Ali', 67000);

-- --------------------------------------------------------

--
-- Table structure for table `repairingmaintenance_cost`
--

CREATE TABLE `repairingmaintenance_cost` (
  `bugdetID` varchar(30) NOT NULL,
  `fixedBugdet` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `repairingmaintenance_cost`
--

INSERT INTO `repairingmaintenance_cost` (`bugdetID`, `fixedBugdet`) VALUES
('BI01', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `shipment_ID` varchar(30) NOT NULL,
  `productID` varchar(30) NOT NULL,
  `dealerName` varchar(50) NOT NULL,
  `amountReceivable` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`shipment_ID`, `productID`, `dealerName`, `amountReceivable`) VALUES
('', 'P', '', 0),
('PS01', 'PRD05', 'InterWood', 30000),
('SH000', 'PD000', 'AYESHA', 80000),
('SH100', 'PD100', 'AYEHSA KHAN', 78000000),
('SH2', 'PD2', 'Rabiya Khan', 780000),
('SH200', 'PD200', 'Ayman Khan', 120000),
('SH201', 'PD201', 'RABIYA KHAN', 7800000),
('SH202', 'PD202', 'MUNEEBA SIDS', 99000),
('SH500', 'PD500', 'AYESHA KHAN', 780000),
('SH600', 'PD600', 'Waseem Shah', 780000),
('SH700', 'PD700', 'Sana Khan', 900000),
('SH801', 'PD801', 'Ali Shah', 440000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `*account_payable`
--
ALTER TABLE `*account_payable`
  ADD PRIMARY KEY (`APCode`);

--
-- Indexes for table `*account_receivable`
--
ALTER TABLE `*account_receivable`
  ADD PRIMARY KEY (`ARCode`);

--
-- Indexes for table `*assets`
--
ALTER TABLE `*assets`
  ADD PRIMARY KEY (`AssetCode`);

--
-- Indexes for table `employee_payroll`
--
ALTER TABLE `employee_payroll`
  ADD PRIMARY KEY (`payroll_ID`);

--
-- Indexes for table `fixed_assets`
--
ALTER TABLE `fixed_assets`
  ADD PRIMARY KEY (`FACode`);

--
-- Indexes for table `general_purchases`
--
ALTER TABLE `general_purchases`
  ADD PRIMARY KEY (`GPCode`);

--
-- Indexes for table `intangible_assets`
--
ALTER TABLE `intangible_assets`
  ADD PRIMARY KEY (`IACode`);

--
-- Indexes for table `rawmaterial_purchased`
--
ALTER TABLE `rawmaterial_purchased`
  ADD PRIMARY KEY (`rawMaterial_ID`);

--
-- Indexes for table `repairingmaintenance_cost`
--
ALTER TABLE `repairingmaintenance_cost`
  ADD PRIMARY KEY (`bugdetID`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`shipment_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
