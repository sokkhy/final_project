-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2018 at 03:12 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkeybest`
--

-- --------------------------------------------------------

--
-- Table structure for table `adidas`
--

CREATE TABLE `adidas` (
  `id` int(50) NOT NULL,
  `shirtCode` varchar(20) NOT NULL,
  `shirtName` varchar(200) NOT NULL,
  `shirtSize` varchar(200) NOT NULL,
  `Price` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `RegisterDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adidas`
--

INSERT INTO `adidas` (`id`, `shirtCode`, `shirtName`, `shirtSize`, `Price`, `image`, `RegisterDate`) VALUES
(13, 'adidas_01', 'adidas01', 'M,L,S', '35$', 'adidas Men Basketball All World Short Sleeve Tee 38$.jpg', '2017-12-27 03:04:43'),
(14, 'adidas_03', 'fdsfsfdf', 'dsfdsfdfdsfs', 'fsdfs', 'adidas Men Soccer Estro Jersey 35$.jpg', '2018-01-18 02:41:38'),
(16, 'adidas_02', 'sdf', 'fsd', 'fsdf', 'adidas Men Basketball All World Short Sleeve Tee 38$.jpg', '2018-01-18 06:32:56'),
(17, 'adidas_04', 'sdfsdsdsf', 'dsfdsfdfddsf', 'dd', 'adidas Men Climalite Ultimate Short Sleeve T-Shirt 30$.jpg', '2018-01-18 06:33:04'),
(18, 'adidas_05', 'sfsfdsf', 'sdfdsfdsfdfd', 'fdfd', 'adidas Men Club Tee  38$.jpg', '2018-01-18 06:33:15'),
(19, 'adidas_06', 'fdsfsddsfds', 'fdffdsfds', 'fdsfdsf', 'adidas Men Long Sleeve Graphic Tee 35$.jpg', '2018-01-18 06:33:26'),
(20, 'adidas_07', 'fdsfdsfdsfdsfdsfdsfdsfds', 'fdsfdsfdsfds', 'fsdfsd', 'adidas Men Originals Trefoil Tee 35$.jpg', '2018-01-18 06:33:34'),
(21, 'adidas_08', 'sdfsfsf', 'fsfsdff', 'fs', 'adidas Men Techfit Base Layer Long Sleeve 38$.jpg', '2018-01-18 06:33:45'),
(22, 'adidas_09', 'fsdfsdf', 'ff', 'f', 'adidas Men Training Ultimate Short Sleeve V Neck Tee 35$.jpg', '2018-01-18 06:33:58'),
(23, 'adidas_10', 'fsf', 'fwf', 'fdsfsf', 'adidas Men Training Essential Colorblock Tech Tee 30$.jpg', '2018-01-18 06:34:08'),
(24, 'supreme_11', 'sfsdfsf', 'ffd', 'f', 'adidas Originals Men Trefoil Tee 35$.jpg', '2018-01-18 06:34:20'),
(25, 'diesel_12', 'dsfsdfdsfds', 'fdsfdsfsfds', 'fdsfd', 'adidas_Boys_Coast_28$.jpg', '2018-01-18 06:34:30'),
(26, 'adidas_13', 'dfsdsdfsdf', 'sdfdsfdsfdsf', 'sdfdsf', 'Adidas_Big_Boys Shirt25$.jpg', '2018-01-18 06:34:39'),
(27, 'dsfd', 'dsfdsfdf', 'dfdfdfdf', 'df', 'adidas Men Training Ultimate Short Sleeve Tee 38$.jpg', '2018-01-22 02:01:48'),
(28, 'fsdfdsff', 'dfdfdfdf', 'dsfsdsdsfd', 'fdsfds', 'Adidas_Big_Boys Shirt25$.jpg', '2018-01-22 02:03:21');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` varchar(50) NOT NULL,
  `brand` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `brand`) VALUES
