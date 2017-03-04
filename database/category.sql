-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 04, 2017 at 06:23 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventopic`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `image_url` varchar(250) NOT NULL,
  `info` varchar(400) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `image_url`, `info`, `description`) VALUES
(1, 'Food & Beverages', 'public/images/category/food.png', 'Catering & Bar Service', 'Looking for event photographers and/or videographers to turn your magical moments into memorable moments. Look no further, Eventopic got all what you need in one place, browse through the best profiles in Egypt, Contact them and let the experts tell your event story ;)'),
(2, 'Beauty', 'public/images/category/beauty.png', 'Makeup & Hair Stylists', 'Looking for event photographers and/or videographers to turn your magical moments into memorable moments. Look no further, Eventopic got all what you need in one place, browse through the best profiles in Egypt, Contact them and let the experts tell your event story ;)'),
(3, 'Capture The Moment', 'public/images/category/capture.png', 'Photographers & Videographers', 'Looking for event photographers and/or videographers to turn your magical moments into memorable moments. Look no further, Eventopic got all what you need in one place, browse through the best profiles in Egypt, Contact them and let the experts tell your event story ;)'),
(4, 'Fashion', 'public/images/category/fashion.png', 'Bridal Shops, Tuxedos and Fashion Designers', 'Looking for event photographers and/or videographers to turn your magical moments into memorable moments. Look no further, Eventopic got all what you need in one place, browse through the best profiles in Egypt, Contact them and let the experts tell your event story ;)'),
(5, 'Entertainment', 'public/images/category/entertainment.png', 'DJ, Sound & Light and Live Performance', 'Looking for event photographers and/or videographers to turn your magical moments into memorable moments. Look no further, Eventopic got all what you need in one place, browse through the best profiles in Egypt, Contact them and let the experts tell your event story ;)'),
(6, 'Venues', 'public/images/category/venues.png', 'Best venues to host your event', 'Looking for event photographers and/or videographers to turn your magical moments into memorable moments. Look no further, Eventopic got all what you need in one place, browse through the best profiles in Egypt, Contact them and let the experts tell your event story ;)'),
(7, 'Wedding List', 'public/images/category/weddinglist.png', 'Get Your Dream Car', 'Looking for event photographers and/or videographers to turn your magical moments into memorable moments. Look no further, Eventopic got all what you need in one place, browse through the best profiles in Egypt, Contact them and let the experts tell your event story ;)'),
(8, 'Plan It', 'public/images/category/weddingplanners.png', 'Reach Out To The Best', 'Looking for event photographers and/or videographers to turn your magical moments into memorable moments. Look no further, Eventopic got all what you need in one place, browse through the best profiles in Egypt, Contact them and let the experts tell your event story ;)'),
(9, 'Out Of The Box', 'public/images/category/out.png', 'Best Florists For Your Special Day', 'Looking for event photographers and/or videographers to turn your magical moments into memorable moments. Look no further, Eventopic got all what you need in one place, browse through the best profiles in Egypt, Contact them and let the experts tell your event story ;)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
