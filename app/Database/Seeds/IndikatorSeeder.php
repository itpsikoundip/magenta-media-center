<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class IndikatorSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'indikator'               => 'Sangat Baik',
                'skor'              => 0,
                'created_at'        => Time::now(),
                'updated_at'        => Time::now()
            ],
            [
                'indikator'               => 'Baik',
                'skor'              => 0,
                'created_at'        => Time::now(),
                'updated_at'        => Time::now()
            ],
            [
                'indikator'               => 'Cukup',
                'skor'              => 0,
                'created_at'        => Time::now(),
                'updated_at'        => Time::now()
            ],
            [
                'indikator'               => 'Buruk',
                'skor'              => 0,
                'created_at'        => Time::now(),
                'updated_at'        => Time::now()
            ],
            [
                'indikator'               => 'Sangat Buruk',
                'skor'              => 0,
                'created_at'        => Time::now(),
                'updated_at'        => Time::now()
            ],
        ];

        // Simple Queries
        // $this->db->query('INSERT INTO data_dosen (nip, nidn, nama_lengkap, email, jns_kel, status_bekerja, jenis_peg, kepakaran, created_at, updated_at) 
        // VALUES(:nip:, :nidn:, :nama_lengkap:, :email:, :jns_kel:, :status_bekerja:, :jenis_peg:, :kepakaran:, :created_at:, :updated_at:)', $data);

        // Using Query Builder
        $this->db->table('indikator')->insertBatch($data);
    }
}
