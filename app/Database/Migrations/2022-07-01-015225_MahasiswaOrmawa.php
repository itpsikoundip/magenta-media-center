<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MahasiswaOrmawa extends Migration
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
            'mahasiswa_id' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'ormawa_id' => [
                'type'          => 'INT',
                'constraint'    => 6,
                'unsigned'      => TRUE,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('mahasiswa_id','mahasiswa','nim');
        $this->forge->addForeignKey('ormawa_id','ormawa','id');
        $this->forge->createTable('mahasiswa_ormawa');
    }

    public function down()
    {
        //
        $this->forge->dropTable('mahasiswa_ormawa', true);
    }
}
