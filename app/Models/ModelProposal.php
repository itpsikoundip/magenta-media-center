<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelProposal extends Model
{
    // Proposal Semua Status
    public function allData()
    {
        return $this->db->table('proposal_data')
            ->join('proposal_jenis', 'proposal_jenis.id_jenis = proposal_data.jenis_propo')
            ->get()->getResultArray();
    }

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
