<?php

namespace App\Services;

class PagoService
{
    public function procesar($monto, $metodo = 'tarjeta')
    {
        // lógica de pago
        return [
            'status' => 'ok',
            'monto'  => formatearPrecio($monto),
            'metodo' => $metodo,
        ];
    }
}