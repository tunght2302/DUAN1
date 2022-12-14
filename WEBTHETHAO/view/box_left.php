<div class="col-lg-3 col-md-12">

    <!-- Color Start -->
    <div class="border-bottom mb-4 pb-4">
        <h5 class="font-weight-semi-bold mb-4">Top yêu thích</h5>
        <form>
            <div class="">
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
        <!-- Price Start -->
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" style="height: 410px;">
                    <img class="img-fluid" src="./upload/vip5.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <!-- <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                            <h3 class="display-4 text-white font-weight-semi-bold mb-4">Fashionable Dress</h3> -->
                            <a href="index.php" class="btn btn-light py-2 px-3">Trang chủ</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="height: 410px;">
                    <img class="img-fluid" src="./upload/vip3.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <!-- <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                            <h3 class="display-4 text-white font-weight-semi-bold mb-4">Fashionable Dress</h3> -->
                            <a href="index.php" class="btn btn-light py-2 px-3">Trang chủ</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="height: 410px;">
                    <img class="img-fluid" src="./upload/vip4.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <!-- <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                            <h3 class="display-4 text-white font-weight-semi-bold mb-4">Fashionable Dress</h3> -->
                            <a href="index.php" class="btn btn-light py-2 px-3">Trang chủ</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="height: 410px;">
                    <img class="img-fluid" src="./upload/vip6.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <!-- <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                            <h3 class="display-4 text-white font-weight-semi-bold mb-4">Fashionable Dress</h3> -->
                            <a href="index.php" class="btn btn-light py-2 px-3">Trang chủ</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div style="width:30px; height:30px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div style="width:30px; height:30px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a> -->
        </div>
        <!-- Price End -->
    </div>
</div>