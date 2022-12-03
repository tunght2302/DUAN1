<div class="row adtitle">
    <h1>Chi tiết đơn hàng</h1>
</div>
<div class="frm_content">
    <form action="" method="POST">
        <input type="text" name="kyw" style="width: 200px;">
        <input type="submit" name="search" id="" value="Search">
    </form>

    <div class="row mb frmlist">
            <table>
                <tr>
                    <th></th>
                    <th>THÔNG TIN KHÁCH HÀNG</th>
                    <th>SỐ LƯỢNG HÀNG</th>
                    <th>GIÁ TRỊ ĐƠN HÀNG</th>
                    <th>NGÀY ĐẶT HÀNG</th>
                    <th>PHƯƠNG THỨC THANH TOÁN</th>
                </tr>
                <?php
                extract($onebill);
                $kh = $bill_name . '
                <br> ' . $bill_email . '
                <br> ' . $bill_address . '
                <br> ' . $bill_tel;

                $pttt = get_pttt('bill_pttt');
                $countsp = loadall_cart_count($id);
                
                echo '
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' .$kh. '</td>
                            <td>' . $countsp . '</td>
                            <td>' . $total . '</td>
                            <td>' . $ngaydathang . '</td>
                            <td><input type="hidden" value=' . $bill_pttt . '>
                                ' . $pttt . '
                            </td>
                        </tr>';
                ?>
                
            </table>
            
    </div>
    <div class="row mb frmlist">
        <table>
            <tr>
                <th>TÊN SẢN PHẨM</th>
                <th>GIÁ BÁN</th>
                <th>SỐ LƯỢNG </th>
                <th>HÌNH ẢNH</th>
                <th>TỔNG CỘNG</th>
            </tr>
            <?php
            $tong = 0;
            $i = 0;
            foreach ($_SESSION['mycart'] as $cart) {
                extract($cart);
                // $hinh = $img_path . $cart[2];
                $ttien = $cart[3] * $cart[4];
                $tong += $ttien;
                $imgpath = "../upload/" . $cart[2];
                if (is_file($imgpath)) {
                    $hinh = "<img src='" . $imgpath . "' width='50px' height='50px';>";
                } else {
                    // echo "Không có ảnh";
                }
                echo  '<tr>
                               
                                <td>' . $cart[1] . '</td>
                                <td>' . $cart[3] . '</td>
                                <td>' . $cart[4] . '</td>
                                <td>' . $hinh . '</td>
                                <td>' . $ttien . '</td>
                            </tr>';
            }
            ?>

        </table>
    </div>
</div>
</div>
</div>