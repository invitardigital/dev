<?php

if (auth()->check()) {
    redirect('/dashboard')->send();
    exit;
}

$datos = [
    'titulo' => 'Crear cuenta',
    'error'  => session('error') ?? null,
    'roles'  => \Illuminate\Support\Facades\DB::table('roles')->where('publico', 1)->get(),
];