('1', 'Adidas'),
('8', 'Diesel'),
('3', 'Gucci'),
('9', 'Hugo Boss'),
('2', 'Nike'),
('4', 'Prada'),
('11', 'Puma'),
('5', 'Supreme'),
('6', 'Tommy Hilfiger'),
('10', 'Under Armour'),
('7', 'Versace');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(20) NOT NULL,
  `customer_id` varchar(20) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `customer_address` varchar(200) NOT NULL,
  `customer_phone` varchar(50) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_id`, `customer_name`, `customer_address`, `customer_phone`, `customer_email`, `customer_password`) VALUES
(6, 'thy124', 'Thy', 'PP', '123', 'khysok95@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `diesel`
--

CREATE TABLE `diesel` (
  `id` int(50) NOT NULL,
  `shirtCode` varchar(20) NOT NULL,
  `shirtName` varchar(200) NOT NULL,
  `shirtSize` varchar(200) NOT NULL,
  `Price` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `RegisterDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diesel`
--

INSERT INTO `diesel` (`id`, `shirtCode`, `shirtName`, `shirtSize`, `Price`, `image`, `RegisterDate`) VALUES
(13, 'diesel_01', 'diesel01', 'M,L,S', '35$', 'adidas Men Basketball All World Short Sleeve Tee 38$.jpg', '2017-12-26 20:04:43'),
(14, 'adidas_03', 'fdsfsfdf', 'dsfdsfdfdsfs', 'fsdfs', 'adidas Men Soccer Estro Jersey 35$.jpg', '2018-01-17 19:41:38'),
(16, 'adidas_02', 'sdf', 'fsd', 'fsdf', 'adidas Men Basketball All World Short Sleeve Tee 38$.jpg', '2018-01-17 23:32:56'),
(17, 'adidas_04', 'sdfsdsdsf', 'dsfdsfdfddsf', 'dd', 'adidas Men Climalite Ultimate Short Sleeve T-Shirt 30$.jpg', '2018-01-17 23:33:04'),
(18, 'adidas_05', 'sfsfdsf', 'sdfdsfdsfdfd', 'fdfd', 'adidas Men Club Tee  38$.jpg', '2018-01-17 23:33:15'),
(19, 'adidas_06', 'fdsfsddsfds', 'fdffdsfds', 'fdsfdsf', 'adidas Men Long Sleeve Graphic Tee 35$.jpg', '2018-01-17 23:33:26'),
(20, 'adidas_07', 'fdsfdsfdsfdsfdsfdsfdsfds', 'fdsfdsfdsfds', 'fsdfsd', 'adidas Men Originals Trefoil Tee 35$.jpg', '2018-01-17 23:33:34'),
(21, 'adidas_08', 'sdfsfsf', 'fsfsdff', 'fs', 'adidas Men Techfit Base Layer Long Sleeve 38$.jpg', '2018-01-17 23:33:45'),
(22, 'adidas_09', 'fsdfsdf', 'ff', 'f', 'adidas Men Training Ultimate Short Sleeve V Neck Tee 35$.jpg', '2018-01-17 23:33:58'),
(23, 'adidas_10', 'fsf', 'fwf', 'fdsfsf', 'adidas Men Training Essential Colorblock Tech Tee 30$.jpg', '2018-01-17 23:34:08'),
(24, 'supreme_11', 'sfsdfsf', 'ffd', 'f', 'adidas Originals Men Trefoil Tee 35$.jpg', '2018-01-17 23:34:20'),
(25, 'diesel_12', 'dsfsdfdsfds', 'fdsfdsfsfds', 'fdsfd', 'adidas_Boys_Coast_28$.jpg', '2018-01-17 23:34:30'),
(26, 'adidas_13', 'dfsdsdfsdf', 'sdfdsfdsfdsf', 'sdfdsf', 'Adidas_Big_Boys Shirt25$.jpg', '2018-01-17 23:34:39'),
(27, 'dsfd', 'dsfdsfdf', 'dfdfdfdf', 'df', 'adidas Men Training Ultimate Short Sleeve Tee 38$.jpg', '2018-01-21 19:01:48'),
(28, 'fsdfdsff', 'dfdfdfdf', 'dsfsdsdsfd', 'fdsfds', 'Adidas_Big_Boys Shirt25$.jpg', '2018-01-21 19:03:21');

-- --------------------------------------------------------

--
-- Table structure for table `gucci`
--

CREATE TABLE `gucci` (
  `id` int(50) NOT NULL,
  `shirtCode` varchar(20) NOT NULL,
  `shirtName` varchar(200) NOT NULL,
  `shirtSize` varchar(200) NOT NULL,
  `Price` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `RegisterDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gucci`
--

INSERT INTO `gucci` (`id`, `shirtCode`, `shirtName`, `shirtSize`, `Price`, `image`, `RegisterDate`) VALUES
(13, 'gucci_01', 'gucci01', 'M,L,S', '35$', 'adidas Men Basketball All World Short Sleeve Tee 38$.jpg', '2017-12-26 20:04:43'),
(14, 'adidas_03', 'fdsfsfdf', 'dsfdsfdfdsfs', 'fsdfs', 'adidas Men Soccer Estro Jersey 35$.jpg', '2018-01-17 19:41:38'),
(16, 'adidas_02', 'sdf', 'fsd', 'fsdf', 'adidas Men Basketball All World Short Sleeve Tee 38$.jpg', '2018-01-17 23:32:56'),
(17, 'adidas_04', 'sdfsdsdsf', 'dsfdsfdfddsf', 'dd', 'adidas Men Climalite Ultimate Short Sleeve T-Shirt 30$.jpg', '2018-01-17 23:33:04'),
(18, 'adidas_05', 'sfsfdsf', 'sdfdsfdsfdfd', 'fdfd', 'adidas Men Club Tee  38$.jpg', '2018-01-17 23:33:15'),
(19, 'adidas_06', 'fdsfsddsfds', 'fdffdsfds', 'fdsfdsf', 'adidas Men Long Sleeve Graphic Tee 35$.jpg', '2018-01-17 23:33:26'),
(20, 'adidas_07', 'fdsfdsfdsfdsfdsfdsfdsfds', 'fdsfdsfdsfds', 'fsdfsd', 'adidas Men Originals Trefoil Tee 35$.jpg', '2018-01-17 23:33:34'),
(21, 'adidas_08', 'sdfsfsf', 'fsfsdff', 'fs', 'adidas Men Techfit Base Layer Long Sleeve 38$.jpg', '2018-01-17 23:33:45'),
(22, 'adidas_09', 'fsdfsdf', 'ff', 'f', 'adidas Men Training Ultimate Short Sleeve V Neck Tee 35$.jpg', '2018-01-17 23:33:58'),
(23, 'adidas_10', 'fsf', 'fwf', 'fdsfsf', 'adidas Men Training Essential Colorblock Tech Tee 30$.jpg', '2018-01-17 23:34:08'),
(24, 'supreme_11', 'sfsdfsf', 'ffd', 'f', 'adidas Originals Men Trefoil Tee 35$.jpg', '2018-01-17 23:34:20'),
(25, 'diesel_12', 'dsfsdfdsfds', 'fdsfdsfsfds', 'fdsfd', 'adidas_Boys_Coast_28$.jpg', '2018-01-17 23:34:30'),
(26, 'adidas_13', 'dfsdsdfsdf', 'sdfdsfdsfdsf', 'sdfdsf', 'Adidas_Big_Boys Shirt25$.jpg', '2018-01-17 23:34:39'),
(27, 'dsfd', 'dsfdsfdf', 'dfdfdfdf', 'df', 'adidas Men Training Ultimate Short Sleeve Tee 38$.jpg', '2018-01-21 19:01:48'),
(28, 'fsdfdsff', 'dfdfdfdf', 'dsfsdsdsfd', 'fdsfds', 'Adidas_Big_Boys Shirt25$.jpg', '2018-01-21 19:03:21');

-- --------------------------------------------------------

--
-- Table structure for table `hugoboss`
--

CREATE TABLE `hugoboss` (
  `id` int(50) NOT NULL,
  `shirtCode` varchar(20) NOT NULL,
  `shirtName` varchar(200) NOT NULL,
  `shirtSize` varchar(200) NOT NULL,
  `Price` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `RegisterDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hugoboss`
--

INSERT INTO `hugoboss` (`id`, `shirtCode`, `shirtName`, `shirtSize`, `Price`, `image`, `RegisterDate`) VALUES
(13, 'hugoboss_01', 'hugoboss01', 'M,L,S', '35$', 'adidas Men Basketball All World Short Sleeve Tee 38$.jpg', '2017-12-26 20:04:43'),
(14, 'adidas_03', 'fdsfsfdf', 'dsfdsfdfdsfs', 'fsdfs', 'adidas Men Soccer Estro Jersey 35$.jpg', '2018-01-17 19:41:38'),
(16, 'adidas_02', 'sdf', 'fsd', 'fsdf', 'adidas Men Basketball All World Short Sleeve Tee 38$.jpg', '2018-01-17 23:32:56'),
(17, 'adidas_04', 'sdfsdsdsf', 'dsfdsfdfddsf', 'dd', 'adidas Men Climalite Ultimate Short Sleeve T-Shirt 30$.jpg', '2018-01-17 23:33:04'),
(18, 'adidas_05', 'sfsfdsf', 'sdfdsfdsfdfd', 'fdfd', 'adidas Men Club Tee  38$.jpg', '2018-01-17 23:33:15'),
(19, 'adidas_06', 'fdsfsddsfds', 'fdffdsfds', 'fdsfdsf', 'adidas Men Long Sleeve Graphic Tee 35$.jpg', '2018-01-17 23:33:26'),
(20, 'adidas_07', 'fdsfdsfdsfdsfdsfdsfdsfds', 'fdsfdsfdsfds', 'fsdfsd', 'adidas Men Originals Trefoil Tee 35$.jpg', '2018-01-17 23:33:34'),
(21, 'adidas_08', 'sdfsfsf', 'fsfsdff', 'fs', 'adidas Men Techfit Base Layer Long Sleeve 38$.jpg', '2018-01-17 23:33:45'),
(22, 'adidas_09', 'fsdfsdf', 'ff', 'f', 'adidas Men Training Ultimate Short Sleeve V Neck Tee 35$.jpg', '2018-01-17 23:33:58'),
(23, 'adidas_10', 'fsf', 'fwf', 'fdsfsf', 'adidas Men Training Essential Colorblock Tech Tee 30$.jpg', '2018-01-17 23:34:08'),
(24, 'supreme_11', 'sfsdfsf', 'ffd', 'f', 'adidas Originals Men Trefoil Tee 35$.jpg', '2018-01-17 23:34:20'),
(25, 'diesel_12', 'dsfsdfdsfds', 'fdsfdsfsfds', 'fdsfd', 'adidas_Boys_Coast_28$.jpg', '2018-01-17 23:34:30'),
(26, 'adidas_13', 'dfsdsdfsdf', 'sdfdsfdsfdsf', 'sdfdsf', 'Adidas_Big_Boys Shirt25$.jpg', '2018-01-17 23:34:39'),
(27, 'dsfd', 'dsfdsfdf', 'dfdfdfdf', 'df', 'adidas Men Training Ultimate Short Sleeve Tee 38$.jpg', '2018-01-21 19:01:48'),
(28, 'fsdfdsff', 'dfdfdfdf', 'dsfsdsdsfd', 'fdsfds', 'Adidas_Big_Boys Shirt25$.jpg', '2018-01-21 19:03:21');

-- --------------------------------------------------------

--
-- Table structure for table `nike`
--

CREATE TABLE `nike` (
  `id` int(50) NOT NULL,
  `shirtCode` varchar(20) NOT NULL,
  `shirtName` varchar(200) NOT NULL,
  `shirtSize` varchar(200) NOT NULL,
  `Price` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `RegisterDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nike`
--

INSERT INTO `nike` (`id`, `shirtCode`, `shirtName`, `shirtSize`, `Price`, `image`, `RegisterDate`) VALUES
(13, 'nike_01', 'nike01', 'M,L,S', '35$', 'adidas Men Basketball All World Short Sleeve Tee 38$.jpg', '2017-12-26 20:04:43'),
(14, 'adidas_03', 'fdsfsfdf', 'dsfdsfdfdsfs', 'fsdfs', 'adidas Men Soccer Estro Jersey 35$.jpg', '2018-01-17 19:41:38'),
(16, 'adidas_02', 'sdf', 'fsd', 'fsdf', 'adidas Men Basketball All World Short Sleeve Tee 38$.jpg', '2018-01-17 23:32:56'),
(17, 'adidas_04', 'sdfsdsdsf', 'dsfdsfdfddsf', 'dd', 'adidas Men Climalite Ultimate Short Sleeve T-Shirt 30$.jpg', '2018-01-17 23:33:04'),
(18, 'adidas_05', 'sfsfdsf', 'sdfdsfdsfdfd', 'fdfd', 'adidas Men Club Tee  38$.jpg', '2018-01-17 23:33:15'),
(19, 'adidas_06', 'fdsfsddsfds', 'fdffdsfds', 'fdsfdsf', 'adidas Men Long Sleeve Graphic Tee 35$.jpg', '2018-01-17 23:33:26'),
(20, 'adidas_07', 'fdsfdsfdsfdsfdsfdsfdsfds', 'fdsfdsfdsfds', 'fsdfsd', 'adidas Men Originals Trefoil Tee 35$.jpg', '2018-01-17 23:33:34'),
(21, 'adidas_08', 'sdfsfsf', 'fsfsdff', 'fs', 'adidas Men Techfit Base Layer Long Sleeve 38$.jpg', '2018-01-17 23:33:45'),
(22, 'adidas_09', 'fsdfsdf', 'ff', 'f', 'adidas Men Training Ultimate Short Sleeve V Neck Tee 35$.jpg', '2018-01-17 23:33:58'),
(23, 'adidas_10', 'fsf', 'fwf', 'fdsfsf', 'adidas Men Training Essential Colorblock Tech Tee 30$.jpg', '2018-01-17 23:34:08'),
(24, 'supreme_11', 'sfsdfsf', 'ffd', 'f', 'adidas Originals Men Trefoil Tee 35$.jpg', '2018-01-17 23:34:20'),
(25, 'diesel_12', 'dsfsdfdsfds', 'fdsfdsfsfds', 'fdsfd', 'adidas_Boys_Coast_28$.jpg', '2018-01-17 23:34:30'),
(26, 'adidas_13', 'dfsdsdfsdf', 'sdfdsfdsfdsf', 'sdfdsf', 'Adidas_Big_Boys Shirt25$.jpg', '2018-01-17 23:34:39'),
(27, 'dsfd', 'dsfdsfdf', 'dfdfdfdf', 'df', 'adidas Men Training Ultimate Short Sleeve Tee 38$.jpg', '2018-01-21 19:01:48'),
(28, 'fsdfdsff', 'dfdfdfdf', 'dsfsdsdsfd', 'fdsfds', 'Adidas_Big_Boys Shirt25$.jpg', '2018-01-21 19:03:21');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `customer_id` int(20) NOT NULL,
  `total_price` varchar(20) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`customer_id`, `total_price`, `created`, `modified`) VALUES
(1, '35', '2018-01-30 09:32:53', '2018-01-30 09:32:53'),
(3, '35', '2018-01-30 06:00:57', '2018-01-30 06:00:57');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_id` int(20) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `quantity` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_id`, `product_id`, `quantity`) VALUES
(1, 'adidas_01', '1'),
(3, 'adidas_01', '1');

-- --------------------------------------------------------

--
-- Table structure for table `prada`
--

CREATE TABLE `prada` (
  `id` int(50) NOT NULL,
  `shirtCode` varchar(20) NOT NULL,
  `shirtName` varchar(200) NOT NULL,
  `shirtSize` varchar(200) NOT NULL,
  `Price` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `RegisterDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prada`
--

INSERT INTO `prada` (`id`, `shirtCode`, `shirtName`, `shirtSize`, `Price`, `image`, `RegisterDate`) VALUES
(13, 'prada_01', 'prada01', 'M,L,S', '35$', 'adidas Men Basketball All World Short Sleeve Tee 38$.jpg', '2017-12-26 20:04:43'),
(14, 'adidas_03', 'fdsfsfdf', 'dsfdsfdfdsfs', 'fsdfs', 'adidas Men Soccer Estro Jersey 35$.jpg', '2018-01-17 19:41:38'),
(16, 'adidas_02', 'sdf', 'fsd', 'fsdf', 'adidas Men Basketball All World Short Sleeve Tee 38$.jpg', '2018-01-17 23:32:56'),
(17, 'adidas_04', 'sdfsdsdsf', 'dsfdsfdfddsf', 'dd', 'adidas Men Climalite Ultimate Short Sleeve T-Shirt 30$.jpg', '2018-01-17 23:33:04'),
(18, 'adidas_05', 'sfsfdsf', 'sdfdsfdsfdfd', 'fdfd', 'adidas Men Club Tee  38$.jpg', '2018-01-17 23:33:15'),
(19, 'adidas_06', 'fdsfsddsfds', 'fdffdsfds', 'fdsfdsf', 'adidas Men Long Sleeve Graphic Tee 35$.jpg', '2018-01-17 23:33:26'),
(20, 'adidas_07', 'fdsfdsfdsfdsfdsfdsfdsfds', 'fdsfdsfdsfds', 'fsdfsd', 'adidas Men Originals Trefoil Tee 35$.jpg', '2018-01-17 23:33:34'),
(21, 'adidas_08', 'sdfsfsf', 'fsfsdff', 'fs', 'adidas Men Techfit Base Layer Long Sleeve 38$.jpg', '2018-01-17 23:33:45'),
(22, 'adidas_09', 'fsdfsdf', 'ff', 'f', 'adidas Men Training Ultimate Short Sleeve V Neck Tee 35$.jpg', '2018-01-17 23:33:58'),
(23, 'adidas_10', 'fsf', 'fwf', 'fdsfsf', 'adidas Men Training Essential Colorblock Tech Tee 30$.jpg', '2018-01-17 23:34:08'),
(24, 'supreme_11', 'sfsdfsf', 'ffd', 'f', 'adidas Originals Men Trefoil Tee 35$.jpg', '2018-01-17 23:34:20'),
(25, 'diesel_12', 'dsfsdfdsfds', 'fdsfdsfsfds', 'fdsfd', 'adidas_Boys_Coast_28$.jpg', '2018-01-17 23:34:30'),
(26, 'adidas_13', 'dfsdsdfsdf', 'sdfdsfdsfdsf', 'sdfdsf', 'Adidas_Big_Boys Shirt25$.jpg', '2018-01-17 23:34:39'),
(27, 'dsfd', 'dsfdsfdf', 'dfdfdfdf', 'df', 'adidas Men Training Ultimate Short Sleeve Tee 38$.jpg', '2018-01-21 19:01:48'),
(28, 'fsdfdsff', 'dfdfdfdf', 'dsfsdsdsfd', 'fdsfds', 'Adidas_Big_Boys Shirt25$.jpg', '2018-01-21 19:03:21');

-- --------------------------------------------------------

--
-- Table structure for table `puma`
--

CREATE TABLE `puma` (
  `id` int(50) NOT NULL,
  `shirtCode` varchar(20) NOT NULL,
  `shirtName` varchar(200) NOT NULL,
  `shirtSize` varchar(200) NOT NULL,
  `Price` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `RegisterDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `puma`
