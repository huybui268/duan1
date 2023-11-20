<?php
if (isset($bill)) {
    extract($bill);
}
$pttt=get_pttt($bill_pttt);
?>
<style>

</style>
            <div class="boxtitle">CẢM ƠN</div>
            <div class="boxcontent_bill" style="text-align:center">
                <div class=" mb10 formds_loai">
                    <h2>Cảm ơn quý khách đã mua hàng</h2>
                </div>
            </div><br><br>

            <div class="boxtitle">THÔNG TIN ĐƠN HÀNG</div>
            <div class="boxcontent_bill" style="">
                <div class=" mb10 formds_loai">
                   Mã đơn hàng: DAM-<?php echo $id ?>
                   <br>
                   Ngày đặt hàng: <?php echo date("d/m/Y", strtotime($ngaydathang)) ?>
                   <br>
                   Tổng đơn hàng: <?php echo number_format($total) ?> VND
                   <br>
                   Phương thức thanh toán: <?php echo $pttt ?>
                </div>
            </div><br><br>

            <div class="boxtitle">THÔNG TIN NGƯỜI NHẬN</div>
            <div class="boxcontent_bill" style="">
                <div class=" mb10 formds_loai">
                    Người đặt hàng: <?php echo $bill_name ?><br>
                    Địa chỉ: <?php echo $bill_address ?><br>
                    Email: <?php echo $bill_email ?><br>
                    Số điện thoại: <?php echo $bill_tel ?><br>
                </div>
            </div><br><br>

            <div class="boxtitle">THÔNG TIN GIỎ HÀNG</div>
            <div class="boxcontent">
                <div class=" mb10 formds_loai">
                    <table border="1" class="mb10" style="border:#ccc;">
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                        </tr>
                        <?php $tong = 0;
                        $i = 0;
                        foreach ($billcart as $cart) {
                            $hinh = $image_path . $cart['img'];
                            $tong += $cart['thanhtien'];
                            $thanhtien =$cart['price'] * $cart['soluong'];
                            $tong += $thanhtien; 
                            ?>
                            <tr>
                                <td><?php echo $cart['name'] ?></td>
                                <td><img src="<?php echo $hinh ?>" alt="" width="70px" height="50px"></td>
                                <td><?php echo number_format($cart['price']) ?> VND</td>
                                <td><?php echo $cart['soluong'] ?></td>
                                <td><?php echo number_format($thanhtien) ?> VND</td>
                            </tr>
                            <?php $i += 1; ?>
                        <?php } ?>
                        <tr>
                            <td colspan="4">Tổng giá đơn hàng</td>
                            <td><?php echo number_format($tong) ?> VND</td>
                        </tr>
                    </table>
                </div>
            </div>
   