<?php

$datos = [
    'titulo'          => 'Inicio',
    'total_usuarios'  => db()->table('usuarios')->count(),
    'total_productos' => db()->table('productos')->count(),
];