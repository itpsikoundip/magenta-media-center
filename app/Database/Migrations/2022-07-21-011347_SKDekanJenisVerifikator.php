<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SKDekanJenisVerifikator extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_sk_dekan_jenis_verifikator' => [
                'type'          => 'INT',
                'constraint'    => 6,
                'unsigned'      => TRUE,
                'auto_increment' => TRUE,
            ],
            'nama_jenis_verifikator' => [
                'type'          => 'VARCHAR',
                'constraint'    => '50',
            ],
        ]);
        $this->forge->addPrimaryKey('id_sk_dekan_jenis_verifikator');
        $this->forge->createTable('sk_dekan_jenis_verifikator');
    }

    public function down()
    {
        //
        $this->forge->dropTable('sk_dekan_jenis_verifikator', true);
    }
}
