<div class="row adtitle">
    <h1>Danh sách loại hàng</h1>
</div>
<div class="frm_content">

    <div class="row mb frmlist">
        <table>
            <tr>
                
                <th>STT</th>
                <th>TÊN DANH MỤC</th>
                <th>SỐ LƯỢNG</th>
                <th>GIÁ CAO NHẤT</th>
                <th>GIÁ THẤP NHẤT</th>
                <th>GIÁ TRUNG BÌNH</th>
                <th></th>
            </tr>
            <?php
            foreach ($listthongke as $tk) {
                extract($tk);
                echo  '<tr>
                               
                        <td>' . $madm . '</td>
                        <td>' . $tendm . '</td>
                        <td>' . $countsp . '</td>
                        <td>' . $minprice . '</td>
                        <td>' . $maxprice . '</td>
                        <td>' . $avgprice . '</td>
                    </tr>';
            }
            ?>

        </table>
    </div>
</div>
