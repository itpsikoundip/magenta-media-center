<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OrmawaSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'nama_ormawa'         => 'Senat Mahasiswa',
            ],
            [
                'nama_ormawa'         => 'Badan Eksekutif Mahasiswa',
            ],
            [
                'nama_ormawa'         => 'UKMF Sie Kerohanian Islam',
            ],
            [
                'nama_ormawa'         => 'UKMF Tari Independance',
            ],
            [
                'nama_ormawa'         => 'UKMF Teater Psimewah',
            ],
            [
                'nama_ormawa'         => 'UKMF Olahraga Psychopop',
            ],
            [
                'nama_ormawa'         => 'UKMF Paduan Suara Psychovocalista',
            ],
            [
                'nama_ormawa'         => 'UKMF Kelompok Studi Psikologi Islam',
            ],
            [
                'nama_ormawa'         => 'UKMF Persekutuan Mahasiswa Kristen Katolik',
            ],
            [
                'nama_ormawa'         => 'UKMF Lembaga Pers Psikojur',
            ],
            [
                'nama_ormawa'         => 'UKMF Pecinta Alam Psikologi Hijau',
            ],
        ];

        $this->db->table('ormawa')->insertBatch($data);
    }
}
