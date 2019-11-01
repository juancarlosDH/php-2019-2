<?php
require('conexion.php');

$errorEmail = '';
$invalidError = '';

if($_POST){

    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);


    //voy a validar que el user no este registrado o repetido
    $sql = 'SELECT * FROM users WHERE email = :email;';
    //preparo la consulta
    $sentencia = $conex->prepare($sql);
    //bindeo los placeholders
    $sentencia->bindValue(':email', $email);
    //ejecuto la consulta
    $sentencia->execute();
    //solo necesito si hay algun registro en la tabla con este email
    $cantidad = $sentencia->rowCount();

    if ($cantidad != 0) {
        $errorEmail = 'El Email ya esta registrado';
        $invalidError = 'is-invalid';
    } else {

        //creo la sql
        $sql = 'INSERT INTO users ( name, email, password)
                VALUES (:nombre, :email, :pass);';
        //preparo la consulta
        $sentencia = $conex->prepare($sql);
        //bindear los placeholders
        $sentencia->bindValue(':nombre', $nombre);
        $sentencia->bindValue(':email', $email);
        $sentencia->bindValue(':pass', $pass);
        //ejecutar la consulta
        $sentencia->execute();

        header('location:login.php');
    }

}

    require_once('plantilla/header.php');
    require_once('plantilla/menu.php');
 ?>

      <section class="principal">
          <article class="nuevas" id="peliculas">
              <div class="peliculas">
              <h2>Unirme a Digital Movies</h2>

              <form method="post">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Tu Nombre" name="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control <?= $invalidError ?>" id="email" aria-describedby="emailHelp" placeholder="Tu Email" name="email">
                    <div class="invalid-feedback"><?= $errorEmail ?></div>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Tu Password" name="password">
                  </div>
                  <div class="form-group">
                    <label for="confirmar_password">Confirmar Password</label>
                    <input type="password" class="form-control" id="confirmar_password" name="confirmar_password" placeholder="Confirmacion del Password">
                  </div>

                  <button type="submit" class="btn btn-primary">Unirme</button>
                </form>
              </div>
          </article>
      </section>

<?php
require_once('plantilla/footer.php'); ?>
