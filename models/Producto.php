<?php

if (!class_exists('Producto')) {
    class Producto
    {
        public static function todos()
        {
            return db()->table('productos as p')
                ->select('p.*', 'c.nombre as categoria')
                ->join('categorias as c', 'c.id', '=', 'p.categoria_id')
                ->where('p.activo', 1)
                ->orderBy('p.nombre')
                ->get();
        }

        public static function find($id)
        {
            return db()->table('productos as p')
                ->select('p.*', 'c.nombre as categoria')
                ->join('categorias as c', 'c.id', '=', 'p.categoria_id')
                ->where('p.id', $id)
                ->first();
        }
    }
}