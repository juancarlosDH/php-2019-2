<?php

class Classic extends Cuenta
{
    public function debitar(float $monto, string $origen)
    {
        $this->balance = $this->balance - $monto;
    }


}
