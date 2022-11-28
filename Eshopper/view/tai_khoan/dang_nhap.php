<section id="form"><!--form-->
		<div class="container">
            <?php
                if(isset($_SESSION['ten_dangnhap'])){
                    extract($_SESSION['ten_dangnhap']);
            ?>
                <div>Xin chào
                    <?=$ten_dangnhap?>
                </div>
                <div>
                    <li><a href="index.php?act=mybill">Đơn hàng của tôi</a></li>
                    <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                    <li><a href="index.php?act=cap_nhat">Cập nhật thông tin</a></li>
                    <li><a href="admin/index.php">Đăng nhập Admin</a></li>
                    <li><a href="index.php?act=thoat">Đăng xuất</a></li>
                </div>
            <?php
                }else{
            ?>
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Đăng nhập</h2>
						<form action="index.php?act=dangnhap" method="POST">
							<input type="text" name="ten_dangnhap" placeholder="Name" />
							<input type="password" name="mat_khau" placeholder="Password" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Ghi nhớ tài khoản
							</span>
							<input type="submit" name="dang_nhap" class="btn btn-default" value="Đăng nhập"></input>
						</form>
                        <li><a href="index.php?act=quen_matkhau">Quên mật khẩu</a></li>
                        <li><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
					</div><!--/login form-->
                 <?php } ?>
				</div>
			</div>
		</div>
	</section><!--/form-->