<?php

if (is_array($sanpham)) {
    extract($sanpham);
}
$tensp = $ten;
// $idm = $id;
$hinhpath = "../upload/" . $url_hinh;
if (is_file($hinhpath)) {
    $hinh = "<img src='../upload/" . $url_hinh . "' height='80'>";
} else {
    $hinh = "no photo";
}
?>

<div class="row">
    <div class="row  formtitle">
        <H1>Cập nhập sản phẩm mới</H1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                <select name="ma_dm" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        if ($ma_dm == $ma_dm) echo "<option value='" . $ma_dm . "' selected>" . $ten . "</option>";
                        else echo "<option value='" . $ma_dm . "'>" . $ten . "</option>";
                    }
                    ?>


                </select>

                <div class="row mb10">
                    Tên sản phẩm <br>
                    <input type="text" name="tensp" value="<?php echo $tensp ?>">

                </div>
                <div class="row mb10">
                    Giá <br>
                    <input type="text" name="giasp" value="<?php echo $gia_tien ?>">

                </div>
                <div class="row mb10">
                    giảm giá <br>
                    <input type="text" name="giam_gia" value="<?php echo $giam_gia ?>">
                </div>
                <div class="row mb10">
                    Khuyến mãi hấp dẫn <br>
                    <select class="form-select" name="khuyen_mai_hd" aria-label="Default select example">
                        <option value="0">false</option>
                        <option value="1">true</option>
                    </select>
                </div>
                <div class="row mb10">
                    Hình <br>
                    <input type="file" name="hinh">
                    <?php echo $hinh ?>

                </div>
                <div class="row mb10">
                    Mô tả <br>
                    <textarea name="mota" id="" cols="30" rows="10"><?php echo $mo_ta ?></textarea>

                </div>
                <div class="row mb10">
                    <input type="hidden" name="ma_sp" value="<?php echo $ma_sp ?>">
                    <input type="submit" name="capnhat" value="Cập nhật">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?act=listsp"> <input type="button" value="Danh sách"></a>
                </div>
                <?php
                if (isset($thongbao) && ($thongbao != "")) echo $thongbao;

                ?>
        </form>

    </div>
</div>
</div>