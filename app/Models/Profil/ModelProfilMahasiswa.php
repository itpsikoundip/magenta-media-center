<?php

namespace App\Models\Profil;

use CodeIgniter\Model;

class ModelProfilMahasiswa extends Model
{
    public function detailMahasiswa()
    {
        return $this->db->table('mahasiswa')
            ->where('nim', session()->get('nim'))
            ->get()->getRowArray();
    }
}
