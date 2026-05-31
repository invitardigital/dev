<?php

$activa = \Illuminate\Support\Facades\DB::table('configuracion')
    ->where('clave', 'tienda_activa')
    ->value('valor');

if (!$activa) {
    abort(503, 'Tienda temporalmente cerrada');
}