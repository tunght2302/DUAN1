<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<?php
					if(isset($_SESSION['ten_dangnhap'])&&(is_array($_SESSION['ten_dangnhap']))){
						extract($_SESSION['ten_dangnhap']);
					}
				?>
				<div class="col-sm-4">
				<div class="signup-form"><!--sign up form-->
						<h2>Cập nhật tài khoản</h2>
                        
						<form action="index.php?act=cap_nhat" method="POST">
							<input type="text" name="ten_dangnhap" placeholder="Tên đăng nhập"value="<?=$ten_dangnhap?>"/>
							<input type="password" name="mat_khau" placeholder="Mật khẩu" value="<?=$mat_khau?>"/>
							<input type="email" name="email" placeholder="Email"value="<?=$email?>"/>
							<input type="text" name="ho_ten" placeholder="Họ và Tên"value="<?=$ho_ten?>"/>
							<input type="text" name="dia_chi" placeholder="Địa chỉ"value="<?=$dia_chi?>"/>
							<input type="text" name="so_dien_thoai" placeholder="Số điện thoại"value="<?=$so_dien_thoai?>"/>
                            <div style="display:flex">
								<input type="hidden" name="id_nguoidung" value="<?=$id_nguoidung?>">
								<input type="submit" name="cap_nhat" style="height:30px;" class="btn btn-default" value="Cập nhật"></input>
								<input style="width:120px;margin-left: 20px;height:30px ;" type="reset" value="Nhập lại"/>
                            </div>
						</form>
                        <h style="color:red;">
                            <?php
                            if(isset($thongbao) &&($thongbao!= "")){
                                echo $thongbao;
                            }
                            ?>
                        </h>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->