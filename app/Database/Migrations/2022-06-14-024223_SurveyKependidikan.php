<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SurveyKependidikan extends Migration
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
            'id_kepend' => [
                'type' => 'INT',
                'constraint' => '11',
            ],
            'sangat_baik' => [
                'type' => 'INT',
                'constraint' => '255',
                'default' => 0,
            ],
            'baik' => [
                'type' => 'INT',
                'constraint' => '255',
                'default' => 0,
            ],
            'cukup' => [
                'type' => 'INT',
                'constraint' => '255',
                'default' => 0,
            ],
            'buruk' => [
                'type' => 'INT',
                'constraint' => '255',
                'default' => 0,
            ],
            'sangat_buruk' => [
                'type' => 'INT',
                'constraint' => '255',
                'default' => 0,
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
        $this->forge->createTable('survey_kependidikan');
    }

    public function down()
    {
        $this->forge->dropTable('survey_kependidikan');
    }
}
