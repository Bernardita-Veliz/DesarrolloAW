<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TablaMateriales extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_material'          => [
                    'type'           => 'INT',
                    'constraint'     => 5,
                    'unsigned'       => true,
                    'auto_increment' => true,
            ],
            'nombre_material'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255',
            ],
    ]);
    $this->forge->addKey('id_material', true);
    $this->forge->createTable('tabla_materiales');
    }

    public function down()
    {
    $this->forge->createTable('tabla_materiales');
    }
}
