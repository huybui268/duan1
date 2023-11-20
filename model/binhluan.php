<?php
//user
function load_binhluan($idsp){
$sql ="SELECT binhluan.id, binhluan.noidung, taikhoan.user, binhluan.ngaybinhluan FROM `binhluan` 
JOIN taikhoan ON binhluan.iduser = taikhoan.id
JOIN sanpham ON binhluan.idpro = sanpham.id
WHERE sanpham.id = $idsp";
$result=pdo_query($sql);
return $result;
}
//user
function insert_binhluan($idpro, $noidung,$iduser){
    $date = date('Y-m-d');
    $sql = "INSERT INTO `binhluan`(`noidung`, `iduser`, `idpro`, `ngaybinhluan`) 
    VALUES ('$noidung','$iduser','$idpro','$date')";
    pdo_execute($sql);
    header("location:".$_SERVER['HTTP_REFERER']);
}
//admin
function loadall_binhluan(){
    $sql = "SELECT user, name, noidung, ngaybinhluan FROM binhluan join sanpham on binhluan.idpro=sanpham.id join taikhoan on binhluan.iduser=taikhoan.id order by binhluan.idpro desc";
    $result = pdo_query($sql);
    return $result;
}
//admin
function delete_binhluan($id){
    $sql = "DELETE FROM `binhluan` WHERE id = $id";
    pdo_execute($sql);
}
?>