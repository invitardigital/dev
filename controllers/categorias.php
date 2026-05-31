<?php

use Illuminate\Support\Facades\DB;



$datos = [
    'categorias' => DB::table('demo_categorias')->get(),
];