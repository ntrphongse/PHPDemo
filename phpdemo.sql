-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 15, 2020 lúc 04:18 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phpdemo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `students`
--

CREATE TABLE `students` (
  `studentID` char(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `studentName` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL,
  `studentSex` char(1) COLLATE utf8_vietnamese_ci NOT NULL DEFAULT 'M',
  `studentMark` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `students`
--

INSERT INTO `students` (`studentID`, `studentName`, `studentSex`, `studentMark`) VALUES
('SB140125', 'Lê Võ Quỳnh Như', 'F', 2.6),
('SB150256', 'Trần Tuấn Anh', 'M', 7.8),
('SE140125', 'Trần Ngọc Bích', 'F', 7.6),
('SE140784', 'Lê Thị Ánh Ngọc', 'F', 4.7),
('SE140875', 'Võ Trọng Nhân', 'M', 5.8),
('SE150247', 'Võ Huỳnh Đức Minh', 'M', 7),
('SE150248', 'Võ Văn Thanh Phúc', 'M', 8.7),
('SE150974', 'Nguyễn Trần Phong', 'M', 8.2),
('SE151248', 'Trần Ngọc Lan', 'F', 7.4),
('SE151254', 'Nguyễn Tuấn Anh', 'M', 9.4),
('SS120457', 'Trần Văn Luận', 'M', 8.9),
('SS150785', 'Lê Văn Đông', 'M', 5.4),
('SS151541', 'Lý Hoài Ngọc', 'F', 10),
('SS151765', 'Trần Tuấn Kiệt', 'M', 8.9);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`studentID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
