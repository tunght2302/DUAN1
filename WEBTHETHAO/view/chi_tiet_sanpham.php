<!-- Page Header Start -->
<div class="container-fluid">
    <div class="">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
            <a href="" class="text-decoration-none d-block d-lg-none">
                <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="index.php?act=mybill" class="nav-item nav-link">Đơn hàng của tôi</a>
                    <a href="" class="nav-item nav-link">Liên hệ</a>
                </div>
                <div class="navbar-nav ml-auto py-0">
                    <a href="index.php?act=dangnhap" class="nav-item nav-link">Login</a>
                    <a href="index.php?act=dangky" class="nav-item nav-link">Register</a>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Shop Detail</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="index.php">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Shop Detail</p>
        </div>
    </div>
</div>
<!-- Page Header End -->
<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <?php
        extract($onesp);
        ?>
        <div class="col-lg-5 pb-5">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner border">
                    <div class="carousel-item active">
                        <?php
                        $img = $img_path . $hinh;
                        echo '<img src="' . $img . '" width=250px height=250px;>';
                        ?>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                    <i class="fa fa-2x fa-angle-left text-dark"></i>
                </a>
                <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                    <i class="fa fa-2x fa-angle-right text-dark"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-7 pb-5">
            <h3 class="font-weight-semi-bold"><?= $ten_sanpham ?></h3>
            <div class="d-flex mb-3">
                <div class="text-primary mr-2">
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star-half-alt"></small>
                    <small class="far fa-star"></small>
                </div>
                <small class="pt-1">(Đánh giá)</small>
            </div>
            <h3 class="font-weight-semi-bold mb-4"><?= $don_gia ?> VNĐ</h3>
            <p class="mb-4"><?= $mo_ta ?></p>
           
            <?php
            echo '
            <form action="index.php?act=addtocart" method="POST">
            <input type="hidden" name="id_sanpham" value="' . $id_sanpham . '">
            <input type="hidden" name="ten_sanpham" value="' . $ten_sanpham . '">
            <input type="hidden" name="hinh" value="' . $hinh . '">
            <input type="hidden" name="don_gia" value="' . $don_gia . '">
            <div class="d-flex align-items-center mb-4 pt-2">
            <div class="input-group quantity mr-3" style="width: 130px;">
                <div class="input-group-btn">
                    <button class="btn btn-primary btn-minus">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
                <input type="text" class="form-control bg-secondary text-center" value="1">
                <div class="input-group-btn">
                    <button class="btn btn-primary btn-plus">
                        <i class="fa fa-plus"></i>
                    </button>
                </div>
            </div>
        <button class="btn btn-primary px-3" name="addtocart" type="submit"><i class="fa fa-shopping-cart mr-1"></i><input type="submit" name="addtocart" class=" btn btn-sm text-dark p-0  btn btn-default add-to-cart"  value="Thêm vào giỏ hàng" ></button>
    </div>
    </form>';
            ?>
            <div class="d-flex pt-2">
                <p class="text-dark font-weight-medium mb-0 mr-2">Share on:</p>
                <div class="d-inline-flex">
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
                        <i class="fab fa-pinterest"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row px-xl-5">
        <div class="col" id="reviews">

            <div class="col">
                <div class="nav nav-tabs justify-content-center border-secondary mb-4">

                    <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-3">Bình luận</a>
                </div>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

                <div class="row" id="binhluan" name="id_sanpham">
                    <script>
                        $(document).ready(function() {

                            $("#binhluan").load("view/binhluan/binhluanform.php", {
                                id_sanpham: <?= $id_sanpham ?>
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Shop Detail End -->

<!-- Products Start -->
<div class="container-fluid py-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Có thể bạn sẽ thích</span></h2>
    </div>
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel related-carousel">
                <?php
                foreach ($sp_cungloai as $sp_cungloai) {
                    extract($sp_cungloai);
                    $img = $img_path . $hinh;
                    $linksp = "index.php?act=chi_tiet_sanpham&id=" . $id_sanpham;
                    echo ' 
						<div class="card product-item border-0">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <img class="img-fluid w-100"  src="' . $img . '" alt="">
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6 class="text-truncate mb-3"><a href="' . $linksp . '">' . $ten_sanpham . '</a></h6>
                            <div class="d-flex justify-content-center">
                                <h6>$' . $don_gia . '</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                        <form action="index.php?act=addtocart" method="POST">
                            <input type="hidden" name="id_sanpham" value="' . $id_sanpham . '">
                            <input type="hidden" name="ten_sanpham" value="' . $ten_sanpham . '">
                            <input type="hidden" name="hinh" value="' . $hinh . '">
                            <input type="hidden" name="don_gia" value="' . $don_gia . '">
                            <i class="fas fa-shopping-cart text-primary mr-1"></i><input type="submit" name="addtocart" class=" btn btn-sm text-dark p-0  btn btn-default add-to-cart"  value="Thêm vào giỏ hàng" >
                            <a href="' . $linksp . '" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Chi tiết</a>
                        </form>
                        </div>
                    </div>
										';
                }
                ?>
            </div>
        </div>
    </div>
</div>