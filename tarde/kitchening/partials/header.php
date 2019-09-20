<header class="main-header">
    <a href="index.php">
        <img src="images/logo.jpg" alt="logotipo" class="logo">
    </a>

    <a href="#" class="toggle-nav">
        <span class="fa fa-bars"></span>
    </a>

    <nav class="main-nav">
        <ul>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Sucursales</a></li>
            <li><a href="#">Somos</a></li>
        <?php if(estaElUsuarioLogeado()) { ?>
            <li><a href="miPerfil.php">Perfil</a></li>
        <?php } else { ?>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Registro</a></li>
        <?php } ?>
            <li><a href="#">Contacto</a></li>
        </ul>
    </nav>
</header>
