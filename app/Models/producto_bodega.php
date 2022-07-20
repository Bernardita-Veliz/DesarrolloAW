<?php namespace App\Models;
use CodeIgniter\Model;

class producto_bodega extends Model{
    protected $table  = 'tabla_productos';
    protected $primaryKey = 'id_producto';

    protected $allowedFilds= [
        'nombre_producto',
        'codigo',
        'descripcion',
        'cantidad',
        'nombre_categorias',
    ];

    public function add($dato){
        return $this->save($dato);
    }

    public function getProducto($id){
        return $this->where('id_producto',$id)->first($id);
    }

    public function actualizar($data, $id_producto){
        $nombre_producto = $this->db->table('tabla_productos');
        $nombre_producto->set($data);
        $nombre_producto->where('id_producto',$id_producto);
        return $nombre_producto->update();

        $codigo = $this->db->table('tabla_productos');
        $codigo->set($data);
        $codigo->where('id_producto',$id_producto);
        return $codigo->update();

        $descripcion = $this->db->table('tabla_productos');
        $descripcion->set($data);
        $descripcion->where('id_producto',$id_producto);
        return $descripcion->update();

        $cantidad = $this->db->table('tabla_productos');
        $cantidad->set($data);
        $cantidad->where('id_producto',$id_producto);
        return $cantidad->update();

        $nombre_categorias = $this->db->table('tabla_productos');
        $nombre_categorias->set($data);
        $nombre_categorias->where('id_producto',$id_producto);
        return $nombre_categorias->update();
    }


}

?>

