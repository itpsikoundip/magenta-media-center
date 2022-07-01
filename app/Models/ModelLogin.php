<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLogin extends Model
{
    public function LoginAdmin($username, $password)
    {
        return $this->db->table('user_admin')
            ->where([
                'username' => $username,
                'password' => $password
            ])->get()->getRowArray();
    }

    public function loginLvlMhs($email, $password)
    {
        return $this->db->table('mahasiswa')
            ->where([
                'email' => $email,
                'password' => $password
            ])->get()->getRowArray();
    }

    public function loginLvlOrmawa($email, $password)
    {
        return $this->db->table('mahasiswa_ormawa')
            ->join('mahasiswa', 'mahasiswa.nim = mahasiswa_ormawa.mahasiswa_id')
            ->where([
                'email' => $email,
                'password' => $password
            ])->get()->getRowArray();
    }

    public function loginLvlStaffDosen($email, $password)
    {
        return $this->db->table('user_staffdosen')
            ->join('tbl_staffdosen', 'tbl_staffdosen.id_staffdosen = user_staffdosen.staffdosen_id')
            ->join('tbl_jabatan_departemen', 'tbl_jabatan_departemen.id_jabatandepartemen = tbl_staffdosen.jabatan_departemen_id')
            ->where([
                'email' => $email,
                'password' => $password
            ])->get()->getRowArray();
    }
}
