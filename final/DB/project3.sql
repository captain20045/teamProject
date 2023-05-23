-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 23-05-23 13:03
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
  `branch_picture` varchar(100) DEFAULT NULL,
  `branch_sales` int(10) DEFAULT NULL,
  `branch_map` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `p_branch`
--

INSERT INTO `p_branch` (`branch_seq`, `region_seq`, `branch_name`, `branch_address`, `branch_phone_number`, `branch_picture`, `branch_sales`, `branch_map`) VALUES
(1, 1, '노량진점', '서울특별시 동작구 노량진동 118-8, 지하1층 셜록홈즈 노량진점', '02.827.0054', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/branch1.jpg', 200000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.806064367405!2d126.94193881202207!3d37.512491971936086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c9f67c6d76753%3A0x54897c1fae804a36!2z7IWc66Gd7ZmI7KaI64W465-J7KeE7KCQ!5e0!3m2!1sko!2skr!4v1682516670775!5m2!1sko!2skr'),
(2, 1, '노원점', '서울특별시 노원구 노해로81길 12-20 민진빌딩 5층', '02.951.0522', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/branch2.jpg', 300000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d789.6820255151879!2d127.06334272855065!3d37.65559589824366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357cb915289e39c9%3A0xc5e5ba976c876663!2z7ISc7Jq47Yq567OE7IucIOuFuOybkOq1rCDrhbjtlbTroZw4Meq4uCAxMi0yMA!5e0!3m2!1sko!2skr!4v1682650412218!5m2!1sko!2skr'),
(3, 1, '대학로점', '서울특별시 종로구 대학로 10길 5 4층(동숭동)', '02.2277.0198', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/branch3.png', 400000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d790.4660037293401!2d127.0019144285505!3d37.58181969824487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca32c75117f2b%3A0xb6b4c1862dba46f6!2z7IWc66Gd7ZmI7KaI64yA7ZWZ66Gc7KCQ!5e0!3m2!1sko!2skr!4v1682651329227!5m2!1sko!2skr'),
(4, 1, '서울대압구정점', '서울특별시 관악구 관악로16길 13 4층', '02.000.0000', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/branch4.jpg', 500000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d197.88512050567164!2d126.95349892100432!3d37.480505007882606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c9f89d1fd5da9%3A0x8181897a8451b67f!2z7ISc7Jq47Yq567OE7IucIOq0gOyVheq1rCDqtIDslYXroZwxNuq4uCAxMw!5e0!3m2!1sko!2skr!4v1683546591946!5m2!1sko!2skr'),
(5, 1, '성신여대점', '서울 성북구 동선동1가 87 4층 셜록홈즈', '02.929.8870', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/branch5.png', 600000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d197.5883614957966!2d127.01756070142667!3d37.59241951911088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357cbcc742a2d78f%3A0x8df89e77288893f9!2z7ISc7Jq47Yq567OE7IucIOyEseu2geq1rCDrj5nshKDrj5kx6rCAIDg3!5e0!3m2!1sko!2skr!4v1683546678496!5m2!1sko!2skr'),
(6, 1, '신림2호점', '서울특별시 관악구 신림로 327, 지하1층(신림동) 셜록홈즈 신림2호점 3번출구 도보20초', '02.889.6558', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/branch6.jpg', 700000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d197.87718369460555!2d126.92932432503109!3d37.48350186641283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c9fbf73a1ad13%3A0xf20b72a9252c8230!2z7ISc7Jq47Yq567OE7IucIOq0gOyVheq1rCDsi6DrprzroZwgMzI3!5e0!3m2!1sko!2skr!4v1683546743982!5m2!1sko!2skr'),
(7, 1, '잠실1호점', '서울특별시 송파구 백제고분로 7길 19 3,4층(잠실동)', '02.422.0053', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/branch7.jpg', 800000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d324.9277144109302!2d127.08088182274213!3d37.510855619197386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca45283323b41%3A0x7d73b298445c74f7!2z7IWc66Gd7ZmI7KaIIOyeoOyLpOygkA!5e0!3m2!1sko!2skr!4v1683546782650!5m2!1sko!2skr'),
(8, 1, '잠실2호점', '서울특별시 송파구 백제고분로 7길 31(잠실동 182-5) 4층 셜록홈즈 잠실2호점', '02.418.0153', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/branch8.jpg', 900000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.8735270042034!2d127.07983151202197!3d37.5109009719364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca452b70fefff%3A0xb727a74bca4f885f!2z7IWc66Gd7ZmI7KaI7J6g7IukMu2YuOygkA!5e0!3m2!1sko!2skr!4v1683546815267!5m2!1sko!2skr'),
(9, 1, '종각점', '서울특별시 종로구 삼일대로17길 17(관철동 12-23) 4층 셜록홈즈 종각점', '02.725.0522', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/branch9.jpg', 350000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.4057813899335!2d126.9839224120244!3d37.56906147192133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca385c004623b%3A0x37e8127500a8135e!2z7IWc66Gd7ZmI7KaIIOyiheqwgeygkA!5e0!3m2!1sko!2skr!4v1683546852402!5m2!1sko!2skr'),
(10, 2, '구리점', '경기도 구리시 경춘로 218-5 3층 셜록홈즈 구리점', '031.551.9993', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/branch10.jpg', 210000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3161.090549861618!2d127.13726521202553!3d37.600027871913284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357cb0b0851f5eb1%3A0x46d3fc91594a230d!2z7IWc66Gd7ZmI7KaIIC0g67Cp7YOI7Lac7Lm07Y6Y!5e0!3m2!1sko!2skr!4v1683546934804!5m2!1sko!2skr'),
(11, 2, '뉴안양점', '경기도 안양시 만안구 안양로304번길 25 (안양동) 3층 셜록홈즈 뉴안양점', '031.465.3663', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/branch11.jpg', 310000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3169.571310828822!2d126.91950041201773!3d37.39996917196577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b60cfd6ec36c3%3A0xa7d44f54b07d4f2f!2z7IWc66Gd7ZmI7KaI64m07JWI7JaR7KCQ!5e0!3m2!1sko!2skr!4v1683546975045!5m2!1sko!2skr'),
(12, 2, '동탄점', '경기도 화성시 동탄중심상가2길 5, 리더스 프라자 3층 셜록홈즈 동탄점', '031.613.3010', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/branch12.jpg', 410000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3177.759493207714!2d127.07011241201025!3d37.205941572017935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b44377792bc39%3A0xfb70abcd344a4bec!2z7IWc66Gd7ZmI7KaIIOuPme2DhOygkA!5e0!3m2!1sko!2skr!4v1683547002735!5m2!1sko!2skr'),
(13, 2, '부천점', '경기도 부천시 부일로 460번길 5, 3층 (심곡동)', '032.665.2019', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/branch13.jpg', 510000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d327.7490645112228!2d126.78109109205461!3d37.48583405487564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b7d2cafc2dae1%3A0x3313cb324ff2d7b3!2z6rK96riw64-EIOu2gOyynOyLnCDrtoDsnbzroZw0NjDrsojquLggNQ!5e0!3m2!1sko!2skr!4v1683547054825!5m2!1sko!2skr'),
(14, 2, '분당야탑점', '경기도 성남시 분당구 양현로 310번길 25, 2층 202호 셜록홈즈 야탑점', '031.706.3600', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/branch14.jpg', 610000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12678.634864850981!2d127.1141707631555!3d37.39790255145837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca90897778951%3A0xdbde7818d037bad3!2z7IWc66Gd7ZmI7KaIIOuwqe2DiOy2nOy5tO2OmA!5e0!3m2!1sko!2skr!4v1683547120487!5m2!1sko!2skr'),
(15, 2, '서현점', '경기도 성남시 분당구 분당로53번길 14, 지하1층 106호 셜록홈즈 방탈출 서현점', '031.702.7073', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/branch15.jpg', 710000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3170.233217226468!2d127.1193948120172!3d37.38431657196992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b595145705951%3A0x8cc880eda4e6a76b!2z7IWc66Gd7ZmI7KaIIOyEnO2YhDLtmLjsoJA!5e0!3m2!1sko!2skr!4v1683547162525!5m2!1sko!2skr'),
(16, 2, '의정부점', '경기도 의정부시 행복로 16 삼성빌딩 4층, 셜록홈즈 의정부점', '031.821.8977', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/branch16.jpg', 810000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3155.1279425648245!2d127.04650611203095!3d37.740142571877314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357cc730ebe38457%3A0x1391f8b2bff78828!2z6rK96riw64-EIOydmOygleu2gOyLnCDtlonrs7XroZwgMTY!5e0!3m2!1sko!2skr!4v1683547206139!5m2!1sko!2skr'),
(17, 2, '평택점', '경기도 평택시 평택2로 10번길 10-4, 2층(평택동)', '031.651.7785', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/branch17.jpg', 910000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3186.7443835623644!2d127.08537461200196!3d36.9920342720772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b3afc7bdde425%3A0xdb9adf3ee0b5b20c!2z6rK96riw64-EIO2Pie2DneyLnCDtj4ntg50y66GcMTDrsojquLggMTAtNA!5e0!3m2!1sko!2skr!4v1683547241849!5m2!1sko!2skr'),
(18, 3, '구월인천점', '인천광역시 남동구 성말로 10 (구월동 1463) 효명프라자 5층, 셜록홈즈 구월인천점', '032.437.4567', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/branch18.jpg', 3700000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3167.665726407712!2d126.69892411201953!3d37.44500077195385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b7bda06adef3d%3A0x77d61ed147e1e838!2z7IWc66Gd7ZmI7KaI7J247LKc6rWs7JuU7KCQ!5e0!3m2!1sko!2skr!4v1683547274981!5m2!1sko!2skr'),
(19, 3, '부평점', '인천광역시 부평구 부평문화로77, 3층(부평동)', '032.503.8098', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/branch19.jpg', 7700000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3165.5767442920705!2d126.72235261202133!3d37.49431327194087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b7c4efc7a24a9%3A0x7f8e942ea90ee378!2z7J247LKc6rSR7Jet7IucIOu2gO2Pieq1rCDrtoDtj4nrrLjtmZTroZwgNzc!5e0!3m2!1sko!2skr!4v1683547305835!5m2!1sko!2skr'),
(20, 4, '대전 신세계백화점', '대전광역시 유성구 엑스포로 1 대전 신세계 Art&Science 7층', '042.607.8708', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/branch20.jpg', 850000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3212.405863275626!2d127.37932421197846!3d36.37516767225611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35654bae32f20155%3A0x53f15d3671ddf236!2z7Iug7IS46rOE67Cx7ZmU7KCQIOuMgOyghOyLoOyEuOqzhOyVhO2KuOyVpOyCrOydtOyWuOyKpA!5e0!3m2!1sko!2skr!4v1683547345858!5m2!1sko!2skr'),
(21, 4, '아산점', '충청남도 아산시 번영로 220, 3층', '041.546.7799', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/branch21.jpg', 450000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3195.437760182066!2d127.01235681199405!3d36.78405327213608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357adeeb3c6a6b77%3A0xf94df596f5ed5c47!2z7Lap7LKt64Ko64-EIOyVhOyCsOyLnCDrsojsmIHroZwgMjIw!5e0!3m2!1sko!2skr!4v1683547380778!5m2!1sko!2skr'),
(22, 4, '천안 1호점', '충청남도 천안시 동남구 신부동 461-10 3층 아리따움 옆 건물 3F', '041.553.5677', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/branch22.jpg', 750000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3194.007079468309!2d127.15295101199528!3d36.81835027212624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b285a5584dccd%3A0x45634acb0872b243!2z7Lap7LKt64Ko64-EIOyynOyViOyLnCDrj5nrgqjqtawg7Iug67aA64-ZIDQ2MS0xMA!5e0!3m2!1sko!2skr!4v1683547428265!5m2!1sko!2skr'),
(23, 4, '천안 2호점', '충청남도 천안시 동남구 먹거리11길 33 와이틴건물 4층', '041.554.5677', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/branch23.jpg', 950000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1597.0005847281068!2d127.15481505669281!3d36.81849189303155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b285a5a162783%3A0x4e6a93e1f1989b19!2z7Lap7LKt64Ko64-EIOyynOyViOyLnCDrj5nrgqjqtawg66i56rGw66asMTHquLggMzM!5e0!3m2!1sko!2skr!4v1683547473498!5m2!1sko!2skr'),
(24, 4, '청주점', '충청북도 청주시 상당구 상당로 81번길 58, 3층', '043.222.6750', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/branch24.jpg', 8150000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3201.6144060558872!2d127.48446381198836!3d36.63566717217909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x356527c9a1bc9c89%3A0xab68be0ec84692fb!2z7Lap7LKt67aB64-EIOyyreyjvOyLnCDsg4Hri7nqtawg7IOB64u566GcODHrsojquLggNTg!5e0!3m2!1sko!2skr!4v1683547508383!5m2!1sko!2skr'),
(25, 5, '여수점', '전라남도 여수시 시청동3길 35-18(학동) 대형빌딩 2층', '061.685.7105', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/branch25.jpg', 110000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3277.9350712653572!2d127.66348251191816!3d34.75722837278667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x356dde4c6267055f%3A0x8b08a6f3dfecad78!2z7KCE652864Ko64-EIOyXrOyImOyLnCDsi5zssq3rj5kz6ri4IDM1LTE4!5e0!3m2!1sko!2skr!4v1683547540217!5m2!1sko!2skr'),
(26, 7, '대구동성로점', '대구광역시 중구 동성로5길 45. 3층 셜록홈즈 대구동성로점', '053.253.2225', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/branch26.jpg', 1110000, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3233.2373811209936!2d128.59450731195926!3d35.86769917241312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3565e3c43900848b%3A0xf6d650fcfcfb6bf0!2z7IWc66Gd7ZmI7KaI64yA6rWs64-Z7ISx66Gc7KCQ!5e0!3m2!1sko!2skr!4v1683547568421!5m2!1sko!2skr');

