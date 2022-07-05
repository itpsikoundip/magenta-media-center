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
                'nama'         => 'Senat Mahasiswa',
            ],
            [
                'nama'         => 'Badan Eksekutif Mahasiswa',
            ],
            [
                'nama'         => 'UKMF Sie Kerohanian Islam',
            ],
            [
                'nama'         => 'UKMF Tari Independance',
            ],
            [
                'nama'         => 'UKMF Teater Psimewah',
            ],
            [
                'nama'         => 'UKMF Olahraga Psychopop',
            ],
            [
                'nama'         => 'UKMF Paduan Suara Psychovocalista',
            ],
            [
                'nama'         => 'UKMF Kelompok Studi Psikologi Islam',
            ],
            [
                'nama'         => 'UKMF Persekutuan Mahasiswa Kristen Katolik',
            ],
            [
                'nama'         => 'UKMF Lembaga Pers Psikojur',
            ],
            [
                'nama'         => 'UKMF Pecinta Alam Psikologi Hijau',
            ],
        ];

        $this->db->table('ormawa')->insertBatch($data);
    }
}
