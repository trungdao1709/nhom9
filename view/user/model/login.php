<?php

    function checkUser($email,$pass){
        $sql = "SELECT * FROM user WHERE tai_koan = '$email' AND mat_khau = '$pass'";
        $data = getOne($sql);
        return $data;
    }
?>