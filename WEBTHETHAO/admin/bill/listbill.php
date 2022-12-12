<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách đơn hàng</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <table class="table table-hover table-bordered">
                        <form action="index.php?act=listbill" method="POST">
                            <select style="border:2px solid black;border-radius:5px;margin:5px;" name="bill_status" style="padding: 2px; font-size: 1vw;">
                                <option value="0" selected>Tất cả</option>
                                <?php
                                foreach ($liststatus as $stt) {
                                    extract($stt);
                                    echo '<option value="' . $id . '">' . $name . '</option>';
                                }
                                ?>
                            </select> <br>
                            <input style="border:2px solid black;border-radius:5px;width: 200px;" type="text" name="keyword">
                            <input style="background-color:cadetblue;border-radius:5px;border:none;margin:5px; padding: 5px;" type="submit" name="search" id="" value="Search">
                        </form>
                        <thead>
                            <tr>
                                <th></th>
                                <th>Mã đơn hàng</th>
                                <th>Thông tin khách hàng</th>
                                <th>Số lượng mặt hàng</th>
                                <th>Giá trị đơn hàng</th>
                                <th>Ngày đặt hàng</th>
                                <th>Tình trạng đơn hàng</th>
                            </tr>
                        </thead>
                        <?php
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $ctbill = "index.php?act=ctbill&id=" . $id;
                            $upstatus = "index.php?act=upstatus&id=" . $id;
                            $delete = "index.php?act=deletestatus&id=" . $id;
                            $ttdh = get_ttdh($bill['bill_status']);
                            $countsp = loadall_cart_count($bill['id']);
                        ?>
                            <?php
                            $onetaikhoan = loadone_taikhoan($bill['iduser']);
                            extract($onetaikhoan);
                            $kh = 'Họ tên :' .  $onetaikhoan['ho_ten'] . '
                            <br> '.'Email :' . $onetaikhoan['email'] . '
                            <br> '.'Địa chỉ :' . $onetaikhoan['dia_chi'] . '
                            <br> '.'Số điện thoại :' . $onetaikhoan['so_dien_thoai'];
                            ?>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td><?= $bill['id'] ?></td>
                                    <td  style="width: 200px;"><?= $kh ?></td>
                                    <td><?= $countsp ?></td>
                                    <td><?= number_format($bill['total'])?>VNĐ</td>
                                    <td><?= $bill['ngaydathang'] ?></td>
                                    <td style="width: 200px;"><input type="hidden" value="<?= $bill['bill_status'] ?>">
                                        <?= $ttdh ?> <a href="<?= $upstatus ?>"><input style="background-color:gainsboro;border-radius:5px;border:none;margin:5px; padding: 5px;" type="button" value="Update">
                                    </td>
                                    <td>
                                        <label>
                                            <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
                                            <a href="<?=$ctbill?>"><input  style="background-color:gainsboro;border-radius:5px;border:none;margin:5px; padding: 5px;"type="button" value="Chi tiết đơn hàng"></a>
                                        </label>
                                    </td>
                                    <td><a href="<?=$delete?>"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                            </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>