<?php

class Autenticador {

    private $cosa;

    public function elUsuarioEstaLogeado(): bool
    {
        return true;
    }

    public function setCosa(string $viene)
    {
        $this->cosa = $viene;
    }

}
