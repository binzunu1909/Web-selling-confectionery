-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 14, 2020 lúc 10:46 AM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `taikhoanadmin` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`taikhoanadmin`, `password`) VALUES
('thanhdat', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `madonhang` varchar(6) NOT NULL,
  `masp` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`madonhang`, `masp`, `soluong`, `dongia`, `thanhtien`) VALUES
('DH0001', 'SP0001', 1, 90000, 90000),
('DH0001', 'SP0002', 1, 90000, 90000),
('DH0001', 'SP0003', 1, 90000, 90000),
('DH0001', 'SP0004', 1, 55000, 55000),
('DH0001', 'SP0005', 1, 55000, 55000),
('DH0001', 'SP0006', 1, 45000, 45000),
('DH0002', 'SP0021', 1, 27000, 27000),
('DH0002', 'SP0029', 1, 48000, 48000),
('DH0002', 'SP0033', 1, 20000, 20000),
('DH0002', 'SP0035', 1, 22000, 22000),
('DH0003', 'SP0001', 5, 90000, 450000),
('DH0003', 'SP0002', 5, 90000, 450000),
('DH0003', 'SP0003', 5, 90000, 450000),
('DH0004', 'SP0001', 2, 90000, 180000),
('DH0004', 'SP0010', 2, 56000, 112000),
('DH0004', 'SP0012', 2, 60000, 120000),
('DH0004', 'SP0027', 2, 165000, 330000),
('DH0005', 'SP0002', 1, 90000, 90000),
('DH0005', 'SP0024', 1, 165000, 165000),
('DH0005', 'SP0023', 1, 165000, 165000),
('DH0005', 'SP0032', 1, 16000, 16000),
('DH0006', 'SP0020', 1, 27000, 27000),
('DH0006', 'SP0021', 5, 27000, 135000),
('DH0006', 'SP0022', 1, 27000, 27000),
('DH0007', 'SP0002', 2, 90000, 180000),
('DH0007', 'SP0003', 2, 90000, 180000),
('DH0007', 'SP0004', 2, 55000, 110000),
('DH0007', 'SP0005', 2, 55000, 110000),
('DH0007', 'SP0006', 2, 45000, 90000),
('DH0008', 'SP0001', 1, 90000, 90000),
('DH0008', 'SP0002', 1, 90000, 90000),
('DH0008', 'SP0032', 2, 16000, 32000),
('DH0008', 'SP0031', 2, 16000, 32000),
('DH0009', 'SP0005', 1, 55000, 55000),
('DH0009', 'SP0004', 1, 55000, 55000),
('DH0009', 'SP0035', 1, 22000, 22000),
('DH0009', 'SP0034', 1, 30000, 30000),
('DH0010', 'SP0015', 1, 70000, 70000),
('DH0010', 'SP0017', 1, 45000, 45000),
('DH0011', 'SP0002', 5, 90000, 450000),
('DH0012', 'SP0003', 2, 90000, 180000),
('DH0013', 'SP0030', 5, 38000, 190000),
('DH0013', 'SP0037', 1, 15000, 15000),
('DH0014', 'SP0035', 5, 22000, 110000),
('DH0014', 'SP0036', 5, 15000, 75000),
('DH0015', 'SP0001', 2, 90000, 180000),
('DH0015', 'SP0002', 2, 90000, 180000),
('DH0015', 'SP0003', 2, 90000, 180000),
('DH0016', 'SP0005', 1, 55000, 55000),
('DH0016', 'SP0008', 1, 45000, 45000),
('DH0016', 'SP0007', 1, 45000, 45000),
('DH0017', 'SP0030', 5, 38000, 190000),
('DH0018', 'SP0023', 1, 165000, 165000),
('DH0018', 'SP0024', 1, 165000, 165000),
('DH0018', 'SP0025', 1, 165000, 165000),
('DH0019', 'SP0037', 10, 15000, 150000),
('DH0020', 'SP0004', 5, 55000, 275000),
('DH0021', 'SP0009', 2, 56000, 112000),
('DH0021', 'SP0010', 2, 56000, 112000),
('DH0021', 'SP0011', 2, 56000, 112000),
('DH0022', 'SP0014', 1, 70000, 70000),
('DH0022', 'SP0015', 1, 70000, 70000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `madonhang` varchar(6) NOT NULL,
  `makhachhang` varchar(6) NOT NULL,
  `tongsoluongsp` int(11) NOT NULL,
  `tongtien` int(11) NOT NULL,
  `ngaydatdon` date NOT NULL,
  `hinhthuc` varchar(70) NOT NULL,
  `tinhtrang` varchar(70) NOT NULL,
  `diachigiao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`madonhang`, `makhachhang`, `tongsoluongsp`, `tongtien`, `ngaydatdon`, `hinhthuc`, `tinhtrang`, `diachigiao`) VALUES
('DH0001', 'KH0001', 6, 425000, '2020-01-02', 'Tiền mặt', 'Đã xác nhận', '123/12, Quốc Lộ 50, Huyện Bình Chánh, TP HCM'),
('DH0002', 'KH0001', 4, 117000, '2020-01-14', 'Tiền mặt', 'Đã xác nhận', '123, Tỉnh lộ 2, Quận 10'),
('DH0003', 'KH0001', 15, 1350000, '2020-02-06', 'Tiền mặt', 'Đã xác nhận', '123/12, Quốc Lộ 50, Huyện Bình Chánh, TP HCM'),
('DH0004', 'KH0002', 8, 742000, '2020-02-16', 'Tiền mặt', 'Đã xác nhận', '27, Cách Mạng Tháng Tám, Quận Tân Bình, TP HCM'),
('DH0005', 'KH0003', 4, 436000, '2020-02-17', 'Tiền mặt', 'Đã xác nhận', '137/12, Lê Đình Cẩn, Quận Bình Tân, TP HCM'),
('DH0006', 'KH0003', 7, 189000, '2020-03-14', 'Tiền mặt', 'Đã xác nhận', '12, An Dương Vương, Quận 5, TP HCM'),
('DH0007', 'KH0001', 10, 670000, '2020-03-22', 'Tiền mặt', 'Đã xác nhận', '123/12, Quốc Lộ 50, Huyện Bình Chánh, TP HCM'),
('DH0008', 'KH0003', 6, 244000, '2020-04-20', 'Tiền mặt', 'Đã xác nhận', '137/12, Lê Đình Cẩn, Quận Bình Tân, TP HCM'),
('DH0009', 'KH0001', 4, 162000, '2020-04-30', 'Tiền mặt', 'Đã xác nhận', '123/12, Quốc Lộ 50, Huyện Bình Chánh, TP HCM'),
('DH0010', 'KH0003', 2, 115000, '2020-05-05', 'Tiền mặt', 'Đã xác nhận', '137/12, Lê Đình Cẩn, Quận Bình Tân, TP HCM'),
('DH0011', 'KH0004', 5, 450000, '2020-05-10', 'Tiền mặt', 'Đã xác nhận', '1648, Tỉnh Lộ 10, Quận Bình Tân, TP HCM'),
('DH0012', 'KH0004', 2, 180000, '2020-05-15', 'Tiền mặt', 'Đã xác nhận', '1648, Tỉnh Lộ 10, Quận Bình Tân, TP HCM'),
('DH0013', 'KH0004', 6, 205000, '2020-05-20', 'Tiền mặt', 'Đã xác nhận', '375, Điện Biên Phủ, Quận 3, TP HCM'),
('DH0014', 'KH0002', 10, 185000, '2020-05-22', 'Tiền mặt', 'Đã xác nhận', '34, Nguyễn Văn Luông, Quận 6, TP HCM'),
('DH0015', 'KH0007', 6, 540000, '2020-05-24', 'Tiền mặt', 'Đã xác nhận', '90, Quốc Lộ 22, Huyện Củ Chi, TP HCM'),
('DH0016', 'KH0001', 3, 145000, '2020-05-28', 'Tiền mặt', 'Đã xác nhận', '123/12, Quốc Lộ 50, Huyện Bình Chánh, TP HCM'),
('DH0017', 'KH0005', 5, 190000, '2020-06-01', 'Tiền mặt', 'Đã xác nhận', '23, Bà Điểm, Huyện Hóc Môn, TP HCM'),
('DH0018', 'KH0006', 3, 495000, '2020-06-05', 'Tiền mặt', 'Đã xác nhận', '72, Lê Hoàng Phái, Quận Gò Vấp, TP HCM'),
('DH0019', 'KH0008', 10, 150000, '2020-06-07', 'Tiền mặt', 'Đã xác nhận', '154, Dương Văn Hạnh, Huyện Cần Giờ, TP HCM'),
('DH0020', 'KH0009', 5, 275000, '2020-06-10', 'Tiền mặt', 'Đã xác nhận', '46, Nguyễn Công Trứ, Quận Bình Thạnh, TP HCM'),
('DH0021', 'KH0010', 6, 336000, '2020-06-15', 'Tiền mặt', 'Đã xác nhận', '47, Đào Duy Từ, Quận Phú Nhuận, TP HCM'),
('DH0022', 'KH0001', 2, 140000, '2020-06-14', 'Tiền mặt', 'Đã hủy', '123/12, Quốc Lộ 50, Huyện Bình Chánh, TP HCM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `maloaisp` varchar(50) NOT NULL,
  `tenloaisp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`maloaisp`, `tenloaisp`) VALUES
