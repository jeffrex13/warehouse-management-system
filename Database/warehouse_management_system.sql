-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2021 at 01:26 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warehouse_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_audit_trail`
--

CREATE TABLE `tbl_audit_trail` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `timein` varchar(255) NOT NULL,
  `timeout` varchar(255) DEFAULT NULL,
  `activity` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_audit_trail`
--

INSERT INTO `tbl_audit_trail` (`id`, `username`, `firstname`, `lastname`, `middlename`, `timein`, `timeout`, `activity`, `date`) VALUES
(6, 'admin', 'Ordep', 'Badeo', 'Labrador', '12:46 am', '12:47 am', 'Logged In', 'Fri May 7, 2021'),
(7, 'admin', 'Ordep', 'Badeo', 'Labrador', '12:47 am', '12:54 am', 'Logged In', 'Fri May 7, 2021'),
(8, 'admin', 'Ordep', 'Badeo', 'Labrador', '12:54 am', '12:54 am', 'Logged In', 'Fri May 7, 2021');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `filename`) VALUES
(1, '07LeRLO9rbj6luakpZvMVvg-1.1602529741.fit_lpad.size_625x365.jpg'),
(2, 'blender.jpeg'),
(3, 'SKU_36950_grande.jpg'),
(4, 'stove.jpeg'),
(5, 'washing-machine.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `productId` varchar(50) NOT NULL,
  `brandName` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `productId`, `brandName`, `type`, `model`, `color`, `quantity`, `price`) VALUES
(1, '20368975', 'Samsung', 'Refrigerator', 'RT50K6351BS/TC', 'Black', '3', '₱24,000.00'),
(2, '76510983', 'Samsung', 'Washing Machine', 'WR24M9960KV/TC', 'Black', '15', '₱15,000.00'),
(3, '08276194', 'Samsung', 'Refrigerator', 'RT51K6351BS/TC', 'Black', '10', '₱10,000.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `middlename` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `birthdate` date NOT NULL,
  `contactnumber` varchar(250) NOT NULL,
  `email` varchar(255) NOT NULL,
  `loa` varchar(20) NOT NULL,
  `store` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `firstname`, `lastname`, `middlename`, `address`, `birthdate`, `contactnumber`, `email`, `loa`, `store`) VALUES
(1, 'admin', 'admin', 'Ordep', 'Badeo', 'Labrador', 'Antipolo City', '1996-03-05', '09565290841', 'jhaycee122098@gmail.com', 'Administrator', ''),
(2, 'JBevangelista', 'jV67#%', 'Jan Bernard', 'Evangelista', 'Espiritu', '28 Sta. Maria Compd. Santolan, Pasig City', '1997-01-07', '09276928641', 'jbevangelista07@gmail.com', 'Employee', ''),
(3, 'JepCureg', 'vJ64%)', 'Jordan Jeffrey', 'Cureg', 'You wanna know why', 'Antipolo City', '1997-01-04', '09565290842', 'jepcureg@gmail.com', 'Branch', 'Quezon City'),
(4, 'Employee123', 'DZ72*(', 'Jan Christan', 'Evangelista', 'Espiritu', '28 Sta. Maria Compd. Santolan, Pasig City', '1999-12-20', '09265944316', 'ordepbadeo143@gmail.com', 'Employee', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_audit_trail`
--
ALTER TABLE `tbl_audit_trail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_audit_trail`
--
ALTER TABLE `tbl_audit_trail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
