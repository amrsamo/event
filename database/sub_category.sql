-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2017 at 02:59 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

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
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `category_id` tinyint(4) NOT NULL,
  `info` varchar(400) NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `name`, `category_id`, `info`, `icon`) VALUES
(1, 'Photographer', 3, '', 'camera'),
(2, 'Videographer', 3, '', 'video-camera'),
(3, 'Makeup', 2, '', 'paint-brush'),
(4, 'Hair Stylist', 2, '', 'circle-o'),
(5, 'Hotel', 6, '', 'h-square'),
(6, 'Clubhouse', 6, '', 'tree'),
(7, 'Villa', 6, '', 'home'),
(8, 'Catering', 1, '', 'cutlery'),
(9, 'Bar Service', 1, '', 'glass'),
(10, 'Bridal Shops', 4, '', 'female'),
(11, 'Tux n Ties', 4, '', 'male'),
(12, 'Fashion Designers', 4, '', 'bolt'),
(13, 'DJ', 5, '', 'music'),
(14, 'Sound & Light', 5, '', 'lightbulb-o'),
(15, 'Live Performance', 5, '', 'microphone'),
(16, 'Rental Shops', 8, '', 'car'),
(17, 'Florist Shop', 8, '', 'pagelines'),
(18, 'Wedding Planner', 8, '', 'calendar'),
(19, 'Cakes n Bakes', 1, '', ''),
(20, 'Chocolotiers', 1, '', ''),
(21, 'Accessories Designers', 4, '', ''),
(22, 'Jewelry ', 4, '', ''),
(23, 'Hair Salon', 2, '', ''),
(24, 'Spa', 2, '', ''),
(25, 'Skin Care', 2, '', ''),
(26, 'Outdoor', 6, '', ''),
(27, 'By The Beach', 6, '', ''),
(28, 'Honeymoon & Travel', 8, '', ''),
(29, 'Wedding List', 7, '', ''),
(30, 'Out Of The Box', 9, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
