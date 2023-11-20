<style>
.my-class tr td {
    border: 1px solid black;
}
.my-class th{
    border: 1px solid black;
    background: green;
}
.my-class{
    
}
.thea{
    padding-left: 100px;
}
</style>

<div class="row2">
    <div class="row2 font_title">
        <h1>Danh Sách Phòng

        </h1>
    </div>
    <div class="row2 form_content ">
        <form action="#" method="POST">
            <div class="row2 mb10 formds_loai">
               
                <table class="my-class">
                    <tr>
                        <th></th>
                        <th>Name Hotel</th>
                        <th>address</th>
                        <th>Mô tả </th>
                        <th>Số phòng</th>
                        <th>Tiện ích </th>
                         <th>HÌNH</th>
                        <th>GIÁ</th>
                        <th>Chức Năng</th>
                        
                    </tr>

                    <?php
                    foreach ($listhotel as $hotel) {
                        extract($hotel);
                        // $listsanpham as $sanpham
                        // extract($sanpham);
                        // $hinhpath = "../upload/" . $img;

                        $suasp = "index.php?act=updatehotel&idht=" . $hotel_id;
                        $hard_delete = "index.php?act=hard_delete&idht=" . $hotel_id;
                        // if (is_file($hinhpath)) {
                        //     $hinhpath = "<img src= '" . $hinhpath . "' width='100px' height='100px'>";
                        // } else {
                        //     $hinhpath = "No file img!";
                        // }
                        echo '<tr>
                            <td>' . $hotel_id . '</td>
                            <td>' . $hotel_name . '</td>
                            <td>' . $address. '</td>
                            <td>' . $description . '</td>
                            <td>' . $room_count . '</td>
                            <td>' . $amenities . '</td>
                            <td>' . $image_url . '</td>
                            <td>' . $price . '</td>
                           
                            <td class="thea">
                            
                                <a href="' . $suasp . '"><input type="button" value="Sửa"> </a>  
                                <a href="' . $hard_delete .'"><input type ="button" value="Xóa " onclick="return confirm(\'Bạn có chắc chắn muốn xóa\')"></a>
                            </td>
                    </tr>';
            
                    }
                    ?>
                </table>
            </div>
            <div class="row mb10 ">
               
                <a href="index.php?act=addsp"> <input class="mr20" type="button" value="NHẬP THÊM"></a>
            </div>
        </form>
    </div>
</div>




</div>