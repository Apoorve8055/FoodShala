-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2019 at 07:54 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodshala`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(255) NOT NULL,
  `cat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'Customer',
  `pref` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `fname`, `lname`, `email`, `pass`, `type`, `pref`) VALUES
(1, 'Apoorv', 'verma', 'Apoorve@verma.com', '123456', 'Customer', 'N'),
(2, 'ankit', '', 'ank@verm', '123', 'Customer', 'Nx`V');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `mid` int(255) NOT NULL,
  `rid` varchar(255) NOT NULL,
  `itemName` varchar(255) NOT NULL,
  `cat` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `del` int(255) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`mid`, `rid`, `itemName`, `cat`, `img_path`, `rate`, `del`) VALUES
(1, '1', 'Biriyani', 'N', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/48/India_food.jpg/220px-India_food.jpg', '250', 1),
(2, '2', 'Shahi paneer', 'V', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Shahi_Paneer_%26_Butter_Naan.jpg/250px-Shahi_Paneer_%26_Butter_Naan.jpg', '150', 1),
(8, '1', 'Kebab', 'N', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Lula_kebab_2.jpg/275px-Lula_kebab_2.jpg', '10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `oid` int(255) NOT NULL,
  `mid` int(255) NOT NULL,
  `cid` int(255) NOT NULL,
  `rid` int(255) NOT NULL,
  `qnty` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tamt` int(11) NOT NULL,
  `status` int(255) NOT NULL DEFAULT '1',
  `del` varchar(255) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`oid`, `mid`, `cid`, `rid`, `qnty`, `address`, `tamt`, `status`, `del`) VALUES
(1, 1, 1, 1, 1, 'Delhi', 100, 0, '1'),
(2, 1, 1, 2, 2, 'Kanpur ,UP', 250, 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `rid` int(255) NOT NULL,
  `rname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'restaurant',
  `pref` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`rid`, `rname`, `email`, `pass`, `location`, `type`, `pref`) VALUES
(1, 'papa ji biriyani', 'papa@biriyani.com', '123', 'Kanpur , Uttar pradesh ,208000', 'restaurant', 'N'),
(2, 'Ram restaurant', 'ram@restaurant.com', '123', 'Kanpur , Uttar pradesh ,208000', 'restaurant', 'V'),
(3, 'sun', 'sun@sun', '1234', '', 'restaurant', 'NV'),
(4, 'Lucky', 'Lucky@rest', '1234', '', 'restaurant', 'NV,'),
(5, 'Bradava', 'bradava@spanish', '1234', '', 'restaurant', 'NV,');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `mid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `oid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `rid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
