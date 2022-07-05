<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RefStaffdosenStatus extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_status'    => 'Aktif',
            ],
            [
                'nama_status'    => 'Tidak Aktif',
            ],
        ];
        $this->db->table('ref_stafdosen_status')->insertBatch($data);
    }
}
