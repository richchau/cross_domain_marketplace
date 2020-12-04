-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 04, 2020 at 10:49 PM
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
-- Database: `oxy`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(1, 'Walter White', 'walterwhite@gmail.com', 'bestmethcooker', '$2y$10$VaurpZRhqWSx/WCFn3wxieuiSjI2b3XftHgAfkUyhY/UmS7X6NDiW'),
(2, 'Jesse Pinkman', 'jessepinkman@gmail.com', 'secondbestmethcooker', '$2y$10$9pMtTHCY/fdAc2nTqTvpG.vFa3BRo2CnX1jijFrINSRTVAhmIaM4C'),
(3, 'Rich', 'richchau@gmail.com', 'Rich', '$2y$10$LSjfDO.V4C39rSjtOaor1uyABhq9GJ8Sa61E4pD/HsAhH4XQNambK'),
(4, 'Miles Morales', 'miles@gmail.com', 'theblackspiderman', '$2y$10$4kyc7mU04NZUmh12X/90uuuTW.XGnoWha0ij0xpYq2cvW4sPBk.Yi'),
(5, 'Peter Parker', 'peter@gmail.com', 'spooderman', '$2y$10$i./WZ7AheIPen2RDylLGO.rv63BhE9PTCGv1dyhC8XetqzRnqxZNm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
