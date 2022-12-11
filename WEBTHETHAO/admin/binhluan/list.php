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
                                <th>Nội dung bình luận</th>
                                <th>ID User</th>
                                <th>ID Sản Phẩm</th>
                                <th>Ngày bình luận</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <?php
                        foreach ($listbinhluan as $binhluan) {
                            extract($binhluan);
                            $deletebl = "index.php?act=deletebl&id=" . $id_binhluan;
                        ?>
                            <tbody>
                                <tr>
                                    <td><?= $noi_dung ?></td>
                                    <td><?= $iduser ?></td>
                                    <td><?= $id_sanpham ?></td>
                                    <td><?= $ngaybinhluan ?></td>
                                    <td> <a href="<?= $deletebl ?>"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i></a>
                                       
                                    </td>
                            </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

