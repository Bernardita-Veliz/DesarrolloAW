<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TablaCategorias extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_categorias'          => [
                    'type'           => 'INT',
                    'constraint'     => 5,
                    'unsigned'       => true,
                    'auto_increment' => true,
            ],
            'nombre_categorias'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255',
            ],
    ]);
    $this->forge->addKey('id_categorias', true);
    $this->forge->createTable('tabla_categorias');
    }

    public function down()
    {
    $this->forge->createTable('tabla_categorias');
    }
}
