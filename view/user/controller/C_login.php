
<?php
session_start();

if (!empty($_SESSION)) {
    if ($_SESSION['user']) {
        header('Location: home.php');
    }
}
include './model/config.php';
include './model/login.php';
$err = '';
if (isset($_POST["btn_login"])) {
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $isUser  = checkUser($email,  $pass);
    if ($email == '' || $pass == '') {
        $err = 'Vui lòng không bỏ trống';
    } else if (is_array($isUser)) {
        $_SESSION["user"] = $isUser;
        $err = '';
        header('Location: home.php');
    } else {
        $err = "Tên tài khoản hoặc mật khẩu sai";
    }
}

?>