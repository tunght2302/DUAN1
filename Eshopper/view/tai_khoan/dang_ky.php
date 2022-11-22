<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				
				<div class="col-sm-4">
				<div class="signup-form"><!--sign up form-->
						<h2>Đăng kí thành viên</h2>
						<form action="index.php?act=dangky" method="POST">
							<input type="text" name="ten_dangnhap" placeholder="Name"/>
							<input type="email" name="email" placeholder="Email Address"/>
							<input type="password" name="mat_khau" placeholder="Password"/>
                            <div style="display:flex">
                            <input type="submit" name="dangky" style="height:30px;" class="btn btn-default" value="Đăng kí"></input>
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