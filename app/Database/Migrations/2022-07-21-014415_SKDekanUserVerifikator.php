<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SKDekanUserVerifikator extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_sk_dekan_user_verifikator' => [
                'type'          => 'INT',
                'constraint'    => 6,
                'unsigned'      => TRUE,
                'auto_increment' => TRUE,
            ],
            'staffdosen_id' => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsigned'      => TRUE,
            ],
            'sk_dekan_jenis_verifikator_id' => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsigned'      => TRUE,
            ],
        ]);
        $this->forge->addPrimaryKey('id_sk_dekan_user_verifikator');
        $this->forge->addForeignKey('staffdosen_id', 'data_staffdosen', 'id_staffdosen');
        $this->forge->addForeignKey('sk_dekan_jenis_verifikator_id', 'sk_dekan_jenis_verifikator', 'id_sk_dekan_jenis_verifikator');
        $this->forge->createTable('sk_dekan_user_verifikator');
    }

    public function down()
    {
        //
        $this->forge->dropTable('sk_dekan_user_verifikator', true);
    }
}
