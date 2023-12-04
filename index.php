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
    ob_start();
    include 'global.php';
    include 'model/pdo.php';
    include 'model/binhLuan.php';
    include 'model/danhMuc.php';
    include 'model/donHang.php';
    include 'model/sanPham.php';
    include 'model/user.php';

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $page = null;
    if (isset($_GET['page']) && $_GET['page'] !== '') {
        $page = $_GET['page'];
    }

    // if (pdo_get_connection()) {
    //     echo 'kết nối dữ liệu thành công!';
    // } else {
    //     echo 'kết nối dữ liệu thách bại!';
    // }

    ?>
    <?php checkPageFullLayout($page) ?  include_once './view/partials/header.php' : '' ?>
    <div class="body-wrapp">
        <?php
        switch ($page) {
            case "register":
                if (isset($_POST['register'])) {
                    $hoTen = $_POST['ho_ten'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    if (!empty($hoTen) && !empty($email) && !empty($password)) {
                        khachHang_insert($hoTen, $email, $password);
                        $message = 'bạn đã đăng ký thành công!vui lòng đăng nhập';
                    }
                }
                include './view/register.php';
                break;
            case "login":
                if (isset($_POST['login'])) {
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $accountLogin = checkemail($email);
                    if (is_array($accountLogin)) {
                        $_SESSION['userAccount'] = $accountLogin;
                        if (isset($_SESSION['userAccount'])) {
                            header('Location: index.php');
                        }
                    } else {
                        $message = "tài khoản không tồn tại";
                    }
                }
                include './view/login.php';
                break;
            case "logout":
                unset($_SESSION['userAccount']);
                header('Location: index.php');
                break;
            case "checkout":
                $thongBao = '';
                if (isset($_POST['datHang'])) {
                    if (!isset($_SESSION['userAccount'])) {
                        header('Location: index.php?page=login');
                    }

                    if (sizeof($_SESSION['cart']) <= 0) {
                        echo 'bạn chưa có sản phẩm trong giỏ hang!';
                    } else {
                        $ho_ten = $_POST['ho_ten'];
                        $email = $_POST['email'];
                        $sodt = $_POST['phone'];
                        $diachi = $_POST['diachi'];
                        $tongTien = $_POST['tongTien'];
                        // Sử dụng hàm để tạo một ID ngẫu nhiên với độ dài 10 ký tự
                        $randomId = 'ABC' . generateRandomId(7);
                        $madh = $randomId;
                        $matk = $_SESSION['userAccount']['ma_tk'];
                        $currentDateTime = date("Y-m-d H:i:s");
                        donHang_insert($madh, $ho_ten, $matk, $email, $tongTien, $sodt, $diachi,$currentDateTime);
                        if (isset($_SESSION['cart'])) {
                            for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
                                extract($_SESSION['cart'][$i]);
                                donHang_chi_tiet_insert($madh, $masp, $sl, $tongTien);
                            }
                            $thongBao = 'Bạn đã đặt đơn hàng thành công!';
                        }
                        unset($_SESSION['cart']);
                    }
                }
                // var_dump($_SESSION['cart']);
                include './view/checkout.php';
                break;
            case "product-details":
                $lists_product_random = load_sanpham_random();

                if (isset($_GET['ma_sp'])) {
                    $masp = $_GET['ma_sp'];
                    update_luotxem_sanpham($masp);
                    $product = loadone_sanpham($masp);
                    extract($product);
                    $list_sp_cungLoai = load_sanpham_cungloai($ma_sp, $ma_dm);
                    $list_products_viewed = load_sanpham_daxem();

                    if (isset($_POST['addproduct'])) {
                        if (!$_SESSION['userAccount']) {
                            header('Location: index.php?page=login');
                        } else {
                            $tensp = $ten;
                            $hinh = $url_hinh;
                            $gia = $gia_tien;
                            $masp = $ma_sp;
                            $so_luong = $_POST['quantity'];
                            $tongTien = $so_luong * $gia;
                            $productItem = array('tensp' => $tensp, 'hinh' => $hinh, 'gia'
                            => $gia, 'tongTien' => $tongTien, 'masp' => $masp, 'sl' => $so_luong);

                            $cungViTri = trungSanPham($masp);
                            if (isset($cungViTri)) {
                                update_soLuong($cungViTri, $so_luong);
                            } else {
                                array_push($_SESSION['cart'], $productItem);
                            }
                            header('Location: index.php?page=cart');
                            // var_dump($_SESSION['cart']);
                        }
                    }

                    $binhLuanSp = binhLuan_select_with_masp($masp);
                    if(isset($_POST['binhluan']) && $_POST['content-bl'] != ''){
                        if (!$_SESSION['userAccount']) {
                            header('Location: index.php?page=login');
                        } else {
                            $noiDung = $_POST['content-bl'];
                            $masp = $ma_sp;
                            $matk = $_SESSION['userAccount']['ma_tk'];
                            $currentDateTime = date("Y-m-d H:i:s");
                            binhLuan_insert($noiDung,$currentDateTime,$masp,$matk);
                            unset($_POST['binhluan']);
                        }
                    }
                }
                include './view/product-details.php';
                break;
            case "cart":
                $cart = $_SESSION['cart'];
                if(isset($_GET['act']) && $_GET['act'] == 'xoa' && isset($_GET['ma_sp']) && $_GET['ma_sp'] > 0){
                    $masp = $_GET['ma_sp'];
                    for($i = 0; $i < sizeof($cart); $i++){
                        if($masp ==$cart[$i]['masp']){
                            array_splice($cart, $i, 1);
                            $_SESSION['cart'] = $cart;
                        }
                    }
                    header('location: index.php?page=cart');
                }
                include './view/cart.php';
                break;
            case "search":
                if(isset($_GET['keys'])){
                    $productSearched = loadall_sanpham($_GET['keys'],0);
                } else if(isset($_GET['madm'])){
                    $productSearched = loadall_sanpham('', $_GET['madm']);
                }
                include './view/search-products.php';
                break;
            default:
                if(isset($_POST['search-products'])){
                    header('location: index.php?page=search&keys='. $_POST['keys-filter'] .'');
                }
                $list_danhmuc = danhMuc_select_all();
                // var_dump($list_danhmuc); hiện thị
                $list_spkmhd = load_sanpham_discount_good();
                //   var_dump($list_spkmhd);
                $list_raucu = load_sanpham_vegetable();
                //  var_dump($list_raucu);
                $list_traicay = load_sanpham_fruit();
                // var_dump($list_traicay);
                // var_dump($_SESSION['userAccount']);
                // unset($_SESSION['cart']);
                include './view/home.php';
        }
        ?>
    </div>
    <?php checkPageFullLayout($page) ? include_once './view/partials/footer.php' : ''; ?>
    <?php ob_end_flush(); ?>
    <script src="./assets/js/main/main.js"></script>
</body>

</html>