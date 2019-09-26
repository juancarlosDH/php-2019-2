<?php

function validarLogin($datos) {
    $errores = [];
    $usuario = [];

    $email = trim($datos['email']);
    $password = $datos['password'];
    //var_dump(password_hash($password, PASSWORD_DEFAULT));exit;

    if (strlen($email) === 0) {
        $errores['email'] = 'Escribe el email';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores['email'] = 'El email tiene formato errado';
    }
    if (strlen($password) < 6) {
        $errores['password'] = 'La contraseña es muy corta (minimo 6 caracteres)';
    }
    //var_dump($usuario, $password, password_verify($password, $usuario['password']));
    //var_dump($errores); exit;
    return $errores;
}
