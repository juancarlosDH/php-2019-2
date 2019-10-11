<?php
class Celular {
    private $marca;
    private $modelo;
    private $proveedor;
    private $numero;

    public function __construct(string $marca, string $modelo, string $proveedor, string $numero)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->proveedor = $proveedor;
        $this->numero = $numero;
    }

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function getProveedor(): string
    {
        return $this->proveedor;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }


}
