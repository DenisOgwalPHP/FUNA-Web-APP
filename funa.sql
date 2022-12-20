-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 11, 2018 at 02:07 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krsconsu_funa_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tse_no` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `password`, `tse_no`) VALUES
(1, '123456', 'TSE001'),
(2, '', 'TSE002'),
(3, '', 'TSE003'),
(4, '', 'TSE004');

-- --------------------------------------------------------

--
-- Table structure for table `accountcreation`
--

CREATE TABLE `accountcreation` (
  `StaffNo` varchar(15) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `ApprovalStatus` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountcreation`
--

INSERT INTO `accountcreation` (`StaffNo`, `Password`, `ApprovalStatus`) VALUES
('LOG001', '202cb962ac59075b964b07152d234b70', 'Approved'),
('SHO001', '202cb962ac59075b964b07152d234b70', 'Approved'),
('TOP001', '202cb962ac59075b964b07152d234b70', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Expense` varchar(30) NOT NULL,
  `ExpenseCost` int(11) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `ExpenseBy` varchar(50) NOT NULL,
  `Shop` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `locationtracking`
--

CREATE TABLE `locationtracking` (
  `UserName` varchar(15) NOT NULL,
  `Latitude` double NOT NULL,
  `Longitude` double NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `StaffNo` varchar(15) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`StaffNo`, `Status`) VALUES
('LOG001', 'Offline'),
('SHO001', 'Offline'),
('TOP001', 'Online'),
('TSE001', 'Online'),
('TSE002', 'Offline'),
('TSE003', 'Offline'),
('TSE004', 'Offline');

-- --------------------------------------------------------

--
-- Table structure for table `mainofficestock`
--

CREATE TABLE `mainofficestock` (
  `AfricelIssueID` int(15) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Denomination` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `MoneyWorth` int(11) NOT NULL,
  `IssuedBy` varchar(15) NOT NULL,
  `ApprovalStatus` varchar(15) NOT NULL,
  `ApprovedBy` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mainofficestock`
--

INSERT INTO `mainofficestock` (`AfricelIssueID`, `Date`, `Denomination`, `Quantity`, `MoneyWorth`, `IssuedBy`, `ApprovalStatus`, `ApprovedBy`) VALUES
(15, '2017-09-22 12:51:44', 500, 100, 50000, 'TOP001', 'Pending', 'Pending'),
(16, '2017-09-22 12:51:45', 1000, 50, 50000, 'TOP001', 'Pending', 'Pending'),
(17, '2017-09-22 12:51:45', 2000, 20, 40000, 'TOP001', 'Pending', 'Pending'),
(18, '2017-09-22 12:51:45', 5000, 30, 150000, 'TOP001', 'Pending', 'Pending'),
(19, '2017-09-22 12:51:45', 10000, 15, 150000, 'TOP001', 'Pending', 'Pending'),
(20, '2017-09-22 12:51:45', 20000, 1, 20000, 'TOP001', 'Pending', 'Pending'),
(21, '2017-09-22 12:51:59', 500, 10, 5000, 'TOP001', 'Pending', 'Pending'),
(22, '2017-09-22 12:57:43', 500, 10, 5000, 'TOP001', 'Pending', 'Pending'),
(23, '2017-09-22 12:57:43', 1000, 20, 20000, 'TOP001', 'Pending', 'Pending'),
(24, '2017-09-22 12:57:43', 2000, 20, 40000, 'TOP001', 'Pending', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `shopmapping`
--

CREATE TABLE `shopmapping` (
  `ShopName` varchar(30) NOT NULL,
  `Region` varchar(30) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopmapping`
--

INSERT INTO `shopmapping` (`ShopName`, `Region`, `Date`) VALUES
('Masindi', 'Western', '2017-09-22 12:50:17');

-- --------------------------------------------------------

--
-- Table structure for table `shopsales`
--

CREATE TABLE `shopsales` (
  `ShopSalesID` int(15) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ShopName` varchar(50) NOT NULL,
  `StaffNo` varchar(15) NOT NULL,
  `Denomination` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `MoneyRecieved` int(11) NOT NULL,
  `DiscountedMoneyRecieved` int(11) NOT NULL,
  `ApprovedBy` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shopstock`
--

CREATE TABLE `shopstock` (
  `MainOfficeIssueID` int(10) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Shop` varchar(30) NOT NULL,
  `Denomination` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `MoneyWorth` int(11) NOT NULL,
  `IssuedBy` varchar(15) NOT NULL,
  `ApprovalStatus` varchar(15) NOT NULL,
  `ApprovedBy` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopstock`
--

INSERT INTO `shopstock` (`MainOfficeIssueID`, `Date`, `Shop`, `Denomination`, `Quantity`, `MoneyWorth`, `IssuedBy`, `ApprovalStatus`, `ApprovedBy`) VALUES
(8, '2017-09-22 13:11:42', 'Masindi', 500, 10, 5000, 'LOG001', 'Approved', 'SHO001'),
(9, '2017-09-22 13:11:42', 'Masindi', 1000, 40, 40000, 'LOG001', 'Approved', 'SHO001'),
(10, '2017-09-22 13:11:42', 'Masindi', 2000, 10, 20000, 'LOG001', 'Approved', 'SHO001'),
(11, '2018-01-18 06:06:29', 'Masindi', 500, 15, 7500, '', 'Pending', 'Pending'),
(12, '2018-01-18 06:06:29', 'Masindi', 1000, 20, 20000, '', 'Pending', 'Pending'),
(13, '2018-01-18 06:06:29', 'Masindi', 2000, 36, 72000, '', 'Pending', 'Pending'),
(14, '2018-01-18 06:06:29', 'Masindi', 5000, 27, 135000, '', 'Pending', 'Pending'),
(15, '2018-01-18 06:06:29', 'Masindi', 10000, 10, 100000, '', 'Pending', 'Pending'),
(16, '2018-01-18 06:06:29', 'Masindi', 20000, 10, 200000, '', 'Pending', 'Pending'),
(17, '2018-01-18 06:06:29', 'Masindi', 50000, 5, 250000, '', 'Pending', 'Pending'),
(18, '2018-01-18 06:11:07', 'Masindi', 500, 5, 2500, '', 'Pending', 'Pending'),
(19, '2018-01-18 06:11:07', 'Masindi', 1000, 6, 6000, '', 'Pending', 'Pending'),
(20, '2018-01-18 06:11:07', 'Masindi', 2000, 78, 156000, '', 'Pending', 'Pending'),
(21, '2018-01-18 06:11:07', 'Masindi', 5000, 6, 30000, '', 'Pending', 'Pending'),
(22, '2018-01-18 06:11:07', 'Masindi', 10000, 4, 40000, '', 'Pending', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `shopstockbalance`
--

CREATE TABLE `shopstockbalance` (
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ShopName` varchar(30) NOT NULL,
  `Denomination` int(11) NOT NULL,
  `Balance` int(11) NOT NULL,
  `Status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staffregistration`
--

CREATE TABLE `staffregistration` (
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `StaffType` varchar(30) NOT NULL,
  `StaffNo` varchar(15) NOT NULL,
  `StaffName` varchar(50) NOT NULL,
  `Shop` varchar(50) NOT NULL,
  `Identification` varchar(30) NOT NULL,
  `IdentificationType` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffregistration`
--

INSERT INTO `staffregistration` (`Date`, `StaffType`, `StaffNo`, `StaffName`, `Shop`, `Identification`, `IdentificationType`) VALUES
('2017-09-22 13:06:57', 'Logistics', 'LOG001', 'MIcheal Bongomin', 'Masindi', 'Cmmiyuu67', 'National ID'),
('2017-09-16 09:31:33', 'Shop Attendant', 'SHO001', 'Denis Ogwal', 'Masindi', '007ghty56', 'NIN'),
('2017-09-22 06:08:56', 'Shop Attendant', 'SHO002', 'Micheal me', 'Kiryandongo', 'dfrght45', 'National ID'),
('2017-09-22 13:20:28', 'Shop Attendant', 'SHO003', 'Ogwal Denis', 'Masindi', 'werrt564', 'National ID'),
('2017-09-16 10:20:10', 'Top', 'TOP001', 'Janesh', 'Main Office', 'PYtr3456', 'NIN');

-- --------------------------------------------------------

--
-- Table structure for table `tsesales`
--

CREATE TABLE `tsesales` (
  `TseSalesID` int(15) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `TSENO` varchar(15) NOT NULL,
  `Denomination` int(10) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `MoneySold` int(11) NOT NULL,
  `DiscountedMoneySold` int(11) NOT NULL,
  `ShopApproval` varchar(15) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tsesales`
--

INSERT INTO `tsesales` (`TseSalesID`, `Date`, `TSENO`, `Denomination`, `Quantity`, `MoneySold`, `DiscountedMoneySold`, `ShopApproval`) VALUES
(1, '2017-09-21 09:57:49', 'TSE001', 2000, 10, 20000, 19000, 'SHO001'),
(53, '2017-09-23 17:11:39', 'TSE001', 500, 0, 0, 0, 'Pending'),
(54, '2017-09-23 17:11:39', 'TSE001', 1000, 0, 0, 0, 'Pending'),
(55, '2017-09-23 17:11:39', 'TSE001', 2000, 0, 0, 0, 'Pending'),
(56, '2017-09-23 17:11:39', 'TSE001', 5000, 0, 0, 0, 'Pending'),
(57, '2017-09-23 17:11:39', 'TSE001', 10000, 0, 0, 0, 'Pending'),
(58, '2017-09-23 17:11:39', 'TSE001', 20000, 0, 0, 0, 'Pending'),
(59, '2017-09-23 17:11:39', 'TSE001', 50000, 0, 0, 0, 'Pending'),
(60, '2017-10-03 10:08:46', 'TSE001', 500, 0, 0, 0, 'Pending'),
(61, '2017-10-03 10:08:46', 'TSE001', 1000, 0, 0, 0, 'Pending'),
(62, '2017-10-03 10:08:46', 'TSE001', 2000, 0, 0, 0, 'Pending'),
(63, '2017-10-03 10:08:46', 'TSE001', 5000, 0, 0, 0, 'Pending'),
(64, '2017-10-03 10:08:46', 'TSE001', 10000, 0, 0, 0, 'Pending'),
(65, '2017-10-03 10:08:46', 'TSE001', 20000, 0, 0, 0, 'Pending'),
(66, '2017-10-03 10:08:46', 'TSE001', 50000, 0, 0, 0, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tsesales2`
--

CREATE TABLE `tsesales2` (
  `id` int(10) NOT NULL,
  `tseno` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Denomination` varchar(20) NOT NULL,
  `Quantity` varchar(50) NOT NULL,
  `Money` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tsesales2`
--

INSERT INTO `tsesales2` (`id`, `tseno`, `date`, `Denomination`, `Quantity`, `Money`) VALUES
(72, 'TSE502', '2017-09-21 13:40:21', '10000', '2', '20000'),
(71, 'TSE502', '2017-09-21 13:40:21', '5000', '6', '30000'),
(70, 'TSE502', '2017-09-21 13:40:21', '2000', '6', '12000'),
(68, 'TSE502', '2017-09-21 13:40:21', '500', '2', '1000'),
(69, 'TSE502', '2017-09-21 13:40:21', '1000', '2', '2000'),
(67, 'TSE502', '2017-09-21 09:11:48', '50000', '1', '50000'),
(66, 'TSE502', '2017-09-21 09:11:48', '20000', '6', '120000'),
(65, 'TSE502', '2017-09-21 09:11:48', '10000', '0', '0'),
(64, 'TSE502', '2017-09-21 09:11:48', '5000', '5', '25000'),
(63, 'TSE502', '2017-09-21 09:11:48', '2000', '2', '4000'),
(62, 'TSE502', '2017-09-21 09:11:48', '1000', '1', '1000'),
(61, 'TSE502', '2017-09-21 09:11:48', '500', '50', '25000'),
(73, 'TSE502', '2017-09-21 13:40:21', '20000', '5', '100000'),
(74, 'TSE502', '2017-09-21 13:40:21', '50000', '5', '250000'),
(75, 'TSE502', '2017-09-22 05:33:15', '500', '20', '10000'),
(76, 'TSE502', '2017-09-22 05:33:15', '1000', '6', '6000'),
(77, 'TSE502', '2017-09-22 05:33:15', '2000', '8', '16000'),
(78, 'TSE502', '2017-09-22 05:33:15', '5000', '0', '0'),
(79, 'TSE502', '2017-09-22 05:33:15', '10000', '0', '0'),
(80, 'TSE502', '2017-09-22 05:33:15', '20000', '50', '1000000'),
(81, 'TSE502', '2017-09-22 05:33:15', '50000', '100', '5000000'),
(82, 'TSE502', '2017-09-22 06:13:19', '500', '0', '0'),
(83, 'TSE502', '2017-09-22 06:13:19', '1000', '0', '0'),
(84, 'TSE502', '2017-09-22 06:13:19', '2000', '25', '50000'),
(85, 'TSE502', '2017-09-22 06:13:19', '5000', '0', '0'),
(86, 'TSE502', '2017-09-22 06:13:19', '10000', '0', '0'),
(87, 'TSE502', '2017-09-22 06:13:19', '20000', '0', '0'),
(88, 'TSE502', '2017-09-22 06:13:19', '50000', '0', '0'),
(89, 'TSE502', '2017-09-22 13:25:25', '500', '0100', '50000'),
(90, 'TSE502', '2017-09-22 13:25:25', '1000', '0', '0'),
(91, 'TSE502', '2017-09-22 13:25:25', '2000', '0', '0'),
(92, 'TSE502', '2017-09-22 13:25:25', '5000', '0', '0'),
(93, 'TSE502', '2017-09-22 13:25:25', '10000', '0', '0'),
(94, 'TSE502', '2017-09-22 13:25:25', '20000', '0', '0'),
(95, 'TSE502', '2017-09-22 13:25:25', '50000', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tsestock`
--

CREATE TABLE `tsestock` (
  `ShopIssueID` int(15) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `TSENo` varchar(15) NOT NULL,
  `Denomination` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `MoneyWorth` int(11) NOT NULL,
  `IssuedBy` varchar(15) NOT NULL,
  `ApprovalStatus` varchar(15) NOT NULL,
  `ApprovedBy` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tsestock2`
--

CREATE TABLE `tsestock2` (
  `id` int(50) NOT NULL,
  `tseno` varchar(50) NOT NULL,
  `Denomination` varchar(50) NOT NULL,
  `Quantity` varchar(50) NOT NULL,
  `ApprovedBy` varchar(50) NOT NULL,
  `ApprovalStatus` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tsestock2`
--

INSERT INTO `tsestock2` (`id`, `tseno`, `Denomination`, `Quantity`, `ApprovedBy`, `ApprovalStatus`) VALUES
(1, 'TSE502', '500', '2000', '', '1'),
(2, 'TSE502', '1000', '200', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tsestockbalance`
--

CREATE TABLE `tsestockbalance` (
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `TSENo` varchar(15) NOT NULL,
  `Denomination` int(11) NOT NULL,
  `balance` int(11) NOT NULL,
  `Status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tse_no` (`tse_no`);

--
-- Indexes for table `accountcreation`
--
ALTER TABLE `accountcreation`
  ADD PRIMARY KEY (`StaffNo`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`Date`,`Expense`);

--
-- Indexes for table `locationtracking`
--
ALTER TABLE `locationtracking`
  ADD PRIMARY KEY (`UserName`,`Date`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`StaffNo`);

--
-- Indexes for table `mainofficestock`
--
ALTER TABLE `mainofficestock`
  ADD PRIMARY KEY (`AfricelIssueID`),
  ADD KEY `IssuedBy` (`IssuedBy`,`ApprovedBy`);

--
-- Indexes for table `shopmapping`
--
ALTER TABLE `shopmapping`
  ADD PRIMARY KEY (`ShopName`);

--
-- Indexes for table `shopsales`
--
ALTER TABLE `shopsales`
  ADD PRIMARY KEY (`ShopSalesID`);

--
-- Indexes for table `shopstock`
--
ALTER TABLE `shopstock`
  ADD PRIMARY KEY (`MainOfficeIssueID`);

--
-- Indexes for table `shopstockbalance`
--
ALTER TABLE `shopstockbalance`
  ADD PRIMARY KEY (`Date`,`ShopName`,`Denomination`);

--
-- Indexes for table `staffregistration`
--
ALTER TABLE `staffregistration`
  ADD PRIMARY KEY (`StaffNo`),
  ADD KEY `StaffNo` (`StaffNo`);

--
-- Indexes for table `tsesales`
--
ALTER TABLE `tsesales`
  ADD PRIMARY KEY (`TseSalesID`);

--
-- Indexes for table `tsesales2`
--
ALTER TABLE `tsesales2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tsestock`
--
ALTER TABLE `tsestock`
  ADD PRIMARY KEY (`ShopIssueID`);

--
-- Indexes for table `tsestock2`
--
ALTER TABLE `tsestock2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tsestockbalance`
--
ALTER TABLE `tsestockbalance`
  ADD PRIMARY KEY (`Date`,`TSENo`,`Denomination`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mainofficestock`
--
ALTER TABLE `mainofficestock`
  MODIFY `AfricelIssueID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `shopsales`
--
ALTER TABLE `shopsales`
  MODIFY `ShopSalesID` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shopstock`
--
ALTER TABLE `shopstock`
  MODIFY `MainOfficeIssueID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tsesales`
--
ALTER TABLE `tsesales`
  MODIFY `TseSalesID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `tsesales2`
--
ALTER TABLE `tsesales2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `tsestock`
--
ALTER TABLE `tsestock`
  MODIFY `ShopIssueID` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tsestock2`
--
ALTER TABLE `tsestock2`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
