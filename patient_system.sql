-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2019 at 03:19 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `patient_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `a_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `report` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`a_id`, `name`, `phone`, `gender`, `email`, `date`, `time`, `report`) VALUES
(1, 'Rahil Shah', 9870753456, 'male', 'rshah2399@gmail.com', '2019-09-29', '11:00', 'diagonised'),
(2, 'Krinal Shah', 9865432145, 'female', 'krinalshah97@gmail.c', '2019-09-28', '9:30', 'fit'),
(3, 'Rahil Shah', 7658678987, 'male', 'rshah2399@gmail.com', '2019-09-28', '14:30', 'fully fit'),
(4, 'Priti shah', 7685456784, 'female', 'wes@asd.com', '2019-09-28', '10:00', 'malaria'),
(5, 'Priti shah', 8098977687, 'male', 'wes@asd.com', '2019-09-28', '9:00', 'recovered'),
(6, 'Rahil Shah', 8765439234, 'male', 'rshah2399@gmail.com', '2019-09-28', '13:30', 'dead'),
(7, 'Rahil Shah', 9870767865, 'male', 'rshah2399@gmail.com', '2019-09-28', '14:00', 'dengue'),
(8, 'Krinal Shah', 9876543213, 'female', 'krinalshah97@gmail.c', '2019-10-03', '9:00', 'loose motions'),
(9, 'Krinal Shah', 6509789876, 'female', 'krinalshah97@gmail.c', '2019-10-03', '9:30', 'high fever');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`a_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
