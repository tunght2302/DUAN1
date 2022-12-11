<?php
 
    function insert_pro($ten_sanpham,$ma_loai,$mo_ta, $don_gia, $hinh,$gia_cu){
        $sql = "INSERT INTO `san_pham` ( `ten_sanpham`,`ma_loai`, `mo_ta`, `don_gia`, `hinh`, `gia_cu`) VALUES ('$ten_sanpham','$ma_loai', '$mo_ta', '$don_gia', '$hinh', '$gia_cu')";
        pdo_execute($sql);
    }
    function delete_pro($id_sanpham){
        $sql = "DELETE FROM  san_pham WHERE id_sanpham=".$id_sanpham;
        pdo_execute($sql);
    }
    function loadall_pro($keyword="", $ma_loai=0){
        $sql = "SELECT*FROM san_pham WHERE 1";
        if($keyword!=""){
            $sql.=" and name like '%".$keyword."%'";
        }
        if($ma_loai>0){
            $sql.=" and iddm= '".$ma_loai."'";
        }
        
        $sql.=" ORDER BY id_sanpham DESC";
        $listpro = pdo_query($sql);
        return $listpro;
    }
    function load_pro_cart(){
        $sql = "SELECT * FROM san_pham ORDER BY id_sanpham";
        $pro_cart = pdo_query($sql);
        return $pro_cart;
    }
    function loadall_pro_cungloai($keyword, $ma_loai){
        $sql = "SELECT * FROM san_pham WHERE 1";
        if($keyword!=""){
            $sql.=" and ten_sanpham like '%".$keyword."%'";
        }
        if($ma_loai>0){
            $sql.=" and ma_loai= '".$ma_loai."'";
        }
        
        $sql.=" ORDER BY id_sanpham DESC";
        $listpro = pdo_query($sql);
        return $listpro;
    }
    function loadall_pro_home(){
        $sql = "SELECT*FROM san_pham WHERE 1 ORDER BY id_sanpham DESC LIMIT 0,9";
        $listpro = pdo_query($sql);
        return $listpro;
    }
    function loadall_pro_top10(){
        $sql = "SELECT * FROM san_pham WHERE 1 ORDER BY luot_xem DESC LIMIT 0,5";
        $listpro = pdo_query($sql);
        return $listpro;
    }
   
    function load_ten_dm($ma_loai){
        if($ma_loai>0){
        $sql = "SELECT * FROM loai_sanpham WHERE id=".$ma_loai;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $ten_loai;
        }else{
            return "";
        }
    }
    function loadone_pro($id_sanpham){
        $sql = "SELECT * FROM san_pham WHERE id_sanpham=".$id_sanpham;
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function load_pro_cungloai($id_sanpham, $ma_loai){
        $sql = "SELECT * FROM san_pham WHERE ma_loai=".$ma_loai." AND id_sanpham<>".$id_sanpham;
        $listpro = pdo_query($sql);
        return $listpro;
    }
    function update_pro($id_sanpham, $ten_sanpham,$ma_loai,$mo_ta,$don_gia,$hinh,$gia_cu){
        if($hinh!=""){
            $sql = "UPDATE `san_pham` SET `ten_sanpham`='$ten_sanpham',`ma_loai`='$ma_loai',`mo_ta`='$mo_ta',`don_gia`='$don_gia',`hinh`='$hinh',`gia_cu`='$gia_cu' WHERE `san_pham`.`id_sanpham` = $id_sanpham";
        }else
        $sql = "UPDATE `san_pham` SET `ten_sanpham` = '$ten_sanpham', `ma_loai` = '$ma_loai', `mo_ta` = '$mo_ta', `don_gia` = '$don_gia' ,`gia_cu`='$gia_cu' WHERE `san_pham`.`id_sanpham` = $id_sanpham";
        pdo_execute($sql);
        
    }
?>