<?php 

    function viewcart(){
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
        foreach ($_SESSION['mycart'] as $cart) {
           $hinh = $img_path . $cart[2];
           $ttien = $cart[3] * $cart[4];
           $tong += $ttien;
           $xoasp_td = '<td><a class="btn btn-default update" href="index.php?act=delcart&idcart='.$i.'">XOÁ</a></td>';
         
           echo '
                    <thead>
						
					</thead>
           
           <td class="cart_product">
            <img src="' . $hinh. '" alt="" height="80px">
           </td>
           <td class="cart_description">
            <h4><a href="">' . $cart[1] . '</a></h4>
            <p> ID: ' . $cart[0] . '</p>
           </td>
           <td class="cart_price">
           <p>$' . $cart[3] . '</p>
       </td>
       <td class="cart_quantity">
       <div class="cart_quantity_button">
           <a class="cart_quantity_up" href=""> + </a>
           <input class="cart_quantity_input" type="text" name="quantity" value="' . $cart[4] . '" autocomplete="off" size="2">
           <a class="cart_quantity_down" href=""> - </a>
       </div>
   </td>
        <td class="cart_total">
           <p class="cart_total_price">$' . $ttien . '</p>
        </td>
       '.$xoasp_td.'
          
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

    function tongdonhang(){
        $tong = 0;
       
        foreach ($_SESSION['mycart'] as $cart) {
           $ttien = $cart[3] * $cart[4];
           $tong += $ttien;
           
    }
    return $tong;
}
    function insert_bill($iduser, $name, $address, $email, $tel, $pttt,  $ngaydathang, $tongdonhang){
        $sql = " INSERT INTO `bill`(`iduser`, `bill_name`, `bill_address`, `bill_email`, `bill_tel`, `bill_pttt`, `ngaydathang`, `total`)
         VALUES ('$iduser','$name','$address','$email','$tel','$pttt','$ngaydathang','$tongdonhang')";
        return pdo_execute_return_lastInsertId($sql);;
    }
    function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill){
        $sql = "INSERT INTO cart(iduser, idpro, img, name, price, soluong, thanhtien, idbill) 
        values('$iduser', '$idpro', '$img', '$name', '$price', '$soluong', '$thanhtien', '$idbill')";
        return pdo_execute($sql);
    }
    function loadone_bill($id){
        $sql = "SELECT * FROM bill WHERE id=".$id;
        $bill = pdo_query_one($sql);
        return $bill;
    }
    function loadall_cart($idbill){
        $sql = "SELECT * FROM cart WHERE idbill=".$idbill;
        $bill = pdo_query($sql);
        return $bill;
    }
    function loadall_cart_user($iduser){
        $sql = "SELECT * FROM bill WHERE iduser=".$iduser;
        $listbill = pdo_query($sql);
        return $listbill;
    }
    function loadall_bill($kyw="", $iduser = 0){
        $sql = "SELECT * FROM bill WHERE 1";
        if($iduser>0) $sql.= " AND iduser=".$iduser;
        if($kyw!="") $sql.=" AND id like '%".$kyw."%'";
        $sql.= " ORDER BY id DESC";
        $listbill = pdo_query($sql);
        return $listbill;
    }
    function loadall_cart_count($idbill){
        $sql = "SELECT * FROM cart WHERE idbill=".$idbill;
        $bill = pdo_query($sql);
        return sizeof($bill);
    }
    function get_ttdh($n){
        switch ($n) {
            case '0':
                $tt = "Đơn hàng mới";
                break;
            case '1':
                $tt = "Đơn xử lý";
                break;
            case '2':
                $tt = "Đã giao hang";
                break;
            case '3':
                $tt = "Hoàn tất";
                break;
            default:
                $tt = "Đơn hàng mới";
                break;
        }
        return $tt;
    }
function loadall_thongke(){
    $sql = "SELECT categories.id as madm, categories.name as tendm, count(products.id) as countsp, min(products.price) as minprice,  max(products.price) as maxprice, avg(products.price) as avgprice";
    $sql.= " FROM products LEFT JOIN categories on categories.id = products.iddm";
    $sql.= " GROUP BY categories.id ORDER BY categories.id DESC";
    $listtk = pdo_query($sql);
    return $listtk;
}
