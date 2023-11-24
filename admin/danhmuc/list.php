<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .row {
        width: 100%;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .formtitle {
        background-color: #333;
        color: #fff;
        padding: 10px;
    }

    .formcontent {
        margin-top: 20px;
        background-color: #fff;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .mb10 {
        margin-bottom: 10px;
    }

    .formds table {
        width: 100%;
        border-collapse: collapse;
    }

    .formds th,
    .formds td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .formds th {
        background-color: #333;
        color: #fff;
    }

    .formds tr:hover {
        background-color: #f5f5f5;
    }

    .formds input[type="button"] {
        padding: 10px;
        background-color: #4caf50;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    .formds input[type="checkbox"] {
        margin-right: 5px;
    }

    .formds a {
        text-decoration: none;
        color: #333;
    }

    .formds input[type="button"]:hover {
        background-color: #45a049;
    }

    /* Add some spacing for better readability */
    .formcontent>div {
        margin-bottom: 20px;
    }
</style>

<body>

    <div class="row  formtitle">
        <H1>Danh sách loại hàng hóa</H1>
    </div>
    <div class="row formcontent">

        <div class="row mb10 formds">

            <table>
                <tr>

                    <th></th>
                    <th>Mã loại</th>
                    <th>Tên loại</th>
                    <th> </th>

                </tr>
                <?php
                if (isset($listdanhmuc) && is_array($listdanhmuc)) {
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        $suadm = "index.php?act=suadm&ma_dm=" . $ma_dm;
                        $xoadm = "index.php?act=xoadm&ma_dm=" . $ma_dm;
                        echo '
                        <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>' . $ma_dm . '</td>
                        <td>' . $ten . '</td>
                        <td><a href="' . $suadm . '"><input type="button"value="sua"> </a> <a href ="' . $xoadm . '"><input type="button"value="xoa" ></a></td>
                    </tr>';
                    }
                }

                ?>

            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">

            <a href="index.php?act=adddm"> <input type="button" value="Thêm mới"></a>
        </div>

    </div>
    </div>
</body>

</html>