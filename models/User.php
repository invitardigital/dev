<?php

if (!class_exists('RemoteUser')) {
    class RemoteUser
    {
        public static function find($id)
        {
            return db()->table('usuarios as u')
                ->select('u.*', 'r.nombre as rol')
                ->join('roles as r', 'r.id', '=', 'u.rol_id')
                ->where('u.id', $id)
                ->first();
        }

        public static function todos(array $filtros = [])
        {
            $q = db()->table('usuarios as u')
                ->select('u.id', 'u.nombre', 'u.email', 'u.created_at', 'r.nombre as rol')
                ->join('roles as r', 'r.id', '=', 'u.rol_id')
                ->orderByDesc('u.created_at');

            if (!empty($filtros['buscar'])) {
                $q->where(function ($w) use ($filtros) {
                    $w->where('u.nombre', 'like', '%' . $filtros['buscar'] . '%')
                      ->orWhere('u.email', 'like', '%' . $filtros['buscar'] . '%');
                });
            }

            if (!empty($filtros['rol_id'])) {
                $q->where('u.rol_id', $filtros['rol_id']);
            }

            return $q->get();
        }

        public static function crear(array $data): int
        {
            return db()->table('usuarios')->insertGetId([
                'nombre'     => $data['nombre'],
                'email'      => $data['email'],
                'password'   => \Illuminate\Support\Facades\Hash::make($data['password']),
                'rol_id'     => $data['rol_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        public static function actualizar(int $id, array $data): void
        {
            db()->table('usuarios')->where('id', $id)->update([
                'nombre'     => $data['nombre'],
                'email'      => $data['email'],
                'rol_id'     => $data['rol_id'],
                'updated_at' => now(),
            ]);
        }

        public static function eliminar(int $id): void
        {
            \Illuminate\Support\Facades\DB::transaction(function () use ($id) {
                db()->table('usuario_permisos')->where('usuario_id', $id)->delete();
                db()->table('sesiones')->where('usuario_id', $id)->delete();
                db()->table('usuarios')->where('id', $id)->delete();
            });
        }
    }
}