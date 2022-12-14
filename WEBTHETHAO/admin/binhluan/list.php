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
                                <th>ID User</th>
                                <th>Họ tên khách hàng</th>
                                <th>Hình ảnh</th>
                                <th>Nội dung bình luận</th>
                                <th>Ngày bình luận</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <?php
                        foreach ($listbinhluan as $binhluan) {
                            extract($binhluan);
                            // var_dump($binhluan);
                            $deletebl = "index.php?act=deletebl&id=" . $id_binhluan;
                        ?>
                            <?php
                            $onetaikhoan = loadone_taikhoan($binhluan['iduser']);
                            extract($onetaikhoan);
                            // var_dump($onetaikhoan);
                            ?>
                            <?php
                            $onesp = loadone_pro($binhluan['id_sanpham']);
                            extract($onesp);
                            // var_dump($onesp);
                            ?>
                            <tbody>
                                <tr>
                                    
                                    <td><?= $iduser ?></td>
                                    <td><?=$onetaikhoan['ho_ten']?></td>
                                    <td><img src="../upload/<?= $onesp['hinh'] ?>" width="100px"></td>
                                    <td><?= $noi_dung ?></td>
                                    <td><?=$ngaybinhluan?><br><?=$giobinhluan?></td>
                                    <td> <a href="<?= $deletebl ?>">
                                        <button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)">
                                        <i class="fas fa-trash-alt"></i></a>
                                    </td>
                            </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>