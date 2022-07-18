<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TablaTipoUsuario extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_tipo_usuario'          => [
                    'type'           => 'INT',
                    'constraint'     => 5,
                    'unsigned'       => true,
                    'auto_increment' => true,
            ],
            'tipo_usuario'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255',
            ],
    ]);
    $this->forge->addKey('id_tipo_usuario', true);
    $this->forge->createTable('tabla_tipo_usuario');
    }

    public function down()
    {
        $this->forge->dropTable('tabla_tipo_usuario');
    }
}
