-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2017 at 05:22 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mtp3_music`
--

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE `track` (
  `track_id` int(11) NOT NULL,
  `artist` int(11) NOT NULL,
  `category` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `publishment` year(4) NOT NULL,
  `album` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `rating` float NOT NULL,
  `view` int(11) NOT NULL,
  `track_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`track_id`, `artist`, `category`, `publishment`, `album`, `rating`, `view`, `track_name`) VALUES
(1, 1, 'Trữ tình', 2017, 'Lạc Trôi', 1, 1, 'Lạc Trôi'),
(2, 2, 'Sến', 2017, 'Nơi này có anh', 2, 2, 'Nơi này có anh'),
(3, 3, 'Vàng', 2017, 'Có được không em', 3, 30, 'Có được không em'),
(4, 4, 'Đỏ', 2017, 'Từ bỏ', 4, 31, 'Từ bỏ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`track_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `track`
--
ALTER TABLE `track`
  MODIFY `track_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
