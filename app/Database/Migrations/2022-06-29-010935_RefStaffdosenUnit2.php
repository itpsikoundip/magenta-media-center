<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RefStaffdosenUnit2 extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_unit2' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'nama_unit2' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ]
        ]);
        $this->forge->addKey('id_unit2', 'true');
        $this->forge->createTable('ref_stafdosen_unit2');
    }

    public function down()
    {
        $this->forge->dropTable('ref_stafdosen_unit2');
    }
}
