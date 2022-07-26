<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSKDekanVerifikator extends Model
{
    public function detailVerifikator()
    {
        return $this->db->table('sk_user_verifikator')
            ->where('staffdosen_id', session()->get('id'))
            ->join('sk_jenis_verifikator', 'sk_jenis_verifikator.id_sk_jenis_verifikator = sk_user_verifikator.sk_jenis_verifikator_id')
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




    // SV AKEM
    public function allDataSKDekanSVAkem()
    {
        return $this->db->table('sk_dekan')
            ->where('sk_akem_status', '1')
            ->orwhere('sk_akem_status', '2')
            ->orwhere('sk_akem_status', '3')
            ->get()->getResultArray();
    }
    public function allDataSKDekanSVAkemSiapVerif()
    {
        return $this->db->table('sk_dekan')
            ->where('sk_akem_status', '0')
            ->get()->getResultArray();
    }
    // SV SUMDA
    public function allDataSKDekanSVSumda()
    {
        return $this->db->table('sk_dekan')
            ->where('sv_sumda_status', '1')
            ->orwhere('sv_sumda_status', '2')
            ->orwhere('sv_sumda_status', '3')
            ->get()->getResultArray();
    }
    public function allDataSKDekanSVSumdaSiapVerif()
    {
        return $this->db->table('sk_dekan')
            ->where('sk_akem_status', '3')
            ->where('sv_sumda_status', '0')
            ->get()->getResultArray();
    }
    // MANAGER TU
    public function allDataSKDekanManagerTU()
    {
        return $this->db->table('sk_dekan')
            ->where('manager_tu_status', '1')
            ->orwhere('manager_tu_status', '2')
            ->orwhere('manager_tu_status', '3')
            ->get()->getResultArray();
    }
    public function allDataSKDekanManagerTUSiapVerif()
    {
        return $this->db->table('sk_dekan')
            ->where('sv_sumda_status', '3')
            ->where('manager_tu_status', '0')
            ->get()->getResultArray();
    }
    // WADEK AKEM
    public function allDataSKDekanWadekAkem()
    {
        return $this->db->table('sk_dekan')
            ->where('wadek_akem_status', '1')
            ->orwhere('wadek_akem_status', '2')
            ->orwhere('wadek_akem_status', '3')
            ->get()->getResultArray();
    }
    public function allDataSKDekanWadekAkemSiapVerif()
    {
        return $this->db->table('sk_dekan')
            ->where('manager_tu_status', '3')
            ->where('wadek_akem_status', '0')
            ->get()->getResultArray();
    }
    // WADEK SUMDA
    public function allDataSKDekanWadekSumda()
    {
        return $this->db->table('sk_dekan')
            ->where('wadek_akem_status', '1')
            ->orwhere('wadek_akem_status', '2')
            ->orwhere('wadek_akem_status', '3')
            ->get()->getResultArray();
    }
    public function allDataSKDekanWadekSumdaSiapVerif()
    {
        return $this->db->table('sk_dekan')
            ->where('wadek_akem_status', '3')
            ->where('wadek_akem_status', '0')
            ->get()->getResultArray();
    }
    // DEKAN
    public function allDataSKDekanDekan()
    {
        return $this->db->table('sk_dekan')
            ->where('dekan_status', '1')
            ->orwhere('dekan_status', '2')
            ->orwhere('dekan_status', '3')
            ->get()->getResultArray();
    }
    public function allDataSKDekanDekanSiapVerif()
    {
        return $this->db->table('sk_dekan')
            ->where('wadek_akem_status', '3')
            ->where('dekan_status', '0')
            ->get()->getResultArray();
    }
}
