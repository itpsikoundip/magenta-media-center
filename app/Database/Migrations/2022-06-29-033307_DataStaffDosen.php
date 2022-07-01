<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataStaffDosen extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_staffdosen' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'nip' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'jenispegawai_id' => [
                'type' => 'INT',
                'constraint' => '11',
            ],
            'departemen_id' => [
                'type' => 'INT',
                'constraint' => '11',
            ],
            'unit_id' => [
                'type' => 'INT',
                'constraint' => '11',
            ],
            'unit2_id' => [
                'type' => 'INT',
                'constraint' => '11',
            ],
            'status_staffdosen' => [
                'type' => 'INT',
                'constraint' => '11',
            ],
        ]);
        $this->forge->addKey('id_staffdosen', 'true');
        $this->forge->createTable('data_staffdosen');
    }

    public function down()
    {
        $this->forge->dropTable('data_staffdosen',true);
    }
}
