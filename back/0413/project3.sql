-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 23-04-13 18:53
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
  `region_seq` int(4) NOT NULL,
  `branch_name` varchar(16) DEFAULT NULL,
  `branch_address` varchar(255) DEFAULT NULL,
  `branch_phone_number` varchar(30) DEFAULT NULL,
  `bracnch_picture` varchar(100) DEFAULT NULL,
  `branch_sales` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `p_branch`
--

INSERT INTO `p_branch` (`branch_seq`, `region_seq`, `branch_name`, `branch_address`, `branch_phone_number`, `bracnch_picture`, `branch_sales`) VALUES
(1, 1, '노량진점', '서울특별시 동작구 노량진동 118-8, 지하1층 셜록홈즈 노량진점', '02.827.0054', '', 200000),
(2, 1, '노원점', '서울특별시 노원구 노해로81길 12-20 민진빌딩 5층', '02.951.0522', '', 300000),
(3, 1, '대학로점', '서울특별시 종로구 대학로 10길 5 4층(동숭동)', '02.2277.0198', '', 400000),
(4, 1, '서울대압구정점', '서울특별시 관악구 관악로16길 13 4층', '02.000.0000', '', 500000),
(5, 1, '성신여대점', '서울 성북구 동선동1가 87 4층 셜록홈즈', '02.929.8870', '', 600000),
(6, 1, '신림2호점', '서울특별시 관악구 신림로 327, 지하1층(신림동) 셜록홈즈 신림2호점 3번출구 도보20초', '02.889.6558', '', 700000),
(7, 1, '잠실1호점', '서울특별시 송파구 백제고분로 7길 19 3,4층(잠실동)', '02.422.0053', '', 800000),
(8, 1, '잠실2점', '서울특별시 송파구 백제고분로 7길 31(잠실동 182-5) 4층 셜록홈즈 잠실2호점', '02.418.0153', '', 900000),
(9, 1, '종각점', '서울특별시 종로구 삼일대로17길 17(관철동 12-23) 4층 셜록홈즈 종각점', '02.725.0522', '', 350000),
(10, 2, '구리점', '경기도 구리시 경춘로 218-5 3층 셜록홈즈 구리점', '031.551.9993', '', 210000),
(11, 2, '뉴안양점', '경기도 안양시 만안구 안양로304번길 25 (안양동) 3층 셜록홈즈 뉴안양점', '031.465.3663', '', 310000),
(12, 2, '동탄점', '경기도 화성시 동탄중심상가2길 5, 리더스 프라자 3층 셜록홈즈 동탄점', '031.613.3010', '', 410000),
(13, 2, '부천점', '경기도 부천시 부일로 460번길 5, 3층 (심곡동)', '032.665.2019', '', 510000),
(14, 2, '분당야탑점', '경기도 성남시 분당구 양현로 310번길 25, 2층 202호 셜록홈즈 야탑점', '031.706.3600', '', 610000),
(15, 2, '서현점', '경기도 성남시 분당구 분당로53번길 14, 지하1층 106호 셜록홈즈 방탈출 서현점', '031.702.7073', '', 710000),
(16, 2, '의정부점', '경기 의정부시 행복로 16 삼성빌딩 4층, 셜록홈즈 의정부점', '031.821.8977', '', 810000),
(17, 2, '평택점', '경기도 평택시 평택2로 10번길 10-4, 2층(평택동)', '031.651.7785', '', 910000),
(18, 3, '구월인천점', '인천광역시 남동구 성말로 10 (구월동 1463) 효명프라자 5층, 셜록홈즈 구월인천점', '032.437.4567', '', 3700000),
(19, 3, '부평점', '인천광역시 부평구 부평문화로77, 3층(부평동)', '032.503.8098', '', 7700000),
(20, 4, '대전 신세계백화점', '34126 대전광역시 유성구 엑스포로 1 대전 신세계 Art&Science 7층', '042.607.8708', '', 850000),
(21, 4, '아산점', '충청남도 아산시 번영로 220, 3층', '041.546.7799', '', 450000),
(22, 4, '천안 1호점', '충청남도 천안시 동남구 신부동 461-10 3층 아리따움 옆 건물 3F', '041.553.5677', '', 750000),
(23, 4, '천안 2호점', '충남 천안시 동남구 먹거리11길 33 와이틴건물 4층', '041.554.5677', '', 950000),
(24, 4, '청주점', '충북 청주시 상당구 상당로 81번길 58, 3층', '043.222.6750', '', 8150000),
(25, 5, '여수점', '전라남도 여수시 시청동3길 35-18(학동) 대형빌딩 2층', '061.685.7105', '', 110000),
(26, 7, '대구동성로점', '대구광역시 중구 동성로5길 45. 3층 셜록홈즈 대구동성로점', '053.253.2225', '', 1110000);

