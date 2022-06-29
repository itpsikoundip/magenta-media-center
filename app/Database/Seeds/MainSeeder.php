<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MainSeeder extends Seeder
{
    public function run()
    {
        //
        $this->call('DosenSeeder');
        $this->call('IndikatorSeeder');
        $this->call('JenisProposalSeeder');
        $this->call('KependSeeder');
        $this->call('RefStaffdosenDepartemen');
        $this->call('RefStaffdosenJenispegawai');
        $this->call('RefStaffdosenUnit');
        $this->call('StaffDosen');
        
    }
}