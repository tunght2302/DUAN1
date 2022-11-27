<div class="">
            <div class="row adtitle">
                <h1>Thêm mới sản phẩm</h1>
            </div>
            <div class="frm_content">
                <form action="index.php?act=addpro" method="POST" enctype="multipart/form-data">
                <label for="" class="mb">Danh mục<br>
                    <select name="ma_loai" style="padding: 3px; font-size: 1vw;">
                        <?php
                            foreach ($listcat as $cat){
                                extract($cat);
                                echo '<option value="'.$id.'">'.$ten_loai.'</option>';
                            }
                        ?>

                    </select><br><br>
                </label>
                <label for="" class="mb">Tên sản phẩm <br>
                    <input type="text" name="ten_sanpham"><br><br>
                </label>
                <label for="" class="mb">Giá  giá cũ <br>
                    <input type="text" name="gia_cu"><br><br>
                </label>
                <label for="" class="mb">Giá sản phẩm <br>
                    <input type="text" name="don_gia"><br><br>
                </label>
                <label for="" class="mb">Hình ảnh sản phẩm <br>
                    <input type="file" name="hinh"><br><br>
                </label>
                <label for="" class="mb">Mô tả sản phẩm <br>
                    <textarea name="mo_ta"cols="30" rows="10"></textarea>
                </label><br>
                
                
                <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                ?>
                <br><br>
                <label for="">
                    <a href=""><input type="submit" name="submit" id="" value="THÊM MỚI"></a>
                    <a href=""><input type="reset" name="reset" id="" value="NHẬP LẠI"></a>
                    <a href="index.php?act=listpro"><input type="button" name="" id="" value="DANH SÁCH"></a>
                </label>
                </form>
            </div>
        </div>
    </div>