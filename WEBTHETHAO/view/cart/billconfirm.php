  <!-- Navbar Start -->
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
                    <a href="index.php?act=dangnhap" class="nav-item nav-link">Tài khoản</a>
                    <a href="index.php?act=dangky" class="nav-item nav-link">Đăng kí</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold  mb-3">Cảm ơn quý khách đã đặt hàng</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Checkout Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8">
				<?php
                $id=$_GET['id'];
                $bill = loadone_bill($id);
                // echo '<pre>';
                // print_r($bill);die;
					if(isset($bill)&&(is_array($bill))){
						extract($bill);
					}
                    
            	?>
                <?php if(isset($_SESSION['ten_dangnhap'])){

                 ?>
                <div class="mb-4">
                    <h4 class="font-weight-semi-bold mb-4">Thông tin đặt hàng</h4>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Người đặt hàng</label>
                            <input class="form-control" type="text" value="<?=$_SESSION['ten_dangnhap']['ho_ten']?>" placeholder="Người đặt hàng" disabled >
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Địa chỉ</label>
                            <input class="form-control" type="text" value="<?=$_SESSION['ten_dangnhap']['dia_chi']?>" placeholder="Địa chỉ"disabled>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" value="<?=$_SESSION['ten_dangnhap']['email']?>" placeholder="E-mail"disabled>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Số điện thoại</label>
                            <input class="form-control" type="text" value="<?=$_SESSION['ten_dangnhap']['so_dien_thoai']?>" placeholder="Số điện thoại"disabled>
                        </div>
                    </div>
                </div>
                <?php }else{
                    ?>
                    <h1>Bạn cần đăng nhập để thanh toán</h1>
                    <?php
                }?>
            </div>
            <div class="col-lg-4">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Thông tin đơn hàng</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <p>Mã đơn hàng</p>
                            <p><?= $bill['id'] ?></p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Ngày đặt hàng</p>
                            <p><?=$bill['ngaydathang']?></p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Tổng đơn hàng</p>
                            <p>$<?=$bill['total']?></p>
                        </div>
                    </div>
                    
                </div>
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Phương thức thanh toán</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment" id="paypal">
                                <?php
									$pttt=get_pttt($bill['bill_pttt']);
									echo '<p>'.$pttt.'</p>
                                    ';
									?>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout End -->
