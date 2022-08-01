<?php

namespace App\Controllers\Admin\Data\Mahasiswa;

use App\Controllers\BaseController;
use App\Models\Admin\Data\Mahasiswa\ModelAdminDataMahasiswa;

// Controller Admin
class ControllerAdminDataMahasiswa extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelAdminDataMahasiswa = new ModelAdminDataMahasiswa();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Mahasiswa',
            'dataMahasiswa' => $this->ModelAdminDataMahasiswa->allData(),
            'isi'    => 'admin/data/mahasiswa/index'
        ];
        return view('layouts/admin-wrapper', $data);
    }
}
