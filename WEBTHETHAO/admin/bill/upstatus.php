<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Quản lý sản phẩm</li>
            <li class="breadcrumb-item"><a href="index.php?act=adddm.php">Update trạng thái</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Tình trạng đơn hàng</h3>
                <div class="tile-body">
                    <form action="index.php?act=updatestatus" method="POST">
                        <select class="form-control" style="width: 200px;margin-bottom:10px;" name="ttdh" id="">
                            <?php foreach ($liststatus as $index => $st) : ?>
                                <option name="ttdh" value="<?= $st['id'] ?>"><?= $st['name'] ?></option>
                            <?php endforeach ?>
                            <?php
                            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                            ?>
                        </select>
                </div>

                <label for="">
                    <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
                    <a href=""><input class="btn btn-save" name="submit" type="submit" value="Lưu lại"></input></a>
                    <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
                </label>
                </form>
            </div>
</main>