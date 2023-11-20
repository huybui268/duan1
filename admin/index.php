<?php

include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "../model/thongke.php";
include "../model/cart.php";
include "../global.php";
?>
<?php

include "header.php";
?>

<section class="main">
   
<?php
    
    if (isset($_GET['act']) && ($_GET['act'] != "")) {
        $act = $_GET['act'];
        switch ($act) {
           
            case 'listsp':
                if(isset($_POST['clickOK'])){
                $keyw=$_POST['keyw'];
                $iddm=$_POST['iddm'];
                }
                else{
                $keyw="";
                $iddm=0;
                }
                $listdm=loadall_danhmuc();
                $listsp=loadall_sanpham($keyw,$iddm);
                include "sanpham/listsp.php";
                break;
                //Thêm sản phẩm
            case 'addsp':
                if(isset($_POST['themmoi'])){
                    if(empty($_POST['tensp']) || empty($_POST['giasp']) || empty($_FILES['hinh']['name']) || empty($_POST['mota'])){
                    $thanhcong="Vui lòng nhập đủ!";
                    }
                    else{
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $img=$_FILES['hinh']['name'];
                    $mota=$_POST['mota'];
                    $mota_dai=$_POST['mota_dai'];
                    $target_dir=$image_path;
                    $target_file=$target_dir.basename($_FILES['hinh']['name']);
                    move_uploaded_file($_FILES['hinh']['tmp_name'],$target_file);
                    insert_sanpham($tensp,$giasp,$img,$mota,$iddm,$mota_dai);
                    $thanhcong="Thêm thành công";
                    }
                }
                $listdm=loadall_danhmuc();
                include "sanpham/addsp.php";
                break;
                //Sửa sản phẩm
            case 'updatesp':
                if(isset($_GET['idsp']) && $_GET['idsp']>0){
                $sanpham=loadone_sanpham($_GET['idsp']);
                }
                if(isset($_POST['capnhat'])){
                $id=$_POST['id'];
                $iddm=$_POST['iddm'];
                $tensp=$_POST['tensp'];
                $giasp=$_POST['giasp'];
                $mota=$_POST['mota'];
                $mota_dai=$_POST['mota_dai'];
                $hinh=$_FILES['hinh_new']['name'];
                $target_dir=$image_path;
                $target_file=$target_dir.basename($_FILES['hinh_new']['name']);
                move_uploaded_file($_FILES['hinh_new']['tmp_name'],$target_file);
                update_sanpham($id,$tensp,$giasp,$hinh,$mota,$iddm,$mota_dai);
                $thongbao = "cập nhật thành công!";
                }
                $listsp = loadall_sanpham("", 0);
                $listdm=loadall_danhmuc();
                include "sanpham/update.php";
                break;
                //Xóa sản phẩm
                case "deletesp":
                    if (isset($_GET['idsp'])) {
                        delete_sanpham($_GET['idsp']);
                    }
                    $listsp = loadall_sanpham("", 0);
                    include "sanpham/listsp.php";
                    break;
            // Danh mục
                //Danh sách danh mục
            case 'listdm':
                $listdm=loadall_danhmuc();
                include "danhmuc/listdm.php";
                break;
                //Thêm danh mục
            case 'adddm':
                if(isset($_POST['themdm'])){
                    if(empty($_POST['tendm'])){
                        $tb="Không được để trống!";
                    }
                    else{
                        $tendm=$_POST['tendm'];
                        insert_danhmuc($tendm);
                        $tb="Thêm thành công";
                    }
                }
                include "danhmuc/adddm.php";
                break;
                //Sửa danh mục
            case 'updatedm':
                if(isset($_GET['iddm']) && $_GET['iddm'] > 0){
                    $danhmuc = loadone_danhmuc($_GET['iddm']);
                }
                if(isset($_POST['capnhatdm'])){
                        $iddm = $_POST['iddm'];
                        $tendm = $_POST['tendm'];
                        update_danhmuc($iddm, $tendm);
                        $tb="Sửa thành công";
                        
                }

                include "danhmuc/updatedm.php";
                break;
                //Xóa danh mục
            case 'deletedm':
                if(isset($_GET['iddm']) && $_GET['iddm'] > 0){
                    delete_danhmuc($_GET['iddm']);
                    $tb="Xóa thành công"; 
                }
                break;
            // Khách hàng
               //Danh sách tài khoản
            case 'listkh':
                $dskh = loadall_khachhang();
                include "khachhang/listkh.php";
                break;
                //Thêm tài khoản
            case 'addkh':
                if(isset($_POST['themkh'])){
                    if(empty($_POST['user']) || empty($_POST['pass']) || empty($_POST['email'])){
                        $thongbao6="Vui lòng nhập đúng!";
                    }
                    else{
                        $user = $_POST['user'];
                        $pass = $_POST['pass'];
                        $email = $_POST['email'];
                        $address = $_POST['address'];
                        $tel = $_POST['tel'];
                        $role = $_POST['role'];
                        insert_khachhang($user, $pass, $email, $address, $tel, $role);
                        $thongbao6="Thêm thành công";
                    }
                }
                include "khachhang/addkh.php";
                break;
                //Sửa tài khoản
            case 'updatekh':
                if(isset($_GET['idkh']) & $_GET['idkh'] > 0){
                    $khachhang = loadone_khachhang($_GET['idkh']);
                }
                if(isset($_POST['capnhatkh'])){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $role = $_POST['role'];
                    $id = $_POST['id'];
                    update_khachhang($user, $pass, $email, $address, $tel, $role, $id);
                    
                }
                $dskh = loadall_khachhang();
                include "khachhang/updatekh.php";
                break;
                //Xóa tài khoản
            case 'deletekh':
                if(isset($_GET['idkh']) && $_GET['idkh'] > 0){
                    delete_taikhoan($_GET['idkh']);
                   
                }
                $dskh = loadall_khachhang();
                include "khachhang/listkh.php";
                break;
            //Bình luận
                 //Danh sách bình luận
            case 'listbl':
                $binhluan=loadall_binhluan();
                include "binhluan/listbl.php";
                break;
                //Xóa bình luận
            case 'deletebl':
                if(isset($_GET['idbl']) && $_GET['idbl'] > 0){
                    delete_binhluan($_GET['idbl']);
                    
                    }
                    $binhluan=loadall_binhluan();
                    include "binhluan/listbl.php";  
                break;
            //Thống kê
                // Danh sách thống kê
            case 'listtk':
                $thongke=load_thongke();
                include "thongke/listtk.php";
                break;
                //Biểu đồ thống kê
            case 'chart':
                $thongke_chart=load_thongke();
                include "thongke/bieudo.php";
                break;
            case 'listdh':
                $listbill=loadall_billdh();
                include "bill/donhang.php";
                break;
            case 'updatebill':
                if(isset($_GET['iddh']) & $_GET['iddh'] > 0){
                    $bill = loadone_bill($_GET['iddh']);
                }
                if(isset($_POST['capnhatbill'])){
                    $bill_status = $_POST['bill_status'];
                    $id = $_POST['id'];
                    update_bill($id, $bill_status);
                    header("location: index.php?act=listdh");
                }
                include "bill/updatebill.php";
                break;
                case "deletebill":
                    if (isset($_GET['iddh'])) {
                        deletebill($_GET['iddh']);
                    }
                    $listbill=loadall_billdh();
                include "bill/donhang.php";
                    break;
            default:
            include "home.php";
                break;
        }
        }
        else{
        include "home.php";
        }
    
      
    ?>
    </section>

     
  </body>

  </html>
</span>



