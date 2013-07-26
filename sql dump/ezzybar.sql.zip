-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2013 at 03:34 AM
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
-- Table structure for table `tbl_customerorder`
--

CREATE TABLE IF NOT EXISTS `tbl_customerorder` (
  `Order_Id` varchar(25) NOT NULL,
  `Table_Number` int(2) NOT NULL,
  `DrinkID` int(10) NOT NULL,
  `Total_Payment` decimal(4,2) NOT NULL,
  `Drink_Qty` int(2) NOT NULL,
  PRIMARY KEY (`Order_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_drinks`
--

CREATE TABLE IF NOT EXISTS `tbl_drinks` (
  `Drink_ID` int(5) NOT NULL AUTO_INCREMENT,
  `Drink_Name` varchar(50) NOT NULL,
  `Drink_Description` varchar(255) NOT NULL,
  `Alcohol_Content` decimal(2,1) NOT NULL,
  `Drink_Type` varchar(25) NOT NULL,
  `Drink_Price` decimal(3,2) NOT NULL,
  PRIMARY KEY (`Drink_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_drinks`
--

INSERT INTO `tbl_drinks` (`Drink_ID`, `Drink_Name`, `Drink_Description`, `Alcohol_Content`, `Drink_Type`, `Drink_Price`) VALUES
(1, 'Bud Light', 'Introduced nationally in 1982, Bud Light is brewed with a malt and hops ratio different from Budweiser for a distinctively crisp taste with fewer calories.', 5.0, 'Domestic', 3.25),
(2, 'Coors Light', 'A premium light beer with 105 calories per 12-ounce serving.', 5.0, 'Domestic', 3.25),
(3, 'Budweiser', 'Brewed and sold since 1876, "The King of Beers" is the largest-selling beer in the world. Budweiser has been the world’s best-selling beer since 1957, and is distributed in more than 70 countries.', 5.0, 'Domestic', 3.25),
(4, 'Heineken', '100% Barley malt, choice hops and pure water give this brew unsurpassed clarity.', 5.0, 'Import', 4.50),
(5, 'Guinness', 'Usually called Draught; sometimes called Cold or Extra Cold - same beer, but served colder. Launched in 1961. ', 5.0, 'Import', 4.50);

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_table`
--
ALTER TABLE `tbl_table`
  ADD CONSTRAINT `equipmentID` FOREIGN KEY (`equipmentID`) REFERENCES `tbl_equipment` (`equipmentID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