--

INSERT INTO `puma` (`id`, `shirtCode`, `shirtName`, `shirtSize`, `Price`, `image`, `RegisterDate`) VALUES
(13, 'puma_01', 'puma01', 'M,L,S', '35$', 'adidas Men Basketball All World Short Sleeve Tee 38$.jpg', '2017-12-26 20:04:43'),
(14, 'adidas_03', 'fdsfsfdf', 'dsfdsfdfdsfs', 'fsdfs', 'adidas Men Soccer Estro Jersey 35$.jpg', '2018-01-17 19:41:38'),
(16, 'adidas_02', 'sdf', 'fsd', 'fsdf', 'adidas Men Basketball All World Short Sleeve Tee 38$.jpg', '2018-01-17 23:32:56'),
(17, 'adidas_04', 'sdfsdsdsf', 'dsfdsfdfddsf', 'dd', 'adidas Men Climalite Ultimate Short Sleeve T-Shirt 30$.jpg', '2018-01-17 23:33:04'),
(18, 'adidas_05', 'sfsfdsf', 'sdfdsfdsfdfd', 'fdfd', 'adidas Men Club Tee  38$.jpg', '2018-01-17 23:33:15'),
(19, 'adidas_06', 'fdsfsddsfds', 'fdffdsfds', 'fdsfdsf', 'adidas Men Long Sleeve Graphic Tee 35$.jpg', '2018-01-17 23:33:26'),
(20, 'adidas_07', 'fdsfdsfdsfdsfdsfdsfdsfds', 'fdsfdsfdsfds', 'fsdfsd', 'adidas Men Originals Trefoil Tee 35$.jpg', '2018-01-17 23:33:34'),
(21, 'adidas_08', 'sdfsfsf', 'fsfsdff', 'fs', 'adidas Men Techfit Base Layer Long Sleeve 38$.jpg', '2018-01-17 23:33:45'),
(22, 'adidas_09', 'fsdfsdf', 'ff', 'f', 'adidas Men Training Ultimate Short Sleeve V Neck Tee 35$.jpg', '2018-01-17 23:33:58'),
(23, 'adidas_10', 'fsf', 'fwf', 'fdsfsf', 'adidas Men Training Essential Colorblock Tech Tee 30$.jpg', '2018-01-17 23:34:08'),
(24, 'supreme_11', 'sfsdfsf', 'ffd', 'f', 'adidas Originals Men Trefoil Tee 35$.jpg', '2018-01-17 23:34:20'),
(25, 'diesel_12', 'dsfsdfdsfds', 'fdsfdsfsfds', 'fdsfd', 'adidas_Boys_Coast_28$.jpg', '2018-01-17 23:34:30'),
(26, 'adidas_13', 'dfsdsdfsdf', 'sdfdsfdsfdsf', 'sdfdsf', 'Adidas_Big_Boys Shirt25$.jpg', '2018-01-17 23:34:39'),
(27, 'dsfd', 'dsfdsfdf', 'dfdfdfdf', 'df', 'adidas Men Training Ultimate Short Sleeve Tee 38$.jpg', '2018-01-21 19:01:48'),
(28, 'fsdfdsff', 'dfdfdfdf', 'dsfsdsdsfd', 'fdsfds', 'Adidas_Big_Boys Shirt25$.jpg', '2018-01-21 19:03:21');

