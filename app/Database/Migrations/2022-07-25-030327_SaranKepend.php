<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SaranKepend extends Migration
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
            'id_kepend' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned'      => TRUE,
                'auto_increment' => FALSE,
            ],
            'saran_kepend' => [
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
        $this->forge->addForeignKey('id_kepend', 'data_kepend', 'id_kepend');
        $this->forge->createTable('survey_sarankepend');
    }

    public function down()
    {
        $this->forge->dropTable('survey_sarankepend', true);
    }
}
