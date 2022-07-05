<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RefStaffdosenUnit2 extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_unit2'    => 'Unknown',
            ],
            [
                'nama_unit2'    => 'Akademik',
            ],
            [
                'nama_unit2'    => 'Non Akademik',
            ],
        ];
        $this->db->table('ref_stafdosen_unit2')->insertBatch($data);
    }
}
