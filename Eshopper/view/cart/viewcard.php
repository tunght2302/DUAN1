<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Hình ảnh</td>
							<td class="description">Tên sản phẩm</td>
							<td class="price">Giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Thành tiền</td>
                            <td>Xóa </td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
                            <?php
                             $tong = 0;
                             $i = 0;
                             foreach ($_SESSION['mycart'] as $cart) {
                                $hinh = $img_path . $cart[2];
                                $ttien = $cart[3] * $cart[4];
                                $tong += $ttien;
                               
                              
                                    $xoasp_td = '<td><a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xóa"></a></td>';
                              
                                echo '
                                <tr>
                                
                                <td class="cart_product">
                                <img src="' . $hinh. '" alt="" height="80px">
                                </td>
                                <td class="cart_description">
								<h4><a href="">' . $cart[1] . '</a></h4>
								<p> ID: ' . $cart[0] . '</p>
							    </td>
                               
                                <td class="cart_price">
								<p>$' . $cart[3] . '</p>
							</td>
                            <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href=""> + </a>
                                <input class="cart_quantity_input" type="text" name="quantity" value="' . $cart[4] . '" autocomplete="off" size="2">
                                <a class="cart_quantity_down" href=""> - </a>
                            </div>
                        </td>
                        <td class="cart_total">
								<p class="cart_total_price">$' . $ttien . '</p>
							</td>
                            '.$xoasp_td.'
                               
                            </tr>';
                            $i+=1;
                            
                            }
                            echo '<tr>
                            <td class="cart_description"colspan="4">
                            <h4><a href="">Tổng đơn hàng:</a></h4>
                           
                            </td>
                    
                            <td class="cart_total">
                            <p class="cart_total_price">$' . $tong . '</p>
                        </td>
                            
                        </tr>';
                            ?>
							
						
					
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

