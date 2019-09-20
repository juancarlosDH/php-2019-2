<?php


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

            <h2>Se parte de nosotros</h2>
            <form method="post" action="" enctype="multipart/form-data">
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email"
                value="<?php ?>">

              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
              </div>
              <div class="form-group">
                <label for="confirm-password">Confirmar Password</label>
                <input type="password" class="form-control" id="confirm-password" placeholder="Password" name="confirm-password">
              </div>
              <div class="form-group">
                <label for="avatar">Subir avatar</label>
                <input type="file"  id="avatar" name="avatar">
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="terminos" name="terminos">
                <label class="form-check-label" for="terminos">Acepto terminos y condiciones</label>
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
