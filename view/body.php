<style>
    .buy{
        margin-top: 20px;
    margin-left: 115px;
    }
  #list-products .item{
    height: 600px;
  }
  .price1{
    text-align: center;
    color:white;
    /* text-decoration-line:line-through; */
  }
  
 
</style>
<div id="wp-products">
            <h2>SẢN PHẨM CỦA CHÚNG TÔI</h2>
            <ul id="list-products">
   <?php
            $i=1;
            foreach ($spnew as $key => $sp) {
                extract($sp);
                $hinh = $image_path . $img;
                $linksp="index.php?act=ctsp&idsp=".$id;
                if(($i==2)||($i==5)||($i==8)){
                    $mr="";
                }else{
                    $mr="mr";
                }
               
            echo '
                <div class="item '.$mr.'>">

                    <img class="img1" src="'. $hinh .'"alt="">
                    <div class="stars">
                        <span>
                            <img src="../assets/star.png" alt="">
                        </span>
                        <span>
                            <img src="../assets/star.png" alt="">
                        </span>
                        <span>
                            <img src="../assets/star.png" alt="">
                        </span>
                        <span>
                            <img src="../assets/star.png" alt="">
                        </span>
                        <span>
                            <img src="../assets/star.png" alt="">
                        </span>
                    </div>

                    <div class="name"> <a class="item_name" href="'. $linksp .'">'.$name.'</a>
                    </div>
                    <div class="desc" href="'. $linksp .'">'.$mota.'</div>
                    <div class="price1" href="'. $linksp .'">Giá niêm yết:   '. number_format($gia).' VND</div>
                    <div class="price" href="'. $linksp .'">Giảm còn:   '. number_format($price).' VND</div>
                    <button class="buy" name="addtocart">Buy now</button>

                </div>';
                $i+=1;
             
               
            }
            ?>



            </ul>
            <div class="list-page">
                <div class="item">
                    <a href="">1</a>
                </div>
                <div class="item">
                    <a href="">2</a>
                </div>
                <div class="item">
                    <a href="">3</a>
                </div>
                <div class="item">
                    <a href="">4</a>
                </div>
            </div>
        </div>
        <div id="saleoff">
            <div class="box-left">
                <h1>
                    <span>GIẢM GIÁ LÊN ĐẾN</span>
                    <span>20%</span>
                </h1>
            </div>
            <div class="box-right"></div>
        </div>