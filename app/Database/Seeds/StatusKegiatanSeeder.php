<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StatusKegiatanSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'nama'         => 'Akan Berlangsung',
            ],
            [
                'nama'         => 'Sedang Berlangsung',
            ],
            [
                'nama'         => 'Selesai',
            ],
        ];

        $this->db->table('kegiatan_status')->insertBatch($data);
    }
}
