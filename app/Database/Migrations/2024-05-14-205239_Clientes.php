<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Clientes extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'nombre_contacto' => ['VARCHAR',
            'constrain' => 255,
            'null' => false, //requerido
        ],
  
        'correo_electronico' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
            'unique' => true, // único en la base de datos
            'null' => false, // requerido
        ],
   
        'nombre_empresa' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
            'unique' => true, // único en la base de datos
            'null' => false, // requerido
        ],
  
        'estado_id' => [
            'type' => 'INT',
            'constraint' => 11,
            'unsigned' => true, // 
            'auto_increment' => true,
            'null' => false, // requerido
        ],
   
         'logotipo' => [
            'type' => 'VARCHAR',
            'constraint' => 255,
            'null' => false, // requerido
            //VERFICAR C
        ],
    
        'descripcion_producto' => [
            'type' => 'TEXT',
            'null' => true, // requerido si es CDM verificar
        ],
 
        'fecha_registro' => [
            'type' => 'DATE',
            'null' => true, // requerido si el estado es CDM verificar 
            ],
        ]);

        $this->forge->addKey('estado_id', true);
        $this->forge->addForeignKey('estado_id', 'estados', 'CASCADE', 'CASCADE');
        $this->forge->createTable('clientes');

    }

    public function down()
    {
        $this->forge->dropTable('clientes');
    }
}
