<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SaranDosen extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE,
            ],
            'id_dosen' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned'      => TRUE,
                'auto_increment' => FALSE,
            ],
            'saran_dosen' => [
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
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_dosen', 'data_dosen', 'id_dosen');
        $this->forge->createTable('survey_sarandosen');
    }

    public function down()
    {
        $this->forge->dropTable('survey_sarandosen', true);
    }
}
