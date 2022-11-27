<?php
    if(is_array($cat)){
        extract($cat);
    }
?>
<div class="">
            <div class="row adtitle">
                <h1>Cập nhật loại hàng hóa</h1>
            </div>
            <div class="frm_content">
                <form action="index.php?act=upcat" method="POST">
                    <label for="" class="mb">Mã loại <br>
                    <input type="text" name="maloai" id="" disabled placeholder="Auto Number"><br>
                </label>
                <label for="" class="mb">Tên loại <br>
                    <input type="text" name="tenloai" id="" value="<?php if(isset($ten_loai)&&($ten_loai !="")) echo $ten_loai ;?>"><br><br>
                </label>
                <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>
                <br><br>
                <label for="">
                    <input type="hidden" name="id" id="" value="<?php if(isset($id)&&($id > 0)) echo $id ;?>">
                    <a href=""><input type="submit" name="submit" id="" value="CẬP NHẬT"></a>
                    <a href=""><input type="reset" name="reset" id="" value="NHẬP LẠI"></a>
                    <a href="index.php?act=list"><input type="button" name="" id="" value="DANH SÁCH"></a>
                </label>
                </form>
            </div>
        </div>
    </div>