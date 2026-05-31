<?php





Route::get('/', function () {
    return 'Hola Demo 1';
});

Route::get('/login', RemoteController::class)->defaults('pagina', 'auth/login');

/*
// Auth
Route::get('/login', RemoteController::class)->defaults('pagina', 'auth/login');
Route::post('/login', RemoteController::class)->defaults('pagina', 'auth/login-post');
Route::get('/logout', RemoteController::class)->defaults('pagina', 'auth/logout');
Route::get('/registro', RemoteController::class)->defaults('pagina', 'auth/registro');
Route::post('/registro', RemoteController::class)->defaults('pagina', 'auth/registro-post');

// General
Route::get('/', RemoteController::class)->defaults('pagina', 'home');
Route::get('/dashboard', RemoteController::class)->defaults('pagina', 'dashboard');

// Admin
Route::prefix('admin')->group(function () {
    Route::get('/usuarios', RemoteController::class)->defaults('pagina', 'admin/usuarios');
    Route::get('/usuarios/{id}', RemoteController::class)->defaults('pagina', 'admin/usuarios');
    Route::post('/usuarios/guardar', RemoteController::class)->defaults('pagina', 'admin/usuarios-guardar');
    Route::delete('/usuarios/{id}', RemoteController::class)->defaults('pagina', 'admin/usuarios-eliminar');
    Route::get('/roles', RemoteController::class)->defaults('pagina', 'admin/roles');

    Route::prefix('reportes')->group(function () {
        Route::get('/ventas', RemoteController::class)->defaults('pagina', 'admin/reportes/ventas');
        Route::get('/inventario', RemoteController::class)->defaults('pagina', 'admin/reportes/inventario');
    });
});

// Tienda
Route::prefix('tienda')->group(function () {
    Route::get('/productos', RemoteController::class)->defaults('pagina', 'tienda/productos');
    Route::get('/carrito', RemoteController::class)->defaults('pagina', 'tienda/carrito');
});*/