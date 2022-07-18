<?php namespace App\Models;

use CodeIgniter\Model;

class categoriaproducto extends Model{
    public function listadohinalambricas(){
        $id_categorias = $this->db->query("SELECT * FROM tabla_categorias");
        return $id_categorias->getResult();
    }

    
}