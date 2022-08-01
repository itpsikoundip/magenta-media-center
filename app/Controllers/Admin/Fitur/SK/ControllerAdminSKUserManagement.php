<?php

namespace App\Controllers\Admin\Fitur\SK;

use App\Controllers\BaseController;
use App\Models\Admin\Fitur\SK\ModelAdminSKUserManagement;

class ControllerAdminSKUserManagement extends BaseController
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
            'isi'    => 'admin/fitur/sk/usermanagement'
        ];
        return view('layouts/admin-wrapper', $data);
    }

    // Akses User Operator

    public function addAksesUserOperator()
    {
        $data = [
            'staffdosen_id' => $this->request->getPost('selectStaffdosen'),
            'sk_jenis_op_id' => $this->request->getPost('jenisOperator'),
        ];
        $this->ModelAdminSKUserManagement->add($data);
        session()->setFlashdata('sukses', 'Tambah Akses SK User Operator Berhasil dilakukan !!');
        return redirect()->to(base_url('admin/fitur/sk/usermanagement'));
    }

    public function deleteAksesUserOperator($id_sk_user_op)
    {
        $data = [
            'id_sk_user_op' => $id_sk_user_op,
        ];
        $this->ModelAdminSKUserManagement->delete_data($data);
        session()->setFlashdata('sukses', 'Hapus Akses SK User Operator Berhasil dilakukan !!');
        return redirect()->to(base_url('admin/fitur/sk/usermanagement'));
    }

    public function editAksesUserOperator($id_sk_user_op)
    {
        $data = [
            'id_sk_user_op' => $id_sk_user_op,
            'sk_jenis_op_id' => $this->request->getPost('jenisOperator'),
        ];
        $this->ModelAdminSKUserManagement->edit($data);
        session()->setFlashdata('sukses', 'Edit Akses SK User Operator Berhasil dilakukan !!');
        return redirect()->to(base_url('admin/fitur/sk/usermanagement'));
    }

    // Akses User Veritifkator

    public function addAksesUserVerifikator()
    {
        $data = [
            'staffdosen_id' => $this->request->getPost('selectStaffdosen'),
            'sk_jenis_verifikator_id' => $this->request->getPost('jenisVerifikator'),
        ];
        $this->ModelAdminSKUserManagement->addVerifikator($data);
        session()->setFlashdata('sukses', 'Tambah Akses SK User Verifikator Berhasil dilakukan !!');
        return redirect()->to(base_url('admin/fitur/sk/usermanagement'));
    }

    public function deleteAksesUserVerifikator($id_sk_user_verifikator)
    {
        $data = [
            'id_sk_user_verifikator' => $id_sk_user_verifikator,
        ];
        $this->ModelAdminSKUserManagement->delete_dataVerifikator($data);
        session()->setFlashdata('sukses', 'Hapus Akses SK User Verifikator Berhasil dilakukan !!');
        return redirect()->to(base_url('admin/fitur/sk/usermanagement'));
    }

    public function editAksesUserVerifikator($id_sk_user_verifikator)
    {
        $data = [
            'id_sk_user_verifikator' => $id_sk_user_verifikator,
            'sk_jenis_verifikator_id' => $this->request->getPost('jenisVerifikator'),
        ];
        $this->ModelAdminSKUserManagement->editVerifikator($data);
        session()->setFlashdata('sukses', 'Edit Akses SK User Verifikator Berhasil dilakukan !!');
        return redirect()->to(base_url('admin/fitur/sk/usermanagement'));
    }
}
