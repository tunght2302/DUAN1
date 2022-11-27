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
                            <a href="index.php?act=dangky" class="nav-item nav-link">Register</a>
                        </div>
                    </div>
                </nav>
<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">LOGIN</h1>
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
            <?php
                if(isset($_SESSION['ten_dangnhap'])){
                    extract($_SESSION['ten_dangnhap']);
            ?>
                
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Xin chào <?=$ten_dangnhap?></h4>
                    </div>
                    <div class="card-body">
                        <div>
                            <li><a href="index.php?act=quen_matkhau">Quên mật khẩu</a></li>
                            <li><a href="index.php?act=cap_nhat">Cập nhật thông tin</a></li>
                            <li><a href="admin/index.php">Đăng nhập Admin</a></li>
                            <li><a href="index.php?act=thoat">Đăng xuất</a></li>
                        </div>
                    </div>
                    
                </div>
                
            <?php
                }else{
                    
            ?>
    <div class="row px-xl-5">
        <div class="col-lg-7 mb-5">
            <div class="contact-form">
                <div id="success"></div>
                <h5 class="font-weight-semi-bold mb-3">Đăng nhập</h5>
                <form action="index.php?act=dangnhap" method="POST">
                    <div class="control-group">
                        <input type="text" class="form-control" name="ten_dangnhap" placeholder="Your Name" required="required" data-validation-required-message="Không được bỏ trống" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="password" class="form-control"  name="mat_khau" placeholder="Password" required="required" data-validation-required-message="Không được bỏ trống" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <span>
						<input type="checkbox" class="checkbox"> 
							Ghi nhớ tài khoản
					</span>
                    <div style="margin:5px;">
                        <input class="btn btn-primary py-2 px-4" type="submit" name="dang_nhap"  value="Đăng nhập" id="sendMessageButton"></input>
                    </div>
                    <li><a href="index.php?act=quen_matkhau">Quên mật khẩu</a></li>
                    <li><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
                </form>
                <?php }?>
            </div>
        </div>
      
    </div>
</div>
<!-- Contact End -->


<!-- Footer Start -->

<!-- Footer End -->