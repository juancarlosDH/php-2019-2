<?php
session_start();
var_dump($_SESSION);

if (isset($_COOKIE['mantenerme_logeado'])) {
    $_SESSION['email'] = $_COOKIE['mantenerme_logeado'];
    header('location:perfil.php');
}

if ($_POST) {
    //paso las validaciones
    $errores = validarLogin($_POST);
    $email = $_POST['email'];


    $_SESSION['email'] = $email;

    if (isset($_POST['mantenerme'])) {
        //aqui creo una cookie para mantener al usuario logeado
        setcookie('mantenerme_logeado', $email, time() + 60*60*24*30);
    }

    header('location:perfil.php');
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form class="" action="login.php" method="post">
            <div class="">
                <label for="">email</label>
                <input type="text" name="email" value="">
            </div>
            <div class="">
                <input type="checkbox" name="mantenerme">
                <label for="">Mantenerme logeado</label>
            </div>
            <button type="submit">Iniciar</button>
        </form>
    </body>
</html>
