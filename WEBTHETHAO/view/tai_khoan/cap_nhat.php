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
                           
                            <a href="" class="nav-item nav-link">Shop Detail</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="" class="dropdown-item">Shopping Cart</a>
                                    <a href="" class="dropdown-item">Checkout</a>
                                </div>
                            </div>
                            <a href="" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                            <a href="index.php?act=dangnhap" class="nav-item nav-link">Login</a>
                            <a href="" class="nav-item nav-link">Register</a>
                        </div>
                    </div>
                </nav>
<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">REGISTER</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="index.php">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Contact</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
				<?php
					if(isset($_SESSION['ten_dangnhap'])&&(is_array($_SESSION['ten_dangnhap']))){
						extract($_SESSION['ten_dangnhap']);
					}
				?>
        <div class="col-lg-7 mb-5">
            <div class="contact-form">
                
                <h5 class="font-weight-semi-bold mb-3">Cập nhật tài khoản</h5>
				<form action="index.php?act=cap_nhat" method="POST"> 
                    <div class="control-group">
                        <input type="text" class="form-control" name="ten_dangnhap" value="<?=$ten_dangnhap?>" placeholder="Tên đăng nhập" required="required" data-validation-required-message="Không được bỏ trống" />
                    </div>
					<div class="control-group" style="margin:10px 0px;">
                        <input type="password" class="form-control"  name="mat_khau" value="<?=$mat_khau?>" placeholder="Mật khẩu" required="required" data-validation-required-message="Không được bỏ trống" />
                    </div>
                    <div class="control-group" style="margin:10px 0px;">
                        <input type="email" class="form-control"  name="email" value="<?=$email?>" placeholder="Email" required="required" data-validation-required-message="Không được bỏ trống" />
                    </div>
					<div class="control-group">
                        <input type="text" class="form-control" name="ho_ten" value="<?=$ho_ten?>" placeholder="Họ và tên" required="required" data-validation-required-message="Không được bỏ trống" />
                    </div>
					<div class="control-group"style="margin:10px 0px;">
                        <input type="text" class="form-control" name="dia_chi" value="<?=$dia_chi?>" placeholder="Địa chỉ" required="required" data-validation-required-message="Không được bỏ trống" />
                    </div>
					<div class="control-group">
                        <input type="text" class="form-control" name="so_dien_thoai" value="<?=$so_dien_thoai?>" placeholder="Số điện thoại" required="required" data-validation-required-message="Không được bỏ trống" />
                    </div>
					<div style="display:flex ;">
						<input type="hidden" name="id_nguoidung" value="<?=$id_nguoidung?>">
						<div style="margin:10px 0px;">
							<input class="btn btn-primary py-2 px-4" type="submit" value="Cập nhật" name="cap_nhat">
								</input>
						</div>
						<div style="margin:10px;">
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