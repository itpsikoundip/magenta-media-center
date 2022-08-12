<?php

namespace App\Models\Admin\Data\Mahasiswa;

use CodeIgniter\Model;

class ModelAdminDataMahasiswa extends Model
{
    public function allData()
    {
        return $this->db->table('mahasiswa')
            ->get()->getResultArray();
    }
}
