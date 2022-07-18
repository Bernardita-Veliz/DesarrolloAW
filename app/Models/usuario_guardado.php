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
}
?>