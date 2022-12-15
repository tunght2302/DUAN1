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
                    <a href="index.php" class="nav-item nav-link">Trang Chủ</a>
                    <a href="index.php?act=mybill" class="nav-item nav-link">Đơn hàng của tôi</a>
                    <a href="index.php?act=lienhe" class="nav-item nav-link">Liên hệ</a>
                </div>
                <div class="navbar-nav ml-auto py-0">
                    <a href="index.php?act=dangnhap" class="nav-item nav-link">Tài khoản</a>
                    <a href="index.php?act=dangky" class="nav-item nav-link">Đăng kí</a>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Chi tiết sản phẩm</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="index.php">Trang Chủ</a></p>

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
                <!-- <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                    <i class="fa fa-2x fa-angle-left text-dark"></i>
                </a>
                <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                    <i class="fa fa-2x fa-angle-right text-dark"></i>
                </a> -->
            </div>
        </div>

        <div class="col-lg-7 pb-5">
            <h3 class="font-weight-semi-bold"><?=$ten_sanpham?></h3>
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
            <h3 class="font-weight-semi-bold mb-4"><?=number_format($don_gia)?>VNĐ</h3>
            <h5 class="font-weight-semi-bold"> Mô tả:</h5>
            <p class="mb-4"><?=$mo_ta?></p>

            <?php
            echo '
            <form action="index.php?act=addtocart" method="POST">
            <input type="hidden" name="id_sanpham" value="' . $id_sanpham . '">
            <input type="hidden" name="ten_sanpham" value="' . $ten_sanpham . '">
            <input type="hidden" name="hinh" value="' . $hinh . '">
            <input type="hidden" name="don_gia" value="'.$don_gia .  '">
            <div class="d-flex align-items-center mb-4 pt-2">
            
        <button class="btn btn-primary px-3" name="addtocart" type="submit"><i class="fa fa-shopping-cart mr-1"></i><input type="submit" name="addtocart" class=" btn btn-sm text-dark p-0  btn btn-default add-to-cart"  value="Thêm vào giỏ hàng" ></button>
    </div>
    </form>';
            ?>
            <div class="d-flex pt-2">
                <p class="text-dark font-weight-medium mb-0 mr-2">Chia Sẻ:</p>
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
                ?>
                    <div class="card product-item border-0 mb-4">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                            <a href=" <?= $linksp ?>"><img style="width: 250px; height: 300px;" src="<?= $img ?>" alt=""></a>
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                            <h6><a href="<?= $linksp ?>">
                                    <p> <?= $ten_sanpham ?></p>
                                </a></h6>
                            <div class="d-flex justify-content-center">
                                <h6><a href="<?= $linksp ?>"><?= number_format($don_gia) ?> VNĐ</a></h6>
                                <h6 class="text-muted ml-2"><del><?= number_format($gia_cu) ?> VNĐ</del></h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                            <div>
                                <form action="index.php?act=addtocart" method="POST">
                                    <input type="hidden" name="id_sanpham" value="<?= $id_sanpham ?>">
                                    <input type="hidden" name="ten_sanpham" value="<?= $ten_sanpham ?>">
                                    <input type="hidden" name="hinh" value="<?= $hinh ?>">
                                    <input type="hidden" name="don_gia" value="<?= $don_gia ?>">
                                    <i class="fas fa-shopping-cart text-primary mr-1"></i>
                                    <button type="submit" name="addtocart" class=" btn btn-sm text-dark p-0  btn btn-default add-to-cart " value="Giỏ hàng">Giỏ hàng</button>
                                </form>
                            </div>
                            <a href=" <?= $linksp ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i> Chi tiết</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>