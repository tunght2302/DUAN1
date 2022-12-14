<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Chi tiết đơn hàng</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th></th>
                                <th>THÔNG TIN KHÁCH HÀNG</th>
                                <th>SỐ LƯỢNG MẶT HÀNG</th>
                                <th>GIÁ TRỊ ĐƠN HÀNG</th>
                                <th>NGÀY ĐẶT HÀNG</th>
                                <th>PHƯƠNG THỨC THANH TOÁN</th>
                            </tr>
                        </thead>
                        <?php
                        extract($onebill);
                        $pttt = get_pttt('bill_pttt');
                        $countsp = loadall_cart_count($id);
                        // echo '<pre>';
                        // print_r($onebill);
                        ?>
                        <?php
                        $onetaikhoan = loadone_taikhoan($onebill['iduser']);
                        extract($onetaikhoan);
                        $kh = $onetaikhoan['ho_ten'] . '
                            <br> ' . $onetaikhoan['email'] . '
                            <br> ' . $onetaikhoan['dia_chi'] . '
                            <br> ' . $onetaikhoan['so_dien_thoai'];
                        ?>

                        <tbody>
                            <tr>
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><?= $kh ?></td>
                                <td><?= $countsp ?></td>
                                <td><?= number_format($total)?>VNĐ</td>
                                <td><?= $ngaydathang ?></td>
                                <td><input type="hidden" value='<?= $bill_pttt ?>'>
                                    <?= $pttt ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <h1>Thông tin đơn hàng</h1>
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>TÊN SẢN PHẨM</th>
                                <th>GIÁ BÁN</th>
                                <th>SỐ LƯỢNG </th>
                                <th>HÌNH ẢNH</th>
                                <th>TỔNG CỘNG</th>
                            </tr>
                        </thead>
                        <?php
                        $allcart = loadall_cart_ct($iduser,$ngaydathang);
                        $tong = 0;
                        $i = 0;
                        foreach ($allcart as $cart) {
                            extract($cart);
                            $ttien = $cart["soluong"] * $cart["don_gia"];
                            $tong += $ttien;
                            // echo'<pre>';
                            // print_r($cart);
                        ?>
                            <tbody>
                                <tr>
                                <tr>
                                    <td><?= $cart['ten_sanpham'] ?></td>
                                    <td><?= number_format($cart['don_gia'])?>VNĐ</td>
                                    <td><?= $cart['soluong'] ?></td>
                                    <td><img src="../upload/<?= $cart['hinh'] ?>" width="100px" alt=""></td>
                                    <td><?= number_format($ttien)?>VNĐ</td>
                                </tr>
                            </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>