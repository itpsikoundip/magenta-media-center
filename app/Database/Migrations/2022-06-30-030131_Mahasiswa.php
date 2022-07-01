<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            // 'id' => [
            //     'type'          => 'INT',
            //     'constraint'    => 6,
            //     'unsigned'      => TRUE,
            //     'auto_increment'=> TRUE, 
            // ],
            'nim' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
                'auto_increment'=> FALSE,
            ], 
            'nama' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'email' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
                'unique'        => TRUE,
            ],
            'password' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ]
        ]);
        $this->forge->addPrimaryKey('nim');
        $this->forge->createTable('mahasiswa');
    }

    public function down()
    {
        //
        $this->forge->dropTable('mahasiswa', true);
    }
}
