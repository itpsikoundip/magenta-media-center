<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SKUserOp extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_sk_user_op' => [
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
            'sk_jenis_op_id' => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsigned'      => TRUE,
            ],
        ]);
        $this->forge->addPrimaryKey('id_sk_user_op');
        $this->forge->addForeignKey('staffdosen_id', 'data_staffdosen', 'id_staffdosen');
        $this->forge->addForeignKey('sk_jenis_op_id', 'sk_jenis_op', 'id_sk_jenis_op');
        $this->forge->createTable('sk_user_op');
    }

    public function down()
    {
        //
        $this->forge->dropTable('sk_user_op', true);
    }
}
