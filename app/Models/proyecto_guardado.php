<?php namespace App\Models;
use CodeIgniter\Model;

class proyecto_guardado extends Model
{
    protected $table = 'tabla_proyectos';
    protected $primaryKey = 'id_proyecto';

    protected $allowedFields= [
        'nombre_proyecto',
        'codigo',
        'descripcion',
        'nombre_material',
        'fecha_inicio',
        'fecha_final'
    ];

public function add($dato){
        return $this->save($dato);
    }
public function obtenerproyecto($data) {
        $proyecto = $this->db->table('tabla_proyectos');
        $proyecto->where($data);
        return $proyecto->get()->getResultArray();
 }
 public function getproyecto($id){
    return $this->where('id_proyecto',$id)->first($id);
}
}
?>