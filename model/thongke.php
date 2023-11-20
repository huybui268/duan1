<?php 
//admin
function load_thongke(){
$sql="SELECT danhmuc.id, danhmuc.name, count(*) as soluong, min(price) as gia_min, max(price) as gia_max, avg(price) as gia_avg FROM danhmuc join sanpham on danhmuc.id=sanpham.iddm
GROUP BY danhmuc.id, danhmuc.name 
ORDER BY soluong DESC";
return pdo_query($sql);
}
?>