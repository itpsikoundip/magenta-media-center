<?php

namespace App\Models\SK;

use CodeIgniter\Model;

class ModelOperatorSKRektor extends Model
{
    public function detailAksesUserOp()
    {
        return $this->db->table('sk_user_op')
            ->join('sk_jenis_op', 'sk_jenis_op.id_sk_jenis_op = sk_user_op.sk_jenis_op_id')
            ->where('staffdosen_id', session()->get('id'))
            ->get()->getRowArray();
    }

    public function add($data)
    {
        $this->db->table('sk_rektor')->insert($data);
    }

    public function dataSKRektorPengajuMenungguKonfirmasi()
    {
        return $this->db->table('sk_rektor')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = sk_rektor.pengaju_id')
            ->where('pengaju_id', session()->get('id'))
            ->where('dekan_status !=', 3)
            ->orderBy('created_at', 'ASC')
            ->get()->getResultArray();
    }

    public function dataSKRektorPengajuSemuaSK()
    {
        return $this->db->table('sk_rektor')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = sk_rektor.pengaju_id')
            ->where('pengaju_id', session()->get('id'))
            ->orderBy('created_at', 'ASC')
            ->get()->getResultArray();
    }

    public function detailSKRektor($id_sk_rektor)
    {
        return $this->db->table('sk_rektor')
            ->where('id_sk_rektor', $id_sk_rektor)
            ->get()->getRowArray();
    }

    public function detailSKRektorNoteSVAkademik($id_sk_rektor)
    {
        return $this->db->table('sk_rektor')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = sk_rektor.sk_akem_user')
            ->where('id_sk_rektor', $id_sk_rektor)
            ->get()->getResultArray();
    }

    public function detailSKRektorNoteSVSumda($id_sk_rektor)
    {
        return $this->db->table('sk_rektor')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = sk_rektor.sv_sumda_user')
            ->where('id_sk_rektor', $id_sk_rektor)
            ->get()->getResultArray();
    }

    public function detailSKRektorNoteTataUsaha($id_sk_rektor)
    {
        return $this->db->table('sk_rektor')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = sk_rektor.manager_tu_user')
            ->where('id_sk_rektor', $id_sk_rektor)
            ->get()->getResultArray();
    }
    public function detailSKRektorNoteWadekAkem($id_sk_rektor)
    {
        return $this->db->table('sk_rektor')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = sk_rektor.wadek_akem_user')
            ->where('id_sk_rektor', $id_sk_rektor)
            ->get()->getResultArray();
    }
    public function detailSKRektorNoteWadekSumda($id_sk_rektor)
    {
        return $this->db->table('sk_rektor')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = sk_rektor.wadek_sumda_user')
            ->where('id_sk_rektor', $id_sk_rektor)
            ->get()->getResultArray();
    }
    public function detailSKRektorNoteDekan($id_sk_rektor)
    {
        return $this->db->table('sk_rektor')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = sk_rektor.dekan_user')
            ->where('id_sk_rektor', $id_sk_rektor)
            ->get()->getResultArray();
    }
    public function uploadFileSKRektor($data)
    {
        $this->db->table('sk_rektor')
            ->where('id_sk_rektor', $data['id_sk_rektor'])
            ->update($data);
    }

    public function edit($data)
    {
        $this->db->table('sk_rektor')
            ->where('id_sk_rektor', $data['id_sk_rektor'])
            ->update($data);
    }
}
