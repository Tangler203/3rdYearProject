-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2016 at 03:34 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `storedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `custId` int(11) NOT NULL AUTO_INCREMENT,
  `productlist` varchar(50) DEFAULT NULL,
  `price` double DEFAULT NULL,
  PRIMARY KEY (`custId`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`custId`, `productlist`, `price`) VALUES
(1, '1 2 3 4 5 6 7 8 10 11 12 13 14 15 16 17 18 19 20', 1704.81),
(2, '2 4 5 7 10 12 13 15 17 19', 984.9),
(3, '1 5 7 12 13 20', 699.94),
(4, '2 5 6 9 11 12 15 19', 799.92);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) DEFAULT NULL,
  `Price` double DEFAULT NULL,
  `Category` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Id`, `Name`, `Price`, `Category`) VALUES
(1, 'Razer Mamba Tournament Edition', 89.99, 'Gaming Mouse'),
(2, 'Logitech G602 Wireless Gaming Mouse', 54.99, 'Gaming Mouse'),
(3, 'Corsair Gaming M65 RGB FPS Gaming Mouse', 49.99, 'Gaming Mouse'),
(4, 'Razer DeathAdder Chroma', 69.99, 'Gaming Mouse'),
(5, 'Roccat Kone XTD Gaming Mouse', 149.99, 'Gaming Mouse'),
(6, 'Logitech Wireless Gaming Headset', 79.99, 'Headset'),
(7, 'HyperX Cloud II Gaming Headset', 119.99, 'Headset'),
(8, 'Razer Kraken 7.1 Gaming Headset', 99.99, 'Headset'),
(9, 'Etekcity Gaming Headset', 79.99, 'Headset'),
(10, 'Sennheiser Game Zero Gaming Headset', 179.99, 'Headset'),
(11, 'Razer BlackWidow Gaming Keyboard', 169.99, 'Keyboard'),
(12, 'Corsair Gaming K70 Mechanical Gaming Keyboard', 189.99, 'Keyboard'),
(13, 'Logitech G710 Mechanical Gaming Keyboard', 99.99, 'Keyboard'),
(14, 'Roccat ISKU FX Keyboard', 84.99, 'Keyboard'),
(15, 'EagleTec K104 Wireless Keybard', 24.99, 'Keyboard'),
(16, 'Xbox One Controller', 44.99, 'Controller'),
(17, 'PS4 Controller', 44.99, 'Controller'),
(18, 'WiiU Pro Controller', 49.99, 'Controller'),
(19, 'Xbox 360 Wired Controller', 49.99, 'Controller'),
(20, 'PS3 Controller', 49.99, 'Controller');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
