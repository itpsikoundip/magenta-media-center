<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'nim'          => '24060119140015',
                'nama'         => 'Gading Ihsan',
                'email'        => 'gadingihsancc@students.undip.ac.id',
                'password'     => 'gadingihsan'
            ],
            [
                'nim'          => '24060119130076',
                'nama'         => 'Gregorius Willy',
                'email'        => 'gregoriuswilly@students.undip.ac.id',
                'password'     => 'gregoriuswilly'
            ],
            [
                'nim'          => '24060118140001',
                'nama'         => 'Ariel Gemilang',
                'email'        => 'arielgemilang@students.undip.ac.id',
                'password'     => 'arielgemilang'
            ],
        ];

        $this->db->table('mahasiswa')->insertBatch($data);
    }
}
