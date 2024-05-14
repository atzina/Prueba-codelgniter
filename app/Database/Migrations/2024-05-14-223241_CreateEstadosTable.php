<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEstadosTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'estado_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true, // 
                'auto_increment' => true,
                'null' => false, // requerido
            ],

            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ]
        ]);

        $this->forge->addKey('estado_id', true);
        $this->forge->createTable('estados');
    }

    public function down()
    {
        $this->forge->dropTable('estados');
    }
}
