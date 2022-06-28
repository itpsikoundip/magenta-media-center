<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RefStaffdosenDepartemen extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_departemen'    => 'Tanpa Departemen',
            ],
            [
                'nama_departemen'    => 'Bagian Tata Usaha FPSI',
            ],
        ];
        $this->db->table('ref_stafdosen_departemen')->insertBatch($data);
    }
}
