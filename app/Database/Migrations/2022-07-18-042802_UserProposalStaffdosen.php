<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserProposalStaffdosen extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_user_proposal_staffdosen' => [
                'type'          => 'INT',
                'constraint'    => '11',
                'unsigned'      => TRUE,
                'auto_increment' => TRUE,
            ],
            'staffdosen_id' => [
                'type'          => 'INT',
                'constraint'    => '11',
                'unsigned'      => TRUE,
            ],
            'unittugas_id' => [
                'type'          => 'INT',
                'constraint'    => '11',
                'unsigned'      => TRUE,
            ]
        ]);
        $this->forge->addPrimaryKey('id_user_proposal_staffdosen');
        $this->forge->addForeignKey('staffdosen_id', 'data_staffdosen', 'id_staffdosen');
        $this->forge->addForeignKey('unittugas_id', 'proposal_unittugas', 'id_unittugas');
        $this->forge->createTable('proposal_user_staffdosen');
    }

    public function down()
    {
        //
        $this->forge->dropTable('proposal_user_staffdosen', true);
    }
}
