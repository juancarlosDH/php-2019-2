<?php

class Mascota {

    private $nombre;
    private $peso;
    private $humor;
    private $especie;

    public function __construct()
    {
        return $this;
    }

    /**
    *   pre: se inserta un nombre por parametro, debe ser string.
    *   post: devuelve el objeto con el nombre seteado.
    * @return : devuelve el objeto con el nombre seteado.
    **/
    public function setNombre(string $nombre): Mascota
    {
        if (strlen($nombre) < 2) {
            echo 'el nombre es muy corto';
            $this->nombre = '';
        } else {
            $this->nombre = $nombre;
        }
        return $this;
    }

    public function setPeso(int $peso): Mascota
    {
        $this->peso = $peso;
        return $this;
    }

    public function setEspecie(Especie $especie)
    {
        $this->especie = $especie;
    }

    public function getEspecie(): Especie
    {
        return $this->especie;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function getPeso(): int
    {
        return $this->peso;
    }

    public function setHumor(bool $humor): Mascota
    {
        $this->humor = $humor;
        return $this;
    }

    public function getHumor(): bool
    {
        return $this->humor;
    }

    public function getDescripcion(): string
    {
        return 'Hola soy '. $this->getNombre() . ' soy un: ' . $this->getEspecie()->getNombre() . ' y peso ' . $this->getPeso() ;
    }
}







///
