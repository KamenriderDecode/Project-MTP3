-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 16, 2017 lúc 03:55 SA
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mtp3_music`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `listartist`
--

CREATE TABLE `listartist` (
  `id` int(11) NOT NULL,
  `images` text CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `listartist`
--

INSERT INTO `listartist` (`id`, `images`, `name`) VALUES
(1, 'http://zmp3-photo-td.zadn.vn/thumb/240_240/avatars/a/f/af06c01c0fbd6e1b142c74b977f82d24_1492134247.jp', 'Nghệ sĩ Katy Perry'),
(2, 'http://zmp3-photo-td.zadn.vn/thumb/165_165/avatars/6/6/66072ac1c3cf9623657eaafae5e3db35_1443094519.jpg', 'Maroon 5'),
(3, 'http://zmp3-photo-td.zadn.vn/thumb/165_165/avatars/e/e/ee58fcc0ff45002b8d416bd7685809ce_1487040461.jpg', 'Sơn Tùng M-TP'),
(4, 'http://zmp3-photo-td.zadn.vn/thumb/165_165/avatars/b/9/b9355dbc597fa6bd1a2940f55866789a_1473753494.jpg', 'Lưu Hương Giang'),
(5, 'http://zmp3-photo-td.zadn.vn/cover3_artist/0/a/0af56bf958611ab7320da88e99084d33_1467690507.jpg', 'BIGBANG'),
(6, 'http://zmp3-photo-td.zadn.vn/thumb/165_165/avatars/d/3/d372eca7bc67d9bb0c5d2a60a63b82b5_1438589673.jpg', 'T-ARA'),
(7, 'http://image.mp3.zdn.vn/thumb/240_240/avatars/4/d/4dbefec2ecad87b8dcdd4714101d2787_1456315264.jpg', 'Flo Rida');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `listartist`
--
ALTER TABLE `listartist`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
