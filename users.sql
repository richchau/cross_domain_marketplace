-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 05, 2020 at 04:14 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usersdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `home_phone` varchar(20) DEFAULT NULL,
  `cell_phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `address`, `home_phone`, `cell_phone`) VALUES
(1, 'Peter', 'Parker', 'spidey@gmail.com', '123 Bronx St. ', '123456789', '123456789'),
(2, 'Miles', 'Morales', 'blackspidey@gmail.com', '3456 New York Ave', '5446546111', '9875465122'),
(3, 'Gwen', 'Stacey', 'spidergurl@gmail.com', '987 New York St', '546484133', '877'),
(4, 'Doctor', 'Octopus', 'dococ@gmail.com', '4897 Bronx Ave', '798465454', '465487894'),
(5, 'Mysterio', '?', 'mysterious@gmail.com', '2343 somewhere ave', '549465461', '218465165'),
(6, 'Electro', 'cution', 'shocking@gmail.com', '9809 Current Ave ', '2116465456', '2138465184'),
(7, 'Kraven', 'the Hunter', 'ihatespiderman@gmail.com', '6789 right here st', '165464132', '561321654'),
(8, 'Sand', 'Man', 'sand@gmail.com', '2343 beach cir', '546546515', '138431544'),
(9, 'Vulture', 'sqwaa ', 'bird@gmail.com', '15453 the sky', '843212311', '138444444');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