-- --------------------------------------------------------

--
-- Table structure for table `supreme`
--

CREATE TABLE `supreme` (
  `id` int(50) NOT NULL,
  `shirtCode` varchar(20) NOT NULL,
  `shirtName` varchar(200) NOT NULL,
  `shirtSize` varchar(200) NOT NULL,
  `Price` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `RegisterDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supreme`
--

INSERT INTO `supreme` (`id`, `shirtCode`, `shirtName`, `shirtSize`, `Price`, `image`, `RegisterDate`) VALUES
(13, 'supreme_01', 'supreme01', 'M,L,S', '35$', 'adidas Men Basketball All World Short Sleeve Tee 38$.jpg', '2017-12-26 20:04:43'),
(14, 'adidas_03', 'fdsfsfdf', 'dsfdsfdfdsfs', 'fsdfs', 'adidas Men Soccer Estro Jersey 35$.jpg', '2018-01-17 19:41:38'),
(16, 'adidas_02', 'sdf', 'fsd', 'fsdf', 'adidas Men Basketball All World Short Sleeve Tee 38$.jpg', '2018-01-17 23:32:56'),
(17, 'adidas_04', 'sdfsdsdsf', 'dsfdsfdfddsf', 'dd', 'adidas Men Climalite Ultimate Short Sleeve T-Shirt 30$.jpg', '2018-01-17 23:33:04'),
(18, 'adidas_05', 'sfsfdsf', 'sdfdsfdsfdfd', 'fdfd', 'adidas Men Club Tee  38$.jpg', '2018-01-17 23:33:15'),
(19, 'adidas_06', 'fdsfsddsfds', 'fdffdsfds', 'fdsfdsf', 'adidas Men Long Sleeve Graphic Tee 35$.jpg', '2018-01-17 23:33:26'),
(20, 'adidas_07', 'fdsfdsfdsfdsfdsfdsfdsfds', 'fdsfdsfdsfds', 'fsdfsd', 'adidas Men Originals Trefoil Tee 35$.jpg', '2018-01-17 23:33:34'),
(21, 'adidas_08', 'sdfsfsf', 'fsfsdff', 'fs', 'adidas Men Techfit Base Layer Long Sleeve 38$.jpg', '2018-01-17 23:33:45'),
(22, 'adidas_09', 'fsdfsdf', 'ff', 'f', 'adidas Men Training Ultimate Short Sleeve V Neck Tee 35$.jpg', '2018-01-17 23:33:58'),
(23, 'adidas_10', 'fsf', 'fwf', 'fdsfsf', 'adidas Men Training Essential Colorblock Tech Tee 30$.jpg', '2018-01-17 23:34:08'),
(24, 'supreme_11', 'sfsdfsf', 'ffd', 'f', 'adidas Originals Men Trefoil Tee 35$.jpg', '2018-01-17 23:34:20'),
(25, 'diesel_12', 'dsfsdfdsfds', 'fdsfdsfsfds', 'fdsfd', 'adidas_Boys_Coast_28$.jpg', '2018-01-17 23:34:30'),
(26, 'adidas_13', 'dfsdsdfsdf', 'sdfdsfdsfdsf', 'sdfdsf', 'Adidas_Big_Boys Shirt25$.jpg', '2018-01-17 23:34:39'),
(27, 'dsfd', 'dsfdsfdf', 'dfdfdfdf', 'df', 'adidas Men Training Ultimate Short Sleeve Tee 38$.jpg', '2018-01-21 19:01:48'),
(28, 'fsdfdsff', 'dfdfdfdf', 'dsfsdsdsfd', 'fdsfds', 'Adidas_Big_Boys Shirt25$.jpg', '2018-01-21 19:03:21');

-- --------------------------------------------------------

--
-- Table structure for table `tommyhilfiger`
--

CREATE TABLE `tommyhilfiger` (
  `id` int(50) NOT NULL,
  `shirtCode` varchar(20) NOT NULL,
  `shirtName` varchar(200) NOT NULL,
  `shirtSize` varchar(200) NOT NULL,
  `Price` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `RegisterDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tommyhilfiger`
--

INSERT INTO `tommyhilfiger` (`id`, `shirtCode`, `shirtName`, `shirtSize`, `Price`, `image`, `RegisterDate`) VALUES
(13, 'tommyhilfiger_01', 'tommyhilfiger', 'M,L,S', '35$', 'adidas Men Basketball All World Short Sleeve Tee 38$.jpg', '2017-12-26 20:04:43'),
(14, 'adidas_03', 'fdsfsfdf', 'dsfdsfdfdsfs', 'fsdfs', 'adidas Men Soccer Estro Jersey 35$.jpg', '2018-01-17 19:41:38'),
(16, 'adidas_02', 'sdf', 'fsd', 'fsdf', 'adidas Men Basketball All World Short Sleeve Tee 38$.jpg', '2018-01-17 23:32:56'),
(17, 'adidas_04', 'sdfsdsdsf', 'dsfdsfdfddsf', 'dd', 'adidas Men Climalite Ultimate Short Sleeve T-Shirt 30$.jpg', '2018-01-17 23:33:04'),
(18, 'adidas_05', 'sfsfdsf', 'sdfdsfdsfdfd', 'fdfd', 'adidas Men Club Tee  38$.jpg', '2018-01-17 23:33:15'),
(19, 'adidas_06', 'fdsfsddsfds', 'fdffdsfds', 'fdsfdsf', 'adidas Men Long Sleeve Graphic Tee 35$.jpg', '2018-01-17 23:33:26'),
(20, 'adidas_07', 'fdsfdsfdsfdsfdsfdsfdsfds', 'fdsfdsfdsfds', 'fsdfsd', 'adidas Men Originals Trefoil Tee 35$.jpg', '2018-01-17 23:33:34'),
(21, 'adidas_08', 'sdfsfsf', 'fsfsdff', 'fs', 'adidas Men Techfit Base Layer Long Sleeve 38$.jpg', '2018-01-17 23:33:45'),
(22, 'adidas_09', 'fsdfsdf', 'ff', 'f', 'adidas Men Training Ultimate Short Sleeve V Neck Tee 35$.jpg', '2018-01-17 23:33:58'),
(23, 'adidas_10', 'fsf', 'fwf', 'fdsfsf', 'adidas Men Training Essential Colorblock Tech Tee 30$.jpg', '2018-01-17 23:34:08'),
(24, 'supreme_11', 'sfsdfsf', 'ffd', 'f', 'adidas Originals Men Trefoil Tee 35$.jpg', '2018-01-17 23:34:20'),
(25, 'diesel_12', 'dsfsdfdsfds', 'fdsfdsfsfds', 'fdsfd', 'adidas_Boys_Coast_28$.jpg', '2018-01-17 23:34:30'),
(26, 'adidas_13', 'dfsdsdfsdf', 'sdfdsfdsfdsf', 'sdfdsf', 'Adidas_Big_Boys Shirt25$.jpg', '2018-01-17 23:34:39'),
(27, 'dsfd', 'dsfdsfdf', 'dfdfdfdf', 'df', 'adidas Men Training Ultimate Short Sleeve Tee 38$.jpg', '2018-01-21 19:01:48'),
(28, 'fsdfdsff', 'dfdfdfdf', 'dsfsdsdsfd', 'fdsfds', 'Adidas_Big_Boys Shirt25$.jpg', '2018-01-21 19:03:21');

-- --------------------------------------------------------

--
-- Table structure for table `underarmour`
--

CREATE TABLE `underarmour` (
  `id` int(50) NOT NULL,
  `shirtCode` varchar(20) NOT NULL,
  `shirtName` varchar(200) NOT NULL,
  `shirtSize` varchar(200) NOT NULL,
  `Price` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `RegisterDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `underarmour`
--

INSERT INTO `underarmour` (`id`, `shirtCode`, `shirtName`, `shirtSize`, `Price`, `image`, `RegisterDate`) VALUES
(13, 'underarmour_01', 'underarmour', 'M,L,S', '35$', 'adidas Men Basketball All World Short Sleeve Tee 38$.jpg', '2017-12-26 20:04:43'),
(14, 'adidas_03', 'fdsfsfdf', 'dsfdsfdfdsfs', 'fsdfs', 'adidas Men Soccer Estro Jersey 35$.jpg', '2018-01-17 19:41:38'),
(16, 'adidas_02', 'sdf', 'fsd', 'fsdf', 'adidas Men Basketball All World Short Sleeve Tee 38$.jpg', '2018-01-17 23:32:56'),
(17, 'adidas_04', 'sdfsdsdsf', 'dsfdsfdfddsf', 'dd', 'adidas Men Climalite Ultimate Short Sleeve T-Shirt 30$.jpg', '2018-01-17 23:33:04'),
(18, 'adidas_05', 'sfsfdsf', 'sdfdsfdsfdfd', 'fdfd', 'adidas Men Club Tee  38$.jpg', '2018-01-17 23:33:15'),
(19, 'adidas_06', 'fdsfsddsfds', 'fdffdsfds', 'fdsfdsf', 'adidas Men Long Sleeve Graphic Tee 35$.jpg', '2018-01-17 23:33:26'),
(20, 'adidas_07', 'fdsfdsfdsfdsfdsfdsfdsfds', 'fdsfdsfdsfds', 'fsdfsd', 'adidas Men Originals Trefoil Tee 35$.jpg', '2018-01-17 23:33:34'),
(21, 'adidas_08', 'sdfsfsf', 'fsfsdff', 'fs', 'adidas Men Techfit Base Layer Long Sleeve 38$.jpg', '2018-01-17 23:33:45'),
(22, 'adidas_09', 'fsdfsdf', 'ff', 'f', 'adidas Men Training Ultimate Short Sleeve V Neck Tee 35$.jpg', '2018-01-17 23:33:58'),
(23, 'adidas_10', 'fsf', 'fwf', 'fdsfsf', 'adidas Men Training Essential Colorblock Tech Tee 30$.jpg', '2018-01-17 23:34:08'),
(24, 'supreme_11', 'sfsdfsf', 'ffd', 'f', 'adidas Originals Men Trefoil Tee 35$.jpg', '2018-01-17 23:34:20'),
(25, 'diesel_12', 'dsfsdfdsfds', 'fdsfdsfsfds', 'fdsfd', 'adidas_Boys_Coast_28$.jpg', '2018-01-17 23:34:30'),
(26, 'adidas_13', 'dfsdsdfsdf', 'sdfdsfdsfdsf', 'sdfdsf', 'Adidas_Big_Boys Shirt25$.jpg', '2018-01-17 23:34:39'),
(27, 'dsfd', 'dsfdsfdf', 'dfdfdfdf', 'df', 'adidas Men Training Ultimate Short Sleeve Tee 38$.jpg', '2018-01-21 19:01:48'),
(28, 'fsdfdsff', 'dfdfdfdf', 'dsfsdsdsfd', 'fdsfds', 'Adidas_Big_Boys Shirt25$.jpg', '2018-01-21 19:03:21');

-- --------------------------------------------------------

--
-- Table structure for table `versace`
--

CREATE TABLE `versace` (
  `id` int(50) NOT NULL,
  `shirtCode` varchar(20) NOT NULL,
  `shirtName` varchar(200) NOT NULL,
  `shirtSize` varchar(200) NOT NULL,
  `Price` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `RegisterDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `versace`
--

INSERT INTO `versace` (`id`, `shirtCode`, `shirtName`, `shirtSize`, `Price`, `image`, `RegisterDate`) VALUES
(13, 'versace_01', 'versace01', 'M,L,S', '35$', 'adidas Men Basketball All World Short Sleeve Tee 38$.jpg', '2017-12-26 20:04:43'),
(14, 'adidas_03', 'fdsfsfdf', 'dsfdsfdfdsfs', 'fsdfs', 'adidas Men Soccer Estro Jersey 35$.jpg', '2018-01-17 19:41:38'),
(16, 'adidas_02', 'sdf', 'fsd', 'fsdf', 'adidas Men Basketball All World Short Sleeve Tee 38$.jpg', '2018-01-17 23:32:56'),
(17, 'adidas_04', 'sdfsdsdsf', 'dsfdsfdfddsf', 'dd', 'adidas Men Climalite Ultimate Short Sleeve T-Shirt 30$.jpg', '2018-01-17 23:33:04'),
(18, 'adidas_05', 'sfsfdsf', 'sdfdsfdsfdfd', 'fdfd', 'adidas Men Club Tee  38$.jpg', '2018-01-17 23:33:15'),
(19, 'adidas_06', 'fdsfsddsfds', 'fdffdsfds', 'fdsfdsf', 'adidas Men Long Sleeve Graphic Tee 35$.jpg', '2018-01-17 23:33:26'),
(20, 'adidas_07', 'fdsfdsfdsfdsfdsfdsfdsfds', 'fdsfdsfdsfds', 'fsdfsd', 'adidas Men Originals Trefoil Tee 35$.jpg', '2018-01-17 23:33:34'),
(21, 'adidas_08', 'sdfsfsf', 'fsfsdff', 'fs', 'adidas Men Techfit Base Layer Long Sleeve 38$.jpg', '2018-01-17 23:33:45'),
(22, 'adidas_09', 'fsdfsdf', 'ff', 'f', 'adidas Men Training Ultimate Short Sleeve V Neck Tee 35$.jpg', '2018-01-17 23:33:58'),
(23, 'adidas_10', 'fsf', 'fwf', 'fdsfsf', 'adidas Men Training Essential Colorblock Tech Tee 30$.jpg', '2018-01-17 23:34:08'),
(24, 'supreme_11', 'sfsdfsf', 'ffd', 'f', 'adidas Originals Men Trefoil Tee 35$.jpg', '2018-01-17 23:34:20'),
(25, 'diesel_12', 'dsfsdfdsfds', 'fdsfdsfsfds', 'fdsfd', 'adidas_Boys_Coast_28$.jpg', '2018-01-17 23:34:30'),
(26, 'adidas_13', 'dfsdsdfsdf', 'sdfdsfdsfdsf', 'sdfdsf', 'Adidas_Big_Boys Shirt25$.jpg', '2018-01-17 23:34:39'),
(27, 'dsfd', 'dsfdsfdf', 'dfdfdfdf', 'df', 'adidas Men Training Ultimate Short Sleeve Tee 38$.jpg', '2018-01-21 19:01:48'),
(28, 'fsdfdsff', 'dfdfdfdf', 'dsfsdsdsfd', 'fdsfds', 'Adidas_Big_Boys Shirt25$.jpg', '2018-01-21 19:03:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adidas`
--
ALTER TABLE `adidas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `brand` (`brand`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diesel`
--
ALTER TABLE `diesel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gucci`
--
ALTER TABLE `gucci`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hugoboss`
--
ALTER TABLE `hugoboss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nike`
--
ALTER TABLE `nike`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `prada`
--
ALTER TABLE `prada`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `puma`
--
ALTER TABLE `puma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supreme`
--
ALTER TABLE `supreme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tommyhilfiger`
--
ALTER TABLE `tommyhilfiger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `underarmour`
--
ALTER TABLE `underarmour`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `versace`
--
ALTER TABLE `versace`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adidas`
--
ALTER TABLE `adidas`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `diesel`
--
ALTER TABLE `diesel`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `gucci`
--
ALTER TABLE `gucci`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `hugoboss`
--
ALTER TABLE `hugoboss`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `nike`
--
ALTER TABLE `nike`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `customer_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prada`
--
ALTER TABLE `prada`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `puma`
--
ALTER TABLE `puma`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `supreme`
--
ALTER TABLE `supreme`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tommyhilfiger`
--
ALTER TABLE `tommyhilfiger`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `underarmour`
--
ALTER TABLE `underarmour`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `versace`
--
ALTER TABLE `versace`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
