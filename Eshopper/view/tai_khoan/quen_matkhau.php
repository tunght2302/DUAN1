<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				
				<div class="col-sm-4">
				<div class="signup-form"><!--sign up form-->
						<h2>Quên mật khẩu</h2>
						<form action="index.php?act=quen_matkhau" method="POST">
							<input type="email" name="email" placeholder="Email Address"/>
                            <div style="display:flex">
                            <input type="submit" name="guiemail" style="height:30px;" class="btn btn-default" value="Gửi"></input>
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