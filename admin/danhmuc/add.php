<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
    }

    .row {
        box-sizing: border-box;
    }

    .formtitle {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 20px;
    }

    .formcontent {
        max-width: 100%;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .formcontent form {
        width: 50%;
        margin-left: 235px;
    }

    .formcontent .row {
        margin-bottom: 10px;
    }

    .formcontent input[type="text"] {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    .formcontent input[type="submit"],
    .formcontent input[type="reset"],
    .formcontent input[type="button"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .formcontent input[type="submit"]:hover,
    .formcontent input[type="reset"]:hover,
    .formcontent input[type="button"]:hover {
        background-color: #45a049;
    }
</style>

<body>
    <div class="row">
        <div class="row  formtitle">
            <H1>Thêm mới loại hàng hóa</H1>
        </div>
        <div class="row formcontent">
            <form action="index.php?act=adddm" method="post" enctype="multipart/form-data">
                <div class="row mb10">
                    <span hidden> Mã loại</span> <br>
                    <input type="text" name="maloai" disabled hidden>
                </div>
                <div class="row mb10">
                    Tên loại <br>
                    <input type="text" name="tenloai">

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
                <div class="row mb10 mt-3">
                    <input type="submit" name="themmoi" value="Thêm mới">
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
</body>

</html>