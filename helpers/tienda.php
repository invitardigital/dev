<?php

function precioConDescuento($precio, $descuento): float
{
    return $precio - ($precio * $descuento / 100);
}

function stockDisponible($producto_id): int
{
    return (int) db()->table('inventario')
        ->where('producto_id', $producto_id)
        ->value('stock');
}