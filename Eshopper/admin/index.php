<?php
include "../model/pdo.php";
include "../model/danh_muc.php";
include "../model/san_pham.php";
include "../model/tai_khoan.php";
include "../model/binhluan.php";

include "header.php";
// controller
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            //Check nguoi dung co click vo nut submit ko
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                $tenloai = $_POST['tenloai'];
                insert_cat($tenloai);
                $thongbao = "Add Succesfull";
            }
            include "./danh_muc/adddm.php";
            break;
        case 'list':
            $listcat = loadall_cat();
            include "./danh_muc/list.php";
            break;
        // sửa
        case 'update':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $cat = loadone_cat($_GET['id']);
            }
            include "./danh_muc/update.php";
            break;
        // cập nhật
        case 'upcat':
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_cat($id, $tenloai);
                $thongbao = "Update Succesfully";
            }
            $listcat = loadall_cat();
            include "./danh_muc/list.php";
            break;
        //Xoa
        case 'delete':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_cat($_GET['id']);
            }

            $listcat = loadall_cat();
            include "./danh_muc/list.php";
            break;


        /*Controller products */
        case 'addpro':
            //Check nguoi dung co click vo nut submit ko
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                // $id_sanpham = $_POST['id_sanpham'];
                $ten_sanpham = $_POST['ten_sanpham'];
                $don_gia = $_POST['don_gia'];
                $mo_ta = $_POST['mo_ta'];
                $hinh = $_FILES['hinh']['name'];
                $ma_loai = $_POST['ma_loai'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);

                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                ;
                insert_pro($ten_sanpham, $ma_loai, $mo_ta, $don_gia, $hinh);
                $thongbao = "Add Succesfull";
            }
            $listcat = loadall_cat();
            include "./san_pham/addpro.php";
            break;
        case 'listpro':
            if (isset($_POST['search']) && ($_POST['search'])) {
                $keyword = $_POST['keyword'];
                $ma_loai = $_POST['ma_loai'];
            } else {
                $keyword = "";
                $ma_loai = 0;
            }
            $listcat = loadall_cat();
            $listpro = loadall_pro_cungloai($keyword, $ma_loai);
            include "./san_pham/listpro.php";
            break;
        case 'uppro':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $pro = loadone_pro($_GET['id']);
            }
            $listcat = loadall_cat();
            include "./san_pham/update.php";

            break;

        case 'updatepro':
            if (isset($_POST['submit']) && ($_POST['submit'])) {
                $id_sanpham = $_POST['id_sanpham'];
                $ten_sanpham = $_POST['ten_sanpham'];
                $don_gia = $_POST['don_gia'];
                $mo_ta = $_POST['mo_ta'];
                $hinh = $_FILES['hinh']['name'];
                $ma_loai = $_POST['ma_loai'];
                $target_dir = "upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);

                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                ;
                update_pro($id_sanpham, $ten_sanpham, $ma_loai, $mo_ta, $don_gia, $hinh);
                $thongbao = "Update Succesfull";
            }
            $listcat = loadall_cat();
            $listpro = loadall_pro();
            include "./san_pham/listpro.php";
            break;
        //Xoa

        case 'deletepro':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_pro($_GET['id']);
            }

            $listpro = loadall_pro();
            include "./san_pham/listpro.php";
            break;
        case 'dskh':
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'deletetk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_taikhoan($_GET['id']);
            }
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'comment':
            $listbinhluan = loadall_binhluan(0);
            include "binhluan/list.php";
            break;
        case 'deletebl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_binhluan($_GET['id']);
            }
            $listbinhluan = loadall_binhluan(0);
            include "binhluan/list.php";
            break;
    }
}
?>