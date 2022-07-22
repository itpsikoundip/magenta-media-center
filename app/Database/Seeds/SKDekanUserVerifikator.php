<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SKDekanUserVerifikator extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'staffdosen_id'                         => '62',
                'sk_dekan_jenis_verifikator_id'         => '1',
            ],
            [
                'staffdosen_id'                         => '35',
                'sk_dekan_jenis_verifikator_id'         => '2',
            ],
            [
                'staffdosen_id'                         => '36',
                'sk_dekan_jenis_verifikator_id'         => '3',
            ],
            [
                'staffdosen_id'                         => '17',
                'sk_dekan_jenis_verifikator_id'         => '4',
            ],
            [
                'staffdosen_id'                         => '20',
                'sk_dekan_jenis_verifikator_id'         => '5',
            ],
            [
                'staffdosen_id'                         => '22',
                'sk_dekan_jenis_verifikator_id'         => '6',
            ],
        ];

        $this->db->table('sk_dekan_user_verifikator')->insertBatch($data);
    }
}
