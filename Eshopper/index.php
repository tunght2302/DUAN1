<?php
session_start();
include "model/pdo.php";
include "model/danh_muc.php";
include "model/san_pham.php";
include "model/tai_khoan.php";
include "view/header.php";
include "global.php";

if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

$spnew = loadall_pro_home();
$dsdm = loadall_cat();
$dstop5=loadall_pro_top10();

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        
        
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'] != "")) {
                $ten_dangnhap = $_POST['ten_dangnhap'];
                $email = $_POST['email'];
                $mat_khau = $_POST['mat_khau'];
                insert_tai_khoan($ten_dangnhap,$email,$mat_khau);
                $thongbao= "Đã đăng kí thành công";
            }
            include "view/tai_khoan/dang_ky.php";
            break;
         case 'cap_nhat':
            if (isset($_POST['cap_nhat']) && ($_POST['cap_nhat'])) {
                $id_nguoidung =$_POST['id_nguoidung'];
                $ho_ten = $_POST['ho_ten'];
                $ten_dangnhap = $_POST['ten_dangnhap'];
                $mat_khau = $_POST['mat_khau'];
                $email = $_POST['email'];
                $so_dien_thoai = $_POST['so_dien_thoai'];
                $dia_chi = $_POST['dia_chi'];

                update_tai_khoan($id_nguoidung,$ho_ten,$ten_dangnhap,$mat_khau,$email,$so_dien_thoai,$dia_chi);
                    header("Location:index.php?act=cap_nhat");
               
            }
            include "view/tai_khoan/cap_nhat.php";
            break;
            case 'dangnhap':
                if (isset($_POST['dang_nhap']) && ($_POST['dang_nhap'] != "")) {
                    $ten_dangnhap = $_POST['ten_dangnhap'];
                    $mat_khau = $_POST['mat_khau'];
                    $check_nguoidung = check_nguoidung($ten_dangnhap,$mat_khau);
                    if(is_array($check_nguoidung)){
                        $_SESSION['ten_dangnhap']= $check_nguoidung;
                        //$thongbao= "Đã đăng nhập thành công";
                        header("Location:index.php?act=dangnhap");
                    }else{
                        $thongbao = "Tài khoản không tồn tại.Vui lòng kiểm tra lại hoặc đăng kí";
                    }
                }
                include "view/tai_khoan/dang_nhap.php";
            break;
            case 'quen_matkhau':
                if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                    $email = $_POST['email'];
                    $check_email=check_email($email);
                    if(is_array($check_email)){
                        $thongbao="Mật khẩu của bạn là:".$check_email['mat_khau'];
                    }else{
                        $thongbao="Email này không tồn tại";
                    }
                }
                include "view/tai_khoan/quen_matkhau.php";
                break;    
        case 'thoat':
            session_unset();
                header('Location:index.php?act=dangnhap');
            break;
        case 'chi_tiet_sanpham':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $idsp = $_GET['id'];
                $onesp = loadone_pro($idsp);
                extract($onesp);
                $sp_cungloai = load_pro_cungloai($id_sanpham,$ma_loai);
                include "view/chi_tiet_sanpham.php";
            } else {
                    include "view/home.php";
                }
            break;
        case 'sanpham':
            if (isset($_POST['kyw'])&&($_POST['kyw']!="")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['ma_loai'])&&($_GET['ma_loai']>0)) {
                $ma_loai = $_GET['ma_loai'];
            } else {
                $ma_loai = 0;
            }
            $dssp = loadall_pro_cungloai($kyw,$ma_loai);
            $tendm = load_ten_dm($ma_loai);
            include "view/sanpham.php";
            break;
            case 'addtocart':
                if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                    $id_sanpham =$_POST['id_sanpham'];
                    $ten_sanpham =$_POST['ten_sanpham'];
                    $hinh=$_POST['hinh'];
                    $don_gia =$_POST['don_gia'];
                    $soluong=1;
                    $ttien = $soluong*$don_gia;
                    $spadd = [$id_sanpham, $ten_sanpham, $hinh, $don_gia, $soluong, $ttien];
                    array_push($_SESSION['mycart'], $spadd);
                    
                }
                include "view/cart/viewcard.php";
                break;
         
        case 'gioithieu':
            include "view/gioithieu.php";
            break;    
        case 'lienhe':
            include "view/lienhe.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
