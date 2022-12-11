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
        function loadall_bill_cungloai($keyword, $ttdh){
            $sql = "SELECT * FROM bill WHERE 1";
            if($keyword!=""){
                $sql.=" and bill_status like '%".$keyword."%'";
            }
            if($ttdh>0){
                $sql.=" and bill_status= '".$ttdh."'";
            }
            
            $sql.=" ORDER BY id DESC";
            $liststatus= pdo_query($sql);
            return $liststatus;
        }
        
?>