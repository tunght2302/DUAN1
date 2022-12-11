
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách loại sản phẩm</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" href="index.php?act=adddm" title="Thêm"><i class="fas fa-plus"></i>
                                Tạo danh mục mới</a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered">
                        
                        <thead>
                            <tr>
                                <th width="10"><input type="checkbox" id="all"></th>
                                <th>Mã Loại</th>
                                <th>Tên loại sản phẩm</th>
                            </tr>
                        </thead>
                        <?php
                       foreach ($listcat as $categories) {
                           extract($categories);
                           $update = "index.php?act=update&id=" . $id;
                           $delete = "index.php?act=delete&id=" . $id;
                          
                       ?>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td><?= $id?></td>
                                    <td><?= $ten_loai ?></td>
                                    
                                    <td> <a href="<?=$delete?>"><button class="btn btn-primary btn-sm trash" type="button" title="Xóa" onclick="myFunction(this)"><i class="fas fa-trash-alt"></i></a>
                                        </button>
                                        <a href="<?=$update?>"><button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP"><i class="fas fa-edit"></i></a>
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

