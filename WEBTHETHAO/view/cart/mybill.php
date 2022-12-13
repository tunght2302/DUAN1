<!-- <-- Navbar Start -->
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
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class=" table-responsive mb-5" >
            <table class="table table-bordered text-center mb-0">
                <thead class="bg-secondary text-dark">
                    <th>Mã đơn hàng</th>
                    <th>Ngày đặt</th>
                    <th>Số lượng mặt hàng</th>
                    <th>Tổng giá trị đơn hàng</th>
                    <th>Tình trạng đơn hàng</th>
                    <?php
                        if(is_array($listbill)){
                            foreach ($listbill as $bill) {
                                extract($bill);
                                $ttdh = get_ttdh($bill['bill_status']);
                                $countsp = loadall_cart_count($bill['id']);
                                echo '<tr>
                                <td>'.$bill['id'].'</td>
                                <td>'.$bill['ngaydathang'].'</td>
                                <td>'.$countsp.'</td>
                                <td>$'.$bill['total'].'</td>
                                <td><input type="hidden" value="'.$bill_status.'">'.$ttdh.'</td>
                            </tr>';
                            }
                        }
                    ?>
            </table>
        </div>
    </div>
</div>