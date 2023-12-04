<?php
//thêm sp
function insert_sanpham($tensp, $url_hinh, $gia_tien, $mo_ta  = '',$giam_gia, $khuyen_mai_hd = 0, $ma_dm)
{
    $so_luot_xem = 0;
    $sql = "INSERT INTO sanpham(ten,url_hinh,gia_tien,mo_ta,giam_gia,khuyen_mai_hd,ma_dm,so_luot_xem) VALUES(?,?,?,?,?,?,?,?)";

//     INSERT INTO sanpham (ten, url_hinh, gia_tien, mo_ta, so_luot_xem,giam_gia,khuyen_mai_hd, ma_dm) VALUES
// ('Sản phẩm 1', 'url_hinh_1.jpg', 100000, 'Mô tả sản phẩm 1',11,10,1, 1);

    pdo_execute($sql, $tensp, $url_hinh, $gia_tien, $mo_ta, $giam_gia, $khuyen_mai_hd, $ma_dm, $so_luot_xem);
}

// sửa sp
function update_sanpham($ma_sp, $tensp, $url_hinh, $gia_tien, $mo_ta, $giam_gia, $khuyen_mai_hd, $ma_dm)
{
    if ($url_hinh != "")
        $sql = "UPDATE sanpham SET ten='$tensp',gia_tien = '$gia_tien',url_hinh = '$url_hinh',mo_ta = '$mo_ta',
        giam_gia= '$giam_gia',khuyen_mai_hd='$khuyen_mai_hd', ma_dm = '$ma_dm' WHERE ma_sp='$ma_sp'";
    else
        $sql = "UPDATE sanpham SET ten='$tensp',gia_tien = '$gia_tien',mo_ta = '$mo_ta',giam_gia='$giam_gia',
        khuyen_mai_hd='$khuyen_mai_hd', ma_dm = '$ma_dm' WHERE ma_sp='$ma_sp'";

    pdo_execute($sql);
}

//Xóa sp
function delete_sanpham($ma_sp)
{
    $sql = "DELETE from sanpham where ma_sp =?";
    pdo_execute($sql, $ma_sp);
}

// load sản phẩm khuyến mãi hấp dẫn
function load_sanpham_discount_good()
{
    $sql = "SELECT * from sanpham where khuyen_mai_hd = 1 AND giam_gia > 0 order by ma_sp asc  limit 0,9";
    $listSanPham_KhuyenMai = pdo_query($sql);
    return  $listSanPham_KhuyenMai;
}

// load sản phẩm danh mục rau củ
function load_sanpham_vegetable()
{
    $sql = "SELECT * from sanpham where ma_dm = 11 order by ma_sp asc limit 0,9";
    $listSanPham_vegetable = pdo_query($sql);
    return  $listSanPham_vegetable;
}

// load sản phẩm danh mục trái cây
function load_sanpham_fruit(){
    $sql = "SELECT * from sanpham where ma_dm = 12 order by ma_sp asc limit 0,9";
    $listSanPham_fruit = pdo_query($sql);
    return  $listSanPham_fruit;
}

// load sản phẩm danh mục nước ép
function load_sanpham_juice()
{
    $sql = "SELECT * from sanpham where ma_dm = 14 order by ma_sp asc limit 0,9";
    $listSanPham_juice = pdo_query($sql);
    return  $listSanPham_juice;
}

// load sản phẩm danh mục salad
function load_sanpham_salad()
{
    $sql = "SELECT * from sanpham where ma_dm = 15 order by ma_sp asc limit 0,9";
    $listSanPham_salad = pdo_query($sql);
    return  $listSanPham_salad;
}

// load sản phẩm danh mục ngẫu nhiên
function load_sanpham_random()
{
    $sql = "SELECT * from sanpham order by ma_sp asc limit 0,4";
    $listSanPham_random = pdo_query($sql);
    return  $listSanPham_random;
}


// desc ==> giảm dần

function loadall_sanpham($kyw = "", $ma_dm = 0)
{
    $sql = "SELECT * from sanpham where 1";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($ma_dm > 0) {
        $sql .= " and ma_dm  ='" . $ma_dm . "'";
    }
    $sql .= " order by ma_sp desc"; // cách khoảng
    $listsanpham = pdo_query($sql);
    return  $listsanpham;
}

function loadone_sanpham($ma_sp)
{
    $sql = "SELECT * from sanpham where ma_sp=" . $ma_sp;
    $sp = pdo_query_one($sql);
    return $sp;
}

function load_sanpham_cungloai($ma_sp, $ma_dm)
{
    $sql = "SELECT * from sanpham where ma_dm=" . $ma_dm . " AND ma_sp <> " . $ma_sp;
    $listsanpham = pdo_query($sql);
    return  $listsanpham;   
}

function update_luotxem_sanpham($ma_sp){
    
    $sql = "UPDATE sanpham SET so_luot_xem = so_luot_xem + 1 WHERE  ma_sp = '$ma_sp'";
    $listsanpham = pdo_query($sql);
    return  $listsanpham;   
}

function load_sanpham_daxem(){
    
    $sql = "SELECT * from sanpham where so_luot_xem  > 0 order by ma_sp asc limit 0,9";
    $listsanpham = pdo_query($sql);
    return  $listsanpham;   
}

?>