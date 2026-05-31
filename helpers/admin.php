<?php

function puedeVerReporte($tipo): bool
{
    return esAdmin() && in_array($tipo, auth()->user()->permisos ?? []);
}

function logAdmin($accion): void
{
    \Illuminate\Support\Facades\Log::channel('admin')->info($accion, [
        'usuario' => auth()->id(),
        'ip'      => request()->ip(),
    ]);
}