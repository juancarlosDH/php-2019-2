<?php
    require_once('funciones/autoload.php');

    if (isset($_COOKIE['recuerdame'])) {
        $_SESSION['email'] = $_COOKIE['recuerdame'];
        $_SESSION['avatar'] = '';
    }

    if(estaElUsuarioLogeado()){
        header('location:miPerfil.php');
    }

    $email = '';
    $password = '';

    $errores = [
        'email' => '',
        'password' => ''
    ];

    if ($_POST) {
        $email = trim($_POST['email']);
        $password = $_POST['password'];
        $errores = validarLogin($_POST);

        if (!$errores) {

            $archivo = file_get_contents('database/usuarios.json');
            $usuarios = json_decode($archivo, true);

            foreach ($usuarios as $usuario) {
                if ($usuario['email'] == $email && password_verify($password, $usuario['password'])) {
                    //aqui es donde encontré al usuario y lo logeo
                    $_SESSION['email'] = $email;
                    $_SESSION['avatar'] = $usuario['avatar'];

                    //si checkaron el recuerdame
                    if (isset($_POST['recuerdame'])) {
                        //guardo la cookie del email
                        setcookie('recuerdame', $email, time() + 60*60*24*7 );
                    }
                    //luego redirijo a miPerfil
                    header('location:miPerfil.php');
                }
            }
            $errores['email'] = 'Usuario o clave incorrectos';

        }
    }


?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/login.css">
		<title>Sign In</title>
	</head>
	<body>

	<div class="container">

		<!-- cabecera -->
        <?php require('partials/header.php')?>

		<!-- formulario -->
		<div class="form-login">


            <h2>Inicia Sesión</h2>
            <form method="post" action="login.php">
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email"
                value="<?= $email ?>">
                <?= (isset($errores['email']) ? $errores['email'] : '') ?>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                <?= (isset($errores['password']) ? $errores['password'] : '') ?>
              </div>
              <div class="form-group form-check">
                <input type="checkbox" name="recuerdame" class="form-check-input" id="recuerdame">
                <label class="form-check-label" for="recuerdame">Dejarme Conectado</label>
              </div>
              <button type="submit" class="btn btn-primary">Ingresar</button>
            </form>
		</div>

		<?php require('partials/footer.php') ?>
	</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	</body>
</html>
