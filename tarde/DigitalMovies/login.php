<?php
require('conexion.php');
require_once('clases/autoload.php');

$email = '';
$errorEmail = '';
$invalidError = '';
$errores = [];

if($_POST){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $bd = new BaseDatos;
    $validador = new Validador($bd);
    $errores = $validador->validarLogin($email, $pass);

    if (empty($errores)) {
        $usuario = $bd->buscarUsuarioEmail($email);

        //iniciar session
        $auth = new Autenticador;
        $auth->logear($usuario);

        //redirijir a mi prefil
        header('location:index.php');
    }

}

    require_once('plantilla/header.php');
    require_once('plantilla/menu.php');
 ?>

      <section class="principal">
          <article class="nuevas" id="peliculas">
              <div class="peliculas">
              <h2>Login a Digital Movies</h2>

              <form method="post">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control <?= isset($errores['email']) ? 'is-invalid' : '' ?>" id="email" placeholder="Tu Email" name="email" value="<?= $email ?>">
                    <div class="invalid-feedback"><?= $errores['email'] ?? '' ?></div>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control  <?= isset($errores['password']) ? 'is-invalid' : '' ?>" id="password" placeholder="Tu Password" name="password">
                    <div class="invalid-feedback"><?= $errores['password'] ?? '' ?></div>
                  </div>
                  <div class="form-group">
                      <input type="checkbox" name="rememberme" id="rememberme">
                      <label for="rememberme">Mantenerme logueado</label>
                  </div>

                  <button type="submit" class="btn btn-primary">Login</button>
                </form>
              </div>
          </article>
      </section>

<?php
require_once('plantilla/footer.php'); ?>
