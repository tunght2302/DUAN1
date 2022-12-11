<?php 
    function hoadon_chitiet($listhoadon){
        global $img_path;
        $tong = 0;
        $i = 0;
        echo '
        <thead>
        <tr class="cart_menu">
            <td class="image">Hình ảnh</td>
            <td class="description">Tên sản phẩm</td>
            <td class="price">Giá</td>
            <td class="quantity">Số lượng</td>
            <td class="total">Thành tiền</td>
            <td></td>
        </tr>
    </thead>
        ';
        foreach ($listhoadon as $cart) {
           $hinh = $img_path . $cart['hinh'];
           $tong += $cart['thanhtien'];
           echo '
                    <thead>
						
					</thead>
           
           <td class="cart_product">
            <img src="' . $hinh. '" alt="" height="80px">
           </td>
           <td class="cart_description">
            <h4><a href="">' . $cart['ten_sanpham'] . '</a></h4>
            <p> ID: ' . $cart['id_sanpham'] . '</p>
           </td>
           <td class="cart_price">
           <p>$' . $cart['gia'] . '</p>
       </td>
       <td class="cart_quantity">
       <div class="cart_quantity_button">
           <a class="cart_quantity_up" href=""> + </a>
           <input class="cart_quantity_input" type="text" name="quantity" value="' . $cart[4] . '" autocomplete="off" size="2">
           <a class="cart_quantity_down" href=""> - </a>
       </div>
   </td>
        <td class="cart_total">
           <p class="cart_total_price">$' . $cart['thanhtien'] . '</p>
        </td>
       
            
       ';
       $i+=1;
       
       }
       echo '<tr>
       <td class="cart_description"colspan="4">
       <h4><a href="">Tổng đơn hàng:</a></h4>
      
       </td>

       <td class="cart_total">
       <p class="cart_total_price">$' . $tong . '</p>
   </td>
       
   </tr>';
    }

    function tongdonhang()
{
    $tong = 0;

    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = $cart["so_luong"] * $cart["don_gia"];
        $tong += $ttien;
        
    }
    return $tong;
}
function insert_bill($iduser,$ngaydathang, $tongdonhang)
{
    $sql = " INSERT INTO `bill`(`iduser`,`ngaydathang`, `total`)
        VALUES ('$iduser','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($iduser,$idpro,$soluong, $thanhtien,$idbill)
{
    $sql = "INSERT INTO `cart`(`iduser`, `idpro`,`soluong`, `thanhtien`, `idbill`) 
        values($iduser, $idpro,$soluong, $thanhtien, $idbill)";
    return pdo_execute($sql);
}
function loadone_bill($id)
{
    $sql = "SELECT * FROM bill WHERE id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadall_cart()
{
    $sql = "SELECT * FROM cart";
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_cart_ct($id_nguoi_dung)
{
    $sql = "SELECT A.ten_sanpham,A.don_gia,B.soluong,A.hinh,B.thanhtien FROM san_pham A INNER JOIN cart B on A.id_sanpham = B.idpro
    INNER JOIN nguoi_dung C on B.iduser = C.id_nguoidung
    WHERE C.id_nguoidung = $id_nguoi_dung";
    $bill = pdo_query($sql);
    return $bill;
}
function loadone_cart($id)
{
    $sql = "SELECT * FROM cart WHERE id=".$id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadall_cart_user($iduser)
{
    $sql = "SELECT * FROM bill WHERE iduser=" . $iduser;
    $listbill = pdo_query($sql);
    return $listbill;
}
function loadall_bill($kyw = "", $iduser = 0)
{
    $sql = "SELECT * FROM bill WHERE 1";
    if ($iduser > 0) $sql .= " AND iduser=" . $iduser;
    // if ($kyw != "") $sql .= " AND id like '%" . $kyw . "%'";
    if ($kyw != "") $sql .= " AND bill_name like '%" . $kyw . "%'";
    $sql .= " ORDER BY id DESC";
    $listbill = pdo_query($sql);
    return $listbill;
}
function loadall_cart_count($idbill)
{
    $sql = "SELECT * FROM cart WHERE idbill=" . $idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}
function get_ttdh($n)
{
    switch ($n) {
        case '1':
            $tt = "Đơn hàng mới";
            break;
        case '2':
            $tt = "Đang vận chuyển";
            break;
        case '3':
            $tt = "Đã thanh toán";
            break;
        default:
            $tt = "Đơn hàng mới";
            break;
    }
    return $tt;
}
function get_pttt($n){
    switch ($n) {
        case '1':
            $tt = "Thanh toán trực tiếp";
            break;
        case '2':
            $tt = "Chuyển khoản";
            break;
        case '3':
            $tt = "Thanh toán online";
            break;
        
        default:
            $tt = "Thanh toán trực tiếp";
            break;
    }
    return $tt;
}
function loadall_thongke()
{
    $sql = "SELECT loai_sanpham.id as madm, loai_sanpham.ten_loai as tendm, count(san_pham.id_sanpham) as countsp, min(san_pham.don_gia) as minprice,  max(san_pham.don_gia) as maxprice, avg(san_pham.don_gia) as avgprice";
    $sql .= " FROM san_pham LEFT JOIN loai_sanpham on loai_sanpham.id = san_pham.ma_loai";
    $sql .= " GROUP BY loai_sanpham.id ORDER BY loai_sanpham.id DESC";
    $listtk = pdo_query($sql);
    return $listtk;
}
function loadall_thongke_doanhthu()
{
    $sql = "SELECT bill.ngaydathang as ngaydathang, bill.total as total";
    $sql .= " FROM cart LEFT JOIN bill on bill.iduser = cart.iduser";
    $sql .= " GROUP BY bill.id ORDER BY bill.id DESC";
    $listtk = pdo_query($sql);
    return $listtk;
}

