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
                if(isset($hoaodon)&&(is_array($hoadon))){
                    extract($hoadon);
                }
            ?>
	        <!--/checkout-options-->
	        <div style="border:2px solid gray;padding:10px">
	            <div class="step-one">
	                <h2 style="text-align:center ;" class="heading">Thông tin đơn hàng</h2>
	            </div>
	            <div class="checkout-options">
	                <li>Mã đơn hàng:<?=$hoadon['id_hoadon']?></li>
                    <li>Ngày đặt hàng:<?=$hoadon['ngay_dathang']?></li> 
                    <li>Tổng đơn hàng:<?=$hoadon['total']?></li>
	            </div>
	        </div>


	        <!--/register-req-->

	        <div class="shopper-informations">
	            <div class="row" style="border:2px solid gray;padding:15px; margin-left:0px;width:1140px;margin-top:15px;">
	                <div class="col-sm-6">
	                    <div class="shopper-info">
	                        <p>Thông tin đặt hàng</p>
	                        <form>
	                            <input type="text" value="<?$hoadon['ten_hoadon']?>" placeholder="Người đặt hàng">
	                            <input type="text" value="<?$hoadon['diachi_hoadon']?>"placeholder="Địa chỉ">
	                            <input type="email"value="<?$hoadon['email_hoadon']?>" placeholder="Email">
	                            <input type="text" value="<?$hoadon['sdt_hoadon']?>" placeholder="Số điện thoại">
	                        </form>
	                    </div>
	                </div>
	                <div class="">
	                    <div class="bill-to">
	                        <p style="text-align:center ;">Phương thức thanh toán</p>
	                        <div class="form-one "style="text-align:center;">
                                <h3><?=$hoadon['phuong_thuc_tt']?></h3>
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
                                            $tong = 0;
                                            $i = 0;
                                            echo '
                                            <tr class="cart_menu">
                                                    <td class="image">Hình ảnh</td>
                                                    <td class="description">Tên sản phẩm</td>
                                                    <td class="price">Giá</td>
                                                    <td class="quantity">Số lượng</td>
                                                    <td class="total">Thành tiền</td>
                                                    <td></td>
                                                </tr>';
                                            hoadon_chitiet($hoadon_chitiet);
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