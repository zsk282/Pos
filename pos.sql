-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2017 at 05:00 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill_ledger`
--

CREATE TABLE `bill_ledger` (
  `id` int(11) NOT NULL,
  `bill_no` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `mode_payment` varchar(20) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_address` varchar(200) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cutomer`
--

CREATE TABLE `cutomer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tin_no` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `mobile_no` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cutomer`
--

INSERT INTO `cutomer` (`id`, `name`, `tin_no`, `address`, `mobile_no`) VALUES
(1, 'Saurabh', '123TIN', 'Address Home', '987654321'),
(2, 'Sumit', 'SumitTin', 'sumit', '124578');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `company_name` varchar(50) NOT NULL,
  `model_name` varchar(50) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `serial_number` varchar(50) NOT NULL,
  `purchase_bill_number` varchar(100) NOT NULL,
  `selling_bill_number` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `customer_id` varchar(100) NOT NULL,
  `dealer_id` varchar(100) NOT NULL,
  `mode_buying` varchar(100) NOT NULL,
  `mode_selling` varchar(100) NOT NULL,
  `buying_rate` int(11) NOT NULL,
  `selling_rate` int(11) NOT NULL,
  `is_sold` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`company_name`, `model_name`, `item_name`, `serial_number`, `purchase_bill_number`, `selling_bill_number`, `description`, `customer_id`, `dealer_id`, `mode_buying`, `mode_selling`, `buying_rate`, `selling_rate`, `is_sold`) VALUES
('Exide', 'Exide 5LB', 'Lead Acid Battery', '12312321', '3123213', 'SUBH/17-18/4', '', '2', '', '', 'Cash', 0, 213213, 1),
('Exide', 'Exide 5LB', 'Lead Acid Battery', '123213213', '3123213', '', '', '', '', '', '', 0, 0, 0),
('Exide', 'Exide 4LB', 'Lead Acid Battery', 'Exide/17-18/001', 'Exide/17-18/1', 'SUBH/17-18/2', '', '1', '', '', 'Cash', 0, 5000, 1),
('Exide', 'Exide 4LB', 'Lead Acid Battery', 'Exide/17-18/002', 'Exide/17-18/1', 'SUBH/17-18/2', '', '2', '', '', 'Cash', 0, 1254, 1),
('Exide', 'Exide 4LB', 'Lead Acid Battery', 'Exide/17-18/003', 'Exide/17-18/1', 'SUBH/17-18/2', '', '1', '', '', 'Cash', 0, 12345, 1),
('Exide', 'Exide 4LB', 'Lead Acid Battery', 'Exide/17-18/004', 'Exide/17-18/1', 'SUBH/17-18/2', '', '1', '', '', 'Cash', 0, 1312, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products_list`
--

CREATE TABLE `products_list` (
  `item_id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `model_name` varchar(50) NOT NULL,
  `item_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_list`
--

INSERT INTO `products_list` (`item_id`, `company_name`, `model_name`, `item_name`) VALUES
(1, 'Exide', 'Exide 4LB', 'Lead Acid Battery'),
(2, 'Exide', 'Exide 5LB', 'Lead Acid Battery'),
(3, 'Exide', 'Exide 6LB', 'Lead Acid Battery');

-- --------------------------------------------------------

--
-- Table structure for table `stock_ledger`
--

CREATE TABLE `stock_ledger` (
  `date` datetime NOT NULL,
  `bill_no` varchar(50) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `recipt` int(11) NOT NULL,
  `issue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_ledger`
--

INSERT INTO `stock_ledger` (`date`, `bill_no`, `item_name`, `recipt`, `issue`) VALUES
('2017-07-03 04:11:44', 'Exide/17-18/1', 'Lead Acid Battery', 4, 0),
('2017-07-03 04:55:15', '3123213', 'Lead Acid Battery', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `temp_bill_counter`
--

CREATE TABLE `temp_bill_counter` (
  `id` int(11) NOT NULL,
  `bill_no` varchar(50) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `billing_date` date NOT NULL,
  `mode_selling` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_bill_counter`
--

INSERT INTO `temp_bill_counter` (`id`, `bill_no`, `customer_id`, `billing_date`, `mode_selling`) VALUES
(2, 'SUBH/17-18/2', '2', '0000-00-00', 'Cash'),
(3, 'SUBH/17-18/2', '2', '0000-00-00', 'Cash'),
(4, 'SUBH/17-18/4', '2', '2017-07-25', 'Cash');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill_ledger`
--
ALTER TABLE `bill_ledger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cutomer`
--
ALTER TABLE `cutomer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile_no` (`mobile_no`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD UNIQUE KEY `serial_number` (`serial_number`);

--
-- Indexes for table `products_list`
--
ALTER TABLE `products_list`
  ADD PRIMARY KEY (`item_id`),
  ADD UNIQUE KEY `model_name` (`model_name`);

--
-- Indexes for table `temp_bill_counter`
--
ALTER TABLE `temp_bill_counter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill_ledger`
--
ALTER TABLE `bill_ledger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cutomer`
--
ALTER TABLE `cutomer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products_list`
--
ALTER TABLE `products_list`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `temp_bill_counter`
--
ALTER TABLE `temp_bill_counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
