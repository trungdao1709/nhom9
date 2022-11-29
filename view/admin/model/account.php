<?php
if(!empty($_SESSION)){
    $idUser=$_SESSION['user']['id'];
   
}
function getOneUser($id){
    $sql = "SELECT * FROM user WHERE id = '$id'";
    return getOne($sql);
}

    $currentAcc = getOneUser($idUser);
?>

