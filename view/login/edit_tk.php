<?php
 if(isset($_SESSION['user'])){
extract($_SESSION['user']);
}
?> <div class="boxtitle">CẬP NHẬT TÀI KHOẢN</div>
        <div class="boxcontent formtk">
            <form action="index.php?act=edit_tk" method="post" enctype="multipart/form-data">
                <span style="color:red">* Required</span><br><hr>
                <div>
                    <label>Email <span style="color:red">*</span></label><br><br>
                    <input type="email" name="email" value="<?php echo $email ?>">
                </div><br>
                <div>
                    <label>Địa chỉ</label><br><br>
                    <input type="text" name="address" value="<?php echo $address ?>">
                </div><br>
                <div>
                    <label>Số điện thoại</label><br><br>
                    <input type="text" name="tel" value="<?php echo $tel ?>">
                </div><br>
                <input type="hidden" name="user" value="<?php echo $user ?>">
                <input type="hidden" name="pass" value="<?php echo $pass ?>">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" value="Cập nhật" name="capnhat">
                <input type="reset" value="Nhập lại"><br><br>
                <p style="color: red;"><?php if (isset($thongbao2)&& !empty($thongbao2)) {
                echo $thongbao2;
                } ?></p>
            </form>
        </div>
