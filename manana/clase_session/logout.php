<?php
    session_start();
    session_destroy();

    setcookie('mantenerme_logeado', '', time() - 1);

    header('location:login.php');
 ?>
