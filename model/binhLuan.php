<?php
require_once 'pdo.php';
function binhLuan_insert($noi_dung, $ngay_bl, $ma_sp, $ma_tk)
{
    $sql = "INSERT INTO binhluan(noi_dung,ngay_bl,ma_sp,ma_tk) VALUES(?,?,?,?)";
    pdo_execute($sql, $noi_dung, $ngay_bl, $ma_sp, $ma_tk);
}

function binhLuan_delete($ma_bl)
{
    $sql = "DELETE FROM binhluan WHERE ma_bl=?";
    if (is_array($ma_bl)) {
        foreach ($ma_bl as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_bl);
    }
}

function binhLuan_select_all()
{
    $sql = "SELECT * FROM binhluan";
    return pdo_query($sql);
}

function binhLuan_select_with_masp($ma_sp)
{
    $sql = "SELECT * FROM binhluan  WHERE ma_sp=?";
    return pdo_query($sql, $ma_sp);
}

