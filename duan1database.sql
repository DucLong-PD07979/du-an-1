CREATE DATABASE duan1;

CREATE TABLE danhmuc (
  ma_dm INT AUTO_INCREMENT PRIMARY KEY,
  ten VARCHAR(250) NOT NULL,
  url_hinh VARCHAR(250),
  noi_bat TINYINT(1)
);

INSERT INTO danhmuc (ten, url_hinh, noi_bat) VALUES
('Danh mục 1', 'url_hinh_1.jpg', 1),
('Danh mục 2', 'url_hinh_2.jpg', 0),
('Danh mục 3', 'url_hinh_3.jpg', 1),
('Danh mục 4', 'url_hinh_4.jpg', 0),
('Danh mục 5', 'url_hinh_5.jpg', 1);1

CREATE TABLE `danhmuc` (
  `ma_dm` int(11) AUTO_INCREMENT PRIMARY KEY,
  `ten` varchar(250) NOT NULL,
  `url_hinh` varchar(250) DEFAULT NULL,
  `noi_bat` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`ma_dm`, `ten`, `url_hinh`, `noi_bat`) VALUES
(11, 'Rau Củ', 'Raucu.jpg', 1),
(12, 'Trái Cây', 'traicay.jpg', 1),
(13, 'Đồ Khô', 'dokho.jpg', 1),
(14, 'Nước Ép', 'nuocep.jpg', 1),
(15, 'Salad', 'salad.jpg', 1),
(16, 'Thực phẩm khác', 'thucphamkhac.jpg', 1),
(17, 'Thực phẩm xanh', 'thucphamkhac.jpg', 1);


