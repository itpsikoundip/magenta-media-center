<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ModelAdmin extends Model
{
    public function jmlAkunMahasiswa()
    {
        return $this->db->table('mahasiswa')
            ->where('status', 1)
            ->countAllResults();
    }

    public function jmlAkunMahasiswaOrmawa()
    {
        return $this->db->table('mahasiswa_ormawa')
            ->countAllResults();
    }

    public function jmlAkunStaffDosen()
    {
        return $this->db->table('user_staffdosen')
            ->countAllResults();
    }
}
