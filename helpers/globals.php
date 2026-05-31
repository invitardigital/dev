<?php

use Illuminate\Support\Facades\DB;

function db(): \Illuminate\Database\Connection
{
    return DB::connection();
}

function formatearFecha($fecha): string
{
    return \Carbon\Carbon::parse($fecha)->format('d/m/Y');
}

function moneda($cantidad): string
{
    return '$' . number_format($cantidad, 2);
}

function esAdmin(): bool
{
    return auth()->check() && auth()->user()->rol === 'admin';
}

function usuarioActual()
{
    return auth()->user();
}