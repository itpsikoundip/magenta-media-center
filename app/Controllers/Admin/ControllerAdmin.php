<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\ModelAdmin;

class ControllerAdmin extends BaseController
{
    public function __construct()
    {
        $this->ModelAdmin = new ModelAdmin();
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard Admin',
            'jmlAkunMahasiswa' => $this->ModelAdmin->jmlAkunMahasiswa(),
            'jmlAkunMahasiswaOrmawa' => $this->ModelAdmin->jmlAkunMahasiswaOrmawa(),
            'jmlAkunStaffDosen' => $this->ModelAdmin->jmlAkunStaffDosen(),
            'isi'    => 'admin/index'
        ];
        return view('layouts/admin-wrapper', $data);
    }
}
