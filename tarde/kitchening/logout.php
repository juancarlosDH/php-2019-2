<?php

session_start();
session_destroy();
setcookie('recuerdame', '', time()-1);
header('location:login.php');
