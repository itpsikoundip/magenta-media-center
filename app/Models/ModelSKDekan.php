<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSKDekan extends Model
{
    public function detailAksesUserOp()
    {
        return $this->db->table('sk_user_op')
            ->join('sk_jenis_op', 'sk_jenis_op.id_sk_jenis_op = sk_user_op.sk_jenis_op_id')
            ->where('staffdosen_id', session()->get('id'))
            ->get()->getRowArray();
    }
    public function detailAksesUserVerifikator()
    {
        return $this->db->table('sk_user_verifikator')
            ->where('staffdosen_id', session()->get('id'))
            ->get()->getRowArray();
    }
    public function dataSKDekanPengajuMenungguKonfirmasi()
    {
        return $this->db->table('sk_dekan')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = sk_dekan.pengaju_id')
            ->where('pengaju_id', session()->get('id'))
            ->where('dekan_status !=', 3)
            ->orderBy('created_at', 'ASC')
            ->get()->getResultArray();
    }
    public function dataSKDekanPengajuSemuaSK()
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
