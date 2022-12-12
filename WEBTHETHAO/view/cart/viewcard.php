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
        <h1 class="font-weight-semi-bold text-uppercase mb-3">GIỎ HÀNG</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="index.php">Home</a></p>

        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Cart Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
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
                    <th></th>
                </thead>
                        ';

                foreach ($_SESSION['mycart'] as $cart) {
                    // echo '<pre>';
                    // print_r($_SESSION['mycart']);
                    // die;
                    $img = $img_path . $cart["hinh"];
                    $ttien = $cart["so_luong"] * $cart["don_gia"];
                    $tong += $ttien;
                    $xoasp_td = ' <td class="align-middle"><button class="btn btn-sm btn-primary"><a class="btn btn-default update" href="index.php?act=delcart&idcart=' . $i . '"><i class="fa fa-times"></i></a></button></td>';
                ?>
                    <thead class="bg-secondary text-dark">

                    </thead>
                    <td class="align-middle">
                        <img src="<?= $img ?>" alt="" style="width:100px;height:auto;margin-right:30px;"><?= $cart["ten_sanpham"] ?>
                    </td>

                    <td class="align-middle">
                        <?= $cart["don_gia"] ?> VNĐ
                    </td>
                    <td class="align-middle">
                        <div class="input-group quantity mx-auto" style="width: 100px;">
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-primary btn-minus">
                                    <a href="index.php?act=tru_san_pham&id=<?= $cart['id_sanpham'] ?>&ten=<?= $cart['ten_sanpham'] ?>&hinh=<?= $cart['hinh'] ?>&don_gia=<?= $cart['don_gia'] ?>&ttien=<?= $cart['ttien'] ?>&idcart=<?= $i ?>"><i class="fa fa-minus" style="color:black;"></i></a>
                                </button>
                            </div>
                            <input type="text" min="1" class="form-control form-control-sm bg-secondary text-center" value="<?= $cart["so_luong"] ?>">
                            <div>
                                <button class="btn btn-sm btn-primary btn-plus">
                                    <a href="index.php?act=cong_san_pham&id=<?= $cart['id_sanpham'] ?>&ten=<?= $cart['ten_sanpham'] ?>&hinh=<?= $cart['hinh'] ?>&don_gia=<?= $cart['don_gia'] ?>&ttien=<?= $cart['ttien'] ?>"><i class="fa fa-plus" style="color: black;"></i></a>
                                </button>
                            </div>
                        </div>
                    </td>
                    <td class="align-middle"><?= number_format($ttien); ?> VNĐ</td>
                    <?= $xoasp_td ?>

                <?php 
            $i += 1;
            } ?>
                <tr>
                    <td class="bg-secondary text-dark">Tổng tiền</td>
                    <td colspan="4"><?= number_format($tong)  ?> VND</td>
                </tr>
            </table>
        </div>
        <div class="input-group">
            <div class="input-group-append">
                <a href="index.php?act=bill" style="margin-right:30px;"><button class="btn btn-primary">Đặt hàng</button></a>
                <a href="index.php"><button class="btn btn-primary">Tiếp tục mua hàng</button></a>
            </div>
        </div>
    </div>
</div>
<!-- Cart End -->