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
                    <a href="index.php?act=dangnhap" class="nav-item nav-link">Login</a>
                    <a href="index.php?act=dangky" class="nav-item nav-link">Register</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->


<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Checkout</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="index.php">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Checkout</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Checkout Start -->
<div class="container-fluid pt-5">
    <form action="index.php?act=billconfirm" method="POST">
        <div class="row px-xl-5">
            <?php
            if (isset($_SESSION['ten_dangnhap'])) {
                $ho_ten = $_SESSION['ten_dangnhap']['ho_ten'];
                $email = $_SESSION['ten_dangnhap']['email'];
                $dia_chi = $_SESSION['ten_dangnhap']['dia_chi'];
                $so_dien_thoai = $_SESSION['ten_dangnhap']['so_dien_thoai'];
            } else {
                $ho_ten = "";
                $email = "";
                $dia_chi = "";
                $so_dien_thoai = "";
            }

            ?>
            <div class="col-lg-8">
                <div class="mb-4">
                    <h4 class="font-weight-semi-bold mb-4">Thông tin đặt hàng</h4>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Người đặt hàng</label>
                            <input class="form-control" type="text" name="ho_ten" value="<?= $ho_ten ?>" placeholder="Người đặt hàng">
                        </div>

                        <div class="col-md-6 form-group">
                            <label>Email</label>
                            <input class="form-control" type="text" name="email" value="<?= $email ?>" placeholder="Email">
                        </div>

                        <div class="col-md-6 form-group">
                            <label>Địa chỉ</label>
                            <input class="form-control" type="text" name="dia_chi" value="<?= $dia_chi ?>" placeholder="Địa chỉ">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Số điện thoại</label>
                            <input class="form-control" type="text" name="so_dien_thoai" value="<?= $so_dien_thoai ?>" placeholder="Số điện thoại">
                        </div>
                        <div class="input-group">
                            <div class="input-group-append">
                                <button class="btn btn-primary"><input type="submit" class="btn btn-primary" name="dongydathang" value="Đồng ý đặt hàng" style="border:none;"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Phương thức thanh toán</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="pttt" id="paypal">
                                <label class="custom-control-label" for="paypal">Thanh toán online</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="pttt" id="directcheck">
                                <label class="custom-control-label" for="directcheck">Chuyển khoản khi nhận hàng</label>
                            </div>
                        </div>
                        <div class="">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="pttt" id="banktransfer" checked>
                                <label class="custom-control-label" for="banktransfer">Thanh toán trực tiếp</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
    <div class="container-fluid pt-5">
        <div class="row">
            <div class=" table-responsive mb-5" style="text-align:center ;">
                <table class="table table-bordered text-center mb-0">
                    <?php
                    $tong = 0;
                    $i = 0;
                    echo '
                            <thead class="bg-secondary text-dark">
                                <th>Các sản phẩm</th>
                                <th>Giá bán</th>
                                <th>Số lượng</th>
                                <th>Tổng cộng</th>
                            </thead>
                                ';
                    foreach ($_SESSION['mycart'] as $cart)
                        $hinh = $img_path . $cart[2];
                        $ttien = $cart[3] * $cart[4];
                        $tong += $ttien;
                        $i += 1;
                    //    $xoasp_td = '<td><a class="btn btn-default update" href="index.php?act=delcart&idcart='.$i.'"></a></td>';
                    $xoasp_td = ' <td class="align-middle"><button class="btn btn-sm btn-primary"><a class="btn btn-default update" href="index.php?act=delcart&idcart=' . $i . '"><i class="fa fa-times"></i></a></button></td>';
                    ?>
                    
                    <td class="align-middle">
                        <img src=" <?= $hinh ?>" alt="" style="width:100px;margin-right:30px;"><?= $cart[1] ?>
                    </td>
                    </td>

                    <td class="align-middle">
                        $<?= $cart[3] ?>
                    </td>
                    <td class="align-middle">
                        <form action="" method="POST">
                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-minus">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control form-control-sm bg-secondary text-center" value="<?= $cart[4] ?>">
                                <div>
                                    <button class="btn btn-sm btn-primary btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </td>
                    <td class="align-middle">$<?= $ttien ?></td>
                    
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Checkout End -->