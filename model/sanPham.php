<?php
//thêm dm
function insert_sanpham($tensp, $giasp, $hinh, $mota, $giam_gia, $khuyen_mai_hd, $ma_dm)
{
    $sql = "INSERT INTO sanpham(name,gia,img,mota,iddm) VALUES('$tensp','$giasp','$hinh','$mota','$ma_dm')";
    pdo_execute($sql);
}
//Xóa dm
function delete_sanpham($id)
{
    $sql = "delete from sanpham where id=" . $id;
    pdo_execute($sql);
}
function loadall_sanpham_home()
{
    $sql = "select * from sanpham where 1 order by id desc limit 0,9";
    $listsanpham = pdo_query($sql);
    return  $listsanpham;
}

function loadall_sanpham($kyw = "", $iddm = 0)
{
    $sql = "select * from sanpham where 1";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm  ='" . $iddm . "'";
    }
    $sql .= " order by id desc"; // cách khoảng
    $listsanpham = pdo_query($sql);
    return  $listsanpham;
}
function load_ten_dm($iddm)
{
    if ($iddm > 0) {
        $sql = "select * from danhmuc where id=" . $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    } else {
        return "";
    }
}
function loadone_sanpham($id)
{
    $sql = "select * from sanpham where id=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_sanpham_cungloai($id, $iddm)
{
    $sql = "select * from sanpham where iddm=" . $iddm . " AND id <> " . $id;
    $listsanpham = pdo_query($sql);
    return  $listsanpham;
}
function update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh)
{
    if ($hinh != "")
        $sql = "UPDATE sanpham SET name='$tensp',gia = '$giasp',img = '$hinh',mota = '$mota',iddm = '$iddm' WHERE id='$id'";
    else
        $sql = "UPDATE sanpham SET name='$tensp',gia = '$giasp',mota = '$mota',iddm = '$iddm' WHERE id='$id'";

    pdo_execute($sql);
}
function capnhat_sanpham($ten_hh, $don_gia, $giam_gia, $con_hh, $newFilePath, $ngay_nhap, $mo_ta, $thong_tin_hh, $ma_loai, $id)
{
    if ($newFilePath != "") {
        $sql = "UPDATE hang_hoa SET ten_hh='$ten_hh', don_gia='$don_gia', giam_gia='$giam_gia', con_hh='$con_hh', hinh='$newFilePath' , ngay_nhap='$ngay_nhap', mo_ta='$mo_ta',thong_tin_hh='$thong_tin_hh',ma_loai='$ma_loai' WHERE ma_hh= '$id'";
    } else {
        $sql = "UPDATE hang_hoa SET ten_hh='$ten_hh', don_gia='$don_gia', giam_gia='$giam_gia', con_hh='$con_hh',ngay_nhap='$ngay_nhap', mo_ta='$mo_ta',thong_tin_hh='$thong_tin_hh',ma_loai='$ma_loai' WHERE ma_hh= '$id'";
    }
    pdo_execute($sql);
}
