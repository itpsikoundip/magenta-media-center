<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProposalUserStaffDosen extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'staffdosen_id'  => '36',
                'unittugas_id'  => '3'
            ],
            [
                'staffdosen_id'  => '9',
                'unittugas_id'  => '6'
            ],
            [
                'staffdosen_id'  => '17',
                'unittugas_id'  => '4'
            ],
            [
                'staffdosen_id'  => '20',
                'unittugas_id'  => '5'
            ],
            [
                'staffdosen_id'  => '22',
                'unittugas_id'  => '8'
            ],
            [
                'staffdosen_id'  => '27',
                'unittugas_id'  => '7'
            ],
            [
                'staffdosen_id'  => '35',
                'unittugas_id'  => '2'
            ],
            [
                'staffdosen_id'  => '62',
                'unittugas_id'  => '1'
            ],
        ];

        $this->db->table('proposal_user_staffdosen')->insertBatch($data);
    }
}
