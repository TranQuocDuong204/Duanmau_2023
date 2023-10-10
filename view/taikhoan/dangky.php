<div class="row mb">
            <div class="boxtrai mr">
           
            <div class="row mb">
            <div class="boxtitle">ĐĂNG KÝ THÀNH VIÊN</div>
            <div class="row boxcontent formtaikhoan">   
                 <form action="index.php?act=dangky" method="post">
                    <div class="row mb10">
                        Email
                          <input type="email" name="email">
                    </div>
                    <div class="row mb10">
                        User
                          <input type="text" name="user">
                    </div>
                    <div class="row mb10">
                        Password
                          <input type="password" name="pass">
                    </div>
                    <input type="submit" value="Đăng ký" name="dangky">
                    <input type="reset" value="Nhap lai">
                    
                 </form> 
                 <h2 class="thongbao"></h2> 
                 <?php 
                 
                 if(isset($thongbao)&&($thongbao!="")) {
                    echo $thongbao;
                 }
                 ?>      
             </div>
             </div>
        </div>
        <div class="boxphai">
            <?php include "view/boxright.php";?>
        </div> 
</div>

        
     