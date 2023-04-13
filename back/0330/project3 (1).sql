-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 23-03-23 15:11
-- 서버 버전: 10.4.27-MariaDB
-- PHP 버전: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `project3`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `p_branch`
--

CREATE TABLE `p_branch` (
  `branch_seq` int(4) NOT NULL,
  `branch_name` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `branch_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `branch_phone_number` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `bracnch_picture` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `branch_sales` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=euckr COLLATE=euckr_korean_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `p_notice`
--

CREATE TABLE `p_notice` (
  `notice_seq` int(10) NOT NULL,
  `notice_writer` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `notice_date` date DEFAULT NULL,
  `notice_contents` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `p_region`
--

CREATE TABLE `p_region` (
  `region_seq` int(10) NOT NULL,
  `region_name` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `p_region`
--

INSERT INTO `p_region` (`region_seq`, `region_name`) VALUES
(1, '서울특별시'),
(2, '경기도'),
(3, '??');

-- --------------------------------------------------------

--
-- 테이블 구조 `p_reservation`
--

CREATE TABLE `p_reservation` (
  `reservation_seq` int(10) NOT NULL,
  `branch_seq` int(4) NOT NULL,
  `theme_seq` int(4) NOT NULL,
  `register_date` date DEFAULT NULL,
  `reservation_date` varchar(16) DEFAULT NULL,
  `reservation_time` varchar(8) DEFAULT NULL,
  `play_time` varchar(16) DEFAULT NULL,
  `theme_name` varchar(32) DEFAULT NULL,
  `customer_name` varchar(16) DEFAULT NULL,
  `customer_phone_number` varchar(20) DEFAULT NULL,
  `booked_member` int(4) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `purchase_way` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `p_reservation`
--

INSERT INTO `p_reservation` (`reservation_seq`, `branch_seq`, `theme_seq`, `register_date`, `reservation_date`, `reservation_time`, `play_time`, `theme_name`, `customer_name`, `customer_phone_number`, `booked_member`, `price`, `purchase_way`) VALUES
(4, 1, 1, '2023-03-23', '2023-03-22', '13', '120', '방탈출', '홍길동', '010-1234-5678', 3, 20000, '카드결제');

-- --------------------------------------------------------

--
-- 테이블 구조 `p_reservation_status`
--

CREATE TABLE `p_reservation_status` (
  `reservation_status_seq` int(10) NOT NULL,
  `p_Reservation_status_date` date DEFAULT NULL,
  `theme_seq` int(4) DEFAULT NULL,
  `booking_possibiity_1` varchar(1) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `booking_possibiity_2` varchar(1) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `booking_possibiity_3` varchar(1) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `booking_possibiity_4` varchar(1) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `booking_possibiity_5` varchar(1) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `booking_possibiity_6` varchar(1) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `booking_possibiity_7` varchar(1) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `booking_possibiity_8` varchar(1) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `p_theme`
--

CREATE TABLE `p_theme` (
  `theme_seq` int(4) NOT NULL,
  `branch_seq` int(4) NOT NULL,
  `theme_name` varchar(16) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `theme_description` varchar(400) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `theme_picture` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `theme_price` int(10) DEFAULT NULL,
  `theme_level` int(1) DEFAULT NULL,
  `theme_scare` int(1) DEFAULT NULL,
  `theme_jenre` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `theme_min` int(2) DEFAULT NULL,
  `theme_max` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `p_branch`
--
ALTER TABLE `p_branch`
  ADD PRIMARY KEY (`branch_seq`);

--
-- 테이블의 인덱스 `p_notice`
--
ALTER TABLE `p_notice`
  ADD PRIMARY KEY (`notice_seq`);

--
-- 테이블의 인덱스 `p_region`
--
ALTER TABLE `p_region`
  ADD PRIMARY KEY (`region_seq`);

--
-- 테이블의 인덱스 `p_reservation`
--
ALTER TABLE `p_reservation`
  ADD PRIMARY KEY (`reservation_seq`);

--
-- 테이블의 인덱스 `p_reservation_status`
--
ALTER TABLE `p_reservation_status`
  ADD PRIMARY KEY (`reservation_status_seq`);

--
-- 테이블의 인덱스 `p_theme`
--
ALTER TABLE `p_theme`
  ADD PRIMARY KEY (`theme_seq`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `p_branch`
--
ALTER TABLE `p_branch`
  MODIFY `branch_seq` int(4) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `p_notice`
--
ALTER TABLE `p_notice`
  MODIFY `notice_seq` int(10) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `p_region`
--
ALTER TABLE `p_region`
  MODIFY `region_seq` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 테이블의 AUTO_INCREMENT `p_reservation`
--
ALTER TABLE `p_reservation`
  MODIFY `reservation_seq` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 테이블의 AUTO_INCREMENT `p_reservation_status`
--
ALTER TABLE `p_reservation_status`
  MODIFY `reservation_status_seq` int(10) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `p_theme`
--
ALTER TABLE `p_theme`
  MODIFY `theme_seq` int(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
