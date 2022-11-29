<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <div class="row px-xl-5">
        <div class="col">

            <div class="tab-content">


                <div class="col-md-6">
                    <h4 class="mb-4">Để lại đánh giá</h4>
                    <small></small>
                    <div class="d-flex my-3">
                        <p class="mb-0 mr-2">Đánh giá * :</p>
                        <div class="text-primary">
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>

                </div>
                <?php
                $id_sanpham = $_REQUEST['id_sanpham'];
                $listbl = loadall_binhluan($id_sanpham);
                foreach ($listbl as $bl) {
                    extract($bl);

                    echo ' 

                        <div class="row">
                        
                            <div class="col-md-6">
                                
                                <div class="media mb-4">
                                    <img src="./img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                    <div class="media-body">
                                        <h6>' . $id_binhluan . '<small> - <i>' . $ngaybinhluan . '</i></small></h6>
                                        <div class="text-primary mb-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <p>' . $noi_dung . '</p>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    
                        
                        ';
                }
                ?>
            </div>
                <?php
                
            if (!isset($_SESSION['ten_dangnhap'])) {
                echo '<b class="text-danger">Đăng nhập để bình luận về sản phẩm này</b>';
            } else {

            ?>
                <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                    <input type="hidden" name="id_sanpham" value="<?= $id_sanpham ?>">
                    <div class="form-group">
                        <label for="message">Viết đánh giá *</label>
                        <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                    </div>

                    <div class="form-group mb-0">
                        <input type="submit" name="guibinhluan" value="Gửi bình luận" class="btn btn-primary px-3">
                    </div>
                </form>

                <?php
            }
            ?>

            
            <?php
            if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
                $noi_dung = $_POST['noi_dung'];
                $id_sanpham = $_POST['id_sanpham'];
                $iduser = $_SESSION['user']['id_sanpham'];
                $ngaybinhluan = date(' d/m/Y');
                $giobinhluan = date('h:i:sa');
                insert_binhluan($noi_dung, $iduser, $id_sanpham, $ngaybinhluan, $giobinhluan);
                header("Location: " . $_SERVER['HTTP_REFERER']);
            }
            ?>
             </div>
</div>
</body>

</html>