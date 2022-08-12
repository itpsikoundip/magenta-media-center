<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RefStaffdosenStatus extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_status' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'nama_status' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ]
        ]);
        $this->forge->addKey('id_status', 'true');
        $this->forge->createTable('ref_stafdosen_status');
    }

    public function down()
    {
        $this->forge->dropTable('ref_stafdosen_status');
    }
}
