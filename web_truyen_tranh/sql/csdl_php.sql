-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 20, 2019 lúc 12:54 PM
-- Phiên bản máy phục vụ: 10.1.40-MariaDB
-- Phiên bản PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `csdl_php`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_hoa_don`
--

CREATE TABLE `chi_tiet_hoa_don` (
  `MaDH` int(10) NOT NULL,
  `NgayGiao` date NOT NULL,
  `MaTT` text COLLATE utf8mb4_unicode_ci,
  `SoLuong` int(11) DEFAULT NULL,
  `DonGia` double DEFAULT NULL,
  `GiamGia` double DEFAULT NULL,
  `ThanhTien` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `MaDH` int(10) NOT NULL,
  `MaKH` int(10) NOT NULL,
  `NgayDat` date DEFAULT NULL,
  `DonGia` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `MaKH` int(10) NOT NULL,
  `TenKH` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GT` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT 'Nam',
  `SDT` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiaChi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`MaKH`, `TenKH`, `GT`, `SDT`, `DiaChi`, `Email`) VALUES
(10001, 'Trà Xuân Sơn', 'Nam', '0981077564', '7/6/2 linh đông - Quận Thủ Đức', 'traxuan@gmail.com'),
(10002, 'Trần An Phước', 'Nam', '0354789455', 'Phan Rang - Ninh Thuận', 'tranPhuoc@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `MaNV` int(10) NOT NULL,
  `TenNV` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SDT` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MaQuyen` int(10) DEFAULT NULL,
  `TaiKhoan` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MatKhau` char(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhan_vien`
--

INSERT INTO `nhan_vien` (`MaNV`, `TenNV`, `SDT`, `MaQuyen`, `TaiKhoan`, `MatKhau`) VALUES
(101, 'Trà Sơn', '0123456789', 1, 'admin', 'admin123'),
(102, 'Phúc', '0123457896', 2, 'nhanvien01', 'nv123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nha_xuat_ban`
--

CREATE TABLE `nha_xuat_ban` (
  `MaNXB` int(10) NOT NULL,
  `TenNXB` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SDT` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiaChi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nha_xuat_ban`
--

INSERT INTO `nha_xuat_ban` (`MaNXB`, `TenNXB`, `SDT`, `DiaChi`, `Email`) VALUES
(1, 'TruyenYY', '0334567898', '7/6 đường 3/2 - Quận 10', 'truyenyy789@gmail.com'),
(2, 'Phú', '0357896549', '7/6/2 đường Linh Đông - Quận Thủ Đức', 'HuynhPhu@NXB.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phan_quyen`
--

CREATE TABLE `phan_quyen` (
  `MaQuyen` int(10) NOT NULL,
  `TenQuyen` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phan_quyen`
--

INSERT INTO `phan_quyen` (`MaQuyen`, `TenQuyen`) VALUES
(1, 'Admin'),
(2, 'Nhân Viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `so_chuong`
--

CREATE TABLE `so_chuong` (
  `MaTT` int(10) NOT NULL,
  `MaChuong` int(10) NOT NULL,
  `TenChuong` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NgayDang` date NOT NULL,
  `NoiDung` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GiaXu` int(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `so_chuong`
--

INSERT INTO `so_chuong` (`MaTT`, `MaChuong`, `TenChuong`, `NgayDang`, `NoiDung`, `GiaXu`) VALUES
(1005, 1, 'Mang Thai Bảy Tháng', '2019-05-09', 'CVDV1.docx', 8),
(1005, 2, 'Dã Chủng Cua Người Đàn Ông Lạ Mặt', '2019-05-09', 'CVDV1.docx', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tac_gia`
--

CREATE TABLE `tac_gia` (
  `MaTG` int(10) NOT NULL,
  `TenTG` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SDT` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiaChi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tac_gia`
--

INSERT INTO `tac_gia` (`MaTG`, `TenTG`, `SDT`, `Email`, `DiaChi`) VALUES
(101, 'Thiên Tầm Thổ Đậu', '0335483214', 'thodau@gmail.com', '7/6 Trần Hưng Đạo - Hà Nội'),
(102, 'Quẫn Quẫn Hữu Yêu', '0354778451', 'huuyeu@gmail.com', '125 đường Hùng Vương - TP.HCM'),
(103, 'Bạo Mễ Hoa', '0325841535', 'baomehoa@gmail.com', '15 Tô Ngọc Vân - TP. Cần Thơ'),
(104, 'Vũ Phong', '0354789458', 'vuphong@gmail.com', 'Trung Quốc'),
(105, 'Lê Thiên', '0125488794', 'leThien@gmail.com', 'Tứ Xuyên - Trung Quốc'),
(106, 'Hồ Điệp Lam', '0124579497', 'DiepLam@gmail.com', 'Trung Châu - Trung Quốc'),
(107, 'Kim Tae-Hyung', '0145794567', '', 'Nhật Bản'),
(108, 'Phú Huỳnh', '0357894516', '', 'Phan Rang - Ninh Thuận');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanh_vien`
--

CREATE TABLE `thanh_vien` (
  `MaTV` int(10) NOT NULL,
  `TenTV` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SoCMND` int(10) NOT NULL,
  `SDT` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DiaChi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CapDo` int(3) DEFAULT '1',
  `SoXu` int(10) DEFAULT '0',
  `TaiKhoan` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Matkhau` char(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thanh_vien`
--

INSERT INTO `thanh_vien` (`MaTV`, `TenTV`, `SoCMND`, `SDT`, `DiaChi`, `Email`, `CapDo`, `SoXu`, `TaiKhoan`, `Matkhau`) VALUES
(3001, 'Ngọc Trinh', 264457895, '035678997', '456 Trần Hưng Đạo - Hà Nội', 'trinhngoc@gmail.com', 5, 456, 'trinhngoc1998', 'Ngoctring@156'),
(3002, 'Angela Phương Trinh', 264479456, '034567894', '654 Nơ Trang Long - Tp. HCM', 'Angelapt@gmail.com', 2, 85, 'angela654', 'phuong456'),
(3003, 'sơn', 123456789, '0324578998', '7/6/2 linh đông - Quận Thủ Đức', 'traxuan@gmail.com', 1, 0, 'son123', 'son123'),
(3004, 'Trà', 2147483647, '0385356987', '7/6/2 đường linh đônn', 'trason@twogap.com', 1, 0, 'tra21', 'tra21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tieu_thuyet`
--

CREATE TABLE `tieu_thuyet` (
  `MaTT` int(10) NOT NULL,
  `TenTT` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MaTacGia` int(10) NOT NULL,
  `MaTheLoai` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HinhAnh` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TrangThai` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT 'Chưa Hoàn Thành',
  `SoChuong` int(11) DEFAULT NULL,
  `MaNXB` int(10) DEFAULT NULL,
  `GiaBan` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tieu_thuyet`
--

INSERT INTO `tieu_thuyet` (`MaTT`, `TenTT`, `MaTacGia`, `MaTheLoai`, `HinhAnh`, `TrangThai`, `SoChuong`, `MaNXB`, `GiaBan`) VALUES
(1001, 'Võ Động Càn Khôn', 101, 'Tiên Hiệp, Kiếm Hiệp', 'vo-dong-can-khon.jpg', 'Hoàn Thành', 1580, 1, 625000),
(1002, 'Đấu Phá Thương Khung', 101, 'Tiên Hiệp, Kiếm Hiệp', 'dau-pha-thuong-khung.jpg', 'Hoàn Thành', 2532, 1, 730000),
(1003, 'Đại Chúa Tể', 101, 'Tiên Hiệp, Chúa Tể', 'dai-chua-te.jpg', 'Hoàn Thành', 3207, 1, 989000),
(1004, 'Mua Một Tặng Một Chọc Tức Vợ Yêu', 102, 'Ngôm Tình, Đô Thị', 'Vo.jpg', 'Hoàn Thành', 1352, 2, 659000),
(1005, 'Cô Vợ Ngọt Ngào Có Chút Bất Lương', 103, 'Ngôn Tình, Trọng sinh, Sủng', 'Co_Vo.jpg', 'Chưa Hoàn Thành', 2188, 2, 785000),
(1006, 'Mảng Hoang Ký', 105, 'Tiên Hiệp, Dị Giới, Huyền Huyễn', 'mang-hoang-ky.jpg', 'Chưa Hoàn Thành', 2587, 1, 459000),
(1007, 'Toàn Chức Cao Thủ', 106, 'Võng Du, Hài Hước', 'toan-chuc-cao-thu.jpg', 'Chưa Hoàn Thành', 1497, 2, 759000),
(1008, 'Legendary Moonlight Sculptor – Con Đường Đế Vương', 107, 'Võng Du, Light Novel', 'legendary-moonlight-sculptor.jpg', 'Chưa Hoàn Thành', 53, 2, 1350000),
(1009, 'YÊU ĐÚNG LÚC, GẶP ĐÚNG NGƯỜI (ĐÚNG THỜI ĐIỂM, ĐÚNG', 102, 'Hiện đại, võng du, Ngôn Tình', 'Yeu.jpg', 'Hoàn Thành', 33, 2, 150000),
(1010, 'TRỌNG SINH TU TIÊN TẠI ĐÔ THỊ', 108, 'Tiên Hiệp, Đô Thị, Trọng Sinh', 'TrongSinh.jpg', 'Hoàn Thành', 1085, 1, 365000),
(1011, 'VÔ TẬN ĐAN ĐIỀN', 101, 'Tiên Hiệp, Dị Giới, Huyền Huyễn, Trọng Sinh', 'vo-tan-dan-dien.jpg', 'Chưa Hoàn Thành', 3634, 1, 731000),
(1012, 'Linh Vũ Thiên Hạ', 104, 'Tiên Hiệp, Dị Giới, Huyền Huyễn, Xuyên Không', 'linh-vu-thien-ha.jpg', 'Hoàn Thành', 5024, 1, 650000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD PRIMARY KEY (`MaDH`,`NgayGiao`);

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`MaDH`),
  ADD KEY `DG_KH` (`MaKH`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Chỉ mục cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`MaNV`),
  ADD KEY `NV_PQ` (`MaQuyen`);

--
-- Chỉ mục cho bảng `nha_xuat_ban`
--
ALTER TABLE `nha_xuat_ban`
  ADD PRIMARY KEY (`MaNXB`);

--
-- Chỉ mục cho bảng `phan_quyen`
--
ALTER TABLE `phan_quyen`
  ADD PRIMARY KEY (`MaQuyen`);

--
-- Chỉ mục cho bảng `so_chuong`
--
ALTER TABLE `so_chuong`
  ADD PRIMARY KEY (`MaTT`,`MaChuong`);

--
-- Chỉ mục cho bảng `tac_gia`
--
ALTER TABLE `tac_gia`
  ADD PRIMARY KEY (`MaTG`);

--
-- Chỉ mục cho bảng `thanh_vien`
--
ALTER TABLE `thanh_vien`
  ADD PRIMARY KEY (`MaTV`);

--
-- Chỉ mục cho bảng `tieu_thuyet`
--
ALTER TABLE `tieu_thuyet`
  ADD PRIMARY KEY (`MaTT`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `MaDH` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `MaKH` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10003;

--
-- AUTO_INCREMENT cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  MODIFY `MaNV` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT cho bảng `nha_xuat_ban`
--
ALTER TABLE `nha_xuat_ban`
  MODIFY `MaNXB` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tac_gia`
--
ALTER TABLE `tac_gia`
  MODIFY `MaTG` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT cho bảng `thanh_vien`
--
ALTER TABLE `thanh_vien`
  MODIFY `MaTV` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3005;

--
-- AUTO_INCREMENT cho bảng `tieu_thuyet`
--
ALTER TABLE `tieu_thuyet`
  MODIFY `MaTT` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1013;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `DG_KH` FOREIGN KEY (`MaKH`) REFERENCES `khach_hang` (`MaKH`),
  ADD CONSTRAINT `don_hang_ibfk_1` FOREIGN KEY (`MaDH`) REFERENCES `chi_tiet_hoa_don` (`MaDH`);

--
-- Các ràng buộc cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD CONSTRAINT `NV_PQ` FOREIGN KEY (`MaQuyen`) REFERENCES `phan_quyen` (`MaQuyen`);

--
-- Các ràng buộc cho bảng `so_chuong`
--
ALTER TABLE `so_chuong`
  ADD CONSTRAINT `SC_TT_MaTT` FOREIGN KEY (`MaTT`) REFERENCES `tieu_thuyet` (`MaTT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
