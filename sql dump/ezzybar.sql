-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2013 at 06:06 AM
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
-- Table structure for table `tbl_cart`
--

CREATE TABLE IF NOT EXISTS `tbl_cart` (
  `Cart_ID` int(5) NOT NULL,
  `Drink_ID` int(5) NOT NULL,
  `Drink_Name` varchar(50) NOT NULL,
  `QTY` int(11) NOT NULL,
  `Drink_Price` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`Cart_ID`, `Drink_ID`, `Drink_Name`, `QTY`, `Drink_Price`) VALUES
(1, 15, 'Budweiser', 2, 6.50),
(1, 3, 'Redds Apple Ale', 6, 19.50),
(1, 1, 'Bud Light', 3, 9.75);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_checkout`
--

CREATE TABLE IF NOT EXISTS `tbl_checkout` (
  `Checkout_ID` int(5) NOT NULL,
  `Drink_ID` int(5) NOT NULL,
  `QTY` int(5) NOT NULL,
  `Cart_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customerorder`
--

CREATE TABLE IF NOT EXISTS `tbl_customerorder` (
  `Order_Id` varchar(25) NOT NULL,
  `Table_Number` int(2) NOT NULL,
  `DrinkID` int(5) NOT NULL,
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
  `Alcohol_Content` decimal(4,1) NOT NULL,
  `Drink_Type` varchar(25) NOT NULL,
  `Drink_Price` decimal(5,2) NOT NULL,
  PRIMARY KEY (`Drink_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_drinks`
--

INSERT INTO `tbl_drinks` (`Drink_ID`, `Drink_Name`, `Drink_Description`, `Alcohol_Content`, `Drink_Type`, `Drink_Price`) VALUES
(1, 'Bud Light', 'Introduced nationally in 1982, Bud Light is brewed with a malt and hops ratio different from Budweiser for a distinctively crisp taste with fewer calories.', 5.0, 'Domestic', 3.25),
(2, 'Heineken', '00% Barley malt, choice hops and pure water give this brew unsurpassed clarity', 5.0, 'Import', 4.50),
(3, 'Redds Apple Ale', 'Ale with natural apple flavor & caramel color ', 5.0, 'Domestic', 3.25),
(4, 'Bud Light - 16oz', 'Small, from tap', 5.0, 'Tap', 3.75),
(5, 'Bud Light - 22oz', 'Large, from tap', 5.0, 'Tap', 4.50),
(6, 'Jameson Whiskey', 'Jameson is a single distillery Irish whiskey produced by the Irish Distillers', 40.0, 'Liquor', 5.00),
(7, 'Patrón Silver Tequila', 'Patrón Silver Tequila is a smooth liquor with endless possibilities in cocktails', 40.0, 'Liquor', 6.00),
(8, 'Moscato dAsti - Glass', 'Pale sunshine yellow color and slight frizzante, this Moscato d''Asti has intense aromas of peaches, rose petals and ginger.', 40.0, 'Wine', 5.00),
(9, 'Moscato dAsti - Bottle', 'Moscato dAsti - Glass', 20.0, 'Wine', 25.00),
(10, 'Malk', 'Rich with vitamin R', 0.0, 'Non-Alcoholic', 2.50),
(11, 'Skim Milk', 'Straight from the cow''s belly', 0.0, 'Non-Alcoholic', 2.50),
(12, 'Incredible Hulk', 'A delicious recipe for Incredible Hulk, with Hennessy® cognac and Hpnotiq® liqueur. ', 30.0, 'Mixed', 6.00),
(13, 'Steven on the Beach', 'Scrump-cious! ooo lala!', 110.0, 'Mixed', 10.00),
(14, 'Guinness', 'Pale ale malt, about 25 to 30% flaked barley, and about 10% roasted barley, with no other grains or sugars', 5.0, 'Import', 4.50),
(15, 'Budweiser', 'American Lager since 2014', 5.0, 'Domestic', 3.25);

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_totalprice`
--

CREATE TABLE IF NOT EXISTS `tbl_totalprice` (
  `Cart_ID` int(5) NOT NULL,
  `Total_Price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`Cart_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_totalprice`
--

INSERT INTO `tbl_totalprice` (`Cart_ID`, `Total_Price`) VALUES
(1, 35.75);

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