-- --------------------------------------------------------

--
-- 테이블 구조 `p_notice`
--

CREATE TABLE `p_notice` (
  `notice_seq` int(10) NOT NULL,
  `notice_writer` varchar(20) DEFAULT NULL,
  `notice_date` date DEFAULT NULL,
  `notice_contents` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
(3, '인천광역시'),
(4, '충청 대전 세종'),
(5, '전라 광주'),
(6, '제주 강원'),
(7, '경상도');

-- --------------------------------------------------------

--
-- 테이블 구조 `p_reservation`
--

CREATE TABLE `p_reservation` (
  `reservation_seq` int(10) NOT NULL,
  `region_seq` int(4) NOT NULL,
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

INSERT INTO `p_reservation` (`reservation_seq`, `region_seq`, `branch_seq`, `theme_seq`, `register_date`, `reservation_date`, `reservation_time`, `play_time`, `theme_name`, `customer_name`, `customer_phone_number`, `booked_member`, `price`, `purchase_way`) VALUES
(1, 0, 1, 1, '2023-04-13', '2023-03-22', '13', '120', '방탈출', '홍길동', '010-1234-5678', 3, 20000, '카드결제'),
(2, 0, 1, 1, '2023-04-13', '2023-03-22', '13', '120', '방탈출', '홍길동', '010-1234-5678', 3, 20000, '카드결제');

-- --------------------------------------------------------

--
-- 테이블 구조 `p_reservation_status`
--

CREATE TABLE `p_reservation_status` (
  `reservation_status_seq` int(10) NOT NULL,
  `reservation_status_date` date DEFAULT NULL,
  `region_seq` int(4) NOT NULL,
  `branch_seq` int(4) NOT NULL,
  `theme_seq` int(4) DEFAULT NULL,
  `booking_possibility_1` varchar(1) DEFAULT NULL,
  `booking_possibility_2` varchar(1) DEFAULT NULL,
  `booking_possibility_3` varchar(1) DEFAULT NULL,
  `booking_possibility_4` varchar(1) DEFAULT NULL,
  `booking_possibility_5` varchar(1) DEFAULT NULL,
  `booking_possibility_6` varchar(1) DEFAULT NULL,
  `booking_possibility_7` varchar(1) DEFAULT NULL,
  `booking_possibility_8` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `p_theme`
--

CREATE TABLE `p_theme` (
  `theme_seq` int(4) NOT NULL,
  `branch_seq` int(4) NOT NULL,
  `theme_name` varchar(16) DEFAULT NULL,
  `theme_description` varchar(400) DEFAULT NULL,
  `theme_picture` varchar(80) DEFAULT NULL,
  `theme_price` int(10) DEFAULT NULL,
  `theme_level` int(1) DEFAULT NULL,
  `theme_scare` int(1) DEFAULT NULL,
  `theme_jenre` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
  MODIFY `branch_seq` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- 테이블의 AUTO_INCREMENT `p_notice`
--
ALTER TABLE `p_notice`
  MODIFY `notice_seq` int(10) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `p_region`
--
ALTER TABLE `p_region`
  MODIFY `region_seq` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- 테이블의 AUTO_INCREMENT `p_reservation`
--
ALTER TABLE `p_reservation`
  MODIFY `reservation_seq` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
