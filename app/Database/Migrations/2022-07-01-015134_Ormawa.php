<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ormawa extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                'type'          => 'INT',
                'constraint'    => 6,
                'unsigned'      => TRUE,
                'auto_increment' => TRUE,
            ],
            'nama_ormawa' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('ormawa');
    }

    public function down()
    {
        //
        $this->forge->dropTable('ormawa', true);
    }
}
