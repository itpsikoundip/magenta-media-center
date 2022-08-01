<?php

namespace App\Models\Admin\Fitur\Proposal;

use CodeIgniter\Model;

class ModelAdminProposalData extends Model
{
    public function allData()
    {
        return $this->db->table('proposal_data')
            ->join('ormawa', 'ormawa.id = proposal_data.organisasi_lembaga')
            ->get()->getResultArray();
    }

    public function detailProposal($id_propo)
    {
        return $this->db->table('proposal_data')
            ->where('id_propo', $id_propo)
            ->get()->getRowArray();
    }

    public function detailProposalNoteAkademik($id_propo)
    {
        return $this->db->table('proposal_data')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = proposal_data.akademik_user')
            ->where('id_propo', $id_propo)
            ->get()->getResultArray();
    }

    public function detailProposalNoteSumda($id_propo)
    {
        return $this->db->table('proposal_data')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = proposal_data.sumberdaya_user')
            ->where('id_propo', $id_propo)
            ->get()->getResultArray();
    }

    public function detailProposalNoteTataUsaha($id_propo)
    {
        return $this->db->table('proposal_data')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = proposal_data.tatausaha_user')
            ->where('id_propo', $id_propo)
            ->get()->getResultArray();
    }
    public function detailProposalNoteKaprodiS1($id_propo)
    {
        return $this->db->table('proposal_data')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = proposal_data.kaprodis1_user')
            ->where('id_propo', $id_propo)
            ->get()->getResultArray();
    }
    public function detailProposalNoteKaprodiS2($id_propo)
    {
        return $this->db->table('proposal_data')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = proposal_data.kaprodis2_user')
            ->where('id_propo', $id_propo)
            ->get()->getResultArray();
    }
    public function detailProposalNoteWadekAkem($id_propo)
    {
        return $this->db->table('proposal_data')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = proposal_data.wadekakem_user')
            ->where('id_propo', $id_propo)
            ->get()->getResultArray();
    }
    public function detailProposalNoteWadekSumda($id_propo)
    {
        return $this->db->table('proposal_data')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = proposal_data.wadeksumda_user')
            ->where('id_propo', $id_propo)
            ->get()->getResultArray();
    }
    public function detailProposalNoteDekan($id_propo)
    {
        return $this->db->table('proposal_data')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = proposal_data.dekan_user')
            ->where('id_propo', $id_propo)
            ->get()->getResultArray();
    }
}
