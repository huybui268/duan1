<style>
    .loginn{
        padding-top:50px;
        padding-left:700px;
        width:900px;
        
    }
     li a{
        text-decoration: none;
    }
</style>
<?php if (!isset($_SESSION['user'])) { 
        ?>
<div class="loginn">

        
        <div class="boxtitle">Đăng nhập </div>
        <div class="boxcontent formtk">
            <form action="index.php?act=login" method="post">
                <div class="row mb10">
                    <label for="">Tên đăng nhập</label><br>
                    <input type="text" name="user">
                </div>
                <div class="row mb10">
                    <label for="">Mật khẩu</label><br>
                    <input type="password" name="pass">
                </div>
                <div class="row mb10">
                    <input type="checkbox" name="box"> Ghi nhớ tài khooản?
                </div>
                <div class="row mb10">
                    <input type="submit" value="Đăng nhập" name="dangnhap">
                </div>
                <p style="color:red;"><?php if (isset($thongbao1)&& !empty($thongbao1)) {
                echo $thongbao1;
                } ?></p>
            </form>
            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
            <li><a href="index.php?act=singup">Đăng kí thành viên</a></li>
        </div>
    </div>
    <?php } else { extract($_SESSION['user']) ?>
            <div class="boxcontent1 formtk">
            <p>Xin chào</p>
            <p><?php echo $user ?></p>
            <li><a href="index.php?act=mybill">Đơn hàng của tôi</a></li>
            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
            <li><a href="index.php?act=doimk">Đổi mật khẩu</a></li>
            <li><a href="index.php?act=edit_tk&idtk=<?php echo $id ?>">Cập nhật thông tin</a></li>
            <?php if($role==1){ ?>
                <li><a href="../admin/index.php">Đăng nhập trang Admin</a></li>
            <?php } ?>
            <button><a href="index.php?act=logout" style="color:black;">Đăng xuất</a></button>
            </div>
        <?php } ?> 