	<section id="cart_items">
	    <div class="container">
	        <div style="border:2px solid gray;padding:10px;margin-bottom:15px;">
	            <div class="step-one">
	                <h2 style="text-align:center ;" class="heading">Cảm ơn</h2>
	            </div>
	            <div class="checkout-options">
	                <h3 style="text-align:center";>Cảm ơn quý khách đã đặt hàng</h3>
	            </div>
	        </div>
            <?php
                if(isset($bill)&&(is_array($bill))){
                    extract($bill);
                }
            ?>
	        <!--/checkout-options-->
	        <div style="border:2px solid gray;padding:10px">
	            <div class="step-one">
	                <h2 style="text-align:center ;" class="heading">Thông tin đơn hàng</h2>
	            </div>
	            <div class="checkout-options">
	                <li>Mã đơn hàng:<?=$bill['idbill']?></li>
                    <li>Ngày đặt hàng:<?=$bill['ngaydathang']?></li> 
                    <li>Tổng đơn hàng:<?=$bill['total']?></li>
	            </div>
	        </div>


	        <!--/register-req-->

	        <div class="shopper-informations">
	            <div class="row" style="border:2px solid gray;padding:15px; margin-left:0px;width:1140px;margin-top:15px;">
	                <div class="col-sm-6">
	                    <div class="shopper-info">
	                        <p>Thông tin đặt hàng</p>
	                        <form>
	                            <input type="text" value="<?$bill['ten_dangnhap']?>" placeholder="Người đặt hàng">
	                            <input type="text" value="<?$bill['bill_address']?>"placeholder="Địa chỉ">
	                            <input type="email"value="<?$bill['bill_email']?>" placeholder="Email">
	                            <input type="text" value="<?$bill['bill_tel']?>" placeholder="Số điện thoại">
	                        </form>
	                    </div>
	                </div>
	                <div class="">
	                    <div class="bill-to">
	                        <p style="text-align:center ;">Phương thức thanh toán</p>
	                        <div class="form-one "style="text-align:center;">
                                <h3><?=$bill['phuong_thuc_tt']?></h3>
	                        </div>
	                    </div>
	                </div>
	               
	            </div>
	        </div>
	        <div class="review-payment">
	            <h2>Thông tin giỏ hàng</h2>
	        </div>

	        <div class="table-responsive cart_info" style="padding:10px">
                <section id="cart_items">
                        <h3>Chi tiết giỏ hàng</h3>
                        <div>
                            <table class="table table-condensed">
                                <tbody>
                                    <tr>
                                        <?php
                                            viewcart();
                                        ?>
                                    </tr>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </section>
	        </div>
	    </div>
	</section>
	<!--/#cart_items-->