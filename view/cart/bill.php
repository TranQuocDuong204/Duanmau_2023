<div class="row mb">
    <div class="boxtrai mr">
        <form action="index.php?act=billcomfirm" method="post"></form>
        <div class="row mb">
            <div class="boxtitle">Thông Tin Đặt Hàng</div>
        
        <div class="row boxcontent cart">
            <table>
                <?php 
                if(isset($_SESSION['user'])) {
                    $name=$_SESSION['user']['name'];
                    $address=$_SESSION['user']['address'];
                    $email=$_SESSION['user']['email'];
                    $tell=$_SESSION['user']['tell'];
                } else {
                    $name="";
                    $address="";
                    $email="";
                    $tell="";
                }
                ?>
                <tr>
                    <td>Nguoi dat hang</td>
                    <td><input type="text" name="name"  value="<?=$name?>"></td>
                </tr>
                <tr>
                    <td>Dia Chi</td>
                    <td><input type="text" name="address" value="<?=$address?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value="<?=$email?>"></td>
                </tr>
                <tr>
                    <td>Dien thoai</td>
                    <td><input type="text" name="tell" value="<?=$tell?>"></td>
                </tr>
            </table>
        </div>
    </div>
        <div class="row mb bill">
           <div class="boxtitle">
            Phuong thuc Thanh Toan
           </div>
           <div class="row boxcontent">
                 <table>
                    <tr>
                        <td><input type="radio" name="pttt" checked>Tra tien khi nhan hang</td>
                        <td><input type="radio" name="pttt" >Chuyen khoan ngan hang</td>
                        <td><input type="radio" name="pttt" >Thanh toan Online</td>
                    </tr>
                 </table>
           </div>
    </div>
            </div>

<div class="boxphai" >
    <?php include "view/boxright.php";?>
</div>

