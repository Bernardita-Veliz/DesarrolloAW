<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario2 extends Seeder
{
    public function run()
    {
        $usuario = 'usuario';
        $password = password_hash("123", PASSWORD_DEFAULT);
        $id_tipo_usuario = 'usuario';

        $data = [
                       'usuario'  => $usuario,
                       'password' => $password,
                       'id_tipo_usuario'     => $id_tipo_usuario
        ];
        $this->db->table('tabla_usuarios')->insert($data);
    }

    

}