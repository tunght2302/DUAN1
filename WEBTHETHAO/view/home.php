<?php
ob_start();
?>
<div class="container-fluid mb-5">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h6 class="m-0">Danh mục</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                <div class="navbar-nav w-100 overflow-hidden" style="height: 410px;display:flex !important;">

                    <?php
                    foreach ($dsdm as $dm) {
                        extract($dm);
                        $linkcat = "index.php?act=sanpham&ma_loai=" . $id;
                        echo '<li><a href="' . $linkcat . '" class="nav-item nav-link">' . $ten_loai . '</a></li>
                            ';
                    }
                    ?>
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="index.php" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Trang Chủ</a>

                        <a href="index.php?act=mybill" class="nav-item nav-link">Đơn hàng của tôi</a>

                        <a href="" class="nav-item nav-link">Liên hệ</a>
                    </div>
                    <div class="navbar-nav ml-auto py-0">
                        <a href="index.php?act=dangnhap" class="nav-item nav-link">Tài Khoản</a>
                        <a href="index.php?act=dangky" class="nav-item nav-link">Đăng Ký</a>
                    </div>
                </div>
            </nav>
            <div id="header-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" style="height: 410px;">
                        <img class="img-fluid" src="img/11.png" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" style="height: 410px;">
                        <img class="img-fluid" src="img/banner.png" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                < </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
    <!-- Topbar End -->
    <!-- Featured Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5 pb-3">
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Sản Phẩm Chất Lượng Cao</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                    <h5 class="font-weight-semi-bold m-0">Miễn Phí Ship</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0">Đổi Trả Trong 14 Ngày</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="d-flex align-items-center border mb-4" style="padding: 30px;">
                    <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                    <h5 class="font-weight-semi-bold m-0"> Hỗ Trợ 24/7 </h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured End -->



    <!-- Page Header Start -->

    <!-- Page Header End -->


    <!-- Shop Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-12">
                <!-- Price Start -->
                <div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4">Top yêu thích</h5>
                    <form>
                        <div>
                            <div>
                                <ul style="list-style-type: none;padding:0;font-family:Arial, Helvetica, sans-serif;">
                                    <?php
                                    foreach ($dstop5 as $sp) {
                                        extract($sp);
                                        $linksp = "index.php?act=chi_tiet_sanpham&id=" . $id_sanpham;
                                        $img = $img_path . $hinh;
                                        echo '
									<div style="display:flex;margin-top:10px">
										<div>
											<img src="' . $img . '" width="50px" height="50px"style="border-radius:10px">
										</div>
										<div style="margin-left:10px;margin-top:15px;">
											<li><span class="pull-right"></span><a style="text-decoration:none;" href="' . $linksp . '">' . $ten_sanpham . '</a></a></li>
										</div>
									</div>
									';
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>

                    </form>
                </div>
                <!-- Price End -->


            </div>
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-12">
                <div class="row pb-3">
                    <div class="col-12 pb-1">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="input-group">
                                <form action="index.php?act=sanpham" method="post">
                                    <input type="text" class="form-control" name="kyw" placeholder="Tìm kiếm">
                                </form>
                                <div class="input-group-append">
                                    <span class="input-group-text bg-transparent text-primary">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="dropdown ml-4">
                                <button class="btn border dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sort by
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                    <a class="dropdown-item" href="#">Latest</a>
                                    <a class="dropdown-item" href="#">Popularity</a>
                                    <a class="dropdown-item" href="#">Best Rating</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    $i = 0;
                    foreach ($spnew as $sp) :
                        extract($sp);
                        $linksp = "index.php?act=chi_tiet_sanpham&id=" . $id_sanpham;
                        $img = $img_path . $hinh;
                    ?>

                        <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                            <div class="card product-item border-0 mb-4">
                                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                    <a href="<?= $linksp ?>"><img src="<?=$img?>" alt="" class="img-fluid w-100 product-img"></a>
                                </div>
                                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                    <h6><a href="<?= $linksp ?>">
                                            <p class="product-title"><?=$ten_sanpham ?></p>
                                        </a></h6>
                                    <div class="d-flex justify-content-center">
                                        <h6 class="price"><a href="<?= $linksp ?>"><?=$don_gia?>VNĐ</a></h6>
                                        <h6 class="text-muted ml-2"><del><?=$gia_cu ?>VNĐ</del></h6>
                                    </div>
                                </div>
                                <!-- <i class="fas fa-shopping-cart text-primary mr-1 add-cart"></i> -->
                                <div class="card-footer d-flex justify-content-between bg-light border">
                                    <div>
                                        <div>
                                            <form action="index.php?act=addtocart" method="POST">
                                                <input type="hidden" name="id_sanpham" value="<?=$id_sanpham?>">
                                                <input type="hidden" name="ten_sanpham" value="<?= $ten_sanpham?>">
                                                <input type="hidden" name="hinh" value="<?=$hinh?>">
                                                <input type="hidden" name="don_gia" value="<?=$don_gia?>">
                                                <i class="fas fa-shopping-cart text-primary mr-1 add-cart"></i><input type="submit" name="addtocart" class=" btn btn-sm text-dark p-0  btn btn-default add-to-cart"  value="Giỏ hàng" >
                                            </form>
                                        </div>
                                    </div>
                                    <a href="<?= $linksp ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i> Chi tiết</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                    <div class="col-12 pb-1">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center mb-3">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->
    <?php ob_end_flush(); ?>