<?php
require_once('autoload.php');

interface Liquidable
{
    public function liquidarHaberes(Persona $persona, float $monto);

}
