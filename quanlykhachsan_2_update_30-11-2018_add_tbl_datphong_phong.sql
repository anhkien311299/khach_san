-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 01, 2018 lúc 07:38 AM
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
  `id_datphong` int(11) NOT NULL,
  `tenkh` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socmnd` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaynhanphong` date DEFAULT NULL,
  `ngaytraphong` date DEFAULT NULL,
  `ghichu` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `khachhang_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_datphong`
--

INSERT INTO `tbl_datphong` (`id_datphong`, `tenkh`, `socmnd`, `sdt`, `ngaynhanphong`, `ngaytraphong`, `ghichu`, `khachhang_id`) VALUES
(1, 'Tran A', '0413513', '02356346', '2018-11-14', '2018-11-15', '                        tfsdfsdgsdgwerwerwetwe\r\n                    \r\n                    ', NULL),
(3, 'KH A', '001001', '0010010010', '2018-11-27', '2018-11-30', 'qeweqweqweqweqweqwe', 2),
(4, 'Trần B', '076252254', '0942353636', '2018-11-16', '2018-11-27', 'hrrhrturhhth', NULL),
(6, 'Trần C', '0413513', '02356346', '2018-11-15', '2018-11-17', 'đasdfsafafa', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_datphong_phong`
--

CREATE TABLE `tbl_datphong_phong` (
  `id_datphong_phong` int(11) NOT NULL,
  `datphong_id` int(11) DEFAULT NULL,
  `phong_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_datphong_phong`
--

INSERT INTO `tbl_datphong_phong` (`id_datphong_phong`, `datphong_id`, `phong_id`) VALUES
(6, 1, 1),
(10, 3, 2),
(11, 1, 3),
(12, 1, 4),
(13, 3, 5),
(14, 4, 6),
(15, 4, 9);

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
(1, 'Dịch vụ 1', 100000, 'qwqwqwqwqwqwq'),
(2, 'DV 2', 23000, 'aqaqaqaqaqaq'),
(3, 'Dịch vụ 3', 34000, 'gegvxcbsshshsh'),
(4, 'Dịch vụ 4', 1000000, 'âfafafafafafaf'),
(5, 'Dịch vụ 5', 1200000, 'qrqrqrqrqrqrq');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dichvu_phong`
--

CREATE TABLE `tbl_dichvu_phong` (
  `id` int(11) NOT NULL,
  `phong_id` int(11) DEFAULT NULL,
  `dichvu_id` int(11) DEFAULT NULL,
  `giadichvu` float DEFAULT NULL,
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
(2, 'KH A', 0, 'Hà Tây', 'KHa@gmail.com', '0010010010', '001001', 'a', 'a', '2018-11-20 09:54:09'),
(3, 'KH B', 0, 'Hà Nội 2', 'KHb@gmail.com', '0020020020', '002002', 'b', 'b', '2018-11-20 09:54:58'),
(4, 'KH C', 1, 'Nam Định', 'KHc@gmail.com', '0030030030', '003003', 'c', 'c', '2018-11-20 09:55:57'),
(6, 'KH D', 1, 'Cà Mau', 'khd@gmail.com', '0040040040', '004004', 'd', 'd', '2018-11-30 21:01:36'),
(7, 'KH E', 0, 'Hà Nội', 'khe@gmail.com', '0050050050', '005005', 'e', 'e', '2018-11-30 21:02:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_loaiphong`
--

CREATE TABLE `tbl_loaiphong` (
  `id_loaiphong` int(11) NOT NULL,
  `tenloaiphong` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gia` float DEFAULT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_loaiphong`
--

INSERT INTO `tbl_loaiphong` (`id_loaiphong`, `tenloaiphong`, `gia`, `mota`) VALUES
(1, 'Chất lượng cao - đơn', 200000, 'Phòng chất lượng cao dùng cho 1 - 2 người'),
(2, 'Chất lượng cao - đôi', 400000, 'Phòng chất lượng cao dùng cho 3 - 4 người\r\n'),
(3, 'Chất lượng cao - gia đình', 800000, 'Phòng chất lượng cao dành cho 5 - 8 người'),
(6, 'Chất lượng trung bình - đơn', 100000, 'Phòng chất lượng trung bình dành cho 1 - 2 người'),
(7, 'Chất lượng trung bình - đôi', 200000, 'Phòng chất lượng trung bình dành cho 3 - 4 người'),
(8, 'Chất lượng trung bình - gia đình', 400000, 'Phòng chất lượng trung bình dành cho gia đình 5 - 8 người');

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
(22, 'Nguyễn E', 0, 'Nam Định', 'nguyene@gmail.com', '0505050505', '0505', 'e', 'e', '2018-11-29 10:32:24'),
(23, 'Nguyễn F', 1, 'Hà Nam', 'nguyenf@gmail.com', '0606060606', '0606', 'f', 'f', '2018-11-30 20:49:24'),
(24, 'Nguyễn G', 0, 'Hải Dương', 'nguyeng@gmail.com', '0707070707', '0707', 'g', 'g', '2018-11-30 20:50:56'),
(25, 'Nguyễn H', 0, 'Hà Nội', 'nguyenh@gmail.com', '0808080808', '0808', 'h', 'h', '2018-11-30 20:51:34'),
(26, 'Nguyễn I', 0, 'Hải Phòng', 'nguyeni@gmail.com', '0909090909', '0909', 'i', 'i', '2018-11-30 20:52:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_phong`
--

CREATE TABLE `tbl_phong` (
  `id_phong` int(11) NOT NULL,
  `tenphong` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trangthai` int(1) DEFAULT NULL,
  `loaiphong_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_phong`
--

INSERT INTO `tbl_phong` (`id_phong`, `tenphong`, `trangthai`, `loaiphong_id`) VALUES
(1, '101', 0, 1),
(2, '102', 0, 1),
(3, '103', 0, 1),
(4, '104', 0, 2),
(5, '105', 0, 2),
(6, '106', 0, 2),
(9, '107', 0, 3),
(10, '108', 0, 3),
(11, '109', 0, 6),
(12, '110', 0, 6),
(13, '111', 0, 6),
(14, '112', 0, 7),
(15, '113', 0, 7),
(16, '114', 0, 7),
(17, '115', 0, 8),
(18, '116', 0, 8);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_datphong`
--
ALTER TABLE `tbl_datphong`
  ADD PRIMARY KEY (`id_datphong`),
  ADD KEY `fk_datphong_khachhang` (`khachhang_id`);

--
-- Chỉ mục cho bảng `tbl_datphong_phong`
--
ALTER TABLE `tbl_datphong_phong`
  ADD PRIMARY KEY (`id_datphong_phong`),
  ADD KEY `fk_datphong_phong_datphong` (`datphong_id`),
  ADD KEY `fk_datphong_phong_phong` (`phong_id`);

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
  ADD PRIMARY KEY (`id_loaiphong`);

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
  ADD PRIMARY KEY (`id_phong`),
  ADD KEY `fk_phong_loaiphong` (`loaiphong_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_datphong`
--
ALTER TABLE `tbl_datphong`
  MODIFY `id_datphong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_datphong_phong`
--
ALTER TABLE `tbl_datphong_phong`
  MODIFY `id_datphong_phong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_loaiphong`
--
ALTER TABLE `tbl_loaiphong`
  MODIFY `id_loaiphong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_nhanvien`
--
ALTER TABLE `tbl_nhanvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `tbl_phong`
--
ALTER TABLE `tbl_phong`
  MODIFY `id_phong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_datphong`
--
ALTER TABLE `tbl_datphong`
  ADD CONSTRAINT `fk_datphong_khachhang` FOREIGN KEY (`khachhang_id`) REFERENCES `tbl_khachhang` (`id`);

--
-- Các ràng buộc cho bảng `tbl_datphong_phong`
--
ALTER TABLE `tbl_datphong_phong`
  ADD CONSTRAINT `fk_datphong_phong_datphong` FOREIGN KEY (`datphong_id`) REFERENCES `tbl_datphong` (`id_datphong`),
  ADD CONSTRAINT `fk_datphong_phong_phong` FOREIGN KEY (`phong_id`) REFERENCES `tbl_phong` (`id_phong`);

--
-- Các ràng buộc cho bảng `tbl_dichvu_phong`
--
ALTER TABLE `tbl_dichvu_phong`
  ADD CONSTRAINT `fk_datdichvu_dichvu` FOREIGN KEY (`dichvu_id`) REFERENCES `tbl_dichvu` (`id`),
  ADD CONSTRAINT `fk_datdichvu_phong` FOREIGN KEY (`phong_id`) REFERENCES `tbl_phong` (`id_phong`),
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
  ADD CONSTRAINT `fk_phong_loaiphong` FOREIGN KEY (`loaiphong_id`) REFERENCES `tbl_loaiphong` (`id_loaiphong`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
