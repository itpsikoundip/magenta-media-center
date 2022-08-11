<?php

namespace App\Models\Admin\Fitur\SK;

use CodeIgniter\Model;

class ModelAdminSKDataSKDekan extends Model
{
    public function allDataSKDekan()
    {
        return $this->db->table('sk_dekan')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = sk_dekan.pengaju_id')
            ->join('sk_jenis_op', 'sk_jenis_op.id_sk_jenis_op = sk_dekan.jenis_op_id')
            ->get()->getResultArray();
    }

    public function detailSKDekan($id_sk_dekan)
    {
        return $this->db->table('sk_dekan')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = sk_dekan.pengaju_id')
            ->join('sk_jenis_op', 'sk_jenis_op.id_sk_jenis_op = sk_dekan.jenis_op_id')
            ->where('id_sk_dekan', $id_sk_dekan)
            ->get()->getRowArray();
    }

    public function detailSKDekanNoteSVAkademik($id_sk_dekan)
    {
        return $this->db->table('sk_dekan')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = sk_dekan.sk_akem_user')
            ->where('id_sk_dekan', $id_sk_dekan)
            ->get()->getResultArray();
    }

    public function detailSKDekanNoteSVSumda($id_sk_dekan)
    {
        return $this->db->table('sk_dekan')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = sk_dekan.sv_sumda_user')
            ->where('id_sk_dekan', $id_sk_dekan)
            ->get()->getResultArray();
    }

    public function detailSKDekanNoteTataUsaha($id_sk_dekan)
    {
        return $this->db->table('sk_dekan')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = sk_dekan.manager_tu_user')
            ->where('id_sk_dekan', $id_sk_dekan)
            ->get()->getResultArray();
    }
    public function detailSKDekanNoteWadekAkem($id_sk_dekan)
    {
        return $this->db->table('sk_dekan')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = sk_dekan.wadek_akem_user')
            ->where('id_sk_dekan', $id_sk_dekan)
            ->get()->getResultArray();
    }
    public function detailSKDekanNoteWadekSumda($id_sk_dekan)
    {
        return $this->db->table('sk_dekan')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = sk_dekan.wadek_sumda_user')
            ->where('id_sk_dekan', $id_sk_dekan)
            ->get()->getResultArray();
    }
    public function detailSKDekanNoteDekan($id_sk_dekan)
    {
        return $this->db->table('sk_dekan')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = sk_dekan.dekan_user')
            ->where('id_sk_dekan', $id_sk_dekan)
            ->get()->getResultArray();
    }
}
