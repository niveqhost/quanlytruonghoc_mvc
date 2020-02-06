-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 23, 2019 lúc 12:03 PM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `schooldb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giaovien`
--

CREATE TABLE `tbl_giaovien` (
  `giaovienID` int(11) NOT NULL,
  `magiaovien` varchar(100) NOT NULL,
  `tengiaovien` varchar(100) NOT NULL,
  `bomon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_giaovien`
--

INSERT INTO `tbl_giaovien` (`giaovienID`, `magiaovien`, `tengiaovien`, `bomon`) VALUES
(1, 'gv01', 'Đào Thị Ánh', 'Văn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hocsinh`
--

CREATE TABLE `tbl_hocsinh` (
  `hsID` int(11) NOT NULL,
  `mahs` varchar(100) NOT NULL,
  `tenhs` varchar(100) NOT NULL,
  `lop` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_hocsinh`
--

INSERT INTO `tbl_hocsinh` (`hsID`, `mahs`, `tenhs`, `lop`) VALUES
(21, 'hs21', 'Nguyễn Phương Thảo', '11A3'),
(26, 'hs22', 'Ngô Phương Tâm', '5A'),
(30, 'hs30', 'An Nhiên', '12G3'),
(32, 'hs26', 'Cris Phạm', 'Chuyên Địa');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_giaovien`
--
ALTER TABLE `tbl_giaovien`
  ADD PRIMARY KEY (`giaovienID`);

--
-- Chỉ mục cho bảng `tbl_hocsinh`
--
ALTER TABLE `tbl_hocsinh`
  ADD PRIMARY KEY (`hsID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_giaovien`
--
ALTER TABLE `tbl_giaovien`
  MODIFY `giaovienID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_hocsinh`
--
ALTER TABLE `tbl_hocsinh`
  MODIFY `hsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
