<div class="row mb">
            <div class="boxtrai mr">
           
            <div class="row mb">
            <div class="boxtitle">QUÊN MẬT KHẨU</div>
            <div class="row boxcontent formtaikhoan">   
                 <form action="index.php?act=quenmk" method="post">
                    <div class="row mb10">
                        Email
                          <input type="email" name="email">
                    </div>
                   
                    <input type="submit" value="Gửi" name="guiemail">
                    <input type="reset" value="Nhập lại">
                    
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

        
     