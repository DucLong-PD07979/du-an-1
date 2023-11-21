

<?php
require_once 'pdo.php';

function danhMuc_insert($ten_loai, $url_hinh, $noi_bat)
{
    $sql = "INSERT INTO danhmuc(ten,url_hinh,noi_bat) VALUES(?,?,?)";
    pdo_execute($sql, $ten_loai, $url_hinh, $noi_bat);
}

function danhMuc_update($ma_loai, $ten_loai, $url_hinh, $noi_bat)
{
    $sql = "UPDATE danhmuc SET ten=?, url_hinh=?, noi_bat=? WHERE ma_dm=?";
    pdo_execute($sql, $ten_loai, $url_hinh, $noi_bat, $ma_loai);
}

function danhMuc_delete($ma_loai)
{
    $sql = "DELETE FROM danhmuc WHERE ma_dm=?";
    if (is_array($ma_loai)) {
        foreach ($ma_loai as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_loai);
    }
}

function danhMuc_select_all()
{
    $sql = "SELECT * FROM danhmuc";
    return pdo_query($sql);
}

function danhMuc_select_by_id($ma_loai)
{
    $sql = "SELECT * FROM danhmuc WHERE ma_dm=?";
    return pdo_query_one($sql, $ma_loai);
}

function danhMuc_exist($ma_loai)
{
    $sql = "SELECT count(*) FROM danhmuc WHERE ma_dm=?";
    return pdo_query_value($sql, $ma_loai) > 0;
}
?>