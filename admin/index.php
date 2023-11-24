<?php
include '../global.php';
include "../model/pdo.php";
include "../model/danhMuc.php";
include "../model/sanPham.php";
include "../model/user.php";
include "../model/binhLuan.php";
include "header.php";
//controller

// if (isset($_GET['act'])) {
//     $act = $_GET['act'];
//     switch ($act) {
//         case 'adddm':
//             // kiểm tra xem người dùng có click nào nút add không 
//             // $thongbao = ""; // Initialize the variable
//             if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
//                 $tenloai = $_POST['tenloai'];
//                 danhMuc_insert($tenloai,$a,$s);
//                 $thongbao = "Thêm thành công";
//             }

//             include "danhmuc/add.php";
//             break;
//         case 'lisdm':
//             $listdanhmuc = danhMuc_select_all();
//             include "danhmuc/list.php";
//             break;

//         case 'xoadm':
//             if ($_GET['id'] && $_GET['id'] > 0) {
//                 danhMuc_delete($_GET['id']);
//             }
//             $listdanhmuc = danhMuc_select_all();
//             include "danhmuc/list.php";
//             break;

//         case 'suadm':
//             if ($_GET['id'] && $_GET['id'] > 0) {


//                 $dm = danhMuc_select_by_id($_GET['id']);
//             }
//             include "danhmuc/update.php";
//             break;

//         case 'updatedm':

//             if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
//                 $tenloai = $_POST['tenloai'];
//                 $id = $_POST['id'];
//                 // danhMuc_update($id, $tenloai);

//                 $thongbao = "Cập Nhật thành công";
//             }
//             $listdanhmuc = danhMuc_select_all();

//             include "danhmuc/list.php";
//             break;
//             /*hàng hoá */

//         case 'addsp':
//             // kiểm tra xem người dùng có click nào nút add không 
//             // $thongbao = ""; // Initialize the variable
//             if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
//                 $iddm = $_POST['iddm'];
//                 $tensp = $_POST['tensp'];
//                 $giasp = $_POST['giasp'];
//                 $mota = $_POST['mota'];
//                 $hinh = $_FILES['hinh']['name'];

//                 if (isset($_FILES['hinh']) && $_FILES['hinh']['error'] === UPLOAD_ERR_OK) {
//                     $image = $_FILES['hinh']['name'];
//                     $image_tmp = $_FILES['hinh']['tmp_name'];

//                     $target_directory = "../upload"; // Đường dẫn đến thư mục mục tiêu

//                     if (!is_dir($target_directory)) {
//                         mkdir($target_directory, 0777, true); // Tạo thư mục và tạo các thư mục cha nếu chưa tồn tại
//                     }

//                     move_uploaded_file($image_tmp, $target_directory . "/" . $image);
//                 } else {
//                     echo "Vui lòng chọn một tệp hình ảnh để tải lên.";
//                 }

//                 insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
//                 $thongbao = "Thêm thành công";
//             }
//             $listdanhmuc = danhMuc_select_all();

//             include "sanpham/add.php";
//             break;
//         case 'listsp':
//             if (isset($_POST['listok']) && ($_POST['listok'])) {
//                 $kyw = $_POST['kyw'];
//                 $iddm = $_POST['iddm'];
//             } else {
//                 $kyw = "";
//                 $iddm = 0;
//             }
//             $listdanhmuc = danhMuc_select_all();
//             $listsanpham = loadall_sanpham($kyw, $iddm);
//             include "sanpham/list.php";
//             break;

//         case 'xoasp':
//             if ($_GET['id'] && $_GET['id'] > 0) {
//                 delete_sanpham($_GET['id']);
//             }
//             $listsanpham = loadall_sanpham("", 0);
//             include "sanpham/list.php";
//             break;

//         case 'suasp':
//             if ($_GET['id'] && $_GET['id'] > 0) {
//                 $sanpham = loadone_sanpham($_GET['id']);
//             }
//             // $listsanpham = loadall_sanpham("",0);
//             $listdanhmuc = danhMuc_select_all();

//             include "sanpham/update.php";
//             break;

//         case 'updatesp':
//             if (isset($_POST["capnhat"]) && ($_POST["capnhat"])) {
//                 $id = $_POST['id'];
//                 $iddm = $_POST['iddm'];
//                 $giasp = $_POST['giasp'];

//                 $tensp = $_POST['tensp'];
//                 $mota = $_POST['mota'];
//                 $hinh = $_FILES['hinh']['name'];

//                 if (isset($_FILES['hinh']) && $_FILES['hinh']['error'] === UPLOAD_ERR_OK) {
//                     $image = $_FILES['hinh']['name'];
//                     $image_tmp = $_FILES['hinh']['tmp_name'];

//                     $target_directory = "../upload"; // Đường dẫn đến thư mục mục tiêu

//                     move_uploaded_file($image_tmp, $target_directory . "/" . $image);
//                 } else {
//                     echo "Vui lòng chọn một tệp hình ảnh để tải lên.";
//                 }

//                 // insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);


//                 update_sanpham($id, $iddm, $tensp, $giasp, $mota, $hinh);

//                 var_dump($id, $iddm, $tensp, $giasp, $mota, $hinh);

//                 // include "sanpham/list.php";

//             }

//             // $thongbao= "Cập nhật thành công".
//             $listsanpham = loadall_sanpham("", 0);
//             $listdanhmuc = danhMuc_select_all();

