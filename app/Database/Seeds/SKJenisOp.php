<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SKJenisOp extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'nama_jenis_op'         => 'Operator Akademik dan Kemahasiswaan',
            ],
            [
                'nama_jenis_op'         => 'Operator Sumber Daya',
            ]
        ];

        $this->db->table('sk_jenis_op')->insertBatch($data);
    }
}
