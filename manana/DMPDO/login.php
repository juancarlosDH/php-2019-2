<?php
    require_once('clases/autoload.php');
    $errores = [];
if ($_POST) {

    $validador = new ValidadorLogin($_POST['email'], $_POST['password']);

    $errores = $validador->validar();

    //si no hay errores
    if (!$errores) {
        $auth = new Autenticador;

        $usuarioBD = BaseDeDatos::buscarUsuarioEmail($_POST['email']);

        $usuario = new Usuario($usuarioBD['email'], $usuarioBD['password']);
        $usuario->setAvatar($usuarioBD['avatar']);
        $usuario->setId($usuarioBD['id']);

        //logeo al usuario
        $auth->logear($usuario);
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
                    <input type="email" class="form-control
                    <?php echo isset($errores['email'])?'is-invalid':''; ?>" id="email" placeholder="Tu Email" name="email" value="">
                    <div class="invalid-feedback"><?= $errores['email'] ?? '' ?></div>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Tu Password" name="password">
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
