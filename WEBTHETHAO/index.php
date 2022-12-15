<?php
session_start();
ob_start();
include "model/pdo.php";
include "model/danh_muc.php";
include "model/san_pham.php";
include "model/tai_khoan.php";
include "model/lienhe.php";
include "model/cart.php";
include "view/header.php";
include "global.php";
if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];

$spnew = loadall_pro_home();
$dsdm = loadall_cat();
$dstop5 = loadall_pro_top10();

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {


        case 'dangky':
            require "validate.php";
            if (isset($_POST['dangky'])) {
                if (empty($_POST['ten_dangnhap'])) {
                    $error['ten_dangnhap'] = "Bạn chưa nhập tên";
                }
                if (empty($_POST['ho_ten'])) {
                    $error['ho_ten'] = "Bạn chưa nhập họ tên";
                }
                if (empty($_POST['dia_chi'])) {
                    $error['dia_chi'] = "Bạn chưa nhập địa chỉ";
                }
                if (empty($_POST['so_dien_thoai'])) {
                    $error['so_dien_thoai'] = "Bạn chưa nhập số điện thoại";
                }
                if (!is_email($_POST['email'])) {
                    $error['email'] = "Email không hợp lệ";
                }
                if (empty($_POST['mat_khau'])) {
                    $error['mat_khau'] = "Bạn chưa nhập mật khẩu";
                }
                if (empty($error)) {
                    $ho_ten = isset($_POST['ho_ten']) ? $_POST['ho_ten'] : '';
                    $so_dien_thoai = isset($_POST['so_dien_thoai']) ? $_POST['so_dien_thoai'] : '';
                    $dia_chi = isset($_POST['dia_chi']) ? $_POST['dia_chi'] : '';
                    $ten_dangnhap = isset($_POST['ten_dangnhap']) ? $_POST['ten_dangnhap'] : '';
                    $email = isset($_POST['email']) ? $_POST['email'] : '';
                    $mat_khau = isset($_POST['mat_khau']) ? md5($_POST['mat_khau']) : '';
                    insert_tai_khoan($ho_ten, $ten_dangnhap, $mat_khau, $email, $so_dien_thoai, $dia_chi);
                    $thongbao = "Đã đăng kí thành công";
                }
            }
            include "view/tai_khoan/dang_ky.php";
            break;
        case 'cap_nhat':
            if (isset($_POST['cap_nhat']) && ($_POST['cap_nhat'])) {
                $id_nguoidung = $_POST['id_nguoidung'];
                $ho_ten = $_POST['ho_ten'];
                $ten_dangnhap = $_POST['ten_dangnhap'];
                $mat_khau = $_POST['mat_khau'];
                $email = $_POST['email'];
                $so_dien_thoai = $_POST['so_dien_thoai'];
                $dia_chi = $_POST['dia_chi'];

                update_tai_khoan($id_nguoidung, $ho_ten, $ten_dangnhap, $mat_khau, $email, $so_dien_thoai, $dia_chi);
                $_SESSION['ten_dangnhap'] = checkuser($ten_dangnhap, $mat_khau);
            }
            include "view/tai_khoan/cap_nhat.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dang_nhap'])) {
                if (empty($_POST['ten_dangnhap'])) {
                    $error['ten_dangnhap'] = "Vui lòng nhập tên đăng nhập";
                }
                if (empty($_POST['mat_khau'])) {
                    $error['mat_khau'] = "Vui lòng nhập mật khẩu";
                }
                if (empty($error)) {
                    $ten_dangnhap = isset($_POST['ten_dangnhap']) ? $_POST['ten_dangnhap'] : '';
                    $mat_khau = isset($_POST['mat_khau']) ? md5($_POST['mat_khau']) : '';
                    $check_nguoidung = check_nguoidung($ten_dangnhap, $mat_khau);
                    if (is_array($check_nguoidung)) {
                        $_SESSION['ten_dangnhap'] = $check_nguoidung;
                    } else {
                        $thongbao = "Tài khoản không tồn tại.Vui lòng kiểm tra lại hoặc đăng kí";
                    }
                }
                // header('Location:index.php');
            }
            include "view/tai_khoan/dang_nhap.php";
            break;
        case 'quen_matkhau':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $check_email = check_email($email);
                if (is_array($check_email)) {
                    $thongbao = "Mật khẩu của bạn là:" . $check_email['mat_khau'];
                } else {
                    $thongbao = "Email này không tồn tại";
                }
            }
            include "view/tai_khoan/quen_matkhau.php";
            break;
        case 'thoat':
            session_unset();
            include "view/tai_khoan/dang_nhap.php";
            break;
        case 'chi_tiet_sanpham':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $idsp = $_GET['id'];
                $onesp = loadone_pro($idsp);
                extract($onesp);
                tang_view($idsp);
                $sp_cungloai = load_pro_cungloai($id_sanpham, $ma_loai);
                include "view/chi_tiet_sanpham.php";
            } else {
                include "view/home.php";
            }
            break;
        case 'sanpham':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['ma_loai']) && ($_GET['ma_loai'] > 0)) {
                $ma_loai = $_GET['ma_loai'];
            } else {
                $ma_loai = 0;
            }
            $dssp = loadall_pro_cungloai($kyw, $ma_loai);
            $tendm = load_ten_dm($ma_loai);
            include "view/sanpham.php";
            break;
        case 'addtocart':
            if (!isset($_SESSION['ten_dangnhap'])) {
                include('view/tai_khoan/dang_nhap.php');
            } else {
                if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                    $id_sanpham = $_POST['id_sanpham'];
                    $ten_sanpham = $_POST['ten_sanpham'];
                    $hinh = $_POST['hinh'];
                    $don_gia = ((float)$_POST['don_gia']);
                    $soluong = 1;
                    $ttien = $soluong * $don_gia;
                    // $spadd = [$id_sanpham, $ten_sanpham, $hinh, $don_gia, $soluong, $ttien];
                    // array_push($_SESSION['mycart'], $spadd);
                    if (!isset($_SESSION['mycart'][$id_sanpham])) {
                        $_SESSION['mycart'][$id_sanpham] = array(
                            'id_sanpham' => $id_sanpham,
                            'ten_sanpham' => $ten_sanpham,
                            'hinh' => $hinh,
                            'don_gia' => $don_gia,
                            'so_luong' => $soluong = 1,
                            'ttien' => $ttien,
                        );
                    } else {
                        $_SESSION['mycart'][$id_sanpham]['so_luong'] += $soluong;
                    }
                    // header('location:index.php');
                }
                include "view/cart/viewcard.php";
            }
            break;
        case 'delcart':
            if (isset($_GET['idcart'])) {
                array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
            } else {
                $_SESSION['mycart'] = [];
            }
            header('location:index.php?act=addtocart');
            break;
        case 'bill':
            include "view/cart/bill.php";
            break;
        case 'billconfirm':
            if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
                if (isset($_SESSION['ten_dangnhap'])) {
                    $iduser = $_SESSION['ten_dangnhap']['id_nguoidung'];
                } else {
                    $id = 0;
                }
                $name = $_POST['ho_ten'];
                $email = $_POST['email'];
                $address = $_POST['dia_chi'];
                $pttt = $_POST['pttt'];
                $tel = $_POST['so_dien_thoai'];
                date_default_timezone_set("Asia/Ho_Chi_Minh");
                $ngaydathang = date('h:i:sa d/m/Y');
                $tongdonhang = tongdonhang();
                $bill_status = 1;
                $idbill = insert_bill($iduser, $ngaydathang, $tongdonhang,$bill_status);

                foreach ($_SESSION['mycart'] as $cart) {

                    insert_cart($_SESSION['ten_dangnhap']['id_nguoidung'], $cart["id_sanpham"], $cart["so_luong"], $cart["ttien"], $idbill);
                }


                $_SESSION['mycart'] = [];
                $bill = loadone_bill($idbill);
                $billct = loadall_cart($idbill);
                header('Location:index.php?act=chitietbill&id=' . $idbill);
            }
            break;
        case 'chitietbill':
            include "view/cart/billconfirm.php";
            break;
        case 'mybill':
            if (!isset($_SESSION['ten_dangnhap'])) {
                include('view/tai_khoan/dang_nhap.php');
            } else {
                $listbill = loadall_cart_user($_SESSION['ten_dangnhap']['id_nguoidung']);
                include "view/cart/mybill.php";
            }
            break;
        case 'tru_san_pham':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            }
            if ($_SESSION['mycart'][$id]['so_luong'] == 0) {
                $_SESSION['loi'] = 'Số lượng không được nhỏ hơn 0';
                header('location:index.php?act=addtocart');
            } else {
                $ten_sanpham = $_GET['ten'];
                $hinh = $_GET['hinh'];
                $don_gia = $_GET['don_gia'];
                $ttien = $_GET['ttien'];
                $so_luong_new = $_SESSION['mycart'][$id]['so_luong'] - 1;

                $_SESSION['mycart'][$id] = array(
                    'id_sanpham' => $id,
                    'ten_sanpham' => $ten_sanpham,
                    'hinh' => $hinh,
                    'don_gia' => $don_gia,
                    'so_luong' => $so_luong_new,
                    'ttien' => $ttien,
                );
            }
            header('location:index.php?act=addtocart');
            break;
        case 'cong_san_pham':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            }
            $ten_sanpham = $_GET['ten'];
            $hinh = $_GET['hinh'];
            $don_gia = $_GET['don_gia'];
            $ttien = $_GET['ttien'];
            $so_luong_new = $_SESSION['mycart'][$id]['so_luong'] + 1;

            $_SESSION['mycart'][$id] = array(
                'id_sanpham' => $id,
                'ten_sanpham' => $ten_sanpham,
                'hinh' => $hinh,
                'don_gia' => $don_gia,
                'so_luong' => $so_luong_new,
                'ttien' => $ttien,
            );
            header('location:index.php?act=addtocart');
            break;
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'lienhe':
            require "validate.php";
            if (isset($_POST['gui'])) {
                if (empty($_POST['hoten'])) {
                    $error['hoten'] = "Vui lòng nhập tên";
                }
                if (!is_email($_POST['email'])) {
                    $error['email'] = "Email không hợp lệ";
                }
                if (empty($_POST['noidung'])) {
                    $error['noidung'] = "Vui lòng nhập nội dung";
                }
                if (empty($error)) {
                    $hoten = isset($_POST['hoten']) ? $_POST['hoten'] : '';
                    $email = isset($_POST['email']) ? ($_POST['email']) : '';
                    $noidung = isset($_POST['noidung']) ? ($_POST['noidung']) : '';
                    insert_lienhe($hoten, $email, $noidung);
                    $thongbao = "Bạn đã gửi thành công";
                }
                // header('Location:index.php');
            }
            include "view/lienhe/lienhe.php";
            break;
         // lọc theo giá
        //  $this->data['min-price'] = $this->IndexModel->getMinProductPrice();
        //  $this->data['max-price'] = $this->IndexModel->getMaxProductPrice();
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
ob_end_flush();
