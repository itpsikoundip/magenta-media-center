<?php

namespace App\Controllers\Admin\Fitur\Proposal;

use App\Controllers\BaseController;
use App\Models\Admin\Fitur\Proposal\ModelAdminProposalUserManagement;

class ControllerAdminProposalUserManagement extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelAdminProposalUserManagement = new ModelAdminProposalUserManagement();
    }

    public function index()
    {
        $data = [
            'title' => 'Akses Proposal',
            'allDataUser' => $this->ModelAdminProposalUserManagement->allData(),
            'allDataAksesProposalOrmawa' => $this->ModelAdminProposalUserManagement->allDataAksesProposalOrmawa(),
            'allDataUnitTugas' => $this->ModelAdminProposalUserManagement->allDataUnitTugas(),
            'allDataStaffDosen' => $this->ModelAdminProposalUserManagement->allDataStaffDosen(),
            'allDataMahasiswaOrmawa' => $this->ModelAdminProposalUserManagement->allDataMahasiswaOrmawa(),
            'isi'    => 'admin/fitur/proposal/usermanagement'
        ];
        return view('layouts/admin-wrapper', $data);
    }

    public function addAksesStaffDosen()
    {
        $data = [
            'staffdosen_id' => $this->request->getPost('selectStaffdosen'),
            'unittugas_id' => $this->request->getPost('selectUnitTugas'),
        ];
        $this->ModelAdminProposalUserManagement->add($data);
        session()->setFlashdata('sukses', 'Tambah Akses Berhasil dilakukan !!');
        return redirect()->to(base_url('admin/fitur/proposal/usermanagement'));
    }

    public function deleteAksesStaffDosen($id_user_proposal_staffdosen)
    {
        $data = [
            'id_user_proposal_staffdosen' => $id_user_proposal_staffdosen,
        ];
        $this->ModelAdminProposalUserManagement->delete_data($data);
        session()->setFlashdata('sukses', 'Hapus Akses Berhasil dilakukan !!');
        return redirect()->to(base_url('admin/fitur/proposal/usermanagement'));
    }

    public function editAksesStaffDosen($id_user_proposal_staffdosen)
    {
        $data = [
            'id_user_proposal_staffdosen' => $id_user_proposal_staffdosen,
            'unittugas_id' => $this->request->getPost('selectUnitTugas'),
        ];
        $this->ModelAdminProposalUserManagement->edit($data);
        session()->setFlashdata('sukses', 'Edit Data Berhasil dilakukan !!');
        return redirect()->to(base_url('admin/fitur/proposal/usermanagement'));
    }

    public function addAksesMahasiswa()
    {
        $data = [
            'mahasiswaormawa_id' => $this->request->getPost('selectMahasiswaOrmawa'),
        ];
        $this->ModelAdminProposalUserManagement->addmhs($data);
        session()->setFlashdata('sukses', 'Tambah Akses Berhasil dilakukan !!');
        return redirect()->to(base_url('admin/fitur/proposal/usermanagement'));
    }

    public function deleteAksesMahasiswa($id_user_proposal_ormawa)
    {
        $data = [
            'id_user_proposal_ormawa' => $id_user_proposal_ormawa,
        ];
        $this->ModelAdminProposalUserManagement->delete_datamhs($data);
        session()->setFlashdata('sukses', 'Hapus Akses Berhasil dilakukan !!');
        return redirect()->to(base_url('admin/fitur/proposal/usermanagement'));
    }
}
