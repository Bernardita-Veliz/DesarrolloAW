<?php namespace App\Models;
   use CodeIgniter\Model;

   class Usuarios extends Model{
    protected $table = 'tabla_usuarios';
    protected $primaryKey = 'id_usuario';

    protected $allowedFields= [
        'usuario',
        'password',
        'id_tipo_usuario',
    ];

       public function obtenerUsuario($data) {
           $Usuario = $this->db->table('tabla_usuarios');
           $Usuario->where($data);
           return $Usuario->get()->getResultArray();
    }

    


}