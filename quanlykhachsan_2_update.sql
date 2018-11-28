-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2018 lúc 01:52 PM
-- Phiên bản máy phục vụ: 10.1.29-MariaDB
-- Phiên bản PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlykhachsan_2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_datphong`
--

CREATE TABLE `tbl_datphong` (
  `id` int(11) NOT NULL,
  `tenkh` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socmnd` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thoigianden` datetime DEFAULT NULL,
  `ghichu` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `khachhang_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_datphong`
--

INSERT INTO `tbl_datphong` (`id`, `tenkh`, `socmnd`, `sdt`, `thoigianden`, `ghichu`, `khachhang_id`) VALUES
(1, 'Tran A', '0413513', '02356346', '2018-11-03 00:00:00', 'werwerwetwe', NULL),
(2, 'Trần B', '014142', '095235525', '2018-12-23 00:00:00', NULL, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dichvu`
--

CREATE TABLE `tbl_dichvu` (
  `id` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gia` float DEFAULT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_dichvu`
--

INSERT INTO `tbl_dichvu` (`id`, `ten`, `gia`, `mota`) VALUES
(1, 'DV 1', 100000, 'qwqwqwqwqwqwq'),
(2, 'DV 2', 23000, 'aqaqaqaqaqaq'),
(5, 'DV 3', 23000, 'cczxczczxcxc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dichvu_phong`
--

CREATE TABLE `tbl_dichvu_phong` (
  `id` int(11) NOT NULL,
  `phong_id` int(11) DEFAULT NULL,
  `dichvu_id` int(11) DEFAULT NULL,
  `gia` float DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `hoadon_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hoadon`
--

CREATE TABLE `tbl_hoadon` (
  `id` int(11) NOT NULL,
  `tenkh` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socmnd` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tongtien` float DEFAULT NULL,
  `khachhang_id` int(11) DEFAULT NULL,
  `nguoilap_id` int(11) DEFAULT NULL,
  `ngaytao` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `id` int(11) NOT NULL,
  `hoten` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gioitinh` int(1) DEFAULT NULL,
  `diachi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socmnd` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tendangnhap` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `matkhau` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaytao` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`id`, `hoten`, `gioitinh`, `diachi`, `email`, `sdt`, `socmnd`, `tendangnhap`, `matkhau`, `ngaytao`) VALUES
(2, 'KH A', 0, 'Hà Tây', 'KHa@gmail.com', '0010010010', '001001', 'KHa', 'KHa', '2018-11-20 09:54:09'),
(3, 'KH B', 0, 'Hà Nội 2', 'KHb@gmail.com', '0020020020', '002002', 'KHb', 'KHb', '2018-11-20 09:54:58'),
(4, 'KH C', 1, 'Nam Định', 'KHc@gmail.com', '0030030030', '003003', 'KHc', 'KHc', '2018-11-20 09:55:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_loaiphong`
--

CREATE TABLE `tbl_loaiphong` (
  `id` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gia` float DEFAULT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_loaiphong`
--

INSERT INTO `tbl_loaiphong` (`id`, `ten`, `gia`, `mota`) VALUES
(1, 'Đơn Vip', 1200000, 'Phòng Vip\r\nDùng cho 1 - 2 người'),
(2, 'Vip 2', 3100000, 'zxccsdfsf'),
(3, 'Vip 3', 3000000, 'sfdfsdfsfsfdfdfdfd'),
(6, 'Vip 4', 1200000, 'nnfgnfgjfgj');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nhanvien`
--

CREATE TABLE `tbl_nhanvien` (
  `id` int(11) NOT NULL,
  `hoten` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gioitinh` int(1) DEFAULT NULL,
  `diachi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socmnd` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tendangnhap` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `matkhau` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaytao` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_nhanvien`
--

INSERT INTO `tbl_nhanvien` (`id`, `hoten`, `gioitinh`, `diachi`, `email`, `sdt`, `socmnd`, `tendangnhap`, `matkhau`, `ngaytao`) VALUES
(16, 'Nguyễn B', 0, 'Hà Tây', 'nguyenb@gmail.com', '0202020202', '0202', 'b', 'b', '2018-11-20 08:25:55'),
(18, 'Nguyễn D', 1, 'Hà Nội', 'nguyend@gmail.com', '0404040404', '0404', 'd', 'd', '2018-11-20 09:11:00'),
(19, 'Nguyễn C', 0, 'Hà Nội', 'nguyenc@gmail.com', '0303030303', '0303', 'c', 'c', '2018-11-20 09:29:44'),
(20, 'Nguyễn A', 1, 'Cà Mau', 'nguyena@gmail.com', '0101010101', '0101', 'a', 'a', '2018-11-20 09:39:16'),
(21, 'Nguyễn E', 1, 'Hà Tây', 'nguyene@gmail.com', '0505050505', '0505', 'e', 'e', '2018-11-28 19:10:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_phong`
--

CREATE TABLE `tbl_phong` (
  `id` int(11) NOT NULL,
  `ten` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trangthai` int(1) DEFAULT NULL,
  `loaiphong_id` int(11) DEFAULT NULL,
  `datphong_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_phong`
--

INSERT INTO `tbl_phong` (`id`, `ten`, `trangthai`, `loaiphong_id`, `datphong_id`) VALUES
(1, '101', 0, 1, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_datphong`
--
ALTER TABLE `tbl_datphong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_datphong_khachhang` (`khachhang_id`);

--
-- Chỉ mục cho bảng `tbl_dichvu`
--
ALTER TABLE `tbl_dichvu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_dichvu_phong`
--
ALTER TABLE `tbl_dichvu_phong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_datdichvu_phong` (`phong_id`),
  ADD KEY `fk_datdichvu_dichvu` (`dichvu_id`),
  ADD KEY `fk_dichvu_phong_hoadon` (`hoadon_id`);

--
-- Chỉ mục cho bảng `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_hoadon_khachhang` (`khachhang_id`),
  ADD KEY `fk_hoadon_nhanvien` (`nguoilap_id`);

--
-- Chỉ mục cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_socmnd` (`socmnd`),
  ADD UNIQUE KEY `uq_tendangnhap` (`tendangnhap`);

--
-- Chỉ mục cho bảng `tbl_loaiphong`
--
ALTER TABLE `tbl_loaiphong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_nhanvien`
--
ALTER TABLE `tbl_nhanvien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_socmnd` (`socmnd`),
  ADD UNIQUE KEY `uq_tendangnhap` (`tendangnhap`);

--
-- Chỉ mục cho bảng `tbl_phong`
--
ALTER TABLE `tbl_phong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_phong_loaiphong` (`loaiphong_id`),
  ADD KEY `fk_phong_datphong` (`datphong_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_datphong`
--
ALTER TABLE `tbl_datphong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_dichvu`
--
ALTER TABLE `tbl_dichvu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_dichvu_phong`
--
ALTER TABLE `tbl_dichvu_phong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_loaiphong`
--
ALTER TABLE `tbl_loaiphong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_nhanvien`
--
ALTER TABLE `tbl_nhanvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `tbl_phong`
--
ALTER TABLE `tbl_phong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_datphong`
--
ALTER TABLE `tbl_datphong`
  ADD CONSTRAINT `fk_datphong_khachhang` FOREIGN KEY (`khachhang_id`) REFERENCES `tbl_khachhang` (`id`);

--
-- Các ràng buộc cho bảng `tbl_dichvu_phong`
--
ALTER TABLE `tbl_dichvu_phong`
  ADD CONSTRAINT `fk_datdichvu_dichvu` FOREIGN KEY (`dichvu_id`) REFERENCES `tbl_dichvu` (`id`),
  ADD CONSTRAINT `fk_datdichvu_phong` FOREIGN KEY (`phong_id`) REFERENCES `tbl_phong` (`id`),
  ADD CONSTRAINT `fk_dichvu_phong_hoadon` FOREIGN KEY (`hoadon_id`) REFERENCES `tbl_hoadon` (`id`);

--
-- Các ràng buộc cho bảng `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  ADD CONSTRAINT `fk_hoadon_khachhang` FOREIGN KEY (`khachhang_id`) REFERENCES `tbl_khachhang` (`id`),
  ADD CONSTRAINT `fk_hoadon_nhanvien` FOREIGN KEY (`nguoilap_id`) REFERENCES `tbl_nhanvien` (`id`);

--
-- Các ràng buộc cho bảng `tbl_phong`
--
ALTER TABLE `tbl_phong`
  ADD CONSTRAINT `fk_phong_datphong` FOREIGN KEY (`datphong_id`) REFERENCES `tbl_datphong` (`id`),
  ADD CONSTRAINT `fk_phong_loaiphong` FOREIGN KEY (`loaiphong_id`) REFERENCES `tbl_loaiphong` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
