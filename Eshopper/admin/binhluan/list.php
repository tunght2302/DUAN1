<div class="row adtitle">
    <h1>Danh sách tài khoản</h1>
</div>
<div class="frm_content">

    <div class="row mb frmlist">
        <table>
            <tr>
                <th></th>
                
                <th>Nội dung bình luận</th>
                <th>IDUser</th>
                <th>ID Sản Phẩm</th>
                <th>Ngày bình luận</th>
                <th></th>
            </tr>
            <?php
            foreach ($listbinhluan as $binhluan) {
                extract($binhluan);
                $deletebl = "index.php?act=deletebl&id=" . $id_binhluan;
                echo  '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                
                                <td>' . $noi_dung . '</td>
                                <td>' . $iduser . '</td>
                                <td>' . $id_sanpham . '</td>
                                <td>' . $ngaybinhluan . '</td>
                                <td><a href="' . $deletebl . '"><input type="button" name="" id="" value="Xóa"></a></td>
                            </tr>';
            }
            ?>

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