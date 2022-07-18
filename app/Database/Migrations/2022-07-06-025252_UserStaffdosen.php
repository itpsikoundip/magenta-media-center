<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserStaffdosen extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_userstaffdosen' => [
                'type'          => 'INT',
                'constraint'    => '6',
                'unsigned'      => TRUE,
                'auto_increment' => TRUE,
            ],
            'staffdosen_id' => [
                'type'          => 'INT',
                'constraint'    => '11',
                'unsigned'      => TRUE,
            ],
            'password' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'proposal' => [
                'type'          => 'INT',
                'constraint'    => '1',
                'unsigned'      => TRUE,
            ],
            'survey' => [
                'type'          => 'INT',
                'constraint'    => '1',
                'unsigned'      => TRUE,
            ],
            'helpdesk' => [
                'type'          => 'INT',
                'constraint'    => '1',
                'unsigned'      => TRUE,
            ],
            'sk' => [
                'type'          => 'INT',
                'constraint'    => '1',
                'unsigned'      => TRUE,
            ],
            'catatan' => [
                'type'          => 'VARCHAR',
                'constraint'    => '50',
            ],
        ]);
        $this->forge->addPrimaryKey('id_userstaffdosen');
        $this->forge->addForeignKey('staffdosen_id', 'data_staffdosen', 'id_staffdosen');
        $this->forge->createTable('user_staffdosen');
    }

    public function down()
    {
        //
        $this->forge->dropTable('user_staffdosen', true);
    }
}
