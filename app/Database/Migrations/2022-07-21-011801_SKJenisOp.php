<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SKJenisOp extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_sk_jenis_op' => [
                'type'          => 'INT',
                'constraint'    => 6,
                'unsigned'      => TRUE,
                'auto_increment' => TRUE,
            ],
            'nama_jenis_op' => [
                'type'          => 'VARCHAR',
                'constraint'    => '50',
            ],
        ]);
        $this->forge->addPrimaryKey('id_sk_jenis_op');
        $this->forge->createTable('sk_jenis_op');
    }

    public function down()
    {
        //
        $this->forge->dropTable('sk_jenis_op', true);
    }
}
