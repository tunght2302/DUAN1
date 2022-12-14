<?php
  function insert_lienhe($hoten, $email, $noidung){
    $sql = "INSERT INTO `lienhe`(`ten`, `email`, `noi_dung`) 
            VALUES ('$hoten','$email','$noidung')";
    pdo_execute($sql);
}
?>