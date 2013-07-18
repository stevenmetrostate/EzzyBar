-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2013 at 06:20 AM
-- Server version: 5.5.27-log
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ezzybar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_drink`
--

CREATE TABLE IF NOT EXISTS `tbl_drink` (
  `drinkID` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `type` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `alcoholContent` varchar(45) DEFAULT NULL,
  `unitPrice` bigint(20) NOT NULL,
  PRIMARY KEY (`drinkID`),
  KEY `drinkNameAndPrice` (`name`,`unitPrice`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE IF NOT EXISTS `tbl_employee` (
  `employeeID` int(11) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) DEFAULT NULL,
  `role` varchar(45) NOT NULL,
  `password` varchar(225) NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`employeeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='		';

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`employeeID`, `firstName`, `lastName`, `role`, `password`, `status`) VALUES
(1, 'Romeo', 'Mai', 'Server', '123', '1'),
(2, 'Seng', 'Vang', 'Server', '123', '1'),
(3, 'Steven', 'Vang', 'Bartender', '123', '1'),
(4, 'Assefa', 'Abay', 'Manager', '123', '1'),
(5, 'Yasin', 'Jama', 'Manager', '123', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_equipment`
--

CREATE TABLE IF NOT EXISTS `tbl_equipment` (
  `equipmentID` int(11) NOT NULL,
  `equipmentType` varchar(45) DEFAULT NULL,
  `equipmentSerialNumber` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`equipmentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
  `orderID` int(11) NOT NULL,
  `tableID` int(11) DEFAULT NULL,
  `tax` bigint(20) DEFAULT NULL,
  `tip` bigint(20) DEFAULT NULL,
  `total` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`orderID`),
  KEY `tableID_idx` (`tableID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orderdrink`
--

CREATE TABLE IF NOT EXISTS `tbl_orderdrink` (
  `orderID` int(11) NOT NULL,
  `drinkID` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  KEY `orderID_idx` (`orderID`),
  KEY `drinkID_idx` (`drinkID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_payment` (
  `paymentID` int(11) NOT NULL,
  `cardName` varchar(45) NOT NULL,
  `lastFourNumber` varchar(45) NOT NULL,
  `paymentType` varchar(45) NOT NULL,
  `expirationMonth` varchar(2) NOT NULL,
  `expirationYear` varchar(4) NOT NULL,
  `vendorTransactionID` int(11) NOT NULL,
  PRIMARY KEY (`paymentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_serve`
--

CREATE TABLE IF NOT EXISTS `tbl_serve` (
  `orderID` int(11) NOT NULL,
  `employeeID` int(11) NOT NULL,
  KEY `orderID_idx` (`orderID`),
  KEY `employeeID_idx` (`employeeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_table`
--

CREATE TABLE IF NOT EXISTS `tbl_table` (
  `tableID` int(11) NOT NULL,
  `equipmentID` int(11) DEFAULT NULL,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `seat` int(11) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`tableID`),
  KEY `equipmentID_idx` (`equipmentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='	';

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE IF NOT EXISTS `tbl_transaction` (
  `orderID` int(11) NOT NULL,
  `paymentID` int(11) NOT NULL,
  `transactionDate` date NOT NULL,
  KEY `orderID_idx` (`orderID`),
  KEY `paymentID_idx` (`paymentID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tableID` FOREIGN KEY (`tableID`) REFERENCES `tbl_table` (`tableID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_orderdrink`
--
ALTER TABLE `tbl_orderdrink`
  ADD CONSTRAINT `drinkID` FOREIGN KEY (`drinkID`) REFERENCES `tbl_drink` (`drinkID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `orderDrink_orderID` FOREIGN KEY (`orderID`) REFERENCES `tbl_order` (`orderID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_serve`
--
ALTER TABLE `tbl_serve`
  ADD CONSTRAINT `employeeID` FOREIGN KEY (`employeeID`) REFERENCES `tbl_employee` (`employeeID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `orderID` FOREIGN KEY (`orderID`) REFERENCES `tbl_order` (`orderID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_table`
--
ALTER TABLE `tbl_table`
  ADD CONSTRAINT `equipmentID` FOREIGN KEY (`equipmentID`) REFERENCES `tbl_equipment` (`equipmentID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD CONSTRAINT `paymentID` FOREIGN KEY (`paymentID`) REFERENCES `tbl_payment` (`paymentID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Transaction_orderID` FOREIGN KEY (`orderID`) REFERENCES `tbl_order` (`orderID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
