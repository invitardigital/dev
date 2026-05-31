<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

$nombre   = trim($request_data['nombre']   ?? '');
$email    = trim($request_data['email']    ?? '');
$password = trim($request_data['password'] ?? '');
$rol_id   = (int) ($request_data['rol_id'] ?? 0);

if (!$nombre || !$email || !$password) {
    session()->flash('error', 'Todos los campos son obligatorios');
    redirect('/registro')->send();
    exit;
}

if (strlen($password) < 8) {
    session()->flash('error', 'La contraseña debe tener mínimo 8 caracteres');
    redirect('/registro')->send();
    exit;
}

if (DB::table('usuarios')->where('email', $email)->exists()) {
    session()->flash('error', 'El email ya está registrado');
    redirect('/registro')->send();
    exit;
}

$loader->load('models/User.php');

$nuevoId = RemoteUser::crear([
    'nombre'   => $nombre,
    'email'    => $email,
    'password' => $password,
    'rol_id'   => $rol_id ?: DB::table('roles')->where('default', 1)->value('id'),
]);

Auth::loginUsingId($nuevoId);
redirect('/dashboard')->send();
exit;

$datos = [];