<?php 
//user và admin
function loadall_danhmuc(){
$sql="SELECT * FROM danhmuc order by id desc";
$listdanhmuc=pdo_query($sql);
return $listdanhmuc;
}
//admin
function loadone_danhmuc($iddm){
    $sql = "SELECT * FROM danhmuc where id = $iddm";
    $result = pdo_query_one($sql);
    return $result;
}
//admin
function insert_danhmuc($tendm){
    $sql = "INSERT INTO `danhmuc`(`name`) VALUES ('$tendm')";
    pdo_execute($sql);
}
//admin
function update_danhmuc($iddm, $tendm){
    $sql = "UPDATE danhmuc SET `name` ='$tendm' WHERE id = $iddm";
    pdo_execute($sql);
}
//admin
function delete_danhmuc($iddm){
    $sql = "DELETE FROM danhmuc where id = $iddm";
    pdo_execute($sql);
}

// function load_ten_dm($iddm){
// if($iddm>0){
//     $sql="SELECT * FROM danhmuc where id = $iddm";
//     $dm=pdo_query_one($sql);
//     extract($dm);
//     return $name;
// }else{
//     return "Không có sản phẩm";
// }
// }
?>