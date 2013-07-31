-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Jul 26, 2013 at 12:46 PM
-- Server version: 5.5.27
=======
-- Generation Time: Jul 28, 2013 at 08:01 PM
-- Server version: 5.5.27-log
>>>>>>> origin/Customer-Branch
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
<<<<<<< HEAD
  `Dom_ID` int(11) NOT NULL,
  `Imp_ID` int(11) NOT NULL,
  `Liq_ID` int(11) NOT NULL,
  `Mix_ID` int(11) NOT NULL,
  `Tap_ID` int(11) NOT NULL,
  `Win_ID` int(11) NOT NULL,
  `Non_ID` int(11) NOT NULL,
  `qty` int(11) NOT NULL
=======
  `Cart_ID` int(5) NOT NULL,
  `Drink_ID` int(5) NOT NULL,
  `Drink_Name` varchar(50) NOT NULL,
  `QTY` int(11) NOT NULL,
  `Drink_Price` decimal(5,2) NOT NULL
>>>>>>> origin/Customer-Branch
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
-- Table structure for table `tbl_domestic`
--

<<<<<<< HEAD
CREATE TABLE IF NOT EXISTS `tbl_domestic` (
  `Dom_ID` int(5) NOT NULL AUTO_INCREMENT,
  `Dom_Name` varchar(50) NOT NULL,
  `Dom_Description` varchar(255) NOT NULL,
  `Alcohol_Content` decimal(2,1) NOT NULL,
  `Drink_Type` varchar(25) NOT NULL,
  `Drink_Price` decimal(3,2) NOT NULL,
  PRIMARY KEY (`Dom_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;
=======
CREATE TABLE IF NOT EXISTS `tbl_drinks` (
  `Drink_ID` int(5) NOT NULL AUTO_INCREMENT,
  `Drink_Name` varchar(50) NOT NULL,
  `Drink_Description` varchar(255) NOT NULL,
  `Alcohol_Content` decimal(4,1) NOT NULL,
  `Drink_Type` varchar(25) NOT NULL,
  `Drink_Price` decimal(5,2) NOT NULL,
  PRIMARY KEY (`Drink_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;
>>>>>>> origin/Customer-Branch

--
-- Dumping data for table `tbl_domestic`
--

INSERT INTO `tbl_domestic` (`Dom_ID`, `Dom_Name`, `Dom_Description`, `Alcohol_Content`, `Drink_Type`, `Drink_Price`) VALUES
(1, 'Bud Light', 'Introduced nationally in 1982, Bud Light is brewed with a malt and hops ratio different from Budweiser for a distinctively crisp taste with fewer calories.', 5.0, 'Domestic', 3.25),
(2, 'Coors Light', 'A premium light beer with 105 calories per 12-ounce serving.', 5.0, 'Domestic', 3.25),
<<<<<<< HEAD
(3, 'Budweiser', 'Brewed and sold since 1876, "The King of Beers" is the largest-selling beer in the world. Budweiser has been the world’s best-selling beer since 1957, and is distributed in more than 70 countries.', 5.0, 'Domestic', 3.25);
=======
(3, 'Budweiser', 'Brewed and sold since 1876, "The King of Beers" is the largest-selling beer in the world. Budweiser has been the world’s best-selling beer since 1957, and is distributed in more than 70 countries.', 5.0, 'Domestic', 3.25),
(4, 'Imported Beer', 'asdf', 5.0, 'Import', 5.00),
(5, 'Liquor', 'asdf', 40.0, 'Liquor', 5.00),
(6, 'Mixed', 'asdf', 25.0, 'Mixed', 5.00),
(7, 'Non Alcoholic', 'gre', 0.0, 'Non-Alcoholic', 2.00),
(8, 'Wine', 'Winery', 20.0, 'Wine', 5.00),
(9, 'Coors Light - 16oz', 'Tapped from a Keg', 5.0, 'Tap', 4.50),
(10, 'Blue Moon - 22oz', 'Tapped from a Keg', 5.0, 'Tap', 6.00),
(11, 'Redd''s Apple', 'Taste like Apple Juice!', 5.0, 'Domestic', 3.50);
>>>>>>> origin/Customer-Branch

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
-- Table structure for table `tbl_import`
--

CREATE TABLE IF NOT EXISTS `tbl_import` (
  `Imp_ID` int(5) NOT NULL AUTO_INCREMENT,
  `Imp_Name` varchar(50) NOT NULL,
  `Imp_Description` varchar(255) NOT NULL,
  `Alcohol_Content` decimal(2,1) NOT NULL,
  `Drink_Type` varchar(25) NOT NULL,
  `Drink_Price` decimal(3,2) NOT NULL,
  PRIMARY KEY (`Imp_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_import`
--

INSERT INTO `tbl_import` (`Imp_ID`, `Imp_Name`, `Imp_Description`, `Alcohol_Content`, `Drink_Type`, `Drink_Price`) VALUES
(1, 'Heineken', '100% Barley malt, choice hops and pure water give this brew unsurpassed clarity.', 5.0, 'Import', 4.50),
(2, 'Guinness', 'Usually called Draught; sometimes called Cold or Extra Cold - same beer, but served colder. Launched in 1961. ', 5.0, 'Import', 4.50),
(3, 'Stella Artois', 'Stella Artois is one of the world’s best-selling beers and is enjoyed in more than 80 countries. Its full, characteristic flavour and high quality is assured through a superior brewing process and by using the finest ingredients available.', 5.0, 'Import', 5.00),
(4, 'Steve''s Beer', 'Best Beer Ever', 8.0, 'Import', 4.25);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_liquor`
--

CREATE TABLE IF NOT EXISTS `tbl_liquor` (
  `Liq_ID` int(5) NOT NULL AUTO_INCREMENT,
  `Liq_Name` varchar(50) NOT NULL,
  `Liq_Description` varchar(255) NOT NULL,
  `Alcohol_Content` decimal(4,1) NOT NULL,
  `Drink_Type` varchar(25) NOT NULL,
  `Drink_Price` decimal(5,2) NOT NULL,
  PRIMARY KEY (`Liq_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_liquor`
--

INSERT INTO `tbl_liquor` (`Liq_ID`, `Liq_Name`, `Liq_Description`, `Alcohol_Content`, `Drink_Type`, `Drink_Price`) VALUES
(1, 'Hennessy', 'The power of blending. On the nose, Hennessy Very Special brings together an intense and fruity character with oaky notes.', 40.0, 'Liquor', 6.00),
(2, 'Johnny Walker - Blue Label', 'Johnnie Walker is one of the most famous brands in the world of blended Scotch whiskies. ', 40.0, 'Liquor', 20.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mixed`
--

CREATE TABLE IF NOT EXISTS `tbl_mixed` (
  `Mix_ID` int(5) NOT NULL AUTO_INCREMENT,
  `Mix_Name` varchar(50) NOT NULL,
  `Mix_Description` varchar(255) NOT NULL,
  `Alcohol_Content` decimal(4,1) NOT NULL,
  `Drink_Type` varchar(25) NOT NULL,
  `Drink_Price` decimal(5,2) NOT NULL,
  PRIMARY KEY (`Mix_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_mixed`
--

INSERT INTO `tbl_mixed` (`Mix_ID`, `Mix_Name`, `Mix_Description`, `Alcohol_Content`, `Drink_Type`, `Drink_Price`) VALUES
(1, 'Incredible Hulk', 'A delicious recipe for Incredible Hulk, with Hennessy® cognac and Hpnotiq® liqueur', 40.0, 'Mixed', 10.00),
(2, 'Steven Blend', 'UGHHHHH!', 200.0, 'Mixed', 100.00),
(3, 'Sex on the Beach', 'With vodka, peach schnapps, cranberry juice and orange juice.', 35.0, 'Mixed', 10.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nonalcoholic`
--

CREATE TABLE IF NOT EXISTS `tbl_nonalcoholic` (
  `Non_ID` int(5) NOT NULL AUTO_INCREMENT,
  `Non_Name` varchar(50) NOT NULL,
  `Non_Description` varchar(255) NOT NULL,
  `Alcohol_Content` decimal(2,1) NOT NULL,
  `Drink_Type` varchar(25) NOT NULL,
  `Drink_Price` decimal(3,2) NOT NULL,
  PRIMARY KEY (`Non_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_nonalcoholic`
--

INSERT INTO `tbl_nonalcoholic` (`Non_ID`, `Non_Name`, `Non_Description`, `Alcohol_Content`, `Drink_Type`, `Drink_Price`) VALUES
(1, 'Orange Juice', 'Orange juice refers to the juice of oranges. It is made by squeezing the fresh fruit, by drying and later rehydrating the juice, or by concentration of the juice', 0.0, 'Non-Alcoholic', 3.25),
(2, 'Malk', 'Vitamin R', 0.0, 'Non-Alcoholic', 0.01);

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
-- Table structure for table `tbl_tap`
--

CREATE TABLE IF NOT EXISTS `tbl_tap` (
  `Tap_ID` int(5) NOT NULL AUTO_INCREMENT,
  `Tap_Name` varchar(50) NOT NULL,
  `Tap_Description` varchar(255) NOT NULL,
  `Alcohol_Content` decimal(2,1) NOT NULL,
  `Drink_Type` varchar(25) NOT NULL,
  `Drink_Price` decimal(3,2) NOT NULL,
  PRIMARY KEY (`Tap_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_tap`
--

INSERT INTO `tbl_tap` (`Tap_ID`, `Tap_Name`, `Tap_Description`, `Alcohol_Content`, `Drink_Type`, `Drink_Price`) VALUES
(1, 'Bud Light', 'Introduced nationally in 1982, Bud Light is brewed with a malt and hops ratio different from Budweiser for a distinctively crisp taste with fewer calories.', 5.0, 'Domestic', 3.25),
(2, 'Coors Light', 'A premium light beer with 105 calories per 12-ounce serving.', 5.0, 'Domestic', 3.25),
(3, 'Budweiser', 'Brewed and sold since 1876, "The King of Beers" is the largest-selling beer in the world. Budweiser has been the world’s best-selling beer since 1957, and is distributed in more than 70 countries.', 5.0, 'Domestic', 3.25);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wine`
--

CREATE TABLE IF NOT EXISTS `tbl_wine` (
  `Win_ID` int(5) NOT NULL AUTO_INCREMENT,
  `Win_Name` varchar(50) NOT NULL,
  `Win_Description` varchar(255) NOT NULL,
  `Alcohol_Content` decimal(4,1) NOT NULL,
  `Drink_Type` varchar(25) NOT NULL,
  `Drink_Price` decimal(5,2) NOT NULL,
  PRIMARY KEY (`Win_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_wine`
--

INSERT INTO `tbl_wine` (`Win_ID`, `Win_Name`, `Win_Description`, `Alcohol_Content`, `Drink_Type`, `Drink_Price`) VALUES
(1, 'Stella Rosa - Glass', 'Distilled since 1999', 25.0, 'Wine', 5.00),
(2, 'Stella Rosa - Bottle', 'Distilled since 1999', 25.0, 'Wine', 35.00),
(3, 'Barefoot Wine Moscato - Glass', 'Best Wine in the western hemisphere!', 20.0, 'Wine', 5.00),
(4, 'Barefoot Wine Moscato - Bottle', 'Best Wine in the western hemisphere!', 20.0, 'Wine', 35.00),
(5, 'Apothic Red - Bottle', 'Apothic Red is a red wine that is great with medium-rare steaks.', 25.0, 'Wine', 40.00);

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
