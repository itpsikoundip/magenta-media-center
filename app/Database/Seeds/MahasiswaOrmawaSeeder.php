<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MahasiswaOrmawaSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'mahasiswa_id'  => '24060119140015',
                'ormawa_id'     => 1,
            ],
            [
                'mahasiswa_id'  => '24060119130076',
                'ormawa_id'        => 2,
            ],
            [
                'mahasiswa_id'  => '24060118140001',
                'ormawa_id'        => 7,
            ],
        ];

        $this->db->table('mahasiswa_ormawa')->insertBatch($data);
    }
}
