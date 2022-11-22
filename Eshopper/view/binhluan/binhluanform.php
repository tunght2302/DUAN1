<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>


    <div class="mb box_left">
    <div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
                                <form action="#">
                                <?php
                $id_sanpham = $_REQUEST['id_sanpham'];
                $listbl = loadall_binhluan($id_sanpham);
                foreach ($listbl as $bl) {
                    extract($bl);
                   echo' <ul>
										<li><a href=""><i class="fa fa-user"></i>' . $id_binhluan . '</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>' . $giobinhluan . '</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>' . $ngaybinhluan . '</a></li>
									</ul>
                    
                    <p>' . $noi_dung . '</p>
									
                    ';
                    
                }
                ?>
                <p><b>Viết bình luận</b></p>
								
									
                                    </form>
									
									<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                                    <input type="hidden" name="id_sanpham" value="<?= $id_sanpham ?>">
										<textarea type="text" name="noi_dung" placeholder="" ></textarea>
										<b>Đánh giá: </b> <img src="images/product-details/rating.png" alt="" />
										<input type="submit" name="guibinhluan" value="Gửi" class="btn btn-default pull-right">
											
</input>
									</form>
								</div>
							</div>

        
        <div class="box_footer searchbox binhluanform">
            <?php
            //     if(!isset($_SESSION['user'])){
            //         echo '<b class="text-danger">Đăng nhập để bình luận về sản phẩm này</b>';
            //     }else{
            // ?>

           
            <?php
            //}
            ?>
        </div>

        <?php
        if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
            $noi_dung = $_POST['noi_dung'];
            $id_sanpham = $_POST['id_sanpham'];
            $iduser = $_SESSION['user']['id_sanpham'];
            $ngaybinhluan = date(' d/m/Y');
            $giobinhluan = date('h:i:sa');
            insert_binhluan($noi_dung, $iduser, $id_sanpham, $ngaybinhluan,$giobinhluan);
            header("Location: " . $_SERVER['HTTP_REFERER']);
        }
        ?>
    </div>
</body>

</html>