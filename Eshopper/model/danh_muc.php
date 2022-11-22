<?php
    function insert_cat($tenloai){
        $sql = "INSERT INTO loai_sanpham(ten_loai) values('$tenloai')";
        pdo_execute($sql);
    }
    function delete_cat($id){
        $sql = "DELETE FROM   loai_sanpham WHERE id=".$id;
        pdo_execute($sql);
    }
    function loadall_cat(){
        $sql = "SELECT * FROM loai_sanpham ORDER BY id DESC";
        $listcat = pdo_query($sql);
        return $listcat;
    }
    function loadone_cat($id){
        $sql = "SELECT * FROM loai_sanpham WHERE id=".$id;
        $cat = pdo_query_one($sql);
        return $cat;
    }
    function update_cat($id, $tenloai){
        $sql = "UPDATE loai_sanpham SET ten_loai='".$tenloai."' WHERE id=".$id;
        pdo_execute($sql);
    }
?>