<?php
$dsdm = loadall_cat();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<style>
		.banner1{
			width: 100%;
			height: 300px;
			position: relative;
		}
		.banner1 .social-icons{
			position: absolute;
			top: 5px;
		}
		body{
			font-family: 'Times New Roman', Times, serif;
		}
		/* SlideShow */
                    .sli {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        margin: 0;
                        padding: 0;
                        height: 450px;
                        background: white;
                    }

                    .slider {
                        border-radius: 10px;
                        overflow: hidden;
                        width: 1200px;
                        height: 400px;
                        border: 7px solid white;
                        box-shadow: 0 5px 18px rgba(0, 0, 0, 0.6);
						margin-bottom: 50px;
                    }

                    .slides {
                        width: 500%;
                        height: 350px;
                        display: flex;
                    }

                    .slides input {
                        display: none;
                    }

                    .slide {
                        width: 20%;
                        transition: 2s;
                    }

                    .slide img {
                        width: 1190px;
                        height: 400px;

                    }

                    /*css for manual slide navigation*/

                    .navigation-manual {
                        position: absolute;
                        display: flex;
                        justify-content: center;
                        width: 600px;
                        margin-left: 270px;
                    }

                    .manual-btn {
                        border-radius: 10px;
                        cursor: pointer;
                        transition: 1s;
                        border: 3px solid white;
                        padding: 5px;
                        width: 30px;
                    }

                    .manual-btn:not(:last-child) {
                        margin-right: 40px;
                    }

                    .manual-btn:hover {
                        background: #c43af3;
                    }

                    #radio1:checked~.first {
                        margin-left: 0;
                    }

                    #radio2:checked~.first {
                        margin-left: -20%;
                    }

                    #radio3:checked~.first {
                        margin-left: -40%;
                    }

                    #radio4:checked~.first {
                        margin-left: -60%;
                    }

                    /*css for automatic navigation*/

                    .navigation-auto {
                        position: absolute;
                        justify-content: center;
                        margin-top: 460px;
                        display: flex;
                        width: 800px;
                    }

                    .navigation-auto div {
                        border-radius: 10px;
                        transition: 1s;
                        border: 3px solid #c43af3;
                        padding: 5px;
                        width: 30px;
                    }

                    .navigation-auto div:not(:last-child) {
                        margin-right: 40px;
                    }

                    #radio1:checked~.navigation-auto .auto-btn1 {
                        background: #c43af3;
                    }

                    #radio2:checked~.navigation-auto .auto-btn2 {

                        background: #c43af3;
                    }
                    
                    #radio3:checked~.navigation-auto .auto-btn3 {
                        background: #c43af3;
                    }

                    #radio4:checked~.navigation-auto .auto-btn4 {
                        background: #c43af3;
                    }

	</style>
    <!-- [if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif] -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
    
	<header id="header"><!--header-->
		<div class="header_top">
			<img src="https://res.cloudinary.com/ho-ng-t-ng/image/upload/v1668707184/Red_Orange_kv7ezl.png" class="banner1" alt="">
			<!--header_top-->
			
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						
						<div class="btn-group pull-right">
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-user"></i> Tài Khoản</a></li>
								<li><a href="index.php?act=addtocart"><i class="fa fa-shopping-cart"></i> Giỏ Hàng</a></li>
								<li><a href="index.php?act=dangnhap"><i class="fa fa-lock"></i> Đăng Nhập</a></li>
								<li><a href="index.php?act=dangky"><i class="fa fa-lock"></i> Đăng Ký</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
        
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php">Trang chủ</a></li>
								
								<li class="dropdown"><a href="#">Danh mục<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <?php
                                        foreach($dsdm as $dm){
                                            extract($dm);
                                            $linkcat = "index.php?act=sanpham&ma_loai=" . $id;
                                            echo '<li><a href="'.$linkcat.'">'.$ten_loai.'</a></li>
                                            
                                            ';
                                        }
                                        ?>
                                    </ul>
                                </li> 
								<li><a href="">Giới thiệu</a></li>
								<li><a href="index.php?act=lienhe">Liên hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<form action="index.php?act=sanpham" method="post">
							<input type="text" name="kyw" placeholder="Search"/>
							<!-- <input type="submit" name="timkiem" value="Tìm kiếm"> -->
							</form>
						</div>
					</div>
				</div>
				</div>
			</div>
	</header>
	<div class="banner sli">
					<!--image slider start-->
					<div class="slider">
						<div class="slides">
							<!--radio buttons start-->
							<input type="radio" name="radio-btn" id="radio1">
							<input type="radio" name="radio-btn" id="radio2">
							<input type="radio" name="radio-btn" id="radio3">
							<input type="radio" name="radio-btn" id="radio4">
							<!--radio buttons end-->

							<!--slide images start-->
							<div class="slide first">
								<img src="https://res.cloudinary.com/ho-ng-t-ng/image/upload/v1668617848/Under_Armour_NFL_Combine_mgxt3p.jpg" alt="">
							</div>
							<div class="slide">
								<img src="https://res.cloudinary.com/ho-ng-t-ng/image/upload/v1668615929/qui-trinh_wsup0h.jpg" alt="">
							</div>
							<div class="slide">
								<img src="https://res.cloudinary.com/ho-ng-t-ng/image/upload/v1668617849/NIKE_WOMAN_KNITWEAR_reajpp.jpg" alt="">
							</div>
							<div class="slide">
								<img src="https://res.cloudinary.com/ho-ng-t-ng/image/upload/v1668617849/t%E1%BA%A3i_xu%E1%BB%91ng_1_rltnsw.jpg" alt="">
							</div>
							<!--slide images end-->


							<!--automatic navigation end-->
						</div>

						<!--manual navigation start-->
						<div class="navigation-manual">
							<label for="radio1" class="manual-btn"></label>
							<label for="radio2" class="manual-btn"></label>
							<label for="radio3" class="manual-btn"></label>
							<label for="radio4" class="manual-btn"></label>
						</div>
						<!--manual navigation end-->
					</div>
					<!--image slider end-->
				</div>
</body>