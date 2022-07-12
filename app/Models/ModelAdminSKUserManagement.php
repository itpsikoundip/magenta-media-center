<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdminSKUserManagement extends Model
{
    public function allDataUserOp()
    {
        return $this->db->table('sk_dekan_user_op')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = sk_dekan_user_op.id_sk_dekan_user_op')
            ->join('sk_dekan_jenis_op', 'sk_dekan_jenis_op.id_sk_dekan_jenis_op = sk_dekan_user_op.sk_dekan_jenis_op_id')
            ->get()->getResultArray();
    }
}
