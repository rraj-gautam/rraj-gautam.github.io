-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 02:08 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codilar`
--

-- --------------------------------------------------------

--
-- Table structure for table `employes`
--

CREATE TABLE `employes` (
  `employe_id` int(11) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `duty` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `join_date` date NOT NULL,
  `create_on` datetime NOT NULL,
  `update_on` datetime NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employes`
--

INSERT INTO `employes` (`employe_id`, `fname`, `lname`, `email`, `duty`, `dob`, `join_date`, `create_on`, `update_on`, `status`) VALUES
(3, 'Philip', 'Chin', 'philip@gmail.com', 'SEO', '1992-07-18', '2018-07-08', '2018-07-26 01:54:54', '2018-07-26 01:54:54', 1),
(2, 'Robert', 'Breault', 'robert@gmail.com', 'Manager', '1988-07-13', '2018-07-28', '2018-07-26 01:45:16', '2018-07-26 01:45:16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `salary_slip`
--

CREATE TABLE `salary_slip` (
  `salary_slip_id` int(11) NOT NULL,
  `employe_id` int(11) NOT NULL,
  `basic_pay` decimal(10,2) NOT NULL,
  `hra` decimal(10,2) NOT NULL,
  `conveyance` decimal(10,2) NOT NULL,
  `provident_fund` decimal(10,2) NOT NULL,
  `esi` decimal(10,2) NOT NULL,
  `loan` decimal(10,2) NOT NULL,
  `tax` decimal(10,2) NOT NULL,
  `tsd` decimal(10,2) NOT NULL,
  `total_addition` decimal(10,2) NOT NULL,
  `total_deduction` decimal(10,2) NOT NULL,
  `net_salary` decimal(10,2) NOT NULL,
  `salary_date` date NOT NULL,
  `create_on` datetime NOT NULL,
  `update_on` datetime NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary_slip`
--

INSERT INTO `salary_slip` (`salary_slip_id`, `employe_id`, `basic_pay`, `hra`, `conveyance`, `provident_fund`, `esi`, `loan`, `tax`, `tsd`, `total_addition`, `total_deduction`, `net_salary`, `salary_date`, `create_on`, `update_on`, `status`) VALUES
(4, 1, '50000.00', '15000.00', '0.00', '9000.00', '500.00', '0.00', '200.00', '0.00', '65000.00', '9700.00', '55300.00', '2018-07-01', '2018-07-26 01:49:38', '2018-07-26 01:49:38', 1),
(5, 1, '45000.00', '13500.00', '0.00', '8100.00', '450.00', '0.00', '200.00', '0.00', '58500.00', '8750.00', '49750.00', '2018-06-01', '2018-07-26 01:51:18', '2018-07-26 01:51:18', 1),
(6, 2, '40000.00', '12000.00', '0.00', '7200.00', '400.00', '0.00', '200.00', '0.00', '52000.00', '7800.00', '44200.00', '2018-07-01', '2018-07-26 01:52:44', '2018-07-26 01:52:44', 1),
(7, 3, '40000.00', '12000.00', '0.00', '7200.00', '400.00', '0.00', '200.00', '0.00', '52000.00', '7800.00', '44200.00', '2018-08-01', '2018-07-26 01:55:16', '2018-07-26 01:55:16', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`employe_id`);

--
-- Indexes for table `salary_slip`
--
ALTER TABLE `salary_slip`
  ADD PRIMARY KEY (`salary_slip_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employes`
--
ALTER TABLE `employes`
  MODIFY `employe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `salary_slip`
--
ALTER TABLE `salary_slip`
  MODIFY `salary_slip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
