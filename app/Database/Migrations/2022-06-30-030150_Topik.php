<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Topik extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                'type'          => 'INT',
                'constraint'    => 6,
                'unsigned'      => TRUE,
                'auto_increment'=> TRUE, 
            ],
            'nama' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('topik');
    }

    public function down()
    {
        //
        $this->forge->dropTable('topik', true);
    }
}
