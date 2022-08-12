<?php

namespace App\Controllers\Admin\User;

use App\Controllers\BaseController;
use App\Models\Admin\User\ModelAdminUserOrmawa;

// Controller Admin
class ControllerAdminUserOrmawa extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelAdminUserOrmawa = new ModelAdminUserOrmawa();
    }

    public function index()
    {
        $data = [
            'title' => 'User Management Ormawa',
            'allData' => $this->ModelAdminUserOrmawa->allData(),
            'allDataMahasiswa' => $this->ModelAdminUserOrmawa->allDataMahasiswa(),
            'allDataOrmawa' => $this->ModelAdminUserOrmawa->allDataOrmawa(),
            'isi'    => 'admin/user/ormawa/index'
        ];
        return view('layouts/admin-wrapper', $data);
    }

    public function addUser()
    {
        $data = [
            'mahasiswa_id' => $this->request->getPost('idMahasiswa'),
            'ormawa_id' => $this->request->getPost('idOrmawa'),
        ];
        $this->ModelAdminUserOrmawa->add($data);
        session()->setFlashdata('sukses', 'Tambah User Berhasil dilakukan !!');
        return redirect()->to(base_url('admin/user/ormawa'));
    }

    public function delete($id)
    {
        $data = [
            'id' => $id,
        ];
        $this->ModelAdminUserOrmawa->delete_data($data);
        session()->setFlashdata('sukses', 'Hapus Akses Berhasil dilakukan !!');
        return redirect()->to(base_url('admin/user/ormawa'));
    }
}
