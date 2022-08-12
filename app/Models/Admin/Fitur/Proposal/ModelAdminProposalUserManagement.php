<?php

namespace App\Models\Admin\Fitur\Proposal;

use CodeIgniter\Model;

class ModelAdminProposalUserManagement extends Model
{
    public function allData()
    {
        return $this->db->table('proposal_user_staffdosen')
            ->join('data_staffdosen', 'data_staffdosen.id_staffdosen = proposal_user_staffdosen.staffdosen_id')
            ->join('proposal_unittugas', 'proposal_unittugas.id_unittugas = proposal_user_staffdosen.unittugas_id')
            ->get()->getResultArray();
    }

    public function allDataUnitTugas()
    {
        return $this->db->table('proposal_unittugas')
            ->get()->getResultArray();
    }

    public function allDataStaffDosen()
    {
        return $this->db->table('data_staffdosen')
            ->join('user_staffdosen', 'user_staffdosen.staffdosen_id = data_staffdosen.id_staffdosen')
            ->where('proposal', '1')
            ->get()->getResultArray();
    }

    public function add($data)
    {
        $this->db->table('proposal_user_staffdosen')->insert($data);
    }

    public function delete_data($data)
    {
        $this->db->table('proposal_user_staffdosen')
            ->where('id_user_proposal_staffdosen', $data['id_user_proposal_staffdosen'])
            ->delete($data);
    }

    public function edit($data)
    {
        $this->db->table('proposal_user_staffdosen')
            ->where('id_user_proposal_staffdosen', $data['id_user_proposal_staffdosen'])
            ->update($data);
    }

    public function allDataAksesProposalOrmawa()
    {
        return $this->db->table('proposal_user_ormawa')
            ->join('mahasiswa_ormawa', 'mahasiswa_ormawa.id = proposal_user_ormawa.mahasiswaormawa_id')
            ->join('mahasiswa', 'mahasiswa.nim = mahasiswa_ormawa.mahasiswa_id')
            ->join('ormawa', 'ormawa.id = mahasiswa_ormawa.ormawa_id')
            ->get()->getResultArray();
    }

    public function allDataMahasiswaOrmawa()
    {
        return $this->db->table('mahasiswa_ormawa')
            ->join('mahasiswa', 'mahasiswa.nim = mahasiswa_ormawa.mahasiswa_id')
            ->join('ormawa', 'ormawa.id = mahasiswa_ormawa.ormawa_id')
            ->get()->getResultArray();
    }

    public function addmhs($data)
    {
        $this->db->table('proposal_user_ormawa')->insert($data);
    }

    public function delete_datamhs($data)
    {
        $this->db->table('proposal_user_ormawa')
            ->where('id_user_proposal_ormawa', $data['id_user_proposal_ormawa'])
            ->delete($data);
    }
}
