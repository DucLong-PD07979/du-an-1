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
                include './view/product-details.php';
                break;
            case "cart":
                include './view/cart.php';
                break;
            default:
                include './view/home.php';
        }
        ?>
    </div>
    <?php checkPageFullLayout($page) ? include_once './view/partials/footer.php' : ''; ?>
    <script src="./assets/js/main/main.js"></script>
</body>

</html>