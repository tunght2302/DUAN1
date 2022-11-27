<?php
if (is_array($pro)) {
    extract($pro);
}
$imgpath = "../upload/" . $hinh;
if (is_file($imgpath)) {
    $hinh = "<img src='" . $imgpath . "' width='50px' height='50px';>";
} else {
    echo "Không có ảnh";
}
?>
<div class="">
    <div class="row adtitle">
        <h1>Cập nhật loại hàng hóa</h1>
    </div>
    <div class="frm_content">
        <form action="index.php?act=updatepro" method="POST" enctype="multipart/form-data">
            <label for="" class="mb">Tên sản phẩm <br>
                <input type="text" name="ten_sanpham" value="<?=$ten_sanpham ?>"><br><br>
            </label>
            </div>
            <label for="" class="mb">Giá cũ  <br>
                <input type="text" name="gia_cu" value="<?= $gia_cu ?>"><br><br>
            </label>
            <label for="" class="mb">Giá sản phẩm <br>
                <input type="text" name="don_gia" value="<?= $don_gia ?>"><br><br>
            </label>
            <label for="" class="mb">Hình ảnh sản phẩm <br>
                <?= $hinh ?>
                <input type="file" name="hinh"><br><br>

            </label>
            <label for="" class="mb">Mô tả sản phẩm <br>
                <textarea name="mo_ta" cols="30" rows="10"> <?= $mo_ta ?></textarea><br><br>
            </label>
            <label for="" class="mb">Danh mục<br>
                    <select name="ma_loai" style="padding: 3px; font-size: 1vw;">
                        <?php
                            foreach ($listcat as $cat){
                                extract($cat);
                                if($iddm == $id)
                                echo '<option value="'.$id.'" selected>'.$ten_loai.'</option>';
                                else echo '<option value="'.$id.'">'.$ten_loai.'</option>';
                            }
                        ?>

                    </select>
                </label>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
            <br><br>
            <label for="">
                    <input type="hidden" name="id_sanpham" id="" value="<?php if(isset($id_sanpham)&&($id_sanpham > 0)) echo $pro['id_sanpham'] ;?>">
                    <a href=""><input type="submit" name="submit" id="" value="CẬP NHẬT"></a>
                    <a href=""><input type="reset" name="reset" id="" value="NHẬP LẠI"></a>
                    <a href="index.php?act=listpro"><input type="button" name="" id="" value="DANH SÁCH"></a>
                </label>
        </form>
    </div>
</div>
</div>