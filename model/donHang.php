<?php
require_once 'pdo.php';
function donHang_insert($ma_dh, $ho_ten, $ma_tk, $email, $tong_tien, $so_dien_thoai, $dia_chi_nhan)
{

    $sql = "INSERT INTO hoadon(ma_hd,ho_ten,email,tong_tien,so_dien_thoai,dia_chi_nhan,ma_tk) VALUES(?,?,?,?,?,?,?)";
    pdo_execute($sql, $ma_dh, $ho_ten, $email, $tong_tien, $so_dien_thoai, $dia_chi_nhan, $ma_tk);
}

// function donHang_update($ma_loai, $ten_loai)
// {
//     $sql = "UPDATE hoadon SET ten_loai=? WHERE ma_tl=?";
//     pdo_execute($sql, $ten_loai, $ma_loai);
// }

function donHang_delete($ma_loai)
{
    $sql = "DELETE FROM hoadon WHERE ma_dh=?";
    if (is_array($ma_loai)) {
        foreach ($ma_loai as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_loai);
    }
}
function donHang_select_all()
{
    $sql = "SELECT * FROM hoadon";
    return pdo_query($sql);
}
function donHang_select_by_id($ma_loai)
{
    $sql = "SELECT * FROM hoadon WHERE ma_dh=?";
    return pdo_query_one($sql, $ma_loai);
}
function donHang_exist($ma_dh)
{
    $sql = "SELECT count(*) FROM hoadon WHERE dh_id=?";
    return pdo_query_value($sql, $ma_dh) > 0;
}

function donHang_chi_tiet_insert($ma_hd, $ma_sp, $so_luong, $tong_tien)
{
    $sql = "INSERT INTO hoadonchitiet(ma_hd,ma_sp,so_luong,tong_tien) VALUES(?,?,?,?)";
    pdo_execute($sql, $ma_hd, $ma_sp, $so_luong, $tong_tien);
}
