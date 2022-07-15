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
            'allDataUserVerifikator' => $this->ModelAdminSKUserManagement->allDataUserVerifikator(),
            'allDataStaffDosen' => $this->ModelAdminSKUserManagement->allDataStaffDosen(),
            // 'allDataAksesProposalOrmawa' => $this->ModelAdminSKUserManagement->allDataAksesProposalOrmawa(),
            // 'allDataUnitTugas' => $this->ModelAdminSKUserManagement->allDataUnitTugas(),
            // 'allDataStaffDosen' => $this->ModelAdminSKUserManagement->allDataStaffDosen(),
            // 'allDataMahasiswaOrmawa' => $this->ModelAdminSKUserManagement->allDataMahasiswaOrmawa(),
            'isi'    => 'admin/sk/usermanagement'
        ];
        return view('layouts/admin-wrapper', $data);
    }

    public function addAksesUserOperator()
    {
        $data = [
            'staffdosen_id' => $this->request->getPost('selectStaffdosen'),
            'sk_dekan_jenis_op_id' => $this->request->getPost('jenisOperator'),
        ];
        $this->ModelAdminSKUserManagement->add($data);
        session()->setFlashdata('sukses', 'Tambah Akses SK User Operator Berhasil dilakukan !!');
        return redirect()->to(base_url('AdminSKUserManagement'));
    }

    public function deleteAksesUserOperator($id_sk_dekan_user_op)
    {
        $data = [
            'id_sk_dekan_user_op' => $id_sk_dekan_user_op,
        ];
        $this->ModelAdminSKUserManagement->delete_data($data);
        session()->setFlashdata('sukses', 'Hapus Akses SK User Operator Berhasil dilakukan !!');
        return redirect()->to(base_url('AdminSKUserManagement'));
    }

    public function editAksesUserOperator($id_sk_dekan_user_op)
    {
        $data = [
            'id_sk_dekan_user_op' => $id_sk_dekan_user_op,
            'sk_dekan_jenis_op_id' => $this->request->getPost('jenisOperator'),
        ];
        $this->ModelAdminSKUserManagement->edit($data);
        session()->setFlashdata('sukses', 'Edit Akses SK User Operator Berhasil dilakukan !!');
        return redirect()->to(base_url('AdminSKUserManagement'));
    }

    public function addAksesUserVerifikator()
    {
        $data = [
            'staffdosen_id' => $this->request->getPost('selectStaffdosen'),
            'sk_dekan_jenis_verifikator_id' => $this->request->getPost('jenisVerifikator'),
        ];
        $this->ModelAdminSKUserManagement->addVerifikator($data);
        session()->setFlashdata('sukses', 'Tambah Akses SK User Verifikator Berhasil dilakukan !!');
        return redirect()->to(base_url('AdminSKUserManagement'));
    }

    public function deleteAksesUserVerifikator($id_sk_dekan_user_verifikator)
    {
        $data = [
            'id_sk_dekan_user_verifikator' => $id_sk_dekan_user_verifikator,
        ];
        $this->ModelAdminSKUserManagement->delete_dataVerifikator($data);
        session()->setFlashdata('sukses', 'Hapus Akses SK User Verifikator Berhasil dilakukan !!');
        return redirect()->to(base_url('AdminSKUserManagement'));
    }

    public function editAksesUserVerifikator($id_sk_dekan_user_verifikator)
    {
        $data = [
            'id_sk_dekan_user_verifikator' => $id_sk_dekan_user_verifikator,
            'sk_dekan_jenis_verifikator_id' => $this->request->getPost('jenisVerifikator'),
        ];
        $this->ModelAdminSKUserManagement->editVerifikator($data);
        session()->setFlashdata('sukses', 'Edit Akses SK User Verifikator Berhasil dilakukan !!');
        return redirect()->to(base_url('AdminSKUserManagement'));
    }

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
