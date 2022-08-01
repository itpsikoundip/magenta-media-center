<?php

namespace App\Models\Admin\Fitur\SK;

use CodeIgniter\Model;

class ModelAdminSKUserManagement extends Model
{
    public function allDataUserOp()
    {
        return $this->db->table('sk_user_op')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = sk_user_op.staffdosen_id')
            ->join('sk_jenis_op', 'sk_jenis_op.id_sk_jenis_op = sk_user_op.sk_jenis_op_id')
            ->get()->getResultArray();
    }

    public function allDataStaffDosen()
    {
        return $this->db->table('data_staffdosen')
            ->join('user_staffdosen', 'user_staffdosen.staffdosen_id = data_staffdosen.id_staffdosen')
            ->where('sk', '1')
            ->get()->getResultArray();
    }

    public function add($data)
    {
        $this->db->table('sk_user_op')->insert($data);
    }

    public function delete_data($data)
    {
        $this->db->table('sk_user_op')
            ->where('id_sk_user_op', $data['id_sk_user_op'])
            ->delete($data);
    }

    public function edit($data)
    {
        $this->db->table('sk_user_op')
            ->where('id_sk_user_op', $data['id_sk_user_op'])
            ->update($data);
    }

    public function allDataUserVerifikator()
    {
        return $this->db->table('sk_user_verifikator')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = sk_user_verifikator.staffdosen_id')
            ->join('sk_jenis_verifikator', 'sk_jenis_verifikator.id_sk_jenis_verifikator = sk_user_verifikator.sk_jenis_verifikator_id')
            ->get()->getResultArray();
    }

    public function addVerifikator($data)
    {
        $this->db->table('sk_user_verifikator')->insert($data);
    }

    public function delete_dataVerifikator($data)
    {
        $this->db->table('sk_user_verifikator')
            ->where('id_sk_user_verifikator', $data['id_sk_user_verifikator'])
            ->delete($data);
    }

    public function editVerifikator($data)
    {
        $this->db->table('sk_user_verifikator')
            ->where('id_sk_user_verifikator', $data['id_sk_user_verifikator'])
            ->update($data);
    }
}
