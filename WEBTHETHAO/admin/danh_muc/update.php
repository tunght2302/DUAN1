<?php
    if(is_array($cat)){
        extract($cat);
    }
?>
<main class="app-content">
        <div class="app-title">
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item">Danh sách sản phẩm</li>
                <li class="breadcrumb-item"><a href="index.php?act=update.php">Thêm danh mục</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Update danh mục</h3>
                    <div class="tile-body">
                        <form class="row" action="index.php?act=upcat" method="POST">
                            <div class="form-group col-md-3">
                                <label class="control-label">Tên danh mục</label>
                                <input class="form-control"  name="tenloai" type="text" value="<?php if(isset($ten_loai)&&($ten_loai !="")) echo $ten_loai ;?>">
                                <p style="color: red;">
                                <?php
                                    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                                ?>
                                </p>
                            </div>
                    </div>
                   
                    <label>
                        <input type="hidden" name="id" id="" value="<?php if(isset($id)&&($id > 0)) echo $id ;?>">
                        <a href=""><input class="btn btn-save" name="submit" type="submit" value="Lưu lại"></input></a>
                        <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
                        <a href="index.php?act=list"><input  class="btn btn-save" type="button" name="" id="" value="Danh sách"></a>
                    </label>
                    </form>
                </div>
    </main>