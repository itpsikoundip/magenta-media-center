<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProposalUnitTugas extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'nama_unittugas'         => 'Akademik dan Kemahasiswaan',
            ],
            [
                'nama_unittugas'         => 'Sumberdaya',
            ],
            [
                'nama_unittugas'         => 'Tata Usaha',
            ],
            [
                'nama_unittugas'         => 'Wakil Dekan Akademik dan Kemahasiswaan',
            ],
            [
                'nama_unittugas'         => 'Wakil Dekan Sumber Daya',
            ],
            [
                'nama_unittugas'         => 'Ketua Prodi S1',
            ],
            [
                'nama_unittugas'         => 'Ketua Prodi S2',
            ],
            [
                'nama_unittugas'         => 'Dekan',
            ],
        ];

        $this->db->table('proposal_unittugas')->insertBatch($data);
    }
}
