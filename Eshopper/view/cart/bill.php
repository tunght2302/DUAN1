<section id="do_action">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="chose_area">
                    <div class="login-form">
                        <?php
                        if (isset($_SESSION['ten_dangnhap'])) {

                            $ho_ten = $_SESSION['ten_dangnhap']['ho_ten'];
                            $email = $_SESSION['ten_dangnhap']['email'];
                            $dia_chi = $_SESSION['ten_dangnhap']['dia_chi'];
                            $so_dien_thoai = $_SESSION['ten_dangnhap']['so_dien_thoai'];
                        } else {

                            $ho_ten = "";
                            $email = "";
                            $dia_chi = "";
                            $so_dien_thoai = "";
                        }

                        ?>
                        <!--login form-->
            <form action="index.php?act=billconfirm" method="POST" style="padding:10px ;">
                        <h3>Thông tin đặt hàng</h3>
                            <input type="text" name="ho_ten" value="<?= $ho_ten ?>" placeholder="Người đặt hàng" />
                            <input type="email" name="email" value="<?= $email ?>" placeholder="Email" />
                            <input type="text" name="dia_chi" value="<?= $dia_chi ?>" placeholder="Địa chỉ" />
                            <input type="text" name="so_dien_thoai" value="<?= $so_dien_thoai ?>" placeholder="Số điện thoại" />
                            <input type="submit" name="dongydathang" value="Đồng ý đặt hàng">
                        </div>
                         <!--/login form-->
                        </div>
                </div>
                <div class="col-sm-6">
                    <div class="total_area">
                        <div style="padding:10px ;">
                            <div class="payment-options">
                                <h3>Phương thức thanh toán</h3>
                                <span>
                                    <label><input type="radio" name="pttt" checked>Trả tiền khi nhận hàng</label>
                                </span>
                                <span>
                                    <label><input type="radio" name="pttt">Chuyển khoản ngân hàng</label>
                                </span>
                                <span>
                                    <label><input type="radio" name="pttt">Thanh toán online</label>
                                </span>
                            </div>
                        </div>
                    </div>
                </div> 
            </form>
        </div>
        <div>
            <section id="cart_items">
                <div class="container">
                    <h3>Thông tin giỏ hàng</h3>
                    <div class="table-responsive cart_info">
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
                                            </tr>
                                           ';
                                    foreach ($_SESSION['mycart'] as $cart) {
                                        $hinh = $img_path . $cart[2];
                                        $ttien = $cart[3] * $cart[4];
                                        $tong += $ttien;
                                        echo '
                                                       <thead>
                                                         
                                                       </thead>
                                              
                                              <td class="cart_product">
                                               <img src="' . $hinh . '" alt="" height="80px">
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
                                          ';
                                        $i += 1;
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
                                </tr>
                            </tbody>
                        </table>
                        <div style="padding:10px;text-align:center;">
                        </div>
                    </div>
                </div>
            </section>
            <!--/#cart_items-->
        </div>

    </div>
</section>
<!--/#do_action-->