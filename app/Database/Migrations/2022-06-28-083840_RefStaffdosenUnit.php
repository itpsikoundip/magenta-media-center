<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RefStaffdosenUnit extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_unit' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'nama_unit' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ]
        ]);
        $this->forge->addKey('id_unit', 'true');
        $this->forge->createTable('ref_stafdosen_unit');
    }

    public function down()
    {
        $this->forge->dropTable('ref_stafdosen_unit');
    }
}
