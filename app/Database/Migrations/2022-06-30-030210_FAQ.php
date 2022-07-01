<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FAQ extends Migration
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
            'topik_id' => [
                'type'          => 'INT',
                'unsigned'      => TRUE,
            ],
            'pertanyaan' => [
                'type'          => 'VARCHAR',
                'constraint'    => '5000',
            ],
            'jawaban' => [
                'type'          => 'VARCHAR',
                'constraint'    => '5000',
                'null'          => TRUE,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => TRUE,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => TRUE,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('topik_id','topik','id');
        $this->forge->createTable('faq');
    }

    public function down()
    {
        //
        $this->forge->dropTable('faq', true);
    }
}
