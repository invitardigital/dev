<?php

if (!function_exists('saludo')) {
    function saludo($nombre) {
        return "Hola, {$nombre}!";
    }
}

if (!function_exists('formatearPrecio')) {
    function formatearPrecio($precio) {
        return '$' . number_format($precio, 2);
    }
}