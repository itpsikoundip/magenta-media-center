<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserAdmin extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_admin' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE,
            ],
            'nama' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'email' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'password' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255
            ]
        ]);
        $this->forge->addPrimaryKey('id_admin');
        $this->forge->createTable('user_admin');
    }

    public function down()
    {
        //
        $this->forge->dropTable('user_admin', true);
    }
}
