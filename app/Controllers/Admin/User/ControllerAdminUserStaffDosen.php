<?php

namespace App\Controllers\Admin\User;

use App\Controllers\BaseController;
use App\Models\Admin\User\ModelAdminUserStaffDosen;

// Controller Admin
class ControllerAdminUserStaffDosen extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelAdminUserStaffDosen = new ModelAdminUserStaffDosen();
    }

    public function index()
    {
        $data = [
            'title' => 'User Management Staff & Dosen',
            'dataUserStaffDosen' => $this->ModelAdminUserStaffDosen->allData(),
            'allDataStaffDosen' => $this->ModelAdminUserStaffDosen->allDataStaffDosen(),
            'isi'    => 'admin/user/staffdosen/index'
        ];
        return view('layouts/admin-wrapper', $data);
    }

    public function addUser()
    {
        $data = [
            'staffdosen_id' => $this->request->getPost('idStaffDosen'),
            'password' => $this->request->getPost('password'),
            'proposal' => $this->request->getPost('proposal'),
            'survey' => $this->request->getPost('survey'),
            'helpdesk' => $this->request->getPost('helpdesk'),
            'sk' => $this->request->getPost('sk'),
        ];
        $this->ModelAdminUserStaffDosen->add($data);
        session()->setFlashdata('sukses', 'Tambah User Berhasil dilakukan !!');
        return redirect()->to(base_url('admin/user/staffdosen'));
    }

    public function delete($id_userstaffdosen)
    {
        $data = [
            'id_userstaffdosen' => $id_userstaffdosen,
        ];
        $this->ModelAdminUserStaffDosen->delete_data($data);
        session()->setFlashdata('sukses', 'Hapus Akses Berhasil dilakukan !!');
        return redirect()->to(base_url('admin/user/staffdosen'));
    }

    public function editData($id_userstaffdosen)
    {
        $data = [
            'id_userstaffdosen' => $id_userstaffdosen,
            'proposal' => $this->request->getPost('proposal'),
            'survey' => $this->request->getPost('survey'),
            'helpdesk' => $this->request->getPost('helpdesk'),
            'sk' => $this->request->getPost('sk'),
        ];
        $this->ModelAdminUserStaffDosen->edit($data);
        session()->setFlashdata('sukses', 'Edit Data Berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('admin/user/staffdosen'));
    }

    public function editDataPass($id_userstaffdosen)
    {
        $data = [
            'id_userstaffdosen' => $id_userstaffdosen,
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
        ];
        $this->ModelAdminUserStaffDosen->edit($data);
        session()->setFlashdata('sukses', 'Edit Password Berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('admin/user/staffdosen'));
    }
}
