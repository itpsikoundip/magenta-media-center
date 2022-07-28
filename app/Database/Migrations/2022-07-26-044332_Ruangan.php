<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ruangan extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                'type'          => 'INT',
                'constraint'    => 6,
                'unsigned'      => TRUE,
                'auto_increment' => TRUE,
            ],
            'nama' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'lantai' => [
                'type'          => 'INT',
                'constraint'    => 1,
                'unsigned'      => TRUE,
            ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('kegiatan_ruangan');
    }

    public function down()
    {
        //
        $this->forge->dropTable('kegiatan_ruangan', true);
    }
}
