<div class="row">
    <div class="row formtitle mb10">
        <h1>DANH SÁCH SẢN PHẨM</h1>
    </div>
    <div class="row formcontent">
        <form action="#" method="post">
            <div class="row mb10 formds_loai">
                <form action="index.php?act=listsp" method="post">
                    <input type="text" name="keyw" placeholder="Nhập sản phẩm cần tìm"><br><br>
                    <select name="iddm">
                        <option value="0" selected>Tất cả</option>
                        <?php foreach ($listdm as $dm) {
                            extract($dm);
                        ?>
                            <option value="<?php echo $id ?>"><?php echo $name ?></option>
                        <?php } ?>
                    </select><br><br>
                    <input type="submit" name="clickOK" value="Tìm kiếm"><br><br>
                </form>
                <table border="1" class="mb10">
                    <tr>
                        <th>Chọn nhanh</th>
                        <th>Mã Sản Phẩm</th>
                        <th>Tên Sản Phẩm</th>
                        <th>Giá</th>
                        <th>Ảnh</th>
                        <th>Mô tả</th>
                        <th>Lượt Xem</th>
                        <th>Chức năng</th>
                    </tr>
                    <?php foreach ($listsp as $sp) {
                        extract($sp);
                        $img = $image_path . $img;
                        //Nếu đường dẫn ảnh đúng thì in ra if còn else là đường dẫn sai
                        if (is_file($img)) {
                            $img = "<img src='" . $img . "' width='70px' height='70px'>";
                        } else {
                            $img = "No file img!";
                        } ?>
                        <tr>
                            <td><input type="checkbox" name=""></td>
                            <td><?php echo $id ?></td>
                            <td><?php echo $name ?></td>
                            <td><?php echo number_format($price) ?> VND</td>
                            <td><?php echo $img ?></td>
                            <td><?php echo $mota ?></td>
                            <td><?php echo $luotxem ?></td>
                            <td><a href="index.php?act=updatesp&idsp=<?php echo $id ?>"><input type="button" value="Sửa"></a><br><br>
                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa')" href="index.php?act=deletesp&idsp=<?php echo $id ?>"><input type="button" value="Xóa"></a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
        </form>
    </div>
</div>