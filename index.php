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

    ?>
    <?php include_once './view/partials/header.php'; ?>
    <div class="body-wrapp">
        <?php
        switch ($page) {
            case "";

            default:
                // $page = 'trang-chu';
                include './view/home.php';
        }
        ?>
    </div>
    <?php include_once './view/partials/footer.php'; ?>
</body>

</html>