<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSKDekanVerifikator extends Model
{
    public function detailVerifikator()
    {
        return $this->db->table('sk_dekan_user_verifikator')
            ->where('staffdosen_id', session()->get('id'))
            ->join('sk_dekan_jenis_verifikator', 'sk_dekan_jenis_verifikator.id_sk_dekan_jenis_verifikator = sk_dekan_user_verifikator.sk_dekan_jenis_verifikator_id')
            ->get()->getRowArray();
    }

    public function dataSKDekanSiapVerif()
    {
        return $this->db->table('sk_dekan')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = sk_dekan.pengaju_id')
            ->orderBy('created_at', 'ASC')
            ->get()->getResultArray();
    }

    public function detailSKDekan($id_sk_dekan)
    {
        return $this->db->table('sk_dekan')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = sk_dekan.pengaju_id')
            ->where('id_sk_dekan', $id_sk_dekan)
            ->get()->getResultArray();
    }
    public function edit($data)
    {
        $this->db->table('sk_dekan')
            ->where('id_sk_dekan', $data['id_sk_dekan'])
            ->update($data);
    }
}
