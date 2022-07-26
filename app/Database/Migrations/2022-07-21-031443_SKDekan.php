<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SKDekan extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_sk_dekan' => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsigned'      => TRUE,
                'auto_increment' => TRUE,
            ],
            'jenis_op_id' => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsigned'      => TRUE,
            ],
            'pengaju_id' => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsigned'      => TRUE,
            ],
            'judul_sk' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'tanggal_pembuatan' => [
                'type'          => 'DATE',
            ],
            'tmt_kegiatan' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'upload_sk_dekan' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'created_at' => [
                'type'          => 'TIMESTAMP',
            ],
            // SV AKEM
            'sk_akem_status' => [
                'type'          => 'INT',
                'constraint'    => '1',
                'default'       => 0,
            ],
            'sk_akem_note' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
                'null'          => TRUE,
            ],
            'sk_akem_user' => [
                'type'          => 'INT',
                'constraint'    => '255',
                'null'          => TRUE,
                'unsigned'      => TRUE,
            ],
            'sk_akem_updatetime' => [
                'type'          => 'DATETIME',
                'null'          => TRUE,
            ],
            // SV SUMDA
            'sv_sumda_status' => [
                'type'          => 'INT',
                'constraint'    => '1',
                'default'       => 0,
            ],
            'sv_sumda_note' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
                'null'          => TRUE,
            ],
            'sv_sumda_user' => [
                'type'          => 'INT',
                'constraint'    => '11',
                'null'          => TRUE,
                'unsigned'      => TRUE,
            ],
            'sv_sumda_updatetime' => [
                'type'          => 'DATETIME',
                'null'          => TRUE,
            ],
            // MANAGER TU
            'manager_tu_status' => [
                'type'          => 'INT',
                'constraint'    => '1',
                'default'       => 0,
            ],
            'manager_tu_note' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
                'null'          => TRUE,
            ],
            'manager_tu_user' => [
                'type'          => 'INT',
                'constraint'    => '11',
                'null'          => TRUE,
                'unsigned'      => TRUE,
            ],
            'manager_tu_updatetime' => [
                'type'          => 'DATETIME',
                'null'          => TRUE,
            ],
            // WADEK AKUM
            'wadek_akem_status' => [
                'type'          => 'INT',
                'constraint'    => '1',
                'default'       => 0,
            ],
            'wadek_akem_note' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
                'null'          => TRUE,
            ],
            'wadek_akem_user' => [
                'type'          => 'INT',
                'constraint'    => '11',
                'null'          => TRUE,
                'unsigned'      => TRUE,
            ],
            'wadek_akem_updatetime' => [
                'type'          => 'DATETIME',
                'null'          => TRUE,
            ],
            //WADEK SUMDA
            'wadek_sumda_status' => [
                'type'          => 'INT',
                'constraint'    => '1',
                'default'       => 0,
            ],
            'wadek_sumda_note' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
                'null'          => TRUE,
            ],
            'wadek_sumda_user' => [
                'type'          => 'INT',
                'constraint'    => '11',
                'null'          => TRUE,
                'unsigned'      => TRUE,
            ],
            'wadek_sumda_updatetime' => [
                'type'          => 'DATETIME',
                'null'          => TRUE,
            ],
            //DEKAN
            'dekan_status' => [
                'type'          => 'INT',
                'constraint'    => '1',
                'default'       => 0,
            ],
            'dekan_note' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
                'null'          => TRUE,
            ],
            'dekan_user' => [
                'type'          => 'INT',
                'constraint'    => '11',
                'null'          => TRUE,
                'unsigned'      => TRUE,
            ],
            'dekan_updatetime' => [
                'type'          => 'DATETIME',
                'null'          => TRUE,
            ],
            'updated_at' => [
                'type'          => 'DATETIME',
                'null'          => TRUE,
            ],
        ]);
        $this->forge->addPrimaryKey('id_sk_dekan');
        $this->forge->addForeignKey('jenis_op_id', 'sk_jenis_op', 'id_sk_jenis_op');
        $this->forge->addForeignKey('pengaju_id', 'data_staffdosen', 'id_staffdosen');
        $this->forge->addForeignKey('sk_akem_user', 'data_staffdosen', 'id_staffdosen');
        $this->forge->addForeignKey('sv_sumda_user', 'data_staffdosen', 'id_staffdosen');
        $this->forge->addForeignKey('manager_tu_user', 'data_staffdosen', 'id_staffdosen');
        $this->forge->addForeignKey('wadek_akem_user', 'data_staffdosen', 'id_staffdosen');
        $this->forge->addForeignKey('wadek_sumda_user', 'data_staffdosen', 'id_staffdosen');
        $this->forge->addForeignKey('dekan_user', 'data_staffdosen', 'id_staffdosen');
        $this->forge->createTable('sk_dekan');
    }

    public function down()
    {
        //
        $this->forge->dropTable('sk_dekan', true);
    }
}
