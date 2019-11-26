-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 25, 2019 lúc 05:02 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `goldviewluxurydn`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `ID` int(11) NOT NULL,
  `HoTen` varchar(250) NOT NULL,
  `User` varchar(250) NOT NULL,
  `Pass` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`ID`, `HoTen`, `User`, `Pass`) VALUES
(1, 'GoldViewLuxuryDN', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_emailkh`
--

CREATE TABLE `tbl_emailkh` (
  `IDKH` bigint(20) NOT NULL,
  `HoVaTen` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `DienThoai` int(10) NOT NULL,
  `BDS` varchar(250) NOT NULL,
  `NhuCauKH` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_emailkh`
--

INSERT INTO `tbl_emailkh` (`IDKH`, `HoVaTen`, `Email`, `DienThoai`, `BDS`, `NhuCauKH`) VALUES
(1, 'Hiếu', 'abc@gmail.com', 373199017, 'aaaaaa', 'hhhhhh'),
(2, 'Hiếu Văn', 'phamdinhthangcr7@gmail.com', 325814781, 'Đất nền ', 'jjjj');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tbl_emailkh`
--
ALTER TABLE `tbl_emailkh`
  ADD PRIMARY KEY (`IDKH`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_emailkh`
--
ALTER TABLE `tbl_emailkh`
  MODIFY `IDKH` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
