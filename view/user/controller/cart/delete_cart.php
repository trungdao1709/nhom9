<?php
    session_start();
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $arr = $_SESSION['cart'];
       $new_arr = array_slice( $arr,$id + 1,$id + 2);
       $_SESSION['cart'] = $new_arr;
       header("Location: ../../cart.php");
    }
?>