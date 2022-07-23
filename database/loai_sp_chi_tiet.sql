-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th7 22, 2022 lúc 02:30 AM
-- Phiên bản máy phục vụ: 8.0.27
-- Phiên bản PHP: 7.4.26

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
-- Cấu trúc bảng cho bảng `loai_sp_chi_tiet`
--

DROP TABLE IF EXISTS `loai_sp_chi_tiet`;
CREATE TABLE IF NOT EXISTS `loai_sp_chi_tiet` (
  `id_loaispct` int NOT NULL AUTO_INCREMENT,
  `name_chitiet` varchar(255) NOT NULL,
  `link_spct` varchar(255) NOT NULL,
  PRIMARY KEY (`id_loaispct`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3;

--
-- Đang đổ dữ liệu cho bảng `loai_sp_chi_tiet`
--

INSERT INTO `loai_sp_chi_tiet` (`id_loaispct`, `name_chitiet`, `link_spct`) VALUES
(5, 'Sedan', 'sedan'),
(6, 'Suv', 'suv'),
(7, 'Mini', 'mini'),
(8, 'Bán tải', 'bantai'),
(9, 'Bánh xe', 'banhxe'),
(10, 'Vỏ xe', 'voxe'),
(11, 'Gương', 'guong'),
(12, 'Đèn', 'den'),
(13, 'Camera', 'camera'),
(14, 'Khác', 'khac');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
