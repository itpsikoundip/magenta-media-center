<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProposalUnitTugas extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_unittugas' => [
                'type'          => 'INT',
                'constraint'    => '11',
                'unsigned'      => TRUE,
                'auto_increment' => TRUE,
            ],
            'nama_unittugas' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ]
        ]);
        $this->forge->addPrimaryKey('id_unittugas');
        $this->forge->createTable('proposal_unittugas');
    }

    public function down()
    {
        //
        $this->forge->dropTable('proposal_unittugas', true);
    }
}
