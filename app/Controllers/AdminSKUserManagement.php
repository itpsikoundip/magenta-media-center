<?php

namespace App\Controllers;

use App\Models\ModelAdminSKUserManagement;

class AdminSKUserManagement extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelAdminSKUserManagement = new ModelAdminSKUserManagement();
    }

    public function index()
    {
        $data = [
            'title' => 'Akses SK',
            'allDataUserOp' => $this->ModelAdminSKUserManagement->allDataUserOp(),
            // 'allDataAksesProposalOrmawa' => $this->ModelAdminSKUserManagement->allDataAksesProposalOrmawa(),
            // 'allDataUnitTugas' => $this->ModelAdminSKUserManagement->allDataUnitTugas(),
            // 'allDataStaffDosen' => $this->ModelAdminSKUserManagement->allDataStaffDosen(),
            // 'allDataMahasiswaOrmawa' => $this->ModelAdminSKUserManagement->allDataMahasiswaOrmawa(),
            'isi'    => 'admin/sk/usermanagement'
        ];
        return view('layouts/admin-wrapper', $data);
    }

    // public function addAksesStaffDosen()
    // {
    //     $data = [
    //         'staffdosen_id' => $this->request->getPost('selectStaffdosen'),
    //         'unittugas_id' => $this->request->getPost('selectUnitTugas'),
    //     ];
    //     $this->ModelAdminSKUserManagement->add($data);
    //     session()->setFlashdata('sukses', 'Tambah Akses Berhasil dilakukan !!');
    //     return redirect()->to(base_url('AdminProposalUserManagement'));
    // }

    // public function deleteAksesStaffDosen($id_user_proposal_staffdosen)
    // {
    //     $data = [
    //         'id_user_proposal_staffdosen' => $id_user_proposal_staffdosen,
    //     ];
    //     $this->ModelAdminSKUserManagement->delete_data($data);
    //     session()->setFlashdata('sukses', 'Hapus Akses Berhasil dilakukan !!');
    //     return redirect()->to(base_url('AdminProposalUserManagement'));
    // }

    // public function editAksesStaffDosen($id_user_proposal_staffdosen)
    // {
    //     $data = [
    //         'id_user_proposal_staffdosen' => $id_user_proposal_staffdosen,
    //         'unittugas_id' => $this->request->getPost('selectUnitTugas'),
    //     ];
    //     $this->ModelAdminSKUserManagement->edit($data);
    //     session()->setFlashdata('sukses', 'Edit Data Berhasil dilakukan !!');
    //     return redirect()->to(base_url('AdminProposalUserManagement'));
    // }

    // public function addAksesMahasiswa()
    // {
    //     $data = [
    //         'mahasiswaormawa_id' => $this->request->getPost('selectMahasiswaOrmawa'),
    //     ];
    //     $this->ModelAdminSKUserManagement->addmhs($data);
    //     session()->setFlashdata('sukses', 'Tambah Akses Berhasil dilakukan !!');
    //     return redirect()->to(base_url('AdminProposalUserManagement'));
    // }

    // public function deleteAksesMahasiswa($id_user_proposal_ormawa)
    // {
    //     $data = [
    //         'id_user_proposal_ormawa' => $id_user_proposal_ormawa,
    //     ];
    //     $this->ModelAdminSKUserManagement->delete_datamhs($data);
    //     session()->setFlashdata('sukses', 'Hapus Akses Berhasil dilakukan !!');
    //     return redirect()->to(base_url('AdminProposalUserManagement'));
    // }
}
