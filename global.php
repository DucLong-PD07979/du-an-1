<?php
session_start();
$ROOT_URL = "/";
$ASSETS_URL = "$ROOT_URL/assets";
$ADMIN_URL = "$ROOT_URL/admin";
$SITE_URL = "$ROOT_URL/view";
$UPLOADED = "$ROOT_URL/upload";

// * Định nghĩa đường dẫn chứa ảnh sử dụng trong upload
$IMAGE_DIR = $_SERVER["DOCUMENT_ROOT"] . "$ROOT_URL/content/images/";
/*
* 2 biến toàn cục cần thiết để chia sẻ giữa controller và view
*/
$VIEW_NAME = "index.php";
$MESSAGE = '';

/**
 * Lưu file upload vào thư mục
 * @param string $fieldname là tên trường file
 * @param string $target_dir thư mục lưu file
 * @return tên file upload
 */
function save_file($fieldname, $target_dir)
{
    $file_uploaded = $_FILES[$fieldname];
    $file_name = basename($file_uploaded["name"]);
    $target_path = $target_dir . $file_name;
    move_uploaded_file($file_uploaded["tmp_name"], $target_path);
    return $file_name;
}

function exist_param($fieldname)
{
    return array_key_exists($fieldname, $_REQUEST);
}

function add_cookie($name, $value, $day)
{
    setcookie($name, $value, time() + (86400 * $day), "/");
}
/**
 * Xóa cookie
 * @param string $name là tên cookie
 */
function delete_cookie($name)
{
    add_cookie($name, '', -1);
}
/**
 * Đọc giá trị cookie
 * @param string $name là tên cookie
 * @return string giá trị của cookie
 */
function get_cookie($name)
{
    return $_COOKIE[$name] ?? '';
}

function check_login()
{
    global $SITE_URL;
    if (isset($_SESSION['user'])) {
        if ($_SESSION['user']['vai_tro'] == 'admin') {
            return;
        }
        if (strpos($_SERVER["REQUEST_URI"], '/admin/') == FALSE) {
            return;
        }
    }
    $_SESSION['REQUEST_URI'] = $_SERVER["REQUEST_URI"];
    header("location: $SITE_URL/tai_khoan/dang-nhap.php");
}

function checkPageFullLayout($pagePath)
{
    switch ($pagePath) {
        case 'checkout':
            return false;
        default:
            return true;
    }
}

function totalMoneybuyProducts()
{
    if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
        $totalMoney = 0;
        for ($i = 0; $i < sizeof($_SESSION['cart']); $i++) {
            $totalMoney = $totalMoney + $_SESSION['cart'][$i]['tongTien'];
        }
        return $totalMoney;
    }
}

function formatMoney($money, $decimalLength = 2, $unit = 'đ')
{
    // if(is_numeric($money) && strpos($money, '.') !== false){
    //     $decimalLength = 2;
    // }
    return number_format($money, $decimalLength, ',', '.') . $unit;
}

function generateRandomId($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomId = '';

    for ($i = 0; $i < $length; $i++) {
        $randomId .= $characters[rand(0, $charactersLength - 1)];
    }

    return $randomId;
}