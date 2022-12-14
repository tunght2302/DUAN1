<main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item">Quản lý sản phẩm</li>
                <li class="breadcrumb-item"><a href="index.php?act=adddm.php">Thêm danh mục</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Thêm danh mục</h3>
                    <div class="tile-body">
                        <form class="row" action="index.php?act=adddm" method="POST">
                            <div class="form-group col-md-3">
                                <label class="control-label">Tên danh mục</label>
                                <input class="form-control"  name="tenloai" type="text">
                                <p style="color: red;">
                                <?php
                                    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                                ?>
                                </p>
                            </div>
                    </div>
                   
                    <label for="">
                    <input type="hidden" name="id_sanpham" id="" value="<?php if(isset($id_sanpham)&&($id_sanpham > 0)) echo $pro['id_sanpham'] ;?>">
                        <a href=""><input class="btn btn-save" name="submit" type="submit" value="Lưu lại"></input></a>
                        <!-- <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a> -->
                        <a href="index.php?act=list"><input  class="btn btn-cancel" type="button" name="" id="" value="Danh sách"></a>
                    </label>
                    </form>
                </div>
    </main>