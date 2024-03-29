<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SaranLulusan extends Migration
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
            'saran_lulusan' => [
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
        $this->forge->createTable('survey_saranlulusan');
    }

    public function down()
    {
        $this->forge->dropTable('survey_saranlulusan', true);
    }
}
