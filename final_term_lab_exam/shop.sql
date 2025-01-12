-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2025 at 08:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `contact`, `username`, `password`) VALUES
(1, 's', 's', 's', '$2y$10$UYyRgDGRhFHiZVoJ4ey44.PwloyO6fFBzLrNxn21J89jrGr9FwDtW'),
(2, 's', 's', 's', '$2y$10$dlVHyNNyGi7Iux9BcvomXOqysIMcuRx/M96ruXWKp7jhf5.GRONUK'),
(3, 's', 's', 's', '$2y$10$a65rF3AnligJlqff5CtWsOSuPj6Lr/6zPKOeYHGzXHlaUAlsmWGUW'),
(4, 's', '2', 's', '$2y$10$pTWX69XOtts7V14Jn9p9.e5lK87Ma7vKQl.NwYnYGeHMiYswpNTOC'),
(5, 's', '2', 's', '$2y$10$fqDHdUsVrRz/KjWarqETguM0rgXW87qleKn0./JrgHeJP.WajsZeG'),
(6, 's', '2', 's', '$2y$10$9Qnq/2WXPMtGUoSZxTKWsubkuS5eLhNl7qNkczL/Olg2sLa12775y'),
(7, 's', '12', 's', '$2y$10$TBByH6xFfYKEBLAaQv2A3O2mQmGIkwqunGgP8Dejg.K0FNuxhMFxS'),
(8, 's', '1', 's', '$2y$10$P4eQKN6liGe47yrd5ZuKG.MDoU64JAHbex/ab/u8IJ3GEWE8HY/7G'),
(9, 'sd', '234', 'ss', '$2y$10$bzzjBzrPpbM.gN/O8V94wOv2cS0L1gggFxBA6HF1XtNBcDrAgPg1W');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
