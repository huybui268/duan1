<?php
if(isset($bill)){
extract($bill);
}
?>
<div class="row">
    <div class="row formtitle mb10">
        <h1>CẬP NHẬT BILL</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatebill" method="post"> 
            <div>
                <label>Tình trạng</label><br><br>
                <select name="bill_status">
                <option value="0" <?php echo ($bill_status == 0) ? 'selected' : ''; ?>>Đơn hàng mới</option>
                <option value="1" <?php echo ($bill_status == 1) ? 'selected' : ''; ?>>Đang xử lý</option>
                <option value="2" <?php echo ($bill_status == 2) ? 'selected' : ''; ?>>Đang giao hàng</option>
                <option value="3" <?php echo ($bill_status == 3) ? 'selected' : ''; ?>>Đã giao hàng</option>
            </select>
            </div><br>
            <input type="hidden" value="<?php echo $id ?>" name="id">
            <input name="capnhatbill" type="submit" value="Cập nhật">
        </form>
    </div>
</div>