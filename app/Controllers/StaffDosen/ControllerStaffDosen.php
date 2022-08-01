<?php

namespace App\Controllers\StaffDosen;

use App\Controllers\BaseController;

class ControllerStaffDosen extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard Staff & Dosen',
            'isi'    => 'staffdosen/index'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }
}
