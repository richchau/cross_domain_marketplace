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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `pricing` varchar(10) NOT NULL,
  `product_rating` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `image`, `description`, `pricing`, `product_rating`) VALUES
(1, 'Oxy Chill', 'chill.jpg', 'Inhale oxygen from the cold environment of Yellowstone National Park to cool down your body, giving a sharp sensation best for recovery.', '299', 4.25),
(2, 'Oxy Fresh', 'fresh.jpg', 'Treat yourself with the refreshing oxygen from Banff National Park in Canada to relax your body.', '499', 4),
(3, 'Oxy Dry', 'dry.jpg', 'Take in the heat with air from the Atacama Desert in Chile to fill your lungs with warmth from the desert air.', '399', 2),
(4, 'Oxy Heat', 'heat.jpg', 'Freezing from the winter air? Get a load of some of this heat from the Sahara Desert to warm your soul better than hot chocolate by the fireplace.', '399', 4),
(5, 'Oxy Icy', 'icy.jpg', 'Brrrr! Our air from the glaciers of Greenland will instantly wake you up, providing the best therapy for recovery for your sore muscles. Perfect after an intense workout!', '599', 5),
(6, 'Oxy Mist', 'mist.jpg', 'Breath in the cool mist from the forests of Northern California, and feel the wet air fill your lungs. The ultimate product for calming and refreshing peace.', '399', 2),
(7, 'Oxy Rain', 'rain.jpg', 'From the rain forests of Southern America, where nature thrives with beautiful foliage and waterfalls. Feel the wilderness as you take in air, as it enhances your primal instincts. ', '299', 3.33),
(8, 'Oxy Sky', 'sky.jpg', 'Above and beyond the clouds, there is a sense of peace. The air remains calm and undisturbed, like how you would feel as you inhale Earth\'s clean atmosphere.', '699', 4.75),
(9, 'Oxy Urban', 'urban.jpg', 'Maybe you already live in a place with immaculate oxygen. Maybe you just want to know how bad the air is in urban environments. Well, we got just the thing straight from Chicago. Its dirty, its toxic, its nasty.', '.99', 4.6),
(10, 'Oxy Wet', 'wet.jpg', 'Take in the ocean of the Caribbean\'s without drowning. Feel the sea salt as it fills your lungs. This is the perfect getaway, without leaving the house.', '299', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
