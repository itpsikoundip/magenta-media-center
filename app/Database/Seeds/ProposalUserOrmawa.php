<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProposalUserOrmawa extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'mahasiswaormawa_id'  => '1'
            ],
            [
                'mahasiswaormawa_id'  => '2'
            ],
            [
                'mahasiswaormawa_id'  => '3'
            ],
            [
                'mahasiswaormawa_id'  => '4'
            ],
            [
                'mahasiswaormawa_id'  => '5'
            ],
            [
                'mahasiswaormawa_id'  => '6'
            ],
            [
                'mahasiswaormawa_id'  => '7'
            ],
            [
                'mahasiswaormawa_id'  => '8'
            ],
            [
                'mahasiswaormawa_id'  => '9'
            ],
            [
                'mahasiswaormawa_id'  => '10'
            ],
        ];

        $this->db->table('proposal_user_ormawa')->insertBatch($data);
    }
}