-- --------------------------------------------------------

--
-- 테이블 구조 `p_notice`
--

CREATE TABLE `p_notice` (
  `notice_seq` int(10) NOT NULL,
  `branch_seq` int(11) DEFAULT NULL,
  `notice_title` varchar(50) DEFAULT NULL,
  `notice_writer` varchar(20) DEFAULT NULL,
  `notice_picture` varchar(400) DEFAULT NULL,
  `notice_date` date DEFAULT NULL,
  `notice_contents` varchar(255) DEFAULT NULL,
  `hits` int(5) DEFAULT NULL
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
  `theme_number` int(4) NOT NULL,
  `theme_name` varchar(32) DEFAULT NULL,
  `reservation_date` varchar(16) DEFAULT NULL,
  `reservation_time` varchar(8) DEFAULT NULL,
  `customer_name` varchar(16) DEFAULT NULL,
  `customer_phone_number` varchar(20) DEFAULT NULL,
  `booked_member` int(4) DEFAULT NULL,
  `price` int(10) DEFAULT NULL,
  `purchase_way` varchar(100) DEFAULT NULL,
  `memo` varchar(255) DEFAULT NULL,
  `register_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `p_reservation`
--

INSERT INTO `p_reservation` (`reservation_seq`, `region_seq`, `branch_seq`, `theme_number`, `theme_name`, `reservation_date`, `reservation_time`, `customer_name`, `customer_phone_number`, `booked_member`, `price`, `purchase_way`, `memo`, `register_date`) VALUES
(75, 1, 1, 1, '4', '2023-05-24', '13:00', '', '010--', 2, 0, '현장결제', '', '2023-05-16'),
(78, 1, 1, 1, '4', '2023-05-24', '18:00', 'ww', '010-1234-1234', 2, 0, '현장결제', '', '2023-05-16'),
(79, 2, 10, 8, '대영어시대 : Age of English', '2023-05-26', '12:30', 'aaa', '010-1234-1234', 2, 0, '무통장결제(신구은행 111-222222-33-444 정의표)', 'zxc', '2023-05-16'),
(82, 1, 1, 1, '4', '2023-05-25', '17:00', 'ㅁㅁ', '010-123-123', 3, 60000, '현장결제', '', '2023-05-17'),
(83, 1, 1, 2, '더 헝거:욕망의 큐브', '2023-05-25', '15:00', '33', '010-33-33', 5, 105000, '무통장결제(신구은행 111-222222-33-444 정의표)', '', '2023-05-17'),
(88, 1, 3, 6, '괴담수집가', '2023-05-24', '13:20', 'a', '010-1234-1234', 3, 61500, '현장결제', '', '2023-05-22'),
(89, 1, 3, 6, '괴담수집가', '2023-05-24', '13:20', 'ab', '010-1234-1234', 3, 61500, '현장결제', '', '2023-05-22'),
(90, 1, 3, 6, '괴담수집가', '2023-05-24', '09:20', '1234', '010-22-33', 2, 41000, '현장결제', '', '2023-05-22'),
(91, 1, 3, 6, '괴담수집가', '2023-05-24', '13:20', '1', '010-1-1', 2, 41000, '현장결제', '', '2023-05-22'),
(92, 3, 18, 12, '악마를 보았다', '2023-06-02', '11:30', 'aa', '010-1-1', 2, 51000, '현장결제', '', '2023-05-22'),
(93, 1, 3, 6, '괴담수집가', '2023-05-24', '13:20', '1', '010-1-1', 2, 41000, '현장결제', '', '2023-05-22'),
(94, 1, 3, 6, '괴담수집가', '2023-05-24', '13:20', '1', '010-1-1', 2, 41000, '현장결제', '', '2023-05-22'),
(95, 1, 3, 6, '괴담수집가', '2023-05-24', '13:20', '1', '010-1-1', 2, 41000, '현장결제', '', '2023-05-22'),
(96, 1, 3, 6, '괴담수집가', '2023-05-24', '13:20', '1', '010-1-1', 2, 41000, '현장결제', '', '2023-05-22'),
(97, 1, 3, 6, '괴담수집가', '2023-05-24', '13:20', '1', '010-1-1', 2, 41000, '현장결제', '', '2023-05-22'),
(98, 1, 3, 6, '괴담수집가', '2023-05-24', '13:20', '1', '010-1-1', 2, 41000, '현장결제', '', '2023-05-22'),
(99, 1, 3, 6, '괴담수집가', '2023-05-24', '13:20', '1', '010-1-1', 2, 41000, '현장결제', '', '2023-05-22'),
(100, 1, 3, 6, '괴담수집가', '2023-05-24', '13:20', '1', '010-1-1', 2, 41000, '현장결제', '', '2023-05-22'),
(101, 1, 3, 6, '괴담수집가', '2023-05-24', '13:20', '1', '010-1-1', 2, 41000, '현장결제', '', '2023-05-22'),
(102, 1, 3, 6, '괴담수집가', '2023-05-24', '13:20', '1', '010-1-1', 2, 41000, '현장결제', '', '2023-05-22'),
(103, 1, 3, 6, '괴담수집가', '2023-05-24', '13:20', '1', '010-1-1', 2, 41000, '현장결제', '', '2023-05-22'),
(104, 1, 3, 6, '괴담수집가', '2023-05-24', '13:20', '1', '010-1-1', 2, 41000, '현장결제', '', '2023-05-22'),
(105, 1, 3, 6, '괴담수집가', '2023-05-24', '13:20', '1', '010-1-1', 2, 41000, '현장결제', '', '2023-05-22'),
(106, 1, 3, 6, '괴담수집가', '2023-05-24', '13:20', '1', '010-1-1', 2, 41000, '현장결제', '', '2023-05-22');

-- --------------------------------------------------------

--
-- 테이블 구조 `p_reservation_status`
--

CREATE TABLE `p_reservation_status` (
  `reservation_status_seq` int(10) NOT NULL,
  `reservation_status_date` date DEFAULT NULL,
  `region_seq` int(4) NOT NULL,
  `branch_seq` int(4) NOT NULL,
  `theme_number` int(4) DEFAULT NULL,
  `booking_possibility_1` varchar(1) DEFAULT NULL,
  `booking_possibility_2` varchar(1) DEFAULT NULL,
  `booking_possibility_3` varchar(1) DEFAULT NULL,
  `booking_possibility_4` varchar(1) DEFAULT NULL,
  `booking_possibility_5` varchar(1) DEFAULT NULL,
  `booking_possibility_6` varchar(1) DEFAULT NULL,
  `booking_possibility_7` varchar(1) DEFAULT NULL,
  `booking_possibility_8` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `p_reservation_status`
--

INSERT INTO `p_reservation_status` (`reservation_status_seq`, `reservation_status_date`, `region_seq`, `branch_seq`, `theme_number`, `booking_possibility_1`, `booking_possibility_2`, `booking_possibility_3`, `booking_possibility_4`, `booking_possibility_5`, `booking_possibility_6`, `booking_possibility_7`, `booking_possibility_8`) VALUES
(34, '2023-05-24', 1, 1, 1, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N'),
(35, '2023-05-26', 2, 10, 8, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(38, '2023-05-25', 1, 1, 1, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'N', 'Y'),
(39, '2023-05-25', 1, 1, 2, 'Y', 'Y', 'Y', 'Y', 'N', 'Y', 'Y', 'Y'),
(40, '2023-05-29', 1, 1, 1, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(41, '2023-05-31', 2, 10, 8, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(42, '2023-05-30', 1, 1, 2, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(43, '2023-05-24', 1, 3, 6, 'N', 'Y', 'N', 'Y', 'Y', 'Y', 'Y', 'Y'),
(44, '2023-06-02', 3, 18, 12, 'Y', 'Y', 'N', 'Y', 'Y', 'Y', 'Y', 'Y');

-- --------------------------------------------------------

--
-- 테이블 구조 `p_theme`
--

CREATE TABLE `p_theme` (
  `theme_seq` int(4) NOT NULL,
  `branch_seq` int(4) NOT NULL,
  `theme_number` int(4) DEFAULT NULL,
  `theme_name` varchar(30) DEFAULT NULL,
  `theme_description` varchar(400) DEFAULT NULL,
  `theme_picture` varchar(200) DEFAULT NULL,
  `theme_price` int(10) DEFAULT NULL,
  `theme_level` int(1) DEFAULT NULL,
  `theme_scare` int(1) DEFAULT NULL,
  `theme_jenre` varchar(20) DEFAULT NULL,
  `theme_start` time DEFAULT NULL,
  `theme_people` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `p_theme`
--

INSERT INTO `p_theme` (`theme_seq`, `branch_seq`, `theme_number`, `theme_name`, `theme_description`, `theme_picture`, `theme_price`, `theme_level`, `theme_scare`, `theme_jenre`, `theme_start`, `theme_people`) VALUES
(1, 1, 1, '4', '죽음을 부르는 숫자', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme1.jpg', 20000, 3, 1, '-', '11:00:00', '2~6'),
(2, 1, 1, '4', '죽음을 부르는 숫자', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme1.jpg', 20000, 3, 1, '-', '13:00:00', '2~6'),
(3, 1, 1, '4', '죽음을 부르는 숫자', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme1.jpg', 20000, 3, 1, '-', '15:00:00', '2~6'),
(4, 1, 2, '더 헝거:욕망의 큐브', '인간의 욕망이 커져 모든 것을 집어삼키고 마침내 세상에는 거대한 상자 하나만이 덩그러니 남겨졌다. 우리는 그것을 큐브라고 불렀다.', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme2.png', 21000, 4, 0, '아케이드', '11:00:00', '2~4'),
(5, 1, 2, '더 헝거:욕망의 큐브', '인간의 욕망이 커져 모든 것을 집어삼키고 마침내 세상에는 거대한 상자 하나만이 덩그러니 남겨졌다. 우리는 그것을 큐브라고 불렀다.', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme2.png', 21000, 4, 0, '아케이드', '13:00:00', '2~4'),
(6, 2, 3, '[프리미엄]펜타킬', '죽이는 게 있는데... 들어볼래요?', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme3.png', 22000, 4, 2, '스릴러', '15:00:00', '2~4'),
(7, 2, 3, '[프리미엄]펜타킬', '죽이는 게 있는데... 들어볼래요?', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme3.png', 22000, 4, 2, '스릴러', '17:00:00', '2~4'),
(8, 2, 4, '무인도', '불시착한 이곳에는 사람이 살지않는다.. 그런데 누군가의 흔적이 느껴진다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme4.png', 23000, 2, 0, '\r\n어드벤처', '12:00:00', '2~6'),
(9, 2, 4, '무인도', '불시착한 이곳에는 사람이 살지않는다.. 그런데 누군가의 흔적이 느껴진다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme4.png', 23000, 2, 0, '\r\n어드벤처', '14:00:00', '2~6'),
(10, 2, 4, '무인도', '불시착한 이곳에는 사람이 살지않는다.. 그런데 누군가의 흔적이 느껴진다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme4.png', 23000, 2, 0, '\r\n어드벤처', '16:00:00', '2~6'),
(11, 2, 5, '201호202호', '셜록아파트 201호에 살고 있는 신두호는 오랜만에 친구와 술을 진탕 마시고 다음날 아침 깨어납니다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme5.png', 24000, 3, 1, '\r\n스릴러', '17:00:00', '2~4'),
(12, 2, 5, '201호202호', '셜록아파트 201호에 살고 있는 신두호는 오랜만에 친구와 술을 진탕 마시고 다음날 아침 깨어납니다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme5.png', 24000, 3, 1, '\r\n스릴러', '19:00:00', '2~4'),
(13, 3, 6, '괴담수집가', '당신은 딸의 생일선물을 살 돈을 마련하기 위해 괴담수집상에 당신의 이야기를 팔러 왔다. 물론 이곳 상점은 평범한 곳은 아니다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme6.png', 20500, 5, 2, '\r\n스릴러', '11:20:00', '2~4'),
(14, 3, 6, '괴담수집가', '당신은 딸의 생일선물을 살 돈을 마련하기 위해 괴담수집상에 당신의 이야기를 팔러 왔다. 물론 이곳 상점은 평범한 곳은 아니다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme6.png', 20500, 5, 2, '\r\n스릴러', '13:20:00', '2~4'),
(15, 4, 7, '[프리미엄]디스트로이드 : Destroid', 'AI로봇수칙 1.로봇은 인간을 죽일 수 없다. 2.로봇은 감정을 가질수 없고 꿈을 꿀수 없다. 3.로봇은 절대 거짓말을 할 수 없다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme7.png', 21500, 3, 1, '\r\n스릴러/SF', '11:30:00', '2~4'),
(16, 4, 7, '[프리미엄]디스트로이드 : Destroid', 'AI로봇수칙 1.로봇은 인간을 죽일 수 없다. 2.로봇은 감정을 가질수 없고 꿈을 꿀수 없다. 3.로봇은 절대 거짓말을 할 수 없다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme7.png', 21500, 3, 1, '\r\n스릴러/SF', '13:30:00', '2~4'),
(17, 4, 7, '[프리미엄]디스트로이드 : Destroid', 'AI로봇수칙 1.로봇은 인간을 죽일 수 없다. 2.로봇은 감정을 가질수 없고 꿈을 꿀수 없다. 3.로봇은 절대 거짓말을 할 수 없다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme7.png', 21500, 3, 1, '\r\n스릴러/SF', '15:30:00', '2~4'),
(18, 10, 8, '대영어시대 : Age of English', '대항해시대. 교역을 위해 나섰지만, 폭풍에 휘말려 어딘지도 모를 곳에 떨어졌다. 그런 내게 찾아온 동포... 그런데 이 남자 하는 말이 이상하다. “Nice to meet you. Uh..umm..거.. 어데 하씬교?” “What????”\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme8.png', 22500, 4, 0, '\r\n코믹', '09:50:00', '2~4'),
(19, 11, 9, 'Below : 성 안 이야기', '“성에 들어오려는 수많은 사람들... 나와는 반대야.” 여자는 그렇게 움직이기 시작했다.”\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme9.png', 23500, 3, 0, '\r\n판타지', '10:55:00', '2~4'),
(20, 1, 1, '4', '죽음을 부르는 숫자', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme1.jpg', 20000, 3, 1, '-', '17:00:00', '2~6'),
(22, 1, 1, '4', '죽음을 부르는 숫자', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme1.jpg', 20000, 3, 1, '-', '12:00:00', '2~6'),
(23, 1, 1, '4', '죽음을 부르는 숫자', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme1.jpg', 20000, 3, 1, '-', '14:00:00', '2~6'),
(24, 1, 1, '4', '죽음을 부르는 숫자', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme1.jpg', 20000, 3, 1, '-', '16:00:00', '2~6'),
(25, 1, 1, '4', '죽음을 부르는 숫자', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme1.jpg', 20000, 3, 1, '-', '18:00:00', '2~6'),
(26, 1, 2, '더 헝거:욕망의 큐브', '인간의 욕망이 커져 모든 것을 집어삼키고 마침내 세상에는 거대한 상자 하나만이 덩그러니 남겨졌다. 우리는 그것을 큐브라고 불렀다.', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme2.png', 21000, 4, 0, '아케이드', '12:00:00', '2~4'),
(27, 1, 2, '더 헝거:욕망의 큐브', '인간의 욕망이 커져 모든 것을 집어삼키고 마침내 세상에는 거대한 상자 하나만이 덩그러니 남겨졌다. 우리는 그것을 큐브라고 불렀다.', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme2.png', 21000, 4, 0, '아케이드', '14:00:00', '2~4'),
(28, 1, 2, '더 헝거:욕망의 큐브', '인간의 욕망이 커져 모든 것을 집어삼키고 마침내 세상에는 거대한 상자 하나만이 덩그러니 남겨졌다. 우리는 그것을 큐브라고 불렀다.', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme2.png', 21000, 4, 0, '아케이드', '15:00:00', '2~4'),
(29, 1, 2, '더 헝거:욕망의 큐브', '인간의 욕망이 커져 모든 것을 집어삼키고 마침내 세상에는 거대한 상자 하나만이 덩그러니 남겨졌다. 우리는 그것을 큐브라고 불렀다.', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme2.png', 21000, 4, 0, '아케이드', '16:20:00', '2~4'),
(30, 2, 3, '[프리미엄]펜타킬', '죽이는 게 있는데... 들어볼래요?', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme3.png', 22000, 4, 2, '스릴러', '16:00:00', '2~4'),
(31, 2, 3, '[프리미엄]펜타킬', '죽이는 게 있는데... 들어볼래요?', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme3.png', 22000, 4, 2, '스릴러', '18:10:00', '2~4'),
(32, 2, 4, '무인도', '불시착한 이곳에는 사람이 살지않는다.. 그런데 누군가의 흔적이 느껴진다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme4.png', 23000, 2, 0, '\r\n어드벤처', '10:00:00', '2~6'),
(33, 2, 4, '무인도', '불시착한 이곳에는 사람이 살지않는다.. 그런데 누군가의 흔적이 느껴진다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme4.png', 23000, 2, 0, '\r\n어드벤처', '18:00:00', '2~6'),
(34, 2, 5, '201호202호', '셜록아파트 201호에 살고 있는 신두호는 오랜만에 친구와 술을 진탕 마시고 다음날 아침 깨어납니다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme5.png', 24000, 3, 1, '\r\n스릴러', '15:10:00', '2~4'),
(35, 2, 5, '201호202호', '셜록아파트 201호에 살고 있는 신두호는 오랜만에 친구와 술을 진탕 마시고 다음날 아침 깨어납니다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme5.png', 24000, 3, 1, '\r\n스릴러', '13:10:00', '2~4'),
(36, 2, 5, '201호202호', '셜록아파트 201호에 살고 있는 신두호는 오랜만에 친구와 술을 진탕 마시고 다음날 아침 깨어납니다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme5.png', 24000, 3, 1, '\r\n스릴러', '11:10:00', '2~4'),
(37, 2, 5, '201호202호', '셜록아파트 201호에 살고 있는 신두호는 오랜만에 친구와 술을 진탕 마시고 다음날 아침 깨어납니다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme5.png', 24000, 3, 1, '\r\n스릴러', '09:30:00', '2~4'),
(38, 3, 6, '괴담수집가', '당신은 딸의 생일선물을 살 돈을 마련하기 위해 괴담수집상에 당신의 이야기를 팔러 왔다. 물론 이곳 상점은 평범한 곳은 아니다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme6.png', 20500, 5, 2, '\r\n스릴러', '09:20:00', '2~4'),
(39, 3, 6, '괴담수집가', '당신은 딸의 생일선물을 살 돈을 마련하기 위해 괴담수집상에 당신의 이야기를 팔러 왔다. 물론 이곳 상점은 평범한 곳은 아니다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme6.png', 20500, 5, 2, '\r\n스릴러', '15:20:00', '2~4'),
(40, 3, 6, '괴담수집가', '당신은 딸의 생일선물을 살 돈을 마련하기 위해 괴담수집상에 당신의 이야기를 팔러 왔다. 물론 이곳 상점은 평범한 곳은 아니다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme6.png', 20500, 5, 2, '\r\n스릴러', '17:20:00', '2~4'),
(41, 4, 7, '[프리미엄]디스트로이드 : Destroid', 'AI로봇수칙 1.로봇은 인간을 죽일 수 없다. 2.로봇은 감정을 가질수 없고 꿈을 꿀수 없다. 3.로봇은 절대 거짓말을 할 수 없다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme7.png', 21500, 3, 1, '\r\n스릴러/SF', '09:30:00', '2~4'),
(42, 4, 7, '[프리미엄]디스트로이드 : Destroid', 'AI로봇수칙 1.로봇은 인간을 죽일 수 없다. 2.로봇은 감정을 가질수 없고 꿈을 꿀수 없다. 3.로봇은 절대 거짓말을 할 수 없다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme7.png', 21500, 3, 1, '\r\n스릴러/SF', '17:00:00', '2~4'),
(43, 4, 7, '[프리미엄]디스트로이드 : Destroid', 'AI로봇수칙 1.로봇은 인간을 죽일 수 없다. 2.로봇은 감정을 가질수 없고 꿈을 꿀수 없다. 3.로봇은 절대 거짓말을 할 수 없다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme7.png', 21500, 3, 1, '\r\n스릴러/SF', '12:30:00', '2~4'),
(44, 5, 10, 'Molaq : 성 밖 이야기', '““기필코 The Castle에 들어가서 왕위를 쟁취하리라!” 남자는 그렇게 움직이기 시작했다.”\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme10.png', 24500, 4, 0, '\r\n판타지', '09:10:00', '2~4'),
(45, 5, 10, 'Molaq : 성 밖 이야기', '““기필코 The Castle에 들어가서 왕위를 쟁취하리라!” 남자는 그렇게 움직이기 시작했다.”\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme10.png', 24500, 4, 0, '\r\n판타지', '10:20:00', '2~4'),
(46, 5, 10, 'Molaq : 성 밖 이야기', '““기필코 The Castle에 들어가서 왕위를 쟁취하리라!” 남자는 그렇게 움직이기 시작했다.”\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme10.png', 24500, 4, 0, '\r\n판타지', '11:30:00', '2~4'),
(47, 5, 10, 'Molaq : 성 밖 이야기', '““기필코 The Castle에 들어가서 왕위를 쟁취하리라!” 남자는 그렇게 움직이기 시작했다.”\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme10.png', 24500, 4, 0, '\r\n판타지', '12:40:00', '2~4'),
(48, 5, 10, 'Molaq : 성 밖 이야기', '““기필코 The Castle에 들어가서 왕위를 쟁취하리라!” 남자는 그렇게 움직이기 시작했다.”\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme10.png', 24500, 4, 0, '\r\n판타지', '13:50:00', '2~4'),
(49, 5, 10, 'Molaq : 성 밖 이야기', '““기필코 The Castle에 들어가서 왕위를 쟁취하리라!” 남자는 그렇게 움직이기 시작했다.”\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme10.png', 24500, 4, 0, '\r\n판타지', '15:00:00', '2~4'),
(50, 5, 10, 'Molaq : 성 밖 이야기', '““기필코 The Castle에 들어가서 왕위를 쟁취하리라!” 남자는 그렇게 움직이기 시작했다.”\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme10.png', 24500, 4, 0, '\r\n판타지', '16:10:00', '2~4'),
(51, 5, 11, '[프리미엄]귀로여관', '““누군가를 죽인 경험이 있습니까? 그 경험을 나누고 싶습니다. 귀로 여관에서 기다리겠습니다.”\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme11.png', 25000, 4, 4, '\r\n공포', '09:20:00', '2~6'),
(52, 5, 11, '[프리미엄]귀로여관', '““누군가를 죽인 경험이 있습니까? 그 경험을 나누고 싶습니다. 귀로 여관에서 기다리겠습니다.”\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme11.png', 25000, 4, 4, '\r\n공포', '10:40:00', '2~6'),
(53, 5, 11, '[프리미엄]귀로여관', '““누군가를 죽인 경험이 있습니까? 그 경험을 나누고 싶습니다. 귀로 여관에서 기다리겠습니다.”\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme11.png', 25000, 4, 4, '\r\n공포', '12:00:00', '2~6'),
(54, 5, 11, '[프리미엄]귀로여관', '““누군가를 죽인 경험이 있습니까? 그 경험을 나누고 싶습니다. 귀로 여관에서 기다리겠습니다.”\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme11.png', 25000, 4, 4, '\r\n공포', '13:20:00', '2~6'),
(55, 5, 11, '[프리미엄]귀로여관', '““누군가를 죽인 경험이 있습니까? 그 경험을 나누고 싶습니다. 귀로 여관에서 기다리겠습니다.”\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme11.png', 25000, 4, 4, '\r\n공포', '14:40:00', '2~6'),
(56, 5, 11, '[프리미엄]귀로여관', '““누군가를 죽인 경험이 있습니까? 그 경험을 나누고 싶습니다. 귀로 여관에서 기다리겠습니다.”\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme11.png', 25000, 4, 4, '\r\n공포', '16:00:00', '2~6'),
(57, 10, 8, '대영어시대 : Age of English', '대항해시대. 교역을 위해 나섰지만, 폭풍에 휘말려 어딘지도 모를 곳에 떨어졌다. 그런 내게 찾아온 동포... 그런데 이 남자 하는 말이 이상하다. “Nice to meet you. Uh..umm..거.. 어데 하씬교?” “What????”\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme8.png', 22500, 4, 0, '\r\n코믹', '11:10:00', '2~4'),
(58, 10, 8, '대영어시대 : Age of English', '대항해시대. 교역을 위해 나섰지만, 폭풍에 휘말려 어딘지도 모를 곳에 떨어졌다. 그런 내게 찾아온 동포... 그런데 이 남자 하는 말이 이상하다. “Nice to meet you. Uh..umm..거.. 어데 하씬교?” “What????”\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme8.png', 22500, 4, 0, '\r\n코믹', '12:30:00', '2~4'),
(59, 10, 8, '대영어시대 : Age of English', '대항해시대. 교역을 위해 나섰지만, 폭풍에 휘말려 어딘지도 모를 곳에 떨어졌다. 그런 내게 찾아온 동포... 그런데 이 남자 하는 말이 이상하다. “Nice to meet you. Uh..umm..거.. 어데 하씬교?” “What????”\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme8.png', 22500, 4, 0, '\r\n코믹', '13:50:00', '2~4'),
(60, 10, 8, '대영어시대 : Age of English', '대항해시대. 교역을 위해 나섰지만, 폭풍에 휘말려 어딘지도 모를 곳에 떨어졌다. 그런 내게 찾아온 동포... 그런데 이 남자 하는 말이 이상하다. “Nice to meet you. Uh..umm..거.. 어데 하씬교?” “What????”\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme8.png', 22500, 4, 0, '\r\n코믹', '15:10:00', '2~4'),
(61, 10, 8, '대영어시대 : Age of English', '대항해시대. 교역을 위해 나섰지만, 폭풍에 휘말려 어딘지도 모를 곳에 떨어졌다. 그런 내게 찾아온 동포... 그런데 이 남자 하는 말이 이상하다. “Nice to meet you. Uh..umm..거.. 어데 하씬교?” “What????”\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme8.png', 22500, 4, 0, '\r\n코믹', '16:30:00', '2~4'),
(62, 10, 8, '대영어시대 : Age of English', '대항해시대. 교역을 위해 나섰지만, 폭풍에 휘말려 어딘지도 모를 곳에 떨어졌다. 그런 내게 찾아온 동포... 그런데 이 남자 하는 말이 이상하다. “Nice to meet you. Uh..umm..거.. 어데 하씬교?” “What????”\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme8.png', 22500, 4, 0, '\r\n코믹', '17:50:00', '2~4'),
(63, 11, 9, 'Below : 성 안 이야기', '“성에 들어오려는 수많은 사람들... 나와는 반대야.” 여자는 그렇게 움직이기 시작했다.”\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme9.png', 23500, 3, 0, '\r\n판타지', '09:40:00', '2~4'),
(64, 11, 9, 'Below : 성 안 이야기', '“성에 들어오려는 수많은 사람들... 나와는 반대야.” 여자는 그렇게 움직이기 시작했다.”\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme9.png', 23500, 3, 0, '\r\n판타지', '12:10:00', '2~4'),
(65, 11, 9, 'Below : 성 안 이야기', '“성에 들어오려는 수많은 사람들... 나와는 반대야.” 여자는 그렇게 움직이기 시작했다.”\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme9.png', 23500, 3, 0, '\r\n판타지', '13:25:00', '2~4'),
(66, 11, 9, 'Below : 성 안 이야기', '“성에 들어오려는 수많은 사람들... 나와는 반대야.” 여자는 그렇게 움직이기 시작했다.”\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme9.png', 23500, 3, 0, '\r\n판타지', '14:40:00', '2~4'),
(67, 11, 9, 'Below : 성 안 이야기', '“성에 들어오려는 수많은 사람들... 나와는 반대야.” 여자는 그렇게 움직이기 시작했다.”\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme9.png', 23500, 3, 0, '\r\n판타지', '15:55:00', '2~4'),
(68, 11, 9, 'Below : 성 안 이야기', '“성에 들어오려는 수많은 사람들... 나와는 반대야.” 여자는 그렇게 움직이기 시작했다.”\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme9.png', 23500, 3, 0, '\r\n판타지', '17:10:00', '2~4'),
(69, 11, 9, 'Below : 성 안 이야기', '“성에 들어오려는 수많은 사람들... 나와는 반대야.” 여자는 그렇게 움직이기 시작했다.”\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme9.png', 23500, 3, 0, '\r\n판타지', '18:25:00', '2~4'),
(70, 18, 12, '악마를 보았다', '낯선 창고, 익숙하지 않은 공기 사이로 미세하게 위험한 냄새가 풍겨나왔다... 여기서 무슨 일이 벌어지고 있는 걸까?', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme12.png', 25500, 4, 1, '스릴러', '09:10:00', '2~6'),
(71, 18, 12, '악마를 보았다', '낯선 창고, 익숙하지 않은 공기 사이로 미세하게 위험한 냄새가 풍겨나왔다... 여기서 무슨 일이 벌어지고 있는 걸까?', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme12.png', 25500, 4, 1, '스릴러', '10:20:00', '2~6'),
(72, 18, 12, '악마를 보았다', '낯선 창고, 익숙하지 않은 공기 사이로 미세하게 위험한 냄새가 풍겨나왔다... 여기서 무슨 일이 벌어지고 있는 걸까?', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme12.png', 25500, 4, 1, '스릴러', '11:30:00', '2~6'),
(73, 18, 12, '악마를 보았다', '낯선 창고, 익숙하지 않은 공기 사이로 미세하게 위험한 냄새가 풍겨나왔다... 여기서 무슨 일이 벌어지고 있는 걸까?', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme12.png', 25500, 4, 1, '스릴러', '12:40:00', '2~6'),
(74, 18, 12, '악마를 보았다', '낯선 창고, 익숙하지 않은 공기 사이로 미세하게 위험한 냄새가 풍겨나왔다... 여기서 무슨 일이 벌어지고 있는 걸까?', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme12.png', 25500, 4, 1, '스릴러', '13:50:00', '2~6'),
(75, 18, 12, '악마를 보았다', '낯선 창고, 익숙하지 않은 공기 사이로 미세하게 위험한 냄새가 풍겨나왔다... 여기서 무슨 일이 벌어지고 있는 걸까?', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme12.png', 25500, 4, 1, '스릴러', '15:00:00', '2~6'),
(76, 18, 12, '악마를 보았다', '낯선 창고, 익숙하지 않은 공기 사이로 미세하게 위험한 냄새가 풍겨나왔다... 여기서 무슨 일이 벌어지고 있는 걸까?', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme12.png', 25500, 4, 1, '스릴러', '16:10:00', '2~6'),
(77, 6, 13, '노룸', '들어오지 마세요. 하지만 들어오지 말라고 하는 순간 궁금해서 더 들어가고 싶어지는 법!', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme13.jpg', 20000, 3, 0, '퍼즐', '09:00:00', '2~4'),
(78, 6, 13, '노룸', '들어오지 마세요. 하지만 들어오지 말라고 하는 순간 궁금해서 더 들어가고 싶어지는 법!', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme13.jpg', 20000, 3, 0, '퍼즐', '10:10:00', '2~4'),
(79, 6, 13, '노룸', '들어오지 마세요. 하지만 들어오지 말라고 하는 순간 궁금해서 더 들어가고 싶어지는 법!', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme13.jpg', 20000, 3, 0, '퍼즐', '12:20:00', '2~4'),
(80, 6, 13, '노룸', '들어오지 마세요. 하지만 들어오지 말라고 하는 순간 궁금해서 더 들어가고 싶어지는 법!', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme13.jpg', 20000, 3, 0, '퍼즐', '13:30:00', '2~4'),
(81, 6, 13, '노룸', '들어오지 마세요. 하지만 들어오지 말라고 하는 순간 궁금해서 더 들어가고 싶어지는 법!', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme13.jpg', 20000, 3, 0, '퍼즐', '14:40:00', '2~4'),
(82, 6, 13, '노룸', '들어오지 마세요. 하지만 들어오지 말라고 하는 순간 궁금해서 더 들어가고 싶어지는 법!', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme13.jpg', 20000, 3, 0, '퍼즐', '15:50:00', '2~4'),
(83, 6, 13, '노룸', '들어오지 마세요. 하지만 들어오지 말라고 하는 순간 궁금해서 더 들어가고 싶어지는 법!', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme13.jpg', 20000, 3, 0, '퍼즐', '17:00:00', '2~4'),
(84, 6, 13, '노룸', '들어오지 마세요. 하지만 들어오지 말라고 하는 순간 궁금해서 더 들어가고 싶어지는 법!', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme13.jpg', 20000, 3, 0, '퍼즐', '18:10:00', '2~4'),
(85, 7, 14, '말못해', '말못해 앞으로 당신에게 어떤 반전이 있을지는...marmotte', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme14.jpg', 21000, 4, 0, '-', '10:30:00', '2~4'),
(86, 7, 14, '말못해', '말못해 앞으로 당신에게 어떤 반전이 있을지는...marmotte', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme14.jpg', 21000, 4, 0, '-', '11:50:00', '2~4'),
(87, 7, 14, '말못해', '말못해 앞으로 당신에게 어떤 반전이 있을지는...marmotte', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme14.jpg', 21000, 4, 0, '-', '13:10:00', '2~4'),
(88, 7, 14, '말못해', '말못해 앞으로 당신에게 어떤 반전이 있을지는...marmotte', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme14.jpg', 21000, 4, 0, '-', '14:30:00', '2~4'),
(89, 7, 14, '말못해', '말못해 앞으로 당신에게 어떤 반전이 있을지는...marmotte', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme14.jpg', 21000, 4, 0, '-', '15:50:00', '2~4'),
(90, 7, 14, '말못해', '말못해 앞으로 당신에게 어떤 반전이 있을지는...marmotte', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme14.jpg', 21000, 4, 0, '-', '17:10:00', '2~4'),
(91, 7, 14, '말못해', '말못해 앞으로 당신에게 어떤 반전이 있을지는...marmotte', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme14.jpg', 21000, 4, 0, '-', '18:30:00', '2~4'),
(92, 8, 15, '피플인사이드', '주어진시간 40분 남녀노소 국적 상관없이 모두가 즐겁게 즐길 수 있는 아케이드형 방탈출 피플인사이드. 각자 방에갇혀 서로협동을 통해 탈출해야 합니다.', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme15.jpg', 20000, 2, 0, '협동', '09:30:00', '2~6'),
(93, 8, 15, '피플인사이드', '주어진시간 40분 남녀노소 국적 상관없이 모두가 즐겁게 즐길 수 있는 아케이드형 방탈출 피플인사이드. 각자 방에갇혀 서로협동을 통해 탈출해야 합니다.', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme15.jpg', 20000, 2, 0, '협동', '10:30:00', '2~6'),
(94, 8, 15, '피플인사이드', '주어진시간 40분 남녀노소 국적 상관없이 모두가 즐겁게 즐길 수 있는 아케이드형 방탈출 피플인사이드. 각자 방에갇혀 서로협동을 통해 탈출해야 합니다.', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme15.jpg', 20000, 2, 0, '협동', '11:30:00', '2~6'),
(95, 8, 15, '피플인사이드', '주어진시간 40분 남녀노소 국적 상관없이 모두가 즐겁게 즐길 수 있는 아케이드형 방탈출 피플인사이드. 각자 방에갇혀 서로협동을 통해 탈출해야 합니다.', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme15.jpg', 20000, 2, 0, '협동', '12:30:00', '2~6'),
(96, 8, 15, '피플인사이드', '주어진시간 40분 남녀노소 국적 상관없이 모두가 즐겁게 즐길 수 있는 아케이드형 방탈출 피플인사이드. 각자 방에갇혀 서로협동을 통해 탈출해야 합니다.', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme15.jpg', 20000, 2, 0, '협동', '13:30:00', '2~6'),
(97, 8, 15, '피플인사이드', '주어진시간 40분 남녀노소 국적 상관없이 모두가 즐겁게 즐길 수 있는 아케이드형 방탈출 피플인사이드. 각자 방에갇혀 서로협동을 통해 탈출해야 합니다.', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme15.jpg', 20000, 2, 0, '협동', '14:30:00', '2~6'),
(98, 8, 15, '피플인사이드', '주어진시간 40분 남녀노소 국적 상관없이 모두가 즐겁게 즐길 수 있는 아케이드형 방탈출 피플인사이드. 각자 방에갇혀 서로협동을 통해 탈출해야 합니다.', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme15.jpg', 20000, 2, 0, '협동', '15:30:00', '2~6'),
(99, 8, 15, '피플인사이드', '주어진시간 40분 남녀노소 국적 상관없이 모두가 즐겁게 즐길 수 있는 아케이드형 방탈출 피플인사이드. 각자 방에갇혀 서로협동을 통해 탈출해야 합니다.', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme15.jpg', 20000, 2, 0, '협동', '16:30:00', '2~6'),
(100, 9, 16, '무한의 던전', '주어진 시간은 60분. 탈출구를 찾아 탈출하는것이 목표입니다.', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme16.jpg', 20000, 2, 0, '탈출', '10:00:00', '2~6'),
(101, 9, 16, '무한의 던전', '주어진 시간은 60분. 탈출구를 찾아 탈출하는것이 목표입니다.', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme16.jpg', 20000, 2, 0, '탈출', '11:10:00', '2~6'),
(102, 9, 16, '무한의 던전', '주어진 시간은 60분. 탈출구를 찾아 탈출하는것이 목표입니다.', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme16.jpg', 20000, 2, 0, '탈출', '12:20:00', '2~6'),
(103, 9, 16, '무한의 던전', '주어진 시간은 60분. 탈출구를 찾아 탈출하는것이 목표입니다.', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme16.jpg', 20000, 2, 0, '탈출', '13:30:00', '2~6'),
(104, 9, 16, '무한의 던전', '주어진 시간은 60분. 탈출구를 찾아 탈출하는것이 목표입니다.', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme16.jpg', 20000, 2, 0, '탈출', '14:40:00', '2~6'),
(105, 9, 16, '무한의 던전', '주어진 시간은 60분. 탈출구를 찾아 탈출하는것이 목표입니다.', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme16.jpg', 20000, 2, 0, '탈출', '15:50:00', '2~6'),
(106, 9, 16, '무한의 던전', '주어진 시간은 60분. 탈출구를 찾아 탈출하는것이 목표입니다.', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme16.jpg', 20000, 2, 0, '탈출', '17:00:00', '2~6'),
(107, 12, 17, '언더월드', '스팀펑크시대의 개구쟁이천재소녀발명가 조이! 갖가지 발명품들을 만들며 지내고있다 오늘도의뢰받은물건을 배달해보실까!', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme17.jpg', 23000, 4, 0, '판타지', '10:00:00', '2~6'),
(108, 12, 17, '언더월드', '스팀펑크시대의 개구쟁이천재소녀발명가 조이! 갖가지 발명품들을 만들며 지내고있다 오늘도의뢰받은물건을 배달해보실까!', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme17.jpg', 23000, 4, 0, '판타지', '11:20:00', '2~6'),
(109, 12, 17, '언더월드', '스팀펑크시대의 개구쟁이천재소녀발명가 조이! 갖가지 발명품들을 만들며 지내고있다 오늘도의뢰받은물건을 배달해보실까!', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme17.jpg', 23000, 4, 0, '판타지', '12:40:00', '2~6'),
(110, 12, 17, '언더월드', '스팀펑크시대의 개구쟁이천재소녀발명가 조이! 갖가지 발명품들을 만들며 지내고있다 오늘도의뢰받은물건을 배달해보실까!', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme17.jpg', 23000, 4, 0, '판타지', '14:00:00', '2~6'),
(111, 12, 17, '언더월드', '스팀펑크시대의 개구쟁이천재소녀발명가 조이! 갖가지 발명품들을 만들며 지내고있다 오늘도의뢰받은물건을 배달해보실까!', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme17.jpg', 23000, 4, 0, '판타지', '15:20:00', '2~6'),
(112, 12, 17, '언더월드', '스팀펑크시대의 개구쟁이천재소녀발명가 조이! 갖가지 발명품들을 만들며 지내고있다 오늘도의뢰받은물건을 배달해보실까!', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme17.jpg', 23000, 4, 0, '판타지', '16:40:00', '2~6'),
(113, 12, 17, '언더월드', '스팀펑크시대의 개구쟁이천재소녀발명가 조이! 갖가지 발명품들을 만들며 지내고있다 오늘도의뢰받은물건을 배달해보실까!', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme17.jpg', 23000, 4, 0, '판타지', '18:00:00', '2~6'),
(114, 13, 18, '아이러브카페', '지금 신선한 장치와 뜨거운 문제로 커피를 내리는 중입니다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme18.jpg', 23000, 4, 0, '-', '11:00:00', '2~4'),
(115, 13, 18, '아이러브카페', '지금 신선한 장치와 뜨거운 문제로 커피를 내리는 중입니다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme18.jpg', 23000, 4, 0, '-', '12:10:00', '2~4'),
(116, 13, 18, '아이러브카페', '지금 신선한 장치와 뜨거운 문제로 커피를 내리는 중입니다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme18.jpg', 23000, 4, 0, '-', '13:20:00', '2~4'),
(117, 13, 18, '아이러브카페', '지금 신선한 장치와 뜨거운 문제로 커피를 내리는 중입니다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme18.jpg', 23000, 4, 0, '-', '14:30:00', '2~4'),
(118, 13, 18, '아이러브카페', '지금 신선한 장치와 뜨거운 문제로 커피를 내리는 중입니다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme18.jpg', 23000, 4, 0, '-', '15:40:00', '2~4'),
(119, 13, 18, '아이러브카페', '지금 신선한 장치와 뜨거운 문제로 커피를 내리는 중입니다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme18.jpg', 23000, 4, 0, '-', '16:50:00', '2~4'),
(120, 13, 18, '아이러브카페', '지금 신선한 장치와 뜨거운 문제로 커피를 내리는 중입니다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme18.jpg', 23000, 4, 0, '-', '18:00:00', '2~4'),
(121, 13, 18, '아이러브카페', '지금 신선한 장치와 뜨거운 문제로 커피를 내리는 중입니다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme18.jpg', 23000, 4, 0, '-', '19:10:00', '2~4'),
(122, 14, 19, '대마법사 오셀로', '[스승님, 마법사가 되고 싶습니다. 제자로 받아주십시오.] 봉인의 탑에서 어언 24년... 그렇게 마흔넷이 되었다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme19.jpg', 22000, 4, 0, '-', '10:00:00', '2~4'),
(123, 14, 19, '대마법사 오셀로', '[스승님, 마법사가 되고 싶습니다. 제자로 받아주십시오.] 봉인의 탑에서 어언 24년... 그렇게 마흔넷이 되었다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme19.jpg', 22000, 4, 0, '-', '11:20:00', '2~4'),
(124, 14, 19, '대마법사 오셀로', '[스승님, 마법사가 되고 싶습니다. 제자로 받아주십시오.] 봉인의 탑에서 어언 24년... 그렇게 마흔넷이 되었다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme19.jpg', 22000, 4, 0, '-', '12:40:00', '2~4'),
(125, 14, 19, '대마법사 오셀로', '[스승님, 마법사가 되고 싶습니다. 제자로 받아주십시오.] 봉인의 탑에서 어언 24년... 그렇게 마흔넷이 되었다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme19.jpg', 22000, 4, 0, '-', '14:00:00', '2~4'),
(126, 14, 19, '대마법사 오셀로', '[스승님, 마법사가 되고 싶습니다. 제자로 받아주십시오.] 봉인의 탑에서 어언 24년... 그렇게 마흔넷이 되었다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme19.jpg', 22000, 4, 0, '-', '15:20:00', '2~4'),
(127, 14, 19, '대마법사 오셀로', '[스승님, 마법사가 되고 싶습니다. 제자로 받아주십시오.] 봉인의 탑에서 어언 24년... 그렇게 마흔넷이 되었다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme19.jpg', 22000, 4, 0, '-', '16:40:00', '2~4'),
(128, 14, 19, '대마법사 오셀로', '[스승님, 마법사가 되고 싶습니다. 제자로 받아주십시오.] 봉인의 탑에서 어언 24년... 그렇게 마흔넷이 되었다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme19.jpg', 22000, 4, 0, '-', '18:00:00', '2~4'),
(129, 15, 20, '웨딩크루즈 살인사건', '거대 부호 김만술과 그의 아내 미치코는 결혼생활 10주년을 기념하기 위해 호화 크루즈 여행을 떠나게 되었다, 로맨틱한 웨딩 크루즈 여행을 꿈꿨것만.. 크루즈 안에서 김만술은 시체로 발견된다. 용의자는 김만술씨의 아내 미치코를 포함한 탑승객 4명! 크루즈 여행으로 휴가길에 올랐던 명탐정 셜록홈즈는 여행길에서 다시 살인사건을 맡게 되는데..?!\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme20.jpg', 22000, 3, 0, '추리', '10:30:00', '2~4'),
(130, 15, 20, '웨딩크루즈 살인사건', '거대 부호 김만술과 그의 아내 미치코는 결혼생활 10주년을 기념하기 위해 호화 크루즈 여행을 떠나게 되었다, 로맨틱한 웨딩 크루즈 여행을 꿈꿨것만.. 크루즈 안에서 김만술은 시체로 발견된다. 용의자는 김만술씨의 아내 미치코를 포함한 탑승객 4명! 크루즈 여행으로 휴가길에 올랐던 명탐정 셜록홈즈는 여행길에서 다시 살인사건을 맡게 되는데..?!\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme20.jpg', 22000, 3, 0, '추리', '11:40:00', '2~4'),
(131, 15, 20, '웨딩크루즈 살인사건', '거대 부호 김만술과 그의 아내 미치코는 결혼생활 10주년을 기념하기 위해 호화 크루즈 여행을 떠나게 되었다, 로맨틱한 웨딩 크루즈 여행을 꿈꿨것만.. 크루즈 안에서 김만술은 시체로 발견된다. 용의자는 김만술씨의 아내 미치코를 포함한 탑승객 4명! 크루즈 여행으로 휴가길에 올랐던 명탐정 셜록홈즈는 여행길에서 다시 살인사건을 맡게 되는데..?!\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme20.jpg', 22000, 3, 0, '추리', '12:50:00', '2~4'),
(132, 15, 20, '웨딩크루즈 살인사건', '거대 부호 김만술과 그의 아내 미치코는 결혼생활 10주년을 기념하기 위해 호화 크루즈 여행을 떠나게 되었다, 로맨틱한 웨딩 크루즈 여행을 꿈꿨것만.. 크루즈 안에서 김만술은 시체로 발견된다. 용의자는 김만술씨의 아내 미치코를 포함한 탑승객 4명! 크루즈 여행으로 휴가길에 올랐던 명탐정 셜록홈즈는 여행길에서 다시 살인사건을 맡게 되는데..?!\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme20.jpg', 22000, 3, 0, '추리', '14:00:00', '2~4'),
(133, 15, 20, '웨딩크루즈 살인사건', '거대 부호 김만술과 그의 아내 미치코는 결혼생활 10주년을 기념하기 위해 호화 크루즈 여행을 떠나게 되었다, 로맨틱한 웨딩 크루즈 여행을 꿈꿨것만.. 크루즈 안에서 김만술은 시체로 발견된다. 용의자는 김만술씨의 아내 미치코를 포함한 탑승객 4명! 크루즈 여행으로 휴가길에 올랐던 명탐정 셜록홈즈는 여행길에서 다시 살인사건을 맡게 되는데..?!\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme20.jpg', 22000, 3, 0, '추리', '15:20:00', '2~4'),
(134, 15, 20, '웨딩크루즈 살인사건', '거대 부호 김만술과 그의 아내 미치코는 결혼생활 10주년을 기념하기 위해 호화 크루즈 여행을 떠나게 되었다, 로맨틱한 웨딩 크루즈 여행을 꿈꿨것만.. 크루즈 안에서 김만술은 시체로 발견된다. 용의자는 김만술씨의 아내 미치코를 포함한 탑승객 4명! 크루즈 여행으로 휴가길에 올랐던 명탐정 셜록홈즈는 여행길에서 다시 살인사건을 맡게 되는데..?!\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme20.jpg', 22000, 3, 0, '추리', '16:40:00', '2~4'),
(135, 15, 20, '웨딩크루즈 살인사건', '거대 부호 김만술과 그의 아내 미치코는 결혼생활 10주년을 기념하기 위해 호화 크루즈 여행을 떠나게 되었다, 로맨틱한 웨딩 크루즈 여행을 꿈꿨것만.. 크루즈 안에서 김만술은 시체로 발견된다. 용의자는 김만술씨의 아내 미치코를 포함한 탑승객 4명! 크루즈 여행으로 휴가길에 올랐던 명탐정 셜록홈즈는 여행길에서 다시 살인사건을 맡게 되는데..?!\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme20.jpg', 22000, 3, 0, '추리', '18:00:00', '2~4'),
(136, 16, 21, '중고로운 평화나라', '다가오는 여자친구와의 기념일. 여자친구에게 명품백을 선물해주고 싶지만 너무 높은 가격에 좌절하게 되는 한남자.. 결국 그가 찾게 된 것은 중고거래 사이트에서 발견한 감쪽같은 명품가방! 이 이야기의 끝은 어떻게 될 것인지!\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme21.jpg', 21000, 3, 0, '코미디,스릴러', '11:00:00', '2~6'),
(137, 16, 21, '중고로운 평화나라', '다가오는 여자친구와의 기념일. 여자친구에게 명품백을 선물해주고 싶지만 너무 높은 가격에 좌절하게 되는 한남자.. 결국 그가 찾게 된 것은 중고거래 사이트에서 발견한 감쪽같은 명품가방! 이 이야기의 끝은 어떻게 될 것인지!\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme21.jpg', 21000, 3, 0, '코미디,스릴러', '12:15:00', '2~6'),
(138, 16, 21, '중고로운 평화나라', '다가오는 여자친구와의 기념일. 여자친구에게 명품백을 선물해주고 싶지만 너무 높은 가격에 좌절하게 되는 한남자.. 결국 그가 찾게 된 것은 중고거래 사이트에서 발견한 감쪽같은 명품가방! 이 이야기의 끝은 어떻게 될 것인지!\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme21.jpg', 21000, 3, 0, '코미디,스릴러', '13:30:00', '2~6'),
(139, 16, 21, '중고로운 평화나라', '다가오는 여자친구와의 기념일. 여자친구에게 명품백을 선물해주고 싶지만 너무 높은 가격에 좌절하게 되는 한남자.. 결국 그가 찾게 된 것은 중고거래 사이트에서 발견한 감쪽같은 명품가방! 이 이야기의 끝은 어떻게 될 것인지!\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme21.jpg', 21000, 3, 0, '코미디,스릴러', '14:45:00', '2~6'),
(140, 16, 21, '중고로운 평화나라', '다가오는 여자친구와의 기념일. 여자친구에게 명품백을 선물해주고 싶지만 너무 높은 가격에 좌절하게 되는 한남자.. 결국 그가 찾게 된 것은 중고거래 사이트에서 발견한 감쪽같은 명품가방! 이 이야기의 끝은 어떻게 될 것인지!\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme21.jpg', 21000, 3, 0, '코미디,스릴러', '16:00:00', '2~6'),
(141, 16, 21, '중고로운 평화나라', '다가오는 여자친구와의 기념일. 여자친구에게 명품백을 선물해주고 싶지만 너무 높은 가격에 좌절하게 되는 한남자.. 결국 그가 찾게 된 것은 중고거래 사이트에서 발견한 감쪽같은 명품가방! 이 이야기의 끝은 어떻게 될 것인지!\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme21.jpg', 21000, 3, 0, '코미디,스릴러', '17:30:00', '2~6'),
(142, 17, 22, '반하셨군요?', '방탈출 카페에서 알바 하는 같은 과 여사친(?) 미정이가 은밀하게 나에게 말했다. <오늘 저녁에 나 알바 하는데 올래?>\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme22.jpg', 22000, 3, 0, '-', '12:00:00', '2~6'),
(143, 17, 22, '반하셨군요?', '방탈출 카페에서 알바 하는 같은 과 여사친(?) 미정이가 은밀하게 나에게 말했다. <오늘 저녁에 나 알바 하는데 올래?>\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme22.jpg', 22000, 3, 0, '-', '13:10:00', '2~6'),
(144, 17, 22, '반하셨군요?', '방탈출 카페에서 알바 하는 같은 과 여사친(?) 미정이가 은밀하게 나에게 말했다. <오늘 저녁에 나 알바 하는데 올래?>\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme22.jpg', 22000, 3, 0, '-', '14:20:00', '2~6'),
(145, 17, 22, '반하셨군요?', '방탈출 카페에서 알바 하는 같은 과 여사친(?) 미정이가 은밀하게 나에게 말했다. <오늘 저녁에 나 알바 하는데 올래?>\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme22.jpg', 22000, 3, 0, '-', '15:30:00', '2~6'),
(146, 17, 22, '반하셨군요?', '방탈출 카페에서 알바 하는 같은 과 여사친(?) 미정이가 은밀하게 나에게 말했다. <오늘 저녁에 나 알바 하는데 올래?>\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme22.jpg', 22000, 3, 0, '-', '16:40:00', '2~6'),
(147, 17, 22, '반하셨군요?', '방탈출 카페에서 알바 하는 같은 과 여사친(?) 미정이가 은밀하게 나에게 말했다. <오늘 저녁에 나 알바 하는데 올래?>\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme22.jpg', 22000, 3, 0, '-', '17:50:00', '2~6'),
(148, 17, 22, '반하셨군요?', '방탈출 카페에서 알바 하는 같은 과 여사친(?) 미정이가 은밀하게 나에게 말했다. <오늘 저녁에 나 알바 하는데 올래?>\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme22.jpg', 22000, 3, 0, '-', '19:00:00', '2~6'),
(149, 19, 23, '황금 감옥 : 와캄', '지금까지 봐왔던 감옥들과는 사뭇 다른 분위기의 낯선 감옥. 그 안에서 펼쳐진 끝을 알 수 없는 새로운 이야기. 이전까지 경험할 수 없었던 색다른 테마가 당신을 기다립니다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme23.jpg', 20000, 3, 0, '-', '11:00:00', '2~4'),
(150, 19, 23, '황금 감옥 : 와캄', '지금까지 봐왔던 감옥들과는 사뭇 다른 분위기의 낯선 감옥. 그 안에서 펼쳐진 끝을 알 수 없는 새로운 이야기. 이전까지 경험할 수 없었던 색다른 테마가 당신을 기다립니다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme23.jpg', 20000, 3, 0, '-', '12:20:00', '2~4'),
(151, 19, 23, '황금 감옥 : 와캄', '지금까지 봐왔던 감옥들과는 사뭇 다른 분위기의 낯선 감옥. 그 안에서 펼쳐진 끝을 알 수 없는 새로운 이야기. 이전까지 경험할 수 없었던 색다른 테마가 당신을 기다립니다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme23.jpg', 20000, 3, 0, '-', '13:40:00', '2~4'),
(152, 19, 23, '황금 감옥 : 와캄', '지금까지 봐왔던 감옥들과는 사뭇 다른 분위기의 낯선 감옥. 그 안에서 펼쳐진 끝을 알 수 없는 새로운 이야기. 이전까지 경험할 수 없었던 색다른 테마가 당신을 기다립니다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme23.jpg', 20000, 3, 0, '-', '15:00:00', '2~4'),
(153, 19, 23, '황금 감옥 : 와캄', '지금까지 봐왔던 감옥들과는 사뭇 다른 분위기의 낯선 감옥. 그 안에서 펼쳐진 끝을 알 수 없는 새로운 이야기. 이전까지 경험할 수 없었던 색다른 테마가 당신을 기다립니다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme23.jpg', 20000, 3, 0, '-', '16:30:00', '2~4'),
(154, 19, 23, '황금 감옥 : 와캄', '지금까지 봐왔던 감옥들과는 사뭇 다른 분위기의 낯선 감옥. 그 안에서 펼쳐진 끝을 알 수 없는 새로운 이야기. 이전까지 경험할 수 없었던 색다른 테마가 당신을 기다립니다.\r\n', 'https://raw.githubusercontent.com/dudxoor68/teamProject/main/front/img/theme23.jpg', 20000, 3, 0, '-', '18:00:00', '2~4');

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
  MODIFY `reservation_seq` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- 테이블의 AUTO_INCREMENT `p_reservation_status`
--
ALTER TABLE `p_reservation_status`
  MODIFY `reservation_status_seq` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- 테이블의 AUTO_INCREMENT `p_theme`
--
ALTER TABLE `p_theme`
  MODIFY `theme_seq` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
