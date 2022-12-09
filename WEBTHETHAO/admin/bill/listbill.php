<div class="row adtitle">
    <h1>Danh sách đơn hàng </h1>
</div>
<div class="frm_content">
    <form action="#" method="POST">
        <input type="text" name="kyw" style="width: 200px;">
        <input type="submit" name="search" id="" value="Search">
    </form>
    <div class="row mb frmlist">
        <table>
            <tr>
                <th></th>
                <th>MÃ ĐƠN HÀNG</th>
                <th>THÔNG TIN KHÁCH HÀNG</th>
                <th>SỐ LƯỢNG HÀNG</th>
                <th>GIÁ TRỊ ĐƠN HÀNG</th>
                <th>NGÀY ĐẶT HÀNG</th>
                <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                <th></th>
            </tr>
            <?php
            foreach ($listbill as $bill) :
                extract($bill);
                $ctbill = "index.php?act=ctbill&id=" . $id;
                $upstatus = "index.php?act=upstatus&id=" . $id;
                $delete = "index.php?act=deletestatus&id=" . $id;
                // $kh = $bill["bill_name"] . '
                //     <br> ' . $bill["bill_email"] . '
                //     <br> ' . $bill["bill_address"] . '
                //     <br> ' . $bill["bill_tel"];

                $ttdh = get_ttdh($bill['bill_status']);
                $countsp = loadall_cart_count($bill['id']);


            ?>
                <?php
                $onetaikhoan = loadone_taikhoan($bill['iduser']);
                extract($onetaikhoan);
                $kh = $onetaikhoan['ho_ten'] . '
                        <br> ' . $onetaikhoan['email'] . '
                        <br> ' . $onetaikhoan['dia_chi'] . '
                        <br> ' . $onetaikhoan['so_dien_thoai'];
                ?>

                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td><?= $bill['id'] ?></td>
                    <td><?=$kh?></td>
                    <td><?= $countsp ?></td>
                    <td><?= $bill['total'] ?></td>
                    <td><?= $bill['ngaydathang'] ?></td>

                    <td><input type="hidden" value="<?= $bill['bill_status'] ?>">
                        <?= $ttdh ?> <a href="<?= $upstatus ?>"> <input type="button" value="Update">
                    </td>
                    <td></a><a href="<?= $delete ?>"><input type="button" name="" id="" value="Xóa"></a>
                        <label>
                            <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
                            <a href="<?= $ctbill ?>"><input type="button" value="Chi tiết đơn hàng"></a>
                        </label>
                    </td>
                </tr>
            <?php endforeach ?>




        </table>
    </div>
    <form action="" method="POST">
        <label for="">
            <a href=""><input type="button" name="submit" id="" value="CHỌN TẤT CẢ"></a>
            <a href=""><input type="button" name="reset" id="" value="BỎ CHỌN TẤT CẢ"></a>
            <a href=""><input type="button" name="" id="" value="XÓA CÁC MỤC ĐÃ CHỌN"></a>
        </label>
    </form>
</div>