<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelProposals extends Model
{
    // Proposal Staus 0 = Draft
    public function allDataStatus0()
    {
        return $this->db->table('proposal_data')
            ->join('proposal_jenis', 'proposal_jenis.id_jenis = proposal_data.jenis_propo')
            ->where('status_propo', '0')
            ->countAllResults();
    }

    // Proposal Staus 1 = Proses
    public function allDataStatus1()
    {
        return $this->db->table('proposal_data')
            ->join('proposal_jenis', 'proposal_jenis.id_jenis = proposal_data.jenis_propo')
            ->where('status_propo', '1')
            ->countAllResults();
    }

    // Proposal Staus 2 = Ditolak
    public function allDataStatus2()
    {
        return $this->db->table('proposal_data')
            ->join('proposal_jenis', 'proposal_jenis.id_jenis = proposal_data.jenis_propo')
            ->where('status_propo', '2')
            ->countAllResults();
    }

    // Proposal Staus 3 = Diterima
    public function allDataStatus3()
    {
        return $this->db->table('proposal_data')
            ->join('proposal_jenis', 'proposal_jenis.id_jenis = proposal_data.jenis_propo')
            ->where('status_propo', '3')
            ->countAllResults();
    }

    // Proposal Meunggu Persetujuan by Session
    public function allDataPosisi()
    {
        return $this->db->table('proposal_data')
            ->join('proposal_jenis', 'proposal_jenis.id_jenis = proposal_data.jenis_propo')
            ->where('posisi_propo', '2')
            ->countAllResults();
    }

    // Proposal Menunggu Persetujuan by Session
    public function allDataMenungguPersetujuanSession()
    {
        return $this->db->table('proposal_data')
            ->join('proposal_jenis', 'proposal_jenis.id_jenis = proposal_data.jenis_propo')
            ->where('posisi_propo', '2')
            ->get()->getResultArray();
    }

    public function detailProposal($id_propo)
    {
        return $this->db->table('proposal_data')
            ->join('proposal_jenis', 'proposal_jenis.id_jenis = proposal_data.jenis_propo')
            ->where('id_propo', $id_propo)
            ->get()->getResultArray();
    }
}
