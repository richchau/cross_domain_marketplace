-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 20, 2020 at 08:56 PM
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
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `rating_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `comment` text NOT NULL,
  `rating` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`rating_id`, `product_id`, `user_name`, `comment`, `rating`) VALUES
(8, 1, 'Rich ', 'This product is so chill. Best thing I\'ve bought!', 5),
(9, 1, 'Angela', 'Could be a bit more, but worth the bang for your buck', 4),
(10, 1, 'Carlos', 'Wow! This thing saved my life', 5),
(11, 1, 'Bobby', 'Its whatever.', 3),
(12, 2, 'Richard', 'great product', 4),
(13, 3, 'Ashley', 'Not that dry, had some moisture in it', 1),
(14, 3, 'Joe', 'Doesn\'t really remind me of the desert when i was in chile, but still dry', 3),
(15, 3, 'Steph', 'So dry my lungs needed lotion', 2),
(16, 4, 'Mary Jane', 'From alaska and its really cold up here, really warms up the spirit!', 4),
(17, 4, 'Travis ', 'ITS LIT', 5),
(18, 4, 'Dude', 'Its an ok product, not enough heat, id just breath in a bag of hot cheetos air', 3),
(19, 5, 'Rich', 'This thing so icy it make my chain look fake', 5),
(20, 5, 'Drake', 'I became the ice, i am what i wear, i breath it, icy af', 5),
(21, 5, 'Ana', 'wow', 5),
(22, 5, 'Donna', 'I froze to death, and id do it again', 5),
(23, 10, 'Jared', 'Almost drowned', 2),
(24, 10, 'Simon', 'i love this product', 4),
(25, 10, 'Jasmine', 'Its whatever, the taste of sea salt is too powerful', 3),
(26, 10, 'Chantal', 'its ok', 3),
(27, 9, 'Gareth', 'This air was disgusting and I love it', 5),
(28, 9, 'Jessica', 'i live out in the middle of the forest and got this, really does show how bad city air is, not taking my place for granted', 5),
(29, 9, 'Rich', 'only thing that i could really afford alot, i might get lung cancer tho', 4),
(30, 9, 'Jenny', 'The taste of smog, pollution, congestion, i love it', 4),
(31, 9, 'Jamie', 'took my breath away, literally', 5),
(32, 8, 'Neil', 'Took me back to the days when i went skydiving, nostalgic', 5),
(33, 8, 'Hannah', 'kinda hard to breath in ngl, i guess beause there is lack of oxygen up there', 4),
(34, 8, 'Rich', 'best bang for your buck, if you aint broke', 5),
(35, 8, 'Christina', 'just wow', 5),
(36, 6, 'Broc', 'Eh', 2),
(37, 7, 'Carlos', 'its cool, really feels like the rain forest, but its not pleasant imo', 3),
(38, 7, 'Walter', 'its an ok product, i would get something with more moisture for my dry throat', 3),
(39, 7, 'Gina', 'great stuff', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`rating_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
