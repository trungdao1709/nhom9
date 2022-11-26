<?php 
    include "../../model/config.php";

    $name= $_POST["name"];
    $email= $_POST["email"];
    $pass= $_POST["pass"];
    $role = $_POST["role"];
    $img = $_FILES["img"]["name"];

    $id= $_POST["id"];
    $query = "UPDATE user SET ten = '$name', tai_koan ='$email', mat_khau='$pass', vai_tro = '$role', hinh = '$img' where id=$id";
    connect($query);
    move_uploaded_file($_FILES["img"]["tmp_name"],"../../assets/img/".$_FILES["img"]["name"]);

    header("location:../../user.php");
?>