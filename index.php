<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../dist/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,400;0,6..12,500;0,6..12,600;1,6..12,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>

<body>
    <?php
    include 'global.php';
    include 'model/pdo.php';
    include 'model/binhLuan.php';
    include 'model/danhMuc.php';
    include 'model/donHang.php';
    include 'model/sanPham.php';
    include 'model/user.php';

    $page = null;
    if (isset($_GET['page']) && $_GET['page'] !== '') {
        $page = $_GET['page'];
    }

    if(pdo_get_connection()){
        echo 'kết nối dữ liệu thành công!';
    } else {
        echo 'kết nối dữ liệu thách bại!';
    }

    ?>
    <?php checkPageFullLayout($page) ?  include_once './view/partials/header.php' : '' ?>
    <div class="body-wrapp">
        <?php
        switch ($page) {
            case "register":
                include './view/register.php';
                break;
            case "login":
                include './view/login.php';
                break;
            case "checkout":
                include './view/checkout.php';
                break;
            case "product-details":
                if(isset($_GET['ma_sp'])){
                    $masp = $_GET['ma_sp'];
                    update_luotxem_sanpham($masp);
                    $product = loadone_sanpham($masp);  
                    extract($product);
                    $list_sp_cungLoai = load_sanpham_cungloai($ma_sp,$ma_dm);
                    $list_products_viewed = load_sanpham_daxem();
                }
                include './view/product-details.php';
                break;
            case "cart":
                include './view/cart.php';
                break;
            default:
                $list_danhmuc = danhMuc_select_all();
                // var_dump($list_danhmuc); hiện thị
                $list_spkmhd= load_sanpham_discount_good();
                //   var_dump($list_spkmhd);
                $list_raucu=load_sanpham_vegetable();
                //  var_dump($list_raucu);
                $list_traicay=load_sanpham_fruit();
                // var_dump($list_traicay);
                
                include './view/home.php';
        }
        ?>
    </div>
    <?php checkPageFullLayout($page) ? include_once './view/partials/footer.php' : ''; ?>
    <script src="./assets/js/main/main.js"></script>
</body>

</html>