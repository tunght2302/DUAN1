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
                    <a href="index.php" class="nav-item nav-link">Trang Chủ</a>
                    <a href="index.php?act=mybill" class="nav-item nav-link">Đơn hàng của tôi</a>
                    <a href="index.php?act=lienhe" class="nav-item nav-link">Liên hệ</a>
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
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Đơn hàng của bạn</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="index.php">Trang Chủ</a></p>
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
                            <input class="form-control" type="text" name="ho_ten" value="<?= $ho_ten ?>" placeholder="Người đặt hàng" disabled>
                        </div>

                        <div class="col-md-6 form-group">
                            <label>Email</label>
                            <input class="form-control" type="text" name="email" value="<?= $email ?>" placeholder="Email" disabled>
                        </div>

                        <div class="col-md-6 form-group">
                            <label>Địa chỉ</label>
                            <input class="form-control" type="text" name="dia_chi" value="<?= $dia_chi ?>" placeholder="Địa chỉ" disabled>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Số điện thoại</label>
                            <input class="form-control" type="text" name="so_dien_thoai" value="<?= $so_dien_thoai ?>" placeholder="Số điện thoại" disabled>
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
                <?php $tong = 0;
                $i = 0;
                echo ' 
                <thead class="bg-secondary text-dark">
                    <th>Các sản phẩm</th>
                    <th>Giá bán</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                </thead>
                        ';
                if (!$_SESSION['mycart']) {
                    header('location:index.php');
                }
                foreach ($_SESSION['mycart'] as $cart) {
                    // echo '<pre>';
                    // print_r($cart);
                    // die;
                    $img = $img_path . $cart["hinh"];
                    $ttien = $cart["so_luong"] * $cart["don_gia"];
                    $tong += $ttien;
                    $xoasp_td = ' <td class="align-middle"><button class="btn btn-sm btn-primary"><a class="btn btn-default update" href="index.php?act=delcart&idcart=' . $i . '"><i class="fa fa-times"></i></a></button></td>';
                ?>
                    <thead class="bg-secondary text-dark">
                    
                    </thead>
                    <td class="align-middle">
                        <img src="<?= $img ?>" alt="" style="width:100px;margin-right:30px;"><?= $cart["ten_sanpham"] ?>
                    </td>

                    <td class="align-middle">
                        <?= $cart["don_gia"] ?>VNĐ
                    </td>
                    <td class="align-middle">
                        <div class="input-group quantity mx-auto" style="width: 100px;">
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-primary btn-minus" disabled>
                                        <i class="fa fa-minus" style="color:black;"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control form-control-sm bg-secondary text-center" value="<?= $cart["so_luong"] ?>">
                            <p><?php if (isset($_SESSION['loi'])) {
                                    echo $_SESSION['loi'];
                                }
                                unset($_SESSION['loi']);
                                ?></p>
                            <div>
                                <button class="btn btn-sm btn-primary btn-plus" disabled>
                                    <i class="fa fa-plus" style="color: black;"></i>
                                </button>
                            </div>
                        </div>
                    </td>
                    <td class="align-middle"><?= $ttien ?>VNĐ</td>
                   
                <?php } ?>
                     <tr>
                        <td class="bg-secondary text-dark">Tổng tiền</td>
                        <td colspan="4"><?=number_format($tong)?>VNĐ</td>
                    </tr>
            </table>
        </div>
            </div>
        </div>
    </div>
</div>
<!-- Checkout End -->