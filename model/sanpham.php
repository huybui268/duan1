<?php
//user
function loadall_sanpham_home(){
$sql="SELECT * FROM sanpham where 1 order by id desc limit 0,9";
$listsanpham = pdo_query($sql);
return $listsanpham;
}
//user
function loadall_sanpham_top10(){
    $sql="SELECT * FROM sanpham where 1 order by luotxem desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
//user và admin
function loadall_sanpham($keyw="",$iddm=0){
    $sql="select * from sanpham where 1";
    if($keyw!=""){
        $sql.=" and name like '%".$keyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by id desc";
    $listsanpham=pdo_query($sql);
    return  $listsanpham;
}
//user và admin
function loadone_sanpham($id){
    $sql = "SELECT * FROM sanpham where id = $id";
    $result = pdo_query_one($sql);
    return $result;
}
//user
function load_sanpham_cungloai($id, $iddm){
    $sql = "SELECT * FROM sanpham where iddm = $iddm and id <> $id";
    $result = pdo_query($sql);
    return $result;
}
//admin
function insert_sanpham($tensp,$giasp,$img,$mota,$iddm,$mota_dai){
    $sql = "INSERT INTO `sanpham`(`name`, `price`, `img`, `mota`, `iddm`,`mota_dai`) VALUES ('$tensp', '$giasp', '$img', '$mota', '$iddm','$mota_dai')";
    pdo_execute($sql);
}
//user
function tangluotxem($idsp){
    $sanpham = loadone_sanpham($idsp);
    $luotxem = $sanpham['luotxem'] + 1;
    $sql = "update sanpham set luotxem = $luotxem where id = $idsp";
    pdo_execute($sql);
}
function get_mau($n){
    switch ($n){
        case '1':
            $tt="Thanh toán trực tiếp";
            break;
        case '2':
            $tt="Chuyển khoản";
            break;
        case '3':
            $tt="Thanh toán online";
            break;
        default:
            $tt="Chưa nhận phương thức thanh toán";
            break;
    }
    return $tt;
    }
//admin
function update_sanpham($id,$tensp,$giasp,$hinh,$mota, $iddm,$mota_dai){
    $sanpham = loadone_sanpham($id);
    if($hinh != ""){
        if($sanpham['img'] != null && $sanpham['img'] != ""){
            $imglink = "../upload/" . $sanpham['img'];
            unlink($imglink);
        }
        $sql = "UPDATE `sanpham` SET `name` ='$tensp', `price`='$giasp', `img`='$hinh', `mota`='$mota', `iddm`='$iddm' ,`mota_dai`='$mota_dai' WHERE id = $id";
    }else{
        $sql = "UPDATE `sanpham` SET `name` ='$tensp', `price`='$giasp', `mota`='$mota', `iddm`='$iddm' WHERE id = $id";
    }
    pdo_execute($sql);
}
//admin
function delete_sanpham($id){
    $sql = "DELETE FROM sanpham WHERE id=" .$id;
    pdo_execute($sql);
}
?>