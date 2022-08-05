<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'nim' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'auto_increment' => FALSE,
            ],
            'nama' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'jenis_kelamin' => [
                'type'          => 'INT',
                'constraint'    => 2,
                'comment'       => '1 = Laki-Laki, 2 = Perempuan',
            ],
            'tahun_masuk' => [
                'type'          => 'YEAR',
            ],
            'email' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
                'unique'        => TRUE,
                'null'          => TRUE,
            ],
            'password' => [
                'type'          => 'VARCHAR',
                'constraint'    => 255,
            ],
            'status' => [
                'type'          => 'VARCHAR',
                'constraint'    => 1,
                'default'       => 1,
                'comment'       => '0 = Tidak Aktif, 1 = Aktif',
            ],
            'reset_pass' => [
                'type'          => 'INT',
                'constraint'    => 1,
                'default'       => 0,
                'comment'       => '0 = Belum, 1 = Sudah',
            ],
            'fotoprofil' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255',
                'null'          => TRUE,
            ],
            'created_at' => [
                'type'          => 'DATETIME',
                'null'          => TRUE,
                'on update'     => 'NOW()'
            ],
            'updated_at' => [
                'type'          => 'DATETIME',
                'null'          => TRUE,
                'on update'     => 'NOW()'
            ],
        ]);
        $this->forge->addPrimaryKey('nim');
        $this->forge->createTable('mahasiswa');
    }

    public function down()
    {
        //
        $this->forge->dropTable('mahasiswa', true);
    }
}
