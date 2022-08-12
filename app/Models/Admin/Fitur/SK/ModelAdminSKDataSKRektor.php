<?php

namespace App\Models\Admin\Fitur\SK;

use CodeIgniter\Model;

class ModelAdminSKDataSKRektor extends Model
{
    public function allDataSKRektor()
    {
        return $this->db->table('sk_rektor')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = sk_rektor.pengaju_id')
            ->join('sk_jenis_op', 'sk_jenis_op.id_sk_jenis_op = sk_rektor.jenis_op_id')
            ->get()->getResultArray();
    }

    public function detailSKRektor($id_sk_rektor)
    {
        return $this->db->table('sk_rektor')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = sk_rektor.pengaju_id')
            ->join('sk_jenis_op', 'sk_jenis_op.id_sk_jenis_op = sk_rektor.jenis_op_id')
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
}
