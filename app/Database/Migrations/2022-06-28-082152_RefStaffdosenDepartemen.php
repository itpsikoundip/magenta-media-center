<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RefStaffdosenDepartemen extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_departemen' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'nama_departemen' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ]
        ]);
        $this->forge->addKey('id_departemen', 'true');
        $this->forge->createTable('ref_stafdosen_departemen');
    }

    public function down()
    {
        $this->forge->dropTable('ref_stafdosen_departemen',true);
    }
}
