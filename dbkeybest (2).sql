-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2017 at 10:36 AM
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
(13, 'adidas_01', 'Summer For Men', 'M,L,s', '35$', 'adidas Men Basketball All World Short Sleeve Tee 38$.jpg', '2017-12-27 03:04:43');

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
('1', 'adidas'),
('2', 'nike'),
('3', 'gucci'),
('4', 'prada'),
('5', 'supreme'),
('6', 'tommy_hilfiger'),
('7', 'versace'),
('8', 'diesel'),
('9', 'hugo_boss'),
('10', 'under_armour'),
('11', 'puma');

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
(1, 'diesel_01', 'Diesel Short', 'L, M, S', '45$', '51PVejZtk1L._AC_US200_.jpg', '2017-12-27 04:26:57');

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
(1, 'gucci_01', 'Vacation Short', 'M', '35$', '51-w+q34cDL._AC_US200_.jpg', '2017-12-27 04:17:18');

-- --------------------------------------------------------

--
-- Table structure for table `hugo_boss`
--

CREATE TABLE `hugo_boss` (
  `id` int(50) NOT NULL,
  `shirtCode` varchar(20) NOT NULL,
  `shirtName` varchar(200) NOT NULL,
  `shirtSize` varchar(200) NOT NULL,
  `Price` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `RegisterDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hugo_boss`
--

INSERT INTO `hugo_boss` (`id`, `shirtCode`, `shirtName`, `shirtSize`, `Price`, `image`, `RegisterDate`) VALUES
(1, 'hugo_boss', 'Short Vacation', 'M,S', '30$', '51LOyRYS97L._AC_US200_.jpg', '2017-12-27 04:27:46');

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
(2, 'nike_02', 'Long Summer', 'L, M', '35$', 'Nike WV Mountaineer KO Performance Fleece Crew SeatShitr 35$.jpg', '2017-12-27 04:07:23');

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
(1, 'prada_01', 'Long Winter', 'M,S', '40$', '41KXcc1MqFL._AC_US200_.jpg', '2017-12-27 04:18:28');

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
(1, 'puma_01', 'Long Winter', 'L, M, S', '48$', '51y6yCX4FEL._AC_US200_.jpg', '2017-12-27 04:29:07');

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
(1, 'supreme_01', 'Supereme Long', 'L,M', '40$', '519H0blMFsL._AC_UL260_SR200,260_.jpg', '2017-12-27 04:23:49');

-- --------------------------------------------------------

--
-- Table structure for table `tommy_hilfiger`
--

CREATE TABLE `tommy_hilfiger` (
  `id` int(50) NOT NULL,
  `shirtCode` varchar(20) NOT NULL,
  `shirtName` varchar(200) NOT NULL,
  `shirtSize` varchar(200) NOT NULL,
  `Price` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `RegisterDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tommy_hilfiger`
--

INSERT INTO `tommy_hilfiger` (`id`, `shirtCode`, `shirtName`, `shirtSize`, `Price`, `image`, `RegisterDate`) VALUES
(1, 'tommy_hilfiger_01', 'Short workout', 'M,S', '35$', '41hDQnZLxYL._AC_UL260_SR200,260_.jpg', '2017-12-27 04:25:12');

-- --------------------------------------------------------

--
-- Table structure for table `under_armour`
--

CREATE TABLE `under_armour` (
  `id` int(50) NOT NULL,
  `shirtCode` varchar(20) NOT NULL,
  `shirtName` varchar(200) NOT NULL,
  `shirtSize` varchar(200) NOT NULL,
  `Price` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `RegisterDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `under_armour`
--

INSERT INTO `under_armour` (`id`, `shirtCode`, `shirtName`, `shirtSize`, `Price`, `image`, `RegisterDate`) VALUES
(1, 'under_armour', 'Runner Short', 'M,S', '40$', '41sEDPrMVaL._AC_US200_.jpg', '2017-12-27 04:28:37');

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
(1, 'versace_01', 'Versace Big ', 'L,M', '40$', '41BWw-25cYL._AC_US200_.jpg', '2017-12-27 04:26:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adidas`
--
ALTER TABLE `adidas`
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
-- Indexes for table `hugo_boss`
--
ALTER TABLE `hugo_boss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nike`
--
ALTER TABLE `nike`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tommy_hilfiger`
--
ALTER TABLE `tommy_hilfiger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `under_armour`
--
ALTER TABLE `under_armour`
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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `diesel`
--
ALTER TABLE `diesel`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gucci`
--
ALTER TABLE `gucci`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hugo_boss`
--
ALTER TABLE `hugo_boss`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nike`
--
ALTER TABLE `nike`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prada`
--
ALTER TABLE `prada`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `puma`
--
ALTER TABLE `puma`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supreme`
--
ALTER TABLE `supreme`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tommy_hilfiger`
--
ALTER TABLE `tommy_hilfiger`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `under_armour`
--
ALTER TABLE `under_armour`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `versace`
--
ALTER TABLE `versace`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
