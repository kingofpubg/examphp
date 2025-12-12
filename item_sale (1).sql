-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 12, 2025 at 12:25 PM
-- Server version: 5.7.24
-- PHP Version: 8.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `v_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `item_sale`
--

CREATE TABLE `item_sale` (
  `id` int(11) NOT NULL,
  `item_code` varchar(20) DEFAULT NULL,
  `item_name` varchar(50) DEFAULT NULL,
  `quantity` decimal(10,2) DEFAULT NULL,
  `expired_date` date DEFAULT NULL,
  `note` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item_sale`
--

INSERT INTO `item_sale` (`id`, `item_code`, `item_name`, `quantity`, `expired_date`, `note`) VALUES
(1, 'coca', 'coca cola', '100.00', '2024-01-01', ''),
(2, 'bim', 'bim bim', '100.00', '2024-01-01', 'discount'),
(3, 'lavie', 'lavie', '100.00', '2024-01-01', 'discount\r\n'),
(4, 'pen', 'pencil', '100.00', '2024-01-01', ''),
(5, 'seven up', 'seven up', '100.00', '2024-01-01', ''),
(6, 'note', 'note book', '100.00', '2024-01-01', ''),
(7, 'note1', 'note book 1', '100.00', '2024-01-01', 'discount');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item_sale`
--
ALTER TABLE `item_sale`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item_sale`
--
ALTER TABLE `item_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
