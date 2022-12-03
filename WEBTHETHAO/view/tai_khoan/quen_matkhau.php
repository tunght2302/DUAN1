<nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Trang Chủ</a>
                           
                            <a href="index.php?act=mybill" class="nav-item nav-link">Đơn hàng của tôi</a>
                            
                            <a href="" class="nav-item nav-link">Liên hệ</a>
                        </div>
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                            <a href="index.php?act=dangnhap" class="nav-item nav-link">Tài Khoản</a>
                            <a href="" class="nav-item nav-link">Đăng Ký</a>
                        </div>
                    </div>
                </nav>
<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Quên Mật Khẩu</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="index.php">Trang Chủ</a></p>
            <!-- <p class="m-0 px-2">-</p>
            <p class="m-0">Contact</p> -->
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-7 mb-5">
            <div class="contact-form">
                <div id="success"></div>
                <h5 class="font-weight-semi-bold mb-3">Quên mật khẩu</h5>
				<form action="index.php?act=quen_matkhau" method="POST"> 
                    <div class="control-group" style="margin-bottom:10px ;">
                        <input type="text" class="form-control" name="ten_dangnhap" placeholder="Tên đăng nhập" required="required" data-validation-required-message="Không được bỏ trống" />
                    </div>
                    <div class="control-group" style="margin-bottom:10px ;">
                        <input type="email" class="form-control"  name="email" placeholder="Email" required="required" data-validation-required-message="Không được bỏ trống" />
                    </div>
					<div style="display:flex ;">
						<div style="margin:5px;">
							<input class="btn btn-primary py-2 px-4" type="submit" value="Lấy lại mật khẩu" name="guiemail"></input>
						</div>
						<div style="margin:5px;">
							<input class="btn btn-primary py-2 px-4" type="reset" value="Nhập lại" name="reset"></input>
						</div>
					</div>
                </form>
				<h style="color:red;">
                     <?php
                     if(isset($thongbao) &&($thongbao!= "")){
                         echo $thongbao;
                     }
                      ?>
                </h>
            </div>
        </div>
      
    </div>
</div>
<!-- Contact End -->


<!-- Footer Start -->

<!-- Footer End -->