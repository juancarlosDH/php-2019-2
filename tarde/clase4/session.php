<?php
    session_start();

    $_SESSION['name'] = 'Juan';


 ?>
Hola <?= $_SESSION['name'] ?>
