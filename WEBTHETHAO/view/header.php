<?php
$dsdm = loadall_cat();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
        .cart-box {
            display: grid;
            grid-template-columns: 32% 50% 18%;
            align-items: center;
            margin-top: 1rem;
        }

        .cart-img {
            width: 90px;
            height: auto;
            object-fit: contain;
            padding: 10px;
        }

        .detail-box {
            display: grid;
            row-gap: 0.5rem;
        }

        .cart-product-title {
            text-align: center;
            font-size: 20px;
        }

        .cart-price {
            margin-right: 155px;
        }

        .cart-quantity {
            border: 1px solid var(--text-color);
            outline-color: var(--main-color);
            width: 2.4rem;
            border: 1.5px solid black;
            border-radius: 4px;
            text-align: center;
            font-size: 1rem;
            margin-left: 5px;
        }

        .total {
            display: flex;
            justify-content: flex-end;
            margin-top: 1.5rem;
            border-top: 2px solid black;
        }

        .btn-buy {
            display: flex;
            margin: 1.5rem auto 0 auto;
            padding: 12px 20px;
            border: none;
            background-color: orangered;
            color: white;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
        }
       
        .btn-buy:hover {
            background-color: gray;
        }

        .cart {
            position: fixed;
            top: 0;
            right:-100%;
            width: 300px;
            min-height: 100vh;
            padding: 20px;
            background-color: whitesmoke;
            box-shadow: -2px 0 4px hsl(0 4% 15% / 10%);
            transition: 0.3s;
            z-index: 999;
        }

        .cart.active {
            right: 0;
        }

        #close-cart {
            position: absolute;
            top: 5px;
            right: 20px;
            font-size: 2rem;
            color: green;
            cursor: pointer;
        }
        .noilen{
            
            position: fixed !important;
            right: 20px;
            top: 20px;
            z-index: 999;
        }
        
        img {
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">

            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="index.php" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="index.php?act=sanpham" method="post">
                    <div class="input-group">
                        <input type="text" name="kyw" class="form-control" placeholder="Search">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3 col-6 text-right">
                <!-- <i class="fas fa-shopping-cart text-primary" id="cart-icon"></i> -->
                <a href="index.php?act=addtocart">
                    <i class="fas fa-shopping-cart text-primary noilen"></i>
                </a>
                <div class="cart">
                    <!-- //Content -->
                    <div>
                        <div class="cart-content">
                          
                        </div>
                        <!-- total -->
                        <div class="total">
                            <div class="total-title">Total</div>
                            <div class="total-price">$0</div>
                        </div>
                        <!-- Buy button -->
                        <a href="index.php?act=addtocart"><button type="button" class="btn-buy">Buy now</button></a>
                        <!-- close cart -->
                        <box-icon name='x' id="close-cart"></box-icon>
                    </div>
                </div>

            </div>
        </div>
    </div>