-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th8 06, 2022 lúc 10:43 AM
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
  `binhluan` text,
  `date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_danhgia`),
  KEY `us_id` (`us_id`),
  KEY `id_sp` (`id_sp`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `danhgia`
--

INSERT INTO `danhgia` (`id_danhgia`, `us_id`, `id_sp`, `binhluan`, `date`) VALUES
(3, 4, 43, 'Sản phẩm tốt, trải nghiệm tốt.', '05-08-2022 20:04:03'),
(4, 7, 43, 'Sản phẩm tuyệt vời...', '06-08-2022 15:20:39'),
(5, 7, 42, 'Sản phẩm ưa chuộng, cảm giác lái tuyệt vời', '06-08-2022 15:24:44'),
(6, 3, 43, 'Trong cuộc họp công bố báo cáo tài chính của Apple, CEO Tim Cook nhắc đến nhóm quốc gia mới nổi, gồm Việt Nam là thị trường quan trọng của công ty.\r\nTại phiên họp thông báo kết quả kinh doanh quý II/2022 (quý III/2022 theo cách tính của Apple) vừa qua của Apple, CEO Tim Cook nhắc đến Việt Nam như một trong những thị trường có tốc độ tăng trưởng tốt nhất của công ty trên toàn cầu. Thành tích này góp phần giúp Táo khuyết đạt doanh thu 83 tỷ USD ở quý tài chính thấp điểm trong năm.\r\n\r\nNgoài ra, nhiều động thái từ Apple cho thấy thị trường di động Việt Nam đang thăng hạng, nhận được những chính sách phù hợp hơn từ công ty này.', '06-08-2022 15:48:48'),
(9, 10, 43, 'Sản phẩm trải nghiệm tuyệt vời', '06-08-2022 16:52:37'),
(10, 10, 43, 'Trải nghiệm tuyệt vời.', '06-08-2022 16:57:06'),
(11, 4, 42, 'Sản phẩm tuyệt vời, phù hợp cho gia đình.', '06-08-2022 17:05:13'),
(12, 10, 41, 'Xe chạy đèo tốt', '06-08-2022 17:40:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

DROP TABLE IF EXISTS `danhmuc`;
CREATE TABLE IF NOT EXISTS `danhmuc` (
  `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT,
  `ten_danhmuc` varchar(255) NOT NULL,
  PRIMARY KEY (`id_danhmuc`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `ten_danhmuc`) VALUES
(1, 'SẢN PHẨM BÁN CHẠY'),
(2, 'SẢN PHẨM NỔI BẬT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

DROP TABLE IF EXISTS `donhang`;
CREATE TABLE IF NOT EXISTS `donhang` (
  `id_donhang` int(11) NOT NULL AUTO_INCREMENT,
  `us_id` int(11) NOT NULL,
  `id_voucher` int(11) DEFAULT NULL,
  `total` varchar(255) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `hinhthucTT` int(11) NOT NULL,
  `ngaytao_donhang` varchar(255) NOT NULL,
  `SDT` varchar(255) NOT NULL,
  `note` text,
  PRIMARY KEY (`id_donhang`),
  KEY `fkvoucherdonhang` (`id_voucher`),
  KEY `fkkhachhang` (`us_id`),
  KEY `trangthai` (`trangthai`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id_donhang`, `us_id`, `id_voucher`, `total`, `trangthai`, `hinhthucTT`, `ngaytao_donhang`, `SDT`, `note`) VALUES
(43, 7, NULL, '7065495000', 1, 0, '2022-07-31', '0917914496', ''),
(44, 7, NULL, '7723090000', 1, 0, '2022-07-31', '0917914496', 'Mua xe trả tiền lun'),
(45, 7, NULL, '11656000', 1, 0, '2022-07-31', '0917914496', 'aaaaa'),
(46, 7, NULL, '1044700000', 1, 0, '2022-08-01', '2', 'aaaaaa'),
(47, 7, NULL, '1044700000', 1, 0, '2022-08-01', '917914496', ''),
(49, 7, NULL, '206910000', 0, 0, '2022-08-01', '917914496', ''),
(50, 4, NULL, '12599432000', 0, 1, '2022-08-03', '099123999', 'Mua xe trả góp'),
(51, 4, NULL, '11336850000', 1, 1, '2022-08-04', '099123999', ''),
(52, 4, NULL, '30700800000', 1, 1, '2022-08-05', '099123999', 'Mua xe tra gop'),
(53, 10, NULL, '1297500000', 0, 1, '2022-08-06', '0911234112', 'mua xe tra gop'),
(54, 10, NULL, '1292000000', 0, 1, '2022-08-06', '0911234112', ''),
(55, 10, NULL, '12591000000', 0, 0, '2022-08-06', '0911234112', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhangchitiet`
--

DROP TABLE IF EXISTS `donhangchitiet`;
CREATE TABLE IF NOT EXISTS `donhangchitiet` (
  `id_dhct` int(11) NOT NULL AUTO_INCREMENT,
  `id_donhang` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `soluong_sp` int(11) NOT NULL,
  `id_us` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_dhct`),
  KEY `fksanpham` (`id_sp`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `donhangchitiet`
--

INSERT INTO `donhangchitiet` (`id_dhct`, `id_donhang`, `id_sp`, `soluong_sp`, `id_us`) VALUES
(54, 43, 25, 1, NULL),
(55, 43, 30, 1, NULL),
(56, 44, 23, 1, NULL),
(57, 44, 40, 1, NULL),
(58, 44, 30, 2, NULL),
(59, 44, 33, 2, NULL),
(60, 45, 27, 1, NULL),
(61, 45, 40, 1, NULL),
(62, 46, 22, 1, NULL),
(63, 46, 40, 1, NULL),
(64, 47, 22, 1, NULL),
(65, 47, 40, 1, NULL),
(66, 49, 20, 1, NULL),
(67, 50, 41, 1, NULL),
(68, 50, 29, 4, NULL),
(69, 51, 41, 1, NULL),
(70, 51, 40, 1, NULL),
(71, 52, 42, 1, 4),
(72, 53, 43, 1, NULL),
(73, 53, 40, 1, 10),
(74, 54, 43, 1, 10),
(75, 55, 41, 1, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanh`
--

DROP TABLE IF EXISTS `hinhanh`;
CREATE TABLE IF NOT EXISTS `hinhanh` (
  `id_hinhanh` int(11) NOT NULL AUTO_INCREMENT,
  `id_sp` int(11) DEFAULT NULL,
  `url_main` varchar(255) NOT NULL,
  `url1` varchar(255) NOT NULL,
  `url2` varchar(255) NOT NULL,
  `url3` varchar(255) NOT NULL,
  `url4` varchar(255) NOT NULL,
  PRIMARY KEY (`id_hinhanh`),
  KEY `id_sp` (`id_sp`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hinhanh`
--

INSERT INTO `hinhanh` (`id_hinhanh`, `id_sp`, `url_main`, `url1`, `url2`, `url3`, `url4`) VALUES
(72, NULL, 'sanpham/sedan/2022-07-22-20-26-27-a71.png', 'sanpham/sedan/2022-07-22-20-26-27-a72.png', 'sanpham/sedan/2022-07-22-20-26-27-a74.png', 'sanpham/sedan/2022-07-22-20-26-27-a75.png', 'sanpham/sedan/2022-07-22-20-26-27-a73.jpg'),
(73, NULL, 'sanpham/sedan/2022-07-22-20-28-29-Civic1.jpg', 'sanpham/sedan/2022-07-22-20-28-29-Civic5.jpg', 'sanpham/sedan/2022-07-22-20-28-29-Civic2.jpg', 'sanpham/sedan/2022-07-22-20-28-29-Civic3.jpg', 'sanpham/sedan/2022-07-22-20-28-29-Civic4.jpg'),
(74, NULL, 'sanpham/sedan/2022-07-22-20-29-31-E200(1).jpg', 'sanpham/sedan/2022-07-22-20-29-31-E200(3).jpg', 'sanpham/sedan/2022-07-22-20-29-31-E200.jpg', 'sanpham/sedan/2022-07-22-20-29-31-E200(2).jpg', 'sanpham/sedan/2022-07-22-20-29-31-E200(4).jpg'),
(75, NULL, 'sanpham/suv/2022-07-22-20-31-0-g63 1.png', 'sanpham/suv/2022-07-22-20-31-0-g63 5.jpg', 'sanpham/suv/2022-07-22-20-31-0-g63 6.jpg', 'sanpham/suv/2022-07-22-20-31-0-g63 4.jpg', 'sanpham/suv/2022-07-22-20-31-0-g63 3.jpg'),
(77, NULL, 'sanpham/suv/2022-07-22-20-37-25-x7 5.jfif', 'sanpham/suv/2022-07-22-20-37-25-x7 4.jfif', 'sanpham/suv/2022-07-22-20-37-25-x7 3.jpg', 'sanpham/suv/2022-07-22-20-37-25-x7 2.jpg', 'sanpham/suv/2022-07-22-20-37-25-x7 1.jpg'),
(78, NULL, 'sanpham/mini/2022-07-22-20-38-24-mini 2.jfif', 'sanpham/mini/2022-07-22-20-38-24-Mini 3.jpg', 'sanpham/mini/2022-07-22-20-38-24-mini 1.jpg', 'sanpham/mini/2022-07-22-20-38-24-mini 4.jfif', 'sanpham/mini/2022-07-22-20-38-24-Mini 5.jpg'),
(79, NULL, 'sanpham/mini/2022-07-24-16h-6m-2s-mn1.jpg', 'sanpham/mini/2022-07-24-16h-6m-2s-mn3.jpg', 'sanpham/mini/2022-07-24-16h-6m-2s-mn4.jpg', 'sanpham/mini/2022-07-24-16h-6m-2s-mn5.jpg', 'sanpham/mini/2022-07-24-16h-6m-2s-mn6.jfif'),
(81, NULL, 'sanpham/light/2022-07-22-20-45-5-den1.jpg', 'sanpham/light/2022-07-22-20-45-5-den2.jpg', 'sanpham/light/2022-07-22-20-45-5-den3.jpg', 'sanpham/light/2022-07-22-20-45-5-den4.jpg', 'sanpham/light/2022-07-22-20-45-5-den5.jpg'),
(82, NULL, 'sanpham/light/2022-07-22-20-46-2-den7.jpg', 'sanpham/light/2022-07-22-20-46-2-den8.jpg', 'sanpham/light/2022-07-22-20-46-2-den9.jpg', 'sanpham/light/2022-07-22-20-46-2-den10.jpg', 'sanpham/light/2022-07-22-20-46-2-den11.jpg'),
(83, NULL, 'sanpham/light/2022-07-22-20-46-59-den12.jpg', 'sanpham/light/2022-07-22-20-46-59-den13.jpg', 'sanpham/light/2022-07-22-20-46-59-den14.jpg', 'sanpham/light/2022-07-22-20-46-59-den15.jpg', 'sanpham/light/2022-07-22-20-46-59-den16.jpg'),
(84, NULL, 'sanpham/light/2022-07-22-20-48-43-den17.jpg', 'sanpham/light/2022-07-22-20-48-43-den18.jpg', 'sanpham/light/2022-07-22-20-48-43-den19.jpg', 'sanpham/light/2022-07-22-20-48-43-den20.jpg', 'sanpham/light/2022-07-22-20-48-43-den21.jpg'),
(85, NULL, 'sanpham/guong/2022-07-22-20-51-33-den26.jpg', 'sanpham/guong/2022-07-22-20-51-33-den27.jpg', 'sanpham/guong/2022-07-22-20-51-33-den28.jpg', 'sanpham/guong/2022-07-22-20-51-33-den29.jpg', 'sanpham/guong/2022-07-22-20-51-33-den30.jpg'),
(86, NULL, 'sanpham/guong/2022-07-22-20-52-32-den35.jpg', 'sanpham/guong/2022-07-22-20-52-32-den36.jpg', 'sanpham/guong/2022-07-22-20-52-32-den31.jpg', 'sanpham/guong/2022-07-22-20-52-32-den37.jpg', 'sanpham/guong/2022-07-22-20-52-32-den38.jpg'),
(87, NULL, 'sanpham/sedan/2022-07-22-20-53-56-den39.jpg', 'sanpham/sedan/2022-07-22-20-53-56-den40.jpg', 'sanpham/sedan/2022-07-22-20-53-56-den41.jpg', 'sanpham/sedan/2022-07-22-20-53-56-den42.jpg', 'sanpham/sedan/2022-07-22-20-53-56-den43.jpg'),
(88, NULL, 'sanpham/guong/2022-07-22-20-56-57-den44.jpg', 'sanpham/guong/2022-07-22-20-56-57-den45.jpg', 'sanpham/guong/2022-07-22-20-56-57-den46.jpg', 'sanpham/guong/2022-07-22-20-56-57-den47.jpg', 'sanpham/guong/2022-07-22-20-56-57-den48.jpg'),
(89, NULL, 'sanpham/camera/2022-07-22-20-57-39-ca1.jpeg', 'sanpham/camera/2022-07-22-20-57-39-ca2.jpg', 'sanpham/camera/2022-07-22-20-57-39-ca3.jpg', 'sanpham/camera/2022-07-22-20-57-39-ca4.png', 'sanpham/camera/2022-07-22-20-57-39-ca5.jpg'),
(90, NULL, 'sanpham/camera/2022-07-22-20-58-27-ca6.jpg', 'sanpham/camera/2022-07-22-20-58-27-ca7.jpg', 'sanpham/camera/2022-07-22-20-58-27-ca8.png', 'sanpham/camera/2022-07-22-20-58-27-ca9.png', 'sanpham/camera/2022-07-22-20-58-27-ca10.jpg'),
(91, NULL, 'sanpham/camera/2022-07-22-20-59-11-ca14.jpg', 'sanpham/camera/2022-07-22-20-59-11-ca12.jpg', 'sanpham/camera/2022-07-22-20-59-11-ca13.jpg', 'sanpham/camera/2022-07-22-20-59-11-ca15.jpg', 'sanpham/camera/2022-07-22-20-59-11-ca16.jpg'),
(92, NULL, 'sanpham/camera/2022-07-22-21-0-21-ca18.jpg', 'sanpham/camera/2022-07-22-21-0-21-ca17.jpg', 'sanpham/camera/2022-07-22-21-0-21-ca19.jpg', 'sanpham/camera/2022-07-22-21-0-21-ca20.jpg', 'sanpham/camera/2022-07-22-21-0-21-ca21.jpg'),
(99, NULL, 'sanpham/pickup/2022-08-02-23h-6m-17s-raptor1.jpeg', 'sanpham/pickup/2022-08-02-23h-6m-17s-raptor2.jpeg', 'sanpham/pickup/2022-08-02-23h-6m-17s-raptor3.jpeg', 'sanpham/pickup/2022-08-02-23h-6m-17s-raptor4.jpeg', 'sanpham/pickup/2022-08-02-23h-6m-17s-raptor5.jpeg'),
(100, NULL, 'sanpham/suv/2022-08-04-17h-18m-49s-glc1.webp', 'sanpham/suv/2022-08-04-17h-18m-49s-glc2.webp', 'sanpham/suv/2022-08-04-17h-18m-49s-glc3.webp', 'sanpham/suv/2022-08-04-17h-18m-49s-glc4.webp', 'sanpham/suv/2022-08-04-17h-18m-49s-glc5.webp'),
(101, NULL, 'sanpham/suv/2022-08-05-8h-20m-59s-crv1.jpg', 'sanpham/suv/2022-08-05-8h-20m-59s-crv2.jpg', 'sanpham/suv/2022-08-05-8h-20m-59s-crv3.jpeg', 'sanpham/suv/2022-08-05-8h-20m-59s-crv4.jpeg', 'sanpham/suv/2022-08-05-8h-20m-59s-crv5.jpeg');

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `infor`
--

INSERT INTO `infor` (`id_info`, `name`, `email`, `diachi`, `sdt`, `ngaytao`, `url_img`) VALUES
(1, 'admin', 'admin@gmail.com', 'HCM', '0999666999', '2022-07-15', NULL),
(2, 'nqduy', 'nqd@gmail.com', 'NT', '0917191919', '2022-07-15', NULL),
(3, 'abcAn', 'bach@gmail.com', 'NT', '0912222121', '2022-07-15', 'avt1.jpg'),
(4, 'thuyhuong', 'th@gmail.com', 'DP', '099123999', '2022-07-15', 'avt5.jpg'),
(5, 'Ngo Quoc Duy', 'nqd11@gmail.com', 'Nha Trang', '0917914444', '2022-07-27', 'avt4.jpg'),
(6, 'tien bui', 'tienbip@gmail.com', 'lam dong', '0911234112', '2022-07-29', NULL),
(7, 'Ngo Quoc Duy', 'ngoduy270197@gmail.com', 'Nha Trang', '917914496', '2022-07-31', 'avt1.jpg'),
(10, 'hoami', 'hoami@gmail.com', 'bauda', '0911234112', '2022-08-06', 'No1.jpg');

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
) ENGINE=InnoDB AUTO_INCREMENT=293 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loai_sp_chi_tiet`
--

INSERT INTO `loai_sp_chi_tiet` (`id_loaispct`, `name_chitiet`) VALUES
(5, 'SEDAN'),
(6, 'SUV'),
(7, 'MINI'),
(9, 'BANH'),
(10, 'INTERIOR'),
(11, 'GUONG'),
(12, 'LIGHT'),
(13, 'CAMERA'),
(289, 'KHAC'),
(291, 'ABC'),
(292, 'PICKUP');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `id_sp` int(11) NOT NULL AUTO_INCREMENT,
  `ten_sp` varchar(255) NOT NULL,
  `gia_sp` varchar(255) NOT NULL,
  `id_color` int(11) DEFAULT NULL,
  `soluong_sp` int(11) DEFAULT NULL,
  `giamgia` float DEFAULT NULL,
  `id_trangthai` int(11) DEFAULT NULL,
  `mota` varchar(255) DEFAULT NULL,
  `ngaytao` varchar(255) NOT NULL,
  `ngaycapnhat` varchar(255) DEFAULT NULL,
  `id_danhgia` int(11) DEFAULT NULL,
  `id_company` int(11) DEFAULT NULL,
  `id_loaisp` int(11) DEFAULT NULL,
  `id_loaispct` int(11) DEFAULT NULL,
  `id_hinhanh` int(11) DEFAULT NULL,
  `id_danhmuc` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_sp`),
  KEY `fkdanhgiasp` (`id_danhgia`),
  KEY `fkcompany` (`id_company`),
  KEY `fkloaisp` (`id_loaisp`),
  KEY `fkloaispct` (`id_loaispct`),
  KEY `fkcolor` (`id_color`),
  KEY `fktrangthai` (`id_trangthai`),
  KEY `fkhinhanh1` (`id_hinhanh`),
  KEY `fkdanhmuc` (`id_danhmuc`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `ten_sp`, `gia_sp`, `id_color`, `soluong_sp`, `giamgia`, `id_trangthai`, `mota`, `ngaytao`, `ngaycapnhat`, `id_danhgia`, `id_company`, `id_loaisp`, `id_loaispct`, `id_hinhanh`, `id_danhmuc`) VALUES
(20, 'AUDI A7', '229900000', 2, 14, 0.1, 1, 'Xe Đức, nhập khâu', '2022-07-22', '2022-08-04 19:32:58', NULL, 1, 1, 5, 72, NULL),
(21, 'HONDA CIVIC', '1200000000', 1, 15, 0.2, 1, 'Xe Japan, xịn sò', '2022-07-22', NULL, NULL, 4, 1, 5, 73, NULL),
(22, 'E200 Sport', '1299000000', 1, 8, 0.2, 1, 'Xe Đức, nhập khẩu, sang, xịn', '2022-07-22', NULL, NULL, 1, 1, 5, 74, NULL),
(23, 'G63 ', '8550000000', 2, 3, 0.1, 1, 'Xe Đức limited, chuyên chở gái đi đánh golf', '2022-07-22', NULL, NULL, 1, 1, 6, 75, NULL),
(25, 'AUDI X7', '7850000000', 1, 12, 0.1, 1, 'Xe Đức nhập khẩu, chở gái không thua kém gì G63', '2022-07-22', NULL, NULL, 1, 1, 6, 77, NULL),
(26, 'MINI A1', '55555666', 1, 7, 0.1, 1, 'MINI COOPER, nhìn bình thường nhưng chở gái vẫn ok', '2022-07-22', NULL, NULL, 3, 1, 7, 78, NULL),
(27, 'Beetle VWG', '8550000', 3, 3, 0.28, 1, 'Mua về để khè hàng xóm thôi, mấy nhỏ nhìn chắc gì thèm.\r\nHàng limited...', '2022-07-22', '2022-07-24-16h-6m-2s', NULL, 3, 1, 7, 79, NULL),
(29, 'AD1', '120000', 6, 10, 0.1, 1, 'Chóe Chóe', '2022-07-22', NULL, NULL, 3, 2, 12, 81, NULL),
(30, 'AD22', '550000', 6, 22, 0.1, 1, 'Xịn hơn cái trên', '2022-07-22', NULL, NULL, 3, 2, 12, 82, NULL),
(31, 'MGW11', '12990000', 1, 15, 0.1, 1, 'Quá đẹp', '2022-07-22', NULL, NULL, 1, 2, 12, 83, NULL),
(32, 'MWG991', '45411100', 6, 10, 0.2, 1, 'Nhìn mlem mlem', '2022-07-22', NULL, NULL, 2, 2, 12, 84, NULL),
(33, 'Guong ENA1', '12000000', 6, 25, 0.1, 1, '', '2022-07-22', NULL, NULL, 4, 2, 11, 85, NULL),
(34, 'Guong NLMA1', '6671220', 6, 14, 0.1, 1, 'Gương xe sang', '2022-07-22', NULL, NULL, 1, 2, 11, 86, NULL),
(35, 'Guong NLBA1', '1221151', 6, 7, 0, 1, '', '2022-07-22', NULL, NULL, 1, 1, 5, 87, NULL),
(36, 'Guong ABbz', '5500000', 6, 12, 0.1, 1, '', '2022-07-22', NULL, NULL, 4, 2, 11, 88, NULL),
(37, 'Camera A1', '1122311', 6, 30, 0.1, 1, '', '2022-07-22', NULL, NULL, 3, 2, 13, 89, NULL),
(38, 'Camera Ba1', '5500000', 6, 31, 0, 1, '', '2022-07-22', NULL, NULL, 3, 2, 13, 90, NULL),
(39, 'Camera Za1', '55112221', 6, 67, 0.1, 1, '', '2022-07-22', NULL, NULL, 2, 2, 13, 91, NULL),
(40, 'Camera ABZZ12', '5500000', 6, 44, 0, 1, '', '2022-07-22', NULL, NULL, 3, 2, 13, 92, NULL),
(41, 'Raptor 2022', '12599000000', 4, 10, 0, 1, 'Xe bán tải bán chạy', '2022-08-02-20h-56m-16s', '2022-08-02-23h-6m-17s', NULL, 1, 1, 292, 99, NULL),
(42, 'GLC 300', '34120000000', 3, 8, 0, 1, 'Xe nhập khẩu nguyên chiếc', '2022-08-04-17h-18m-49s', '2022-08-05 07:57:48', NULL, 1, 1, 6, 100, NULL),
(43, 'Honda CRV', '1300000000', 2, 12, 0, 1, 'Xe lắp ráp trong nước', '2022-08-05-8h-20m-59s', NULL, NULL, 4, 1, 6, 101, NULL);

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
-- Cấu trúc bảng cho bảng `trangthaitt`
--

DROP TABLE IF EXISTS `trangthaitt`;
CREATE TABLE IF NOT EXISTS `trangthaitt` (
  `trangthai` int(11) NOT NULL AUTO_INCREMENT,
  `tentt` varchar(255) NOT NULL,
  PRIMARY KEY (`trangthai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `id_danhgia` int(11) DEFAULT NULL,
  `code` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`us_id`),
  KEY `fkvaitro` (`id_vaitro`),
  KEY `fkinfo` (`id_info`),
  KEY `fkdanhgia` (`id_danhgia`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `userss`
--

INSERT INTO `userss` (`us_id`, `us_taikhoan`, `us_password`, `id_vaitro`, `id_info`, `id_danhgia`, `code`) VALUES
(1, 'admin', 'admin', 1, 1, NULL, '0'),
(2, 'nqd', '98d7902d', 2, 2, NULL, '0'),
(3, 'abc', 'a123', 2, 3, NULL, '0'),
(4, 'thhuong', 'a123', 2, 4, NULL, '0'),
(5, 'nqd', 'd2f991b7', 2, 5, NULL, '0'),
(6, 'tienbui', 'a123', 2, 6, NULL, '0'),
(7, 'nqd2', 'a12345', 3, 7, NULL, '0'),
(10, 'hoami', 'a12345', 2, 10, NULL, '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `voucher`
--

INSERT INTO `voucher` (`id_voucher`, `ten_voucher`, `code_voucher`, `mucgiam_voucher`, `ngayBD`, `ngayKT`) VALUES
(1, 'Sale he', 'he30', 0.3, '2022-07-15', '2022-08-15'),
(2, 'sale khai giang', 'skg40', 0.4, '2022-07-15', '2022-08-15'),
(3, 'Sale mid', 'sm10', 0.1, '2022-07-20', '2022-08-20'),
(7, 'event 7', 'ev7', 0.1, '2022-07-20', '2022-07-21'),
(8, 'Event 8', 'eva1', 0.22, '2022-07-20', '2022-07-24'),
(9, 'SP đầu tiên', 'SP1', 0.1, '2022-08-03', '2023-08-03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `voucher_chitiet`
--

DROP TABLE IF EXISTS `voucher_chitiet`;
CREATE TABLE IF NOT EXISTS `voucher_chitiet` (
  `id_vcct` int(11) NOT NULL AUTO_INCREMENT,
  `us_id` int(11) NOT NULL,
  `id_voucher` int(11) NOT NULL,
  PRIMARY KEY (`id_vcct`),
  KEY `us_id` (`us_id`),
  KEY `id_voucher` (`id_voucher`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `voucher_chitiet`
--

INSERT INTO `voucher_chitiet` (`id_vcct`, `us_id`, `id_voucher`) VALUES
(1, 4, 9);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `fkdanhgia` FOREIGN KEY (`us_id`) REFERENCES `userss` (`us_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fksp` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fkkhachhang` FOREIGN KEY (`us_id`) REFERENCES `userss` (`us_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD CONSTRAINT `fksanpham` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD CONSTRAINT `fkhinhanh` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id_sp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fkcolor` FOREIGN KEY (`id_color`) REFERENCES `color` (`id_color`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkcompany` FOREIGN KEY (`id_company`) REFERENCES `company` (`id_company`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkdanhmuc` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc` (`id_danhmuc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkhinhanh1` FOREIGN KEY (`id_hinhanh`) REFERENCES `hinhanh` (`id_hinhanh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkloaisp` FOREIGN KEY (`id_loaisp`) REFERENCES `loaisp` (`id_loaisp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkloaispct` FOREIGN KEY (`id_loaispct`) REFERENCES `loai_sp_chi_tiet` (`id_loaispct`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fktrangthai` FOREIGN KEY (`id_trangthai`) REFERENCES `trangthai` (`id_trangthai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `userss`
--
ALTER TABLE `userss`
  ADD CONSTRAINT `fkinfo` FOREIGN KEY (`id_info`) REFERENCES `infor` (`id_info`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkvaitro` FOREIGN KEY (`id_vaitro`) REFERENCES `vaitro` (`id_vaitro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `voucher_chitiet`
--
ALTER TABLE `voucher_chitiet`
  ADD CONSTRAINT `fkidus` FOREIGN KEY (`us_id`) REFERENCES `userss` (`us_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fkvc` FOREIGN KEY (`id_voucher`) REFERENCES `voucher` (`id_voucher`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
