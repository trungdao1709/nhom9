
<?php
    session_start();
    if(!isset($_SESSION['cart'])) $_SESSION['cart']=[];

    if(isset($_POST['addcart'])){
        $id=$_POST['id'];
        $hinh_anh=$_POST['image'];
        $ten_hang=$_POST['name'];
        $gia=$_POST['gia'];
        $so_luong=1;
        $tong=$so_luong * $gia;
        // $new_hang=[$id,$hinh_anh,$ten_hang,$gia,$so_luong,$tong];
        // array_push($_SESSION["cart"],$new_hang);
        $new_hang = array (
            'id'=>$id,
            'image'=>$hinh_anh,
            'name'=>$ten_hang,
            'gia'=>$gia,
            'so_luong'=>$so_luong,
            'tong'=>$tong
        );
        $_SESSION["cart"][] = $new_hang;
    }

    header("Location: ../../cart.php");
?>