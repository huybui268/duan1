<div class="row mb">
    <div class="boxtrai mr">
        <div class="row">
            <div class="banner">
                <img id="banner" src="../image/bg0.jpg" alt="">
                <button class="pre" onclick="pre()">&#10094;</button>
                <button class="next" onclick="next()">&#10095;</button>
            </div>
        </div>
        <div class="row">
            <?php
            $i = 1;
            foreach ($dssp as $sp) {
                extract($sp);
                $hinh = $image_path . $img;
                $link="index.php?act=ctsp&idsp=$id";
                if ($i % 3 == 0) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                $i++; ?>
                <div class="boxsp con <?php echo $mr ?>">
                    <div class="box_items_img">
                    <img src="<?php echo $hinh ?>" alt="">
                    <form action="index.php?act=addtocart" method="post">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="hidden" name="name" value="<?php echo $name ?>">
                    <input type="hidden" name="hinh" value="<?php echo $hinh ?>">
                    <input type="hidden" name="price" value="<?php echo $price ?>">
                    <div class="add"><a href=""><input type="submit" name="addtocart" value="ADD TO CART"></a></div>
                    </form>
                    </div>
                    <p class="price"><?php echo number_format($price) ?> VND</p>
                    <a class="item_name" href="<?php echo $link ?>"><?php echo $name ?></a>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php include "boxphai.php" ?>
</div>
<!-- END MAIN -->