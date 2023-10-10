<div class="row mb">
                <div class="boxtitle">TÀI KHỎAN</div>
                <div class="boxcontent formtaikhoan">
                    <?php 
                    if(isset($_SESSION['user'])) {
                        extract($_SESSION['user']);
                    
                    ?>
                     <div class="row mb10">
                        Xin Chao<br>
                        <?=$user?>
                        </div>
                    <div class="row mb10">
                              <li><a href="index.php?act=quenmk">Quên Mật khẩu</a></li>
                              <li><a href="index.php?act=edit_taikhoan">Cập nhật tài khỏan</a></li>
                              <?php
                              if($role==1){
                              ?>
                              <li><a href="admin/index.php">Đăng nhập Admin</a></li>
                              <?php }?>
                              <li><a href="index.php?act=thoat">Thoát</a></li>
                    </div>
                    <?php 
                    }else {
                    
                    ?>
                    <form action="index.php?act=dangnhap" method="post">
                        <div class="row mb10">
                        Tên Đăng Nhập<br>
                        <input type="text" name="user" >
                        </div>
                        <div class="row mb10">
                        Mật Khẩu<br>
                        <input type="password" name="pass">
                        </div>
                        <div class="row mb10">
                        <input type="checkbox" name="">Ghi nhớ tài khoản?
                        </div>
                        <div class="row mb10">
                        <input type="submit" value="Đăng nhập" name="dangnhap">
                        </div>
                    </form>
                    <li><a href="view/taikhoan/quenmk.php">Quên Mật khẩu</a></li>
                    <li><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
                    <?php }?>
                </div>
             </div>
             <div class="row mb">
                <div class="boxtitle"> DANH MỤC</div>
                <div class="boxcontent2 menudoc">
                    <ul>
                        <?php 
                        foreach($dsdm as $dm) {
                            extract($dm);
                            $linkdm="index.php?act=sanpham&iddm=".$id;
                            echo'<li><a href="'.$linkdm.'">'.$name.'</a></li>';
                        }
                        ?>
                        <!-- <li><a href="#">Dong ho</a></li>
                        <li><a href="#">Lap top</a></li>
                        <li><a href="#">Dien Thoai</a></li>
                        <li><a href="#">Ba lo</a></li> -->
                    </ul>
                </div>
                <div class="boxfooter searbox">
                    <form action="index.php?act=sanpham" method="post">
                        <input type="text" name="kyw">
                        <input type="submit" name="timkiem" value="Tìm kiếm">
                    </form>
                </div>
             </div>
             <div class="row">
                <div class="boxtitle">YÊU THÍCH</div>
                <div class="row boxcontent">
                    <?php 
                      foreach($dstop10 as $sp) {
                        extract($sp);
                        $linksp ="index.php?act=sanphamct&idsp=".$id;
                        $img=$img_path.$img;
                        echo '<div class="row mb10 top10">
                        <a href="'.$linksp.'"><img src="' . $img . '" alt=""></a>
                        <a href="'.$linksp.'">'.$name.'</a>
                    </div>';
                      }
                    ?>
                    <!-- <div class="row mb10 top10">
                        <img src="view/images/products/1001.jpg" alt="">
                        <a href="#">Dong ho1</a>
                    </div>
                    <div class="row mb10 top10">
                        <img src="view/images/products/1002.jpg" alt="">
                        <a href="#">Dong ho2</a>
                    </div>
                    <div class="row mb10 top10">
                        <img src="view/images/products/1018.jpg" alt="">
                        <a href="#">Balo</a>
                    </div>
                    <div class="row mb10 top10">
                        <img src="view/images/products/1004.jpg" alt="">
                        <a href="#">Gaming MSI</a>
                    </div>
                    <div class="row mb10 top10">
                        <img src="view/images/products/1005.jpg" alt="">
                        <a href="#">Canon 1995</a>
                    </div>
                    <div class="row mb10 top10">
                        <img src="view/images/products/1006.jpg" alt="">
                        <a href="#">Lenove Intro5</a>
                    </div>
                    <div class="row mb10 top10">
                        <img src="view/images/products/1007.jpg" alt="">
                        <a href="#">Mu tai heo</a>
                    </div>
                    <div class="row mb10 top10">
                        <img src="view/images/products/1008.jpg" alt="">
                        <a href="#">Macbook E1500</a>
                    </div> -->
                </div>
             </div>
                