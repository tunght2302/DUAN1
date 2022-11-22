<div class="row adtitle">
    <h1>Danh sách loại hàng</h1>
</div>
<div class="frm_content">

    <div class="row mb frmlist">
        <table>
            <tr>
                
                <th>MÃ LOẠI</th>
                <th>TÊN LOẠI</th>
                <th></th>
            </tr>
            <?php
            foreach ($listcat as $categories) {
                extract($categories);
                $update = "index.php?act=update&id=" . $id;
                $delete = "index.php?act=delete&id=" . $id;
                echo  '<tr>
                               
                                <td>' . $id . '</td>
                                <td>' . $ten_loai . '</td>
                                <td><a href= "' . $update . '"><input type="button" name="" id="" value="Sửa"></a> <a href="' . $delete . '"><input type="button" name="" id="" value="Xóa"></a></td>
                            </tr>';
            }
            ?>

        </table>
    </div>
    <form action="" method="POST">
        <label for="">
            
            <a href="index.php?act=adddm"><input type="button" value="THÊM MỚI"></a>
        </label>
    </form>
</div>
