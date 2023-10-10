<div class="row mb">
            <div class="boxtrai mr">
            <div class="row">
            <?php
        if (!empty($onesp) && is_array($onesp)) {
            // Biến $onesp chứa dữ liệu hợp lệ, bạn có thể sử dụng extract
            extract($onesp);

            echo '<div class="row mb">';
            echo '<div class="boxtitle">' . $name . '</div>';
            echo '<div class="row boxcontent">';
            
            $img = $img_path . $img;
            echo '<div class="row mb spct"><img src="' . $img . '"></div>';
            echo $mota;
            
            echo '</div>';
            echo '</div>';
        } else {
            // Xử lý khi dữ liệu không hợp lệ
            echo "Dữ liệu sản phẩm không hợp lệ hoặc không tồn tại.";
        }
        ?>
                
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function(){
                      $("#binhluan").load("view/binhluan/binhluanform.php", {idpro: <?=$id?>});
                  });
</script>
             <div class="row" id="binhluan">
               
             </div>
            <div class="row mb">
                <div class="boxtitle">Sản Phẩm Cùng Loại</div>
                <div class="row boxcontent">
                    <?php
                    foreach($sp_cung_loai as $sp_cung_loai) {
                        extract($sp_cung_loai);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        echo '<li><a href="'.$linksp.'">'.$name.'</a></li>';
                    }
                    ?>
                </div>
             </div>  
            </div>
        </div>
        <div class="boxphai">
            <?php include "boxright.php";?>
        </div> 

        
     