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
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Đăng Ký</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="index.php">Trang Chủ</a></p>
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
                <h5 class="font-weight-semi-bold mb-3">Đăng kí</h5>
                <form action="index.php?act=dangky" method="POST">
                    <div style="display:flex">
                        <div style="margin-right:35px;">
                            <div class="control-group">
                                <input type="text" class="form-control" style="border:1.5px solid gray" name="ten_dangnhap" placeholder="Tên đăng nhập" />
                                <p class="help-block text-danger"><?php echo isset($error['ten_dangnhap']) ? $error['ten_dangnhap'] : ''; ?></p>

                            </div>
                            <div class="control-group" style="margin:10px 0px;">
                                <input type="email" class="form-control" style="border:1.5px solid gray" name="email" placeholder="Email" />
                                <p class="help-block text-danger"><?php echo isset($error['email']) ? $error['email'] : ''; ?></p>

                            </div>
                            <div class="control-group">
                                <input type="password" class="form-control" style="border:1.5px solid gray" name="mat_khau" placeholder="Mật khẩu" />
                                <p class="help-block text-danger"><?php echo isset($error['mat_khau']) ? $error['mat_khau'] : ''; ?></p>
                            </div>
                        </div>
                        <div>
                            <div class="control-group">
                                <input type="text" class="form-control" style="border:1.5px solid gray" name="ho_ten" placeholder="Họ và Tên" />
                                <p class="help-block text-danger"><?php echo isset($error['ho_ten']) ? $error['ho_ten'] : ''; ?></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" style="border:1.5px solid gray" name="so_dien_thoai" placeholder="Số điện thoại" />
                                <p class="help-block text-danger"><?php echo isset($error['so_dien_thoai']) ? $error['so_dien_thoai'] : ''; ?></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" style="border:1.5px solid gray" name="dia_chi" placeholder="Địa chỉ" />
                                <p class="help-block text-danger"><?php echo isset($error['dia_chi']) ? $error['dia_chi'] : ''; ?></p>
                            </div>
                        </div>
                    </div>

                        <div style="display:flex ;">
                            <div style="margin:10px 0px;">
                                <input class="btn btn-primary py-2 px-4" type="submit" value="Đăng ký" name="dangky">
                                </input>
                            </div>
                            <div style="margin:10px;">
                                <button class="btn btn-primary py-2 px-4" type="reset" name="reset">Nhập
                                    lại</button>
                            </div>
                        </div>
                </form>
                <h style="color:red;">
                    <?php
                    if (isset($thongbao) && ($thongbao != "")) {
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