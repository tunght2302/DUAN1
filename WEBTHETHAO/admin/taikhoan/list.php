<div class="row adtitle">
    <h1>Danh sách tài khoản</h1>
</div>
<div class="frm_content">

    <div class="row mb frmlist">
        <table>
            <tr>
                
                <th>Mã tài khoản</th>
                <th> Họ tên</th>
                <th>Tên tài khoản</th>
                <th>Mật khẩu</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Vai trò</th>
               <th></th>
            </tr>
            <?php
            foreach ($listtaikhoan as $taikhoan) {
                extract($taikhoan);
                
                $deletetk = "index.php?act=deletetk&id=" . $id_nguoidung;
                echo  '<tr>
                               
                                <td>' . $id_nguoidung . '</td>
                                <td>' . $ho_ten . '</td>
                                <td>' . $ten_dangnhap . '</td>
                                <td>' . $mat_khau . '</td>
                                <td>' . $email . '</td>
                                <td>' . $so_dien_thoai . '</td>
                                <td>' . $dia_chi . '</td>
                                <td>' . $active . '</td>
                                <td> <a href="' . $deletetk . '"><input type="button" name="" id="" value="Xóa"></a></td>
                            </tr>';
            }
            ?>

        </table>
    </div>
    <form action="" method="POST">
        <label for="">
            
           
        </label>
    </form>
</div>
