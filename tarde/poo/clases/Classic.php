<?php
require_once('Cuenta.php');

class Classic extends Cuenta {

    public function acreditar(int $monto)
    {
        //debe hacer lo mismo pero solo el 95% del monto
        $montoNuevo = $monto * 0.95;
        parent::acreditar($montoNuevo);
    }

    public  function cosa(){
        if ($this->cuenta  instanceOf Classic)
    }

}
