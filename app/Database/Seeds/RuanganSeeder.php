<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RuanganSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'nama'          => 'Ruang Rapat',
                'lantai'        => 7,
            ],
            [
                'nama'          => 'Ruang Aula',
                'lantai'        => 1,
            ],
        ];

        $this->db->table('kegiatan_ruangan')->insertBatch($data);
    }
}
