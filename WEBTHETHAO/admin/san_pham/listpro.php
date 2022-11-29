<div class="row adtitle">
    <h1>Danh sách loại hàng</h1>
</div>
<div class="frm_content">
    <form action="index.php?act=listpro" method="POST">
            <input type="text" name="keyword" style="width: 200px;">
            <select name="ma_loai" style="padding: 2px; font-size: 1vw;">
            <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listcat as $cat) {
                    extract($cat);
                    echo '<option value="' . $id . '">' . $ten_loai . '</option>';
                }
                ?>
            </select>
            <input type="submit" name="search" id="" value="Search">
    </form>
    <div class="row mb frmlist">
        <table>
            <tr>
               
                <th>ID SẢN PHẨM</th>
                <th>MÃ LOẠI</th>
                <th>TÊN SẢN PHẨM</th>
                <th>HÌNH ẢNH</th>
                <th>MÔ TẢ</th>
                <th>GIÁ</th>
                <th>LƯỢT XEM</th>
                <th> </th>
            </tr>
            <?php
            foreach ($listpro as $products) {
                extract($products);
                
                $uppro = "index.php?act=uppro&id=". $id_sanpham;
                $deletepro = "index.php?act=deletepro&id=". $id_sanpham;
                $imgpath = "../upload/" . $hinh;
                if (is_file($imgpath)) {
                    $hinh = "<img src='" . $imgpath . "' width='50px' height='50px';>";
                } else {
                    // echo "Không có ảnh";
                }
                echo  '<tr>
                               
                                <td>' . $id_sanpham . '</td>
                                <td>' . $ma_loai . '</td>
                                <td>' . $ten_sanpham . '</td>
                                <td>' . $hinh . '</td>
                                <td>' . $mo_ta . '</td>
                                <td>' . $don_gia . '</td>
                                <td>' . $luot_xem . '</td>
                                <td><a href= "' . $uppro . '"><input type="button" name="" id="" value="Sửa"></a> <a href="' . $deletepro . '"><input type="button" name="" id="" value="Xóa"></a></td>
                            </tr>';
            }
            ?>

        </table>
    </div>
    <form action="" method="POST">
        <label for="">
            
            <a href="index.php?act=addpro"><input type="button" name="" id="" value="THÊM MỚI"></a>
        </label>
    </form>
</div>
