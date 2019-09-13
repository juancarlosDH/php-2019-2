<?php require_once('funciones/autoload.php'); ?>
<header>
    <nav>
        <ul class="navegacion">
            <li>Home</li>
            <li>Productos</li>
        <?php if (!estaElUsuarioLogeado()) { ?>
            <li>Login</li>
            <li>Registro</li>
        <?php } else { ?>
            <li>Mi Perfil</li>
            <li>Cerrar Sesión</li>
        <?php } ?>
        </ul>
    </nav>
</header>
