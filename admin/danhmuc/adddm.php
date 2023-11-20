<div class="row">
    <div class="row formtitle mb10">
        <h1>THÊM MỚI DANH MỤC</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=adddm" method="post"> 
            <div>
                <label>Tên danh mục</label><br><br>
                <input type="text" name="tendm" placeholder="Nhập tên danh mục">
            </div><br>
            <input name="themdm" type="submit" value="Thêm mới">
            <input type="reset" value="Nhập lại">
            <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a><br><br>
            <p style="color: red;"><?php
            if (isset($tb) && !empty($tb)) {
                echo $tb;
            }
            ?></p>
        </form>
    </div>
</div>