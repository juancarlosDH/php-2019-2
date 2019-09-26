<?php
    session_start();
    $_SESSION['usuario'] = 'juan';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Sessiones</title>
    </head>
    <body>
        Esta es la sesión
        <?php
            var_dump($_SESSION);
         ?>
    </body>
</html>
