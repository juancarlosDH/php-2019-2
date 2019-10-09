<?php

class Especie {
    private $nombre;

    public function __construct(string $nombre){
        $this->setNombre($nombre);
    }

    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

}
