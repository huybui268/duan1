 <?php extract($sp); 
  $hinh = $image_path . $img;
 ?>
 
<style>
    .buy{
        margin-top: 20px;
    margin-left: 115px;
    }
    .right img{
        height: 290px;
        width:340px;
    }
    .right{
        float: left;
        width: 30%;
    }
    .left{
        float: right;
        width :70%;
        height:300px;
    }
    li{
        list-style-type: none;
    }
    .gia{
        color: red;
    }
    .cuoi{
       width:1000px;
        padding-left: 150px;
       
    }
</style>
<div id="wp-products">
            <h2>Chi tiết sản phẩm </h2>
<br> 
             <form action="index.php?act=addtocart" method="post">
                <div class="right">
                    <img src="<?php echo $hinh ?>">
                    <input type="hidden" name="hinh" value="<?php echo $hinh ?>">
                </div>
                <div class="left">
                    <input type="hidden" name="name">
                      <h1 >Tên hàng: <?php echo $name ?></h1>
                      <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="hidden" name="name" value="<?php echo $name ?>">
                   
                    <input type="hidden" name="price" value="<?php echo $price ?>">
                      <h3>Đơn giá:<a class="gia"> <?php echo number_format($price) ?> VND</a></h3>
                       <label for=""> Số Lượng</label>
                       <input type="number" name="soluong">
                       <br> 
                        <br>
                        <div class=" mb10 formds_loai"><h3>Màu Sắc: 
                    <input type="radio" value="pink" name="mau" checked>Pink
                    <input type="radio" value="blue" name="mau">Blue
                    <input type="radio" value="black" name="mau">Black
                    <input type="radio" value="gray" name="mau">Gray
                    <input type="radio" value="green" name="mau">Green
                </h3>
                </div>
                       <br><br>
                   
                       <div class="add"><a href=""><input type="submit" name="addtocart" value="Giỏ Hàng"></a></div>
                      
                      </form>
                      
                  

 </div>  
 <div></div>
      <div class="cuoi">
                   
                <h3>Mô tả sản phẩm: </h3>
                <?php echo $mota_dai?>
                </div>
                <div class="boxtitle">BÌNH LUẬN</div>
            <div class="boxcontent3">
                <table>
                    <?php foreach($binhluan as $bl) { 
                        extract($bl);
                        ?>
                    <tr><td><?php echo $user ?>:...</td>
                        <td><?php echo $noidung ?></td>
                        <td>-<?php echo date("d/m/Y", strtotime($ngaybinhluan)) ?></td>
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
             
               
