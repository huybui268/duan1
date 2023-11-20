<?php
if(isset($danhmuc)){
extract($danhmuc);
}
?>
<div class="row">
    <div class="row formtitle mb10">
        <h1>CẬP NHẬT DANH MỤC</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatedm" method="post"> 
            <div>
                <label>Tên danh mục</label><br><br>
                <input type="text" name="tendm" value="<?php echo $name ?>" required>
            </div><br>
            <input type="hidden" value="<?php echo $id ?>" name="iddm">
            <input name="capnhatdm" type="submit" value="Cập nhật">
            <input type="reset" value="Nhập lại">
            <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a><br><br>
        </form>
    </div>
</div>