<?php

namespace App\Models\Admin\User;

use CodeIgniter\Model;

class ModelAdminUserMahasiswa extends Model
{
    public function allData()
    {
        return $this->db->table('mahasiswa')
            ->get()->getResultArray();
    }

    public function add($data)
    {
        $this->db->table('mahasiswa')->insert($data);
    }

    public function delete_data($data)
    {
        $this->db->table('mahasiswa')
            ->where('nim', $data['nim'])
            ->delete($data);
    }

    public function edit($data)
    {
        $this->db->table('mahasiswa')
            ->where('nim', $data['nim'])
            ->update($data);
    }
}
