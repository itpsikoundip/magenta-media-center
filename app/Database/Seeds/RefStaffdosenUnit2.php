<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RefStaffdosenUnit2 extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_unit2'    => 'Akademik',
            ],
            [
                'nama_unit2'    => 'Non-akademik',
            ],
            [
                'nama_unit2'    => 'Lainnya',
            ],
        ];
        $this->db->table('ref_stafdosen_unit2')->insertBatch($data);
    }
}
