<?php

namespace App\Models\SK;

use CodeIgniter\Model;

class ModelVerifikatorSKRektor extends Model
{
    public function detailVerifikator()
    {
        return $this->db->table('sk_user_verifikator')
            ->where('staffdosen_id', session()->get('id'))
            ->join('sk_jenis_verifikator', 'sk_jenis_verifikator.id_sk_jenis_verifikator = sk_user_verifikator.sk_jenis_verifikator_id')
            ->get()->getRowArray();
    }

    public function dataSKRektorSiapVerif()
    {
        return $this->db->table('sk_rektor')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = sk_rektor.pengaju_id')
            ->orderBy('created_at', 'ASC')
            ->get()->getResultArray();
    }

    public function detailSKRektorArray($id_sk_rektor)
    {
        return $this->db->table('sk_rektor')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = sk_rektor.pengaju_id')
            ->where('id_sk_rektor', $id_sk_rektor)
            ->get()->getResultArray();
    }
    public function edit($data)
    {
        $this->db->table('sk_rektor')
            ->where('id_sk_rektor', $data['id_sk_rektor'])
            ->update($data);
    }

    public function detailSKRektor($id_sk_rektor)
    {
        return $this->db->table('sk_rektor')
            ->where('id_sk_rektor', $id_sk_rektor)
            ->get()->getRowArray();
    }



    // SV AKEM
    public function allDataSKRektorSVAkem()
    {
        return $this->db->table('sk_rektor')
            ->where('sk_akem_status', '1')
            ->orwhere('sk_akem_status', '2')
            ->orwhere('sk_akem_status', '3')
            ->get()->getResultArray();
    }
    public function allDataSKRektorSVAkemSiapVerif()
    {
        return $this->db->table('sk_rektor')
            ->where('sk_akem_status', '0')
            ->get()->getResultArray();
    }
    // SV SUMDA
    public function allDataSKRektorSVSumda()
    {
        return $this->db->table('sk_rektor')
            ->where('sv_sumda_status', '1')
            ->orwhere('sv_sumda_status', '2')
            ->orwhere('sv_sumda_status', '3')
            ->get()->getResultArray();
    }
    public function allDataSKRektorSVSumdaSiapVerif()
    {
        return $this->db->table('sk_rektor')
            ->where('sk_akem_status', '3')
            ->where('sv_sumda_status', '0')
            ->get()->getResultArray();
    }
    // MANAGER TU
    public function allDataSKRektorManagerTU()
    {
        return $this->db->table('sk_rektor')
            ->where('manager_tu_status', '1')
            ->orwhere('manager_tu_status', '2')
            ->orwhere('manager_tu_status', '3')
            ->get()->getResultArray();
    }
    public function allDataSKRektorManagerTUSiapVerif()
    {
        return $this->db->table('sk_rektor')
            ->where('sv_sumda_status', '3')
            ->where('manager_tu_status', '0')
            ->get()->getResultArray();
    }
    // WADEK AKEM
    public function allDataSKRektorWadekAkem()
    {
        return $this->db->table('sk_rektor')
            ->where('wadek_akem_status', '1')
            ->orwhere('wadek_akem_status', '2')
            ->orwhere('wadek_akem_status', '3')
            ->get()->getResultArray();
    }
    public function allDataSKRektorWadekAkemSiapVerif()
    {
        return $this->db->table('sk_rektor')
            ->where('manager_tu_status', '3')
            ->where('wadek_akem_status', '0')
            ->get()->getResultArray();
    }
    // WADEK SUMDA
    public function allDataSKRektorWadekSumda()
    {
        return $this->db->table('sk_rektor')
            ->where('wadek_sumda_status', '1')
            ->orwhere('wadek_sumda_status', '2')
            ->orwhere('wadek_sumda_status', '3')
            ->get()->getResultArray();
    }
    public function allDataSKRektorWadekSumdaSiapVerif()
    {
        return $this->db->table('sk_rektor')
            ->where('wadek_akem_status', '3')
            ->where('wadek_sumda_status', '0')
            ->get()->getResultArray();
    }
    // DEKAN
    public function allDataSKRektorDekan()
    {
        return $this->db->table('sk_rektor')
            ->where('dekan_status', '1')
            ->orwhere('dekan_status', '2')
            ->orwhere('dekan_status', '3')
            ->get()->getResultArray();
    }
    public function allDataSKRektorDekanSiapVerif()
    {
        return $this->db->table('sk_rektor')
            ->where('wadek_akem_status', '3')
            ->where('dekan_status', '0')
            ->get()->getResultArray();
    }
}
