<?php

namespace App\Models\Auth;

use CodeIgniter\Model;

class ModelLogin extends Model
{
    public function loginLvlAdmin($email, $password)
    {
        return $this->db->table('user_admin')
            ->where([
                'email' => $email,
                'password' => $password
            ])->get()->getRowArray();
    }

    public function loginLvlMhs($nim, $password)
    {
        return $this->db->table('mahasiswa')
            ->where([
                'nim' => $nim,
                'password' => $password
            ])->get()->getRowArray();
    }

    public function loginLvlOrmawa($nim, $password)
    {
        return $this->db->table('mahasiswa_ormawa')
            ->join('mahasiswa', 'mahasiswa.nim = mahasiswa_ormawa.mahasiswa_id')
            ->join('ormawa', 'ormawa.id = mahasiswa_ormawa.ormawa_id')
            ->where([
                'nim' => $nim,
                'password' => $password
            ])->get()->getRowArray();
    }

    public function loginLvlStaffDosen($username, $password)
    {
        return $this->db->table('user_staffdosen')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = user_staffdosen.staffdosen_id')
            ->join('ref_stafdosen_unit', 'ref_stafdosen_unit.id_unit = data_staffdosen.unit_id')
            ->where([
                'nip' => $username,
                'password' => $password
            ])->get()->getRowArray();
    }
}
