<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSKDekan extends Model
{
    // public function allData()
    // {
    //     return $this->db->table('proposal_data')
    //         ->join('proposal_jenis', 'proposal_jenis.id_jenis = proposal_data.jenis_propo')
    //         ->where('organisasi_lembaga', session()->get('idormawa'))
    //         ->get()->getResultArray();
    // }
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
}
