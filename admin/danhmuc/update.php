<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="">
            <div class="row frmtitle"><h1>CẬP NHẬP LOẠI HÀNG HÓA</h1></div>
        </div>
        <div class="row frmcontent">
            <div class="container">
            <form action="index.php?act=updatedm" method="post">
                <div class=" mb">
                <label for="">Mã loại:</label><br>
                <div class="form-group">
                <input type="text" name="maloai" disabled class="form-control">
                </div>
                </div>
                <div class=" mb">
                <label for="">Tên loại</label><br>
                <div class="form-group">
                <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name ;?>" id="" class="form-control">
                </div>
                </div>
                <div class=" mb">
                    <input type="hidden" name="id" value= "<?php if(isset($id)&&($id>0)) echo $id ;?>" >
                    <input type="submit" name="capnhat" value="Cập nhật">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a>
                </div>
                <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;

                ?>
            </form>
            </div>
        </div>
    </div>