<div class="row">
            <div class="row frmtitle"><h1>DANH SÁCH TÀI KHOẢN</h1></div>
            <div class="row frmcontent">
              
                    <div class="row mb10 frmdsloai">
                       <table>
                        <tr>
                            <th></th>
                            <th>MÃ TK</th>
                            <th>USERNAME</th>
                            <th>PASS</th>
                            <th>EMAIL</th>
                            <th>ADDRESS</th>
                            <th>TELL</th>
                            <th>VAI TRÒ</th>
                            <th></th>
                        </tr>
                        <?php 
                        foreach($listtaikhoan as $taikhoan) {
                        extract($taikhoan);
                        $suatk = "index.php?act=suatk&id=".$id; // Loại bỏ khoảng trắng sau 'id'
                        $xoatk = "index.php?act=xoatk&id=".$id; // Loại bỏ khoảng trắng sau 'id'

                        echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$user.'</td>
                        <td>'.$pass.'</td>
                        <td>'.$email.'</td>
                        <td>'.$address.'</td>
                        <td>'.$tell.'</td>
                        <td>'.$role.'</td>
                        <td><a href="'.$suatk.'"><input type="button" style="margin-bottom: 10px" value="Sửa"></a> <a href="'.$xoatk.'"><input type="button" value="Xoa"></a></td>
                        </tr>';
                        };
                        ?>

                        
                       </table>
                    </div>
                    
                    <div class="row mb10">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa các mục đã chọn">
                        <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
                    </div>
                
            </div>
        </div>