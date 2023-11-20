<?php 
    extract($sp);
?>
<div class="row mb">
    <div class="boxtrai mr">
        <div class="mb">
            <div class="boxtitle"><?php echo $name ?></div>
            <div class="boxcontent">
                <?php 
                $linkimg=$image_path.$img;
                ?>
                <div class="two">
                <img src="<?php echo $linkimg ?>">
                <ul>
                    <li>Tên hàng: <?php echo $name ?></li>
                    <li>Đơn giá: <?php echo number_format($price) ?> VND</li>
                    <li>Lượt xem: <?php echo $luotxem ?></li>
                    <li><a href="" class="dathang">Đặt hàng</a></li>
                </ul>
                </div><br><br>
                <span class="mota">MÔ TẢ SẢN PHẨM</span>
                <hr>
                <p><?php echo $mota ?></p>
            </div>
        </div>
        <div class="mb">
            <div class="boxtitle">BÌNH LUẬN</div>
            <div class="boxcontent3">
                <table>
                    <?php foreach($binhluan as $bl) { 
                        extract($bl);
                        ?>
                    <tr><td><?php echo $user ?></td>
                    
                        <td><?php echo $noidung ?></td>
                        
                        <td><?php echo date("d/m/Y", strtotime($ngaybinhluan)) ?></td>
                    </tr>
                        <?php } ?>
                </table>
            </div>
            <div class="box_search">
                <?php if(isset($_SESSION['user'])){ ?>
                    <form action="index.php?act=ctsp&idsp=<?=$sp['id']?>" method="POST">
                    <input type="hidden" name="idpro" value="<?=$sp['id']?>">
                    <input type="text" name="noidung">
                    <input type="submit" name="guibinhluan" value="Gửi bình luận">
                </form>
                <?php } else{ ?>
                <h2 style="color: red;">Bạn cần đăng nhập để bình luận</h2>
                <?php } ?>
            </div>
        </div>
        <div class=" mb">
            <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
            <div class="boxcontent row">
                <?php foreach ($sp_cungloai as $sp_cl) { 
                    extract($sp_cl);
                    $link="index.php?act=ctsp&idsp=$id";
                    $img=$image_path.$img;
                    ?>
                    <div class="row mb10 spcl">
                    <img src="<?php echo $img ?>" alt="">
                    <li><a href="<?php echo $link ?>"><?php echo $name ?></a></li>
                    </div><hr>
                    <?php } ?>
            </div>
        </div>
    </div>
    <?php include "boxphai.php" ?>
</div>