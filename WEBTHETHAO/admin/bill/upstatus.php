
<div class="">
    <div class="row adtitle">
        <h1>Cập nhật trạng thái đơn hàng</h1>
    </div>
    <div class="frm_content">
        <form action="index.php?act=updatestatus" method="POST">
            <label for="" class="mb">TÌNH TRẠNG ĐƠN HÀNG<br>
            <select name="ttdh" id="">
                <option  value="<?= $bill_status ?>">Đã thanh toán</option>
                <option  value="<?= $bill_status ?>">Đơn hàng mới</option>
                <option  value="<?= $bill_status ?>">Đang vận chuyển</option>
                <option  value="<?= $bill_status ?>">Hoàn tất</option>
            </select>
                <!-- <input type="text" name="ttdh" value="<?= $bill_status ?>"><br><br> -->
            </label>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
            <br><br>
            <label for="">
                    <input type="hidden" name="id"  value="<?php if(isset($id)&&($id > 0)) echo $id ;?>">
                    <a href=""><input type="submit" name="submit" id="" value="CẬP NHẬT"></a>
                    <a href=""><input type="reset" name="reset" id="" value="NHẬP LẠI"></a>
                    <a href="index.php?act=listbill"><input type="button" name="" id="" value="DANH SÁCH"></a>
                </label>
        </form>
    </div>
</div>
</div>