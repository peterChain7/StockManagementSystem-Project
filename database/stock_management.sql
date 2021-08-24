-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2020 at 08:02 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stock_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productname` varchar(50) NOT NULL,
  `productid` varchar(50) NOT NULL,
  `datepurchased` date NOT NULL,
  `pricepurchased` double NOT NULL,
  `userid` varchar(50) NOT NULL,
  `pair` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productname`, `productid`, `datepurchased`, `pricepurchased`, `userid`, `pair`, `status`, `price`) VALUES
('adapter', 'adapter1', '2020-10-02', 15000, 'user42', 1, 'used', 30000),
('motherboard', 'BM1122', '2020-10-15', 200000, 'user42', 1, 'used', 600000),
('cabinet', 'cabinet1', '2020-10-07', 400000, 'user42', 1, 'brand', 600000),
('cabinet', 'cabinet10', '2020-10-07', 400000, 'user42', 1, 'brand', 600000),
('cabinet', 'cabinet12', '2020-10-07', 400000, 'user42', 1, 'brand', 600000),
('cabinet', 'cabinet13', '2020-10-07', 400000, 'user42', 1, 'brand', 600000),
('cabinet', 'cabinet14', '2020-10-07', 400000, 'user42', 1, 'brand', 600000),
('cabinet', 'cabinet15', '2020-10-07', 400000, 'user42', 1, 'brand', 600000),
('cabinet', 'cabinet2', '2020-10-07', 400000, 'user42', 1, 'brand', 600000),
('cabinet', 'cabinet3', '2020-10-07', 400000, 'user42', 1, 'brand', 600000),
('cabinet', 'cabinet4', '2020-10-07', 400000, 'user42', 1, 'brand', 600000),
('cabinet', 'cabinet5', '2020-10-07', 400000, 'user42', 1, 'brand', 600000),
('cabinet', 'cabinet7', '2020-10-07', 400000, 'user42', 1, 'brand', 600000),
('cabinet', 'cabinet8', '2020-10-07', 400000, 'user42', 1, 'brand', 600000),
('cabinet', 'cabinet9', '2020-10-07', 400000, 'user42', 1, 'brand', 600000),
('camera', 'cam1', '2020-10-15', 250000, 'user42', 1, 'used', 600000),
('camera', 'cam2', '2020-10-15', 250000, 'user42', 1, 'used', 600000),
('vga card', 'card1', '2020-10-15', 25000, 'user42', 1, 'used', 35000),
('hp tonner catrige', 'catrige02', '2020-10-15', 250000, 'user1', 1, 'used', 350000),
('console cable', 'console1', '2020-10-15', 100000, 'user1', 1, 'used', 150000),
('dlink switch', 'dlink02', '2020-10-15', 250000, 'user42', 1, 'used', 350000),
('ethernet roller', 'ethernet1', '2020-10-15', 100000, 'user1', 2, 'used', 150000),
('fan assembly', 'fan1', '2020-10-15', 25000, 'user42', 1, 'used', 35000),
('FRIDGE', 'FRIDGE1', '2020-10-08', 500000, 'user5', 1, 'used', 900000),
('cisco router', 'linksys001', '2020-10-15', 250000, 'user42', 1, 'used', 350000),
('microwave', 'micro01', '2020-10-08', 500000, 'user1', 1, 'used', 0),
('mouse', 'mouse1', '2020-10-15', 10000, 'user42', 1, 'used', 30000),
('nanostation ubiquit', 'nano1', '2020-10-15', 340400, 'user42', 1, 'brand', 500000),
('netgear switch', 'netgear1', '2020-10-15', 100000, 'user1', 2, 'used', 150000),
('gamepad', 'pad1', '2020-10-15', 10000, 'user42', 1, 'used', 30000),
('DDR3ram', 'r1122', '2020-10-15', 200000, 'user42', 1, 'used', 600000),
('rack', 'rack1', '2020-10-15', 250000, 'user42', 1, 'used', 350000),
('RADIO', 'RADIO12', '2020-10-13', 500000, 'user7', 1, 'BRAND', 9000000),
('repeater', 'repeater1', '2020-10-15', 900000, 'user42', 1, 'brand', 1500000),
('joystic', 'stick09', '2020-10-15', 10000, 'user42', 1, 'used', 30000),
('wireless TPlink', 'tplink1', '2020-10-15', 250000, 'user1', 1, 'used', 350000),
('TV', 'TV01', '2020-10-14', 500000, 'user2', 1, 'USED', 700000),
('watch', 'watch02', '2020-10-15', 10000, 'user42', 1, 'used', 30000),
('windows10', 'win009944', '2020-10-15', 200000, 'user42', 1, 'used', 600000),
('workstation', 'workstation1', '2020-10-15', 900000, 'user42', 1, 'brand', 1500000),
('workstation', 'workstation2', '2020-10-15', 900000, 'user42', 1, 'brand', 1500000),
('workstation', 'workstation3', '2020-10-15', 900000, 'user42', 1, 'brand', 1500000),
('workstation', 'workstation4', '2020-10-15', 900000, 'user42', 1, 'brand', 1500000),
('workstation', 'workstation5', '2020-10-15', 900000, 'user42', 1, 'brand', 1500000),
('workstation', 'workstation6', '2020-10-15', 900000, 'user42', 1, 'brand', 1500000),
('workstation', 'workstation7', '2020-10-15', 900000, 'user42', 1, 'brand', 1500000),
('workstation', 'workstation8', '2020-10-15', 900000, 'user42', 1, 'brand', 1500000),
('workstation', 'workstation9', '2020-10-15', 900000, 'user42', 1, 'brand', 1500000);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `salesprice` double NOT NULL,
  `productid` varchar(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `pair` int(11) NOT NULL,
  `profit` bigint(20) NOT NULL,
  `userearnings` double NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `salesid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`salesprice`, `productid`, `userid`, `pair`, `profit`, `userearnings`, `created_at`, `updated_at`, `salesid`) VALUES
(600000, 'micro01', 'user1', 1, 0, 0, '0000-00-00', NULL, 1),
(600000, 'micro01', 'user1', 1, 0, 0, '0000-00-00', NULL, 2),
(600000, 'micro01', 'user1', 1, 0, 0, '0000-00-00', NULL, 3),
(600000, 'micro01', 'user1', 1, 0, 0, '0000-00-00', NULL, 4),
(600000, 'micro01', 'user1', 1, 0, 0, '0000-00-00', NULL, 5),
(600000, 'micro01', 'user1', 1, 0, 0, '0000-00-00', NULL, 6),
(600000, 'micro01', 'reg26', 1, 0, 0, '0000-00-00', NULL, 7),
(800000, 'TV01', 'user1', 1, 0, 0, '0000-00-00', NULL, 9),
(9000000, 'micro01', 'user1', 1, 0, 0, '0000-00-00', NULL, 12),
(750000, 'TV01', 'user1', 1, 0, 0, '0000-00-00', NULL, 13),
(9000000, 'RADIO12', 'user1', 1, 0, 0, '0000-00-00', NULL, 14),
(30000, 'adapter1', 'user1', 1, 0, 0, '0000-00-00', NULL, 15);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `resident` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `firstname`, `lastname`, `username`, `resident`, `password`, `email`, `phonenumber`, `role`) VALUES
('', '', '', '', '', '', '', 0, ''),
('2323', 'aa', 'aa', 'aaa', '', '123456', 'shamiratsaidi@gmail.com', 1233332, '	MANAGER'),
('godifrey', 'godifrey', 'willson', 'willson', 'dodoma', '123456', 'will@gmail.com', 766445533, 'manager'),
('reg26', 'swalha', 'mfaume', 'mfaume', '', '123456', 'swalha@gmail.com', 2147483647, 'user'),
('reg28', 'mashauri', 'bisaga', 'mashauri', '', '123456', 'shshdhdhdhd', 2147483647, 'user'),
('reg41', 'felix', 'irene', 'mirene', '', '123456', 'irene@gmail.com', 2147483647, 'user'),
('reg45', 'haulath', 'salum', 'haulath', '', '123456', 'haulath', 2147483647, 'user'),
('user1', 'mwajuma', 'bakari', 'mwajuma', 'dodoma', '123456', 'mwajuma@gmail.com', 767555577, 'admin'),
('user11', 'diana', 'masalu', 'diana', 'dodoma', '123456', 'diana@gmail.com', 766442222, 'user'),
('user14', 'ally', 'mwaki', 'ali', '', '123456', 'ally@gmail.com', 232323, '	admin'),
('user15', 'seth', 'willson', 'seth', '', '123456', 'seth@gmail.com', 755334433, 'user'),
('user2', 'james', 'james', 'james', '', '123456', 'james@gmail.com', 666775544, '	MANAGER'),
('user23', 'eliza', 'eliza', 'eliza', '', '123456', 'eliza@gmail.com', 656774433, 'user'),
('user3', 'monica', 'monica', 'monica', '', '123456', 'monica@gmail.com', 666775545, '	MANAGER'),
('user30', 'diana', 'masalu', 'masalu', 'dodoma', '123456', 'masalu@gmail.com', 766442222, 'user'),
('user31', 'ally', 'mwaki', 'alii', '', '123456', 'maden@gmail.com', 788332244, '	admin'),
('user32', 'seth', 'willson', 'ombeni', '', '123456', 'sethi33@gmail.com', 755334433, 'user'),
('user33', 'james', 'james', 'heri', '', '123456', 'jame@gmail.com', 666775544, '	MANAGER'),
('user34', 'eliza', 'eliza', 'tumaini', '', '123456', 'eli@gmail.com', 656774433, 'user'),
('user35', 'monica', 'monica', 'chalres', '', '123456', 'moni@gmail.com', 666775545, '	MANAGER'),
('user36', 'alice', 'gerlad', 'felix', '', 'alice', 'alice@gmail.com', 755664422, '	user'),
('user37', 'alice', 'gerlad', 'jum', '', '123456', 'jum@yahoo.com', 755664522, '	admin'),
('user38', 'emmanuel', 'emmanuel', 'noahl', '', '123456', 'emmanuelnoah@yahoo.com', 755664522, '	user'),
('user39', 'emmanuel', 'emmanuel', 'saisu', '', '123456', 'sa@yahoo.com', 755664522, '	user'),
('user4', 'alice', 'gerlad', 'alice', '', 'alice', 'alice@gmail.com', 755664422, '	user'),
('user40', 'shami', 'shami', 'shamisa', '', '123456', 'shami@gmail.com', 755694422, '	user'),
('user42', 'kifani', 'bakari', 'saidi', 'dodoma', '123456', 'kifani@gmail.com', 767455577, 'admin'),
('user43', 'godifrey', 'humphrey', 'willsony', 'dodoma', '123456', 'willson@gmail.com', 766455533, 'manager'),
('user44', 'halima', 'saidi', 'halima', '', '123456', 'halima@gmail.com', 766884466, '	MANAGER'),
('user5', 'alice', 'gerlad', 'gerlad', '', '123456', 'gerlad@yahoo.com', 755664522, '	admin'),
('user6', 'emmanuel', 'emmanuel', 'emmanuel', '', '123456', 'emmanuel@yahoo.com', 755664522, '	user'),
('user7', 'emmanuel', 'emmanuel', 'emma', '', '123456', 'emmanuel@yahoo.com', 755664522, '	user'),
('user9', 'shami', 'shami', 'shami', '', '123456', 'shami@gmail.com', 755694422, '	user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`salesid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `salesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`),
  ADD CONSTRAINT `sales_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
