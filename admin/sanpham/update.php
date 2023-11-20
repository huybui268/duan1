<?php
if(isset($sanpham)){
extract($sanpham);

}
// print_r($sanpham);

$hinh=$image_path.$img;
if(is_file($hinh)){
$hinh="<hinh src='".$img."' width='70px' height='70px'>";
}
else{
$hinh="";
}
$name ="";
?>
<div class="row">
    <div class="row formtitle mb10">
        <h1>CẬP NHẬT SẢN PHẨM</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div>
                <label>Danh mục</label><br><br>
                <select name="iddm" id="">
                    <?php foreach ($listdm as $value) { ?>
                    <option value="<?php echo $value['id']?>" <?php echo ($iddm == $value['id']) ? 'selected' : ''; ?> ><?php echo $value['name'] ?></option>
                    <?php } ?>
                </select>
            </div><br>
            <div>
                <label>Tên sản phẩm</label><br><br>
                <input type="text" name="tensp" value="<?php echo $name ?>" required>
            </div><br>
            <div>
                <label>Giá sản phẩm</label><br><br>
                <input type="text" name="giasp" value="<?php echo $price ?>" required>
            </div><br>
            <div>
                <label>Ảnh sản phẩm</label><br><br>
                <input type="file" name="hinh_new">
                <?php echo $hinh ?>
            </div><br>
            <div>
                <label>Mô tả sản phẩm</label><br><br>
                <textarea name="mota" cols="30" rows="10" value="<?php echo $mota ?>" required><?php echo $mota ?></textarea>
            </div>
            <div>
                <label>Mô tả sản phẩm</label><br><br>
                <textarea name="mota_dai" cols="30" rows="10" value="<?php echo $mota ?>" required><?php echo $mota_dai ?></textarea>
            </div>
            <br>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input name="capnhat" type="submit" value="Cập nhật">
            <input type="reset" value="Nhập lại">
            <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a><br><br>
        </form>
    </div>
</div>