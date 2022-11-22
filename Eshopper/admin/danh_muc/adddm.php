<div class="">
            <div class="row adtitle">
                <h1>Thêm mới loại hàng hóa</h1>
            </div>
            <div class="frm_content">
                <form action="index.php?act=adddm" method="POST">
                    <label for="" class="mb">Mã loại <br>
                    <input type="text" name="maloai" id="" disabled placeholder="Auto Number"><br>
                </label>
                <label for="" class="mb">Tên loại <br>
                    <input type="text" name="tenloai" id=""><br><br>
                </label>
                
                <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>
                <br><br>
                <label for="">
                    <a href=""><input type="submit" name="submit" id="" value="THÊM MỚI"></a>
                    <a href=""><input type="reset" name="reset" id="" value="NHẬP LẠI"></a>
                    <a href="index.php?act=list"><input type="button" name="" id="" value="DANH SÁCH"></a>
                </label>
                </form>
            </div>
        </div>
    </div>