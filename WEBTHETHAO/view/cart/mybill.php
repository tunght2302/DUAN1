
<div class="row mb box">
    <div class="box_left">
        <div class="mb">
            <div class="box_title">ĐƠN HÀNG CỦA BẠN</div>
            <div class="box_content cart">
                <table border="1">
                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>Ngày đặt</th>
                        <th>Số lượng mặt hàng</th>
                        <th>Tổng giá thị đơn hàng</th>
                        <th>Tình trạng đơn hàng</th>
                    </tr>
                    <?php
                        if(is_array($listbill)){
                            foreach ($listbill as $bill) {
                                extract($bill);
                                $ttdh = get_ttdh($bill['bill_status']);
                                $countsp = loadall_cart_count($bill['id']);
                                echo '<tr>
                                <td>'.$bill['id'].'</td>
                                <td>'.$bill['ngaydathang'].'</td>
                                <td>'.$countsp.'</td>
                                <td>'.$bill['total'].'</td>
                                <td>'.$ttdh.'</td>
                            </tr>';
                            }
                        }
                    ?>

                </table>
            </div>
        </div>
    </div>

    <div class="box_right">
        <?php
        include "./view/boxright.php";
        ?>
    </div>
</div>