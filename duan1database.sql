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
('Danh mục 5', 'url_hinh_5.jpg', 1);


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


CREATE TABLE taikhoan (
  ma_tk INT AUTO_INCREMENT PRIMARY KEY,
  ho_ten VARCHAR(250),
  email VARCHAR(250),
  password VARCHAR(250),
  vai_tro TINYINT(1)
);

INSERT INTO taikhoan (ho_ten, email, password, vai_tro) VALUES
('Người dùng 1', 'user1@example.com', 'hashed_password_1', 1),
('Người dùng 2', 'user2@example.com', 'hashed_password_2', 0),
('Người dùng 3', 'user3@example.com', 'hashed_password_3', 1),
('Người dùng 4', 'user4@example.com', 'hashed_password_4', 0),
('Người dùng 5', 'user5@example.com', 'hashed_password_5', 1);

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
  ma_sp INT(10),
  so_luong INT,
  tong_tien DECIMAL(10,2),
  FOREIGN KEY (ma_hd) REFERENCES hoadon(ma_hd),
  FOREIGN KEY (ma_sp) REFERENCES sanpham(ma_sp)
);
