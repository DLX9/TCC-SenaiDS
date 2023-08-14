<?php 
    if(session_start()){
        unset($_SESSION['uemail']);
        session_destroy();
        header("location: ../login/login.php");
    }
?>