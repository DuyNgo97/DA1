-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th7 31, 2022 lúc 07:42 AM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `da1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `infor`
--

DROP TABLE IF EXISTS `infor`;
CREATE TABLE IF NOT EXISTS `infor` (
  `id_info` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `sdt` varchar(255) NOT NULL,
  `ngaytao` date DEFAULT NULL,
  `url_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_info`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `infor`
--

INSERT INTO `infor` (`id_info`, `name`, `email`, `diachi`, `sdt`, `ngaytao`, `url_img`) VALUES
(1, 'admin', 'admin@gmail.com', 'HCM', '0999666999', '2022-07-15', NULL),
(2, 'nqduy', 'nqd@gmail.com', 'NT', '0917191919', '2022-07-15', NULL),
(3, 'abcAn', 'bach@gmail.com', 'NT', '0912222121', '2022-07-15', 'avt1.jpg'),
(4, 'thuyhuong', 'th@gmail.com', 'DP', '099123999', '2022-07-15', 'avt5.jpg'),
(5, 'Ngo Quoc Duy', 'nqd11@gmail.com', 'Nha Trang', '0917914444', '2022-07-27', 'avt4.jpg'),
(6, 'tien bui', 'tienbip@gmail.com', 'lam dong', '0911234112', '2022-07-29', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
