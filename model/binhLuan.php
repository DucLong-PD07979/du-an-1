<?php
require_once 'pdo.php';
function binhLuan_insert($ma_sp, $ma_kh, $ngay_bl, $noi_dung)
{
    $sql = "INSERT INTO binhluan(ma_sp,noi_dung,ngay_bl,ma_tk) VALUES(?,?,?,?)";
    pdo_execute($sql, $ma_sp, $ma_kh, $ngay_bl,$noi_dung);
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
