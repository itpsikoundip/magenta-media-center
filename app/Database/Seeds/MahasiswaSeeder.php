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
                'password'     => '$2y$10$42IZIlB3JuIfrEdNlrnYf.pecl0mSoRmB31YF4b054kurNTRs6m5u'
            ],
            [
                'nim'          => '24060119130076',
                'nama'         => 'Gregorius Willy',
                'email'        => 'gregoriuswilly@students.undip.ac.id',
                'password'     => '$2y$10$G7xYKfkbsLVEauZ/H2OfoOyIkeOSjVsqzpppqLn.Yj8sxNiQ9N6Ou'
            ],
            [
                'nim'          => '24060118140001',
                'nama'         => 'Ariel Gemilang',
                'email'        => 'arielgemilang@students.undip.ac.id',
                'password'     => '$2y$10$EYzWliPZQsqbQkVT5TjnCOg8sfdWJjOdqI4LQAQ2q5bD2Rk/7.xtO'
            ],
            [
                'nim'          => '24060114902834',
                'nama'         => 'Dewi Pudjiastuti',
                'email'        => 'dewipudjiastuti@students.undip.ac.id',
                'password'     => '$2y$10$p.3ZMbK7Y5D/D0olxbPSiu1WxHyjRMKhimRWeQAOe8ao2bNxH3cL2'
            ],
            [
                'nim'          => '24060119304322',
                'nama'         => 'Oskar Widodo',
                'email'        => 'oskarwidodo@students.undip.ac.id',
                'password'     => '$2y$10$e6AZJQ0ZfuT4iIN0wYmQw.nOk8WIubFmRhw2e.55LutQQX8QSpo26'
            ],
            [
                'nim'          => '24060124189402',
                'nama'         => 'Zahra Melani',
                'email'        => 'zahramelani@students.undip.ac.id',
                'password'     => '$2y$10$1qeVAwJBkpeuyHkva.wq2eV0/FlFemrvS6rrnfqf.FFye6Vcfwhi.'
            ],
            [
                'nim'          => '24060184973342',
                'nama'         => 'Garang Suryono',
                'email'        => 'garangsuryono@students.undip.ac.id',
                'password'     => '$2y$10$EEa8DucIm6AxZBFfh9dBWeTUfKFe/gADp9./fe/9tve9iXqzzFITC'
            ],
            [
                'nim'          => '24060192038426',
                'nama'         => 'Paramita Padmasari',
                'email'        => 'paramitapadmasari@students.undip.ac.id',
                'password'     => '$2y$10$injBYjSrEJjPX.SHiYioVuSGlRazX6LabP5yD6fvCx53x5RnZVeom'
            ],
            [
                'nim'          => '24060193875315',
                'nama'         => 'Banawi Marbun',
                'email'        => 'banawimarbun@students.undip.ac.id',
                'password'     => '$2y$10$kFVNcwSSDy1rnUZE1lpaJeXwWIZDZNVhSESC8x.kk/.JcLx1eNqJi'
            ],
            [
                'nim'          => '24060156343468',
                'nama'         => 'Fitriani Winarsih',
                'email'        => 'fitrianiwinarsih@students.undip.ac.id',
                'password'     => '$2y$10$lMGvVR4phnZI5DkV8Eo9z.iH0LRtwry8Cgow3pHhyKf/8D0x0YgVG'
            ],
            [
                'nim'          => '24060132525748',
                'nama'         => 'Harjaya Iswahyudi',
                'email'        => 'harjayaiswahyudi@students.undip.ac.id',
                'password'     => '$2y$10$fnY.V0eJ5tzmwmNvQnI2/.XsqjoAg4eaV/uqG08tRkWfL01W8hF9W'
            ],
            [
                'nim'          => '24060146786546',
                'nama'         => 'Ophelia Laksmiwati',
                'email'        => 'ophelialaksmiwati@students.undip.ac.id',
                'password'     => '$2y$10$4VUFDf0H/O0G5dHQ.UsLCurmvv2fhOgt.8ujb2OlJPqqd52QzJg/i'
            ],
        ];

        $this->db->table('mahasiswa')->insertBatch($data);
    }
}
