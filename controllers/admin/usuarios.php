<?php

$loader->load('models/User.php');

$id = $params['id'] ?? null;

if ($id) {
    $datos = [
        'titulo'  => 'Detalle de usuario',
        'usuario' => RemoteUser::find($id) ?? abort(404),
    ];
} else {
    $datos = [
        'titulo'   => 'Usuarios',
        'usuarios' => RemoteUser::todos($request_data),
        'roles'    => db()->table('roles')->orderBy('nombre')->get(),
        'buscar'   => $request_data['buscar'] ?? '',
    ];
}