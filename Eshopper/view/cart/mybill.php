<section id="do_action">
    <div class="container">
        <div class="heading">
            <h3 style="text-align:center ;">ĐƠN HÀNG CỦA BẠN</h3>
        </div>
        <div class="row" style="text-align:center;">
            <div align="center";>
                 <table border="1">
                    <tr style="background-color:aqua ;">
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
</section>
<!--/#do_action-->