<?php
  function insert_tai_khoan($ho_ten, $ten_dangnhap, $mat_khau, $email, $so_dien_thoai, $dia_chi){
    $sql = "INSERT INTO `nguoi_dung`(`ma_loai_nguoidung`, `ho_ten`, `ten_dangnhap`, `mat_khau`, `email`, `so_dien_thoai`, `dia_chi`) 
                              VALUES ('2','$ho_ten','$ten_dangnhap','$mat_khau','$email','$so_dien_thoai','$dia_chi')";
    pdo_execute($sql);
}
function check_nguoidung($ten_dangnhap,$mat_khau){
  $sql = "SELECT * FROM nguoi_dung WHERE ten_dangnhap='".$ten_dangnhap."' AND mat_khau='".$mat_khau."'";
  $sp = pdo_query_one($sql);
  return $sp;
}
function check_email($email){
  $sql = "SELECT * FROM nguoi_dung WHERE email='".$email."'";
  $sp = pdo_query_one($sql);
  return $sp;
}
function update_tai_khoan($id_nguoidung,$ho_ten,$ten_dangnhap,$mat_khau,$email,$so_dien_thoai,$dia_chi){
  $sql = "UPDATE `nguoi_dung` SET `ho_ten` = '$ho_ten', `ten_dangnhap` = '$ten_dangnhap', `mat_khau` = '$mat_khau', `email` = '$email', `so_dien_thoai` = '$so_dien_thoai', `dia_chi` = '$dia_chi' WHERE `nguoi_dung`.`id_nguoidung` = $id_nguoidung";
  pdo_execute($sql);
}
function loadall_taikhoan(){
  $sql = "SELECT*FROM nguoi_dung ORDER BY id_nguoidung DESC";
  $listtaikhoan = pdo_query($sql);
  return $listtaikhoan;
}
function loadone_taikhoan($id_nguoidung){
  $sql = "SELECT*FROM nguoi_dung WHERE id_nguoidung='$id_nguoidung'";
  $one_taikhoan = pdo_query_one($sql);
  return $one_taikhoan;
}
function delete_taikhoan($id_nguoidung){
  $sql = "DELETE FROM  nguoi_dung WHERE id_nguoidung=".$id_nguoidung;
  pdo_execute($sql);
}
function checkuser($ten_dangnhap, $mat_khau){
  $sql = "SELECT * FROM nguoi_dung WHERE ten_dangnhap='".$ten_dangnhap."' AND mat_khau='".$mat_khau."'";
  $sp = pdo_query_one($sql);
  return $sp;
}
function loadone_nguoidung($ma_loai_nguoidung){
  $sql = "SELECT*FROM loai_nguoidung WHERE ma_loai_nguoidung='$ma_loai_nguoidung'";
  $onetaikhoan = pdo_query_one($sql);
  return $onetaikhoan;
}
?>