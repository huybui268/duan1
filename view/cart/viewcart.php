
        <div class="boxtitle">DANH SÁCH GIỎ HÀNG</div>
        <div class="boxcontent formtk">
                <div class="row mb10 formds_loai">
                    <table border="1" class="mb10" style="border:#ccc;">
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Màu</th>
                            <th>Thành tiền</th>
                            <th>Chức năng</th>
                        </tr>
                        <?php $tong = 0;
                        $i = 0;
                        foreach ($_SESSION['mycart'] as $cart) {
                            $hinh = $image_path.$cart[3];
                            
                            $tongtien = $cart[6];
                            $tong += $tongtien; ?>
                            <tr>
                                <td><?php echo $cart[1] ?></td>
                                <td><img src="<?php echo $hinh ?>" alt="" width="70px" height="50px"></td>
                                <td><?php echo number_format($cart[3]) ?> VND</td>
                                <td><?php echo $cart[4] ?></td>
                                <td><?php echo $cart[5] ?></td>
                                <td><?php echo number_format($tongtien) ?> VND</td>
                                <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa')" href="index.php?act=deletecart&idcart=<?php echo $i ?>"><input type="button" name="xoacart" value="Xóa"></a></td>
                            </tr>
                            <?php $i += 1; ?>
                        <?php } ?>
                        <tr>
                            <td colspan="5">Tổng đơn hàng</td>
                            <td colspan="2">Giá: <?php echo number_format($tong) ?> VND</td>
                        </tr>
                    </table>
                </div>
                <?php if(isset($_SESSION['user'])){ ?>
                    <a href="index.php?act=bill"><input type="button" value="Đặt hàng"></a>
                <?php } else { ?>
                    <p style="color:red;">Vui lòng đăng nhập để đặt hàng</p>
                <?php } ?>
                <a onclick="return confirm('Bạn có chắc chắn muốn xóa hết')" href="index.php?act=deletecart"><input type="button" value="Xóa hết"></a><br><br>
        </div>
 