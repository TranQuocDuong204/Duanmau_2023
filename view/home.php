<div class="row mb">
            <div class="boxtrai mr">
            <div class="row">
                <div class="banner mb">
                    <!-- Slideshow container -->
                      <div class="slideshow-container">

                       <!-- Full-width images with number and caption text -->
                      <div class="mySlides fade">
                       <img src="view/images/products/1004.jpg" style="width:100%">
                       <div class="text">Laptop Intro 5</div>
                     </div>

                     <div class="mySlides fade">
                       <img src="view/images/products/1019.jpg" style="width:100%">
                       <div class="text">Canon GTX</div>
                     </div>

                      <div class="mySlides fade">
                        <img src="view/images/products/1018.jpg" style="width:100%">
                        <div class="text">Balo Hiệu con Thỏ</div>
                      </div>

<!-- Next and previous buttons -->
                     
                      </div>
                      <br>

                      <!-- The dots/circles -->
                      <div style="text-align:center">
                      <span class="dot" onclick="currentSlide(1)"></span>
                      <span class="dot" onclick="currentSlide(2)"></span>
                      <span class="dot" onclick="currentSlide(3)"></span>
                      </div>
                </div>
            </div>
            <div class="row">
            <?php
                   $i = 0;
                   foreach ($spnew as $sp) {
                    extract($sp);
                       $linksp ="index.php?act=sanphamct&idsp=".$id;
                       $hinh = $img_path . $sp['img'];
                       $mr = ($i == 2 || $i == 5 || $i == 8) ? "" : "mr";
                       
                       echo '<div class="boxsp ' . $mr . '">
                           <div class="row img">
                            <a href="'.$linksp.'"><img src="' . $hinh . '" alt=""></a>
                           </div>
                           <p>$' . $sp['price'] . '</p>
                           <a href="'.$linksp.'">' . $sp['name'] . '</a>

                           <div class="row btnaddtocart">
                           <form action="index.php?act=addtocart" method="post">
                           <input type="hidden" name="id" value="'.$id.'">
                           <input type="hidden" name="name" value="'.$name.'">
                           <input type="hidden" name="img" value="'.$img.'">
                           <input type="hidden" name="price" value="'.$price.'">
                           <input type="submit" name="addtocart" value="Thêm vào giỏ hàng" style="margin: 7%">
                           </form>
                           
                           </div>
                       </div>';
    
                       $i += 1;
                    }
                    ?>

                <!-- <div class="boxsp mr">
                    <div class="row img">
                        <img src="images/products/1001.jpg" alt="">
                    </div>
                    <p>$3</p>
                    <a href="#">Dong ho</a>
                </div>
                <div class="boxsp mr">
                    <div class="row img">
                        <img src="images/products/1002.jpg" alt="">
                    </div>
                    <p>$3</p>
                    <a href="#">Dong ho1</a>
                </div>
                <div class="boxsp mr">
                    <div class="row img">
                        <img src="images/products/1018.jpg" alt="">
                    </div>
                    <p>$3</p>
                    <a href="#">Balo</a>
                </div>
                <div class="boxsp mr">
                    <div class="row img">
                        <img src="images/products/1019.jpg" alt="">
                    </div>
                    <p>$3</p>
                    <a href="#">Canon Luxury</a>
                </div>
                <div class="boxsp mr">
                    <div class="row img">
                        <img src="images/products/1005.jpg" alt="">
                    </div>
                    <p>$3</p>
                    <a href="#">Cannon 1995r</a>
                </div>
                <div class="boxsp mr">
                    <div class="row img">
                        <img src="images/products/1006.jpg" alt="">
                    </div>
                    <p>$3</p>
                    <a href="#">Asus Nitro5</a>
                </div>
                <div class="boxsp mr">
                    <div class="row img">
                        <img src="images/products/1007.jpg" alt="">
                    </div>
                    <p>$3</p>
                    <a href="#">Mu tai heo</a>
                </div>
                <div class="boxsp mr">
                    <div class="row img">
                        <img src="images/products/1021.jpg" alt="">
                    </div>
                    <p>$3</p>
                    <a href="#">Limit 1999</a>
                </div>
                <div class="boxsp mr">
                    <div class="row img">
                        <img src="images/products/1009.jpg" alt="">
                    </div>
                    <p>$3</p>
                    <a href="#">Nhan kim cuong</a>
                </div>-->
            </div> 

            </div>
            <div class="boxphai">
             <?php 
             include "boxright.php";
             ?>
            </div>
        </div>