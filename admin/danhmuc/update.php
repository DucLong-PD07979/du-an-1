<?php

if (is_array($dm)) {
    extract($dm);
}
?>

<div class="row">
    <div class="row  formtitle">
        <H1>Cập nhập loại hàng mới</H1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatedm" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                Mã loại <br>
                <input type="text" name="maloai" disabled>
            </div>
            <div class="row mb10">
                Tên loại <br>
                <input type="text" name="tenloai" value="<?php if (isset($ten) && ($ten != "")) echo $ten; ?>">

            </div>
            <div class="row mb10">
                Hình <br>
                <input type="file" name="hinh_dm">
            </div>
            <div class="mb-3">
                <label for="dac_biet" class="form-label">hàng nổi bật</label> <br>
                <select class="form-select" name="dm_noibat" aria-label="Default select example">
                    <option value="0">false</option>
                    <option value="1">true</option>
                </select>
            </div>
            <div class="row mb10">
                <input type="" name="ma_dm" value="<?php if (isset($ma_dm) && ($ma_dm > 0)) echo $ma_dm; ?>">
                <input type="submit" name="capnhat" value="Cập nhật">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=lisdm"> <input type="button" value="Danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;

            ?>
        </form>

    </div>
</div>
</div>