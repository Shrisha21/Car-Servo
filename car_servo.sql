-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2019 at 08:43 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `car servo`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `no_of_users`()
    NO SQL
select no from noofusers$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `user_name` varchar(20) NOT NULL DEFAULT '',
  `accessories_name` varchar(40) NOT NULL DEFAULT '',
  `quantity` int(11) DEFAULT NULL,
  `price` double(10,2) DEFAULT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`user_name`,`accessories_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `Full_Name` varchar(30) NOT NULL,
  `Feedback` varchar(10000) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Full_Name`, `Feedback`, `Date`) VALUES
('Shri', 'Superb', '2018-11-14'),
('Shri', 'Good', '2018-11-15'),
('Yashas', 'better', '2018-11-15'),
('Shri', 'Better', '2018-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `modification`
--

CREATE TABLE IF NOT EXISTS `modification` (
  `user_name` varchar(50) NOT NULL,
  `current_car` varchar(20) NOT NULL,
  `Modification_type` varchar(100) NOT NULL,
  `other_options` varchar(30) NOT NULL,
  `color` varchar(30) NOT NULL,
  `other_colors` varchar(20) NOT NULL,
  `other_req` varchar(50) NOT NULL,
  `garage_name` varchar(50) NOT NULL,
  `id` int(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `modification`
--

INSERT INTO `modification` (`user_name`, `current_car`, `Modification_type`, `other_options`, `color`, `other_colors`, `other_req`, `garage_name`, `id`) VALUES
('Shri', 'Baleno', 'Stereo Systems,Car Graphics', 'Fog Lamps', 'Black', 'Black Flames', 'Engine Booster', 'Auto Matrix', 6),
('Shri', 'Ciaz', 'Sun Roof,Spoilers', 'Backlight', 'Maroon', 'Black Flames', 'Interior Polish', 'Auto Matrix', 7),
('Yashas', 'Baleno', 'Stereo Systems', '', ' ', '', '', 'Century auto works', 8),
('Shri', 'Baleno', 'Stereo Systems,Car Graphics', 'Fog Lamps', ' ', '', '', 'Auto Matrix', 9),
('Yashas', 'Baleno', 'Sun Roof', '', ' ', '', '', 'Century auto works', 10),
('Yashas', 'Ciaz', '', '', 'Black', '', '', 'Century auto works', 11),
('Sumana', 'Indica', 'Car Graphics', '', 'Blue', 'Black shades', '', 'Century auto works', 12);

-- --------------------------------------------------------

--
-- Table structure for table `noofusers`
--

CREATE TABLE IF NOT EXISTS `noofusers` (
  `no` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noofusers`
--

INSERT INTO `noofusers` (`no`) VALUES
(9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(250) NOT NULL,
  `price` varchar(255) NOT NULL,
  `stock` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`, `stock`) VALUES
(56, 'Alloy wheel', 'pics/1571325883alloy mag wheel.jpg', '10000', 7),
(57, 'Bass Booster', 'pics/15713262051542261394car speaker.jpg', '10000', 5),
(58, 'Gold Mag Wheel', 'pics/1571326317gold color mag wheel.jpg', '15000', 4),
(59, 'Stereo Sets', 'pics/1571326371ss.jpg', '5000', 1),
(60, 'Bumper', 'pics/15718327631542273143yellow bumper.jpg', '10000', 0),
(61, 'RajiniKanth Doll', 'pics/1571832910raj.jpg', '300', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `Full_Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `psw_repeat` varchar(30) NOT NULL,
  `Car_name` varchar(20) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`Full_Name`, `Email`, `Password`, `psw_repeat`, `Car_name`, `id`) VALUES
('Shri', 'shrishadiga1@gmail.com', '123', '123', 'XUV 500', 8),
('Yashas ', 'yashassc@gmail.com', '111', '111', 'Baleno', 9),
('thara', 'thara@gmail.com', '1234', '1234', 'dzire', 10),
('Sumana', 's@gmail.com', '1234', '1234', 'Baleno', 11),
('Pradeep', 'pradi@gmail.com', '1234', '1234', 'Baleno', 12),
('Yashas S', 'yashas@gmail.com', '111', '111', 'SUV', 13),
('Pradeep', 'pradi1@gmail.com', '111', '111', 'Ignis', 14),
('Yashas S', 'pradi11@gmail.com', '11', '11', 'Baleno', 15),
('Navyu', 'navyashreer24@gmail.com', 'asd', 'asd', 'Tavera', 16);

--
-- Triggers `user_details`
--
DROP TRIGGER IF EXISTS `update_users`;
DELIMITER //
CREATE TRIGGER `update_users` AFTER INSERT ON `user_details`
 FOR EACH ROW update noofusers set no=no+1
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `wash_details`
--

CREATE TABLE IF NOT EXISTS `wash_details` (
  `Full_Name` varchar(30) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `cno` varchar(20) NOT NULL,
  `ctype` varchar(20) NOT NULL,
  `wtype` varchar(20) NOT NULL,
  `datew` date NOT NULL,
  `gd` varchar(35) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `wash_details`
--

INSERT INTO `wash_details` (`Full_Name`, `cname`, `cno`, `ctype`, `wtype`, `datew`, `gd`, `id`) VALUES
('Rajath', 'XUV 500', 'KA 14 X 143', 'sedan', 'complete', '2018-11-29', 'nexa', 8),
('Yashas', 'Ignis', 'KA 14 Z 2685', 'hatch', 'complete', '2018-11-28', 'supreme', 9),
('Shrisha ', 'S-cross', 'KA 14 Q 1128', 'sedan', 'complete', '2018-11-18', 'nexa', 13),
('Shri', 'Ignis', 'KA 14 Z 8421', 'hatch', 'exterior', '2018-11-17', 'nexa', 17),
('Sumana', 'Indica', 'KA 14 A 5676', 'hatch', 'interior', '2018-12-28', 'bosch', 18),
('Yashas S', 'Indica', 'KA 14 A 5676', 'hatch', 'complete', '2018-12-29', 'dc', 19),
('Sumana', 'Indica', 'KA 14 A 5676', 'hatch', 'interior', '2018-12-02', 'bosch', 20),
('Sumana', 'Indica', 'KA 14 A 5676', 'hatch', 'interior', '2018-12-06', 'bosch', 21),
('Sumana', 'Indica', 'KA 14 A 5676', 'hatch', 'interior', '2018-12-06', 'bosch', 22),
('Sumana', 'Indica', 'KA 14 A 5676', 'hatch', 'interior', '2018-12-04', 'bosch', 23);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
