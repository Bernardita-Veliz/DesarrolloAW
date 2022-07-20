<?php namespace App\Models;
   use CodeIgniter\Model;

   class Usuarios extends Model{
    protected $table = 'tabla_usuarios';
    protected $primaryKey = 'id_usuario';

    protected $allowedFields= [
        'usuario',
        'password',
        'tipo_usuario',
    ];

    public function obtenerUsuario($data) {
           $Usuario = $this->db->table('tabla_usuarios');
           $Usuario->where($data);
           return $Usuario->get()->getResultArray();
    }

    public function getusuario($id){
        return $this->where('id_usuario',$id)->first($id);
    }

    public function actualizaruser($data,$id_usuario){
        $usuario = $this->db->table('tabla_usuarios');
        $usuario->set($data);
        $usuario->where('id_usuario',$id_usuario);
        return $usuario->update(); 
    }



}