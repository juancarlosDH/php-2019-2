<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        header('location:login.php');
    }
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title></title>
     </head>
     <body>
         <h1>Mi Perfil</h1>
         <div class="">
            <?= $_SESSION['email'] ?>
         </div>
         <form class="" action="logout.php" method="post">
             <button type="submit" name="button">Desloguearme</button>
         </form>











     </body>
 </html>
