<?php
require_once 'pdo.php';
function khachHang_insert($ho_ten, $email, $mat_khau,  $vai_tro = 0)
{
    $sql = "INSERT INTO taikhoan(ho_ten,email,password,vai_tro) VALUES(?,?,?,?)";
    pdo_execute($sql, $ho_ten, $email, $mat_khau , $vai_tro);
}

function khachHang_update($ho_ten, $mat_khau, $email, $vai_tro, $ma_kh)
{
    $sql = "UPDATE taikhoan SET ho_ten=? , password=?, email=? , vai_tro=? WHERE ma_tk=?";
    pdo_execute($sql, $ho_ten, $mat_khau, $email, $vai_tro, $ma_kh);
}

function khachHang_delete($ma_kh)
{
    $sql = "DELETE FROM taikhoan WHERE ma_tk=?";
    if (is_array($ma_kh)) {
        foreach ($ma_kh as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_kh);
    }
}

function khachHang_select_all()
{
    $sql = "SELECT * FROM taikhoan";
    return pdo_query($sql);
}

function khachHang_select_by_id($ma_kh)
{
    $sql = "SELECT * FROM taikhoan WHERE ma_tk=?";
    return pdo_query_one($sql, $ma_kh);
}

function khachHang_exist($ma_kh)
{
    $sql = "SELECT count(*) FROM taikhoan WHERE ma_tk=?";
    return pdo_query_value($sql, $ma_kh) > 0;
}

function khachHang_change_password($ma_kh, $mat_khau2)
{
    $sql = "UPDATE taikhoan SET mat_khau=? WHERE ma_tk=?";
    pdo_execute($sql, $mat_khau2, $ma_kh);
}

function checkemail($email)
{
    $sql = "select * from taikhoan where email='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}