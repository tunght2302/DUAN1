   <!-- Navbar Start -->
   <div class="container-fluid mb-5">
       <div class="row border-top px-xl-5">
           <div class="col-lg-3 d-none d-lg-block">
               <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                   <h6 class="m-0">Danh mục</h6>
                   <i class="fa fa-angle-down text-dark"></i>
               </a>
               <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                   <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">

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
                   <a href="" class="text-decoration-none d-block d-lg-none">
                       <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                   </a>
                   <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                       <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                       <div class="navbar-nav mr-auto py-0">
                           <a href="index.php" class="nav-item nav-link active">Home</a>

                           <a href="index.php?act=mybill" class="nav-item nav-link">Đơn hàng của tôi</a>

                           <a href="index.php?act=lienhe" class="nav-item nav-link">Liên hệ</a>
                       </div>
                       <div class="navbar-nav ml-auto py-0">
                           <a href="index.php?act=dangnhap" class="nav-item nav-link">Tài Khoản</a>
                           <?php
                            if (isset($_SESSION['ten_dangnhap'])) {
                                $none = 'none';
                            } else {
                                $none = 'block';
                            }
                            ?>
                           <a style="display: <?= $none ?>;" href="index.php?act=dangky" class="nav-item nav-link">Đăng Ký</a>
                       </div>
                   </div>
               </nav>
               <div id="header-carousel" class="carousel slide" data-ride="carousel">
                   <div class="carousel-inner">
                       <div class="carousel-item active" style="height: 410px;">
                           <img class="img-fluid" src="./upload/vip1.png" alt="Image">
                           <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                               <div class="p-3" style="max-width: 700px;">
                                   <h4 class="text-light text-uppercase font-weight-medium mb-3"></h4>
                                   <h5 class="display-4 text-white font-weight-semi-bold mb-4">Chào mừng bạn đến với<span class="text-primary font-weight-bold px-3 mr-1 ">E Shopper</span></h5>
                                   <a href="index.php" class="btn btn-light py-2 px-3">Trang chủ</a>
                               </div>
                           </div>
                       </div>
                       <div class="carousel-item" style="height: 410px;">
                           <img class="img-fluid" src="./upload/vip2.png" alt="Image">
                           <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                               <div class="p-3" style="max-width: 700px;">
                                   <h4 class="text-light text-uppercase font-weight-medium mb-3"></h4>
                                   <h5 class="display-4 text-white font-weight-semi-bold mb-4">Chào mừng bạn đến với<span class="text-primary font-weight-bold px-3 mr-1 ">E Shopper</span></h5>
                                   <a href="index.php" class="btn btn-light py-2 px-3">Trang chủ</a>
                               </div>
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
   <!-- Shop Start -->

   <div class="container-fluid pt-5">
       <div class="row px-xl-5">
           <!-- Shop Sidebar Start -->
           <?php include 'box_left.php' ?>
           <!-- Shop Sidebar End -->


           <!-- Shop Product Start -->
           <div class="col-lg-9 col-md-12">
               <div class="row pb-3">
                   <div class="col-12 pb-1">
                       <div class="d-flex align-items-center justify-content-between mb-4">
                           <div class="input-group">
                               <form action="index.php?act=sanpham" method="post" style="display: flex;">
                                   <div>
                                       <input type="text" class="form-control" name="kyw" placeholder="Tìm kiếm">

                                   </div>
                                   <div class="input-group-append">
                                       <input style="border:1.5px solid pink;margin-left:5px;background-color:whitesmoke;border-radius:5px" type="submit" class="input-group-text  text-primary" value="Tìm Kiếm">
                                       </input>
                                   </div>
                               </form>
                           </div>
                       </div>
                   </div>
                   <?php
                    $i = 0;
                    foreach ($dssp as $sp) {
                        extract($sp);
                        $linksp = "index.php?act=chi_tiet_sanpham&id=" . $id_sanpham;
                        $img = $img_path . $hinh;
                    ?>
                       <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                           <div class="card product-item border-0 mb-4">
                               <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                   <a href=" <?= $linksp ?>"><img style="width: 300px; height: 280px;" src="<?= $img ?>" alt=""></a>
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
                       </div>

                   <?php
                        $i += 1;
                    }
                    ?>
               </div>
           </div>
           <!-- Shop Product End -->
       </div>
   </div>
   <!-- Shop End -->