<?php
//user
function insert_taikhoan($email,$user,$pass){
    $sql="INSERT INTO `taikhoan` ( `email`, `user`, `pass`) VALUES ( '$email', '$user','$pass')";
    pdo_execute($sql);
}
//user
function dangnhap($user,$pass) {
    $sql="SELECT * FROM taikhoan WHERE user='$user' and pass='$pass'";
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
}
//user
function sendMail($email) {
    $sql="SELECT * FROM taikhoan WHERE email='$email'";
    $taikhoan = pdo_query_one($sql);

    if (empty($email)) {
        return "Bạn chưa nhập email!";
    }
    
    if ($taikhoan != false) {
        sendMailPass($email, $taikhoan['user'], $taikhoan['pass']);
        return "Gửi email thành công";
    }
    else {
        return "Email bạn nhập ko có trong hệ thống!";
    }
}
//PHPMailer - Gửi email kiểu php
function sendMailPass($email, $username, $pass) {
    require '../PHPMailer/src/Exception.php';
    require '../PHPMailer/src/PHPMailer.php';
    require '../PHPMailer/src/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = '00a2d4229bd65b';                     //SMTP username
        $mail->Password   = '6dd329c899a82a';                               //SMTP password
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('duanmau@example.com', 'DuAnMau');
        $mail->addAddress($email, $username);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Nguoi dung quen mat khau';
        $mail->Body    = 'Mau khau cua ban la' .$pass;

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
//user
function update_taikhoan($id,$email,$address,$tel){
$sql="UPDATE taikhoan SET  email='$email', address='$address', tel='$tel' where id= '$id'";
pdo_execute($sql);
}
//user
function update_matkhau($id,$pass){
    $sql="UPDATE taikhoan SET pass='$pass' where id= '$id'";
    pdo_execute($sql);
    }
//admin
function loadall_khachhang(){
    $sql = "SELECT * FROM taikhoan order by id desc";
    $result = pdo_query($sql);
    return $result;
}
//admin
function delete_taikhoan($idkh){
    $sql = "DELETE FROM `taikhoan` WHERE id = $idkh";
    pdo_execute($sql);
}
//admin
function insert_khachhang($user, $pass, $email, $address, $tel, $role){
    $sql = "INSERT INTO taikhoan (`user`, `pass`, `email`, `address`, `tel`, `role`) VALUES ('$user', '$pass', '$email', '$address', '$tel', '$role')";
    pdo_execute($sql);
}
//admin
function loadone_khachhang($idkh){
    $sql = "select * from taikhoan where id = $idkh";
    $result = pdo_query_one($sql);
    return $result;
}
//admin
function update_khachhang($user, $pass, $email, $address, $tel, $role, $id){
    $sql = "UPDATE `taikhoan` SET `user`='$user',`pass`='$pass',`email`='$email',`address`='$address',`tel`='$tel',`role`='$role' WHERE id = $id";
    pdo_execute($sql);
}
?>