<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
    public function run()
    {
        $usuario = 'admin';
        $password = password_hash("123", PASSWORD_DEFAULT);
        $tipo_usuario = 'administrador';

        $data = [
                       'usuario'  => $usuario,
                       'password' => $password,
                       'tipo_usuario'     => $tipo_usuario
        ];
        $this->db->table('tabla_usuarios')->insert($data);
    }

    

}