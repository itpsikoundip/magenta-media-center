<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelProposalJenis extends Model
{
    public function allData()
    {
        return $this->db->table('proposal_jenis')
            ->get()->getResultArray();
    }

    public function add($data)
    {
        $this->db->table('proposal_jenis')->insert($data);
    }

    public function detailProposal($id_jenis)
    {
        return $this->db->table('proposal_jenis')
            ->where('id_jenis', $id_jenis)
            ->get()->getResultArray();
    }
}