('banhthai', 'Bánh Thái'),
('banhviet', 'Bánh Việt'),
('keothai', 'Kẹo Thái'),
('keoviet', 'Kẹo Việt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` varchar(50) NOT NULL,
  `tensp` text NOT NULL,
  `maloaisp` varchar(50) NOT NULL,
  `giasp` int(11) NOT NULL,
  `motasp` text NOT NULL,
  `tinhtrang` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `maloaisp`, `giasp`, `motasp`, `tinhtrang`) VALUES
('SP0001', 'Bánh Goody Chip Điều 300 gam', 'banhviet', 90000, 'Khối lượng: 300g\r\nThành phần:\r\nBột mì, đường, chất béo thực vật, 9% sôcôla hạt, trứng, sữa bột,\r\nmạch nha, 2% hạt điều, chất tạo xốp (E500ii, E503ii), \r\nchất nhũ hóa (E322i),bột ca cao, muối, hương sữa tổng hợp.\r\n\r\nĐóng gói:\r\nQuy cách đóng gói: 12 gam/gói - 25 gói/hộp - 300 gam/hộp - 10 hộp/thùng\r\nKích thước: 41.5 x 28 x 25.5\r\nSố thùng carton / container 20ft (+/- 5%): 624\r\nSố thùng carton / container 40ft (+/- 5%): 1568', NULL),
('SP0002', 'Bánh Goody Chip Sô Cô La 300 gam', 'banhviet', 90000, 'Khối lượng: 300g\r\nThành phần:\r\nBột mì, đường, chất béo thực vật, 12% sôcôla hạt, trứng, sữa bột, \r\nmạch nha, chất tạo xốp (E500ii, E503ii), \r\nchất nhũ hóa (E322i), bột ca cao, muối, hương sữa tổng hợp.\r\n\r\nĐóng gói:\r\nQuy cách đóng gói: 12 gam/gói - 25 gói/hộp - 300 gam/hộp - 10 hộp/thùng\r\nKích thước: 41.5 x 28 x 25.5\r\nSố thùng carton / container 20ft (+/- 5%): 624\r\nSố thùng carton / container 40ft (+/- 5%): 1568', NULL),
('SP0003', 'Bánh Goody Chip Nho 300 gam', 'banhviet', 90000, 'Khối lượng: 300g\r\nThành phần:\r\nBột mì, đường, chất béo thực vật, 9% sôcôla hạt, trứng, sữa bột, \r\nmạch nha, 2% nho khô, chất tạo xốp (E500ii, E503ii), \r\nchất nhũ hóa (E322i), bột ca cao, muối, hương sữa tổng hợp.\r\n\r\nĐóng gói:\r\nQuy cách đóng gói: 12 gam/gói - 25 gói/hộp - 300 gam/hộp - 10 hộp/thùng\r\nKích thước: 41.5 x 28 x 25.5\r\nSố thùng carton / container 20ft (+/- 5%): 624\r\nSố thùng carton / container 40ft (+/- 5%): 1568', NULL),
('SP0004', 'Bánh Gạo Ruốc Khô Mực Thái Lan', 'banhthai', 55000, 'Bánh Gạo Ruốc Khô Mực Thái Lan \r\n\r\nBánh Gạo được nấu từ gạo hoa nhài (Jasmine Rice) nổi tiếng của Thái Lan \r\nhòa quyện với ruốc và khô mực đậm đà đậm chất ăn là ghiền.\r\n\r\nKhác với sản phẩm thông thường, Bánh Gạo, ruốc và khô mực được sấy \r\ncùng nhau tạo nên vị mặn – ngọt nhè nhẹ hòa quyện trong từng \r\nmiếng bánh gạo .\r\n\r\nBánh Gạo được ép thành những miếng mỏng được phủ bên trên ruốc và khô \r\nmực mặn mặn, ngọt ngọt, giòn giòn. Các hương vị hòa quyện \r\nvào nhau tạo nên hương vị thơm ngon mới lạ khó quên. \r\n\r\nSản phẩm được làm từ nguyên liệu tự nhiên và  đóng gói chất lượng cao \r\nan toàn cho người dùng, nhập khẩu từ Thái Lan.\r\n\r\nSản phẩm Bánh gạo ruốc khô mực với thành phần : gạo thơm Jasmine, ruốc, \r\nkhô mực, đường, muối, bột tiêu.\r\n\r\nBánh Gạo là món ăn phù hợp với mọi lứa tuổi trong gia đình , có thể \r\ndùng như 1 món quà biếu tặng rất ý nghĩa .\r\n\r\nQuy cách đóng gói: Gói 100g , Thùng 40 gói .\r\n\r\nBảo quản: Để sản phẩm ở nơi thoáng mát, đóng kín miệng túi sau khi \r\nsử dụng\r\n\r\nCách dùng: Dùng trực tiếp không cần chế biến\r\n', NULL),
('SP0005', 'Bánh Gạo Ruốc Thịt Heo và Rong Biển', 'banhthai', 55000, 'Bánh Gạo Ruốc Thịt Heo và Rong Biển Thái Lan \r\n\r\nBánh Gạo được nấu từ gạo hoa nhài (Jasmine Rice) nổi tiếng của Thái \r\nLan hòa quyện với thịt heo đậm đà đậm chất ăn là ghiền.\r\n\r\nKhác với sản phẩm thông thường, Bánh Gạo và rong biển được sấy \r\ncùng nhau tạo nên vị mặn – ngọt nhè nhẹ hòa quyện trong từng \r\nmiếng bánh gạo .\r\n\r\nBánh Gạo được ép thành những miếng mỏng được phủ bên trên thịt heo và  \r\nrong biển mặn mặn, ngọt ngọt, giòn giòn. Các hương vị hòa quyện vào \r\nnhau tạo nên hương vị thơm ngon mới lạ khó quên. \r\n\r\nSản phẩm được làm từ nguyên liệu tự nhiên và  đóng gói chất lượng cao \r\nan toàn cho người dùng, nhập khẩu từ Thái Lan.\r\n\r\nSản phẩm Bánh gạo ruốc thịt heo & rong biển với thành phần : gạo thơm \r\nJasmine, ruốc thịt heo, rong biển, đường, muối, bột tiêu.\r\n\r\nBánh Gạo là món ăn phù hợp với mọi lứa tuổi trong gia đình , có thể \r\ndùng như 1 món quà biếu tặng rất ý nghĩa .\r\n\r\nQuy cách đóng gói: Gói 100g , Thùng 40 gói .\r\n\r\nBảo quản: Để sản phẩm ở nơi thoáng mát, đóng kín miệng túi sau khi \r\nsử dụng\r\n\r\nCách dùng: Dùng trực tiếp không cần chế biến\r\n\r\n', NULL),
('SP0006', 'Bánh Gạo Vị Thịt Cua Jornguan Thái Lan', 'banhthai', 45000, 'Bánh Gạo Vị Thịt Cua Jornguan Thái Lan \r\n\r\nBánh Gạo được nấu từ gạo hoa nhài (Jasmine Rice) nổi tiếng của Thái \r\nLan hòa quyện với Thịt Cua vị đậm đà đậm chất ăn là ghiền.\r\n\r\nKhác với sản phẩm thông thường, Bánh Gạo và Thịt Cua được sấy\r\ncùng nhau tạo nên vị mặn – ngọt  hòa quyện trong từng miếng \r\nbánh Gạo.\r\n\r\nBánh Gạo được ép thành những miếng mỏng được phủ bên trên lớp chà \r\nbông mặn mặn, ngọt ngọt, giòn giòn. Các hương vị hòa quyện vào \r\nnhau tạo nên hương vị thơm ngon mới lạ khó quên. \r\n\r\nSản phẩm được làm từ nguyên liệu tự nhiên và  đóng gói chất lượng cao \r\nan toàn cho người dùng, nhập khẩu từ Thái Lan.\r\n\r\nBánh Gạo là món ăn phù hợp với mọi lứa tuổi trong gia đình , có thể \r\ndùng như 1 món quà biếu tặng rất ý nghĩa .\r\n\r\n \r\n\r\nQuy cách đóng gói: Gói 100g , Thùng 40 gói .\r\n\r\nBảo quản: Để sản phẩm ở nơi thoáng mát, đóng kín miệng túi sau khi \r\nsử dụng\r\n\r\nCách dùng: Dùng trực tiếp không cần chế biến', NULL),
('SP0007', 'Bánh Gạo Vị Gà Cay Jornguan Thái Lan', 'banhthai', 45000, 'Bánh Gạo Vị Gà Cay Jornguan Thái Lan \r\n\r\nBánh Gạo được nấu từ gạo hoa nhài (Jasmine Rice) nổi tiếng của Thái Lan\r\nhòa quyện với ruốc gà vị đậm đà đậm chất ăn là ghiền.\r\n\r\nKhác với sản phẩm thông thường, Bánh Gạo và chà bông được sấy\r\ncùng nhau tạo nên vị mặn – ngọt – cay nhè nhẹ hòa quyện trong từng \r\nmiếng bánh gạo .\r\n\r\nBánh Gạo được ép thành những miếng mỏng được phủ bên trên lớp\r\nchà bông mặn mặn, ngọt ngọt, giòn giòn. Các hương vị hòa quyện \r\nvào nhau tạo nên hương vị thơm ngon mới lạ khó quên. \r\n\r\nSản phẩm được làm từ nguyên liệu tự nhiên và đóng gói chất lượng cao\r\nan toàn cho người dùng, nhập khẩu từ Thái Lan.\r\n\r\nBánh Gạo là món ăn phù hợp với mọi lứa tuổi trong gia đình , có thể\r\ndùng như 1 món quà biếu tặng rất ý nghĩa .\r\n\r\nQuy cách đóng gói: Gói 100g , Thùng 40 gói .\r\n\r\nBảo quản: Để sản phẩm ở nơi thoáng mát, đóng kín miệng túi sau\r\nkhi sử dụng\r\n\r\nCách dùng: Dùng trực tiếp không cần chế biến', NULL),
('SP0008', 'Bánh Gạo Vị Thịt Heo Jornguan Thái Lan', 'banhthai', 45000, 'Bánh Gạo Vị Thịt Heo Jornguan Thái Lan \r\n\r\nBánh Gạo được nấu từ gạo hoa nhài (Jasmine Rice) nổi tiếng của Thái \r\nLan hòa quyện với thịt heo vị đậm đà đậm chất ăn là ghiền.\r\n\r\nBánh Gạo được ép thành những miếng mỏng mặn mặn, ngọt ngọt,\r\ngiòn giòn. Các hương vị hòa quyện vào nhau tạo nên hương vị thơm\r\nngon mới lạ khó quên. \r\n\r\nSản phẩm được làm từ nguyên liệu tự nhiên và đóng gói \r\nchất lượng cao an toàn cho người dùng, nhập khẩu từ Thái Lan.\r\n\r\nSản phẩm Bánh gạo ruốc thịt heo với thành phần : gạo thơm\r\nJasmine, thịt heo, đường, muối, bột tiêu.\r\n\r\nBánh Gạo là món ăn phù hợp với mọi lứa tuổi trong\r\ngia đình , có thể dùng như 1 món quà biếu tặng rất\r\ný nghĩa .\r\n\r\nQuy cách đóng gói: Gói 100g , Thùng 40 gói .\r\n\r\nBảo quản: Để sản phẩm ở nơi thoáng mát, đóng kín miệng túi \r\nsau khi sử dụng\r\n\r\nCách dùng: Dùng trực tiếp không cần chế biến', NULL),
('SP0009', 'Bánh Hura Deli Hương Bơ - Sữa 168 gam', 'banhviet', 56000, 'Thành phần: Bột mì, đường, trứng, chất béo thực vật (shortening,\r\ndầu olein tinh luyện), mạch nha, bơ, sữa bột, chất giữ \r\nẩm (E422, E420(i)), chất nhũ hóa (E471), nước, tinh bột bắp, \r\nchất tạo xốp (E500(ii), E503(ii)), muối, sô-cô-la compound trắng, \r\nhương (sữa, bơ, vani) tổng hợp, chất bảo quản (E202), \r\nchất làm dày (E415), phẩm màu tổng hợp (E160a(i)).\r\nGiá trị dinh dưỡng (trên 100g):\r\nNăng lượng: 356 - 650,8 kcal\r\nChất béo: 24  - 44 g\r\nCarbohydrate: 31,5 - 57,5 g \r\nProtein :  3,5 - 6,2 g\r\n\r\nQuy cách đóng gói: 28 gam/gói - 06 gói/hộp - \r\n168 gam/hộp - 10 hộp/thùng\r\nKích thước: 41.5 x 28 x 25.5\r\nSố thùng carton / container 20ft (+/- 5%): 546\r\nSố thùng carton / container 40ft (+/- 5%) : 1134', NULL),
('SP0010', 'Bánh Hura Deli Hương Cốm - Dừa 168 gam', 'banhviet', 56000, 'Thành phần: Thành phần: Bột mì, đường, trứng, chất béo thực vật\r\n(shortening,dầu olein tinh luyện), mạch nha, bơ, sữa bột, chất giữ \r\nẩm (E422, E420(i)), chất nhũ hóa (E471), nước, tinh bột bắp, \r\nchất tạo xốp (E500(ii), E503(ii)), muối, sô-cô-la compound trắng, \r\nhương (cốm, dừa, bơ,  vani) tổng hợp, chất bảo quản (E202), \r\nchất làm dày (E415), phẩm màu tổng hợp (E160a(i), E133).\r\nGiá trị dinh dưỡng (trên 100g):\r\nNăng lượng: 356 - 650,8 kcal\r\n Chất béo: 24  - 44 g\r\nCarbohydrate: 31,5 - 57,5 g \r\nProtein :  3,5 - 6,2 g\r\n\r\nQuy cách đóng gói: 28 gam/gói - 06 gói/hộp - \r\n168 gam/hộp - 10 hộp/thùng\r\nKích thước: 41.5 x 28 x 25.5\r\nSố thùng carton / container 20ft (+/- 5%): 546\r\nSố thùng carton / container 40ft (+/- 5%) : 1134', NULL),
('SP0011', 'Bánh Hura Deli Hương Sữa - Dâu 168 gam', 'banhviet', 56000, 'Thành phần: Bột mì, đường, trứng, chất béo thực vật (shortening, \r\ndầu olein tinh luyện), mạch nha, bơ, sữa bột, chất giữ \r\nẩm (E422, E420(i)), chất nhũ hóa (E471), nước, tinh bột bắp, \r\nchất tạo xốp (E500(ii), E503(ii)), muối, sô-cô-la compound trắng, \r\nhương (sữa, dâu, bơ, vani) tổng hợp, chất bảo quản (E202), \r\nchất làm dày (E415), chất điều chỉnh độ axit (E330), phẩm màu \r\ntổng hợp (E160a(i), E129).\r\nGiá trị dinh dưỡng (trên 100g):\r\nNăng lượng: 356 - 650,8 kcal\r\nChất béo: 24  - 44 g\r\nCarbohydrate: 31,5 - 57,5 g \r\nProtein :  3,5 - 6,2 g\r\n\r\nQuy cách đóng gói: 28 gam/gói - 06 gói/hộp - \r\n168 gam/hộp - 10 hộp/thùng\r\nKích thước: 41.5 x 28 x 25.5\r\nSố thùng carton / container 20ft (+/- 5%): 546\r\nSố thùng carton / container 40ft (+/- 5%) : 1134', NULL),
('SP0012', 'Bánh Kem Xốp Cốm Hộp Giấy 240 gam', 'banhviet', 60000, 'Thành phần: Bột mì, chất béo thực vật (shortening, dầu olein \r\ntinh luyện), đường, sữa bột, bột whey, tinh bột bắp, muối, chất \r\nđiều chỉnh độ axit (E330), hương cốm tổng hợp, \r\nchất tạo xốp (E500ii), chất nhũ hóa (E322i, E450i), phẩm màu \r\ntổng hợp (clorophyl (E140), beta-caroten (E160ai)).\r\nSản phẩm có chứa: gluten, sữa và đậu nành.\r\n \r\n\r\nNăng lượng   : 367 - 683 kcal\r\n\r\nChất béo: 18 - 36 g\r\n\r\nCarbohydrate:  45 - 86 g\r\n\r\nProtein   :   3 - 7 g\r\n\r\nQuy cách đóng gói: 240g/hộp- 20 hộp/ thùng\r\nKích thước (cm): 42 x 33 x 36.5\r\nSố thùng carton / container 20ft (+/- 5%):  546\r\nSố thùng carton / container 40ft (+/- 5%) : 1372', NULL),
('SP0013', 'Bánh Kem Xốp Phô Mai Hộp Giấy 240 gam', 'banhviet', 60000, 'Thành phần: Bột mì, chất béo thực vật (shortening, dầu olein \r\ntinh luyện), đường, sữa bột, bột whey, tinh bột bắp, muối, chất \r\nđiều chỉnh độ axit (E330), hương dâu tổng hợp, \r\nchất tạo xốp (E500ii), chất nhũ hóa (E322i), (E450i), phẩm màu \r\ntổng hợp (E129, E110).\r\nSản phẩm có chứa: gluten, sữa và đậu nành.\r\nChỉ tiêu chất lượng chủ yếu\r\n\r\nNăng lượng   : 367 - 683 kcal	Chất béo: 18 - 36 g\r\nCarbohydrate:  45 - 86 g	Protein   :   3 - 7 g\r\nQuy cách đóng gói: 240ghộp- 20 hộp/thùng\r\nKích thước (cm): 42 x 33 x 36.5\r\nSố thùng carton / container 20ft (+/- 5%):  546\r\nSố thùng carton / container 40ft (+/- 5%) : 1372', NULL),
('SP0014', 'Bánh Lá Dứa Orienko 360 gam', 'banhviet', 70000, 'Thành phần Bánh: Bột mì, đường, mạch nha, chất béo thực vật \r\n(shortening, dầu olein tinh luyện), chất làm ẩm (E420(i)), trứng (gà), \r\nchất tạo xốp (E500(ii), E503(ii)), muối, gelatin, chất điều \r\nchỉnh độ axit (E341(i)), chất làm dày (E415),  hương (sữa, vani) \r\ntổng hợp, 0,04% bột lá dứa, đạm sữa.\r\nThành phần compound lá dứa phủ: 25% Compound lá dứa (chất béo thực vật \r\n(bơ thực vật thay thế bơ ca cao), đường, sữa bột, \r\nchất nhũ hóa (E322(i), E476), hương lá dứa tổng hợp, \r\nphẩm màu (E141(i), E100) tự nhiên.\r\nSản phẩm có chứa: gluten và trứng.\r\n\r\nQuy cách đóng gói: 360 gam/hộp - 08 hộp/thùng\r\nKích thước (cm): 54 x 32 x 22.5\r\nSố thùng carton / container 20ft (+/- 5%): 540\r\nSố thùng carton / container 40ft (+/- 5%) : 1134', NULL),
('SP0015', 'Bánh Sữa Orienko 360 gam', 'banhviet', 70000, 'Thành phần Bánh: Bột mì, đường, mạch nha, chất béo thực vật \r\n(shortening,dầu olein tinh luyện), chất làm ẩm (E420(i)), trứng (gà), \r\nchất tạo xốp (E500(ii), E503(ii)), muối, gelatin, hương (vani, sữa) \r\ntổng hợp, chất điều chỉnh độ axit (E341(i)), chất \r\nlàm dày (E415), đạm sữa.\r\nThành phần compound trắng phủ: 25% Compound trắng (chất béo thực vật \r\n(bơ thực vật thay thế bơ ca cao), đường, 6% sữa bột, \r\nchất nhũ hóa (E322(i), E476), hương (vani, sữa) tổng hợp).\r\nSản phẩm có chứa: gluten và trứng.\r\n\r\nQuy cách đóng gói: 360 gam/hộp - 08 hộp/thùng\r\nKích thước: 54 x 32 x 22.5\r\nSố thùng carton / container 20ft (+/- 5%): 540\r\nSố thùng carton / container 40ft (+/- 5%) : 1134', NULL),
('SP0016', 'Bánh Quy Nhân Đậu Phộng Giòn 300g', 'banhthai', 85000, 'nBánh vừa có độ xốp, vừa có độ giòn và hương vị thơm ngon béo béo đặc \r\ntrưng của đậu phộng làm ngất ngây ngay khi bỏ vào miệng.\r\n\r\nBánh được đóng thành từng gói nhỏ tiện lợi, bao bì đẹp mắt có thể làm \r\nquà biếu tặng sang trọng .\r\n\r\nThành phần  : Thành phần gồm Đậu phộng, đường, bột mì,bơ thực vật, bột \r\nbắp, bột sắn, bột sữa trứng, trứng ,muối.\r\n\r\nQuy cách:gói 300g  thùng 24 gói.\r\n\r\nXuất xứ : Malaysia ', NULL),
('SP0017', 'Bánh Quy Sữa Marie Lurich Hộp Giấy 270 gam', 'banhviet', 45000, 'Thành phần: Bột mì, chất béo thực vật (shortening), đường, mạch nha, \r\ntinh bột bắp, 3% sữa bột, mạch nha lúa mạch, \r\nchất tạo xốp (E503ii, E500ii), muối, hương sữa \r\ntổng hợp, chất nhũ hóa (E322i), chất xử lý bột (E223).\r\nSản phẩm có chứa: gluten, sữa và đậu nành\r\nChỉ tiêu chất lượng chủ yếu\r\n\r\nNăng lượng   : 310 - 578 kcal   \r\n\r\nChất béo: 9 - 16,8 g\r\n\r\nCarbohydrate:   51 - 95 g\r\n\r\nProtein   : 6 - 11,5 g\r\n \r\n\r\n Quy cách đóng gói: 270g/hộp- 10 hộp/ thùng #2.77kg\r\nKích thước (cm): 41.5 x 28 x 25.5\r\nSố thùng carton / container 20ft (+/- 5%): 1008\r\nSố thùng carton / container 40ft (+/- 5%): 2240', NULL),
('SP0018', 'Bánh Bơ Nhân Đậu Phộng Giòn 300g', 'banhthai', 89000, 'Bánh quy bơ nhân đậu phộng vừa có độ xốp, vừa có độ giòn và hương vị\r\nthơm ngon béo béo đậu phộng làm ngất ngây ngay khi bỏ \r\nvào miệng.\r\n\r\nBánh được đóng thành từng gói nhỏ tiện lợi, bao bì đẹp mắt có thể\r\nlàm quà biếu tặng sang trọng .\r\n\r\nThành phần  : Thành phần gồm có đậu phộng, đường, bột mì, bơ thực \r\nvật, bột bắp, bột sắn, bột sữa trứng, trứng ,muối.\r\n\r\nQuy cách:gói 300g , thùng 24 gói.\r\n\r\nXuất xứ : Malaysia  ', NULL),
('SP0019', 'Bánh Sô Cô La Nhân Đậu Phộng Giòn 300g', 'banhthai', 89000, 'Bánh quy sô cô la  nhân đậu phộng vừa có độ xốp, vừa có độ giòn và hương\r\nvị thơm ngon béo béo đậu phộng làm ngất ngây ngay khi bỏ \r\nvào miệng.\r\n\r\nBánh được đóng thành từng gói nhỏ tiện lợi, bao bì đẹp mắt có thể làm\r\nquà biếu tặng sang trọng .\r\n\r\nThành phần  : Thành phần gồm có đậu phộng, đường, bột mì,bơ thực\r\nvật, bột bắp, bột sắn, bột sữa trứng, trứng, muối, socola.\r\n\r\nQuy cách: gói 300g, gói 100g\r\n\r\nXuất xứ : Malaysia', NULL),
('SP0020', 'Kẹo Mềm Sumika Dâu Túi 350 gam', 'keoviet', 27000, 'Thành phần : Đường, mạch nha, chất béo thực vật (shortening, dầu \r\ntinh luyện), 5% sữa bột, gelatin, chất điều chỉnh độ acid (E330), \r\nchất tạo ngọt (E420(i)), chất nhũ hóa (E475, E322(i)), hương (sữa, \r\ndâu, vani) tổng hợp, phẩm màu (E129).\r\n\r\nQuy cách đóng gói : 350 gam/túi - 20 túi/thùng\r\n\r\nKích thước thùng carton(cm) : 50 x 33 x 22\r\n\r\nSố thùng carton / container 40ft (+/- 5%) : 1540', NULL),
('SP0021', 'Kẹo Mềm Sumika Sô Cô La Túi 350 gam', 'keoviet', 27000, 'Thành phần : Đường, mạch nha, chất béo thực vật (shortening, \r\ndầu tinh luyện), 4% sữa bột, 2% bột cacao, gelatin, chất tạo \r\nngọt (E420(i)), chất nhũ hóa (E475, E322(i)), hương (sô cô la, sữa, \r\nvani) tổng hợp.\r\n\r\nQuy cách đóng gói : 350 gam/túi - 20 túi/thùng\r\n\r\nKích thước thùng carton(cm) : 50 x 33 x 22\r\n\r\nSố thùng carton / container 40ft (+/- 5%) : 1540', NULL),
('SP0022', 'Kẹo Mềm Sumika Sữa Túi 350 gam', 'keoviet', 27000, 'Thành phần : Đường, mạch nha, chất béo thực vật (shortening, dầu \r\ntinh luyện), 6% sữa bột, gelatin, chất tạo ngọt (E420(i)), \r\nchất nhũ hóa (E475, E322(i)), hương (sữa, vani) tổng hợp.\r\n \r\n\r\nQuy cách đóng gói : 350 gam/túi - 20 túi/thùng\r\n\r\nKích thước thùng carton(cm) : 50 x 33 x 22\r\n\r\nSố thùng carton / container 40ft (+/- 5%) : 1540', NULL),
('SP0023', 'Hộp 6 Hũ Kẹo Play More Táo 22g', 'keothai', 165000, 'Thành phần: Chất tạo ngọt (INS420i) 97.42%, chất điều chỉnh độ axit \r\n(INS296) 1.2%, chất chống đông vón (INS470iii) 0.5%, hương táo xanh \r\ntổng hợp 0.4%, tinh dầu bạc hà 0.2%, vitamin C 0.2%, \r\nchất tạo ngọt (INS955) 0.074%, phẩm màu (INS129) 0.06%.\r\nCách dùng: Dùng trực tiếp\r\nBảo quản: Bảo quản nơi khô ráo, thoáng mát. Tránh ánh nắng trực tiếp và \r\nnhiệt độ cao.\r\nThương hiệu: Play More (Thái Lan)\r\nDạng chai nhựa siêu cute: 22gr/chai, 6 chai/hộp\r\nKẹo Play More táo là sản phẩm nhập khẩu mới tinh. Kẹo ngậm \r\ndạng viên cứng, vị táo xanh thơm thơm, tươi mát kết hợp với Methol\r\nbạc hà the the, thơm miệng, thông cổ và mát lạnh.\r\n\r\nDạng chai nhựa siêu dễ thương, nắp vặn chắc chắn sang chảnh, dễ\r\ndàng bỏ túi mang đi xa, ăn xong tái sử dụng cái \r\nchai đựng đồ linh tinh dễ thương.', NULL),
('SP0024', 'Hộp 6 Hũ Kẹo Play More Xoài 22g', 'keothai', 165000, 'Tên sản phẩm: Kẹo Play More Vị Xoài\r\nTên tiếng Anh: Mango and Menthol Duo Candy ( Playmore Brand )\r\nThương hiệu: Play More\r\nXuất xứ: EVERMORE CO., LTD THAILAND \r\nNguồn hàng: VNNK\r\nKhối lượng: 22g/hũ\r\nHạn sử dụng: 2 năm\r\nQuy cách: 6 hũ/hộp\r\nSố đăng ký: 10-3-24257-5-0071\r\nMã vạch: 6935855703520\r\nPLAYMORE đang hot - Dự là sẽ hot hơn nữa với vị xoài hoàn toàn mới \r\ntoanh.\r\n\r\nVị mới lạ thanh mát pha chút ngọt ngào tuyệt vời của từng \r\ntrái xoài chín mộng thì còn gì bằng. \r\nTrời nóng mà ngậm 1 em thì the mát từ trong ra \r\nngoài nha, ngọt từ ngoài vào trong luôn\r\nTác dụng: thơm miệng, giảm stress, giảm đau họng với method\r\nKẹo ngậm loại cứng, phù hợp với mọi lứa tuổi, tuy cứng nhưng\r\nngậm thì tan.\r\nAnh em nào cũng cai thuốc lá cũng có thể dùng Play More để giảm\r\nthiểu thời gian \"ngứa ngáy\" nha\r\nHũ nhỏ 22g: Siêu tiết kiệm, dễ dàng bỏ túi mang đi xa.', NULL),
('SP0025', 'Hộp 6 Hũ Kẹo Play More Xí Muội 22g', 'keothai', 165000, 'Thành phần: Chất tạo ngọt (INS420i) 97.42%, chất điều chỉnh độ axit \r\n(INS296) 1.2%, chất chống đông vón (INS470iii) 0.5%, hương xí muội \r\ntổng hợp 0.4%, tinh dầu bạc hà 0.2%, vitamin C 0.2%,\r\nchất tạo ngọt (INS955) 0.074%, phẩm màu (INS129) 0.06%.\r\nCách dùng: Dùng trực tiếp\r\nBảo quản: Bảo quản nơi khô ráo, thoáng mát. Tránh ánh nắng trực tiếp và \r\nnhiệt độ cao.\r\nThương hiệu: Play More (Thái Lan)\r\nDạng chai nhựa siêu cute: 22gr/chai, 6 chai/hộp\r\nKẹo Play More xí muội là sản phẩm nhập khẩu mới tinh. Kẹo ngậm \r\ndạng viên cứng, vị xí muội mặn mặn thơm thơm, tươi mát \r\nkết hợp với Methol bạc hà the the, thơm miệng, thông \r\ncổ và mát lạnh.\r\n\r\nDạng chai nhựa siêu dễ thương, nắp vặn chắc chắn sang chảnh, dễ \r\ndàng bỏ túi mang đi xa, ăn xong tái sử dụng cái \r\nchai đựng đồ linh tinh dễ thương.', NULL),
('SP0026', 'Hộp 6 Hũ Play More Dưa Hấu 22g\r\n', 'keothai', 165000, 'Thành phần: Chất tạo ngọt (INS420i) 97.42%, chất điều chỉnh độ axit \r\n(INS296) 1.2%, chất chống đông vón (INS470iii) 0.5%, hương dưa hấu \r\ntổng hợp 0.4%, tinh dầu bạc hà 0.2%, vitamin C 0.2%,\r\nchất tạo ngọt (INS955) 0.074%, phẩm màu (INS129) 0.06%.\r\nCách dùng: Dùng trực tiếp\r\nBảo quản: Bảo quản nơi khô ráo, thoáng mát. Tránh ánh nắng trực tiếp và \r\nnhiệt độ cao.\r\nThương hiệu: Play More (Thái Lan)\r\nDạng chai nhựa siêu cute: 22gr/chai, 6 chai/hộp\r\nKẹo Play More dưa hấu là sản phẩm nhập khẩu mới tinh. Kẹo ngậm \r\ndạng viên cứng, vị dưa hấu tươi mát kết hợp với Methol \r\nbạc hà the the, thơm miệng, thông cổ và mát lạnh.\r\n\r\nDạng chai nhựa siêu dễ thương, nắp vặn chắc chắn sang chảnh, dễ \r\ndàng bỏ túi mang đi xa, ăn xong tái sử dụng cái \r\nchai đựng đồ linh tinh dễ thương.', NULL),
('SP0027', 'Hộp 6 Hũ Kẹo Play More Chanh Muối 22g', 'keothai', 165000, 'Tên sản phẩm: Kẹo Play More chanh muối\r\nTên tiếng Anh: Lemon Sea Salt and Menthol Duo Candy ( Playmore Brand )\r\nThương hiệu: Play More\r\nXuất xứ: EVERMORE CO., LTD\r\nNguồn hàng: VNNK\r\nKhối lượng: 22g/hũ\r\nQuy cách: 6 hũ/hộp\r\nHạn sử dụng: 2 năm\r\nSố đăng ký: 10-3-24257-5-0073\r\nMã vạch: 6935855703582\r\nPLAYMORE đang hot - Dự là sẽ hot hơn nữa với vị chanh muối mới toanh.\r\n\r\nVị mới lạ thanh mát pha chút mặn mặn tuyệt vời của chanh muối luôn. \r\nTrời nóng mà ngậm 1 em thì the mát từ trong ra ngoài nha\r\nTác dụng: thơm miệng, giảm stress, giảm đau họng với methol\r\nKẹo ngậm loại cứng, phù hợp với mọi lứa tuổi.\r\nAnh em nào cũng cai thuốc lá cũng có thể dùng Play More để giảm thiểu \r\nthời gian \"ngứa ngáy\" nha\r\nCó luôn 2 cỡ cho bạn: \r\nChai/hũ nhựa 22gr: siêu dễ thương, nắp vặn chắc chắn sang chảnh, dễ \r\ndàng bỏ túi mang đi xa, ăn xong tái sử dụng cái chai \r\nđựng đồ linh tinh dễ thương.', NULL),
('SP0028', 'Combo 3 Vị Play More Dưa Hấu, Xí Muội, Táo 22g Thái Lan', 'keothai', 165000, 'Thành phần: Chất tạo ngọt (INS420i) 97.42%, chất điều chỉnh độ axit \r\n(INS296) 1.2%, chất chống đông vón (INS470iii) 0.5%, hương vị \r\ntổng hợp 0.4%, tinh dầu bạc hà 0.2%, vitamin C 0.2%, \r\nchất tạo ngọt (INS955) 0.074%, phẩm màu (INS129) 0.06%.\r\nCách dùng: Dùng trực tiếp\r\nBảo quản: Bảo quản nơi khô ráo, thoáng mát. Tránh ánh nắng trực tiếp \r\nvà nhiệt độ cao.\r\nThương hiệu: Play More (Thái Lan)\r\nDạng chai nhựa siêu cute: 22gr/chai, 6 chai/hộp\r\nCombo 6 hủ kẹo Play more Thái Lan - gồm có \r\n3 vị Dưa hấu , Táo xanh và Xí muội => thật dễ dàng\r\ncho các bạn thưởng thức đầy đủ mùi vị của kẹo Playmore trứ danh\r\n\r\n- Play More là thương hiệu kẹo nổi tiếng của Thái Lan.\r\n\r\n- Viên kẹo ngậm thơm, mềm, sảng khoái, tỉnh tảo.\r\n\r\n- Có tác dụng làm thơm miệng, giảm stress, giảm đau họng, phù hợp cho \r\nmọi lứa tuổi.\r\n\r\n- Hũ xinh xắn dễ thương, có thể tận dụng đựng đồ.', NULL),
('SP0029', 'Kẹo Dẻo Quê Hương Hủ Nhựa 300 gam', 'keoviet', 48000, 'Thành phần : Đường, mạch nha, gelatin, chất điều chỉnh độ axit \r\n(axit xitric), hương (cam, chanh, dâu, trái cây) \r\ntổng hợp, màu thực phẩm tổng hợp (E110, E133, E129, \r\nE160ai).\r\n \r\n\r\nQuy cách đóng gói : 300 gam/hủ - 30 hủ/thùng\r\n\r\nKích thước thùng carton(cm) : 34 x 30 x 16\r\n\r\nSố thùng carton / container 20ft (+/- 5%): 594\r\n\r\nSố thùng carton / container 40ft (+/- 5%) : 1260', NULL),
('SP0030', 'Kẹo Dẻo Zoo Áo Đường 500 gam', 'keoviet', 38000, 'Thành phần : Đường, mạch nha, gelatin, chất điều chỉnh độ axit \r\n(axit xitric), hương (cam, chanh, dâu, trái cây) \r\ntổng hợp, màu thực phẩm tổng hợp (E110, E133, E129, \r\nE160ai).\r\n \r\n\r\nQuy cách đóng gói : 500 gam/túi - 30 túi/thùng\r\n\r\nKích thước thùng carton(cm) : 34 x 30 x 16\r\n\r\nSố thùng carton / container 20ft (+/- 5%): 594\r\n\r\nSố thùng carton / container 40ft (+/- 5%) : 1260', NULL),
('SP0031', 'Kẹo Sữa Bò Roscela Milk Tablet Thái Lan Vị Vani', 'keothai', 16000, 'Tên sản phẩm: Kẹo sữa bò Milk Tablet Thái Lan vị vani\r\nTên tiếng Anh: MILK TABLET SWEETENED FLAVOUR (ROSCELA BRAND)\r\nTên tiếng Thái: นมปรุงแต่งอัดเม็ดรสหวาน (ตรา โรสเซล่า)\r\nThương hiệu: ROSCELA BRAND (ตรา โรสเซล่า)\r\nXuất xứ: Thái Lan\r\nKhối lượng: 20g\r\nHương vị: Vani\r\nMàu sắc: Trắng\r\nMã FDA: 13-1-11533-1-0016\r\nMã vạch: 8850199584933\r\nNewcode: U1FE0001011311153310016C\r\nHạn sử dụng: 1 năm\r\nQuy cách tính: 1 hộp = 12 Bịch\r\n\r\n\r\nThông tin chi tiết:\r\n\r\nKẹo sữa bò Thái Lan được làm 100% sữa bò nguyên chất cùng với quy \r\ntrình tuyển chọn nguyên liệu nghiêm ngặt mang lại hương vị sữa đậm \r\nđà cao cấp và sự an tâm tin tưởng cho người dùng.\r\nKẹo dành cho trẻ em, thơm, béo, mềm, tan ngay khi cho vào miệng.\r\nHương vị đậm đà, thơm ngon không cưỡng lại được. Từ khi \r\nxuất hiện trên thị trường cho đến nay, kẹo sữa bò Milk Tablet \r\nThái Lan đã nhanh chóng trở thành một trong những loại kẹo rất \r\nđược ưa chuộng trên thị trường không chỉ ở Thái Lan \r\nmà đã lan sang rất nhiều quốc gia trên thế giới, trong đó \r\ncó Việt Nam. Đậm đà hương vị sữa tươi:\r\n\r\nKẹo sữa bò được làm từ 100% sữa bò cao cấp. Công nghệ hiện \r\nđại tiên tiến giúp cho giữ lại thành phần dinh dưỡng \r\ncao dồi dào cũng như hương vị thơm ngon hoàn \r\nhảo của sữa bò. Ngon và thơm hương vị sữa. Kẹo sữa bò \r\ngiàu dinh dưỡng:\r\n\r\nVị sữa đậm đặc giàu dinh dưỡng là đặc trưng riêng chỉ \r\ncó ở kẹo sữa bò Milk Tablet. Thưởng thức hương vị sữa thơm \r\nngon đồng thời bạn có thể sử dụng nguồn dinh dưỡng cao. \r\nNay có thêm vị vani mang lại cảm giác mới mẻ, thơm \r\nngon cho người dùng. Kẹo sữa bò được yêu thích \r\ntại Thái Lan:\r\n\r\nKể từ khi xuất hiện trên thị trường, kẹo sữa luôn \r\ndẫn đầu ở bảng xếp hạng doanh số với các loại kẹo \r\ncùng loại, giữ vững được sự ưa chuộng của khách \r\nhàng Thái Lan về chất lượng và độ tin cậy vào \r\nsản phẩm kẹo sữa ngon độc đáo này. Kẹo sữa bò \r\nMilk Tablet là loại kẹo dành cho trẻ em bán chạy\r\nhàng đầu tại Thái Lan trong nhiều năm qua.\r\nHướng dẫn sử dụng:\r\n\r\nDùng trực tiếp.\r\nĂn ngay sau khi bóc vỏ\r\nNgày sản xuất và hạn sử dụng: Xem trên bao bì sản phẩm.\r\n\r\nHướng dẫn bảo quản: Bảo quản nơi khô ráo, tránh xa ánh nắng mặt trời.\r\n\r\nCam kết hàng Thái Lan chính hãng !!!', NULL),
('SP0032', 'Kẹo Sữa Bò Thái Lan Vị Sô Cô La', 'keothai', 16000, 'Trọng lượng : 20g\r\n\r\nHương vị : Sô cô la\r\n\r\nMàu sắc : Nâu\r\n\r\nHạn sử dụng : 1 năm\r\n\r\nQuy cách tính : 1 hộp = 12 Bịch \r\n\r\n-Kẹo sữa bò được làm từ sữa bò 100% làm thành từng viên tròn ngộ nghĩnh\r\n\r\n-Kẹo sữa bò vị sô cô la được làm từ sữa bò kết hợp với chocolate hương \r\nvị đặc sắc hơn \r\n\r\n-Dạng kẹo viên , ngậm tan từ từ trong miệng mùi sữa bột , ngon \r\nvà béo ngậy\r\n\r\nSản phẩm nhập khẩu trực tiếp từ Thái Lan.', NULL),
('SP0033', 'Kẹo Mềm AHHA Sữa Túi 350 gam', 'keoviet', 20000, 'Thành phần: Đường, mạch nha (tinh bột sắn, muối, nước), 8% sữa bột, \r\ndầu olein hydro hóa, bột kem sữa, gelatin, đạm \r\nđậu nành, dầu bơ khan, muối I-ốt, chất làm \r\ndày (E1204), chất nhũ hóa (E322(i)).\r\n\r\nQuy cách đóng gói : 120 gam/túi - 16 túi/thùng\r\nKích thước thùng carton(mm) :  500x330x195\r\nSố thùng carton / container 20ft (+/- 5%): 924     \r\nSố thùng carton / container 40ft (+/- 5%) : 2093', NULL),
('SP0034', 'Kẹo Hương Trái Cây Bốn Mùa Quai Xách Túi 650 gam', 'keoviet', 30000, 'Thành phần : Đường, mạch nha, muối, chất điều chỉnh độ axit \r\n(axit xitric), hương trái cây tổng hợp (dâu, cam, vải, nho đen), \r\nmàu thực phẩm tổng hợp (E129, E110, E133).\r\n \r\n\r\nQuy cách đóng gói : 3 gam/viên - 216 viên/túi - \r\n650 gam/túi - 12 túi/thùng\r\n\r\nKích thước thùng carton(cm) : 50 x 33 x 22\r\n\r\nSố thùng carton / container 20ft (+/- 5%): 594\r\n\r\nSố thùng carton / container 40ft (+/- 5%) : 1260', NULL),
('SP0035', 'Kẹo Chewgum Trái Cây Hỗn Hợp 270 gam', 'keoviet', 22000, 'Thành phần: Đường, mạch nha (tinh bột sắn, muối, nước), \r\n8% sữa bột, dầu olein hydro hóa, bột kem sữa, gelatin,\r\nđạm đậu nành, dầu bơ khan, muối I-ốt, \r\nchất làm dày (E1204), chất nhũ hóa (E322(i)).\r\n\r\nQuy cách đóng gói : 270 gam/tui - 20 túi/thùng\r\nKích thước thùng carton(mm) :  500x330x195\r\nSố thùng carton / container 20ft (+/- 5%): 924     \r\nSố thùng carton / container 40ft (+/- 5%) : 2093\r\n', NULL),
('SP0036', 'Kẹo Welly Hương Trái Cây Thập Cẩm 90 gam', 'keoviet', 15000, 'Thành phần : Đường, mạch nha, chất điều chỉnh độ axit (axit xitric), \r\nmuối, hương (cam, dâu, chanh, cola, nho đen, ổi, vải, tutti fruiti) \r\ntổng hợp, màu thực phẩm tổng hợp (E110, E129, E133, E160ai, \r\nE150d).\r\n\r\nQuy cách đóng gói : 2.8 gam/viên - 32 viên/túi - \r\n90 gam/túi - 80 túi/thùng\r\nKích thước thùng carton(cm) : 50 x 33 x 28\r\nSố thùng carton / container 20ft (+/- 5%): 462\r\nSố thùng carton / container 40ft (+/- 5%) : 980', NULL),
('SP0037', 'Kẹo Tứ Quý Bạc Hà Sữa Nhân Sô Cô La 100 gam', 'keoviet', 15000, 'Thành phần : Đường, mạch nha, chất béo thực vật, 4% sữa bột, \r\n3% bột ca cao, muối, chất nhũ hóa: lexitin (E322), \r\nhương (bạc hà, socola, cream, bơ, vani) tổng hợp, màu thực phẩm \r\ntổng hợp: Titan dioxit (E171).\r\n\r\nQuy cách đóng gói : 3 gam/viên - 33 viên/túi - \r\n100 gam/túi - 50 túi/thùng\r\n\r\nKích thước thùng carton(cm) : 50 x 33 x 28\r\n\r\nSố thùng carton / container 20ft (+/- 5%): 462\r\n\r\nSố thùng carton / container 40ft (+/- 5%) : 980', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `taikhoan` varchar(20) NOT NULL,
  `makh` varchar(6) DEFAULT NULL,
  `matkhau` varchar(200) NOT NULL,
  `dienthoai` varchar(10) NOT NULL,
  `hoten` varchar(70) NOT NULL,
  `diachi` varchar(70) NOT NULL,
  `trangthai` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`taikhoan`, `makh`, `matkhau`, `dienthoai`, `hoten`, `diachi`, `trangthai`) VALUES
