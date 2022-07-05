<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RefStaffdosenJenispegawai extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_jenispagawai'    => 'Tenaga Kependidikan',
            ],
            [
                'nama_jenispagawai'    => 'Tenaga Dosen',
            ],
            [
                'nama_jenispagawai'    => 'Tenaga Kependidikan & Dosen',
            ],
        ];
        $this->db->table('ref_stafdosen_jenispegawai')->insertBatch($data);
    }
}
