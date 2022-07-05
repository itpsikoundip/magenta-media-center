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
}