//             include "sanpham/list.php";
//             break;

//             // if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
//             //    $id = $_POST['id'];
//             //    $iddm = $_POST['iddm'];
//             //    $tensp = $_POST['tensp'];
//             //    $giasp = $_POST['giasp'];
//             //    $mota = $_POST['mota'];
//             //    $hinh = $_FILES['hinh']['name'];
//             // //  insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);

//             //    // update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);

//             //    $thongbao = "Cập Nhật thành công";
//             //    var_dump($id,$iddm,$tensp,$giasp,$mota,$hinh) ;
//             //    // var_dump($_POST['capnhat']);
//             //    // update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);
//             //    // var_dump(    update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh) );
//             //    update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);

//             // }

//             //  $listsanpham = loadall_sanpham("",0);
//             //  $listdanhmuc = loadall_danhmuc();

//             // include "sanpham/list.php";
//             // // include "sanpham/update.php";

//         case 'dskh':

//             $listtaikhoan = loadall_taikhoan();
//             include "taikhoan/list.php";
//             break;
//         case 'dsbl':
//             $listbinhluan = loadall_binhluan(0);
//             include "binhluan/list.php";
//             break;

//         case 'xoabl':
//             if ($_GET['id'] && $_GET['id'] > 0) {
//                 delete_binh_luan($_GET['id']);
//             }
//             $listbinhluan = loadall_binhluan(0);

//             include "binhluan/list.php";
//             break;
//         case 'thongke':
//             $listthongke = loadall_thongke();


//             include "thongke/list.php";
//             break;
//         case 'bieudo':
//             $listthongke = loadall_thongke();

//             include "thongke/bieudo.php";
//             break;
//         case 'listbill':
//             if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
//                 $kyw = $_POST['kyw'];
//             } else {
//                 $kyw = "";
//             }
//             $listbill = loadall_bill($kyw, 0);
//             include "bill/listbill.php";
//             break;
//         case 'xoabill':
//             if ($_GET['id'] && $_GET['id'] > 0) {
//                 delete_bill($_GET['id']);
//             }
//         default:
//             include "home.php";
//             break;
//     }
// } else {
//     include "home.php";
// }

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            // kiểm tra xem người dùng có click nào nút add không 
            // $thongbao = ""; // Initialize the variable
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                $url_hinh = save_file('hinh_dm', '../upload/');
                $noi_bat = $_POST['dm_noibat'];
                danhMuc_insert($tenloai, $url_hinh, $noi_bat);
                $thongbao = "Thêm thành công";
            }

            include "danhmuc/add.php";
            break;
        case 'lisdm':
            $listdanhmuc = danhMuc_select_all();
            include "danhmuc/list.php";
            break;

        case 'xoadm':
            if ($_GET['ma_dm'] && $_GET['ma_dm'] > 0) {
                danhMuc_delete($_GET['ma_dm']);
            }
            $listdanhmuc = danhMuc_select_all();
            include "danhmuc/list.php";
            break;

        case 'suadm':
            if ($_GET['ma_dm'] && $_GET['ma_dm'] > 0) {
                $dm = danhMuc_select_by_id($_GET['ma_dm']);
            }
            include "danhmuc/update.php";
            break;

        case 'updatedm':

            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $ma_loai = $_POST['ma_dm'];
                $url_hinh = save_file('hinh_dm', '../upload/');
                $noi_bat = $_POST['dm_noibat'];
                danhMuc_update($tenloai, $url_hinh, $noi_bat, $ma_loai,);

                $thongbao = "Cập Nhật thành công";
            }
            $listdanhmuc = danhMuc_select_all();

            include "danhmuc/list.php";
            break;
            /*hàng hoá */

        case 'addsp':
            // kiểm tra xem người dùng có click nào nút add không 
            // $thongbao = ""; // Initialize the variable
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];

                if (isset($_FILES['hinh']) && $_FILES['hinh']['error'] === UPLOAD_ERR_OK) {
                    $image = $_FILES['hinh']['name'];
                    $image_tmp = $_FILES['hinh']['tmp_name'];

                    $target_directory = "../upload"; // Đường dẫn đến thư mục mục tiêu

                    if (!is_dir($target_directory)) {
                        mkdir($target_directory, 0777, true); // Tạo thư mục và tạo các thư mục cha nếu chưa tồn tại
                    }

                    move_uploaded_file($image_tmp, $target_directory . "/" . $image);
                } else {
                    echo "Vui lòng chọn một tệp hình ảnh để tải lên.";
                }

                // insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = danhMuc_select_all();

            include "sanpham/add.php";
            break;
        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = "";
                $iddm = 0;
            }
            $listdanhmuc = danhMuc_select_all();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include "sanpham/list.php";
            break;

        case 'xoasp':
            if ($_GET['id'] && $_GET['id'] > 0) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;

        case 'suasp':
            if ($_GET['id'] && $_GET['id'] > 0) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            // $listsanpham = loadall_sanpham("",0);
            $listdanhmuc = danhMuc_select_all();

            include "sanpham/update.php";
            break;

            // $thongbao= "Cập nhật thành công".
            $listsanpham = loadall_sanpham("", 0);
            $listdanhmuc = danhMuc_select_all();

            include "sanpham/list.php";
            break;


        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
