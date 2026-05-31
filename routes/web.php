<?php
use Dev\Controllers\MiController;
use Dev\Controllers\Admin\AdminController;

Route::get('/', [MiController::class, 'index']);
Route::get('/perfil/{id}', [MiController::class, 'detalle']);
Route::get('/admin', [AdminController::class, 'index']);