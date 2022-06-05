--
-- 한국기술교육대학교 웹프로그래밍 02분반
-- CUSTOMSPACE 웹사이트 프로젝트 기저 DB
-- 작성자 : 2020136052 박영서
-- 참조 사이트 : https://blog.naver.com/PostList.naver?blogId=bgpoilkj
--

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `customspace`
-- 기존에 커스텀스페이스 데이터베이스 없으면 새로 생성, 인코딩 형식은 UTF-8
--
CREATE DATABASE IF NOT EXISTS `customspace` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci; 
USE `customspace`;

-- --------------------------------------------------------

--
-- 멤버 테이블
--

create table members (
    num int not null auto_increment,
    id char(15) not null,
    pass char(15) not null,
    name char(10) not null,
    email char(80),
    regist_day char(20),
    level int,
    primary key(num)
);

--
-- 관리자 계정 생성(root)
--

INSERT INTO `members` (`num`, `id`, `pass`, `name`, `email`, `regist_day`, `level`) VALUES
(0, 'root', '12341234', '박영서', 'jamespk0725@gmail.com', '2022-02-02', 1);


--
-- 장바구니 테이블
--

CREATE TABLE `basket` (
  `idx` int(11) NOT NULL,
  `pro_pic` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `basket`
-- 오류 발생해서 현재는 무력화
--

/*INSERT INTO `basket` (`idx`, `pro_pic`, `product_name`, `price`) VALUES
(18, 'test3', '테스트 상품3', '45,500원'),*/


-- --------------------------------------------------------

--
-- 테이블 구조 `slist`
--

CREATE TABLE `slist` (
  `idx` int(11) NOT NULL, /* 상품일련번호(내부 데이터베이스) */
  `pro_pic` varchar(100) NOT NULL, /* 사진 */
    --
    -- shop/info 폴더에 'pro_pic' + 'pro'.jpg 형식으로 저장해주시면 됩니다.
    --
  `product_name` varchar(100) NOT NULL, /* 상품명 */
  `category` varchar(100) NOT NULL, /* 카테고리 cf) 휴대폰, 랩탑, 블루투스 이어폰 등등... */
  `price` varchar(100) NOT NULL, /* 가격(달러 원화 상관없음) */
  `developer` varchar(100) NOT NULL /* 개발사 cf) Samsung, Apple, HTC, Hwawei, ETC... */
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `slist`
--

INSERT INTO `slist` (`idx`, `pro_pic`, `product_name`, `category`, `price`, `developer`) VALUES
(0, 'test', '덤프 데이터', '태블릿PC', '99,999원', '스카이라이트 코퍼레이션');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `basket`
-- 기본키는 idx
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `slist`
--
ALTER TABLE `slist`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `basket`
--
ALTER TABLE `basket`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- 테이블의 AUTO_INCREMENT `slist`
--
ALTER TABLE `slist`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
