<?php 
// session_start();
            if($_SESSION["user"]){
                session_unset();
                $yourURL="http://localhost/nhom9/view/user/login.php";
                echo ("<script>location.href='$yourURL'</script>");
            }