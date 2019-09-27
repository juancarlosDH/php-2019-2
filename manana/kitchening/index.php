<!DOCTYPE html>
<?php
    require_once('funciones/autoload.php');

    $productos = dameProductos();

?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/styles.css">
		<title>Responsive Web Design</title>
	</head>
	<body>

	<div class="container">

		<!-- cabecera -->
        <?php require('partials/header.php')?>
		<!-- banner -->
		<section class="banner">
			<img src="images/img-banner.jpg" alt="banner">
		</section>

		<!-- productos -->
		<section class="vip-products">
			<?php foreach ($productos as $producto) { ?>
			<article class="product">
				<div class="photo-container">
					<img class="photo" src="images/<?= $producto['imagen'] ?>" alt="pdto 01">
					<?php if ($producto['enOferta'] === true) { ?>
						<img class="special" src="images/img-descuento.png" alt="plato nuevo">
					<?php } ?>
					<a class="zoom" href="#">Ampliar foto</a>
				</div>
				<h2><?= $producto['titulo'] ?></h2>
				<p><?= $producto['descripcion'] ?></p>
				<a class="more" href="producto.php?id=<?= $producto['id'] ?>">ver más</a>
			</article>
			<?php } ?>
		</section>

		<?php require('partials/footer.php') ?>
	</div>

	</body>
</html>
