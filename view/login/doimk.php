<?php
 if(isset($_SESSION['user'])){
extract($_SESSION['user']);
}
?>
<div class="boxtitle">ĐỔI MẬT KHẨU</div>
        <div class="boxcontent formtk">
            <form action="index.php?act=doimk" method="post">
                <div>
                    <label>Mật khẩu cũ</label><br><br>
                    <input type="password" name="pass1" placeholder="Nhập mật khẩu cũ">
                </div><br>
                <div>
                    <label>Mật khẩu mới</label><br><br>
                    <input type="password" name="pass2" placeholder="Nhập mật khẩu mới">
                </div><br>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" value="Đổi mật khẩu" name="doimk">
                <input type="reset" value="Nhập lại"><br><br>
                <p style="color: red;"><?php if (isset($thongbao7)&& !empty($thongbao7)) {
                echo $thongbao7;
                } ?></p>
            </form>
        </div>
