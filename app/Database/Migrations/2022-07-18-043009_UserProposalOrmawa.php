<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserProposalOrmawa extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_user_proposal_ormawa' => [
                'type'          => 'INT',
                'constraint'    => '11',
                'unsigned'      => TRUE,
                'auto_increment' => TRUE,
            ],
            'mahasiswaormawa_id' => [
                'type'          => 'INT',
                'constraint'    => '6',
                'unsigned'      => TRUE,
            ]
        ]);
        $this->forge->addPrimaryKey('id_user_proposal_ormawa');
        $this->forge->createTable('proposal_user_ormawa');
    }

    public function down()
    {
        //
        $this->forge->dropTable('proposal_user_ormawa', true);
    }
}
