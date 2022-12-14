<body>

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
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Liên hệ</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="index.php">Trang chủ</a></p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Liên hệ với chúng tôi</span></h2>
        </div>

        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form action="index.php?act=lienhe" method="POST">
                        <div class="control-group">
                            <input type="text" name="hoten" class="form-control" id="name" placeholder="Họ tên" />
                            <p class="help-block text-danger"><?php echo isset($error['hoten']) ? $error['hoten'] : ''; ?></p>
                        </div>
                        <div class="control-group">
                            <input type="email" name="email" class="form-control" id="email" placeholder=" Email" />
                            <p class="help-block text-danger"><?php echo isset($error['email']) ? $error['email'] : ''; ?></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" name="noidung" rows="6" id="message" placeholder="Nội dung"></textarea>
                            <p class="help-block text-danger"><?php echo isset($error['noidung']) ? $error['noidung'] : ''; ?></p>
                        </div>
                        <div>
                            <input class="btn btn-primary py-2 px-4" type="submit" name="gui" value="Gửi" id="sendMessageButton"></input>
                        </div>
                        <p style="color: red;">
                            <?php if (isset($thongbao) && $thongbao != "") {
                                echo $thongbao;
                            } ?>
                        </p>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <div class=" col-md-12 mb-5 pr-3 pr-xl-5">
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2914.3699847910602!2d105.76827441411162!3d21.02521829327702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454a51f1f12d7%3A0x4ce7e00995533328!2zTeG7uSDEkMOsbmggMiwgTeG7uSDEkMOsbmggMSwgTmFtIFThu6sgTGnDqm0sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e1!3m2!1svi!2s!4v1671021803454!5m2!1svi!2s"
                         width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <a href="" class="text-decoration-none">
                        <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">E</span>Shopper</h1>
                    </a>
                    <p>Cảm ơn quý khách đã tin tưởng dịch vụ của chúng tôi</p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Mỹ Đình 2,Nam Từ Liêm,Hà Nội</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>eshopper@gmail.com</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>068688886868</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->









</body>

</html>