<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TablaProyectos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_proyecto'          => [
                'type'             => 'INT',
                'constraint'       => 5,
                'unsigned'         => true,
                'auto_increment'   => true,
            ],
            'nombre_proyecto'               => [
                'type'             => 'VARCHAR',
                'constraint'       => '255',
            ],
            'codigo'          =>[
                'type'             =>'VARCHAR',
                'constraint'       => '255',
            ],
            'descripcion'           =>[
                'type'             => 'INT',
                'constraint'       => 5,
            ],
            'id_material'           =>[
                'type'             => 'INT',
                'constraint'       => 5,
            ],
            'fecha_inicio'           =>[
                'type'             => 'DATETIME',
                'constraint'       => false,
            ],
            'fecha_final'           =>[
                'type'             => 'DATETIME',
                'constraint'       => false,
            ],

        ]);
        $this->forge->addKey('id_proyecto', true);
        $this->forge->createTable('tabla_proyectos');
    }

    public function down()
    {
        $this->forge->dropTable('tabla_proyectos');
    }
}
