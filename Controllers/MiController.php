<?php
namespace Dev\Controllers;

use Illuminate\Routing\Controller;

class MiController extends Controller
{
    public function index()
    {
        return view('git::inicio', ['titulo' => 'Bienvenido']);
    }

    public function detalle($id)
    {
        return view('git::usuario/perfil', ['id' => $id]);
    }
}