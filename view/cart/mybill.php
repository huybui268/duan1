<div class="row mb">
    <div class="boxtrai mr">
        <div class="boxtitle">ĐƠN HÀNG CỦA TÔI</div>
        <div class="boxcontent row mb10 formds_loai">
                    <table border="1" class="mb10" style="border:#ccc;">
                        <tr>
                            <th>STT</th>
                            <th>Mã đơn hàng</th>
                            <th>Ngày đặt hàng</th>
                            <th>Tài Khoản</th>
                            <th>Tổng giá trị đơn hàng</th>
                            <th>Tình trạng đơn hàng</th>
                        </tr>
                        <?php foreach ($listbill as $key => $list) { 
                            extract($list);
                            $ttdh=get_ttdh($bill_status);
                             ?>
                            <tr>
                                <td><?php echo $key+1 ?></td>
                                <td>DAM-<?php echo $id ?></td>
                                <td><?php echo date("d/m/Y", strtotime($ngaydathang)) ?></td>
                                <td><?php echo $bill_name ?></td>
                                <td><?php echo $total ?></td>
                                <td><?php echo $ttdh ?></td>
                            </tr>
                        <?php } ?>
                    </table>
        </div>
 