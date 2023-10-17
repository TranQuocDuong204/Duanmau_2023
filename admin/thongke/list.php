<div class="row">
        <div class="row frmtitle"><h1>Danh sách thống kê </h1></div>
            <div class="row frmcontent">
                    <div class="row mb10 frmdsloai">
                       <table>
                        <tr>
                            <th>STT</th>
                            <th>Loại Hàng</th>
                            <th>Số Lượng</th>
                            <th>Giá Cao Nhất</th>
                            <th>Giá Thấp Nhất</th>
                            <th>Giá Trung Bình</th>
                            
                        </tr>
                        <?php 
                            foreach($listthongke as $thongke){
                                extract($thongke);
                                
                                echo '<tr>
                                        <td>'.$madm.'</td>
                                        <td>'.$tendm.'</td>
                                        <td>'.$countsp.'</td>
                                        <td>'.$maxprice.'</td>
                                        <td>'.$minprice.'</td>
                                        <td>'.$avgprice.'</td>
                                    </tr>';
                            }
                        ?>
                        
                       </table>
                    </div>
                    <div class="row mb10">
                        <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
                    </div>
        </div>
</div>