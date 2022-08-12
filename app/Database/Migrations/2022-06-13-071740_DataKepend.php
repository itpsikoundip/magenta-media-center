<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataKepend extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kepend' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE,
            ],
            'nama_lengkap' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'nip' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
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
        $this->forge->addKey('id_kepend', true);
        $this->forge->createTable('data_kepend');
    }

    public function down()
    {
        $this->forge->dropTable('data_kepend', true);
    }
}
