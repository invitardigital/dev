<?php

if (!auth()->check()) {
    redirect('/login')->send();
    exit;
}

if (auth()->user()->rol !== 'admin') {
    abort(403, 'Acceso denegado');
}