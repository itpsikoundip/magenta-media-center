<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSKDekanVerifikator extends Model
{
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
}
