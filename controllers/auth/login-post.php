<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

$email    = trim($request_data['email']    ?? '');
$password = trim($request_data['password'] ?? '');
$remember = isset($request_data['remember']);

if (!$email || !$password) {
    session()->flash('error', 'Email y contraseña requeridos');
    redirect('/login')->send();
    exit;
}

$usuario = DB::table('usuarios')->where('email', $email)->first();

if (!$usuario || !\Illuminate\Support\Facades\Hash::check($password, $usuario->password)) {
    session()->flash('error', 'Credenciales incorrectas');
    redirect('/login')->send();
    exit;
}

Auth::loginUsingId($usuario->id, $remember);
redirect('/dashboard')->send();
exit;

$datos = [];