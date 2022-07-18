<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TablaProductos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_producto'          => [
                    'type'           => 'INT',
                    'constraint'     => 5,
                    'unsigned'       => true,
                    'auto_increment' => true,
            ],
            'nombre_producto'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
        ],
            'codigo'       => [
                    'type'           => 'INT',
                    'constraint'     => 5,
            ],
            'descripcion'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
        ],
        'cantidad'       => [
            'type'           => 'INT',
            'constraint'     => 5,
    ],
    'nombre_categorias'       => [
        'type'           => 'VARCHAR',
        'constraint'     => '255',
],

    ]);
    $this->forge->addKey('id_producto', true);

    $this->forge->createTable('tabla_productos');
    }

    public function down()
    {
        //
    }
}
