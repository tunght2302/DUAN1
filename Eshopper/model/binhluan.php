<?php
        function insert_binhluan($noi_dung, $iduser, $id_sanpham, $ngaybinhluan,$giobinhluan){
            $sql = "INSERT INTO binh_luan(noi_dung, iduser, id_sanpham, ngaybinhluan,giobinhluan) values('$noi_dung', '$iduser', '$id_sanpham', '$ngaybinhluan','$giobinhluan')";
            pdo_execute($sql);
        }
        function loadall_binhluan($id_sanpham){
            $sql = "SELECT*FROM binh_luan WHERE 1";
            if($id_sanpham>0)
            $sql.=" AND id_sanpham='".$id_sanpham."'";
            $sql.=" ORDER BY id_binhluan DESC";
            
            $listbl = pdo_query($sql);
            return $listbl;
        }
        function delete_binhluan($id_binhluan){
            $sql = "DELETE FROM  binh_luan WHERE id_binhluan=".$id_binhluan;
            pdo_execute($sql);
        }
?>