<div class="row mb">
    <div class="boxtrai mr">
        <form action="index.php?act=billcomfirm" method="post">
            <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
            <div class="boxcontent formtk">
                <div class=" mb10 formds_loai">
                    <?php
                    if (isset($_SESSION['user'])) {
                        $name = $_SESSION['user']['user'];
                        $address = $_SESSION['user']['address'];
                        $email = $_SESSION['user']['email'];
                        $tel = $_SESSION['user']['tel'];
                    } else {
                        $name = "";
                        $address = "";
                        $email = "";
                        $tel = "";
                    }
                    ?>
                    Người đặt hàng: <input type="text" name="name" value="<?php echo $name ?>" required>
                    Địa chỉ: <input type="text" name="address" value="<?php echo $address ?>" required>
                    Email: <input type="text" name="email" value="<?php echo $email ?>" required>
                    Số điện thoại: <input type="text" name="tel" value="<?php echo $tel ?>" required>
                </div>
            </div><br><br>

            <div class="boxtitle">PHƯƠNG THỨC THANH TOÁN</div>
            <div class="thanhtoan ">
                <div class=" mb10 formds_loai">
                    <input type="radio" value="1" name="pttt" checked>Trả tiền khi nhận hàng
                    <input type="radio" value="2" name="pttt">Chuyển khoản ngân hàng
                    <input type="radio" value="3" name="pttt">Thanh toán online
                </div>
            </div><br><br>

            <div class="boxtitle">THÔNG TIN GIỎ HÀNG</div>
            <div class="boxcontent formtk">
                <div class=" mb10 formds_loai">
                    <table border="1" class="mb10" style="border:#ccc;">
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Đơn giá</th>
                            <th>Màu</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                        <?php $tong = 0;
                        $i = 0;
                        foreach ($_SESSION['mycart'] as $cart) {
                            $hinh = $image_path . $cart[2];
                            $tongtien = $cart[3] * $cart[4];
                            $tong += $tongtien; ?>
                            <tr>
                                <td><?php echo $cart[1] ?></td>
                                <td><img src="<?php echo $hinh ?>" alt="" width="70px" height="50px"></td>
                                <td><?php echo number_format($cart[3]) ?> VND</td>
                                <td><?php echo$cart[5] ?></td>
                                <td><?php echo $cart[4] ?></td>
                                <td><?php echo number_format($tongtien) ?> VND</td>
                            </tr>
                            <?php $i += 1; ?>
                        <?php } ?>
                        <tr>
                            <td colspan="5">Tổng giá đơn hàng</td>
                            <td><?php echo number_format($tong) ?> VND</td>
                        </tr>
                    </table>
                </div>
                <a href="index.php?act=billcomfirm"><input type="submit" name="dathang" value="Đồng ý đặt hàng"></a><br>
            </div>
        </form>
 