CREATE TABLE `sanpham` (
  `ma_sp` int(11) AUTO_INCREMENT PRIMARY KEY,
  `ten` varchar(250) NOT NULL,
  `url_hinh` varchar(250) DEFAULT NULL,
  `gia_tien` decimal(10,3) DEFAULT NULL,
  `mo_ta` text DEFAULT NULL,
  `so_luot_xem` int(11) DEFAULT NULL,
  `giam_gia` int(3) DEFAULT NULL,
  `Khuyen_mai_hd` int(1) DEFAULT NULL,
  `ma_dm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`ma_sp`, `ten`, `url_hinh`, `gia_tien`, `mo_ta`, `so_luot_xem`, `giam_gia`, `Khuyen_mai_hd`, `ma_dm`) VALUES
(6, 'Kim Chi', 'kimchi.jpg', 20.000, 'Rất ngon', 1, 11, 1, 17),
(7, 'Rong Biển', 'rongbien.jpg', 25.000, 'hdhdhdhdhd', 1, 10, 1, 13),
(8, 'Xa lách xoong Đà Lạt', 'xa-lach-xoong-da-lat-300g-202304070914101670.jpg', 9.000, 'gygygyuiiho', 2, 10, 1, 11),
(9, 'Bột mì gia dụng Mezin', 'botmi.jpg', 20.000, 'jdhbvbjhr', 1, 10, 1, 16),
(10, 'Xa lách búp mỡ', 'xalach (1).jpg', 15.000, 'njfdjfnjkfdkj', 1, 11, 1, 11),
(11, 'Rau dền đỏ', 'rauden.jpg', 20.000, 'njjnjnjn', 0, 11, 1, 11),
(12, 'Rau muống', 'xalach.jpg', 17.000, '', 2, 10, 1, 11),
(13, 'Rau cải thìa', 'caithia.jpg', 17.000, '', 0, 0, 1, 11),
(14, 'Xoài Đài Loan', 'xoai.jpg', 15.000, '', 0, 0, 0, 12),
(15, 'Dưa lưới Huỳnh Long', 'Dualuoi.jpg', 25.000, '', 0, 10, 0, 12),
(16, 'Chuối cau nải', 'chuoi.jpg', 30.000, '', 0, 11, 0, 12),
(17, 'Bưởi da xanh', 'buoi.jpg', 20.000, '', 0, 0, 0, 12),
(18, 'Táo Gala mini', 'tao.jpg', 40.000, '', 0, 10, 0, 12);

CREATE TABLE sanpham (
  ma_sp INT AUTO_INCREMENT PRIMARY KEY,
  ten VARCHAR(250) NOT NULL,
  url_hinh VARCHAR(250),
  gia_tien DECIMAL(10,2),
  mo_ta TEXT,
  so_luot_xem INT,
  giam_gia int(3),
  Khuyen_mai_hd int(1),
  ma_dm INT,
  FOREIGN KEY (ma_dm) REFERENCES danhmuc(ma_dm)
);

INSERT INTO sanpham (ten, url_hinh, gia_tien, mo_ta, so_luot_xem,giam_gia,khuyen_mai_hd, ma_dm) VALUES
('Sản phẩm 1', 'url_hinh_1.jpg', 100.50, 'Mô tả sản phẩm 1',11,1, 50, 1),
('Sản phẩm 2', 'url_hinh_2.jpg', 75.25, 'Mô tả sản phẩm 2',12,1, 30, 2),
('Sản phẩm 3', 'url_hinh_3.jpg', 150.00, 'Mô tả sản phẩm 3',13,1, 80, 1),
('Sản phẩm 4', 'url_hinh_4.jpg', 199.99, 'Mô tả sản phẩm 4',14,1, 60, 3),
('Sản phẩm 5', 'url_hinh_5.jpg', 89.95, 'Mô tả sản phẩm 5',11,1, 45, 2);

INSERT INTO sanpham (ten, url_hinh, gia_tien, mo_ta,giam_gia,khuyen_mai_hd, ma_dm) VALUES
('Sản phẩm 1', 'url_hinh_1.jpg', 100000, 'Mô tả sản phẩm 1','10','1','1');

CREATE TABLE taikhoan (
  ma_tk INT AUTO_INCREMENT PRIMARY KEY,
  ho_ten VARCHAR(250),
  email VARCHAR(250),
  password VARCHAR(250),
  vai_tro TINYINT(1)
);

CREATE TABLE `taikhoan` (
  `ma_tk` int(11) NOT NULL,
  `ho_ten` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `vai_tro` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO taikhoan (ho_ten, email, password, vai_tro) VALUES
('longnguyen', 'longnguyen@gmail.com', 'admin123', 1),
('vanteo', 'vanteo@gmail.com', 'vanteo', 0);

CREATE TABLE binhluan (
  ma_bl INT AUTO_INCREMENT PRIMARY KEY,
  noi_dung TEXT,
  ngay_bl DATE,
  ma_sp INT,
  ma_tk INT,
  FOREIGN KEY (ma_sp) REFERENCES sanpham(ma_sp),
  FOREIGN KEY (ma_tk) REFERENCES taikhoan(ma_tk)
);



INSERT INTO binhluan (noi_dung, ngay_bl, ma_sp, ma_tk) VALUES
('Bình luận 1', '2023-11-12', 1, 1),
('Bình luận 2', '2023-11-12', 2, 2),
('Bình luận 3', '2023-11-12', 1, 3),
('Bình luận 4', '2023-11-12', 3, 4),
('Bình luận 5', '2023-11-12', 2, 5);

CREATE TABLE hoadon (
  ma_hd VARCHAR(10) PRIMARY KEY,
  ngay_mua DATE,
  ho_ten VARCHAR(250),
  email VARCHAR(250),
  tong_tien DECIMAL(10,2),
  so_dien_thoai varchar(11),
  dia_chi_nhan VARCHAR(250),
  ma_tk INT,
  FOREIGN KEY (ma_tk) REFERENCES taikhoan(ma_tk)
);

INSERT INTO hoadon (ma_hd, ngay_mua, ho_ten, email, tong_tien, so_dien_thoai, dia_chi_nhan, ma_tk) VALUES
('HD001', '2023-11-12', 'Khách hàng 1', 'customer1@example.com', 150.00, 1234567890, 'Địa chỉ 1', 1),
('HD002', '2023-11-13', 'Khách hàng 2', 'customer2@example.com', 75.50, 9876543210, 'Địa chỉ 2', 2),
('HD003', '2023-11-14', 'Khách hàng 3', 'customer3@example.com', 200.25, 5555555555, 'Địa chỉ 3', 3),
('HD004', '2023-11-15', 'Khách hàng 4', 'customer4@example.com', 100.00, 1111111111, 'Địa chỉ 4', 4),
('HD005', '2023-11-16', 'Khách hàng 5', 'customer5@example.com', 125.75, 9999999999, 'Địa chỉ 5', 5);

CREATE TABLE hoadonchitiet (
  ma_hdct INT AUTO_INCREMENT PRIMARY KEY,
  ma_hd VARCHAR(10),
  ma_sp INT(11),
  so_luong INT,
  tong_tien DECIMAL(10,2),
  FOREIGN KEY (ma_hd) REFERENCES hoadon(ma_hd),
  FOREIGN KEY (ma_sp) REFERENCES sanpham(ma_sp)
);
