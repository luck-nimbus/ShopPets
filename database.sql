-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 24, 2019 lúc 04:46 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `database`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `BILL_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `BILL_RECEIVERNAME` varchar(50) CHARACTER SET utf8 NOT NULL,
  `BILL_ADDRESS` varchar(150) CHARACTER SET utf8 NOT NULL,
  `BILL_PRICE` float NOT NULL,
  `BILL_ACTIVE` tinyint(1) DEFAULT NULL,
  `BILL_ACTIVERECEIVED` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_demo`
--

CREATE TABLE `bill_demo` (
  `BILLDM_ID` int(11) NOT NULL,
  `BILLDM_CUSNAME` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `BILLDM_CUSPHONE` int(11) NOT NULL,
  `BILLDM_CUSEMAIL` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `BILLDM_CUSADRESS` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `BILLDM_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill_demo`
--

INSERT INTO `bill_demo` (`BILLDM_ID`, `BILLDM_CUSNAME`, `BILLDM_CUSPHONE`, `BILLDM_CUSEMAIL`, `BILLDM_CUSADRESS`, `BILLDM_DATE`) VALUES
(1, 'Hà', 1863275851, 'quang@gmail.com', 'Đồng Nai', '2018-06-09 15:04:30'),
(2, 'Hà', 1863275851, 'quang@gmail.com', 'Đồng Nai', '2018-06-09 15:04:30'),
(3, 'Thành', 123456789, 'thanhml@gmail.com', 'Hồ Chí Minh', '2018-06-09 15:04:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `CAT_ID` int(11) NOT NULL,
  `CAT_NAME` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `CAT_AVA` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`CAT_ID`, `CAT_NAME`, `CAT_AVA`) VALUES
(1, 'Quần áo', 'http://icons.iconarchive.com/icons/iconka/saint-whiskers/96/cat-cupid-love-icon.png'),
(2, 'Thức ăn', 'http://icons.iconarchive.com/icons/gabriel-leblanc/historic-mac/128/imac-aluminum-icon.png'),
(3, 'Phụ kiện', 'http://icons.iconarchive.com/icons/iconka/cat-halloween/96/cat-pumpkin-icon.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_bill`
--

CREATE TABLE `detail_bill` (
  `DB_ID` int(11) NOT NULL,
  `BILLDM_ID` int(11) NOT NULL,
  `PRO_ID` int(11) NOT NULL,
  `PRO_NAME` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PRO_PRICE` int(11) NOT NULL,
  `DB_SL` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `BILL_ACTIVE` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detail_bill`
--

INSERT INTO `detail_bill` (`DB_ID`, `BILLDM_ID`, `PRO_ID`, `PRO_NAME`, `PRO_PRICE`, `DB_SL`, `USER_ID`, `BILL_ACTIVE`) VALUES
(1, 1, 1, 'KHAY ĐỰNG THỨC ĂN đơn giản', 140000, 2, 2, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `PRO_ID` int(11) NOT NULL,
  `CAT_ID` int(11) NOT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `PRO_NAME` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `PRO_PRICE` decimal(10,0) DEFAULT NULL,
  `PRO_DESCRIPTION` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `PRO_QUATITY` int(11) DEFAULT NULL,
  `PRO_AVA` text,
  `PRO_ACTIVE` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`PRO_ID`, `CAT_ID`, `USER_ID`, `PRO_NAME`, `PRO_PRICE`, `PRO_DESCRIPTION`, `PRO_QUATITY`, `PRO_AVA`, `PRO_ACTIVE`) VALUES
(1, 1, 2, 'KHAY ĐỰNG THỨC ĂN đơn giản', '69000', 'Khay đựng thức ăn được làm từ gỗ xà cừ nguyên khối 100%. Phù hợp đựng thức ăn cho các tiệc buffet, các quán ăn sang trọng hoặc trong không gian gia đình ấm áp. Cũng có thể dùng để trưng bày sản phẩm.\r\n\r\nKhay có kích thước: Đường kính 24.5cm, dày 2.3cm', 200, 'http://localhost/doghome3/File_upload/10d.png', 1),
(2, 1, 2, 'Khay ăn đôi kèm kệ gỗ', '200000', 'Thật sự chiếc kệ này đã đem đến nhiều tác dụng đáng mong muốn, nó khiến cho thú cưng của bạn có cảm giác yêu thích đồ ăn và vì thế mà ăn ngon miệng hơn, hấp dẫn hơn rất nhiều. Nếu như nhà bạn đang thiếu chiếc bát ăn cho chó mèo thì tại sao không nhanh tay lựa chọn ngay chiếc bát ăn đôi kèm kệ gỗ cho chó mèo này đi nhỉ.\r\n\r\nĐảm bảo nó sẽ đem lại nhiều lợi ích hơn bạn tưởng tượng đấy.', 150, 'http://localhost/doghome3/File_upload/9d.png', 1),
(3, 1, 2, 'Khay ăn hình rùa cho chó mèo', '179000', 'Chắc hẳn với những người luôn coi những chú chó mèo cưng là người bạn tâm giao thì những sản phẩm liên quan đến chúng họ luôn rất quan tâm. Ngoài những tấm thảm, nệm, ngôi nhà, đồ chơi cho thú cưng thì những chiếc bát ăn cũng đóng vai trò quan trọng mà dường như là quan trọng nhất. Vậy chiếc bát ăn hình rùa cho chó mèo kia có đem lại lợi ích gì cho thú cưng của bạn hay không? Hãy cùng đi tìm hiểu sản phẩm phụ kiện cho thú cưng nhé.', 200, 'http://localhost/doghome3/File_upload/8d.png', 1),
(4, 1, 2, 'Khay ăn uống tự động cho chó mèo', '193900', 'Chiếc khay này được làm hoàn toàn bằng chất liệu nhựa cao cấp, khi phần đế và bát ăn được làm bằng nhựa cứng với nhiều màu thì phần bình để đổ nước và thức ăn lại được làm bằng loại nhựa trong suốt, chính vì thế mà bạn có thể dễ dàng nhìn thấy xem lượng thức ăn và nước uống đã gần hết chưa để có thể cho bổ sung thêm.', 100, 'http://localhost/doghome3/File_upload/7d.png', 1),
(5, 1, 2, 'Chuồng cho chó ngoài trời', '1579000', 'Hai dàn lạnh độc lập giữ độ ẩm và bảo quản thực phẩm tối ưu, không bị lẫn mùi', 99, 'http://localhost/doghome3/File_upload/6d.png', 1),
(6, 1, 2, 'Hàng Rào Cho Thú Cưng', '55900', 'Tạo một sân chơi cho các bé thú cưng với diện tích tùy thích. Thật dễ dàng. Bạn chỉ cần ghép các tấm lưới hàng rào lại với nhau là được.', 100, 'http://localhost/doghome3/File_upload/5d.png', 1),
(7, 1, 2, 'SỮA TẮM NHA ĐAM CHO CHÓ LÔNG DÀI', '299000', 'Sản phẩm thích hợp chu thú cưng lông dài hơn 3cm', 100, 'http://localhost/doghome3/File_upload/4d.jpg', 1),
(8, 1, 2, 'SỮA TẮM DƯỠNG LÔNG DA BABY POWDER', '195900', 'Thích hợp cho thú cưng có bộ lông và làn da mềm yếu', 100, 'http://localhost/doghome3/File_upload/3d.jpg', 1),
(9, 1, 2, 'Sữa tắm nha đam cho chó lông ngắn', '166900', 'Thích hợp cho thú cưng có lông ngắn hơn 3cm', 100, 'http://localhost/doghome3/File_upload/2d.jpg', 1),
(10, 1, 2, 'Trụ cào móng cho mèo', '170900', 'Sản phẩm phụ kiện cho mèo', 100, 'http://localhost/doghome3/File_upload/1d.jpg', 1),
(11, 1, 3, 'Nệm TOTORO cho thú cưng', '157900', 'Cực xịn nhe', 10, 'http://localhost/doghome3/File_upload/0d.jpg', 1),
(23, 3, 4, 'Thức ăn nhập khẩu cho mèo O-FRESH', '109000', 'Thức ăn nhập khẩu', 50, 'http://localhost/doghome3/File_upload/5c.jpg', 0),
(12, 2, 3, 'Thức ăn hạt nhập khẩu O-FRESH', '105000', 'Thức ăn nhập khẩu ', 100, 'http://localhost/doghome3/File_upload/4c.jpg', 1),
(13, 2, 3, 'Thức ăn cho chó CLASSIC PETS', '90000', 'Sản phẩm hạt hỗ trợ dinh dưỡng cho chó', 100, 'http://localhost/doghome3/File_upload/3c.jpg', 1),
(14, 2, 3, 'Thức ăn cho chó Pedigree', '190000', 'Thức ăn hạt dinh dưỡng cho chó', 100, 'http://localhost/doghome3/File_upload/1c.jpg', 1),
(15, 2, 3, 'Thức ăn cho chó SmartHeart', '190000', 'Sản phẩm hạt hỗ trợ dinh dưỡng cho chó', 100, 'http://localhost/doghome3/File_upload/0c.jpg', 1),
(16, 3, 4, 'Đầm panda cho chó mèo', '50000', 'Sản phẩm may mặc cho thú cưng', 50, 'http://localhost/doghome3/File_upload/0p.png', 1),
(17, 3, 4, 'Áo thun TheFaceDog', '150000', 'Sản phẩm may mặc cho thú cưng', 50, 'http://localhost/doghome3/File_upload/1b.jpg', 1),
(18, 3, 4, 'Áo thể thao số 28', '44000', 'Sản phẩm may mặc cho thú cưng', 50, 'http://localhost/doghome3/File_upload/2b.png', 1),
(19, 3, 4, 'Áo thun AirDog', '99000', 'Sản phẩm may mặc cho thú cưng', 50, 'http://localhost/doghome3/File_upload/3b.png', 1),
(20, 1, 4, 'Áo thun thần tài mèo', '99000', 'Sản phẩm may mặc cho thú cưng', 19, 'http://localhost/doghome3/File_upload/4b.png', 1),
(24, 0, 1, 'Áo phao PetStar', '255000', 'Sản phẩm thời trang cho chó', 10, 'http://localhost/doghome3/File_upload/00.png', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `USER_ID` int(11) NOT NULL,
  `USER_USERNAME` varchar(50) NOT NULL,
  `USER_PASSWORD` varchar(50) NOT NULL,
  `USER_LEVEL` varchar(50) NOT NULL,
  `USER_NAME` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `USER_EMAIL` varchar(100) DEFAULT NULL,
  `USER_PHONE` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`USER_ID`, `USER_USERNAME`, `USER_PASSWORD`, `USER_LEVEL`, `USER_NAME`, `USER_EMAIL`, `USER_PHONE`) VALUES
(1, 'quangha', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Quang Hà', 'quangha@gmail.com', '01863275851'),
(2, 'user1', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'Như Quỳnh', 'nhuquynh@gmail.com', '0868455851'),
(3, 'user2', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'Cola', 'cola@gmail.com', '011111111'),
(4, 'user3', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'Gia Quỳnh', 'giaquynh@gmail.com', '0121211212'),
(5, 'user4', '0d8d5cd06832b29560745fe4e1b941cf', 'customer', 'Yasuo', 'lol@gmail.com', '011223344');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`BILL_ID`,`USER_ID`),
  ADD KEY `FK_USERID` (`USER_ID`);

--
-- Chỉ mục cho bảng `bill_demo`
--
ALTER TABLE `bill_demo`
  ADD PRIMARY KEY (`BILLDM_ID`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CAT_ID`);

--
-- Chỉ mục cho bảng `detail_bill`
--
ALTER TABLE `detail_bill`
  ADD PRIMARY KEY (`DB_ID`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PRO_ID`,`CAT_ID`),
  ADD KEY `FK_CATID` (`CAT_ID`),
  ADD KEY `FK_USERID` (`USER_ID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `BILL_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bill_demo`
--
ALTER TABLE `bill_demo`
  MODIFY `BILLDM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `CAT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `detail_bill`
--
ALTER TABLE `detail_bill`
  MODIFY `DB_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `PRO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
