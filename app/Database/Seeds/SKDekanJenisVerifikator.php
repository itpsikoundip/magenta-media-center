<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SKDekanJenisVerifikator extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'nama_jenis_verifikator'         => 'Supervisor Akademik dan Kemahasiswaan',
            ],
            [
                'nama_jenis_verifikator'         => 'Supervisor Sumber Daya',
            ],
            [
                'nama_jenis_verifikator'         => 'Manager Tata Usaha',
            ],
            [
                'nama_jenis_verifikator'         => 'Wakil Dekan Akademik dan Kemahasiswaan',
            ],
            [
                'nama_jenis_verifikator'         => 'Wakil Dekan Sumber Daya',
            ],
            [
                'nama_jenis_verifikator'         => 'Dekan',
            ],
        ];

        $this->db->table('sk_dekan_jenis_verifikator')->insertBatch($data);
    }
}
