<?php

namespace App\Controllers;

use App\Models\ModelUserStaffDosen;

// Controller Admin
class UserStaffDosen extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelUserStaffDosen = new ModelUserStaffDosen();
    }

    public function index()
    {
        $data = [
            'title' => 'User Management Staff & Dosen',
            'dataUserStaffDosen' => $this->ModelUserStaffDosen->allData(),
            'allDataStaffDosen' => $this->ModelUserStaffDosen->allDataStaffDosen(),
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
        ];
        $this->ModelUserStaffDosen->add($data);
        session()->setFlashdata('sukses', 'Tambah User Berhasil dilakukan !!');
        return redirect()->to(base_url('UserStaffDosen'));
    }

    public function delete($id_userstaffdosen)
    {
        $data = [
            'id_userstaffdosen' => $id_userstaffdosen,
        ];
        $this->ModelUserStaffDosen->delete_data($data);
        session()->setFlashdata('sukses', 'Hapus Akses Berhasil dilakukan !!');
        return redirect()->to(base_url('UserStaffDosen'));
    }

    public function editData($id_userstaffdosen)
    {
        $data = [
            'id_userstaffdosen' => $id_userstaffdosen,
            'proposal' => $this->request->getPost('proposal'),
            'survey' => $this->request->getPost('survey'),
            'helpdesk' => $this->request->getPost('helpdesk'),
        ];
        $this->ModelUserStaffDosen->edit($data);
        session()->setFlashdata('sukses', 'Edit Data Berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('UserStaffDosen'));
    }

    public function editDataPass($id_userstaffdosen)
    {
        $data = [
            'id_userstaffdosen' => $id_userstaffdosen,
            'password' => $this->request->getPost('password'),
        ];
        $this->ModelUserStaffDosen->edit($data);
        session()->setFlashdata('sukses', 'Edit Password Berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('UserStaffDosen'));
    }
}
