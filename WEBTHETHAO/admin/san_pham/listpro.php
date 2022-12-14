<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách sản phẩm</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" href="index.php?act=addpro" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo mới sản phẩm</a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered">
                        <form action="index.php?act=listpro" method="POST">
                            <select style="border:2px solid black;border-radius:5px;margin:5px;" name="ma_loai" style="padding: 2px; font-size: 1vw;">
                                <option value="0" selected>Tất cả</option>
                                <?php
                                foreach ($listcat as $cat) {
                                    extract($cat);
                                    echo '<option value="' . $id . '">' . $ten_loai . '</option>';
                                }
                                ?>
                            </select> <br>
                            <input style="border:2px solid black;border-radius:5px;width: 200px;" type="text" name="keyword" style="width: 200px;">

                            <input style="background-color:cadetblue;border-radius:5px;border:none;margin:5px; padding: 5px;" type="submit" name="search" id="" value="Search">
                        </form>
                        <thead>
                            <tr>
                                <th width="10"><input type="checkbox" id="all"></th>
                                <th>ID sản phẩm</th>
                                <th>Tên loại</th>
                                <th>Tên sản phẩm</th>
                                <th>Ảnh</th>
                                <th>Mô tả</th>
                                <th>Giá</th>
                                <th>Giá cũ</th>
                                <th>Lượt xem</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <?php
                        foreach ($listpro as $products) {
                            extract($products);
                           
                            $uppro = "index.php?act=uppro&id=" . $id_sanpham;
                            $deletepro = "index.php?act=deletepro&id=" . $id_sanpham;
                            $imgpath = "../upload/" . $hinh;
                            if (is_file($imgpath)) {
                                $hinh = "<img src='" . $imgpath . "' width='50px' height='50px';>";
                            } else {
                                // echo "Không có ảnh";
                            }
                        ?>
                        <?php
                            $onedanhmuc = loadone_danhmuc($products['ma_loai']);
                            extract($onedanhmuc);
                            // echo '<pre>';
                            // print_r($onedanhmuc);
                        ?>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td><?= $id_sanpham ?></td>
                                    <td><?= $onedanhmuc['ten_loai']?></td>
                                    <td><?= $ten_sanpham ?></td>
                                    <td><?= $hinh ?></td>
                                    <td><?= $mo_ta ?></td>
                                    <td><?= number_format($don_gia ) ?>VNĐ</td>
                                    <td><?= number_format($gia_cu )  ?>VNĐ</td>
                                    <td><?= $luot_xem ?></td>
                                    <td> <a href="<?= $deletepro ?>"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i></a>
                                        </button>
                                        <a href="<?= $uppro ?>"><button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i></a>
                                        </button>
                                    </td>
                            </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>