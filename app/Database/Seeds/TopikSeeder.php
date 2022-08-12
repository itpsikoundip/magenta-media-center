<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TopikSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'nama'         => 'Akademik',
            ],
            [
                'nama'         => 'Non-akademik',
            ],
        ];

        $this->db->table('topik')->insertBatch($data);
    }
}
