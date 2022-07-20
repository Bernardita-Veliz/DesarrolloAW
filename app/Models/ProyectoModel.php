<?php namespace App\Models;

use CodeIgniter\Model;

class proyectoModel extends Model{
    public function listadoproyecto(){
        $id_proyecto = $this->db->query("SELECT * FROM tabla_proyectos");
        return $id_proyecto->getResult();
    }

    
}