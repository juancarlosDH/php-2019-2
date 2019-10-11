<?php

class BaseDatos {

    public function dameUsuarioPorEmail(string $email): ?Usuario
    {
        //lees el json
        //los busco usuarios.json
            //si lo encuentro instancio un objeto de la clase Usuario con esos datos y lo devuelvo
        //sino devuelvo null

    }

    public function damePerfilPorUsuario(Usuario $usuario): ?Perfil
    {
        //lees el json
        //los busco en perfiles.json
            //si lo encuentro instancio un objeto de la clase Perfil con esos datos y lo devuelvo
        //sino devuelvo null

    }


    public function guardarUsuario(Usuario $usuario)
    {

    }

    public function modificarUsuario(Usuario $usuario)
    {

    }

}
