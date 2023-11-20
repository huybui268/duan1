<div class="row">
    <div class="row formtitle mb10">
        <h1>DANH SÁCH KHÁCH HÀNG</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=listkh" method="post">
            <div class="row mb10 formds_loai">
                <table border="1" class="mb10">
                    <tr>
                    <th>Chọn nhanh</th>
                    <th>Mã tài khoản</th>
                    <th>Tên khách hàng</th>
                    <th>Mật khẩu</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Quyền hạn</th>
                    <th>Chức năng</th>
                    </tr>
                    <?php foreach ($dskh as $kh) {
                        extract($kh);
                        ?>
                        <tr>
                            <td><input type="checkbox" name=""></td>
                            <td><?php echo $id ?></td>
                            <td><?php echo $user ?></td>
                            <td><?php echo $pass ?></td>
                            <td><?php echo $email ?></td>
                            <td><?php echo $address ?></td>
                            <td><?php echo $tel ?></td>
                            <td>
                                <?php if($role == 0){
                                      echo "Khách hàng";
                                      } else{
                                      echo "Admin";
                                } ?>
                            </td>
                            <td><a href="index.php?act=updatekh&idkh=<?php echo $id ?>"><input type="button" value="Sửa"></a><br><br>
                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa')" href="index.php?act=deletekh&idkh=<?php echo $id ?>"><input type="button" value="Xóa"></a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=addkh"><input type="button" value="Thêm tài khoản"></a>
        </form>
    </div>
</div>