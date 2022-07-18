<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TablaBodegaProyectos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_bodega_proyecto'          => [
                    'type'           => 'INT',
                    'constraint'     => 5,
                    'unsigned'       => true,
                    'auto_increment' => true,
            ],
            'id_usuario'       => [
                    'type'           => 'INT',
                    'constraint'     => 5,
            ],
            'id_proyecto'       => [
                    'type'           => 'INT',
                    'constraint'     => 5,
            ],
    ]);
    $this->forge->addKey('id_bodega_proyecto', true);
    $this->forge->createTable('tabla_bodega_proyectos');
    }

    public function down()
    {
    $this->forge->createTable('tabla_bodega_proyectos');
    }
}
