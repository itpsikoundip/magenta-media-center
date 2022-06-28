<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RefStaffdosenUnit extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_unit'    => 'Psikologi S1',
            ],
            [
                'nama_unit'    => 'Subbagian Akademik dan Kemahasiswaan FPSI',
            ],
            [
                'nama_unit'    => 'Subbagian Sumberdaya FPSI',
            ],
            [
                'nama_unit'    => 'Dekan',
            ],
            [
                'nama_unit'    => 'Wadek Akademik dan Kemahasiswaan',
            ],
            [
                'nama_unit'    => 'Wadek Sumber Daya',
            ],
            [
                'nama_unit'    => 'Kaprodi S1',
            ],
            [
                'nama_unit'    => 'Kaprodi S2',
            ],
            [
                'nama_unit'    => 'Manager Tata Usaha',
            ],
        ];
        $this->db->table('ref_stafdosen_unit')->insertBatch($data);
    }
}
