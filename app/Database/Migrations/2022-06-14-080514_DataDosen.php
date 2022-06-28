<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataDosen extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_dosen' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE,
            ],
            'nip' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama_lengkap' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'kepakaran' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => TRUE
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
        $this->forge->addKey('id_dosen', true);
        $this->forge->createTable('data_dosen');
    }

    public function down()
    {
        $this->forge->dropTable('data_dosen');
    }
}
