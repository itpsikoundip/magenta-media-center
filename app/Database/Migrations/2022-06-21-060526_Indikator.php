<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Indikator extends Migration
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
            'indikator' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'skor' => [
                'type'       => 'INT',
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
        $this->forge->createTable('indikator');
    }

    public function down()
    {
        $this->forge->dropTable('indikator');
    }
}
