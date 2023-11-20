<?php
if(isset($khachhang)){
extract($khachhang);
}
?>
<div class="row">
    <div class="row formtitle mb10">
        <h1>CẬP NHẬT TÀI KHOẢN</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatekh" method="post">
        <span style="color:red">* Bắt buộc nhập</span><br><hr>
            <div>
                <label>Tên khách hàng <span style="color:red">*</span></label><br><br>
                <input type="text" name="user" value="<?php echo $user ?>" readonly>
            </div><br>
            <div>
                <label>Mật khẩu <span style="color:red">*</span></label><br><br>
                <input type="text" name="pass" value="<?php echo $pass ?>" required>
            </div><br>
            <div>
                <label>Email <span style="color:red">*</span></label><br><br>
                <input type="email" name="email" value="<?php echo $email ?>" required>
            </div><br>
            <div>
                <label>Địa chỉ</label><br><br>
                <input type="text" name="address" value="<?php echo $address ?>">
            </div><br>
            <div>
                <label>Số điện thoại</label><br><br>
                <input type="text" name="tel" value="<?php echo $tel ?>">
            </div><br>
            <div>
            <label>Quyền</label><br><br>
            <select name="role">
                <option value="0" <?php echo ($role == 0) ? 'selected' : ''; ?>>Khách hàng</option>
                <option value="1" <?php echo ($role == 1) ? 'selected' : ''; ?>>Admin</option>
            </select>
            </div><br>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input name="capnhatkh" type="submit" value="Cập nhật">
            <input type="reset" value="Nhập lại">
            <a href="index.php?act=listkh"><input type="button" value="Danh sách"></a><br><br>
        </form>
    </div>
</div>