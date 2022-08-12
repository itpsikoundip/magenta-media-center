<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RefStaffdosenJenispegawai extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_jenispegawai' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'nama_jenispegawai' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ]
        ]);
        $this->forge->addKey('id_jenispegawai', 'true');
        $this->forge->createTable('ref_stafdosen_jenispegawai');
    }

    public function down()
    {
        $this->forge->dropTable('ref_stafdosen_jenispegawai',true);
    }
}
