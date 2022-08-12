<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RefStaffdosenJenispegawai extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_jenispegawai'    => 'Tenaga Kependidikan',
            ],
            [
                'nama_jenispegawai'    => 'Tenaga Dosen',
            ],
            [
                'nama_jenispegawai'    => 'Tenaga Kependidikan & Dosen',
            ],
        ];
        $this->db->table('ref_stafdosen_jenispegawai')->insertBatch($data);
    }
}
