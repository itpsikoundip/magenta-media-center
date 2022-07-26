<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSKDekan extends Model
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
    public function dataSKDekanPengaju()
    {
        return $this->db->table('sk_dekan')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = sk_dekan.pengaju_id')
            ->where('pengaju_id', session()->get('id'))
            ->orderBy('created_at', 'ASC')
            ->get()->getResultArray();
    }

    public function add($data)
    {
        $this->db->table('sk_dekan')->insert($data);
    }

    public function detailSKDekan($id_sk_dekan)
    {
        return $this->db->table('sk_dekan')
            ->where('id_sk_dekan', $id_sk_dekan)
            ->get()->getRowArray();
    }

    public function edit($data)
    {
        $this->db->table('sk_dekan')
            ->where('id_sk_dekan', $data['id_sk_dekan'])
            ->update($data);
    }

    public function uploadFileSKDekan($data)
    {
        $this->db->table('sk_dekan')
            ->where('id_sk_dekan', $data['id_sk_dekan'])
            ->update($data);
    }
}
