<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TablaUsuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_usuario'          => [
                    'type'           => 'INT',
                    'constraint'     => 5,
                    'unsigned'       => true,
                    'auto_increment' => true,
            ],
            'usuario'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255',
            ],
            'password'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255',
            ],
            'tipo_usuario'       => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255',
            ],
    ]);
    $this->forge->addKey('id_usuario', true);
    $this->forge->createTable('tabla_usuarios');
    }

    public function down()
    {
    $this->forge->dropTable('tabla_usuarios');
    }
}
