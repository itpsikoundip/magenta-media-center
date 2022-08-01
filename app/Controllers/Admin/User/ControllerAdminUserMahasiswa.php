<?php

namespace App\Controllers\Admin\User;

use App\Controllers\BaseController;
use App\Models\Admin\User\ModelAdminUserMahasiswa;

// Controller Admin
class ControllerAdminUserMahasiswa extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelAdminUserMahasiswa = new ModelAdminUserMahasiswa();
    }

    public function index()
    {
        $data = [
            'title' => 'User Management Mahasiswa',
            'allData' => $this->ModelAdminUserMahasiswa->allData(),
            'isi'    => 'admin/user/mahasiswa/index'
        ];
        return view('layouts/admin-wrapper', $data);
    }

    public function addUser()
    {
        $data = [
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password')
        ];
        $this->ModelAdminUserMahasiswa->add($data);
        session()->setFlashdata('sukses', 'Tambah User Berhasil dilakukan !!');
        return redirect()->to(base_url('admin/user/mahasiswa'));
    }

    public function delete($nim)
    {
        $data = [
            'nim' => $nim,
        ];
        $this->ModelAdminUserMahasiswa->delete_data($data);
        session()->setFlashdata('sukses', 'Hapus Akses Berhasil dilakukan !!');
        return redirect()->to(base_url('admin/user/mahasiswa'));
    }

    public function editDataPass($nim)
    {
        $data = [
            'nim' => $nim,
            'password' => $this->request->getPost('password'),
        ];
        $this->ModelAdminUserMahasiswa->edit($data);
        session()->setFlashdata('sukses', 'Edit Password Berhasil dilakukan dan disimpan !!');
        return redirect()->to(base_url('admin/user/mahasiswa'));
    }
}
