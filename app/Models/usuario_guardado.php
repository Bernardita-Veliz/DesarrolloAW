<?php namespace App\Models;
use CodeIgniter\Model;

class usuario_guardado extends Model
{
    protected $table = 'tabla_usuarios';
    protected $primaryKey = 'id_usuario';

    protected $allowedFields= [
        'usuario',
        'password',
        'tipo_usuario',
    ];
    public function actualiza($data, $id_usuario){
        $usuario = $this->db->table('tabla_usuarios');
        $usuario->set($data);
        $usuario->where('id_producto',$usuario);
        return $usuario->update();

        $password = $this->db->table('tabla_usuarios');
        $password->set($data);
        $password->where('id_producto',$password);
        return $password->update();

        $tipo_usuario = $this->db->table('tabla_usuarios');
        $tipo_usuario->set($data);
        $tipo_usuario->where('id_producto',$password);
        return $tipo_usuario->update();

    }
}
?>