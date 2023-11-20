<div class="row">
    <div class="row formtitle mb10">
        <h1>THÊM MỚI LOẠI SẢN PHẨM</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div>
                <label>Danh mục</label><br><br>
                <select name="iddm">
                    <?php foreach ($listdm as $dm) {
                        extract($dm); ?>
                        <option value="<?php echo $id ?>"><?php echo $name ?></option>
                    <?php } ?>
                </select>
            </div><br>
            <div>
                <label>Tên sản phẩm</label><br><br>
                <input type="text" name="tensp" placeholder="Nhập tên sản phẩm">
            </div><br>
            <div>
                <label>Giá sản phẩm</label><br><br>
                <input type="number" name="giasp" placeholder="Nhập giá sản phẩm">
            </div><br>
            <div>
                <label>Ảnh sản phẩm</label><br><br>
                <input type="file" name="hinh">
            </div><br>
            <div>
                <label>Mô tả Ngắn</label><br><br>
                <textarea name="mota" cols="30" rows="10"></textarea>
            </div>
            <div>
                <label>Mô tả sản phẩm</label><br><br>
                <textarea name="mota_dai" cols="30" rows="10"></textarea>
            </div>
            <br>
            <input name="themmoi" type="submit" value="Thêm mới">
            <input type="reset" value="Nhập lại">
            <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a><br><br>
            <p style="color: red;"><?php
            if (isset($thanhcong) && !empty($thanhcong)) {
                echo $thanhcong;
            }
            ?></p>
        </form>
    </div>
</div>