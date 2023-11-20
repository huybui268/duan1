
<?php 
session_start();
include "../model/pdo.php";
include "../model/sanpham.php";
include "../model/danhmuc.php";
include "../model/binhluan.php";
include "../model/taikhoan.php";
include "../model/cart.php";

include "header.php";
include "../global.php";

if(!isset($_SESSION['mycart'])){
$_SESSION['mycart']=[];
}
$spnew= loadall_sanpham_home();
$dsdm= loadall_danhmuc();
$sptop10 = loadall_sanpham_top10();
if(isset($_GET['act']) && !empty($_GET['act'])){
$act=$_GET['act'];
switch ($act) {
    case "danhmucsp":
        if(isset($_POST['keyword']) &&  $_POST['keyword'] != 0 ){
        $kyw = $_POST['keyword'];
        }else{
        $kyw = "";
        }
        if(isset($_GET['iddm']) && ($_GET['iddm']>0)){
        $iddm=$_GET['iddm'];
        }else{
        $iddm=0;
        }
        $dssp=loadall_sanpham($kyw,$iddm);
        // $tendm= load_ten_dm($iddm);
        include "danhmuc.php";
        break;
    case 'ctsp':
      
        if(isset($_POST['guibinhluan'])){
            insert_binhluan($_POST['idpro'], $_POST['noidung'], $_SESSION['user']['id']);

        }
        if(isset($_GET['idsp']) && $_GET['idsp'] >= 0){
            tangluotxem($_GET['idsp']);
            $sp= loadone_sanpham($_GET['idsp']);
            $sp_cungloai=load_sanpham_cungloai($_GET['idsp'],$sp['iddm']);
            $binhluan = loadall_binhluan($_GET['idsp']);
            include "chitietsp.php";
        }else{
            include "body.php";             
        }
        break;
    case 'singup':
        if(isset($_POST['dangky'])){
            if(empty($_POST['email']) || empty($_POST['user']) || empty($_POST['pass'])){
                $thongbao="Vui lòng nhập đầy đủ!";
            }
            else{
                $email=$_POST['email'];
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                insert_taikhoan($email,$user,$pass);
                $thongbao="Đăng kí thành công!";
            }
        }
        include "login/singup.php";
        break;
    case 'login':
        if(isset($_POST['dangnhap'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $login=dangnhap($user,$pass);
        if(is_array($login)){
        $_SESSION['user']=$login;
        }
        else if(empty($_POST['user']) || empty($_POST['pass'])){
        $thongbao1="Vui lòng nhập đầy đủ!";
        }
        else{
        $thongbao1= "Tài khoản hoặc mật khẩu sai!";
        }
        }
        include "login/login.php";
        break;
    case 'doimk':
        if(isset($_POST['doimk'])){
            $pass_csdl=$_SESSION['user']['pass'];
            if(empty($_POST['pass1']) || empty($_POST['pass2'])){
            $thongbao7="Vui lòng nhập đầy đủ!";
            }
            else if($_POST['pass1'] != $pass_csdl && !empty($_POST['pass2'])){
                $thongbao7="Mật khẩu cũ nhập không chính xác!";
            }
            else{
                $pass2=$_POST['pass2'];
                $id=$_POST['id'];
                update_matkhau($id,$pass2);
                $thongbao7="Đổi mật khẩu thành công";
            }
            }
        include "login/doimk.php";
        break;
    case 'logout':
        session_unset();//Đăng xuất
        include "body.php";
        break;
    case 'quenmk':
        if(isset($_POST['guiemail'])){
        $email=$_POST['email'];
        $sendMail=sendMail($email);
        }
        include "login/quenmk.php";
        break;
    case 'edit_tk':
        if(isset($_POST['capnhat'])){
            if(empty($_POST['email'])){
                $thongbao2="Email không được để trống!";
            }
            else{
                $email=$_POST['email'];
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                $address=$_POST['address'];
                $tel=$_POST['tel'];
                $id=$_POST['id'];
                update_taikhoan($id,$email,$address,$tel);
                $_SESSION['user']=dangnhap($user,$pass);
                $thongbao2="Cập nhật thành công";
            }
        }
        include "login/edit_tk.php";
        break;
    case 'addtocart':
        if(isset($_POST['addtocart'])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $hinh=$_POST['hinh'];
        $price=$_POST['price'];
        $soluong=$_POST['soluong'];
        $mau=$_POST['mau'];
        $tongtien=$soluong*$price;
        $spadd=[$id,$name,$hinh,$price,$soluong,$mau,$tongtien];
        array_push($_SESSION['mycart'],$spadd);
        
        }
        
        include "cart/viewcart.php";
        break;
    case 'deletecart':
        if(isset($_GET['idcart'])){
        array_splice($_SESSION['mycart'],$_GET['idcart'],1);
        }
        else{
        $_SESSION['mycart']=[];
        }
        header("location: index.php?act=viewcart");
        break;
    case 'viewcart':
// $giohang= loadalll_cart($id);
        include "cart/viewcart.php";
        break;
    case 'bill':
        include "cart/bill.php";
        break;
    case 'billcomfirm':
        if(isset($_SESSION['user'])){
        $iduser=$_SESSION['user']['id'];
        }
        //   print_r($iduser);
        //tạo bill
        if(isset($_POST['dathang'])){
        $name=$_POST['name'];
        $address=$_POST['address'];
        $email=$_POST['email'];
        $tel=$_POST['tel'];
        $pttt=$_POST['pttt'];
        $ngaydathang=date('Y-m-d');
        $tongdonhang=tongdonhang();
        $idbill=add_bill($iduser,$name,$address,$tel,$email,$pttt,$ngaydathang,$tongdonhang);
        //insert into cart: $_SESSION['mycart'] & idbill
        foreach ($_SESSION['mycart'] as $cart) {
        add_cart($_SESSION['user']['id'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[5],$cart[4],$cart[6],$idbill);
        //xóa $_SESSION['cart']
        $_SESSION['mycart']=[];
        }
        }
        $bill=loadone_bill($idbill);
        $billcart=loadall_cart($idbill);
        include "cart/billcomfirm.php";
        break;
    case 'mybill':
        $listbill=loadall_bill($_SESSION['user']['id']);
        include "cart/mybill.php";
        break;
    default:
        include "body.php";
        break;
}
}
else{
include "body.php";
}
include "footer.php";
?>