<div class="row">
    <div class="row formtitle mb10">
        <h1>THÊM MỚI TÀI KHOẢN</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=addkh" method="post">
            <span style="color:red">* Bắt buộc nhập</span><br><hr>
            <div>
                <label>Tên khách hàng <span style="color:red">*</span></label><br><br>
                <input type="text" name="user" placeholder="Nhập tên đăng nhập">
            </div><br>
            <div>
                <label>Mật khẩu <span style="color:red">*</span></label><br><br>
                <input type="password" name="pass" placeholder="Nhập mật khẩu">
            </div><br>
            <div>
                <label>Email <span style="color:red">*</span></label><br><br>
                <input type="email" name="email" placeholder="Nhập email">
            </div><br>
            <div>
                <label>Địa chỉ</label><br><br>
                <input type="text" name="address" placeholder="Nhập địa chỉ">
            </div><br>
            <div>
                <label>Số điện thoại</label><br><br>
                <input type="text" name="tel" placeholder="Nhập địa chỉ">
            </div><br>
            <div>
            <label>Quyền</label><br><br>
            <select name="role">
                <option value="0">Khách hàng</option>
                <option value="1">Admin</option>
            </select>
            </div><br>
            <input name="themkh" type="submit" value="Thêm mới">
            <input type="reset" value="Nhập lại">
            <a href="index.php?act=listkh"><input type="button" value="Danh sách"></a><br><br>
            <p style="color: red;"><?php
            if (isset($thongbao6) && !empty($thongbao6)) {
                echo $thongbao6;
            }
            ?></p>
        </form>
    </div>
</div>