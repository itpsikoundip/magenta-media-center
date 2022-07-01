<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SurveyDosen extends Migration
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
            'pertanyaan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'id_dosen' => [
                'type' => 'INT',
                'constraint' => '11',
            ],
            'sangat_baik' => [
                'type' => 'INT',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'baik' => [
                'type' => 'INT',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'cukup' => [
                'type' => 'INT',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'buruk' => [
                'type' => 'INT',
                'constraint' => '255',
                'null' => TRUE,
            ],
            'sangat_buruk' => [
                'type' => 'INT',
                'constraint' => '255',
                'null' => TRUE,
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
        $this->forge->createTable('survey_dosen');
    }

    public function down()
    {
        $this->forge->dropTable('survey_dosen',true);
    }
}
