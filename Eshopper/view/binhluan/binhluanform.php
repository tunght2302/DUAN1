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
                    echo '<tr><td> '.$id_binhluan.' </td>';
                    echo '<tr><td> '.$noi_dung.' </td>';
                    echo '<tr><td> '.$ngaybinhluan.' </td>';
                                             
                }
                ?>

									</form>
								</div>
							</div>
        <div class="box_footer searchbox binhluanform">
            <?php
            //     if(!isset($_SESSION['user'])){
            //         echo '<b class="text-danger">Đăng nhập để bình luận về sản phẩm này</b>';
            //     }else{
            // ?>

            <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                <input type="hidden" name="id_sanpham" value="<?=$id_sanpham?>">
                <input type="text" name="noi_dung" placeholder="viết bình luận">
                <input type="submit" name="guibinhluan" value="Gửi">
            </form>
            <?php
                //}
            ?>
        </div>

        <?php
        if(isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])){
            $noi_dung = $_POST['noi_dung'];
            $id_sanpham = $_POST['id_sanpham'];
            $iduser = $_SESSION['user']['id_sanpham'];
            $ngaybinhluan = date('h:i:sa d/m/Y');
            insert_binhluan($noi_dung, $iduser, $id_sanpham, $ngaybinhluan);
            header("Location: ".$_SERVER['HTTP_REFERER']);
        }
        ?>
    </div>
</body>

</html>