<?php

namespace App\Models\Proposal;

use CodeIgniter\Model;

class ModelProposalOrmawa extends Model
{
    // Proposal Semua Status
    public function allData()
    {
        return $this->db->table('proposal_data')
            ->join('proposal_jenis', 'proposal_jenis.id_jenis = proposal_data.jenis_propo')
            ->where('organisasi_lembaga', session()->get('idormawa'))
            ->get()->getResultArray();
    }

    // Proposal Semua Status
    public function allDataOrmawa()
    {
        return $this->db->table('ormawa')
            ->get()->getResultArray();
    }

    // Proposal Staus 0 = Draft
    public function allDataStatus0()
    {
        return $this->db->table('proposal_data')
            ->join('proposal_jenis', 'proposal_jenis.id_jenis = proposal_data.jenis_propo')
            // ->where('status_propo', '0')
            ->countAllResults();
    }

    // Proposal Staus 1 = Proses
    public function allDataStatus1()
    {
        return $this->db->table('proposal_data')
            ->join('proposal_jenis', 'proposal_jenis.id_jenis = proposal_data.jenis_propo')
            // ->where('status_propo', '1')
            ->countAllResults();
    }

    // Proposal Staus 2 = Ditolak
    public function allDataStatus2()
    {
        return $this->db->table('proposal_data')
            ->join('proposal_jenis', 'proposal_jenis.id_jenis = proposal_data.jenis_propo')
            // ->where('status_propo', '2')
            ->countAllResults();
    }

    // Proposal Staus 3 = Diterima
    public function allDataStatus3()
    {
        return $this->db->table('proposal_data')
            ->join('proposal_jenis', 'proposal_jenis.id_jenis = proposal_data.jenis_propo')
            // ->where('status_propo', '3')
            ->countAllResults();
    }

    public function add($data)
    {
        $this->db->table('proposal_data')->insert($data);
    }

    public function detailProposal($id_propo)
    {
        return $this->db->table('proposal_data')
            ->join('proposal_jenis', 'proposal_jenis.id_jenis = proposal_data.jenis_propo')
            ->where('id_propo', $id_propo)
            ->get()->getResultArray();
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

    public function delete_data($data)
    {
        $this->db->table('proposal_data')
            ->where('id_propo', $data['id_propo'])
            ->delete($data);
    }

    public function uploadFileProposal($data)
    {
        $this->db->table('proposal_data')
            ->where('id_propo', $data['id_propo'])
            ->update($data);
    }

    public function edit($data)
    {
        $this->db->table('proposal_data')
            ->where('id_propo', $data['id_propo'])
            ->update($data);
    }
}
