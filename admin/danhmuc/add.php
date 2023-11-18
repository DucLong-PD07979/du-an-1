<div class="">
            <div class="row frmtitle"><h1>THÊM MỚI LOẠI HÀNG HÓA</h1></div>
        </div>
        <div class="row frmcontent">
            <div class="container">
            <form action="index.php?act=adddm" method="post"enctype="multipart/form-data"> 
                <div class=" mb">
                <label for="">Mã loại:</label><br>
                <div class="form-group">
                <input type="text" name="maloai" disabled class="form-control">
                </div>
                </div>
                <div class=" mb">
                <label for="">Tên loại</label><br>
                <div class="form-group">
                <input type="text" name="tenloai" id="" class="form-control">
                </div>
                
                <div class=" mb">
                <label for="">Hình ảnh</label><br>
                <div class="form-group">
                <input type="file" name="hinh" id="">
                </div>
                </div>
                <div class=" mb">
                    <input type="submit" name="themmoi" value="Thêm mới">
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