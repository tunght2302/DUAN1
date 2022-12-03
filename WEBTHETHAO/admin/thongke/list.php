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
    <a href="index.php?act=bieu_do"><input type="button"  value="Biểu Đồ"></a >
    <a href="index.php?act=doanh_thu"><input type="button"  value="Thống Kê Theo Doanh Thu"></a >
</div>
