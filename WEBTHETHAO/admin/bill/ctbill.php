<div class="row adtitle">
    <h1>Chi tiết đơn hàng</h1>
</div>
<div class="frm_content">
    <div class="row mb frmlist">
        <table>
            <tr>
                <th></th>
                <th>THÔNG TIN KHÁCH HÀNG</th>
                <th>SỐ LƯỢNG MẶT HÀNG</th>
                <th>GIÁ TRỊ ĐƠN HÀNG</th>
                <th>NGÀY ĐẶT HÀNG</th>
                <th>PHƯƠNG THỨC THANH TOÁN</th>
            </tr>

            <?php
            extract($onebill);
            // echo'<pre>';
            // print_r($onebill);
            $pttt = get_pttt('bill_pttt');
            $countsp = loadall_cart_count($id);
            ?>
            <?php
            $onetaikhoan = loadone_taikhoan($onebill['iduser']);
            extract($onetaikhoan);
            $kh = $onetaikhoan['ho_ten'] . '
                        <br> ' . $onetaikhoan['email'] . '
                        <br> ' . $onetaikhoan['dia_chi'] . '
                        <br> ' . $onetaikhoan['so_dien_thoai'];
            ?>
            <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td><?= $kh ?></td>
                <td><?= $countsp ?></td>
                <td><?= $total ?></td>
                <td><?= $ngaydathang ?></td>
                <td><input type="hidden" value='<?= $bill_pttt ?>'>
                    <?= $pttt ?>
                </td>
            </tr>
        </table>

    </div>
    <h1>THÔNG TIN ĐƠN HÀNG </h1>
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
            $allcart = loadall_cart_ct($iduser);
            $tong = 0;
            $i = 0;
            foreach ($allcart as $cart) {
                extract($cart);
                // echo'<pre>';
                // print_r($cart);
            ?>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <td><?= $cart['ten_sanpham'] ?></td>
                <td><?= $cart['don_gia'] ?></td>
                <td><?= $cart['soluong'] ?></td>
                <td><img src="../upload/<?= $cart['hinh'] ?>" width="100px" alt=""></td>
                <td><?= $cart['thanhtien'] ?></td>
            <?php } ?>
        </table>
    </div>
</div>
</div>
</div>