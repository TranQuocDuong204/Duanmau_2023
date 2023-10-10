<div class="row mb">
            <div class="boxtrai mr">
            <div class="row">
            <div class="boxtitle">Sản Phẩm <strong><?=$tendm?></strong></div>;
           <div class="row boxcontent">
            <?php
              $i = 0;
              foreach ($dssp as $sp) {
               extract($sp);
                  $linksp ="index.php?act=sanphamct&idsp=".$id;
                  $hinh = $img_path . $sp['img'];
                  $mr = ($i == 2 || $i == 5 || $i == 8 || $i == 11) ? "" : "mr";
                  
                  echo '<div class="boxsp ' . $mr . '">
                      <div class="row img">
                       <a href="'.$linksp.'"><img src="' . $hinh . '" alt=""></a>
                      </div>
                      <p>$' . $sp['price'] . '</p>
                      <a href="'.$linksp.'">' . $sp['name'] . '</a>
                  </div>';

                  $i += 1;
               }
            ?>
            </div>
            </div>
        </div>
        <div class="boxphai">
            <?php include "boxright.php";?>
        </div> 

        
     