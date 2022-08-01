<?php

namespace App\Controllers\StaffDosen\Profil;

use App\Controllers\BaseController;
use App\Models\Profil\ModelProfilStaffDosen;

class ControllerStaffDosenProfil extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelProfilStaffDosen = new ModelProfilStaffDosen();
    }

    public function index()
    {
        $data = [
            'detailStaffDosen' => $this->ModelProfilStaffDosen->detailStaffDosen(),
            'isi'    => 'staffdosen/profil/index'
        ];
        return view('layouts/staffdosen-wrapper', $data);
    }
}
