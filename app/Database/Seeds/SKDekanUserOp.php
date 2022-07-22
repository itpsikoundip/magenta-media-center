<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SKDekanUserOp extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'staffdosen_id'                => '39',
                'sk_dekan_jenis_op_id'         => '2',
            ],
            [
                'staffdosen_id'                => '29',
                'sk_dekan_jenis_op_id'         => '1',
            ],
        ];

        $this->db->table('sk_dekan_user_op')->insertBatch($data);
    }
}
