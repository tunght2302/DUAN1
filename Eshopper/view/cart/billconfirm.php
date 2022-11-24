<div class="row mb box">
    <div class="box_left">
        <div class="mb">
            <div class="box_title">CẢM ƠN</div>
            <div class="box_content" style="text-align:center;">
                <h2>Cảm ơn quý khách đã đặt hàng</h2>
            </div>
        </div>
        <?php
            if(isset($bill) && (is_array($bill))){
                extract($bill);
            }
        ?>
        <div class="mb">
            <div class="box_title">THÔNG TIN ĐƠN HÀNG</div>
            <div class="box_content" style="text-align:center;">
                <li>Mã đơn hàng: DAM-<?=$bill['id'];?></li>
                - <li>Ngày đặt hàng :  <?=$bill['ngaydathang'];?></li>
                - <li>Tổng đơn hàng :<?=$bill['total'];?></li>
                - <li>Phương thức thanh toán :<?=$bill['bill_pttt'];?></li>
            </div>
        </div>
        <div class="mb">
            <div class="box_title">THÔNG TIN ĐẶT HÀNG</div>
            <div class="box_content billform">
                <table>
                    <tr>
                        <th>Người đặt hàng</th>
                        <td><?=$bill['bill_name'];?></td>
                    </tr>
                    <tr>
                        <th>Địa chỉ</th>
                        <td><?=$bill['bill_address'];?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?=$bill['bill_email'];?></td>
                    </tr>
                    <tr>
                        <th>Điện thoại</th>
                        <td><?=$bill['bill_tel'];?></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="mb">
            <div class="box_title">CHI TIẾT GIỎ HÀNG</div>
            <div class="box_content cart mb">
                <table border="1">
                    <?php
                        bill_chi_tiet($billct);                  
                    ?>

                </table>
            </div>
            <div class="mb bill">
                <a href="index.php"><input type="submit" value="Về trang chủ"></a>
            </div>
        </div>
    </div>
    <div class="box_right">
        <?php
        include "./view/boxright.php";
        ?>
    </div>
</div>