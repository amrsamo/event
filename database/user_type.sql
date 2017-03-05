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
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `type_name` varchar(50) NOT NULL,
  `category` tinyint(4) NOT NULL,
  `sub_category` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `type_name`, `category`, `sub_category`) VALUES
(1, 'Photographer', 3, 1),
(2, 'Wedding Planner', 8, 18),
(3, 'Hotel', 6, 5),
(4, 'Fashion Designer ', 4, 12),
(5, 'DJ', 5, 13),
(6, 'Admin', 0, 0),
(7, 'Sound & Light', 5, 14),
(8, 'Videographer ', 3, 2),
(9, 'Makeup', 2, 3),
(10, 'Hair Stylist', 2, 4),
(11, 'Clubhouse', 6, 6),
(12, 'Villa', 6, 7),
(13, 'Catering', 1, 8),
(14, 'Bar Service', 1, 9),
(15, 'Bridal Shops', 4, 10),
(16, 'Tux n Ties', 4, 11),
(17, 'Live Performance', 5, 15),
(18, 'Rental Shops', 8, 16),
(19, 'Florist Shop', 8, 17),
(20, 'Accessories Designers', 4, 21),
(21, 'Jewelry ', 4, 22),
(22, 'Cakes n Bakes', 1, 19),
(23, 'Chocolotiers', 1, 20),
(24, 'Hair Salon', 2, 23),
(25, 'Spa', 2, 24),
(26, 'Skin Care', 2, 25),
(27, 'Outdoor', 6, 26),
(28, 'By The Beach', 6, 27),
(29, 'Honeymoon & Travel', 8, 28),
(30, 'Wedding List', 7, 29),
(31, 'Out Of The Box', 9, 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `type_name` (`type_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
