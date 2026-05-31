<?php

if (!auth()->check()) {
    redirect('/login')->send();
    exit;
}

$datos = [
    'titulo'  => 'Dashboard',
    'usuario' => usuarioActual(),
];