<?php
        function loadone_status($id){
            $sql = "SELECT * FROM bill WHERE id=".$id;
            $status = pdo_query_one($sql);
            return $status;
        }
        function update_status($id, $ttdh){
            $sql = "UPDATE `bill` SET `bill_status` = '$ttdh' where `id`='$id'";
            pdo_execute($sql);
        }
        function delete($id){
            $sql = "DELETE FROM  `bill` WHERE `id`=".$id;
            pdo_execute($sql);
        }
?>