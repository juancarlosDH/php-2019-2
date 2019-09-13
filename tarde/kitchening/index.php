<!DOCTYPE html>
<?php
    $productos = [
        0 => [
                "id" => 1,
                "titulo" => "Prod Feo",
                "descripcion" => "Lorem Ipsum",
                "precio" => 3000,
                "imagen" => "img-pdto-1.jpg",
                "enOferta" => true
        ],
        1 => [
                "id" => 2,
                "titulo" => "Prod Posta",
                "descripcion" => "Lorem Ipsum",
                "precio" => 5000,
                "imagen" => "img-pdto-2.jpg",
                "enOferta" => false
        ],
        2 => [
                "id" => 3,
                "titulo" => "Prod Caro",
                "descripcion" => "Lorem Ipsum",
                "precio" => 15000,
                "imagen" => "img-pdto-3.jpg",
                "enOferta" => false
        ]
];?>
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
		<header class="main-header">
			<img src="images/logo.jpg" alt="logotipo" class="logo">

			<a href="#" class="toggle-nav">
				<span class="fa fa-bars"></span>
			</a>

			<nav class="main-nav">
				<ul>
					<li><a href="#">home</a></li>
					<li><a href="#">quienes</a></li>
					<li><a href="#">servicios</a></li>
					<li><a href="#">portfolio</a></li>
					<li><a href="#">sucursales</a></li>
					<li><a href="#">contacto</a></li>
				</ul>
			</nav>
		</header>

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
					<?php if ($producto['enOferta']) { ?>
						<img class="special" src="images/img-descuento.png" alt="plato nuevo">
					<?php } ?>
					<a class="zoom" href="#">Ampliar foto</a>
				</div>
				<h2><?= $producto['titulo'] ?></h2>
				<p><?= $producto['descripcion'] ?></p>
				<a class="more" href="#">ver más</a>
			</article>
			<?php } ?>
		</section>

		<footer class="main-footer">
			<ul>
				<li><a href="#">home</a></li>
				<li><a href="#">quienes</a></li>
				<li><a href="#">servicios</a></li>
				<li><a href="#">portfolio</a></li>
				<li><a href="#">sucursales</a></li>
				<li><a href="#">contacto</a></li>
			</ul>
		</footer>
	</div>

	</body>
</html>
