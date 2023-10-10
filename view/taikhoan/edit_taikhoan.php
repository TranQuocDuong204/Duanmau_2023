<div class="row mb">
            <div class="boxtrai mr">
           
            <div class="row mb">
            <div class="boxtitle">CẬP NHẬT TÀI KHOẢN</div>
            <div class="row boxcontent formtaikhoan"> 
                <?php 
                if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))) {
                    extract($_SESSION['user']);
                }
                ?>  
                 <form action="index.php?act=edit_taikhoan" method="post">
                    <div class="row mb10">
                        Email
                          <input type="email" name="email" value="<?=$email?>" >
                    </div>
                    <div class="row mb10">
                        User
                          <input type="text" name="user" value="<?=$user?>">
                    </div>
                    <div class="row mb10">
                        Password
                          <input type="password" name="pass" value="<?=$pass?>">
                    </div>
                    <div class="row mb10">
                        Address
                          <input type="text" name="address" value="<?=$address?>">
                    </div>
                    <div class="row mb10">
                        Tell
                          <input type="text" name="tell" value="<?=$tell?>">
                    </div> 
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" value="Cập Nhật" name="capnhat">
                    <input type="reset" value="Nhập lại">
                    </div>
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

        
     