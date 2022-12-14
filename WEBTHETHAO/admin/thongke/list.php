<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách loại hàng</b></a></li>
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
                                <th>STT</th>
                                <th>Tên danh mục</th>
                                <th>Số lượng</th>
                                <th>Giá cao nhất</th>
                                <th>Giá thấp nhất</th>
                                <th>Giá trung bình</th>
                        </thead>
                        <?php
                        foreach ($listthongke as $tk) {
                            extract($tk);
                            echo  '
                            <tr>
                                <td>' . $madm . '</td>
                                <td>' . $tendm . '</td>
                                <td>' . $countsp . '</td>
                                <td>' . number_format($minprice) . 'VNĐ</td>
                                <td>' . number_format($maxprice) . ' VNĐ</td>
                                <td>' . number_format($avgprice)  . 'VNĐ</td>
                            </tr>';
                        }
                        ?>
                    </table>
                    <a href="index.php?act=bieu_do"><input class="btn btn-save" type="button" value="Biểu Đồ"></a>
                    <!-- <a href="index.php?act=doanh_thu"><input class="btn btn-cancel" type="button" value="Thống Kê Theo Doanh Thu"></a> -->
                </div>
            </div>
        </div>
    </div>
</main>