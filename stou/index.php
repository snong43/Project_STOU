<?php
    session_start();

    if (isset($_SESSION['ROLE'])) {
      header("Location: ./action/chkLogin.php");
    }else{
      header("Location: login.php");
    }
    exit();

?>