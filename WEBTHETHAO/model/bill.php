<?php
        
        function update_status($id, $ttdh){
            $sql = "UPDATE `bill` SET `bill_status` = '$ttdh' where `id`=".$id;
            pdo_execute($sql);
        }
        function delete($id){
            $sql = "DELETE FROM  `bill` WHERE `id`=".$id;
            pdo_execute($sql);
        }
        function loadall_status(){
            $sql = "SELECT * FROM `status` ORDER BY id";
            $liststatus= pdo_query($sql);
            return $liststatus;
        }
        function insert_cthoadon(){
            $sql = "INSERT INTO `ct_hoadon`(`id`, `id_sanpham`, `id_bill`) 
            VALUES ('[value-1]','[value-2]','[value-3]')";
            return pdo_execute_return_lastInsertId($sql);
        }
        
?>