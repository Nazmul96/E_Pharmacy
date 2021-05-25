-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 08:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_tb`
--

CREATE TABLE `add_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mGroup` varchar(30) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `create_add` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_tb`
--

INSERT INTO `add_tb` (`id`, `name`, `mGroup`, `Company`, `price`, `create_add`) VALUES
(2, 'Ace Plus', 'Paracetamol', 'Square Pharmaceuticals', 250, '2020-11-30'),
(4, 'napa serup', 'Paracetamol', 'Square Pharmaceuticals', 300, '2020-11-30'),
(5, 'betaloc', 'Paracetamol', 'Beximco Pharma', 120, '2020-11-30'),
(8, 'abecab', 'astrois', 'square', 300, '2020-12-09'),
(9, 'Napa Extra', 'Paracetamol', 'Beximco Pharma', 120, '2020-12-09'),
(10, 'chodon', 'Paracetamol', 'beximco', 300, '2020-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `daily_sell`
--

CREATE TABLE `daily_sell` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mGroup` varchar(30) NOT NULL,
  `company` varchar(30) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` int(20) NOT NULL,
  `total` int(20) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daily_sell`
--

INSERT INTO `daily_sell` (`id`, `name`, `mGroup`, `company`, `quantity`, `price`, `total`, `date`) VALUES
(3, 'seclo', 'esoplasol', 'Square Pharmaceuticals', 2, 5, 10, '2020-12-01'),
(5, 'betaloc-25', 'astrois', 'general', 10, 2, 20, '2020-12-01'),
(6, 'seclo 20', 'esoplasol', 'Square Pharmaceuticals', 10, 5, 50, '2020-12-02'),
(19, 'Napa Extra', 'Paracetamol', 'Beximco Pharma', 10, 2, 20, '2020-12-06'),
(21, 'abecab', 'astrois', 'incepta', 2, 10, 20, '2020-12-06'),
(22, 'abetis', 'astrois', 'square', 10, 10, 100, '2020-12-09'),
(23, 'Napa Extra', 'Paracetamol', 'Beximco Pharma', 10, 3, 30, '2020-12-09'),
(24, 'seclo', 'esoplasol', 'Beximco Pharma', 10, 5, 50, '2020-12-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_tb`
--
ALTER TABLE `add_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daily_sell`
--
ALTER TABLE `daily_sell`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_tb`
--
ALTER TABLE `add_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `daily_sell`
--
ALTER TABLE `daily_sell`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
