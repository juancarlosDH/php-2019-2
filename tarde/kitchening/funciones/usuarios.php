<?php

function buscarUsuarioEmail(string $email) {

    $archivo = file_get_contents('database/usuarios.json');
    $usuarios = json_decode($archivo, true);

    foreach ($usuarios as $usuario) {
        if ($usuario['email'] == $email) {
            return $usuario;
        }
    }

    return [];
}

function subirAvatar($archivo, $nombre) {

    if (!file_exists('avatars')) {
        mkdir('avatars');
    }

    $ext = pathinfo($archivo['name'], PATHINFO_EXTENSION);

    $nombreArchivo = $nombre . '.' . $ext;
    //la muevo a mi carpeta avatars
    move_uploaded_file($archivo['tmp_name'], 'avatars/' . $nombreArchivo);

    return $nombreArchivo;
}

function guardarUsuario(array $usuario) {

    if (!file_exists('database')) {
        mkdir('database');
    }
    //me traigo el archivo entero
    $archivo = file_get_contents('database/usuarios.json');

    $usuarios = json_decode($archivo, true);
    
    $usuarios[] = $usuario;

    $usuariosJson = json_encode($usuarios);

    file_put_contents('database/usuarios.json', $usuariosJson);

}





//
