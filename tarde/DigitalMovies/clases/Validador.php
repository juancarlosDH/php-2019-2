<?php

class Validador {
    private $bd;

    public function __construct(BaseDatos $bd)
    {
        $this->bd = $bd;
    }

    public function validarLogin(string $email, string $pass): array
    {
        $array = [];

        $email = trim($email);
        if ($this->validarEmail($email)) {
            $array['email'] = 'El email es inválido';
        }
        if ($this->validarVacio($pass)) {
            $array['password'] = 'Ingresa la contraseña';
        }
        if (empty($array)) {
            $usuario = $this->bd->buscarUsuarioEmail($email);
            if ($usuario === null) {
                $array['email'] = 'Usuario o clave inválido';
            } else if (!password_verify($pass, $usuario->getPassword())) {
                $array['email'] = 'Usuario o clave inválido';
            }
        }

        return $array;
    }

    public function validarRegistro(): array
    {

    }

    /**
     * retorna true cuando el $email no sea valido
    */
    public function validarEmail(string $email): bool
    {
        return !filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    /**
    * retorna true cuando está vacio
    */
    public function validarVacio(string $valor): bool
    {
        return strlen(trim($valor)) === 0;
    }







}
