<?php 
    include "../../model/config.php";
    $CatetName = $_POST["name"];
    $id=$_POST["id"];
    $query = " UPDATE loai_hang SET ten_loai_hang = '$CatetName' where id=$id";
    connect($query);
    header("location:../../loai_hang.php");
?>
