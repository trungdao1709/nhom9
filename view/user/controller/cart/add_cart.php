
<?php
if(isset($_SESSION['mycart']))$_SESSION['addcart']=[];
if(isset($_POST['addcart'])&&($_POST['addcart'])){
    $id=$_POST['id'];
    $hinh_anh=$_POST['hinh_anh'];
    $ten_hang=$_POST['ten_hang'];
    $gia=$_POST['gia'];
    $so_luong=1;
    $tong=$so_luong * $gia;
    $new_hang=[$id,$hinh_anh,$ten_hang,$gia,$so_luong,$tong];
    array_push($_SESSION['mycart'],$new_hang);

}
include "../../cart.php";
?>