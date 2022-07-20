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
                'mahasiswa_id'  => '24060119130076',
                'ormawa_id'     => 1,
            ],
            [
                'mahasiswa_id'  => '24060118140001',
                'ormawa_id'        => 2,
            ],
            [
                'mahasiswa_id'  => '24060114902834',
                'ormawa_id'        => 3,
            ],
            [
                'mahasiswa_id'  => '24060119304322',
                'ormawa_id'        => 4,
            ],
            [
                'mahasiswa_id'  => '24060124189402',
                'ormawa_id'        => 5,
            ],
            [
                'mahasiswa_id'  => '24060184973342',
                'ormawa_id'        => 6,
            ],
            [
                'mahasiswa_id'  => '24060192038426',
                'ormawa_id'        => 7,
            ],
            [
                'mahasiswa_id'  => '24060193875315',
                'ormawa_id'        => 8,
            ],
            [
                'mahasiswa_id'  => '24060156343468',
                'ormawa_id'        => 9,
            ],
            [
                'mahasiswa_id'  => '24060132525748',
                'ormawa_id'        => 10,
            ],
            [
                'mahasiswa_id'  => '24060146786546',
                'ormawa_id'        => 11,
            ],
        ];

        $this->db->table('mahasiswa_ormawa')->insertBatch($data);
    }
}
