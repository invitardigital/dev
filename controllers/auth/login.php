<?php

if (auth()->check()) {
    redirect('/dashboard')->send();
    exit;
}

$datos = [
    'titulo' => 'Iniciar sesión',
    'error'  => session('error') ?? null,
];