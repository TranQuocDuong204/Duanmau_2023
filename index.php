<?php 
    session_start();
    include "model/pdo.php";
    include "model/danhmuc.php";
    include "model/sanpham.php";
    include "model/taikhoan.php";
    include "global.php";

    if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

    $spnew=loadall_sanpham_home();
    $dsdm=loadall_danhmuc();
    $dstop10=loadall_sanpham_top10();

    include "view/header.php";
    if(isset($_GET['act'])&&($_GET['act']!="")) {
        $act=$_GET['act'];
        switch($act) {
            case 'sanpham':
                if (isset($_POST['kyw']) && ($_POST['kyw']!="")) { 
                  $kyw=$_POST['kyw'];
                }else {
                    $kyw="";
                }
                if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) { 
                    $iddm =($_GET['iddm']); 
                    
                } else {
                    $iddm=0;
                }
                    $dssp=loadall_sanpham($kyw,$iddm);
                    $tendm=load_ten_dm($iddm);
                    include "view/sanpham.php";
                break;



            case 'sanphamct':
                if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) { 
                    $onesp = loadone_sanpham($_GET['idsp']);
                    extract($onesp);
                    $sp_cung_loai=load_sanpham_cungloai($_GET['idsp'], $iddm);
                    include "view/sanphamct.php";
                } else {
                    include "view/home.php"; // Bạn cần bỏ comment để include trang chủ
                }
                break;
            case 'gioithieu':
                include "view/gioithieu.php";
                break;
            case 'dangky':
                if (isset($_POST['dangky']) && ($_POST['dangky'])) { 
                    $email=$_POST['email'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    insert_taikhoan($email, $user, $pass);
                    $thongbao="Da dang ky thanh cong de thuc hien chuc nang binh luan";
                }
                    include "view/taikhoan/dangky.php";
                    break;
            case 'dangnhap':
                        if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) { 
                            $user=$_POST['user'];
                            $pass=$_POST['pass'];
                            $checkuser=checkuser($user,$pass);
                            if(is_array($checkuser)) {
                                $_SESSION['user'] =$checkuser;
                                header('Location: index.php');
                                $thongbao="Dang nhap thanh cong";
                            }else {
                                $thongbao="Tai khoan khong ton tai. Vui long kiem tra hoac dang ki!";
                            }
                            
                        }
                            include "view/taikhoan/dangky.php";
                            break;
            case 'edit_taikhoan':
                                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) { 
                                    $user=$_POST['user'];
                                    $pass=$_POST['pass'];
                                    $email=$_POST['email'];
                                    $address=$_POST['address'];
                                    $tell=$_POST['tell'];
                                    $id=$_POST['id'];

                                    update_taikhoan($id, $user, $pass, $email, $address, $tell);
                                    $_SESSION['user']=checkuser($user,$pass);
                                    header('Location: index.php?act=edit_taikhoan.php');
                                }
                                    include "view/taikhoan/edit_taikhoan.php";
                                    break;
            case 'quenmk':
                    if (isset($_POST['guiemail']) && ($_POST['guiemail'])) { 
                        
                        $email=$_POST['email'];
                         
                                           
                        $checkemail=checkemail($email);
                        if(is_array($checkemail)) {
                            $thongbao="Mat khau cua ban la: ".$checkemail['pass'];
                        }else {
                            $thongbao="Email nay khon ton tai";
                        }
                 }
                        include "view/taikhoan/quenmk.php";
                        break;
            case 'addtocart': 
                if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                  $id=$_POST['id'];
                  $name=$_POST['name'];
                  $img=$_POST['img'];
                  $price=$_POST['price'];
                  $soluong=1;
                  $ttien=$soluong*$price;
                  $spadd=[$id, $name, $img, $price, $soluong, $ttien];
                  array_push($_SESSION['mycart'],$spadd);
                }
                include "view/cart/viewcart.php";
                break;
            case 'delcart':
                    if(isset($_GET['idcart'])) {
                        array_splice($_SESSION['mycart'],$_GET['idcart'],1);
                    } else {
                        // If no specific item is specified to remove, clear the entire cart
                        $_SESSION['mycart'] = [];
                    }
                    header('Location: index.php?act=viewcart');
                    break;
            case 'bill':
                include "view/cart/bill.php";
                break;
                

            case 'thoat':
                session_unset();
                header("Location: index.php");
                include "view/lienhe.php";
                break;
            case 'lienhe':
                include "view/lienhe.php";
                break;
            default:
                include "view/home.php";
                break;
            }
    }else {
        include "view/home.php";
    }
    
    include "view/footer.php";


?>