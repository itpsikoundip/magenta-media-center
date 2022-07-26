<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSK extends Model
{
    public function detailAksesUserOp()
    {
        return $this->db->table('sk_user_op')
            ->where('staffdosen_id', session()->get('id'))
            ->get()->getRowArray();
    }

    public function detailAksesUserVerifikator()
    {
        return $this->db->table('sk_user_verifikator')
            ->where('staffdosen_id', session()->get('id'))
            ->get()->getRowArray();
    }
}
