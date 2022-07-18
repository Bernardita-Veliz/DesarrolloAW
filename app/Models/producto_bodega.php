<?php namespace App\Models;
use CodeIgniter\Model;

class producto_bodega extends Model{
    protected $table  = 'tabla_productos';
    protected $primaryKey = 'id_producto';

    protected $allowedFilds= [
        'nombre',
        'Código',
        'descripcion',
        'cantidad',
    ];

    public function add($dato){
        return $this->save($dato);
    }

    public function getProducto($id){
        return $this->where('id',$id)->first($id);
    }

}

?>

