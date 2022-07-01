<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JenisProposal extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_jenis' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'nama_jenis' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ]
        ]);
        $this->forge->addKey('id_jenis', 'true');
        $this->forge->createTable('proposal_jenis');
    }

    public function down()
    {
        $this->forge->dropTable('proposal_jenis',true);
    }
}
