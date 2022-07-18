<?php namespace App\Models;

use CodeIgniter\Model;

class usuarioModel extends Model{
    public function listadousuario(){
        $id_usuario = $this->db->query("SELECT * FROM tabla_usuarios");
        return $id_usuario->getResult();
    }

    
}