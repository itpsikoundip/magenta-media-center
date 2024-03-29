<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MainSeeder extends Seeder
{
    public function run()
    {
        //
        $this->call('DosenSeeder');
        $this->call('JenisProposalSeeder');
        $this->call('KependSeeder');
        $this->call('RefStaffdosenDepartemen');
        $this->call('RefStaffdosenJenispegawai');
        $this->call('RefStaffdosenStatus');
        $this->call('RefStaffdosenUnit');
        $this->call('RefStaffdosenUnit2');
        $this->call('StaffdosenSeeder');
        $this->call('MahasiswaSeeder');
        $this->call('OrmawaSeeder');
        $this->call('MahasiswaOrmawaSeeder');
        $this->call('TopikSeeder');
        $this->call('UserStaffDosen');
        $this->call('ProposalUnitTugas');
        $this->call('ProposalUserOrmawa');
        $this->call('ProposalUserStaffDosen');
        $this->call('SKJenisOp');
        $this->call('SKJenisVerifikator');
        $this->call('SKUserOp');
        $this->call('SKUserVerifikator');
        $this->call('SKDekan');
        $this->call('RuanganSeeder');
        $this->call('SKRektor');
        $this->call('UserAdmin');
    }
}
