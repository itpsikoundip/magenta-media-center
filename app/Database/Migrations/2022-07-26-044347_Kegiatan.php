<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kegiatan extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                'type'          => 'INT',
                'constraint'    => 6,
                'unsigned'      => TRUE,
                'auto_increment' => TRUE,
            ],
            'ruangan_id' => [
                'type'          => 'INT',
                'constraint'    => 6,
                'unsigned'      => TRUE,
            ],
            'tanggal' => [
                'type' => 'DATE',
            ],
            'mulai' => [
                'type' => 'TIME',
            ],
            'selesai' => [
                'type' => 'TIME',
            ],
            'agenda' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'pic_id' => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsigned'      => TRUE,
            ],
            'hp' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'undangan' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
                'null'          => TRUE,
            ],
            'created_at' => [
                'type'          => 'DATETIME',
                'null'          => TRUE,
            ],
            'updated_at' => [
                'type'          => 'DATETIME',
                'null'          => TRUE,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('ruangan_id', 'kegiatan_ruangan', 'id');
        $this->forge->addForeignKey('pic_id', 'data_staffdosen', 'id_staffdosen');
        $this->forge->createTable('kegiatan');
    }

    public function down()
    {
        //
        $this->forge->dropTable('kegiatan', true);
    }
}
