<?php
    include "../../model/config.php";
    $name_cate = $_POST["name"];
    $query = "insert into loai_hang(ten_loai_hang) values('$name_cate ') ";
    connect($query);
    header("location:../../loai_hang.php");
?>  