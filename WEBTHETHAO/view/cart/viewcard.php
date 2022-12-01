
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
                            <a href="index.php?act=mybill"  class="nav-item nav-link">Đơn hàng của tôi</a>
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
            <h1 class="font-weight-semi-bold text-uppercase mb-3">GIỎ HÀNG</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="index.php">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shopping Cart</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class=" table-responsive mb-5" style="text-align:center ;">
                <table class="table table-bordered text-center mb-0">
                   <?php viewcart(); ?>
                </table>
            </div>
            <div class="input-group">
                <div class="input-group-append" >
                    <a href="index.php?act=bill"  style="margin-right:30px;"><button class="btn btn-primary" >Đặt hàng</button></a>
                    <a href="index.php"><button class="btn btn-primary">Tiếp tục mua hàng</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->


