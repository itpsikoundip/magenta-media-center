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
                'mahasiswa_id'  => '15000119130081',
                'ormawa_id'     => 1,
            ],
            [
                'mahasiswa_id'  => '15000119130326',
                'ormawa_id'        => 2,
            ],
            [
                'mahasiswa_id'  => '15000120120005',
                'ormawa_id'        => 3,
            ],
            [
                'mahasiswa_id'  => '15000121120060',
                'ormawa_id'        => 4,
            ],
            [
                'mahasiswa_id'  => '15000119130176',
                'ormawa_id'        => 5,
            ],
            [
                'mahasiswa_id'  => '15000119140317',
                'ormawa_id'        => 6,
            ],
            [
                'mahasiswa_id'  => '15000121140221',
                'ormawa_id'        => 7,
            ],
            [
                'mahasiswa_id'  => '15000118120055',
                'ormawa_id'        => 8,
            ],
            [
                'mahasiswa_id'  => '15000120130251',
                'ormawa_id'        => 9,
            ],
            [
                'mahasiswa_id'  => '15000120140097',
                'ormawa_id'        => 10,
            ],
            [
                'mahasiswa_id'  => '15000120140156',
                'ormawa_id'        => 11,
            ],
        ];

        $this->db->table('mahasiswa_ormawa')->insertBatch($data);
    }
}
