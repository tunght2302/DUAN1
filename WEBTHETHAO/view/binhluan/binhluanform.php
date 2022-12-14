<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
include "../../model/tai_khoan.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        img {
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div class="mb box_left">
        <p style="font-size: 25px;color:red;">Tất cả bình luận</p>
        <div class="box_content2 menu_right binhluan ">
            <?php
            $id_sanpham = $_REQUEST['id_sanpham'];
            $listbl = loadall_binhluan($id_sanpham);
            foreach ($listbl as $bl) {
                extract($bl);
                
                ?>
                    <?php
                    $oneuser=loadone_taikhoan($bl['iduser']);
                    extract($oneuser);
                    echo'
                    <p>'.$ho_ten.'</p>';
                    ?>
                    
                    <h6><small><i><?=$giobinhluan?><br><?=$ngaybinhluan?></i></small></h6>
                     <p><?=$noi_dung?></p>
                    <hr>
                <?php } ?>
        </div>


        <div class="box_footer searchbox binhluanform">
            <?php
            if (!isset($_SESSION['ten_dangnhap'])) {
                echo '<b class="text-danger">Đăng nhập để bình luận về sản phẩm này</b>';
            } else {
            ?>
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                    <input type="hidden" name="id_sanpham" value="<?= $id_sanpham ?>">
                    <div class="form-group">
                        <label for="message">Viết bình luận *</label>
                        <textarea id="message" name="noi_dung" cols="30" rows="5" class="form-control"></textarea>
                    </div>

                    <div class="form-group mb-0">
                        <input type="submit" name="guibinhluan" value="Gửi bình luận" class="btn btn-primary px-3">
                    </div>
                </form>
            <?php
            }
            ?>


        </div>
        <?php
        if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
            $noi_dung = $_POST['noi_dung'];
            $id_sanpham = $_POST['id_sanpham'];
            $iduser = $_SESSION['ten_dangnhap']['id_nguoidung'];
            date_default_timezone_set("Asia/Ho_Chi_Minh");
            $ngaybinhluan = date('d/m/Y');
            $giobinhluan = date('h:i:sa');
            insert_binhluan($noi_dung, $iduser, $id_sanpham, $ngaybinhluan, $giobinhluan);
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        ?>
    </div>
    </head>

    <body>