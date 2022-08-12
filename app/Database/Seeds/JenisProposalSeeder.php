<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class JenisProposalSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_jenis'    => 'Kegiatan',
            ],
            [
                'nama_jenis'    => 'Pengajuan Dana',
            ],
            [
                'nama_jenis'    => 'Kerjasama',
            ],
        ];
        $this->db->table('proposal_jenis')->insertBatch($data);
    }
}
