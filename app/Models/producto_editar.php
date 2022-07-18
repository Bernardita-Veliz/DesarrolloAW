<?php namespace App\Models;
use CodeIgniter\Model;

class producto_editar extends Model
{
    protected $table = 'tabla_productos';
    protected $primaryKey = 'id_producto';

    protected $allowedFields= [
        'nombre',
        'Código',
        'descripcion',
        'cantidad',
    ];



}

?>