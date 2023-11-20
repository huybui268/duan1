<div class="row">
    <div class="row formtitle mb10">
        <h1>THỐNG KÊ SẢN PHẨM TRONG DANH MỤC</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=listtk" method="post">
            <div class="row mb10 formds_loai">
                <table border="1" class="mb10">
                    <tr>
                    <th>STT</th>
                    <th>Mã danh mục</th>
                    <th>Tên danh mục</th>
                    <th>Số lượng sản phẩm</th>
                    <th>Gía min</th>
                    <th>Gía max</th>
                    <th>Gía trung bình</th>
                    </tr>
                    <?php foreach ($thongke as $key => $tk) {
                        extract($tk);
                        ?>
                        <tr>
                            <td><?php echo $key+1 ?></td>
                            <td><?php echo $id ?></td>
                            <td><?php echo $name ?></td>
                            <td><?php echo $soluong ?></td>
                            <td><?php echo number_format($gia_min) ?> VND</td>
                            <td><?php echo number_format($gia_max) ?> VND</td>
                            <td><?php echo number_format($gia_avg) ?> VND</td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
            <a href="index.php?act=chart"><input type="button" value="XEM BIỂU ĐỒ THỐNG KẾ"></a>
        </form>
    </div>
</div>
