<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tiket extends Migration
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
                'constraint'    => 6,
                'unsigned'      => TRUE, 
            ],
            'subjek' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'detail' => [
                'type'          => 'VARCHAR',
                'constraint'    => '5000',
            ],
            'jawaban' => [
                'type'          => 'VARCHAR',
                'constraint'    => '5000',
                'null'          => TRUE,
            ],
            'lampiran' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
                'null'          => TRUE,
            ],
            'mahasiswa_id' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
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
        $this->forge->addForeignKey('mahasiswa_id','mahasiswa','nim');
        $this->forge->createTable('tiket');
    }

    public function down()
    {
        //
        $this->forge->dropTable('tiket', true);
    }
}
