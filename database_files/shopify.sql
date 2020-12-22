-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 07, 2020 at 11:08 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopify`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `i_id` int(11) NOT NULL AUTO_INCREMENT,
  `i_name` varchar(255) NOT NULL,
  `i_price` int(11) NOT NULL,
  `i_cate` enum('computers','laptops','cameras','hardwares','smartphones','tvs','car_electronics','games','accessories') NOT NULL,
  `i_brand` enum('philips','huawei','sony','samsung','lenovo','astro','mi','transcend','apple','luna','rapoo','canon','gembird','nokia','digitus','google','oneplus') NOT NULL,
  `i_color` enum('red','blue','silver','black','green','pink','brawn','yellow','voilet','white') NOT NULL,
  `img_path` varchar(255) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`i_id`, `i_name`, `i_price`, `i_cate`, `i_brand`, `i_color`, `img_path`) VALUES
(1, 'Philips BT6900A', 13500, 'accessories', 'philips', 'green', 'new_5.jpg'),
(2, 'Huawei MediaPad', 13500, 'smartphones', 'huawei', 'white', 'featured_1.png'),
(3, 'Sony MDRZX310W', 13500, 'accessories', 'sony', 'white', 'featured_3.png'),
(4, 'Samsung J330F', 13500, 'smartphones', 'samsung', 'silver', 'featured_6.png'),
(5, 'Lenovo IdeaPad', 33999, 'laptops', 'lenovo', 'white', 'featured_7.png'),
(6, 'Astro M2 Black', 4599, 'accessories', 'astro', 'black', 'new_1.jpg'),
(7, 'Transcend T.Sonic', 3599, 'accessories', 'transcend', 'white', 'new_2.jpg'),
(8, 'Xiaomi Band 2', 2999, 'accessories', 'mi', 'black', 'new_3.jpg'),
(9, 'Rapoo 7100p Gray', 1599, 'hardwares', 'rapoo', 'silver', 'new_7.jpg'),
(10, 'Gembird SPK-103', 3999, 'car_electronics', 'gembird', 'black', 'shop_2.jpg'),
(11, 'Apple iPod shuffle', 19567, 'accessories', 'apple', 'pink', 'featured_2.png'),
(12, 'LUNA Smartphone', 19576, 'smartphones', 'luna', 'silver', 'featured_4.png'),
(13, 'Canon IXUS 175', 19567, 'cameras', 'canon', 'silver', 'shop_1.jpg'),
(14, 'Canon STM Kit', 19576, 'cameras', 'canon', 'white', 'featured_5.png'),
(15, 'Digitus EDNET', 19567, 'accessories', 'digitus', 'pink', 'featured_8.png'),
(16, 'Rapoo T8 White', 19576, 'hardwares', 'rapoo', 'white', 'new_4.jpg'),
(17, 'Nokia 310', 8599, 'smartphones', 'nokia', 'silver', 'new_6.jpg'),
(18, 'Canon EF', 19576, 'cameras', 'canon', 'white', 'new_8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `mobno` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mobno` (`mobno`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`, `mobno`) VALUES
(1, 'Madan', 'madan@gmail.com', 'madaN@143', '9119314520'),
(2, 'madan234', 'madan637@gmail.com', 'Abcd@143', '2143658709'),
(3, 'madab', 'madab@gmail.com', 'Madab@143', '5432167890'),
(4, 'rishabh', 'rishu@gmail.com', 'Rishu@143', '9078563412'),
(5, '35345#@@$#@$', 'madan@gmail.cfv', 'Adcs@143', '1234565432'),
(6, 'mhjgh', 'madan123@gmail.com', 'Abcd@143', '4321123456'),
(7, 'nbg#$%$%', 'madan543@gmail.com', 'Asdf@143', '4321567809'),
(8, 'Wany', 'wany@gngdf.mjn', 'Wesd@1324', '1234321567'),
(9, 'Zomi', 'xsdf@gvbfg.mk', 'Wase@13456', '4352468954'),
(10, 'madan', 'ramesh@gmail.com', 'ramesh@143A', '1234567890'),
(11, 'madan', 'gfghfg@fhgf.cbj', 'Sfdf@143', '4564657654');

-- --------------------------------------------------------

--
-- Table structure for table `user_items`
--

DROP TABLE IF EXISTS `user_items`;
CREATE TABLE IF NOT EXISTS `user_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `status` enum('Added to wish','Added to cart','Confirmed') NOT NULL,
  `it_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_items`
--

INSERT INTO `user_items` (`id`, `u_id`, `status`, `it_id`) VALUES
(6, 1, 'Confirmed', 2),
(5, 1, 'Added to wish', 1),
(3, 1, 'Confirmed', 7),
(4, 1, 'Confirmed', 8),
(7, 1, 'Added to cart', 2),
(8, 1, 'Added to cart', 5),
(9, 1, 'Added to cart', 15),
(10, 1, 'Added to cart', 13),
(11, 10, 'Added to wish', 1),
(17, 4, 'Added to cart', 2),
(13, 11, 'Confirmed', 2),
(16, 4, 'Added to cart', 1),
(15, 11, 'Confirmed', 8);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
