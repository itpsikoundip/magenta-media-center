<?php

namespace App\Models\Admin\User;

use CodeIgniter\Model;

class ModelAdminUserOrmawa extends Model
{
    public function allData()
    {
        return $this->db->table('mahasiswa_ormawa')
            ->join('mahasiswa', 'mahasiswa.nim = mahasiswa_ormawa.mahasiswa_id')
            ->join('ormawa', 'ormawa.id = mahasiswa_ormawa.ormawa_id')
            ->get()->getResultArray();
    }
    public function allDataMahasiswa()
    {
        return $this->db->table('mahasiswa')
            ->get()->getResultArray();
    }
    public function allDataOrmawa()
    {
        return $this->db->table('ormawa')
            ->get()->getResultArray();
    }
    public function add($data)
    {
        $this->db->table('mahasiswa_ormawa')->insert($data);
    }
    public function delete_data($data)
    {
        $this->db->table('mahasiswa_ormawa')
            ->where('id', $data['id'])
            ->delete($data);
    }
}
