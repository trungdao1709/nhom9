
<?php
include "../../model/config.php";

$productName = $_POST["name"];
$productPrice = $_POST["price"];
$so_luong = $_POST["so_luong"];
$ngay_nhap = $_POST["ngay_nhap"];
$productDesc = $_POST["mo_ta"];
$productImage = $_FILES["image"]["name"];
$query = " INSERT into hang(ten_hang, hinh_anh,gia,ngay_nhap,so_luong,mo_ta) values(
    '$productName','$productImage','$productPrice','$ngay_nhap','$so_luong','$productDesc') ";
connect($query);
move_uploaded_file($_FILES["image"]["tmp_name"], "../../asset/images/product" . $_FILES["imgage"]["name"]);
header("location:../../hang.php");
?>