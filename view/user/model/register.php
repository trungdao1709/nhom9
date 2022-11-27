<?php
function createAccount($email, $userName, $password){
    $sql = "INSERT INTO user (ten, mat_khau, tai_koan, vai_tro)
     VALUES('$userName','$password','$email','user')";
    getAll($sql);
}


function checkEmail($email){
    $sql = "SELECT * FROM user WHERE tai_koan = '$email'";
    return getOne($sql);
}

?>