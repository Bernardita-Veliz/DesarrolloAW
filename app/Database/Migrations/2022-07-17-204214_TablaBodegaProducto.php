<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TablaBodegaProducto extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_bodega_producto'          => [
                    'type'           => 'INT',
                    'constraint'     => 5,
                    'unsigned'       => true,
                    'auto_increment' => true,
            ],
            'id_usuario'       => [
                    'type'           => 'INT',
                    'constraint'     => 5,
            ],
            'id_producto'       => [
                    'type'           => 'INT',
                    'constraint'     => 5,
            ],
    ]);
    $this->forge->addKey('id_bodega_producto', true);
    $this->forge->createTable('tabla_bodega_producto');
    }

    public function down()
    {
    $this->forge->createTable('tabla_bodega_producto');
    }
}
