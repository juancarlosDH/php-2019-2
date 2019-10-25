<?php

abstract class Validador {
    const LIMITE_PASSWORD = 6;

    public abstract function validar(): array;

    public function validarEmail(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public function validarPass(string $pass): bool
    {
        return strlen($pass) >= self::LIMITE_PASSWORD;
    }

    public function validarVacio(string $input): bool
    {
        return !empty($input);
    }
}
