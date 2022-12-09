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
            // $kh = $bill_name . '
            // <br> ' . $bill_email . '
            // <br> ' . $bill_address . '
            // <br> ' . $bill_tel;

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
            $allcart=loadall_cart();
            $tong = 0;
            $i = 0;
            foreach ($allcart as $cart ) {
                extract($cart);
                // echo'<pre>';
                // print_r($cart);
            ?>  
            <?php
            foreach(load_pro_cart($cart['idpro']) as $onepro){
                $onepro = load_pro_cart($cart['idpro']);
                extract($onepro);
            }
            
            // var_dump($onepro);
            ?>
               <td><?=$onepro['ten_sanpham']?></td>
               <td></td>
               <td></td>
               <td></td>
               <td></td>
            <?php }
            ?>
        </table>
    </div>
</div>
</div>
</div>