('binzunu1909', 'KH0004', 'ecffb42b85bb04e01ad2d8ddd22d7884', '0388874915', 'Nguyễn Thị Mỹ Hằng', '1648, Tỉnh Lộ 10, Quận Bình Tân, TP HCM', NULL),
('caubengocnghech', 'KH0008', '25d55ad283aa400af464c76d713c07ad', '0906529851', 'Nguyễn Văn A', '154, Dương Văn Hạnh, Huyện Cần Giờ, TP HCM', NULL),
('cobengayngo', 'KH0009', '25d55ad283aa400af464c76d713c07ad', '0964253785', 'Trần Thị Bé', '46, Nguyễn Công Trứ, Quận Bình Thạnh, TP HCM', NULL),
('hahaha14', 'KH0007', '4a54b1a620bf8cd997ba344e97e2c19d', '0937561497', 'Phan Ngọc Diễm Phương', '90, Quốc Lộ 22, Huyện Củ Chi, TP HCM', NULL),
('hoangchuong0602', 'KH0003', 'e050e3201140836a441e69c9740cc38b', '0705189519', 'Văn Hoàng Chương', '137/12, Lê Đình Cẩn, Quận Bình Tân, TP HCM', NULL),
('luuthanhdat', 'KH0002', '37a445bb45bf09d61c470b10b043260a', '0742951748', 'Lưu Thành Đạt', '27, Cách Mạng Tháng Tám, Quận Tân Bình, TP HCM', NULL),
('lyly2003', 'KH0005', 'ff238ea842489bfc987aa0bd4847db54', '0902185491', 'Lê Thị Ly Ly', '23, Bà Điểm, Huyện Hóc Môn, TP HCM', NULL),
('lynhathao', 'KH0001', '04ad8d3a37ab114c3eac9ce1fd4ed097', '0704278512', 'Lý Nhật Hào', '123/12, Quốc Lộ 50, Huyện Bình Chánh, TP HCM', NULL),
('nhocconcungdau', 'KH0010', '25d55ad283aa400af464c76d713c07ad', '0975534345', 'Lê Thị B', '47, Đào Duy Từ, Quận Phú Nhuận, TP HCM', NULL),
('thongocngaytho12', 'KH0006', '25d55ad283aa400af464c76d713c07ad', '0906412832', 'Trần Văn Ngọc', '72, Lê Hoàng Phái, Quận Gò Vấp, TP HCM', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`madonhang`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`maloaisp`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`taikhoan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
