-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th7 17, 2022 lúc 01:20 PM
-- Phiên bản máy phục vụ: 5.7.36
-- Phiên bản PHP: 8.0.13

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
-- Cấu trúc bảng cho bảng `color`
--

DROP TABLE IF EXISTS `color`;
CREATE TABLE IF NOT EXISTS `color` (
  `id_color` int(11) NOT NULL AUTO_INCREMENT,
  `name_color` varchar(255) NOT NULL,
  PRIMARY KEY (`id_color`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `color`
--

INSERT INTO `color` (`id_color`, `name_color`) VALUES
(1, 'WHITE'),
(2, 'BLACK'),
(3, 'RED'),
(4, 'BLUE'),
(5, 'PINK'),
(6, 'DEFAULT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `id_company` int(11) NOT NULL AUTO_INCREMENT,
  `ten_company` varchar(255) NOT NULL,
  PRIMARY KEY (`id_company`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `company`
--

INSERT INTO `company` (`id_company`, `ten_company`) VALUES
(1, 'Mercedes Benz'),
(2, 'BMW'),
(3, 'Audi'),
(4, 'Honda');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

DROP TABLE IF EXISTS `danhgia`;
CREATE TABLE IF NOT EXISTS `danhgia` (
  `id_danhgia` int(11) NOT NULL AUTO_INCREMENT,
  `us_id` int(11) DEFAULT NULL,
  `id_sp` int(11) DEFAULT NULL,
  `danhgia` int(11) DEFAULT NULL,
  `binhluan` text,
  PRIMARY KEY (`id_danhgia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

DROP TABLE IF EXISTS `donhang`;
CREATE TABLE IF NOT EXISTS `donhang` (
  `id_donhang` int(11) NOT NULL AUTO_INCREMENT,
  `us_id` int(11) NOT NULL,
  `id_voucher` int(11) NOT NULL,
  `total` varchar(255) NOT NULL,
  `trangthai` int(11) NOT NULL DEFAULT '0',
  `hinhthucTT` int(11) NOT NULL DEFAULT '0',
  `diachi` varchar(255) NOT NULL,
  `ngaytao_donhang` date NOT NULL,
  `SDT` varchar(255) NOT NULL,
  PRIMARY KEY (`id_donhang`),
  KEY `fkvoucherdonhang` (`id_voucher`),
  KEY `fkkhachhang` (`us_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhangchitiet`
--

DROP TABLE IF EXISTS `donhangchitiet`;
CREATE TABLE IF NOT EXISTS `donhangchitiet` (
  `id_dhct` int(11) NOT NULL,
  `id_donhang` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `soluong_sp` int(11) NOT NULL,
  `gia_sp` varchar(255) NOT NULL,
  PRIMARY KEY (`id_dhct`),
  KEY `fksanpham` (`id_sp`),
  KEY `id_donhang` (`id_donhang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanh`
--

DROP TABLE IF EXISTS `hinhanh`;
CREATE TABLE IF NOT EXISTS `hinhanh` (
  `id_hinhanh` int(11) NOT NULL AUTO_INCREMENT,
  `url_main` varchar(255) NOT NULL,
  `url1` varchar(255) NOT NULL,
  `url2` varchar(255) NOT NULL,
  `url3` varchar(255) NOT NULL,
  `url4` varchar(255) NOT NULL,
  PRIMARY KEY (`id_hinhanh`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hinhanh`
--

INSERT INTO `hinhanh` (`id_hinhanh`, `url_main`, `url1`, `url2`, `url3`, `url4`) VALUES
(1, 'thuviendohoa.vn_365.png', 'thuviendohoa.vn_365.png', '725x560-1.webp', '725x560-2.webp', 'collection-img1.webp'),
(2, 'den-bi-xenon4.jpg', 'den-2.jpg', 'den-3.png', 'den-4.jpg', 'den-5.jpg');

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
  PRIMARY KEY (`id_info`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `infor`
--

INSERT INTO `infor` (`id_info`, `name`, `email`, `diachi`, `sdt`, `ngaytao`) VALUES
(1, 'admin', 'admin@gmail.com', 'HCM', '0999666999', '2022-07-15'),
(2, 'nqduy', 'nqd@gmail.com', 'NT', '0917191919', '2022-07-15'),
(4, 'abcAn', 'abc@gmail.com', 'NT', '0912222121', '2022-07-15'),
(5, 'thuyhuong', 'th@gmail.com', 'DP', '099123999', '2022-07-15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

DROP TABLE IF EXISTS `loaisp`;
CREATE TABLE IF NOT EXISTS `loaisp` (
  `id_loaisp` int(11) NOT NULL AUTO_INCREMENT,
  `ten_loaisp` varchar(255) NOT NULL,
  PRIMARY KEY (`id_loaisp`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`id_loaisp`, `ten_loaisp`) VALUES
(1, 'Xe ô tô'),
(2, 'Phụ kiện');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_sp_chi_tiet`
--

DROP TABLE IF EXISTS `loai_sp_chi_tiet`;
CREATE TABLE IF NOT EXISTS `loai_sp_chi_tiet` (
  `id_loaispct` int(11) NOT NULL AUTO_INCREMENT,
  `name_chitiet` varchar(255) NOT NULL,
  PRIMARY KEY (`id_loaispct`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loai_sp_chi_tiet`
--

INSERT INTO `loai_sp_chi_tiet` (`id_loaispct`, `name_chitiet`) VALUES
(5, 'SEDAN'),
(6, 'SUV'),
(7, 'MINI'),
(8, 'BÁN TẢI'),
(9, 'BÁNH'),
(10, 'VỎ XE'),
(11, 'GƯƠNG'),
(12, 'ĐÈN'),
(13, 'CAMERA'),
(14, 'KHÁC');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `id_sp` int(11) NOT NULL AUTO_INCREMENT,
  `ten_sp` varchar(255) NOT NULL,
  `gia_sp` varchar(255) NOT NULL,
  `id_color` int(11) NOT NULL,
  `soluong_sp` int(11) DEFAULT NULL,
  `giamgia` float DEFAULT NULL,
  `id_trangthai` int(11) DEFAULT NULL,
  `mota` varchar(255) NOT NULL,
  `ngaytao` date NOT NULL,
  `ngaycapnhat` date DEFAULT NULL,
  `id_danhgia` int(11) DEFAULT NULL,
  `id_company` int(11) NOT NULL,
  `id_loaisp` int(11) NOT NULL,
  `id_loaispct` int(11) NOT NULL,
  `id_hinhanh` int(11) NOT NULL,
  PRIMARY KEY (`id_sp`),
  KEY `fkdanhgiasp` (`id_danhgia`),
  KEY `fkcompany` (`id_company`),
  KEY `fkloaisp` (`id_loaisp`),
  KEY `fkloaispct` (`id_loaispct`),
  KEY `fkhinhanh` (`id_hinhanh`),
  KEY `fkcolor` (`id_color`),
  KEY `fktrangthai` (`id_trangthai`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `ten_sp`, `gia_sp`, `id_color`, `soluong_sp`, `giamgia`, `id_trangthai`, `mota`, `ngaytao`, `ngaycapnhat`, `id_danhgia`, `id_company`, `id_loaisp`, `id_loaispct`, `id_hinhanh`) VALUES
(1, 'C200', '1200000', 1, 100, NULL, 1, 'Luxury car', '2022-07-17', NULL, NULL, 1, 1, 5, 1),
(2, 'ĐÈN BI XENON4', '12500000', 6, 50, NULL, 1, 'Đèn xe thế hệ mới', '2022-07-17', NULL, NULL, 3, 2, 12, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthai`
--

DROP TABLE IF EXISTS `trangthai`;
CREATE TABLE IF NOT EXISTS `trangthai` (
  `id_trangthai` int(11) NOT NULL AUTO_INCREMENT,
  `name_trangthai` varchar(255) NOT NULL,
  PRIMARY KEY (`id_trangthai`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `trangthai`
--

INSERT INTO `trangthai` (`id_trangthai`, `name_trangthai`) VALUES
(1, 'Còn hàng'),
(2, 'Hết hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `userss`
--

DROP TABLE IF EXISTS `userss`;
CREATE TABLE IF NOT EXISTS `userss` (
  `us_id` int(11) NOT NULL AUTO_INCREMENT,
  `us_taikhoan` varchar(255) NOT NULL,
  `us_password` varchar(255) NOT NULL,
  `id_vaitro` int(11) DEFAULT NULL,
  `id_info` int(11) DEFAULT NULL,
  `id_voucher` int(11) DEFAULT NULL,
  `id_danhgia` int(11) DEFAULT NULL,
  PRIMARY KEY (`us_id`),
  KEY `fkvaitro` (`id_vaitro`),
  KEY `fkinfo` (`id_info`),
  KEY `fkvoucher` (`id_voucher`),
  KEY `fkdanhgia` (`id_danhgia`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `userss`
--

INSERT INTO `userss` (`us_id`, `us_taikhoan`, `us_password`, `id_vaitro`, `id_info`, `id_voucher`, `id_danhgia`) VALUES
(1, 'admin', 'admin', 1, 1, NULL, NULL),
(2, 'nqd', 'a12345678', 2, 2, NULL, NULL),
(3, 'abc', 'a123', 2, 4, NULL, NULL),
(4, 'thhuong', 'a123', 2, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vaitro`
--

DROP TABLE IF EXISTS `vaitro`;
CREATE TABLE IF NOT EXISTS `vaitro` (
  `id_vaitro` int(11) NOT NULL AUTO_INCREMENT,
  `name_vaitro` varchar(255) NOT NULL,
  PRIMARY KEY (`id_vaitro`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `vaitro`
--

INSERT INTO `vaitro` (`id_vaitro`, `name_vaitro`) VALUES
(1, 'ADMIN'),
(2, 'KHACHHANG'),
(3, 'CTV');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `voucher`
--

DROP TABLE IF EXISTS `voucher`;
CREATE TABLE IF NOT EXISTS `voucher` (
  `id_voucher` int(11) NOT NULL AUTO_INCREMENT,
  `ten_voucher` varchar(255) NOT NULL,
  `code_voucher` varchar(255) NOT NULL,
  `mucgiam_voucher` float NOT NULL,
  `ngayBD` date NOT NULL,
  `ngayKT` date NOT NULL,
  PRIMARY KEY (`id_voucher`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `voucher`
--

INSERT INTO `voucher` (`id_voucher`, `ten_voucher`, `code_voucher`, `mucgiam_voucher`, `ngayBD`, `ngayKT`) VALUES
(1, 'Sale he', 'he30', 0.3, '2022-07-15', '2022-08-15'),
(2, 'sale khai giang', 'skg40', 0.4, '2022-07-15', '2022-08-15');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fkdonhangchitiet` FOREIGN KEY (`id_donhang`) REFERENCES `donhangchitiet` (`id_donhang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkkhachhang` FOREIGN KEY (`us_id`) REFERENCES `userss` (`us_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkvoucherdonhang` FOREIGN KEY (`id_voucher`) REFERENCES `voucher` (`id_voucher`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD CONSTRAINT `fksanpham` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fkcolor` FOREIGN KEY (`id_color`) REFERENCES `color` (`id_color`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkcompany` FOREIGN KEY (`id_company`) REFERENCES `company` (`id_company`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkdanhgiasp` FOREIGN KEY (`id_danhgia`) REFERENCES `danhgia` (`id_danhgia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkhinhanh` FOREIGN KEY (`id_hinhanh`) REFERENCES `hinhanh` (`id_hinhanh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkloaisp` FOREIGN KEY (`id_loaisp`) REFERENCES `loaisp` (`id_loaisp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkloaispct` FOREIGN KEY (`id_loaispct`) REFERENCES `loai_sp_chi_tiet` (`id_loaispct`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fktrangthai` FOREIGN KEY (`id_trangthai`) REFERENCES `trangthai` (`id_trangthai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `userss`
--
ALTER TABLE `userss`
  ADD CONSTRAINT `fkdanhgia` FOREIGN KEY (`id_danhgia`) REFERENCES `danhgia` (`id_danhgia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkinfo` FOREIGN KEY (`id_info`) REFERENCES `infor` (`id_info`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkvaitro` FOREIGN KEY (`id_vaitro`) REFERENCES `vaitro` (`id_vaitro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkvoucher` FOREIGN KEY (`id_voucher`) REFERENCES `voucher` (`id_voucher`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
