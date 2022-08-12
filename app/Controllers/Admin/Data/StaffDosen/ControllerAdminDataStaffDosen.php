<?php

namespace App\Controllers\Admin\Data\StaffDosen;

use App\Controllers\BaseController;
use App\Models\Admin\Data\StaffDosen\ModelAdminDataStaffDosen;

// Controller Admin
class ControllerAdminDataStaffDosen extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelAdminDataStaffDosen = new ModelAdminDataStaffDosen();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Staff & Dosen',
            'dataStaffDosen' => $this->ModelAdminDataStaffDosen->allData(),
            'isi'    => 'admin/data/staffdosen/index'
        ];
        return view('layouts/admin-wrapper', $data);
    }
}
