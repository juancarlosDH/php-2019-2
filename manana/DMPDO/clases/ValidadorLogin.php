<?php

class ValidadorLogin extends Validador {
    private $email;
    private $password;

    public function __construct(string $email, string $pass)
    {
        $this->setEmail($email);
        $this->setPassword($pass);
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }
    public function setPassword(string $pass)
    {
        $this->password = $pass;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function validar(): array
    {
        $errores = [];
        if (!$this->validarEmail($this->getEmail())) {
            $errores['email'] = 'El Email es invalido';
        }
        if (!$this->validarPass($this->getPassword())) {
            $errores['password'] = 'Es password es muy corto, debe ser de al menos ' . self::LIMITE_PASSWORD . ' caracteres';
        }
        if (!$errores) {
            $usuarioBD = BaseDeDatos::buscarUsuarioEmail($this->getEmail());
            if (!$usuarioBD) {
                $errores['email'] = 'Usuario o clave invalidos';
            } else {
                if (!password_verify($this->getPassword(), $usuarioBD['password'] )) {
                    $errores['email'] = 'Usuario o clave invalidos';
                }
            }
        }

        return $errores;
    }







}
