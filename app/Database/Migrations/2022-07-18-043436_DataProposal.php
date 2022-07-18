<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataProposal extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id_propo' => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsigned'      => TRUE,
                'auto_increment' => TRUE,
            ],
            'judul_propo' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'jenis_propo' => [
                'type'          => 'INT',
                'constraint'    => '2',
                'unsigned'      => TRUE,
            ],
            'nama_keg' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'tahun_anggaran' => [
                'type'          => 'INT',
                'constraint'    => '4',
            ],
            'organisasi_lembaga' => [
                'type'          => 'INT',
                'constraint'    => '6',
                'unsigned'      => TRUE,
            ],
            'penanggung_jawab' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'no_hp' => [
                'type'          => 'VARCHAR',
                'constraint'    => '50',
            ],
            'tanggal_mulai' => [
                'type'          => 'DATE',
            ],
            'tanggal_selesai' => [
                'type'          => 'DATE',
            ],
            'lokasi' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'total_anggaran' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
                'default'       => 0,
            ],
            'tentang_propo' => [
                'type'          => 'VARCHAR',
                'constraint'    => '500',
            ],
            'upload_proposal' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
            ],
            'jenispendidikan_propo' => [
                'type'          => 'VARCHAR',
                'constraint'    => '2',
            ],
            'created_at' => [
                'type'          => 'TIMESTAMP',
            ],
            // BEM
            'bem_status' => [
                'type'          => 'INT',
                'constraint'    => '1',
                'default'       => 0,
            ],
            'bem_note' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
                'null'          => TRUE,
            ],
            'bem_user' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
                'null'          => TRUE,
            ],
            'bem_updatetime' => [
                'type'          => 'DATETIME',
                'null'          => TRUE,
            ],
            // AKADEMIK
            'akademik_status' => [
                'type'          => 'INT',
                'constraint'    => '1',
                'default'       => 0,
            ],
            'akademik_note' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
                'null'          => TRUE,
            ],
            'akademik_user' => [
                'type'          => 'INT',
                'constraint'    => '11',
                'null'          => TRUE,
                'unsigned'      => TRUE,
            ],
            'akademik_updatetime' => [
                'type'          => 'DATETIME',
                'null'          => TRUE,
            ],
            // SUMBERDAYA
            'sumberdaya_status' => [
                'type'          => 'INT',
                'constraint'    => '1',
                'default'       => 0,
            ],
            'sumberdaya_note' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
                'null'          => TRUE,
            ],
            'sumberdaya_user' => [
                'type'          => 'INT',
                'constraint'    => '11',
                'null'          => TRUE,
                'unsigned'      => TRUE,
            ],
            'sumberdaya_updatetime' => [
                'type'          => 'DATETIME',
                'null'          => TRUE,
            ],
            // TATAUSAHA
            'tatausaha_status' => [
                'type'          => 'INT',
                'constraint'    => '1',
                'default'       => 0,
            ],
            'tatausaha_note' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
                'null'          => TRUE,
            ],
            'tatausaha_user' => [
                'type'          => 'INT',
                'constraint'    => '11',
                'null'          => TRUE,
                'unsigned'      => TRUE,
            ],
            'tatausaha_updatetime' => [
                'type'          => 'DATETIME',
                'null'          => TRUE,
            ],
            //KAPRODI S1
            'kaprodis1_status' => [
                'type'          => 'INT',
                'constraint'    => '1',
                'default'       => 0,
            ],
            'kaprodis1_note' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
                'null'          => TRUE,
            ],
            'kaprodis1_user' => [
                'type'          => 'INT',
                'constraint'    => '11',
                'null'          => TRUE,
                'unsigned'      => TRUE,
            ],
            'kaprodis1_updatetime' => [
                'type'          => 'DATETIME',
                'null'          => TRUE,
            ],
            //KAPRODI S2
            'kaprodis2_status' => [
                'type'          => 'INT',
                'constraint'    => '1',
                'default'       => 0,
            ],
            'kaprodis2_note' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
                'null'          => TRUE,
            ],
            'kaprodis2_user' => [
                'type'          => 'INT',
                'constraint'    => '11',
                'null'          => TRUE,
                'unsigned'      => TRUE,
            ],
            'kaprodis2_updatetime' => [
                'type'          => 'DATETIME',
                'null'          => TRUE,
            ],
            //WADEK AKADEMIK
            'wadekakem_status' => [
                'type'          => 'INT',
                'constraint'    => '1',
                'default'       => 0,
            ],
            'wadekakem_note' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
                'null'          => TRUE,
            ],
            'wadekakem_user' => [
                'type'          => 'INT',
                'constraint'    => '11',
                'null'          => TRUE,
                'unsigned'      => TRUE,
            ],
            'wadekakem_updatetime' => [
                'type'          => 'DATETIME',
                'null'          => TRUE,
            ],
            //WADEK SUMDA
            'wadeksumda_status' => [
                'type'          => 'INT',
                'constraint'    => '1',
                'default'       => 0,
            ],
            'wadeksumda_note' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
                'null'          => TRUE,
            ],
            'wadeksumda_user' => [
                'type'          => 'INT',
                'constraint'    => '11',
                'null'          => TRUE,
                'unsigned'      => TRUE,
            ],
            'wadeksumda_updatetime' => [
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
        $this->forge->addPrimaryKey('id_propo');
        $this->forge->addForeignKey('jenis_propo', 'proposal_jenis', 'id_jenis');
        $this->forge->addForeignKey('organisasi_lembaga', 'ormawa', 'id');
        $this->forge->addForeignKey('bem_user', 'mahasiswa', 'nim');
        $this->forge->addForeignKey('akademik_user', 'data_staffdosen', 'id_staffdosen');
        $this->forge->addForeignKey('sumberdaya_user', 'data_staffdosen', 'id_staffdosen');
        $this->forge->addForeignKey('tatausaha_user', 'data_staffdosen', 'id_staffdosen');
        $this->forge->addForeignKey('kaprodis1_user', 'data_staffdosen', 'id_staffdosen');
        $this->forge->addForeignKey('kaprodis2_user', 'data_staffdosen', 'id_staffdosen');
        $this->forge->addForeignKey('wadekakem_user', 'data_staffdosen', 'id_staffdosen');
        $this->forge->addForeignKey('wadeksumda_user', 'data_staffdosen', 'id_staffdosen');
        $this->forge->addForeignKey('dekan_user', 'data_staffdosen', 'id_staffdosen');
        $this->forge->createTable('proposal_data');
    }

    public function down()
    {
        //
        $this->forge->dropTable('proposal_data', true);
    }
}
