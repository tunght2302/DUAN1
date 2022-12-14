<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách tài khoản</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">

                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Mã tài khoản</th>
                                <th>Họ tên</th>
                                <th>Tên tài khoản</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                                <th>Địa chỉ</th>
                                <th>Vai trò</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <?php
                        foreach ($listtaikhoan as $taikhoan) {
                            extract($taikhoan);
                            $loainguoidung = loadone_nguoidung($ma_loai_nguoidung);
                            extract($loainguoidung);
                            $deletetk = "index.php?act=deletetk&id=" . $id_nguoidung;
                        ?>
                            <tbody>
                                <tr>
                                    <td><?= $id_nguoidung ?></td>
                                    <td><?= $ho_ten ?></td>
                                    <td><?= $ten_dangnhap ?></td>
                                    <td><?= $email ?></td>
                                    <td><?= $so_dien_thoai ?></td>
                                    <td><?= $dia_chi ?></td>
                                    <td><?= $loainguoidung['ten_nguoidung'] ?></td>
                                    <td> <a href="<?= $deletetk ?>"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                            </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>