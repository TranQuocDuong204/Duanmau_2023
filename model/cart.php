<?php

function viewcart($del) {
    global $img_path;
    $tong = 0;
    $i = 0;
    
    echo '<table>'; 
    echo '</tr>';
    
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
        
        $xoasp_th = '';
        $xoasp_td = '';
        $xoasp_td2='';
        
        if ($del == 1) {
            $xoasp_th = '<td>Thao tac</td>';
            $xoasp_td = '<td><a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" value="Xóa"></a></td>';
            $xoasp_td2 = '<td></td>';
        }
        
        echo '<tr>
                <td><img src="' . $hinh . '" alt="" height="80px"></td>
                <td>' . $cart[1] . '</td>
                <td>' . $cart[3] . '</td>
                <td>' . $cart[4] . '</td>
                <td>' . $ttien . '</td>
                ' . $xoasp_td . '
              </tr>';
        
        $i++;
    }
    
    echo '<tr>
            <td colspan="4">Tong don hang</td>
            <td>' . $tong . '</td>
            <td></td>
          </tr>';
    
    echo '</table>';
}


function tongdonhang() {
    
    $tong = 0;
    
    foreach ($_SESSION['mycart'] as $cart) {
      
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
     
    }
    return $tong;
    
 
}

function insert_bill($name, $email, $address, $tell, $pttt, $ngaydathang, $tongdonhang) {
    $sql="insert into bill(bill_name, bill_email, bill_address, bill_tell, bill_pttt, ngaydathang, total) values('$name,'$email','$address','$tell','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}

function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill) {
    $sql="insert into cart(iduser, idpro, img, name, price, soluong, thanhtien, idbill) values('$iduser', '$idpro', '$img', '$name', '$price', '$soluong', '$thanhtien', '$idbill')";
    return pdo_execute($sql);
}

function loadone_bill($id) {
    $sql ="select * from bill where id=".$id;
    $bill=pdo_query_one($sql);
    return $bill;
}


function loadall_thongke() {
    $sql = "SELECT danhmuc.id AS madm, danhmuc.name AS tendm, COUNT(sanpham.id) AS countsp, MIN(sanpham.price) AS minprice, MAX(sanpham.price) AS maxprice, AVG(sanpham.price) AS avgprice";
    $sql .= " FROM sanpham LEFT JOIN danhmuc ON danhmuc.id = sanpham.iddm";
    $sql .= " GROUP BY danhmuc.id ORDER BY danhmuc.id DESC"; // Sửa "decs" thành "DESC"
    $listtk = pdo_query($sql);
    return $listtk;
}




?>

